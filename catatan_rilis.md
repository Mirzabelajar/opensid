Di rilis ini, versi 22.12 menyediakan modul hubung warga dan komunikasi antar desa dan kecamatan. Rilis ini juga berisi penambahan fitur dan perbaikan lain yang diminta Komunitas SID.

Terima kasih pada  totoprayogo1916 yang terus berkontribusi. Terima kasih pula pada eltociear dan  balongbesuk yang baru mulai berkontribusi.


#### Penambahan Fitur
1. [#5095](https://github.com/OpenSID/OpenSID/issues/5095) Tambahkan informasi data keluarga dengan No KK sementara.
2. [#5091](https://github.com/OpenSID/OpenSID/issues/5091) Tambahkan fitur bersihkan pada bantuan / daftar peserta bantuan.
3. [#5124](https://github.com/OpenSID/OpenSID/issues/5124) Tambahkan informasi ukuran file database dan folder desa.
4. [#4389](https://github.com/OpenSID/OpenSID/issues/4389) Tambahkan fitur disable tombol perbaharui Status IDM jika tersedia informasi data.
5. [#5131](https://github.com/OpenSID/OpenSID/issues/5131) Pisahkan halaman idm web dan admin.
6. [#4940](https://github.com/OpenSID/OpenSID/issues/4940) Pisahkan pengaturan tanggal data lengkap dan tanggal data lengkap aktif sesuai modul.
7. [#2600](https://github.com/OpenSID/OpenSID/issues/2600) Tambahkan data widget jam pelayanan desa.
8. [#5066](https://github.com/OpenSID/OpenSID/issues/5066) Tambahkan validasi penamaan surat.
9. [#5136](https://github.com/OpenSID/OpenSID/issues/5136) Tambahkan noindex pada halaman /periksa.
10. [#4956](https://github.com/OpenSID/OpenSID/issues/4956) Tambahkan tombol lihat dokumen pada Buku Agenda Surat Keluar.
11. [#4798](https://github.com/OpenSID/OpenSID/issues/4798) Tambahkan penyesuaian modul laporan rentan.
12. [#4979](https://github.com/OpenSID/OpenSID/issues/4979) File unduh kartu keluarga menggunakan format date dd-mm-yyyy.
13. [#4839](https://github.com/OpenSID/OpenSID/issues/4839) Tambahkan pengurutan data keluarga berdasarkan tanggal cetak.
14. [#4552](https://github.com/OpenSID/OpenSID/issues/4552) Tambahkan data lembaga ke halaman web.
15. [#5067](https://github.com/OpenSID/OpenSID/issues/5067) Sesuaikan tampilan informasi yang ada di home ke sidebar kanan.
16. [#4982](https://github.com/OpenSID/OpenSID/issues/4982) Sesuaikan panjang karakter pada kolom klasifikasi analisis.
17. [#4367](https://github.com/OpenSID/OpenSID/issues/4367) Sesuaikan menyimpan pendataan warga terkena covid yang bukan dari asal mudik.
18. [#712](https://github.com/OpenSID/OpenSID/issues/712) Tambahakan halaman pemerintah desa.
19. [#4481](https://github.com/OpenSID/OpenSID/issues/4481) Mekarkan modul SMS menjadi modul Hubung Warga.
20. [#310](https://github.com/OpenSID/OpenDK/issues/310) Tambahkan sinkronisasi profil desa OpenSID ke OpenDK.
21. [#218](https://github.com/OpenSID/OpenDK/issues/218) Sediakan kotak pesan untuk komunikasi dengan desa.


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
25. [#5207](https://github.com/OpenSID/OpenSID/issues/5207) Perbaiki gagal impor siskuedes (Error : Data too long for column 'Keterangan' tabel keuangan_ta_spj_sisa).
26. [#5170](https://github.com/OpenSID/OpenSID/issues/5170) Perbaiki tampilan informasi staf untuk absensi pada modul pengguna.
27. [#5198](https://github.com/OpenSID/OpenSID/issues/5198) Perbaiki gagal simpan pemudik non domisili pada modul siaga covid-19.
28. [#5212](https://github.com/OpenSID/OpenSID/issues/5212) Perbaiki kirim pesan ke OpenDK jika token kosong.
29. [#4883](https://github.com/OpenSID/OpenSID/issues/4883) Perbaiki tombol kembali pada arsip desa untuk dokumen penduduk.
30. [#5217](https://github.com/OpenSID/OpenSID/issues/5217) Perbaiki pengaturan aktif/nonaktifkan halaman kehadiran yang tidak berfungsi.
31. [#5214](https://github.com/OpenSID/OpenSID/issues/5214) Perbaiki daftar dokumen surat keterangan kematian yang tampil tidak sesuai.
32. [#5176](https://github.com/OpenSID/OpenSID/issues/5176) Perbaiki akta perkawinan dan tanggal menikah ikut terhapus ketika status status kawin diubah menjadi cerai hidup / cerai mati.
33. [#5202](https://github.com/OpenSID/OpenSID/issues/5202) Sembunyikan icon pesan OpenDK pada header jika modul dimatikan.
34. [#5224](https://github.com/OpenSID/OpenSID/issues/5224) Perbaiki hari kelahiran pada lampiran Surat Keterangan Kelahiran yang tampil tidak benar.
35. [#5219](https://github.com/OpenSID/OpenSID/issues/5219) Perbaiki daftar perangkat desa di kehadiran yang tidak tampil dengan benar.


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
12. Hapus menu login admin dan layanan mandiri pada contoh_data_awal.
13. Satukan helper underscore() dan ununderscore().
14. Perbaiki migrasi berulang tipe data kolom value dari varchar ke text.
15. Penyesuaian pengecekan rilis aplikasi OpenSID Premium dan Umum.
16. Penyesuaian repositori rilis premium dari berputar menjadi rilis-premium.
17. Lewati ganti passwod default untuk ENVIRONMENT Development.
18. Pindahkan versi kirim aplikasi ke layanan hanya jika melakukan migrasi.
19. Sesuaikan tampilan halaman home.
20. Sediakan tombol perbarui cache layanan pelanggan.
21. Sesuaikan sebutan desa pada modul identitas desa yang tidak sesuai.
22. #5237 Sederhanakan pemanggilan tracksid dengan menghapus token_opensid, gunakan token_pantau.
23. Perpanjang layanan.
24. #63 Batasi jalankan migrasi sesuai versi dan masa langganan.