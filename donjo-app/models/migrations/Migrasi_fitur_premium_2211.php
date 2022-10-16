<?php

/*
 *
 * File ini bagian dari:
 *
 * OpenSID
 *
 * Sistem informasi desa sumber terbuka untuk memajukan desa
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * Hak Cipta 2016 - 2022 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package   OpenSID
 * @author    Tim Pengembang OpenDesa
 * @copyright Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright Hak Cipta 2016 - 2022 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license   http://www.gnu.org/licenses/gpl.html GPL V3
 * @link      https://github.com/OpenSID/OpenSID
 *
 */

use App\Libraries\TinyMCE;
use App\Models\KeuanganManualRinci;
use App\Models\SettingAplikasi;

defined('BASEPATH') || exit('No direct script access allowed');

class Migrasi_fitur_premium_2211 extends MY_model
{
    public function up()
    {
        $hasil = true;

        // Jalankan migrasi sebelumnya
        $hasil = $hasil && $this->jalankan_migrasi('migrasi_fitur_premium_2210');
        $hasil = $hasil && $this->jalankan_migrasi('migrasi_surat_tinymce');
        $hasil = $hasil && $this->migrasi_2022100671($hasil);
        $hasil = $hasil && $this->migrasi_2022100851($hasil);
        $hasil = $hasil && $this->tambah_modul_gawai_layanan($hasil);

        return $hasil && $this->migrasi_2022101371($hasil);
    }

    protected function migrasi_2022100671($hasil)
    {
        $setting = SettingAplikasi::where('id', '!=', 177)->where('key', 'footer_surat_tte')->first();
        if ($setting) {
            $setting->delete();
            $hasil = $hasil && $this->tambah_setting([
                'id'         => 177,
                'key'        => 'footer_surat_tte',
                'value'      => TinyMCE::FOOTER_TTE,
                'keterangan' => 'Footer Surat TTE',
                'kategori'   => 'format_surat',
            ]);
        }

        return $hasil;
    }

    public function migrasi_2022100851($hasil)
    {
        // ganti jenis data untuk realisasi dan rencana keuangan
        if ($this->db->field_exists('Nilai_Anggaran', 'keuangan_manual_rinci')) {
            foreach (KeuanganManualRinci::all() as $key => $value) {
                $value->Nilai_Anggaran = (float) $value->Nilai_Anggaran;
                $value->save();
            }
            $fields = [
                'Nilai_Anggaran' => [
                    'type'       => 'decimal',
                    'constraint' => '65,2',
                    'null'       => false,
                ],
            ];

            $hasil = $hasil && $this->dbforge->modify_column('keuangan_manual_rinci', $fields);
        }

        if ($this->db->field_exists('Nilai_Realisasi', 'keuangan_manual_rinci')) {
            foreach (KeuanganManualRinci::all() as $key => $value) {
                $value->Nilai_Realisasi = (float) $value->Nilai_Realisasi;
                $value->save();
            }
            $fields = [
                'Nilai_Realisasi' => [
                    'type'       => 'decimal',
                    'constraint' => '65,2',
                    'null'       => false,
                ],
            ];

            $hasil = $hasil && $this->dbforge->modify_column('keuangan_manual_rinci', $fields);
        }

        return $hasil;
    }

    protected function tambah_modul_gawai_layanan($hasil)
    {
        if (! $this->db->field_exists('tipe', 'anjungan')) {
            $fields = [
                'tipe' => [
                    'type'       => 'TINYINT',
                    'default'    => 1, // 1 => anjungan, 2 => gawai layanan
                    'constraint' => 3,
                ],
            ];
            $hasil = $hasil && $this->dbforge->add_column('anjungan', $fields);
        }

        return $hasil && $this->tambah_modul([
            'id'         => 351,
            'modul'      => 'Gawai Layanan',
            'url'        => 'gawai_layanan',
            'aktif'      => 1,
            'ikon'       => 'fa-desktop',
            'urut'       => 3,
            'level'      => 2,
            'hidden'     => 0,
            'ikon_kecil' => 'fa-desktop',
            'parent'     => 14,
        ]);
    }

    protected function migrasi_2022101371($hasil)
    {
        $hasil && $this->tambah_setting([
            'key'        => 'anjungan_teks_berjalan',
            'value'      => '',
            'keterangan' => 'Pengaturan teks berjalan untuk anjungan',
            'kategori'   => 'anjungan',
        ]);

        return $hasil;
    }
}
