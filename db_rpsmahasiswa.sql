-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 06:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rpsmahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `nik` varchar(225) NOT NULL,
  `full_name_dos` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `handphone` varchar(20) NOT NULL,
  `alamat_asal` varchar(128) NOT NULL,
  `kec_kab_prov_asal` varchar(128) NOT NULL,
  `kode_pos_asal` varchar(10) NOT NULL,
  `alamat_ting` varchar(128) NOT NULL,
  `kec_kab_prov_ting` varchar(128) NOT NULL,
  `kode_pos_ting` varchar(10) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `nik`, `full_name_dos`, `jenis_kelamin`, `agama`, `kewarganegaraan`, `tempat_lahir`, `tanggal_lahir`, `handphone`, `alamat_asal`, `kec_kab_prov_asal`, `kode_pos_asal`, `alamat_ting`, `kec_kab_prov_ting`, `kode_pos_ting`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Administrator RPS', 'administrator@gmail.com', 'default.jpg', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '$2y$10$BN5A1Xzq7Fho8Upch.GPW.TYNC1xT8Jfl4ONKeD9ohfWFK/ZFDEOa', 1, 1, '2024-01-03 03:56:42'),
(2, 'Chesa', 'chesa@gmail.com', 'default.jpg', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '$2y$10$zEzSL/yWTNVA6UefDEAqt.wdE/E2nlVDdNnIQ8Ibc66lWQOmLKEqS', 2, 1, '2024-01-03 03:59:20'),
(3, '', 'ahmad@gmail.com', 'default.jpg', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '$2y$10$YRoCraRV9JJYmxbnBuPVVOEw3iX4gnru8NzIVtA.NGMUqsYc45ts2', 3, 1, '2024-01-03 04:23:35'),
(4, 'Amel', 'amel@gmail.com', 'default.jpg', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '$2y$10$YKXoX5IcTPEtTHn65mxPC.mRc1oozUXxx2gKSE1ysRhFz9IOdhgIi', 3, 1, '2024-01-02 22:24:41'),
(5, 'Robet', 'robet@gmail.com', 'default.jpg', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '$2y$10$EUH4I1itrQxmILDX4zYe0erQiETxXEmmUulBv.kM.98q3VFq8ZsIi', 2, 1, '2024-01-03 04:44:30'),
(6, '', 'kepin@gmail.com', 'default.jpg', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '$2y$10$IoJZVrVGETpID3sMLMpHwuHbGyCHpt.C/1nRT9Cpln1v0HekWVwla', 2, 1, '2024-01-02 22:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 3),
(13, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_datarps`
--

CREATE TABLE `user_datarps` (
  `id_data` int(11) NOT NULL,
  `mata_kuliah` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `program_studi` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_matkul` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `semester` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlah_semester` varchar(225) NOT NULL,
  `nik_dos` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dosen_pengampu` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanda_tangan` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `presentase_nilai` varchar(225) NOT NULL,
  `bobot_sks` varchar(225) NOT NULL,
  `gambaran_umum` varchar(225) NOT NULL,
  `capaian_pembelajaran` varchar(225) NOT NULL,
  `prasyarat` varchar(225) NOT NULL,
  `pembelajaran` varchar(225) NOT NULL,
  `kemampuan_akhir` varchar(225) NOT NULL,
  `indikator` varchar(225) NOT NULL,
  `bahan_kajian` varchar(225) NOT NULL,
  `metode_pembelajaran` varchar(225) NOT NULL,
  `waktu_unit` varchar(225) NOT NULL,
  `metode_penilaian` varchar(225) NOT NULL,
  `bahan_ajar` varchar(225) NOT NULL,
  `tugas_aktivitas` varchar(225) NOT NULL,
  `kemampuan_akhir_tap` varchar(225) NOT NULL,
  `waktu_tap` varchar(225) NOT NULL,
  `bobot_tap` varchar(225) NOT NULL,
  `kriteria_penilaian` varchar(225) NOT NULL,
  `indikator_penilaian` varchar(225) NOT NULL,
  `referensi` varchar(225) NOT NULL,
  `minggu_pertemuan` varchar(225) NOT NULL,
  `kemampuan_akhir_rpp` varchar(225) NOT NULL,
  `indikator_rpp` varchar(225) NOT NULL,
  `topik_subtopik` varchar(225) NOT NULL,
  `strategi_pembelajaran` varchar(225) NOT NULL,
  `waktu_rpp` varchar(225) NOT NULL,
  `penilaian_rpp` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_datarps`
--

INSERT INTO `user_datarps` (`id_data`, `mata_kuliah`, `program_studi`, `deskripsi`, `kode_matkul`, `semester`, `jumlah_semester`, `nik_dos`, `dosen_pengampu`, `tanda_tangan`, `created`, `presentase_nilai`, `bobot_sks`, `gambaran_umum`, `capaian_pembelajaran`, `prasyarat`, `pembelajaran`, `kemampuan_akhir`, `indikator`, `bahan_kajian`, `metode_pembelajaran`, `waktu_unit`, `metode_penilaian`, `bahan_ajar`, `tugas_aktivitas`, `kemampuan_akhir_tap`, `waktu_tap`, `bobot_tap`, `kriteria_penilaian`, `indikator_penilaian`, `referensi`, `minggu_pertemuan`, `kemampuan_akhir_rpp`, `indikator_rpp`, `topik_subtopik`, `strategi_pembelajaran`, `waktu_rpp`, `penilaian_rpp`) VALUES
(1, 'Multimedia', 'D3 - Teknik Informatika', 'Pengetahuan tentang media digital, mengenal produk digital, dan peralatan dasar yang dibutuhkan dalam membuat produk digital diharapkan sudah dipahami oleh\r\nmahasiswa, ketika mengambil matakuliah ini, antara lain: Minat terha', 'DT081', 'Genap', '(4)', '190302457', 'Dwi Rahayu, M.Kom', '384-3843530_sign-muhammad-yamin-tanda-tangan-muhammad-yamin23.png', '2023-12-23 06:16:45', 'Presensi 10% <br>\nUjian Mid Semester 30 % <br>\nUjian Akhir Semester 40 % <br>\nTugas 20 %', '2 Praktikum', '• Capaian pembelajaran dalam matakuliah Multimedia ini terbagi menjadi 2. Untuk Hardskill, capaian yang diharapkan adalah mahasiswa mampu membuat sebuah\r\nproduk multimedia, dengan memanfaatkan software Adobe premiere, after e', '• Capaian matakuliah Hardskill : Mahasiswa mampu membuat produk multimedia, dengan memanfaatkan hardware dan software multimedia yang ada.\r\n\r\n• Capaian matakuliah Softskill : Mahasiswa mampu mempublikasikan dan mempresentasik', 'Pengetahuan tentang media digital, mengenal produk digital, dan peralatan dasar yang dibutuhkan dalam membuat produk digital diharapkan sudah dipahami oleh\r\nmahasiswa, ketika mengambil matakuliah ini, antara lain: Minat terha', 'Pengetahuan tentang media digital, mengenal produk digital, dan peralatan dasar yang dibutuhkan dalam membuat produk digital diharapkan sudah dipahami oleh\r\nmahasiswa, ketika mengambil matakuliah ini, antara lain: Minat terha', 'Mampu membuat rekaman dan mengedit dasar sebuah musik menggunakan aplikasi Adobe Audition', 'Mampu mempersiapkan kebutuhan rekaman, kejelasan suara digital yang direkam, dan mampu menggabungkan dengan musik', 'Cara membuat rekaman menggunakan adobe audition. Memahami perbedaan single layer dan multi layer, mono dan stereo. Noise reduction.', 'Metode ceramah, Tanya jawab, studi kasus, mempelajari dan mereview contoh rekaman suara, praktek rekam suara)', '1 kali pertemuan', 'Observasi hasil praktikum dan tugas yang dikumpulkan', 'Artikel, contoh rekaman suara, studi kasus, pengalaman baik dosen maupun mahasiswa. Adobe Audition.\r\n', 'Tugas 01: Pembuatan iklan / media promosi', 'Hardskill : Mahasiswa mampu menggunakan software editing animasi dan video dalam membuat sajian iklan Softskill : Mahasiswa mempunyai rasa percaya diri untuk perform, bekerja dalam tim, dan menumbuhkan ide kreatif', 'Tugas diberikan minggu 1, dikumpulkan minggu 6', '40% ', 'Teknis video, Editing, performance, originalitas, ide dan konsep, animation, production value', 'Semua bahan dibuat sendiri Kompleksitas animasi\r\nTeknik cut dan transisi Kesesuaian dengan tema produk Adanya ide baru /konsep Kesesuain dengan ketentuan tugas\r\n', 'Semua artikel dan tutorial yang berhubungan dengan Adobe Audition, Adobe Premier dan Adobe After Effect. Semua bentuk produk multimedia, video klip, iklan, dan produk multimedia lainnya.', '01. Perkenalan', 'Memahami konsep belajar dan tugas perkuliahan yang akan ditempuh.', 'Mampu memaparkan ulang poin utama dari konsep dan kontrak belajar yang akan dijalani', 'Kontrak nilai, contoh tugas, dan tugas', 'Ceramah, Diskusi', '100 Menit.', 'Semua artikel dan tutorial yang berhubungan dengan Adobe Audition, Adobe Premier dan Adobe After Effect. Semua bentuk produk multimedia, video klip, iklan, dan produk multimedia lainnya.'),
(2, 'Pancasila', 'S1 - Hubungan Internasional', 'Mata kuliah Pancasila merupakan mata kuliah dasar umum yang berisi pengetahuan dan nilai yang berhubungan dengan Pancasila. Mata kuliah ini membahas konsep dasar negara (Pancasila, Pembukaan dan UUD 1945), Pancasila dalam kon', 'DT083', 'Genap', '', '190302579', 'Irton, SE, M.Si', 'Tanda_Tangan_Mick_Schumacher.png', '2023-12-31 01:54:27', '> 80%', '2 SKS ( 2 Teori )', 'Pembukaan dan batang tubuh UUD 1945, penerapan Pancasila di zaman orde lama, Ideologi Pancasila dan Ideologi dunia, penerapan Pancasila dalam zaman orde baru. Secara khusus dibahas juga Pancasila vs Agama dan Pancasila ditinj', '1. Memiliki kemampuan analisis, berfikir rasional, bersikap kritis dalam menghadapipersoalan-persoalan dalam kehidupan bermasyarakat,\r\nberbangsa dan bernegara emahami.\r\n2. Memiliki kemampuan analisis, berfikir rasional, bersi', 'Pancasila sebagai dasar negara: a. Hubungan Pancasila\r\ndengan Pembukaan UUD Tahun 1945 b. Penjabaran Pancasila dalam Batang Tubuh UUD NRI tahun 1945', 'Makalah kelompok dibuat dengan format penulisan makalah yang terstruktur dan dipresentasikan pada hari yang dijadwalkan', 'Mampu membuat makalah kelompok terkait materi dari unit pembelajaran dan mempresentasikannya', 'Struktur, kesesuaian, sumber referensi', 'Pancasila dalam Kajian Sejarah Bangsa Indonesia: a. Era Pra Kemerdekaan b. Era Kemerdekaan', 'Pemutaran video sidang BPUPKI Ceramah online, Diskusi tanya jawab', '100’', 'Keaktifan dan tugas', '1,2,4, 5, 7', 'mengangkat isu yang berkaitan  dengan masing- masing unit  pembelajaran yang dibuat', 'Mampu membuat makalah kelompok terkait materi dari unit pembelajaran dan mempresentasikannya', '60’', '10 %', 'Makalah kelompok dibuat dengan format penulisan makalah yang terstruktur dan dipresentasikan pada hari yang dijadwalkan', 'Struktur, kesesuaian, sumber referensi', 'Ref 1 : Ali, R. Moh. (2012). Pengantar Ilmu Sejarah Indonesia. Yogyakarta : LKis Pelangi Aksara.\r\nRef.2 : Al Marsudi Subandi H. 2003. Pancasila dan UUD’45 dalam Paragdigma Reformasi. Jakarta: Rajawali Pers\r\nRef 3 :.Suwarno, P', '21', 'Kemampuan menelaah dan menganalisis Pancasila dalam Kajian Sejarah Bangsa Indonesia', 'Mampu memaparkan ulang poin utama dari konsep dan kontrak belajar yang akan dijalani', 'Kontrak nilai, contoh tugas, dan tugas', 'Ceramah, Diskusi', '100 Menit.', 'keaktifan');

-- --------------------------------------------------------

--
-- Table structure for table `user_materi`
--

CREATE TABLE `user_materi` (
  `id_materi` int(11) NOT NULL,
  `materi` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `file_path_materi` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_materi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_materi`
--

INSERT INTO `user_materi` (`id_materi`, `materi`, `file_path_materi`, `created_materi`) VALUES
(1, 'Perancangan Web', 'Salinan_dari_Social_Studies_Subject_for_Middle_School__Holocaust_and_II_World_War_by_Slidesgo_(3)_(8).pptx', '2024-01-01 05:55:15'),
(2, 'Multimedia', 'SOAL-UAS_REGULER-PENGOLAHAN-BASISDATA-D3TI-GANJIL-2023_20241.pdf', '2024-01-01 05:55:36'),
(3, 'Perancangan Web 2', 'Salinan_dari_Social_Studies_Subject_for_Middle_School__Holocaust_and_II_World_War_by_Slidesgo_(3)_(8)_(4).pptx', '2024-01-01 06:12:13'),
(4, 'Multimedia', '22_01_4943_Rohma_Rifqi_Pamungkas.pdf', '2024-01-01 06:12:54'),
(5, 'Tugas 1', '22_01_4943_Rohma_Rifqi_Pamungkas.docx', '2024-01-01 06:13:57'),
(6, 'Pengolahan Basis Data', '22_01_4943_Rohma_Rifqi_Pamungkas1.pdf', '2024-01-01 06:14:55'),
(7, 'Multimedia', '22_01_4943_Rohma_Rifqi_Pamungkas2.pdf', '2024-01-01 06:15:38'),
(8, 'Multimedia', 'Template_Laporan_Praktikum.docx', '2024-01-01 06:16:40'),
(9, 'Multimedia', '22_01_4943_Rohma_Rifqi_Pamungkas3.pdf', '2024-01-01 06:17:53'),
(10, 'Multimedia', '22_01_4943_Rohma_Rifqi_Pamungkas4.pdf', '2024-01-01 06:19:05'),
(11, 'Multimedia', '22_01_4943_Rohma_Rifqi_Pamungkas5.pdf', '2024-01-01 06:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `user_presensi`
--

CREATE TABLE `user_presensi` (
  `id_presensi` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `nim` varchar(225) NOT NULL,
  `status` enum('Hadir','Tidak Hadir','','') NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_presensi`
--

INSERT INTO `user_presensi` (`id_presensi`, `nama`, `nim`, `status`, `waktu`) VALUES
(1, 'Rohma Rifqi Pamungkas', '22.01.4943', 'Hadir', '2024-01-02 08:34:02'),
(2, 'Robet Budi Santoso', '22.01.4932', 'Hadir', '2023-12-22 09:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Dosen'),
(3, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 2, 'Lecturer', 'user/datarps', 'fas fa-fw fa-user-tie', 1),
(10, 2, 'Presensi', 'user/presensirps', 'fas fa-fw fa-key', 1),
(11, 2, 'Materi', 'user/addmateri', 'fas fa-fw fa-book', 1),
(12, 4, 'Presensi Mahasiswa', 'mahasiswa/presensimhs', 'fas fa-fw fa-key', 1),
(13, 4, 'Profile Mahasiswa', 'mahasiswa', 'fas fa-fw fa-user', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_datarps`
--
ALTER TABLE `user_datarps`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `user_materi`
--
ALTER TABLE `user_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_presensi`
--
ALTER TABLE `user_presensi`
  ADD PRIMARY KEY (`id_presensi`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_datarps`
--
ALTER TABLE `user_datarps`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_materi`
--
ALTER TABLE `user_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_presensi`
--
ALTER TABLE `user_presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
