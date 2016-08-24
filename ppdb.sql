-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2016 at 10:36 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `password`) VALUES
('admin_ppdb', '704a35785dce3e746b72f7eb6b28133b');

-- --------------------------------------------------------

--
-- Table structure for table `ppdb`
--

CREATE TABLE IF NOT EXISTS `ppdb` (
  `id_ppdb` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tgl_lahir` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `kd_pos` varchar(10) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `berat_badan` float NOT NULL,
  `tinggi_badan` float NOT NULL,
  `ortu` varchar(35) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `penghasilan` varchar(25) NOT NULL,
  `hp_ortu` varchar(15) NOT NULL,
  `jml_sdr` int(4) NOT NULL,
  `anak_ke` int(4) NOT NULL,
  `jarak_sekolah` float NOT NULL,
  `sekolah_asal` varchar(40) NOT NULL,
  `nisn` varchar(25) NOT NULL,
  `thn_lulus` varchar(4) NOT NULL,
  `prestasi` text NOT NULL,
  `bhs` float NOT NULL,
  `mtk` float NOT NULL,
  `ing` float NOT NULL,
  `ipa` float NOT NULL,
  `rata` float NOT NULL,
  `jurusan` varchar(15) NOT NULL,
  `rencana` varchar(35) NOT NULL,
  `transportasi` varchar(25) NOT NULL,
  PRIMARY KEY (`id_ppdb`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppdb`
--

INSERT INTO `ppdb` (`id_ppdb`, `nama`, `jenis_kelamin`, `agama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `rt`, `rw`, `kd_pos`, `telp`, `hp`, `berat_badan`, `tinggi_badan`, `ortu`, `pekerjaan`, `penghasilan`, `hp_ortu`, `jml_sdr`, `anak_ke`, `jarak_sekolah`, `sekolah_asal`, `nisn`, `thn_lulus`, `prestasi`, `bhs`, `mtk`, `ing`, `ipa`, `rata`, `jurusan`, `rencana`, `transportasi`) VALUES
('20160001', 'Alex', 'Laki-laki', 'Islam', 'Kudus', '25 Februari 2016', 'Kudus', '9', '2', '39201', '02913030', '0829301', 187, 67, 'Alex', 'PNS Pemda', '1.900.000', '0819298', 9, 3, 9, 'SMP', '9283918', '2015', 'Juara', 100, 100, 100, 100, 100, 'Farmasi', '', ''),
('20160002', 'Alex Nordin', 'Laki-laki', 'Katolik', 'Kudus', '23 Februari 2016', 'Kudus', '3', '2', '59320', '', '', 90, 190, 'Alex', 'POLRI', '2.900.000', '08123784999', 8, 4, 9, 'SMP', '092838489182', '2015', '', 90, 98, 89, 88, 91.25, 'Kimia Industri', 'Bersama keluarga/ken', 'Sepeda Motor'),
('20160003', 'Janoko', 'Laki-laki', 'Islam', 'Kudus', '23 Februari 2016', 'Kudus. Papringan', '2', '3', '59340', '', '0812738495', 78, 190, 'Janoko', 'PNS Pemda', '2.000.000', '', 6, 2, 9, 'SMP 2 Kaliwungu', '91029384938', '2015', '', 70, 70, 70, 70, 70, 'Farmasi', 'Bersama keluarga/kenalan', 'Sepeda Motor');
