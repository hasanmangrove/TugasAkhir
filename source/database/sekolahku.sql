-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 10:01 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- database: `sekolahku`
--

-- --------------------------------------------------------

--
-- Table structure for table `aset_bangunan`
--

CREATE TABLE `aset_bangunan` (
  `id` int(11) NOT NULL,
  `npsn` int(10) DEFAULT NULL,
  `nama_bangunan` varchar(20) DEFAULT NULL,
  `kode_bangunan` varchar(25) DEFAULT NULL,
  `register_bangunan` varchar(8) DEFAULT NULL,
  `kondisi_bangunan` varchar(2) DEFAULT NULL,
  `kostruksi_bangunan` varchar(15) DEFAULT NULL,
  `luas_lantai` int(5) DEFAULT NULL,
  `lokasi` varchar(90) DEFAULT NULL,
  `tahun_pembangunan` year(4) DEFAULT NULL,
  `luas_bangunan` int(8) DEFAULT NULL,
  `biaya_pembangunan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aset_tanah`
--

CREATE TABLE `aset_tanah` (
  `id` int(11) NOT NULL,
  `npsn` int(10) NOT NULL,
  `no_persil` varchar(30) NOT NULL,
  `kepemilikan` varchar(20) DEFAULT NULL,
  `atasnama_sertifikat` varchar(60) DEFAULT NULL,
  `status_tanah` varchar(20) DEFAULT NULL,
  `luas_tanah` int(8) DEFAULT NULL,
  `no_sertifikat` varchar(100) DEFAULT NULL,
  `tgl_sertifikat` date DEFAULT NULL,
  `thn_perolehan` year(4) DEFAULT NULL,
  `harga_perolehan` double DEFAULT NULL,
  `asal_usul` varchar(30) DEFAULT NULL,
  `unit` varchar(40) DEFAULT NULL,
  `letak` text,
  `peruntukan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aset_tanah`
--

INSERT INTO `aset_tanah` (`id`, `npsn`, `no_persil`, `kepemilikan`, `atasnama_sertifikat`, `status_tanah`, `luas_tanah`, `no_sertifikat`, `tgl_sertifikat`, `thn_perolehan`, `harga_perolehan`, `asal_usul`, `unit`, `letak`, `peruntukan`) VALUES
(1, 20401013, '279 P.I.', 'Yayasan', 'S.SOEBAGYO', 'SHM', 2060, 'AA 413100', '1988-02-05', 1990, 618, 'TANAH WAKAF', NULL, 'STAN, MAGUWOHARJO,DEPOK, SLEMAN\r\n', 'SMP 1 DEPOK');

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `no` int(11) NOT NULL,
  `npsn` int(10) NOT NULL,
  `tahun_ajaran` varchar(10) DEFAULT NULL,
  `nbm` int(10) DEFAULT NULL,
  `nama_guru` varchar(35) DEFAULT NULL,
  `bidang` varchar(30) DEFAULT NULL,
  `nuptk` int(25) DEFAULT NULL,
  `nip` int(30) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `telepon` int(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pangkat_golruang` varchar(30) DEFAULT NULL,
  `tgl_pengangkatan` date DEFAULT NULL,
  `sertifikasi_guru` varchar(15) DEFAULT NULL,
  `tmt_sertifikasi` date DEFAULT NULL,
  `jk` varchar(4) DEFAULT NULL,
  `sts_pegawai` varchar(10) DEFAULT NULL,
  `organisasi` varchar(15) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL,
  `rt_rw` int(5) DEFAULT NULL,
  `kelurahan` varchar(30) DEFAULT NULL,
  `kec` int(2) DEFAULT NULL,
  `kab` int(2) DEFAULT NULL,
  `prov` varchar(30) DEFAULT NULL,
  `pendidikan` varchar(5) DEFAULT NULL,
  `jurusan` varchar(15) DEFAULT NULL,
  `univ` varchar(25) DEFAULT NULL,
  `thn_lulus` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`no`, `npsn`, `tahun_ajaran`, `nbm`, `nama_guru`, `bidang`, `nuptk`, `nip`, `tempat_lahir`, `tgl_lahir`, `telepon`, `email`, `pangkat_golruang`, `tgl_pengangkatan`, `sertifikasi_guru`, `tmt_sertifikasi`, `jk`, `sts_pegawai`, `organisasi`, `alamat`, `rt_rw`, `kelurahan`, `kec`, `kab`, `prov`, `pendidikan`, `jurusan`, `univ`, `thn_lulus`) VALUES
(1, 20401013, '2016/2017', 919988, 'Abdulah Mukti, S.Pd.I', 'Guru Mata Pelajaran', NULL, 0, 'Bekasi', '1981-02-16', 0, 'abdulah_mukti@yahoo.co.id', 'GTY', '2003-09-09', 'Sudah', '2013-10-14', 'L', 'GTY', NULL, '', NULL, 'KLITREN', NULL, NULL, 'DIY', 'S1', 'PAI', 'UIN Sunan Kalijaga', 2010),
(3, 20401014, NULL, NULL, 'Jajaran', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `npsn` int(10) NOT NULL,
  `nama_sekolah` varchar(20) NOT NULL,
  `thn_ajaran` varchar(20) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `akreditasi` varchar(20) NOT NULL,
  `sk_akreditasi` varchar(20) NOT NULL,
  `tglsk_akreditasi` date NOT NULL,
  `tgl_habis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` int(11) NOT NULL,
  `kabupaten` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `kabupaten`) VALUES
(1, 'Bantul'),
(2, 'Gunung Kidul'),
(3, 'Kulon Progo'),
(4, 'Sleman'),
(5, 'Kota Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `kepsek`
--

CREATE TABLE `kepsek` (
  `id` int(11) NOT NULL,
  `npsn` int(10) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL,
  `kepala_sekolah` varchar(30) NOT NULL,
  `nbm` int(8) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `sk_pengangkatan` int(20) NOT NULL,
  `tgl_sk` date NOT NULL,
  `asal_sk` varchar(30) NOT NULL,
  `tmt_jabatan` date NOT NULL,
  `masa_tugaske` varchar(2) NOT NULL,
  `tgl_berahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `no` int(11) NOT NULL,
  `npsn` int(10) NOT NULL,
  `thn_ajaran` varchar(10) NOT NULL,
  `jns_prestasi` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `hasil` varchar(30) NOT NULL,
  `ket` varchar(30) NOT NULL,
  `pemegang` varchar(30) NOT NULL,
  `tgl_plaksanaan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `jenjang` varchar(30) NOT NULL,
  `npsn` int(10) NOT NULL,
  `sk_pendirian` varchar(20) NOT NULL,
  `tgl_pendirian` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kel` varchar(20) NOT NULL,
  `kec` int(4) NOT NULL,
  `kab` int(4) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `web` varchar(30) NOT NULL,
  `akreditasi` varchar(2) NOT NULL,
  `sk_akreditasi` varchar(20) NOT NULL,
  `kurikulum` varchar(10) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tujuan` text NOT NULL,
  `moto` text NOT NULL,
  `koordinat_long` double NOT NULL,
  `koordinat_lat` double NOT NULL,
  `listrik` int(8) NOT NULL,
  `akses_internet` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `jenjang`, `npsn`, `sk_pendirian`, `tgl_pendirian`, `alamat`, `kel`, `kec`, `kab`, `telepon`, `email`, `web`, `akreditasi`, `sk_akreditasi`, `kurikulum`, `visi`, `misi`, `tujuan`, `moto`, `koordinat_long`, `koordinat_lat`, `listrik`, `akses_internet`) VALUES
(0, 'SMP', 20401013, 'No.3064/M.634/DIY.68', '1968-01-01', 'JL. Stan, Rt.04/Rw. 44, Maguwoharjo, Depok ,Sleman', 'Maguwoharjo', 63, 4, '(0274) 4462392', 'smpmusade1968@gmail.com', 'www.smpmuh1depok.sch.id', 'A', 'No.5.01/BAP-SM/TU/XI', 'KTSP', 'Terwujudnya insan yang berakhlak mulia, mandiri, kreatif, berprestasi, dan berwawasan global', '<br>1.membentuk jati diri kepribadian siswa yang berkarakter keislaman dan kemuhammadiyahan, <br>2.menghantarkan potensi bakat dan minat secara optimal dan komprehensif dalam meraih prestasi akademik dan non akademik,<br>3.melaksanakan pengembangan pendidik dan tenaga kependidikan yang profesional, <br>4. melaksanakan pengembangan pembelajaran aktif dan efektif, <br>5. melaksanakan pengembangan lulusan yang berkualitas, berkepribadian, tangguh, dan berbudaya, <br>6. melaksanakan pengembangan fasilitas pendidikan yang memadai dan inovatif, <br>7. melaksanakan pengembangan kelembagaan dan manajemen sekolah yang komprehensif, <br>8. melaksanakan pembiayaan pendidikan dengan prinsip keadilan dan akuntabel,<br> 9. melaksanakan pengembangan sistem penilaian yang terencana dan berkala, <br>10. melaksanakan pengembangan penataan lingkungan, budaya sekolah yang kondusif, dan mitigasi bencana', '', 'Man Jadda wa Jadda...', -7763700, 110426200, 7000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sarpras`
--

CREATE TABLE `sarpras` (
  `id` int(11) NOT NULL,
  `npsn` int(10) DEFAULT NULL,
  `nama_sekolah` varchar(30) DEFAULT NULL,
  `nama_prasarana` varchar(25) DEFAULT NULL,
  `jumlah` int(8) DEFAULT NULL,
  `kondisi_baik` int(4) DEFAULT NULL,
  `kondisi_rusakringan` int(4) DEFAULT NULL,
  `kondisi_rusaksedang` int(2) DEFAULT NULL,
  `kondisi_rusakberat` int(4) DEFAULT NULL,
  `kondisi_sarpras` varchar(5) DEFAULT NULL,
  `status_kepemilikan` varchar(20) DEFAULT NULL,
  `tahun_pengadaan` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `npsn` int(10) NOT NULL,
  `tahun_ajaran` varchar(9) NOT NULL,
  `kelas` int(4) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `rombel` int(3) NOT NULL,
  `jumlah_putra` int(3) NOT NULL,
  `jumlah_putri` int(3) NOT NULL,
  `kms` int(3) NOT NULL,
  `non_kms` int(3) NOT NULL,
  `jumlah_siswa` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tenkependik`
--

CREATE TABLE `tenkependik` (
  `no` int(11) NOT NULL,
  `npsn` int(10) NOT NULL,
  `tahun_ajaran` varchar(9) NOT NULL,
  `nbm` int(10) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tempat_lhr` varchar(20) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `telepon` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pangkat` varchar(25) NOT NULL,
  `tgl_pengangkatan` date NOT NULL,
  `jk` varchar(2) NOT NULL,
  `status_pegawai` varchar(10) NOT NULL,
  `organisasi` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt_rw` int(4) NOT NULL,
  `kel` varchar(20) NOT NULL,
  `kec` varchar(20) NOT NULL,
  `kab` varchar(20) NOT NULL,
  `prov` int(20) NOT NULL,
  `pnd_thr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `Nama` varchar(256) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `Foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wakasek`
--

CREATE TABLE `wakasek` (
  `id` int(11) NOT NULL,
  `npsn` int(10) NOT NULL,
  `tahun_ajaran` varchar(9) NOT NULL,
  `nbm` int(10) NOT NULL,
  `wakil_kepala` varchar(30) NOT NULL,
  `waka_bidang` varchar(20) NOT NULL,
  `sk_pengangkatan` varchar(30) NOT NULL,
  `tgl_sk` date NOT NULL,
  `asal_sk` varchar(10) NOT NULL,
  `tmt_jabatan` date NOT NULL,
  `masa_tugaske` varchar(2) NOT NULL,
  `tgl_habis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aset_bangunan`
--
ALTER TABLE `aset_bangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aset_tanah`
--
ALTER TABLE `aset_tanah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepsek`
--
ALTER TABLE `kepsek`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `npsn` (`npsn`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `npsn` (`npsn`);

--
-- Indexes for table `sarpras`
--
ALTER TABLE `sarpras`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `npsn` (`npsn`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `npsn` (`npsn`);

--
-- Indexes for table `tenkependik`
--
ALTER TABLE `tenkependik`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `npsn` (`npsn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `wakasek`
--
ALTER TABLE `wakasek`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `npsn` (`npsn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aset_bangunan`
--
ALTER TABLE `aset_bangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aset_tanah`
--
ALTER TABLE `aset_tanah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kepsek`
--
ALTER TABLE `kepsek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sarpras`
--
ALTER TABLE `sarpras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tenkependik`
--
ALTER TABLE `tenkependik`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wakasek`
--
ALTER TABLE `wakasek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
