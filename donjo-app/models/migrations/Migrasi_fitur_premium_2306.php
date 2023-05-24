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
 * Hak Cipta 2016 - 2023 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
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
 * @copyright Hak Cipta 2016 - 2023 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license   http://www.gnu.org/licenses/gpl.html GPL V3
 * @link      https://github.com/OpenSID/OpenSID
 *
 */

use App\Models\SettingAplikasi;
use Illuminate\Support\Facades\DB;

defined('BASEPATH') || exit('No direct script access allowed');

class Migrasi_fitur_premium_2306 extends MY_model
{
    public function up()
    {
        $hasil = true;

        // Jalankan migrasi sebelumnya
        $hasil = $hasil && $this->jalankan_migrasi('migrasi_fitur_premium_2305');
        $hasil = $hasil && $this->migrasi_tabel($hasil);
        $hasil = $hasil && $this->migrasi_data($hasil);

        return $hasil && true;
    }

    protected function migrasi_tabel($hasil)
    {
        return $hasil && $this->migrasi_2023052452($hasil);
    }

    // Migrasi perubahan data
    protected function migrasi_data($hasil)
    {
        // Migrasi berdasarkan config_id
        $config_id = DB::table('config')->pluck('id')->toArray();

        foreach ($config_id as $id) {
            $hasil = $hasil && $this->migrasi_2023052351($hasil, $id);
        }

        // Migrasi tanpa config_id
        return $hasil && $this->migrasi_2023052453($hasil);
    }

    protected function migrasi_2023052351($hasil, $id)
    {
        log_message('notice', __FUNCTION__);

        $setting = [
            'judul'      => 'Warna Tema',
            'key'        => 'warna_tema',
            'value'      => DB::table('setting_aplikasi')->where('config_id', $id)->where('key', 'warna_tema')->first()->value ?: config_item('warna_tema') ?: SettingAplikasi::WARNA_TEMA_DEFAULT,
            'keterangan' => 'Warna tema untuk halaman website',
            'jenis'      => 'color',
            'option'     => null,
            'attribute'  => null,
            'kategori'   => 'hidden',
        ];

        return $hasil && $this->tambah_setting($setting, $id);
    }

    protected function migrasi_2023052451($hasil)
    {
        if (! $this->db
            ->where('slug', 'klasfikasi-surat')
            ->where('modul', 'Klasfikasi Surat')
            ->get('setting_modul')
            ->result()) {
            return $hasil;
        }

        return $hasil && $this->ubah_modul(63, [
            'modul' => 'Klasifikasi Surat',
            'slug'  => 'klasifikasi-surat',
        ]);
    }

    protected function migrasi_2023052452($hasil)
    {
        // migrasi index log_penduduk
        $hasil = $hasil && $this->tambahIndeks('log_penduduk', 'config_id', 'INDEX');
        $hasil = $hasil && $this->tambahIndeks('log_penduduk', 'id_pend', 'INDEX');
        $hasil = $hasil && $this->tambahIndeks('log_penduduk', 'kode_peristiwa', 'INDEX');

        return $hasil && $this->tambahIndeks('log_penduduk', 'tgl_peristiwa', 'INDEX');
    }

    protected function migrasi_2023052453($hasil)
    {
        $result = $this->db
            ->select('id')
            ->where('parrent !=', 0)
            ->where('parrent not in (select id from kategori where parrent = 0)')
            ->get('kategori')
            ->result_array();

        if ($result) {
            $hasil = $hasil && $this->db->where_in('id', collect($result)->pluck('id')->all())->delete('kategori');
        }

        return $hasil;
    }
}
