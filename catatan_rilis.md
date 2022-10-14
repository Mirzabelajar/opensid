Di rilis ini, versi 22.04-premium-rev03 menyediakan [untuk diisi]. Rilis ini juga berisi penambahan fitur dan perbaikan lain yang diminta Komunitas SID.

Terima kasih pada [untuk diisi] yang terus berkontribusi.

#### Penambahan Fitur
1. 


#### Perbaikan BUG

1. [#5110](https://github.com/OpenSID/OpenSID/issues/5110) Perbaiki gagal tambah dan ubah pengguna yang tidak diperuntukkan untuk rekam kehadiran serta validasi kolom unik untuk email, username, dan pamong_id.
2. [#5109](https://github.com/OpenSID/OpenSID/issues/5109) Perbaiki gagal ekspor data rekapitulasi kehadiran.
3. [#5119](https://github.com/OpenSID/OpenSID/issues/5119) Perbaiki rekam kehadiran perangkat desa menggunakan ektp yang terdaftar pada data penduduk serta validasi kolom unik untuk tag_id_card_pamong (tweb_desa_pamong) dengan tag_id_card (tweb_penduduk).
4. [#5112](https://github.com/OpenSID/OpenSID/issues/5112) Sesuaikan notifikasi rekam kehadiran untuk kehadiran masuk dan keluar yang tidak sesuai.
5. [#5123](https://github.com/OpenSID/OpenSID/issues/5123) Perbaiki gagal ekspor excel data penduduk.
6. [#5128](https://github.com/OpenSID/OpenSID/issues/5128) Perbaiki statistik bpjs ketenagakerjaan.
7. [#4950](https://github.com/OpenSID/OpenSID/issues/4950) Perbaiki tampilan tombol impor pada menu rumah tangga di tampilan handphone.
8. [#4163](https://github.com/OpenSID/OpenSID/issues/4163) Perbaiki hasil ekspor lampiran f.101, f.15, f16 di tanggal pembuatan surat.
9. [#5050](https://github.com/OpenSID/OpenSID/issues/5050) Perbaiki tampilan tabel statistik pada halaman peta yang bertumpuk.
10. [#5118](https://github.com/OpenSID/OpenSID/issues/5118) Perbaiki perhitungan dan grafik APBDes pada Pelaksanaan Pembiayaan.
11. [#5042](https://github.com/OpenSID/OpenSID/issues/5042) Perbaiki laporan ulang meengenai info layanan.
12. [#5137](https://github.com/OpenSID/OpenSID/issues/5137) Perbaiki notifikasi baris gagal ketika impor penduduk tidak muncul.
13. [#5140](https://github.com/OpenSID/OpenSID/issues/5140) Perbaiki latar login mandiri gambar tidak berubah.
14. [#5122](https://github.com/OpenSID/OpenSID/issues/5122) Perbaiki unduh excel pembangunan berantakan.
15. [#5145](https://github.com/OpenSID/OpenSID/issues/5145) Perbaiki artikel yang di awali dengan angka akan di arahkan ke artikel lain.
16. [#5113](https://github.com/OpenSID/OpenSID/issues/5113) Perbaiki konfirmasi jika kehadiran kurang 1 menit.
17. [#5135](https://github.com/OpenSID/OpenSID/issues/5135) Perbaiki menu tidak terpilih saat melakukan ubah data.
18. [#5158](https://github.com/OpenSID/OpenSID/issues/5158) Perbaiki impor data program bantuan.
19. [#5164](https://github.com/OpenSID/OpenSID/issues/5164) Perbaiki form penduduk jika tanggal pindah masuk dan lapor melampaui hari penginputan.
20. [#5165](https://github.com/OpenSID/OpenSID/issues/5165) Perbaiki urutan tanggal pada info sistem logs.
21. [#5166](https://github.com/OpenSID/OpenSID/issues/5166) Perbaiki ejaan sinkronisasi.
22. [#5153](https://github.com/OpenSID/OpenSID/issues/5153) Perbaiki pengaturan hapus spasi pada input ip.
23. [#5163](https://github.com/OpenSID/OpenSID/issues/5163) Perbaiki database contoh data awal mengikuti standar.
24. [#5173](https://github.com/OpenSID/OpenSID/issues/5173) Perbaiki perhitungan laporan keuangan impor dan manual tidak konsisten.
25. [#5187](https://github.com/OpenSID/OpenSID/issues/5187) Perbaiki kosongkan DB, jam kerja pada modul kehadiran juga terhapus.
26. [#5189](https://github.com/OpenSID/OpenSID/issues/5189) Perbaiki nilai setting tidak tampil saat periksa database.
27. [#5174](https://github.com/OpenSID/OpenSID/issues/5174) Perbaiki hapus fitur sebaran data covid di peta web.
18. [#5175](https://github.com/OpenSID/OpenSID/issues/5175) Perbaiki hapus fitur covid provinsi di web.
19. [#5192](https://github.com/OpenSID/OpenSID/issues/5192) Perbaiki notifikasi saat kembalikan ke pengaturan default server selalu error.
20. [#5181](https://github.com/OpenSID/OpenSID/issues/5181) Perbaiki sesi login gagal mengulangi waktu hitung tunggu untuk login kembali.
21. [#5183](https://github.com/OpenSID/OpenSID/issues/5183) Perbaiki notifikasi persetujuan penggunaan aplikasi OpenSID.
22. [#5194](https://github.com/OpenSID/OpenSID/issues/5194) Perbaiki error ketika klik bantuan pada layanan mandiri.
23. [#5106](https://github.com/OpenSID/OpenSID/issues/5106) Perbaiki deteksi MAC Address Gawai Kehadiran.
24. [#5197](https://github.com/OpenSID/OpenSID/issues/5197) Perbaiki tampilan produk lapak mandiri berantakan.

#### Perubahan Teknis

1. Update index.php
2. Sesuaikan notifikasi rilis untuk rilis resmi.
3. Perbaiki kesalahan penulisan domain berputar.
4. Perbaiki helper setting.
5. [#5010](https://github.com/OpenSID/OpenSID/pull/5010), [#5011](https://github.com/OpenSID/OpenSID/pull/5011) Update htaccess.txt
6. Perbaiki penulisan GitHub.
7. Hapus tabel tidak digunakan.
8. Perbaiki Local arbitrary file code execution.
9. Helper sebutan desa.
10. Perbaiki job dan kosongkan DB.
11. Perbaiki duplikasi penamaan fuction grup akses.
