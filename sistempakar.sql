-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 11:52 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistempakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `user_id`, `judul`, `deskripsi`, `tanggal`, `gambar`) VALUES
(5, 1, '74 Ekor Sapi Warga Mukomuko Mati Terserang Penyakit Jembrana', 'SEDIKITNYA 73 ekor sapi milik warga di sembilan kelurahan di Kabupaten Mukomuko, Bengkulu, mati tersetang penyakit jembrana sejak dua bulan terakhir.\r\nKepala Bidang Peternakan Kabid Peternakan Dinas Pertanian Perintah Kabupaten Mukomuko, Warsiman di Bengkulu, mengatakan, sedikitnya 73 ekor  aapi milik warga mati diduga akibat serangan penyakit Jembrana.\r\n     \r\n\"Jumlah sapi milik warga disembilan kelurahan di Kecamatan Mukomuko, yang mati mulai Januari hingga awal Maret 2019 mencapai 73 ekor sapi karena dilepasliarkan pemiliknya,\" katanya.\r\nPenyakit jembrana, lanjut dia, akan terus menular kepada sapi milik masyarakat yang ada di daerah tersebut walaupun petugas kesehatan hewan yang ada di Kabupaten Mukomuko, terus melakukan vaksin dan pengobatan terhadap ternak sapi yang terserang jembrana. \r\nNamun hal itu bukan menjadi jaminan penyebaran penyakit dapat dihentikan.\r\nSaat ini, upaya yang dilakukan selain sapi mendapatkan vaksin dari Dinas Peternakan kabupaten setempat juga meminta pemilik ternak jangan melepasliarkan ternaknya.\r\n\"Jika ada indikasi penyakit yang menyerang agar segera mungkin dilaporkan sehingga pihaknya bersama petugas kesehatan hewan akan langsung turun ke lapangan untuk mengambil langkah pencegahan dan pengobatan,\" imbuhnya.\r\nPuluhan ekor sapi yang mati disembilan kelurahan di Kecamatan Mukomuko yakni, Pasar Mukomuko, Bandar Ratu, Koto Jaya, Ujung Padang, Tanah Rekah, Pasar Sebelah, Pondok Batu, Selagan Jaya, dan Tanah Harapan.\r\n      \r\nCik Buyung, 52, warga Kelurahan Pasar Mukomuko, Kabupaten Mukomuko, Bengkulu, mengatakan, penyakit jembrana terus menyerang ternak sapi di Kecamatan Mukomuko sehingga sudah puluhan ekor sapi mati.\r\n\"Peternak sapi sudah diingatkan agar jangan melepasliarkan ternak dan segera melakukan vaksin agar dapat mengurangi penularan penyakit jembrana,\" katanya.\r\nPenyakit jembrana merupakan penyakit menular akut pada sapi Bali yang disebabkan oleh virus Retrovirus merupakan keluarga lentivirinae yang termasuk dalam famili retroviridae.\r\nSerangan pada ternak sapi Bali, ditandai dengan berbagai gejala seperti depresi, anoreksia, demam, perdarahan ekstensif di bawah kulit, dan kebengkakan kelenjar limfe, terutama limfoglandula prefemoralis dan preskapularis.\r\nSelain itu, disertai adanya diare berdarah, ditemukan juga pada banyak kasus penyakit yang disertai perdarahan kulit sehingga penyakit ini juga disebut sebagai penyakit keringat darah. (OL-3)', '2019-03-11', 'gambar_artikel/cZp0jhYd4jyPq91qj3Wg5B4IWQotCDcRywEcEmgX.png'),
(6, 1, 'Ketahui Penyakit Sapi Nonbakteri yang Umum Menyerang', 'Penyakit sapi tak hanya disebabkan oleh bakteri. Penyakit ini juga bisa datang dari jenis mikroorganisme lain seperti basil, kapang, parasit, dan lain-lain. Pastikan sapi ternak Anda terbebas dari daftar penyakit ini untuk produktivitas sapi yang lebih tinggi. Mikosis\r\nMikosis merupakan gangguan reproduksi ternak sapi. Penyakit ini diakibatkan oleh infeksi kapang Aspergillus fumigatus, Aspergillus absidia, dan Aspergillus mucor. Keberadaan kapang ini dapat diketahui dari fetus yang diaborsikan.\r\nDalam buku Panduan Lengkap Sapi Potong yang diterbitkan oleh Penerbit Penebar Swadaya, diketahui gejala dari mikosis adalah abortus pada pertengahan atau akhir kebuntingan. Biasanya, abortus ini disebabkan infeksi akibat sapi menelan atau menghirup spora kapang dari pakan yang sudah berjamur.\r\nAnaplasmosis\r\nJenis penyakit sapi nonbakteri yang kedua adalah anaplasmosis. Penyakit ini disebabkan oleh parasit bernama Anaplasma marginale yang menyerang sel-sel darah merah. Gejala yang terjadi jika sapi Anda menderita anaplasmosis adalah kerja jantung yang tidak teratur, sapi susah bernapas, mulut kering, otot gemetar, nafsu makan hilang, depresi, serta produksi susu yang menurun drastis.\r\nKembung\r\nAda dua jenis kembung atau bloat yang dapat menyerang sapi ternak, yaitu rumen bloat dan abomasums bloat. Jenis kedua jarang menyerang sapi dewasa. Sementara, penyebab dari rumen bloat justru sangat beragam dan berupa akumulasi gas berlebihan di dalam rumen.\r\nAnda dapat mencari tahu gejala, pencegahan, dan pengobatannya dalam buku Panduan Lengkap Sapi Potong yang diterbitkan oleh Penerbit Penebar Swadaya. Karena jika tidak segera diatasi, gas yang terperangkap akan semakin sulit dikeluarkan dari tubuh sapi.\r\nCacingan\r\nSudah bukan rahasia bila sapi sangat rawan terkena cacingan. Cacingan sendiri merupakan parasit internal yang dapat menekan produktivitas sapi. Dua jenis cacing yang paling banyak menyerang dan merugikan peternakan sapi potong adalah cacing hati dan cacing pita.\r\nKudis\r\nKali ini, penyakit sapi yang disebabkan selain bakteri adalah kudis. Kudis sendiri adalah penyakit kulit yang disebabkan tungau jenis Chorioptesbovis. Kudis kerap menyerang bagian kaki dan pangkal ekor sapi. Tungau dapat masuk ke kulit, serta dapat menulari manusia.', '2019-10-11', 'gambar_artikel/4dNRxxoAK78UCznnBSYy4vKbHUuVUXKLqhs3CHHf.png'),
(7, 1, 'Penyakit Paling Berbahaya pada Sapi', 'Jika mau ditelusuri tentang penyakit-penyakit pada sapi tentunya akan ditemukan banyak sekali jenis dan macam penyakit yang bisa menyerang ternak yang satu ini. Namun, ada penyakit paling berbahaya pada sapi yang perlu peternak waspadai, yakni penyakit antraks.\r\nPenyakit ini sangat berbahaya dan mematikan, bisa menyerang ternak sapi dan juga bisa menular pada manusia. Penyakit antraks atau radang limpa merupakan penyakit yang disebabkan oleh bakteri Bacillius anthracis.\r\nBakteri ini dapat menular melalui kontak langsung, makanan atau minuman serta melalui pernapasan. Semua tingkatan umur sapi dapat terserang penyakit ini. Proses penularannya pun sangat cepat dan bisa menular pada manusia.\r\nGejala atau tanda-tanda sapi yang terserang antraks sebagai berikut.\r\n•	Suhu badan sapi sangat tinggi sehingga sapi mengalami demam tinggi, badan lemah, dan gemetar.\r\n•	Sapi mengalami ngos-ngosan alias susah bernapas dan tersengal-sengal karena ternak mengalami gangguan pernapasan yang parah.\r\n•	Pembengkakan yang parah pada kelenjar dada, leher, alat kelamin, dan sekujur badan sapi badan penuh bisul.\r\n•	Kadang-kadang keluar darah berwarna merah kehitaman melalui hidung, telinga, mulut, anus, dan vagina sapi.\r\n•	Kotoran ternak cair dan sering bercampur darah.\r\n•	Jika sapi yang mati karena antraks diotopsi, maka bagian limpa terlihat bengkak dan berwarna kehitaman.\r\nPencegahan yang dapat dilakukan peternak supaya sapi terhindar dari penyakit antraks sebagai berikut.\r\n•	Menjaga kebersihan dan sanitasi kandang\r\n•	Tidak memasukkan ternak sapi dari daerah-daerah yang masih belum bebas antrak\r\n•	Pemberian vaksin antraks untuk sapi-sapi yang baru masuk kandang\r\n•	Ternak yang divaksinasi dengan vaksin spora dengan dosis 1cc. vaksinasi ini dilakukan 6 bulan sekali atau menggunakan serum anti-antraks dengan dosis 50—100 cc per ekor.\r\nApabila sapi sudah terserang penyakit antraks, maka peternak harus segera memberi penanganan dengan cara berikut.\r\n•	Ternak sapi disuntik dengan suntikan antibiotika procain pinicilin. Dosis yang digunakan, yaitu 6.000—10.000 cc/kg berat badan sapi.\r\n•	Segera pisahkan sapi yang sakit di dalam kandang karantina.\r\nAkan tetapi, apabila sapi mati karena terkena serangan penyakit ini, segera lakukan pembakaran. Pembakaran dimaksudkan untuk mencegah penularan penyakit pada ternak yang sehat. Setelah dibakar, sapi dikubur dalam lubang yang dalam karena bakteri antraks masih bisa hidup meskipun dibakar dan masih bisa menginfeksi sapi lain lainnya.', '2019-11-13', 'gambar_artikel/JrqsadsgzcA3xC7N81NNgp9U7Q7EfqeFqc5kRV6S.png'),
(8, 1, 'Peternakan Sapi Perah Cipta Raharja', 'Tentang sapi perah, bisa dikatakan tidak ada sapi lokal yang memiliki karakter sebagai sapi perah. Populasi sapi perah yang ada di Indonesia saat ini kebanyakan didatangkan pada abad ke-18. Saat itu pemerintah kolonial mendatangkan sapi Friesien Holstein (FH) dari Belanda untuk memeuhi kebutuhan susu orang-orang Belanda di Indonesia.\r\nHingga kini sapi FH mendominasi ternak sapi perah di Indonesia. Padahal sapi FH merupakan jenis sapi perah untuk daerah subtropis. Sehingga produktivitasnya tidak sebaik di daerah asalnya. Terlebih lagi mutu genetik sapi FH yang ada di Indonesia sudah tidak terlalu baik.\r\nPeternakan sapi perah yang berada di nyalindung kab sukabumi, jawa barat ini masih mempertahankan adat tradisionalya yaitu dengan memerah susu masih menggunakan tangan.\r\nKelompok ini memiliki 30 orang anggota. Ada sebanyak 116 ekor sapi yang dipelihara, termasuk induk dara, dan anakan. Setiap paginya, para peternak disibukan dengan aktifitas memeras susu, dan di lanjutkan dengan mengambil ilalang untuk pakan sapi.\r\n\r\nPeternakan ini bisa memproduksi sekitar 15 liter susu setiap harinya.\r\nSusu segar yang dihasilkan biasa dijual ke pabrik pengolah di wilayah Kota Sukabumi. satu liter susu sapi dihargai Rp 4 ribu rupiah saja. Selain harga yang terbilang masih rendah, para peternak sapi di kampung ini juga kesulitan untuk menyediakan pakan ,Rumput segar yang menjadi pakan pokok untuk ternaknya, sulit didapat.\r\nDan biasanya pakan sapi ini dicampur dengan ampas tahu untuk menghasilkan susu yang terbaik. Adapun yang unik dari peternakan sapi perah ini dengan per silangan antara dengan sapi FH dengan sapi import.Dan untuk kesehatan pada sapi itu sendiri dilakukan 3 bulan sekali oleh dokter yang berada disekitar peternakan sapi perah cipta raharja ini jika melebihi waktu yang ditentukan sapi akan terkena cacingan.', '2019-11-06', 'gambar_artikel/T5x8MzYpcMmE7H6hypiM2LipM2H4NW34Iy9lJBbZ.png'),
(9, 1, 'Waspada Penyakit Sapi Gila', 'Kasus penyakit sapi gila ditemukan di peternakan di Aberdeenshire, Skotlandia, yang dilaporkan pada 18 Oktober 2019. Kejadian ini adalah kasus penyakit sapi gila atau bovine spongiform encephalopathy (BSE) pertama di Skotlandia sejak wabah besar menghancurkan industri pertanian selama beberapa tahun silam.\r\nPenyakit sapi gila adalah gangguan pada otak yang disebabkan oleh infeksi prion (protein abnormal pada hewan ternak). Prion ditemukan pada otak, mata, dan saraf tulang belakang hewan ternak. Penyebab awalnya karena sapi diberi makan bangkai kambing, domba, atau sapi yang mati karena penyakit. Lalu, bangkainya diambil dari rumah pemotongan hewan, dibakar, dan dijadikan tepung yang dikenal dengan nama meat bone meal. \r\nKemudian, protein prion normal berubah menjadi bentuk patogenik (berbahaya) yang merusak sistem saraf pusat ternak. Mengapa hal itu bisa terjadi? Penyebabnya hingga kini belum dipahami \r\nInfeksi prion mengarah ke lubang-lubang kecil di bagian otak sapi, tampilannya seperti spons ketika dilihat dengan mikroskop. Lubang-lubang yang disebut spons tersebut berdampak pada otak sapi. Akhirnya, gejala-gejala lain berkembang memengaruhi seluruh tubuh sapi. Bila sudah menyerang otak, prion akan berkembang dan merusak sistem saraf sehingga membuat sapi agresif dan kehilangan koordinasi. \r\nOleh karena itulah, kondisi ini disebut penyakit sapi gila.\r\nPrion sangat tahan terhadap panas, sinar ultraviolet, radiasi, dan disinfektan yang biasanya membunuh virus dan bakteri. Prion dapat menginfeksi manusia yang makan daging dari sapi yang telah tercemar tersebut. Bahkan memasak daging yang terinfeksi BSE tidak menghilangkan prion atau risikonya.\r\nBila hewan ternak sudah terkena penyakit ini, akan ada beberapa gejala yang terlihat, misalnya penurunan berat badan, penurunan kondisi tubuh, dan produksi susu. Terjadi pula perubahan perilaku hewan, seperti gelisah, mudah terkejut, dan ketakutan. Selain itu, sapi juga mengalami sering gemetar atau sulit bangun bila terjatuh. \r\nPenyakit sapi gila kali pertama terdeteksi pada ternak Inggris pada tahun 1986. Kemudian, pada 1993 mencapai puncaknya, ada 1.000 kasus baru dilaporkan setiap minggu.\r\nKemudian, pada 20 Mei 2003, terdapat kasus sapi gila pertama di Kanada. Oleh karena kejadian ini, Meksiko, Jepang, dan Korea Selatan bergabung dengan Amerika Serikat untuk sementara melarang daging dari Kanada masuk ke negara masing-masing.', '2019-11-07', 'gambar_artikel/j9hDjlPhFJgF97wlWYApDDCRzbCEmmYQ9Sb5xglO.png'),
(10, 1, 'coba', 'dsgsdgsdsdgsdg', '2020-11-30', 'gambar_artikel/loKSYgZ95CGZdMUS8jnH9kcWDN0FXPXZCpTxrTNU.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `gejala1`
--

CREATE TABLE `gejala1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `kode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala1`
--

INSERT INTO `gejala1` (`id`, `name`, `kode`) VALUES
(1, 'Nafsu Makan Berkurang', 'G1'),
(2, 'Demam', 'G2');

-- --------------------------------------------------------

--
-- Table structure for table `gejala2`
--

CREATE TABLE `gejala2` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_keluhan` int(11) NOT NULL,
  `kode_1` varchar(100) NOT NULL,
  `kode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala2`
--

INSERT INTO `gejala2` (`id`, `name`, `id_keluhan`, `kode_1`, `kode`) VALUES
(1, 'Demam', 1, 'G1', 'G21'),
(2, 'Kelenjar susu merah', 1, 'G1', 'G22'),
(3, 'Sering kentut', 1, 'G1', 'G23'),
(4, 'Keluar cairan dari mata dan hidung', 2, 'G2', 'G24'),
(5, 'Kulit mata dan hidung membengkak', 2, 'G2', 'G25');

-- --------------------------------------------------------

--
-- Table structure for table `gejala3`
--

CREATE TABLE `gejala3` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_keluhan` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `kode_1` varchar(100) NOT NULL,
  `kode_2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala3`
--

INSERT INTO `gejala3` (`id`, `name`, `id_keluhan`, `kode`, `kode_1`, `kode_2`) VALUES
(1, 'Kurus', 1, 'G31', 'G1', 'G21'),
(2, 'Gangguan pernafasan/respirasi', 1, 'G32', 'G1', 'G21'),
(3, 'kencing warna merah', 1, 'G33', 'G1', 'G21'),
(4, 'air susu menggumpal', 2, 'G34', 'G1', 'G22'),
(5, 'air liur berlebih', 3, 'G35', 'G2', 'G24'),
(6, 'mata dan hidung bernanah', 5, 'G36', 'G2', 'G25'),
(10, 'gangguan pernafasan/respirasi', 4, 'G37', 'G1', 'G23');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resi` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `name_produk`, `user_id`, `qty`, `total`, `price`, `bukti`, `resi`, `created_at`, `updated_at`) VALUES
(40, '[\"MENVIT\"]', 41, '[1]', '49,000.00', '[49000]', 'bukti/ByR9Wrt0KCetNXquO5zM1QQpsO4kBIVZR4yD27Ol.jpeg', '12321', '2019-11-25 07:07:49', '2019-11-25 07:28:09'),
(42, '[\"VITERNA PLUS\"]', 24, '[\"2\"]', '100,000.00', '[50000]', 'bukti/6AW1xXD7hPfxfI3dwct8YZB81AiRHb3hCFa0CAmv.jpeg', NULL, '2019-11-27 13:31:57', '2019-11-27 13:31:57'),
(43, '[\"VITERNA PLUS\",\"HORMONIK\"]', 24, '[\"2\",\"1\"]', '123,000.00', '[50000,23000]', 'bukti/LgpjGKFeNWkJi9hCeYCPMJMz2Ryn7OegE1EoHJBn.png', NULL, '2019-11-27 13:32:45', '2019-11-27 13:32:45'),
(44, '[\"VITERNA PLUS\"]', 24, '[\"2\"]', '100,000.00', '[50000]', 'bukti/ssEkzInLLIRADVGe6ufD779bLM1K0eK1HINSpQu9.jpeg', NULL, '2019-11-27 14:13:55', '2019-11-27 14:13:55'),
(49, '[\"HORMONIK\"]', 24, '[\"1\"]', '23,000.00', '[23000]', 'bukti/XppmcwBcb5XIPRdFM4S0YcKw8czYI1dYlWcHzq4j.jpeg', NULL, '2019-11-29 11:13:46', '2019-11-29 11:13:46'),
(50, '[\"VITERNA PLUS\"]', 24, '[\"2\"]', '100,000.00', '[50000]', 'bukti/6eB6RwVJnhMUsGdLZBhtwleNDnarDS8pusFjMYZB.jpeg', NULL, '2019-11-29 21:20:58', '2019-11-29 21:20:58'),
(51, '[\"HORMONIK\",\"POC NASA\"]', 24, '[\"03\",\"3\"]', '216,000.00', '[23000,49000]', 'bukti/gCFVOVTd8KkqBXl4RnJICsikrpGWAMRZWlVVONfM.png', '99999', '2019-11-30 01:00:38', '2019-11-30 01:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `namePenyakit` varchar(100) NOT NULL,
  `id_keluhan` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `obat` varchar(100) NOT NULL,
  `kode_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `namePenyakit`, `id_keluhan`, `keterangan`, `obat`, `kode_3`) VALUES
(1, 'pneumonia', 1, 'Pneumonia (Radang Paru-Paru) merupakan penyakit yang menyerang paru-paru pada bagian parenkhim, sehingga menyebabkan gangguan pada fungsi sistem pernapasan. Penyakit ini menyerang hampir setiap hewan yang kadang banyak ditemukan bersamaan dengan radang bronchus hingga terjadi bronchopneumonia. Penyakit pneumonia yang disebabkan oleh bakteri biasanya akibat virus pasteurella multocida, Stretococcus sp, Mycobacterium tuberculosa. Yang disebabkan oleh virus biasanya bersifat akut.', 'vaksin antibiotika dan Vitamin C', 'G31'),
(2, 'septicaemia', 2, 'Septicemia (Ngorok) adalah sebuah penyakit akut atau menahun yang biasa terjadi pada sapi ataupn kerbau. Sesuai dengan namanya. pada kerbau dalam stadium terminal, akan menunjukan gejala ngorok, pembengkakan busung pada daerah kelenjar liur yang terletak pada rahang bawah', 'seroterapi', 'G32'),
(3, 'leptospirosis', 3, 'Leptospirosis adalah penyakit yang disebabkan oleh bakteri Leptospira interrogans yang disebarkan melalui urine atau darah hewan yang terinfeksi bakteri ini. Beberapa jenis hewan yang dapat menjadi pembawa leptospirosis adalah anjing, hewan pengerat seperti tikus, dan kelompok hewan ternak seperti sapi atau babi. Bakteri tersebut dapat bertahan hidup dalam ginjal hewan yang terinfeksi.', 'penisilin dan doksisiklin.', 'G33'),
(4, 'mastitis', 4, 'Mastitis adalah penyakit radang pada ambing bagian dalam yang di sebabkan mikroorganisme patogen atau bakteri penyebab mastitis di dalam kelenjar susu serta adanya reaksi peradangan pada jaringan ambing. Hasil metabolisme mikroba akan merusak dan mengganggu fungsi selsel alveoli. Mastitis menyerang sapi perah ada 2 macam, yaitu mastitis klinis dan subklinis (tandatanda mastitis tidak jelas). Mastitis sub klinis merupakan kasus yang paling banyak dan sering terjadi di lapangan pada peternakan sapi perah, dapat mencapai 95-98% dari jumlah sapi laktasi (produksi), sedangkan mastitis klinis, 2-5%.', 'brood Spectrum, Chloram phenicol', 'G34'),
(5, 'bloat', 5, 'Kembung (Bload) Adalah penimbunan gas yang berlebihan pada rumen sehingga legok lapar menggelembung. Bloat atau tympani merupakan penyakit alat pencernaan yang disertai penimbunan gas dalam lambung akibat proses fermentasi berjalan cepat. Pembesaran rumenoretikulum oleh gas yang terbentuk, bisa dalam bentuk busa persisten yang bercampur isi rumen (kembung primer) dan gas bebas yang terpisah dari ingesta (kembung sekunder).', 'Anti Bloat', 'G35'),
(6, 'ephemerul fever', 6, 'Bovine Ephemeral Fever (BEF) adalah suatu penyakit viral pada sapi yang ditularkan oleh serangga (arthropod borne viral disease), bersifat benign non contagius, yang ditandai dengan demam mendadak dan kaku pada persendian. Penyakit dapat sembuh kembali beberapa hari kemudian.', 'antibiotik', 'G36'),
(7, 'malignant catarhal fever', 7, 'Malignant Catarrhal Fever (MCF) adalah suatu penyakit yang umumnya fatal pada hewan ruminansia seperti sapi, banteng, kerbau dan rusa dan banyak spesies lainnya dari Artiodactyla yang terjadi karena infeksi alcelaphine herpesvirus-1 (AIHV-1) or ovine herpesvirus-2 (OvHV-2). MCF juga dikenal sebagai Malignant catarrh, Malignant Head Catarrh, Gangrenous Coryza, Catarrhal Fever, dan Snotsiekte. Di Afrika Selatan dikenal sebagai snotting sickness. Di Indonesia MCF juga disebut sebagai Bovine Epimeral Fever dan penyakit ini merupakan penyakit yang umum menyerang sapi di Indonesia (Sianturi, 2007).', '-', 'G37');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_produk` int(11) NOT NULL,
  `price_produk` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `user_id`, `name_produk`, `stock_produk`, `price_produk`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(46, 26, 'VITERNA PLUS', 10, 60000, 'Meningkatkan kuantitas daging Meningkatkan kualitas daging ternak dengan mengurangi kandungan kolesterol.Meningkatkan kesehatan hewan ternak', 'gambar_produk/Xj2Lt9bmtM9D9IHdW44R5dAPcGLBlUX7jRfhcq8H.jpeg', '2019-11-03 00:59:53', '2019-11-29 21:30:50'),
(47, 26, 'HORMONIK', 4, 23000, 'zat pengatur tumbuh bagi ternak. Di mana formula ini akan sangat membantu meningkatkan pertumbuhan ternak secara keseluruhan.', 'gambar_produk/mYKwCdaFHioxQ60LzDI5Lvp0BoqUCpQqGrDTEnhI.jpeg', '2019-11-03 01:00:36', '2019-11-25 20:49:56'),
(48, 28, 'POC NASA', 7, 49000, 'Meningkatkan bobot ternak dan Meningkatkan nafsu makan', 'gambar_produk/wS5rW0d30SIfzYxS3AguP7trMdX0SGzuqzmjN25x.jpeg', '2019-11-03 01:01:52', '2019-11-03 01:01:52'),
(49, 28, 'TYLORATE', 8, 30000, 'Obat Batuk', 'gambar_produk/ynVr6wKJwfNjNJ2Nr3wxGp8y9XBlYQdvRWrzZJrv.jpeg', '2019-11-03 01:02:37', '2019-11-03 01:02:37'),
(50, 27, 'MENVIT', 9, 49000, 'Meningkatkan nafsu makan dan Mengurangi kelelahan', 'gambar_produk/hfHnxYMjIBM9vmBaB2oRTD7P8XvxPbiFGuYhui1k.png', '2019-11-03 01:04:08', '2019-11-03 01:04:08'),
(51, 27, 'VITOL – 140', 8, 35000, 'Meningkatkan pertumbuhan, meningkatkan kekebalan tubuh terhadap penyakit terutama pada hewan muda.', 'gambar_produk/mXg6YHwORqmr4rTmgYKyqhsR0MBGSNxmUvB1aEp0.jpeg', '2019-11-03 01:08:05', '2019-11-03 01:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2019-10-13 07:54:33', '2019-10-13 07:54:33'),
(2, 'Dokter', '2019-10-13 07:54:33', '2019-10-13 07:54:33'),
(3, 'Peternak', '2019-10-13 07:54:33', '2019-10-13 07:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(21, 24, 3, NULL, NULL),
(22, 25, 2, NULL, NULL),
(23, 26, 2, NULL, NULL),
(24, 27, 2, NULL, NULL),
(25, 28, 2, NULL, NULL),
(26, 29, 3, NULL, NULL),
(27, 30, 3, NULL, NULL),
(28, 31, 2, NULL, NULL),
(29, 32, 2, NULL, NULL),
(30, 37, 3, NULL, NULL),
(31, 39, 3, NULL, NULL),
(32, 40, 3, NULL, NULL),
(33, 41, 3, NULL, NULL),
(34, 42, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JenisKelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `JenisKelamin`, `phone`, `remember_token`, `created_at`, `updated_at`, `tanggal_lahir`, `alamat`, `foto`) VALUES
(1, NULL, 'admin', 'admin@gmail.com', 'users/default.png', NULL, '$2y$10$Ar5Bo1B6z8.hjb9.mBHJOOO4vI/eFWLX07D1VlOEfrHTFurkLFDkm', 'Laki-Laki', '0', NULL, '2019-10-13 08:12:46', '2019-10-13 08:12:46', '2019-10-22', 'Jl. Jawa', ''),
(24, NULL, 'Mahrus', 'mahrus@gmail.com', 'users/default.png', NULL, '$2y$10$QDSt0hi6tFtBWpjI5/OwZO4bmd2sUUfT8JjwVuw3sfwEhNe.vC8wa', 'Laki-Laki', '083832299180', NULL, '2019-11-02 20:49:57', '2019-11-02 22:11:17', '2019-11-13', 'Jl. Belitung 14', 'gambar_user/RIgaaINQZHnDNH6edmuImkXyIkCLXZ5l9xsvinbn.png'),
(25, NULL, 'vio', 'vio@gmail.com', 'users/default.png', NULL, '$2y$10$xW4KTdrmO2CF.DjE3oLyzexkUpbe3Akp7hBc7AdncjJXYZSYPmITK', 'Laki-Laki', '087123654782', NULL, '2019-11-02 20:50:56', '2019-11-02 20:50:56', '2019-11-12', 'Jl. Riau', 'gambar_user/hcHa6gpNUv99ahNmDxylDEWHWq7SJpZg3jBXq4Lb.png'),
(26, NULL, 'Sihap', 'sihap@gmail.com', 'users/default.png', NULL, '$2y$10$JSIy/PBCn4IyiVBZNo5F7ugkaQGKz7fNWSquzMBMxT8A1VG/PpFd.', 'Laki-Laki', '082654786543', NULL, '2019-11-02 20:52:16', '2019-11-02 20:52:16', '2019-11-05', 'jl. jawa 7', 'gambar_user/YouWsSBoRQDVrDDg7VlTc8TtqixIrLormjOp7eP1.png'),
(27, NULL, 'Niken', 'niken@gmail.com', 'users/default.png', NULL, '$2y$10$jEOXxiKBmycViBlxR6StyePVppEPeChABsOLWBkypjenNPneNF4QG', 'Perempuan', '089786567654', NULL, '2019-11-02 20:55:30', '2019-11-02 20:55:30', '2019-11-13', 'Jl. Belitung', 'gambar_user/ukREDjqOS1kwrqv8Au4I9Rdx4FI3dEuE5Tyf054N.png'),
(28, NULL, 'Dewi', 'dewi@gmail.com', 'users/default.png', NULL, '$2y$10$cf8VybAN1gXPASbYwGjCQegQ/QfrAu19c8eHte6zNMFOliTge63dK', 'Perempuan', '081342567654', NULL, '2019-11-02 20:56:58', '2019-11-02 20:56:58', '2019-11-07', 'Jl. Belitung 14', 'gambar_user/KBdJCNDGfl1R8UggbooboDqr6PBoyCJTGwxZA7HX.png'),
(30, NULL, 'coba', 'coba@gmail', 'users/default.png', NULL, '$2y$10$c7Qa4M2BlJmz7YA0kF/e.OOX59QV4J6fxLHMXNQGn4XUDze3zssTy', 'Laki-Laki', '098765432112', NULL, '2019-11-02 22:07:03', '2019-11-02 22:07:03', '2019-11-07', 'Jl. Belitung 14', 'gambar_user/LpgZXONMVGrgml5Ll3XlKJvE2HkqLjfpxpp9r3l5.jpeg'),
(31, NULL, 'Dhimas', 'dhimas@gmail.com', 'users/default.png', NULL, '$2y$10$P1qLbQOIJH.hhPY.IEdtneQKwaxWU2F4B/dgt.Wd9F4BIHRXXJdTm', 'Laki-Laki', '087678987654', NULL, '2019-11-03 00:05:16', '2019-11-03 00:05:16', '2019-11-13', 'Jl. Belitung 14', 'gambar_user/Tk2Vq7CJbAbt9WMOwr1qo3UPnkosEzE2a9NKVysH.png'),
(32, NULL, 'Izan', 'izan@gmail.com', 'users/default.png', NULL, '$2y$10$gEPsIYZzF2w5nOx8zWMMzumLOUPI6Gus3m4vZ9Di4MWqeyDhQEOoK', 'Laki-Laki', '083832299181', NULL, '2019-11-03 00:06:09', '2019-11-03 00:06:09', '2019-11-13', 'jl. jawa 7', 'gambar_user/3hHEgExKTrTdwyU56sof8j3ENMTMUGhmRH1hSwgW.png'),
(34, NULL, 'kepin', 'kepin@gmail.com', 'users/default.png', NULL, '$2y$10$6ieYxpr1tWa3I14LNanX7OAqhtzJBYWpwPL7ituhDKeicUmwE9dYa', 'Laki-Laki', '083832299181', NULL, '2019-11-03 19:50:16', '2019-11-03 19:50:16', '2019-11-06', 'Jl. Belitung 14', 'gambar_user/kdULciuFslN6sFs278xKiiwrKkaURjAsnJu2N21f.jpeg'),
(37, NULL, 'ahmad', 'ahmad@gmail.com', 'users/default.png', NULL, '$2y$10$y3djW58bQzxgkiTG9N/klOcyuGPYXZXyXV.UZdgQt/KuFVhyYCtsK', 'Perempuan', '083832299181', NULL, '2019-11-03 20:18:56', '2019-11-03 20:18:56', '2019-10-31', 'jl. jawa 7', 'gambar_user/bup3nJ1vf32CYc94gxTJL0ndLIHxR09qkVKs2mOj.jpeg'),
(39, NULL, 'cobaan', 'cobaan@gmail.com', 'users/default.png', NULL, '$2y$10$ecIT2bJyoWdE71VIv.9Zpu3EKnrgQVhEF//ze47QPdRd/sCQ6.yFa', 'Perempuan', '083832299181', NULL, '2019-11-05 02:05:27', '2019-11-05 02:05:27', '2019-11-07', 'jl. jawa 7', 'gambar_user/LgwvKTZzPNO24BA0XO1x3khLG6wbuWKuzk2UcmcQ.jpeg'),
(40, NULL, 'mahrus15', 'mahrus15@gmail.com', 'users/default.png', NULL, '$2y$10$At/CKSxckZCbLWkYz7Np2O.22dTNYN8nUU7kWF43JE9wlmJxh2c0a', 'Laki-Laki', '083832299181', NULL, '2019-11-05 09:40:33', '2019-11-05 09:40:33', '2019-11-06', 'Jl. Belitung 14', 'gambar_user/k5yUlRqeF4NUJkM0GLNe11Nle64TzlHyNcvmSzNG.png'),
(41, NULL, 'kukuh12', 'kuku@gmail.com', 'users/default.png', NULL, '$2y$10$cbQnWDVPOzpGTvhNExOsC.BmVO6wnfAmRds/H6Wq966kWadSJZcIm', 'Laki-Laki', '083832299181', NULL, '2019-11-25 05:32:21', '2019-11-25 05:32:21', '2019-11-27', 'Jl. Belitung 14', 'gambar_user/q3K1PsIJ0OwY20VF5rdmXjQ5OpaHh3AFwqbdQqmt.jpeg'),
(42, NULL, 'izzan', 'izzan@gmail.com', 'users/default.png', NULL, '$2y$10$8pCrmxuGgORa1RhdOHwMCeyA.JjlddLicaAIdYTss9jYiuqMyI3U.', 'Laki-Laki', '083832299181', NULL, '2019-11-27 14:19:42', '2019-11-27 14:19:42', '2019-11-01', 'Jl. Belitung 14', 'gambar_user/wJs5n8WwhBD88xMlPLMV9voNdW9Dvm9PHRJ0nCzd.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala1`
--
ALTER TABLE `gejala1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala2`
--
ALTER TABLE `gejala2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala3`
--
ALTER TABLE `gejala3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `produk_name_produk_unique` (`name_produk`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gejala1`
--
ALTER TABLE `gejala1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gejala2`
--
ALTER TABLE `gejala2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gejala3`
--
ALTER TABLE `gejala3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
