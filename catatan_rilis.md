#### [22.05-pasca]

Di rilis ini, versi 22.05-pasca, menyediakan [untuk_diisi]. Rilis ini juga berisi penambahan fitur dan perbaikan lain yang diminta Komunitas SID.

Terima kasih pada [untuk_diisi] yang terus berkontribusi.

#### Penambahan Fitur

#### Perbaikan BUG
1. [#4510](https://github.com/OpenSID/OpenSID/issues/4510) Perbaiki cetak dokumen kesepakatan kerjasama desa.
2. [#4466](https://github.com/OpenSID/OpenSID/issues/4466) Perbaiki pencarian produk beserta halaman pada web lapak.
3. [#4435](https://github.com/OpenSID/OpenSID/issues/4435) Perbaiki daftar permohonan surat.
4. [#4531](https://github.com/OpenSID/OpenSID/issues/4531) Perbaiki tampilkan daftar rumah tangga sesuai statistik RTM.
5. Perbaiki statistik kependudukan berbasis rentang umur, yaitu Umur (Rentang), Umur (Kategori) dan Akta Kelahiran.
6. Perbaiki statistik kependudukan hubungan keluarga, untuk menangani kasus data yang belum diisi.
7. [#4530](https://github.com/OpenSID/OpenSID/issues/4530) Ubah data Akseptor KB yang tidak valid supaya statistik Akseptor KB tampil benar.
8. [#4530](https://github.com/OpenSID/OpenSID/issues/4532) Perbaiki link detail pembangunan pada halaman peta.
9. [#4502](https://github.com/OpenSID/OpenSID/issues/4502) Perbaiki status hubungan dalam keluarga untuk famili menjadi famili lain.
10. [#4514](https://github.com/OpenSID/OpenSID/issues/4514) Perbaiki dan sederhanakan tombol kemabli pada modul analisis.
11. [#4513](https://github.com/OpenSID/OpenSID/issues/4513) Jangan tampilkan aksi pecah kk untuk keluarga tidak aktif dengan anggota keluarga 0.
12. [#4498](https://github.com/OpenSID/OpenSID/issues/4498)  Hapus data analisis_parameter dengan responden 0 untuk tipe pertanyaan 3 dan 4.
13. [#4499](https://github.com/OpenSID/OpenSID/issues/4499) Perbaiki lampiran surat_ket_kelahiran (F-21.01).
14. Perbaiki format waktu (jam) pesan yang dikirimkan lewat telegram.
15. Perbaiki tampilan kelengkapan dokumen di layanan mandiri.
16. [#4538](https://github.com/OpenSID/OpenSID/issues/4538) Perbaiki error impor program bantuan untuk kasus template menggunakan format date untuk tanggal.
17. [#4535](https://github.com/OpenSID/OpenSID/issues/4535) Perbaiki NIK dan No KK Sementara pada Surat Permohonan Kartu Keluarga Baru.

#### Perubahan Teknis
1. Tambahkan define DESAPATH pada filemanager.
2. Perbaiki template dokumen kerjasama.
3. Perbaiki mengurut view yang bergantungan di backup database.
4. Sesuaikan impor data untuk mode demo.