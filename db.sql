-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 05, 2023 at 07:50 PM
-- Server version: 10.3.36-MariaDB-0+deb10u2
-- PHP Version: 7.3.31-1~deb10u2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petis`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('eosr7tkg2imk8u1nk5gtihjknqha9jq8', '::1', 1629794127, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393739333933313b626f73737c733a313a2231223b),
('fsvnisqs137hl0kfekn5hmaenqkdi1qp', '::1', 1629862868, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393836323836383b626f73737c733a313a2231223b),
('6vr8mi8lqf8dqlo2br5i63melcf2c4r8', '::1', 1629863234, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393836333233343b626f73737c733a313a2231223b),
('4loe7o4pu2agorlq0l168maltdmi1r6i', '::1', 1629863563, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393836333536333b626f73737c733a313a2231223b),
('mqbkdplr3k2p1voo6svu7dm42btup92h', '::1', 1629863646, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393836333536333b626f73737c733a313a2231223b),
('ul7a8j6d26q0qtkh2dhvv63i0p53ec4l', '::1', 1648432954, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634383433323935343b626f73737c733a313a2231223b),
('4c78dotivqnuob9bgh0ahdn254e6u8d4', '::1', 1648433301, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634383433333330313b626f73737c733a313a2231223b),
('4go6gdb57h5ksni1ftprcmu2jb5k2vcu', '::1', 1648433731, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634383433333733313b626f73737c733a313a2231223b),
('566sq6auabsuco3vtd0a2ns2t7fjnouk', '::1', 1648434322, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634383433343332323b),
('24q0vl2jrj7bv8kojc8tnku8idj5795k', '::1', 1648434328, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634383433343332323b626f73737c733a313a2231223b),
('hhv4gr28gfu4q9p6ng3chdmrtnmj891n', '::1', 1654608371, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635343630383337313b),
('ba6afakcdga9lufmss465h54niad315q', '::1', 1660964347, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636303936343332393b626f73737c733a313a2231223b),
('pp3borrigchlisifftubmpf32dfthgqo', '::1', 1672919188, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637323931383933343b626f73737c733a313a2231223b);

-- --------------------------------------------------------

--
-- Table structure for table `rec_ip`
--

CREATE TABLE `rec_ip` (
  `id` int(11) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rec_ip`
--

INSERT INTO `rec_ip` (`id`, `ip`, `date`, `time`) VALUES
(1, '::1', '2020-11-07', '14:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `t_activity`
--

CREATE TABLE `t_activity` (
  `xid` int(11) NOT NULL,
  `time` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_activity`
--

INSERT INTO `t_activity` (`xid`, `time`, `user`, `action`) VALUES
(1, ' 1597974090', 'Administrator', 'Login'),
(7, '1597978757', 'Administrator', 'Login'),
(8, '1597978978', 'Administrator', 'Login'),
(9, '1597981007', 'Administrator', 'Login'),
(10, '1597981124', 'Administrator', 'Login'),
(11, '1597981381', 'Administrator', 'Login'),
(12, '1597981750', 'Administrator', 'Login'),
(13, '1597982005', 'Alvian Septya', 'Login'),
(14, '1597982032', 'Alvian Septya', 'Login'),
(15, '1597982078', 'Administrator', 'Login'),
(16, '1597982227', 'Administrator', 'Login'),
(17, '1597982347', 'Administrator', 'Login'),
(18, '1597982515', 'Administrator', 'Login'),
(19, '1597982872', 'Alvian Septyayuwandianto', 'Login'),
(20, '1597986745', 'Administrator', 'Login'),
(21, '1598009613', 'Administrator', 'Login'),
(22, '1598130407', 'Administrator', 'Login'),
(23, '1603494030', 'Administrator', 'Login'),
(24, '1603509333', 'Administrator', 'Login'),
(25, '1603593775', 'Administrator', 'Login'),
(26, '1603668945', 'Administrator', 'Login'),
(27, '1603839773', 'Administrator', 'Login'),
(28, '1603842822', 'Administrator', 'Login'),
(34, '1603851624', 'Administrator', 'Login'),
(35, '1603930814', 'Administrator', 'Login'),
(36, '1603949128', 'Administrator', 'Login'),
(50, '1604018701', 'Administrator', 'Login'),
(51, '1604029299', 'Administrator', 'Login'),
(52, '1604045973', 'Administrator', 'Login'),
(64, '1604059176', 'Administrator', 'Login'),
(65, '1604097553', 'Administrator', 'Login'),
(66, '1604098201', 'Administrator', 'Login'),
(67, '1604182738', 'Administrator', 'Login'),
(71, '1604201109', 'Administrator', 'Login'),
(72, '1604204108', 'Administrator', 'Login'),
(73, '1604219094', 'Administrator', 'Login'),
(74, '1604360727', 'Administrator', 'Login'),
(75, '1604729249', 'Administrator', 'Login'),
(76, '1604737545', 'Panitia Kegiatan', 'Login'),
(77, '1605329735', 'Panitia Kegiatan', 'Login'),
(78, '1605331765', 'Panitia Kegiatan', 'Login'),
(79, '1605332075', 'Panitia Kegiatan', 'Login'),
(80, '1609992179', 'Panitia Kegiatan', 'Login'),
(81, '1610463485', 'Panitia Kegiatan', 'Login'),
(82, '1610463986', 'Panitia Kegiatan', 'Login'),
(83, '1610464353', 'Panitia Kegiatan', 'Login'),
(84, '1610941017', 'Panitia Kegiatan', 'Login'),
(85, '1610974202', 'Panitia Kegiatan', 'Login'),
(86, '1611121202', 'Panitia Kegiatan', 'Login'),
(87, '1611129209', 'Panitia Kegiatan', 'Login'),
(88, '1615291616', 'Panitia Kegiatan', 'Login'),
(89, '1615291706', 'Panitia Kegiatan', 'Login'),
(90, '1615611061', 'Panitia Kegiatan', 'Login'),
(91, '1615611641', 'Panitia Kegiatan', 'Login'),
(92, '1615611903', 'Panitia Kegiatan', 'Login'),
(93, '1626572248', 'Panitia Kegiatan', 'Login'),
(94, '1626608678', 'Panitia Kegiatan', 'Login'),
(95, '1629697489', 'Panitia Kegiatan', 'Login'),
(96, '1629701837', 'Panitia Kegiatan', 'Login'),
(97, '1629702610', 'Panitia Kegiatan', 'Login'),
(98, '1629729453', 'Panitia Kegiatan', 'Login'),
(99, '1629793801', 'Panitia Kegiatan', 'Login'),
(100, '1629793939', 'Panitia Kegiatan', 'Login'),
(101, '1629862502', 'Panitia Kegiatan', 'Login'),
(102, '1648432611', 'Panitia Kegiatan', 'Login'),
(103, '1648434323', 'Panitia Kegiatan', 'Login'),
(104, '1660964343', 'Panitia Kegiatan', 'Login'),
(105, '1672918999', 'Panitia Kegiatan', 'Login');

-- --------------------------------------------------------

--
-- Table structure for table `t_auth`
--

CREATE TABLE `t_auth` (
  `xid` int(11) NOT NULL,
  `xuser` varchar(100) NOT NULL,
  `xpass` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_auth`
--

INSERT INTO `t_auth` (`xid`, `xuser`, `xpass`, `nama`) VALUES
(1, 'admin', '$2y$10$w4US7niGUO9sNDiqPO00/.LZtbMIKdDXI3NCnz6.SGb4enQKOHWEa', 'Panitia Kegiatan');

-- --------------------------------------------------------

--
-- Table structure for table `t_kandidat`
--

CREATE TABLE `t_kandidat` (
  `xid` int(11) NOT NULL,
  `nomorUrut` varchar(2) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `wakil` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_kandidat`
--

INSERT INTO `t_kandidat` (`xid`, `nomorUrut`, `nama`, `wakil`, `kelas`, `visi`, `misi`, `photo`) VALUES
(1, '01', 'Merry Dwi Andriani', 'Titis Pujaning Tyas', '10 Mipa 1 / 10 Mipa 2', '# Menjadikan OSIS SMA Negeri 1 Jorong sebagai wadah penampung aspirasi, bakat, potensi dan kreativitas dan membangun siswa/i  yang berilmu pengetahuan dan teknologi (IPTEK) yang dilandasi keimanan dan ketakwaan terhadap Tuhan YME.<br><br># Mewujudkan siswa/i SMA Negeri 1 Jorong yang peduli lingkungan dan peduli sesama yang dilandasi keimanan dan ketakwaan terhadap Tuhan YME.', '1. Memajukan prestasi akademik dan nonakademik SMAN 1 Jorong<br><br>2. Mengoptimalkan akun media sosial sebagai sarana informasi seputar info lomba, beasiswa dan  event.<br><br>3. Mengadakan suatu kegiatan yang dapat mengembangkan bakat, potensi dan kreativitas siswa.<br><br>4. Melakukan kegiatan sharing antar anggota osis dengan perwakilan kelas.<br><br>5. Menyelenggarakan kegiatan ekstrakulikuler siswa yang unik, kreatif, dan menarik bagi siswa<br><br>6. Mengadakan kegiatan bakti lingkungan dan bakti sosial di lingkungan sekolah SMA Negeri 1 Jorong maupun di lingkungan masyarakat.<br><br>7. Melaksanakan  program kerja dan kepengurusan OSIS masa bakti tahun 2020 yang belum terlaksana.', '420a4795cb3f55b1ac3659ae6bcb35f1.png'),
(2, '03', 'M. Ilham Fadilla', 'M. Arifin Ilham', '10 IPS 1 / 10 Mipa 2', '1. Menjadikan siswa-siswi SMAN 1 Jorong menjadi siswa yang aktif, inovatif, bertanggung jawab dan tetap berlandaskan iman dan taqwa kepada Tuhan Yang Maha Esa, <br><br>2. menjadikn siswa siswi SMA 1 Jorong yang memiliki sikap peduli di lingkungan sekolah maupun di lingkungan masyarakat. <br><br>3. Mewujudkan peserta didik yang religious, cerdas, memiliki Pangadilan di global, dan berlandaskan Pancasila', '1. Mengutamakan Ketuhanan Yang Maha Esa dalam segala aspek.<br><br>2. Menanamkan sikap religious melalui pengamalan ajaran agama di sekolah dan meningkatkan kedisiplinan warga SMA 1 Jorong.<br><br>3. Memaksimalkan peran siswa dalam menjaga kebersihan lingkungan sekolah.<br><br>4. Menyelenggarakan bakti lingkungan secara berkala di dalam lingkungan sekolah dan sekitarnya.<br><br>5. Melakukan kegiatan bakti sosial di lingkungan sekolah maupun di lingkungan masyarakat.<br><br>6. Menjadikan OSIS sebagai penampung aspirasi siswa demi memajukan sekolah.<br><br>7. Mengutamakan kerjasama dan kebersamaan, menjalankan dan meningkatkan kualitas program kerja anggota osis.<br><br>8. Memajukan dan mengembangkan kualitas ekstrakulikuler dalam bidang seni,budaya,olahraga dan ilmiah di sekolah agar banyak diminati siswa dan mampu mengukir prestasi diluar sekolah.<br><br>9. Mampu memanfaatkan teknologi untuk ke hal positif.<br><br>10. Melanjutkan dan nengembangkan program kegiatan yang sudah di buat oleh osis angkatan sebelumnya.', '61f7c7d289177797eb0071663518260c.png'),
(12, '02', 'Noviana Kartika Sari', 'Asriyanti Astuti', '12 Mipa 3 / 11 IPS 3', '1. Menjadikan siswa-siswi SMAN 1 Jorong menjadi siswa yang aktif, inovatif, bertanggung jawab dan tetap berlandaskan iman dan taqwa kepada Tuhan Yang Maha Esa, <br><br>2. menjadikn siswa siswi SMA 1 Jorong yang memiliki sikap peduli di lingkungan sekolah maupun di lingkungan masyarakat. <br><br>3. Mewujudkan peserta didik yang religious, cerdas, memiliki Pangadilan di global, dan berlandaskan Pancasila', '1. Mengutamakan Ketuhanan Yang Maha Esa dalam segala aspek.<br><br>2. Menanamkan sikap religious melalui pengamalan ajaran agama di sekolah dan meningkatkan kedisiplinan warga SMA 1 Jorong.<br><br>3. Memaksimalkan peran siswa dalam menjaga kebersihan lingkungan sekolah.<br><br>4. Menyelenggarakan bakti lingkungan secara berkala di dalam lingkungan sekolah dan sekitarnya.<br><br>5. Melakukan kegiatan bakti sosial di lingkungan sekolah maupun di lingkungan masyarakat.<br><br>6. Menjadikan OSIS sebagai penampung aspirasi siswa demi memajukan sekolah.<br><br>7. Mengutamakan kerjasama dan kebersamaan, menjalankan dan meningkatkan kualitas program kerja anggota osis.<br><br>8. Memajukan dan mengembangkan kualitas ekstrakulikuler dalam bidang seni,budaya,olahraga dan ilmiah di sekolah agar banyak diminati siswa dan mampu mengukir prestasi diluar sekolah.<br><br>9. Mampu memanfaatkan teknologi untuk ke hal positif.<br><br>10. Melanjutkan dan nengembangkan program kegiatan yang sudah di buat oleh osis angkatan sebelumnya.', '2c4039f3d2c76f80a58d575e59e6f006.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_pemilih`
--

CREATE TABLE `t_pemilih` (
  `xid` int(11) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `kunci` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_pemilih`
--

INSERT INTO `t_pemilih` (`xid`, `nisn`, `nama`, `kelas`, `status`, `kunci`) VALUES
(1, 'NDQ0ODQzMw==', 'V2lkeWEgTmFkaWEgQXJ5YW5pIFMuS29t', 'MTAgbWlwYSAx', '0', '30377659'),
(2, 'NjA3OTIxNjc=', 'TGFuYW5nIFV3YWlzIFMuSC4=', 'MTAgbWlwYSAx', '0', '91468475'),
(3, 'MTkxMjcwOTU=', 'UHJheWl0bmEgV2lkb2Rv', 'MTAgbWlwYSAx', '0', '21775284'),
(4, 'ODIyNzg3NTU=', 'U2FiYXIgTWFyeWFkaSBXYXNpdGE=', 'MTAgbWlwYSAx', '0', '93545372'),
(5, 'ODAxNjY5Nzk=', 'SGFsaW0gUmFtYWRhbg==', 'MTAgbWlwYSAx', '0', '20005627'),
(6, 'NDU4MjEwMDQ=', 'SmF0aSBGaXJnYW50b3Jv', 'MTAgbWlwYSAx', '0', '72526347'),
(7, 'NTAzMDgzNQ==', 'TmFkaW5lIFN1c2FudGk=', 'MTAgbWlwYSAx', '0', '30200067'),
(8, 'MTIwODk5NDk=', 'R2FzdGkgQW1hbGlhIEhhbmRheWFuaQ==', 'MTAgbWlwYSAx', '0', '83563850'),
(9, 'Njg2MDk3OTU=', 'UHJhc2V0eWEgRmlybWFuc3lhaCBNLkZhcm0=', 'MTAgbWlwYSAx', '0', '55881326'),
(10, 'NzUxMTkwNTg=', 'WmFocmEgWml6aSBTYWZpdHJp', 'MTAgbWlwYSAx', '0', '23383340'),
(11, 'NTEyODU2Mw==', 'RW1wbHVrIEt1c3dveW8=', 'MTAgbWlwYSAx', '0', '96157775'),
(12, 'NDE3MTg1OTk=', 'TGFuYW5nIFNpdG9ydXM=', 'MTAgbWlwYSAx', '0', '88817927'),
(13, 'ODc2OTY5NDM=', 'VGFudHJpIE5vdml0YXNhcmk=', 'MTAgbWlwYSAx', '0', '46488626'),
(14, 'ODQ5NzgwMg==', 'UGF0cmljaWEgV2luYXJzaWg=', 'MTAgbWlwYSAx', '0', '89647455'),
(15, 'NjAxMDcyNjg=', 'VmFueWEgWmFtaXJhIFJhaGF5dSBTLlBk', 'MTAgbWlwYSAx', '0', '71415079'),
(16, 'NjI1MzY3OTA=', 'U3VyeWEgSmF5YWRpIEh1dGFnYWx1bmc=', 'MTAgbWlwYSAx', '0', '26165059'),
(17, 'OTMzMzE3NDY=', 'U2Fsc2FiaWxhIEhhcnlhbnRp', 'MTAgbWlwYSAx', '0', '96241400'),
(18, 'OTQ3MzI1MTE=', 'RWxpc2EgTnVyYWluaQ==', 'MTAgbWlwYSAx', '0', '82375072'),
(19, 'OTMzMzI3NTA=', 'UXVlZW4gRWxsaXMgUHJhc3R1dGk=', 'MTAgbWlwYSAx', '0', '79279116'),
(20, 'NTg0NDc0Njg=', 'T3p5IE1haGVzd2FyYQ==', 'MTAgbWlwYSAx', '0', '50255443'),
(21, 'NDA4MzU4Mzk=', 'RGFydSBSZWtzYSBSYWphc2E=', 'MTAgbWlwYSAx', '0', '82365721'),
(22, 'OTc0ODI3ODk=', 'TWFpbXVuYWggQWRlIEZhcmlkYQ==', 'MTAgbWlwYSAx', '0', '83410017'),
(23, 'NzAyNjM2MjY=', 'U2hhbmlhIEhhbmEgV2lqYXlhbnRp', 'MTAgbWlwYSAx', '0', '17891608'),
(24, 'NDI2NDQ5NzI=', 'U2VwdGkgUmlrYSBPa3Rhdmlhbmk=', 'MTAgbWlwYSAx', '0', '38032066'),
(25, 'NDkyNzE0Nzg=', 'V2FydGEgU2FsYWh1ZGlu', 'MTAgbWlwYSAx', '0', '70591910'),
(26, 'NDMxMzYwMDE=', 'TmFzcnVsbGFoIFJhaG1hdCBTZXRpYXdhbiBNLlRJLg==', 'MTAgbWlwYSAx', '0', '56338966'),
(27, 'MTM3NzgwMzM=', 'THV0ZmFuIFdpbmFybm8=', 'MTAgbWlwYSAx', '0', '10458631'),
(28, 'MTE3ODEzODc=', 'WXVuaSBNZWxhbmk=', 'MTAgbWlwYSAx', '0', '25247527'),
(29, 'Mjk1MTY5NjQ=', 'QWppb25vIFdhc2tpdGEgUy5GYXJt', 'MTAgbWlwYSAx', '0', '20104542'),
(30, 'NDk2NTM1NzE=', 'RWxsYSBTdWNpIFB1cndhbnRpIFMuR3o=', 'MTAgbWlwYSAx', '0', '47968011'),
(31, 'MTk2NTI3MTk=', 'TGFsYSBSYXRuYSBNYW5kYXNhcmk=', 'MTAgbWlwYSAx', '0', '43246939'),
(32, 'NTc3ODI4Mjk=', 'WnVsYWlraGEgUmF0aWggSGFydGF0aQ==', 'MTAgbWlwYSAx', '0', '37778194'),
(33, 'Mjk4MzQ4Ng==', 'RXZhIFVzYWRh', 'MTAgbWlwYSAx', '0', '37119973'),
(34, 'NjczNzIwNDE=', 'UHJhc2V0eW8gQWJ5YXNhIEhpZGF5YXQ=', 'MTAgbWlwYSAx', '0', '51703585'),
(35, 'OTYwODQyMTI=', 'S2VtYWwgR3VuYXJ0bw==', 'MTAgbWlwYSAx', '0', '39981769'),
(36, 'NTYxODExNzM=', 'TWFuYWggVGFyaWhvcmFuIFMuSS5Lb20=', 'MTAgbWlwYSAy', '0', '30950038'),
(37, 'NjA5NjQ1NjQ=', 'SGFmc2hhaCBXaWpheWFudGkgTS5GYXJt', 'MTAgbWlwYSAy', '0', '85032996'),
(38, 'NzgxOTYzMTU=', 'RGlhbmEgUHJhc3R1dGk=', 'MTAgbWlwYSAy', '0', '81151199'),
(39, 'NjI4MjQ2MTM=', 'TGVtYmFoIFdhc2l0YQ==', 'MTAgbWlwYSAy', '0', '12744487'),
(40, 'ODY0MTgwODk=', 'SmFlbWFuIFRoYW1yaW4=', 'MTAgbWlwYSAy', '0', '64552491'),
(41, 'NDUzNDU5OTk=', 'TWFyc2l0byBQcmF0YW1hIE0uUGQ=', 'MTAgbWlwYSAy', '0', '86661881'),
(42, 'MjE3Nzk4OTM=', 'Wml6aSBMZXN0YXJpIFMuUHQ=', 'MTAgbWlwYSAy', '0', '25359831'),
(43, 'OTcwOTA5MDg=', 'UmFobWkgRWxpc2EgTmFzeWlhaA==', 'MTAgbWlwYSAy', '0', '44936686'),
(44, 'OTA3NjE1MDg=', 'TWFrdXRhIFNpcmVnYXI=', 'MTAgbWlwYSAy', '0', '21378287'),
(45, 'Mzk1MjA2ODU=', 'R2FsYXIgU2luYWdhIFMuU29z', 'MTAgbWlwYSAy', '0', '80646556'),
(46, 'NDY5MjY3MDg=', 'VGFuaWEgTWF5YXNhcmk=', 'MTAgbWlwYSAy', '0', '38960406'),
(47, 'MjIxMDY3ODA=', 'UmFmaSBTaWhvdGFuZw==', 'MTAgbWlwYSAy', '0', '79076661'),
(48, 'MzA4NjQyMjE=', 'UGFpbWFuIE1hbnVsbGFuZyBTLlBk', 'MTAgbWlwYSAy', '0', '94065718'),
(49, 'NzYxNDk4NzA=', 'QmFnYXMgTmFycGF0aSBTLktlZA==', 'MTAgbWlwYSAy', '0', '74661794'),
(50, 'NDIyMjgzNjM=', 'SmFyd2FkaSBLdXN3b3lvIFMuUHNp', 'MTAgbWlwYSAy', '0', '33408927'),
(51, 'NDM4NzkzNjY=', 'UmFpc2EgTWVsYW5p', 'MTAgbWlwYSAy', '0', '53133229'),
(52, 'ODY3MTM0MTI=', 'TWFsaWsgU2FwdG9ubw==', 'MTAgbWlwYSAy', '0', '81765935'),
(53, 'NzU2MzEwODY=', 'QW5hIExha3NpdGE=', 'MTAgbWlwYSAy', '0', '66019381'),
(54, 'NjE4ODM2MTE=', 'S2FyamEgQWRyaWFuc3lhaCBTLkgu', 'MTAgbWlwYSAy', '0', '35097945'),
(55, 'NjYzNzc3NjQ=', 'Q2VtYW5pIFNpaG90YW5nIFMuS29t', 'MTAgbWlwYSAy', '0', '56694499'),
(56, 'MjE0NTMxOTk=', 'S2FsaW0gSGFyZGlhbnN5YWg=', 'MTAgbWlwYSAy', '0', '72977446'),
(57, 'NDQ5MjA4NzY=', 'VGF1ZmlrIFdhY2FuYQ==', 'MTAgbWlwYSAy', '0', '95690513'),
(58, 'MzE0NjI1MjU=', 'Q2ljaSBFbGxhIExlc3Rhcmk=', 'MTAgbWlwYSAy', '0', '28214816'),
(59, 'NTYzMjIyNTU=', 'TmFsYXIgSmFpbGFuaSBNLkZhcm0=', 'MTAgbWlwYSAy', '0', '25189216'),
(60, 'NzQyMjcwNTE=', 'VGluYSBQdXJuYXdhdGk=', 'MTAgbWlwYSAy', '0', '68269567'),
(61, 'ODI0NDc2NzA=', 'QWduZXMgQWd1c3RpbmE=', 'MTAgbWlwYSAy', '0', '45761652'),
(62, 'MjQ1Mzk0MDE=', 'R2VudGEgSGFzdHV0aSBTLktlZA==', 'MTAgbWlwYSAy', '0', '31079082'),
(63, 'ODA4Mzg4Mw==', 'TWFyaWEgWnVsYWlrYQ==', 'MTAgbWlwYSAy', '0', '13722364'),
(64, 'ODE2ODcyNTE=', 'QmVsbGEgV3VsYW4gRmFyaWRh', 'MTAgbWlwYSAy', '0', '89947111'),
(65, 'OTc2MzkyOTk=', 'RGlhbmEgQW5pIFJpeWFudGkgUy5QZA==', 'MTAgbWlwYSAy', '0', '15460967'),
(66, 'ODM5MDM2NjM=', 'UmFmaWQgUHJhbm93byBTLlQu', 'MTAgbWlwYSAy', '0', '36336637'),
(67, 'MzI5NTQ4NTI=', 'U2l0aSBMYWtzaXRhIE0uQWs=', 'MTAgbWlwYSAy', '0', '29483587'),
(68, 'MjgyNzY0MzI=', 'VWRhIERhbWFuaWs=', 'MTAgbWlwYSAy', '0', '86588676'),
(69, 'MjYxMzE2MzQ=', 'VWxpIFB1c3BpdGE=', 'MTAgbWlwYSAy', '0', '38461453'),
(70, 'NTc5NDcxMjk=', 'R2FyYSBNYW5kYWxh', 'MTAgbWlwYSAy', '0', '96547403'),
(71, 'MzQxMzQ1NzM=', 'R2FtYmlyYSBQYW5nZXN0dSBTLklQ', 'MTAgbWlwYSAy', '0', '43140356'),
(72, 'MTQ1NTMyMjY=', 'S2F5bGEgU2FmaXRyaQ==', 'MTAgbWlwYSAy', '0', '43877935'),
(73, 'OTkwOTEyMDA=', 'RWxtYSBPa3Rhdmlhbmk=', 'MTAgbWlwYSAy', '0', '60157430'),
(74, 'MzA0NjYwODE=', 'UmVzdHUgVXNhZGE=', 'MTAgbWlwYSAy', '0', '87950786'),
(75, 'NTk2ODkzOTM=', 'VmFuZXNhIFdhaHl1bmkgTS5Lb20u', 'MTAgbWlwYSAy', '0', '40973111'),
(76, 'Njg3MDM0MjQ=', 'UGF1bGluIFdpZGlhc3R1dGk=', 'MTAgbWlwYSAy', '0', '47121683'),
(77, 'NzQ5ODM5MTk=', 'Q2FrcmF3YWxhIEhhcmltdXJ0aSBHdW5hd2Fu', 'MTAgbWlwYSAy', '0', '56035933'),
(78, 'MzMxOTg5NTg=', 'SGFuYSBBbmRyaWFuaQ==', 'MTAgbWlwYSAy', '0', '63145946'),
(79, 'Mjk2MDUzNzg=', 'QmFsaWRpbiBBbmdncmlhd2Fu', 'MTAgbWlwYSAy', '0', '80673859'),
(80, 'OTE0ODI2NTU=', 'QXVyb3JhIEhhcnRhdGk=', 'MTAgbWlwYSAz', '0', '54171541'),
(81, 'NDgyMzg2MjU=', 'QXNtYW4gTmFiYWJhbg==', 'MTAgbWlwYSAz', '0', '18626872'),
(82, 'MTI3MDE5ODg=', 'QmFneWEgRGlwYSBXYXNpdGEgUy5QZA==', 'MTAgbWlwYSAz', '0', '81857265'),
(83, 'Njg0NTA2MjU=', 'UmFoYXl1IFBhbGFzdHJp', 'MTAgbWlwYSAz', '0', '92944817'),
(84, 'NjI3NTExMg==', 'RW1pbCBTYXB0b25vIE0uQWs=', 'MTAgbWlwYSAz', '0', '27195444'),
(85, 'ODUyMTMwODE=', 'SWx5YXMgTmFycGF0aQ==', 'MTAgbWlwYSAz', '0', '93929141'),
(86, 'MzgzOTA2NTQ=', 'R2FkYW5nIE1hbmRhbGE=', 'MTAgbWlwYSAz', '0', '47335943'),
(87, 'Njg5MzA5OTg=', 'VmlubyBLdW50aGFyYSBUYW1iYSBTLktlZA==', 'MTAgbWlwYSAz', '0', '65020814'),
(88, 'Mjg5NjQ3ODA=', 'S2FsaW0gU2FwdG9ubyBTLlB0', 'MTAgbWlwYSAz', '0', '31516860'),
(89, 'NTk2OTY4MDM=', 'WnVsZmEgV2FzdHV0aQ==', 'MTAgbWlwYSAz', '0', '91521521'),
(90, 'Mjg0Njg0MjQ=', 'Q2ludGEgUmFoYXl1IFMuRmFybQ==', 'MTAgbWlwYSAz', '0', '71908557'),
(91, 'NzEyMjExOA==', 'VXNtYW4gUHJhdGFtYQ==', 'MTAgbWlwYSAz', '0', '17148894'),
(92, 'OTIyMzgwNzc=', 'WmFtaXJhIE1heWFzYXJp', 'MTAgbWlwYSAz', '0', '27025826'),
(93, 'OTExMzg1OTA=', 'QW5hIEdpbGRhIEhhc2FuYWggUy5FLg==', 'MTAgbWlwYSAz', '0', '67677023'),
(94, 'NzU4NjI3OTQ=', 'RGFyeWFuaSBKYW51YXI=', 'MTAgbWlwYSAz', '0', '66467854'),
(95, 'NDgzNjE5NDE=', 'T2xpdmlhIEthbmlhIE9rdGF2aWFuaQ==', 'MTAgbWlwYSAz', '0', '22209788'),
(96, 'Nzc0Mzg4Mjk=', 'QWduZXMgUmFobWF3YXRp', 'MTAgbWlwYSAz', '0', '25851748'),
(97, 'OTQ3MDg0NTU=', 'R2F3YXRpIEZhcmlkYQ==', 'MTAgbWlwYSAz', '0', '33939827'),
(98, 'MTk1MzYyNjI=', 'T2t0byBQcmFkaXB0YQ==', 'MTAgbWlwYSAz', '0', '53053572'),
(99, 'NzIwNDMzMTg=', 'SWthIEFzdHV0aQ==', 'MTAgbWlwYSAz', '0', '57753270'),
(100, 'NzE2NjAyMDI=', 'VGFtaSBNYXJkaGl5YWg=', 'MTAgbWlwYSAz', '0', '24805575'),
(101, 'MzEyMjU2NjM=', 'V2lzbnUgU2FsbWFuIFdhY2FuYSBTLlB0', 'MTAgbWlwYSAz', '0', '76836756'),
(102, 'NTYxNTc5OTQ=', 'Tm92aSBBbmRyaWFuaQ==', 'MTAgbWlwYSAz', '0', '46863584'),
(103, 'MzcyNTg0NzQ=', 'SnVsaWEgTmFtYWdh', 'MTAgbWlwYSAz', '0', '71053158'),
(104, 'MjgxOTgxMTY=', 'RGFtdSBMYXR1cG9ubw==', 'MTAgbWlwYSAz', '0', '51967383'),
(105, 'MTAwOTM1ODA=', 'SmVsaXRhIExha3NpdGE=', 'MTAgbWlwYSAz', '0', '30789173'),
(106, 'NzMwMjM0MjU=', 'UnVkaSBNYXJhcyBQcmFzYXN0YQ==', 'MTAgbWlwYSAz', '0', '55450591'),
(107, 'MTg3NjI1ODc=', 'U2VwdGkgTWFuZGFzYXJp', 'MTAgbWlwYSAz', '0', '60797797'),
(108, 'MTU2OTY2MjU=', 'QmVsbGEgRnVqaWF0aSBTLlBzaQ==', 'MTAgbWlwYSAz', '0', '23759978'),
(109, 'ODkwMTUzOA==', 'SGFuYSBIYXJ5YW50aSBNLkFr', 'MTAgbWlwYSAz', '0', '30379329'),
(110, 'NzU3NDg3Mzk=', 'U2F0eWEgRGFtYW5payBTLlNvcw==', 'MTAgbWlwYSAz', '0', '20553296'),
(111, 'NzAxNTc4NzE=', 'UHJhYm93byBXYWh5dWRpbiBTLklQ', 'MTAgbWlwYSAz', '0', '34274644'),
(112, 'MzU0OTgyMTY=', 'SmVzc2ljYSBXYXN0dXRp', 'MTAgbWlwYSAz', '0', '24319133'),
(113, 'MjI4OTgwMTI=', 'UmF0bmEgWmVsYXlhIEhhcnRhdGkgUy5Heg==', 'MTAgbWlwYSAz', '0', '72988268'),
(114, 'Nzg1OTM5OTI=', 'SWJyYW5pIEphaWxhbmk=', 'MTAgbWlwYSAz', '0', '74811045'),
(115, 'Mzk0NzcxMDE=', 'Q2l0cmEgUHJhc3R1dGk=', 'MTAgbWlwYSAz', '0', '90118043'),
(116, 'MzI5NDM1NzM=', 'QW5nZ2FiYXlhIE5hamliIE11c3RvZmE=', 'MTAgbWlwYSAz', '0', '86003735'),
(117, 'Nzk3ODkwMTE=', 'UGFuZHUgU2luYWdh', 'MTAgbWlwYSAz', '0', '95508979'),
(118, 'OTU3Mjgx', 'R2FuZGEgUHJhdGFtYQ==', 'MTAgaXBzIDE=', '0', '13088279'),
(119, 'NzkwMTIwNDE=', 'VGVkaSBIdXRhcGVh', 'MTAgaXBzIDE=', '0', '59963950'),
(120, 'NzA1ODM3MA==', 'TmF0YWxpYSBOYXN5aWFo', 'MTAgaXBzIDE=', '0', '55162135'),
(121, 'NDgyNzM3MjU=', 'QXphbGVhIFZpY2t5IE1lbGFuaSBTLkkuS29t', 'MTAgaXBzIDE=', '0', '84042897'),
(122, 'Njk4NzY5Njc=', 'RWthIE1heWFzYXJp', 'MTAgaXBzIDE=', '0', '31231190'),
(123, 'NDg0OTYyMzA=', 'UGFkbWkgSXJpYW5hIFVzYWRhIE0uRmFybQ==', 'MTAgaXBzIDE=', '0', '63841596'),
(124, 'NDAzMjE0MDA=', 'TXVtcHVuaSBTYXB0b25vIFMuUHQ=', 'MTAgaXBzIDE=', '0', '28870784'),
(125, 'MzcyNTEyODQ=', 'QmFraWFudG8gQ2FuZHJha2FudGEgUHV0cmE=', 'MTAgaXBzIDE=', '0', '59881391'),
(126, 'NDczMzEwNDQ=', 'S2Vpc2hhIEhhbmkgTXVseWFuaSBTLlBk', 'MTAgaXBzIDE=', '0', '83035463'),
(127, 'MjI4OTE0MTk=', 'TGFuamFyIFBhbmdlc3R1', 'MTAgaXBzIDE=', '0', '23246591'),
(128, 'Nzk1MTkzMzU=', 'VmlvbGV0IE51cnVsIEFuZ2dyYWluaQ==', 'MTAgaXBzIDE=', '0', '80774532'),
(129, 'NTcyMjQzMTI=', 'RGFsaW1hIEFuZ2dyYWluaQ==', 'MTAgaXBzIDE=', '0', '93074124'),
(130, 'NTQ5Mzc2MTE=', 'UmFobWFuIFRhcmlob3Jhbg==', 'MTAgaXBzIDE=', '0', '39475930'),
(131, 'ODM4NzA3NTA=', 'R2FzdGkgSGFzYW5haA==', 'MTAgaXBzIDE=', '0', '77160669'),
(132, 'NTUyMDkwMDc=', 'UHJheWl0bmEgTHV0aGZpIEphbnVhcg==', 'MTAgaXBzIDE=', '0', '15850706'),
(133, 'NzUwMTk5MjE=', 'VmlybWFuIFdpbmFybm8gTS5NLg==', 'MTAgaXBzIDE=', '0', '24386432'),
(134, 'MTU3NTg0NjA=', 'R2F3YXRpIE5hc3lpYWg=', 'MTAgaXBzIDE=', '0', '28989884'),
(135, 'MjYxMzI1NzA=', 'TWFyaWEgTmFzeWlhaCBTLkZhcm0=', 'MTAgaXBzIDE=', '0', '22620194'),
(136, 'NjcyNDIyMDc=', 'THV3ZXMgRmlybWFuc3lhaA==', 'MTAgaXBzIDE=', '0', '84963130'),
(137, 'ODM5MjMyOTY=', 'V2FnZSBFbW9uZyBNYXJwYXVuZw==', 'MTAgaXBzIDE=', '0', '76022081'),
(138, 'OTM3NTgxOTI=', 'UGFkbWkgSGFsaW1haA==', 'MTAgaXBzIDE=', '0', '24704472'),
(139, 'MjE3NTE1NDc=', 'SmVsaXRhIEVsaSBBbmRyaWFuaQ==', 'MTAgaXBzIDE=', '0', '39163851'),
(140, 'MjE2MDczODc=', 'T25pIEphbWFsaWEgUGFkbWFzYXJp', 'MTAgaXBzIDE=', '0', '86091275'),
(141, 'NjU2NjQ3NzM=', 'Q2ljaSBEaWFuIEhhbGltYWggUy5JLktvbQ==', 'MTAgaXBzIDE=', '0', '46042484'),
(142, 'NDc2ODgzNzc=', 'SGlsZGEgTWF5YXNhcmk=', 'MTAgaXBzIDE=', '0', '15270900'),
(143, 'MTUyMTc1NDc=', 'RWxpc2EgS2lhbmRyYSBNYW5kYXNhcmk=', 'MTAgaXBzIDE=', '0', '82884475'),
(144, 'ODY4MjE3NDI=', 'SmFuZXQgTGF0aWthIEFuZ2dyYWluaQ==', 'MTAgaXBzIDE=', '0', '36741090'),
(145, 'NjcxNzA2NjE=', 'UmFobWF0IEt1c3dveW8=', 'MTAgaXBzIDE=', '0', '66906032'),
(146, 'ODc2Mjg3ODQ=', 'SGFyc2F5YSBQcmFib3dv', 'MTAgaXBzIDE=', '0', '96479728'),
(147, 'Njc4NTIxMTY=', 'RGFybWFuIERpcGEgSHV0YWdhbHVuZw==', 'MTAgaXBzIDE=', '0', '86752848'),
(148, 'Mjg1MDc3MDM=', 'SGVzdGkgVXNhZGE=', 'MTAgaXBzIDE=', '0', '78242500'),
(149, 'NDE4MTAxODc=', 'S2Vpc2hhIElmYSBNYXJkaGl5YWg=', 'MTAgaXBzIDE=', '0', '91909725'),
(150, 'NDIwMzMzNTY=', 'SnVsaSBQYXVsaW4gTm92aXRhc2FyaQ==', 'MTAgaXBzIDE=', '0', '56652130'),
(151, 'MzkwOTYxMDQ=', 'S2FyaW1haCBKdWxpYSBQdXJ3YW50aSBTLlBk', 'MTAgaXBzIDE=', '0', '86546874'),
(152, 'NTc2MzQ3NA==', 'T3BoZWxpYSBTdXJ5YXRtaQ==', 'MTAgaXBzIDE=', '0', '92039704'),
(153, 'MzMwMDc5NTM=', 'UGlhIFBlcm1hdGE=', 'MTAgaXBzIDE=', '0', '54920552'),
(154, 'MTk2NDM4MTY=', 'RW1wbHVrIFNpbWJvbG9u', 'MTAgaXBzIDE=', '0', '81020522'),
(155, 'NzkzMzA1OQ==', 'TWFpbXVuYWggUmFoaW1haA==', 'MTAgaXBzIDE=', '0', '52080203'),
(156, 'OTkzMTczNDg=', 'TWFyeWFkaSBNYW51bGxhbmc=', 'MTAgaXBzIDE=', '0', '51318055'),
(157, 'NzU4ODY4OTk=', 'S2VtYWwgUGVybWFkaQ==', 'MTAgaXBzIDE=', '0', '77673459'),
(158, 'NDgwNzAxNDA=', 'S2FzaXlhaCBSaXlhbnRpIFMuUHNp', 'MTAgaXBzIDE=', '0', '39150233'),
(159, 'NjAwNjc4NDU=', 'TGVnYXdhIFBhbmdlc3R1', 'MTAgaXBzIDE=', '0', '58965139'),
(160, 'MTM1Nzg0NzM=', 'QmFqcmFnaW4gRWx1aCBXYXNpdGEgTS5GYXJt', 'MTAgaXBzIDE=', '0', '33856476'),
(161, 'NjkxMDAxNDc=', 'RW1wbHVrIFRoYW1yaW4gUy5Lb20=', 'MTAgaXBzIDE=', '0', '93560030'),
(162, 'ODMwNTAxMjE=', 'UHVyd2EgU2lyZWdhcg==', 'MTAgaXBzIDE=', '0', '33779621'),
(163, 'Mjc4MjYyMDE=', 'SGFzdGEgRGltYXMgTWFuZ3Vuc29uZyBNLkFr', 'MTAgaXBzIDE=', '0', '88759524'),
(164, 'NjkzMjY4ODI=', 'SGFyamF5YSBSYWhhcmphIE1hcnlhZGk=', 'MTAgaXBzIDE=', '0', '41534397'),
(165, 'NjIwMTMxMTY=', 'QmFraW1hbiBTaW1hbmp1bnRhaw==', 'MTAgaXBzIDE=', '0', '61130425'),
(166, 'NDgwMDYxNzA=', 'UHJhc2V0eWEgQ2VuZ2thbCBOYWptdWRpbiBTLklQ', 'MTAgaXBzIDE=', '0', '87941067'),
(167, 'NDY4OTUyMDI=', 'WmFsaW5kcmEgUmF0bmEgQXN0dXRpIE0uS29tLg==', 'MTAgaXBzIDE=', '0', '76044304'),
(168, 'MTgxNjMwNDk=', 'R2FkYSBIYXJkaWFuc3lhaA==', 'MTAgaXBzIDE=', '0', '56019476'),
(169, 'ODc4ODgyNQ==', 'TWFsYSBRb3JpIEhhcnlhbnRpIFMuS29t', 'MTAgaXBzIDE=', '0', '64298405'),
(170, 'ODI5MDU4MDQ=', 'WXVuaSBDaWNpIEhhc3NhbmFo', 'MTAgaXBzIDE=', '0', '79428569'),
(171, 'MTUxMTgwNTk=', 'S2FyaW1haCBCZXRhbmlhIEhhc2FuYWg=', 'MTAgaXBzIDE=', '0', '25117028'),
(172, 'MjI0ODcwNzA=', 'SmFnYSBGaXJtYW5zeWFo', 'MTAgaXBzIDE=', '0', '58904695'),
(173, 'Nzc4ODQ4MzE=', 'RGFyc2lyYWggVGltYnVsIEhpZGF5YW50byBNLlBk', 'MTAgaXBzIDE=', '0', '63373585'),
(174, 'NDY2Mjc0Mzg=', 'WmVsYXlhIEt1c21hd2F0aQ==', 'MTAgaXBzIDE=', '0', '36673179'),
(175, 'MzQxMjc4MDM=', 'VmlrdG9yIFdpYmlzb25v', 'MTAgaXBzIDE=', '0', '27120897'),
(176, 'NjExOTg1MjQ=', 'TWFyaWFkaSBTYW50b3NvIFMuSVA=', 'MTAgaXBzIDE=', '0', '31537537'),
(177, 'NDIxMzM1NTE=', 'U2lkaXEgTWFycGF1bmc=', 'MTAgaXBzIDE=', '0', '16407794'),
(178, 'OTk2ODQ4Ng==', 'VmVyYSBQZXJtYXRh', 'MTAgaXBzIDE=', '0', '50164042'),
(179, 'MjI4MDM1Mjg=', 'U2FicmluYSBLYXlsYSBNZWxhbmk=', 'MTAgaXBzIDE=', '0', '19196015'),
(180, 'NDY3MjY5ODg=', 'QmFuYXJhIEhhcnlhbnRv', 'MTAgaXBzIDE=', '0', '99903589'),
(181, 'OTg1NTE4OTc=', 'S2FyaW1hbiBUaGFtcmlu', 'MTAgaXBzIDE=', '0', '98505685'),
(182, 'OTk2NTY3NTE=', 'UmFobWkgT2t0YXZpYW5p', 'MTAgaXBzIDE=', '0', '32319415'),
(183, 'NTMzMDU3MjU=', 'R2F0b3QgUHJhYm93byBTLkUuSQ==', 'MTAgaXBzIDE=', '0', '41616246'),
(184, 'Njc4MTI1ODU=', 'UHJhbmF3YSBXaWRvZG8=', 'MTAgaXBzIDE=', '0', '55398114'),
(185, 'NTg5ODQ2MzU=', 'QmVsaW5kYSBXYWh5dW5p', 'MTAgaXBzIDE=', '0', '69189647'),
(186, 'Njg0Njk5Nzk=', 'VmVybyBSYW1hZGFu', 'MTAgaXBzIDE=', '0', '48194730'),
(187, 'Njc0MDA1Mzk=', 'S2FkaXIgQmFodXdhcm5hIEh1dGFnYWx1bmc=', 'MTAgaXBzIDI=', '0', '75667474'),
(188, 'ODI2NTU2', 'SmFuZXQgV3VsYW5kYXJp', 'MTAgaXBzIDI=', '0', '42065531'),
(189, 'NzYwNTg1Nw==', 'U3lhaHJpbmkgTWFsYSBBc3R1dGk=', 'MTAgaXBzIDI=', '0', '57192974'),
(190, 'Mjk0MjA2Mjk=', 'U2lkaXEgSGFyeWFudG8=', 'MTAgaXBzIDI=', '0', '97001898'),
(191, 'NzQ3MzQwMzA=', 'S2FzaW0gSHV0YWdhbHVuZw==', 'MTAgaXBzIDI=', '0', '25343989'),
(192, 'NjEyODMxOQ==', 'V2FyamkgVGFtcHVib2xvbiBTLlBzaQ==', 'MTAgaXBzIDI=', '0', '22573889'),
(193, 'MjQyNzg2MjE=', 'UmV6YSBOdWdyb2hvIFMuVC4=', 'MTAgaXBzIDI=', '0', '75582913'),
(194, 'NzIyOTgxMTQ=', 'T2t0byBKYW51YXIgUy5Tb3M=', 'MTAgaXBzIDI=', '0', '47341340'),
(195, 'MzExNzE0NDE=', 'U2FicmluYSBNYXlhc2FyaQ==', 'MTAgaXBzIDI=', '0', '24706347'),
(196, 'NDkwMTk3MTE=', 'Tm92YSBMYWlsYXNhcmkgUy5Lb20=', 'MTAgaXBzIDI=', '0', '61117484'),
(197, 'NTExMzY5NTY=', 'TWFsYSBGYXJpZGEgUy5Qc2k=', 'MTAgaXBzIDI=', '0', '22293381'),
(198, 'MjQxMDY0MzY=', 'VGFsaWEgRnVqaWF0aSBTLkZhcm0=', 'MTAgaXBzIDI=', '0', '15391483'),
(199, 'MTQwMDM1OTI=', 'SnVtYXJpIFNpaG9tYmluZyBTLklQ', 'MTAgaXBzIDI=', '0', '19818108'),
(200, 'NDM0MDcxMzI=', 'T3B1bmcgWWFoeWEgSHV0YXNvaXQgUy5FLg==', 'MTAgaXBzIDI=', '0', '52939815'),
(201, 'ODk0MTI0NA==', 'QmFraWFkaSBQYW5nZXN0dQ==', 'MTAgaXBzIDI=', '0', '69930854'),
(202, 'NTc0NzU0NDg=', 'R2FuZGEgTmFzaGlydWRkaW4=', 'MTAgaXBzIDI=', '0', '73398370'),
(203, 'ODY0Nzg3NTU=', 'Q2FoeWFkaSBBcnRhIE1hdWxhbmEgTS5Baw==', 'MTAgaXBzIDI=', '0', '44537395'),
(204, 'NzczODEyNzk=', 'TWVsaW5kYSBMZXN0YXJp', 'MTAgaXBzIDI=', '0', '91533876'),
(205, 'MTUzNzIxNTQ=', 'UmFobWkgTGFpbGEgSGFyaXlhaA==', 'MTAgaXBzIDI=', '0', '67698820'),
(206, 'MTAwMTQ3ODM=', 'TWFoZXNhIFNpcmVnYXI=', 'MTAgaXBzIDI=', '0', '20669027'),
(207, 'NTI4Mzg3NTA=', 'SGFyam8gU2FlZnVsbGFo', 'MTAgaXBzIDI=', '0', '45850222'),
(208, 'MTA4MzAxMjM=', 'TXVseWEgSGFyaW11cnRpIE5haW5nZ29sYW4=', 'MTAgaXBzIDI=', '0', '28873261'),
(209, 'MzI0NzQ0NTk=', 'UmVuZHkgU2l0b21wdWw=', 'MTAgaXBzIDI=', '0', '27645185'),
(210, 'NjMwMzg4Mjg=', 'TWFydGFuYSBFbHVoIEhhYmliaSBTLlB0', 'MTAgaXBzIDI=', '0', '18413507'),
(211, 'NjA1MjUyNTM=', 'TXVseWEgTXVseW9ubyBIaWRheWFudG8=', 'MTAgaXBzIDI=', '0', '48648592'),
(212, 'Mzk1NTQ5NjM=', 'TGlsaSBTYWZpdHJp', 'MTAgaXBzIDI=', '0', '74303434'),
(213, 'NTgxMTE0NDQ=', 'Rml0cmlhIENvcm5lbGlhIEhhcml5YWg=', 'MTAgaXBzIDI=', '0', '82998713'),
(214, 'NzMxODgzMjI=', 'UmFobWkgTGFpbGFzYXJp', 'MTAgaXBzIDI=', '0', '99208035'),
(215, 'Njc4MzQxNjc=', 'QWxhbWJhbmEgSmFudWFy', 'MTAgaXBzIDI=', '0', '45395840'),
(216, 'NDQ4MTgyMzQ=', 'SGFyamF5YSBXYXNpdGE=', 'MTAgaXBzIDI=', '0', '47743076'),
(217, 'NjQ3OTEzMTk=', 'UHJha29zYSBTaW1ib2xvbg==', 'MTAgaXBzIDI=', '0', '77722133'),
(218, 'ODkzODg0NDA=', 'RGFsaW1pbiBQcmFkYW5h', 'MTAgaXBzIDI=', '0', '14942242'),
(219, 'OTMxOTgxMzQ=', 'WXVsaWEgQW5nZ3JhaW5p', 'MTAgaXBzIDI=', '0', '22352231'),
(220, 'MjExMzYxMTU=', 'U2hhbmlhIEt1c3dhbmRhcmkgUy5QZA==', 'MTAgaXBzIDI=', '0', '12515561'),
(221, 'NDQyOTE4ODQ=', 'S2F5bGEgTWFyeWF0aSBTLlNvcw==', 'MTAgaXBzIDI=', '0', '57676111'),
(222, 'NDIyNDIwNzk=', 'R2hhbGl5YXRpIFNoYWtpbGEgUHVzcGFzYXJpIE0uS29tLg==', 'MTAgaXBzIDI=', '0', '87282702'),
(223, 'NDA0NDg5NDc=', 'V2FydGEgUHJhc2V0eWE=', 'MTAgaXBzIDI=', '0', '39370440'),
(224, 'OTIxMzQ4MTI=', 'SmFuZXQgTnVyYWluaQ==', 'MTAgaXBzIDI=', '0', '33466057'),
(225, 'OTM3NjQxNjI=', 'WmFsaW5kcmEgTWVsYW5p', 'MTAgaXBzIDI=', '0', '54176577'),
(226, 'MjQwMzQ4Njk=', 'TWFpZGEgVXRhbWkgUy5JLktvbQ==', 'MTAgaXBzIDI=', '0', '49586947'),
(227, 'NzI0NjE3MTY=', 'RGFsaW1hbiBIYWxpbQ==', 'MTAgaXBzIDI=', '0', '67776443'),
(228, 'NzM4ODcwNzI=', 'Q2FyYWthIEFydGEgV2lqYXlh', 'MTAgaXBzIDI=', '0', '46991423'),
(229, 'MTc4MDM1ODg=', 'QmVsbGEgRnVqaWF0aQ==', 'MTAgaXBzIDI=', '0', '84840387'),
(230, 'OTk5MTQ3MjE=', 'S2FyZGkgV2liaXNvbm8=', 'MTAgaXBzIDI=', '0', '84559609'),
(231, 'MzgzNTM0MjA=', 'R2FsYWsgRGFkYXAgQW5nZ3JpYXdhbg==', 'MTAgaXBzIDI=', '0', '22171368'),
(232, 'MTk3Njc4MTk=', 'S2FtYXJpYSBOdXJhaW5p', 'MTAgaXBzIDI=', '0', '85861831'),
(233, 'MTM2MjgyOTE=', 'Q2FoeWFkaSBXYXNraXRh', 'MTAgaXBzIDI=', '0', '40312125'),
(234, 'Mzc1NTQ0MDg=', 'SmFtYWxpYSBQYWRtYXNhcmk=', 'MTAgaXBzIDI=', '0', '55702416'),
(235, 'OTUyMDEwMTY=', 'VGFtaSBSYWhheXU=', 'MTAgaXBzIDI=', '0', '71315102'),
(236, 'MzgzMDYxMjk=', 'S2FtYXJpYSBTdXNhbnRpIFMuU29z', 'MTAgaXBzIDI=', '0', '82852061'),
(237, 'MTIwMzgxNDU=', 'VGlhcmEgUmFoaW1haA==', 'MTAgaXBzIDI=', '0', '88518015'),
(238, 'NDc4NTE5NDg=', 'RGlhbmEgQWlzeWFoIE1lbGFuaSBTLklQ', 'MTAgaXBzIDI=', '0', '75246983'),
(239, 'ODc5MzM5MzI=', 'SmFnYXBhdGkgTGF6dWFyZGk=', 'MTAgaXBzIDI=', '0', '63500172'),
(240, 'ODcwNzQ5OQ==', 'S2F5dW4gTWFsaWsgVGFyaWhvcmFuIFMuR3o=', 'MTAgaXBzIDI=', '0', '95262031'),
(241, 'Njg0MTY4Mjk=', 'TmFiaWxhIFByYXRpd2k=', 'MTAgaXBzIDI=', '0', '79928632'),
(242, 'Mjk4ODEzOTA=', 'U2FkaW5hIE1hcmRoaXlhaA==', 'MTAgaXBzIDI=', '0', '78414068'),
(243, 'ODQ1MTc0MzI=', 'R2FsdWggQWppbWluIEFyZGlhbnRv', 'MTAgaXBzIDI=', '0', '99285791'),
(244, 'MzA2MzgzMzQ=', 'TWFpZGEgSnVsaWEgTWVsYW5pIFMuS29t', 'MTAgaXBzIDI=', '0', '55043120'),
(245, 'MzcxMzc4NQ==', 'T21hciBSaXpraSBQcmFkaXB0YSBTLlB0', 'MTAgaXBzIDM=', '0', '99832575'),
(246, 'MTAzMTI5NA==', 'WmFsaW5kcmEgQ2FsaXN0YSBOYXN5aWFoIFMuS2Vk', 'MTAgaXBzIDM=', '0', '19015613'),
(247, 'OTQyNDE5ODM=', 'S3VudGhhcmEgU2FlZnVsbGFoIFMuUHNp', 'MTAgaXBzIDM=', '0', '85253384'),
(248, 'MjU1MzEwOA==', 'U2lkaXEgSHV0YWdhbHVuZw==', 'MTAgaXBzIDM=', '0', '36680474'),
(249, 'NjE4MTU5MTk=', 'QXRtYWphIFByYXNldHlv', 'MTAgaXBzIDM=', '0', '72940730'),
(250, 'NTI0MzM0OTg=', 'U2hhbmlhIFB1c3BpdGE=', 'MTAgaXBzIDM=', '0', '32157697'),
(251, 'NzU2NTg1MTk=', 'RGFyaW1pbiBQcmFrYXNh', 'MTAgaXBzIDM=', '0', '73513724'),
(252, 'NjI3NzcyNjE=', 'Vml2aSBFbHZpbmEgSGFzYW5haA==', 'MTAgaXBzIDM=', '0', '82830649'),
(253, 'MjA4MTE1NjM=', 'RG9ubyBOYXNoaXJ1ZGRpbiBTLkkuS29t', 'MTAgaXBzIDM=', '0', '98143382'),
(254, 'Njk0MzE5Njg=', 'SGFzbmEgUHVqaSBOYXN5aWFo', 'MTAgaXBzIDM=', '0', '59921349'),
(255, 'Njk0Njc1Nzg=', 'SXJuYW50byBTdXdhcm5vIE0uTS4=', 'MTAgaXBzIDM=', '0', '80991366'),
(256, 'ODI1Mzc4Mzg=', 'TGlsaSBQdWRqaWFzdHV0aQ==', 'MTAgaXBzIDM=', '0', '64470924'),
(257, 'MzU0NDc3NDA=', 'R2lsZGEgSGFsaW1haA==', 'MTAgaXBzIDM=', '0', '45472787'),
(258, 'NDU5ODE1NDg=', 'R2FsaWggTWFoZW5kcmE=', 'MTAgaXBzIDM=', '0', '32657582'),
(259, 'MTU4MTkyMjI=', 'QmV0YW5pYSBXdWxhbmRhcmk=', 'MTAgaXBzIDM=', '0', '92634848'),
(260, 'NzE1MzM3MTE=', 'U2hhbmlhIFV5YWluYWg=', 'MTAgaXBzIDM=', '0', '48867498'),
(261, 'MjE4NTMxMjg=', 'U3VyeWEgQXNpcndhZGEgU2Ftb3Npcg==', 'MTAgaXBzIDM=', '0', '14394157'),
(262, 'OTM3MTQ4OTE=', 'U2FsaW1haCBQdWRqaWFzdHV0aQ==', 'MTAgaXBzIDM=', '0', '55654784'),
(263, 'Nzk5NDExMTI=', 'V2FzaXMgTmFycGF0aQ==', 'MTAgaXBzIDM=', '0', '50814503'),
(264, 'MTcyNjQ2NjI=', 'SXJpYW5hIEdhc3RpIFVzYWRhIFMuRS5J', 'MTAgaXBzIDM=', '0', '56780772'),
(265, 'NjY5NTQ1NzY=', 'TmFyamkgTnVncm9obyBTLkgu', 'MTAgaXBzIDM=', '0', '70015102'),
(266, 'OTY2Mjc3MDk=', 'TGFidWggU2FyYWdpaCBNLlBk', 'MTAgaXBzIDM=', '0', '72765579'),
(267, 'MjU4NDcyMTU=', 'VGFudHJpIEFuZ2dyYWluaQ==', 'MTAgaXBzIDM=', '0', '27275320'),
(268, 'OTA2OTgzNTQ=', 'SGFzbmEgSGFzc2FuYWg=', 'MTAgaXBzIDM=', '0', '43833672'),
(269, 'OTA3OTc4MDQ=', 'UHV0aSBNdWx5YW5p', 'MTAgaXBzIDM=', '0', '43295494'),
(270, 'ODQ3Nzg3NzI=', 'SGFzbmEgU3VzYW50aQ==', 'MTAgaXBzIDM=', '0', '12783601'),
(271, 'MjYzMjUyNjI=', 'TmFqYW0gTnVncm9obyBNLktvbS4=', 'MTAgaXBzIDM=', '0', '10424988'),
(272, 'NTQ5MTAyMjU=', 'U2FyYWggS3VzbWF3YXRpIFMuSVA=', 'MTAgaXBzIDM=', '0', '20945916'),
(273, 'NjgxNzIyNjg=', 'SmluYXdpIEFqaW1hdCBTaXR1bW9yYW5n', 'MTAgaXBzIDM=', '0', '52697234'),
(274, 'OTE0MjkzODQ=', 'QWppb25vIFN1d2Fybm8=', 'MTAgaXBzIDM=', '0', '35799436'),
(275, 'MjUxMzI2MzI=', 'S2VuemllIERhbmFuZyBLdXN1bW8gUy5QZA==', 'MTAgaXBzIDM=', '0', '46919793'),
(276, 'NzIyMjQxOTk=', 'WXVsaWFuYSBQdXJ3YW50aSBTLlNvcw==', 'MTAgaXBzIDM=', '0', '99213398'),
(277, 'OTgyNTY0NjQ=', 'SWhzYW4gUmFqYXRh', 'MTAgaXBzIDM=', '0', '54920286'),
(278, 'NDgzNDA3NjI=', 'V2FyZGF5YSBIdXRhZ2FsdW5n', 'MTAgaXBzIDM=', '0', '70088632'),
(279, 'NzE5OTQ0ODI=', 'VGFzZGlrIFdpamF5YQ==', 'MTAgaXBzIDM=', '0', '96415325'),
(280, 'OTQ4NjA5MDA=', 'SGFkaSBNYXJ5YWRp', 'MTAgaXBzIDM=', '0', '18161434'),
(281, 'NDI0NDI0MTc=', 'UmluYSBIYXJpeWFo', 'MTAgaXBzIDM=', '0', '57299716'),
(282, 'MTQ4ODA1MA==', 'R2hhbGl5YXRpIEFuZ2dyYWluaQ==', 'MTAgaXBzIDM=', '0', '10881200'),
(283, 'ODc2MDc5OTQ=', 'R2FuZGkgUmFpaGFuIFNldGlhd2Fu', 'MTAgaXBzIDM=', '0', '31497084'),
(284, 'NDQ5Mzg4NjQ=', 'Q2ljaSBPbmkgWnVsYWlrYSBTLkZhcm0=', 'MTAgaXBzIDM=', '0', '56151787'),
(285, 'NzU3OTE3NTk=', 'VGl0aW4gVWx5YSBVc2FkYSBTLkgu', 'MTAgaXBzIDM=', '0', '48054720'),
(286, 'MzIyMTE5OA==', 'U2FicmluYSBBaXN5YWggRnVqaWF0aQ==', 'MTAgaXBzIDM=', '0', '38728013'),
(287, 'Mjk5MTA0NjU=', 'TXVtcHVuaSBIYXJkYW5hIE5hdHNpcg==', 'MTAgaXBzIDM=', '0', '30447387'),
(288, 'Nzc5NjMzMDc=', 'UHJpbWEgUHJheW9nYQ==', 'MTAgaXBzIDM=', '0', '35591016'),
(289, 'NjE0MjY1NzM=', 'RGFsaW1pbiBUYXVmYW4gU2l0dW1vcmFuZyBNLlRJLg==', 'MTAgaXBzIDM=', '0', '52076296'),
(290, 'OTcxNjc2MjQ=', 'UmFkaXQgV2lqYXlhIFMuUHQ=', 'MTAgaXBzIDM=', '0', '15250308'),
(291, 'NjY5MTQ0NzE=', 'WWFuY2UgTm92YSBTdWFydGluaSBNLkFr', 'MTAgaXBzIDM=', '0', '29033911'),
(292, 'OTcxMzcxNTM=', 'TWFuYWggSGFiaWJp', 'MTAgaXBzIDM=', '0', '25267839'),
(293, 'NDczNTA4MjM=', 'Tm92aSBQZXJtYXRh', 'MTAgaXBzIDM=', '0', '90763120'),
(294, 'NTg0NTM5NDA=', 'SW50YW4gUHVqaSBMZXN0YXJpIE0uVEku', 'MTAgaXBzIDM=', '0', '29346974'),
(295, 'NTcwMzEyMjQ=', 'RGFsaW1hbiBTYXB1dHJh', 'MTAgaXBzIDM=', '0', '99329037'),
(296, 'MTQ0NjY5Mg==', 'V2FnZSBNYW5ndW5zb25n', 'MTAgaXBzIDM=', '0', '23091160'),
(297, 'NDQ1MDI3MTM=', 'TGF0aWthIFB1cndhbnRp', 'MTAgaXBzIDM=', '0', '69546389'),
(298, 'MjA3Njc5OTA=', 'VmltYW4gR3VuYXdhbg==', 'MTAgaXBzIDM=', '0', '77299285'),
(299, 'MzkxNzM5NDI=', 'WnVsYWlraGEgSGFzYW5haA==', 'MTAgaXBzIDM=', '0', '63209877'),
(300, 'OTEyMDA3NQ==', 'Vml2aSBXYXN0dXRp', 'MTAgaXBzIDM=', '0', '25164572');

-- --------------------------------------------------------

--
-- Table structure for table `t_result`
--

CREATE TABLE `t_result` (
  `xid` int(11) NOT NULL,
  `pilihan` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_school`
--

CREATE TABLE `t_school` (
  `xid` int(11) NOT NULL,
  `nmSekolah` varchar(100) NOT NULL,
  `almt` varchar(200) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `tglPilihan` date NOT NULL,
  `tglPilihans` date NOT NULL,
  `jamPilihan` time NOT NULL,
  `jamPilihans` varchar(20) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `gov` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_school`
--

INSERT INTO `t_school` (`xid`, `nmSekolah`, `almt`, `tlp`, `tglPilihan`, `tglPilihans`, `jamPilihan`, `jamPilihans`, `logo`, `status`, `gov`) VALUES
(1, 'SMAN 3 Jorong', 'Jl A Yani KM 96 Jorong', '0821 5324 0501', '2021-01-12', '2021-02-01', '09:00:45', '23:18:45', '2b88264baf224f5b253c972e14c2a63e.png', '', 'PROVINSI KALIMANTAN SELATAN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `rec_ip`
--
ALTER TABLE `rec_ip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_activity`
--
ALTER TABLE `t_activity`
  ADD PRIMARY KEY (`xid`);

--
-- Indexes for table `t_auth`
--
ALTER TABLE `t_auth`
  ADD PRIMARY KEY (`xid`);

--
-- Indexes for table `t_kandidat`
--
ALTER TABLE `t_kandidat`
  ADD PRIMARY KEY (`xid`);

--
-- Indexes for table `t_pemilih`
--
ALTER TABLE `t_pemilih`
  ADD PRIMARY KEY (`xid`);

--
-- Indexes for table `t_result`
--
ALTER TABLE `t_result`
  ADD PRIMARY KEY (`xid`);

--
-- Indexes for table `t_school`
--
ALTER TABLE `t_school`
  ADD PRIMARY KEY (`xid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rec_ip`
--
ALTER TABLE `rec_ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_activity`
--
ALTER TABLE `t_activity`
  MODIFY `xid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `t_auth`
--
ALTER TABLE `t_auth`
  MODIFY `xid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_kandidat`
--
ALTER TABLE `t_kandidat`
  MODIFY `xid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `t_pemilih`
--
ALTER TABLE `t_pemilih`
  MODIFY `xid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `t_result`
--
ALTER TABLE `t_result`
  MODIFY `xid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
