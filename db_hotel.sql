-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2022 pada 04.15
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitashotel`
--

CREATE TABLE `fasilitashotel` (
  `id_fasilitas_hotel` int(11) NOT NULL,
  `nama_fasilitas_hotel` varchar(50) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitashotel`
--

INSERT INTO `fasilitashotel` (`id_fasilitas_hotel`, `nama_fasilitas_hotel`, `gambar`, `keterangan`) VALUES
(5, 'Swimming Pool', './assets/img/kolam4.jpg', 'Hotel Crimson menyediakan fasilitas Kolam Renang untuk berenang'),
(11, 'Gym', './assets/img/gym13.jpg', 'Hotel Crimson menyediakan fasilitas Gym untuk berolahraga'),
(12, 'Lounge', './assets/img/lounge2.jpg', 'Hotel Crimson menyediakan fasilitas Lounge untuk makan dan minum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `nama_hotel` varchar(50) DEFAULT NULL,
  `slogan` text DEFAULT NULL,
  `nama_perusahaan` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `faximile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nama_hotel`, `slogan`, `nama_perusahaan`, `alamat`, `telepon`, `faximile`, `email`, `website`) VALUES
(3, 'Hotel Hebattt', 'Hotel Hebat memang selalu Hebat', 'PT. Hebattt', 'Jalan. Jaya Wijaya no. 23, Sleman, Yogyakarta.', '0215678943210156', 'Kosong Belum Diketahui', 'hotel.hebat@gmail.com', 'hotel-hebat.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `id_kamar_tipe` int(11) DEFAULT NULL,
  `nomor_kamar` int(11) DEFAULT NULL,
  `max_dewasa` int(11) DEFAULT NULL,
  `max_anak` int(11) DEFAULT NULL,
  `status_kamar` enum('Kosong','Terisi') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `id_kamar_tipe`, `nomor_kamar`, `max_dewasa`, `max_anak`, `status_kamar`) VALUES
(1, 3, 100, 2, 1, 'Terisi'),
(2, 1, 102, 1, 2, 'Kosong'),
(3, 1, 103, 1, 2, 'Kosong'),
(4, 2, 104, 2, 4, 'Kosong'),
(5, 2, 105, 2, 4, 'Kosong'),
(6, 3, 106, 2, 1, 'Kosong'),
(7, 4, 107, 2, 2, 'Kosong'),
(8, 3, 108, 2, 1, 'Kosong'),
(9, 3, 109, 2, 1, 'Kosong'),
(10, 3, 111, 3, 1, 'Kosong'),
(11, 1, 201, 1, 2, 'Kosong'),
(12, 1, 202, 1, 2, 'Kosong'),
(13, 2, 186, 2, 2, 'Terisi'),
(14, 1, 982, 2, 2, 'Kosong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `kode_booking` varchar(50) DEFAULT NULL,
  `tanggal_in` date DEFAULT NULL,
  `jam_in` time DEFAULT NULL,
  `tanggal_out` date DEFAULT NULL,
  `jam_out` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `nik`, `kode_booking`, `tanggal_in`, `jam_in`, `tanggal_out`, `jam_out`) VALUES
(20, '2147483647', 'NSZ5S99M9NZZ0NHJ', '2022-03-01', '23:23:00', '2022-03-08', '23:23:00'),
(21, '2147483647', 'YV6JZZYOFGRQCBJZ', '2022-03-25', '00:49:00', NULL, '23:48:00'),
(22, '343376280220040059', 'I8YDSPPNYB6MG4IM', '2022-03-03', '00:00:00', '2022-03-15', '23:43:00'),
(23, '343376280220040076', 'KDL2SWCMXW4ZMSEM', '2022-03-15', '01:10:00', '2022-03-17', '12:00:00'),
(24, '343376280220040063', 'FAAETJ7U11VYYI0G', '2022-02-20', '10:00:00', '2022-03-01', '09:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL,
  `tipe_identitas` enum('KTP','SIM','Passport') DEFAULT NULL,
  `nomor_identitas` varchar(20) DEFAULT NULL,
  `kewarganegaraan` enum('WNI','WNA') DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nik`, `nama_depan`, `nama_belakang`, `tipe_identitas`, `nomor_identitas`, `kewarganegaraan`, `alamat`, `no_hp`, `email`) VALUES
(8, '1200017', 'Rizki', 'Cahya', 'KTP', '1558', 'WNI', 'Ngampilan, Yogyakarta', '085866005508', 'rizki.cahya03@gmail.com'),
(9, '1200018', 'Fahdli', 'Gita', 'KTP', '1558', 'WNA', 'Maguwoharjo', '0877665544332', 'fahdligita@gmail.com'),
(10, '1200020', 'Donny', 'Lingga', 'KTP', '1555', 'WNA', 'Kotagede, Yogyakarta', '086677554429', 'donnyromel@gmail.com'),
(11, '120000200', 'Yusup', 'Andi', 'KTP', '1990', 'WNA', 'Maguwoharjo', '0877112299111', 'yusupandi@gmail.com'),
(12, '', '', '', '', '', '', '', '', ''),
(13, '1200029', 'Yudha', 'Stepen', 'KTP', '2991', 'WNI', 'Jalan Magelang', '0862567765321', 'yudha.stepen27@gmail.com'),
(14, '1200030', 'Akbar', 'Ramadhani', 'KTP', '1661', 'WNI', 'Taman Siswa, Yogyakarta', '08651212545427', 'akbarramdhani@gmail.com'),
(16, '1200038', 'Ewing', 'HD', 'KTP', '1772', 'WNI', 'Bekasi', '05612123444992', 'ewinghd@gmail.com'),
(17, '1200072', 'Raiden', 'Shogun', 'KTP', '1570', 'WNI', 'Di Dunia Genshin lah', '083891002110021', 'raidenshogun@gmail.com'),
(19, '1200050', 'Zidan', 'Zamorayes', 'KTP', '7800', 'WNI', 'Surabaya', '085678954321', 'zidanzamorayes@gmail.com'),
(20, '1200080', 'Yae', 'Miko', 'KTP', '2007', 'WNI', 'Di Genshin', '087743211234', 'yaemiku@gmail.com'),
(22, '1200088', 'Wanto', 'Suparman', 'KTP', '1221', 'WNI', 'Kutoarjo', '05621211212126', 'wanto_suparman@gmail.com'),
(23, '343376280220040001', 'Dhias mahendra', 'Wibawa', 'KTP', '1551', 'WNI', 'Ngampilan, Yogyakarta', '08651212545427', 'raidenshogun@gmail.com'),
(24, '343376280220040001', 'Kaedehara', 'Kazuha', 'KTP', '9811', 'WNA', 'Genshin Impact', '08569090878721', 'kaedeharakazuha@gmail.com'),
(25, '343376280220040022', 'Yudha', 'Stepen', 'KTP', '7881', 'WNA', 'Osaka, Jepang', '0877665544082', 'yudha_stepen@gmail.com'),
(26, '1200022', 'Luthfi', 'Halimawan', 'Passport', '8999', 'WNA', 'Paris', '08992211299291', 'luthfi_halimawan@gmail.com'),
(27, '343376280220040021', 'Windah', 'Basudara', 'KTP', '9762', 'WNI', 'Jakarta', '06512890012211', 'windah_basudara@gmail.com'),
(28, '343376280220040056', 'Cahya', 'Rizki', 'KTP', '1552', 'WNI', 'Ngampilan, Yogyakarta', '085621212121212', 'rizki.cahya03@gmail.com'),
(29, '343376280220040056', 'Cahya', 'Rizki', 'KTP', '1552', 'WNI', 'Ngampilan, Yogyakarta', '085621212121212', 'rizki.cahya03@gmail.com'),
(30, '343376280220040099', 'Rizad', 'Immalano', 'KTP', '5555', 'WNI', 'Jakarta', '08773933667721', 'rizad.immalano@gmail.com'),
(31, '343376280220040088', 'Tatang', 'Sutarman', 'SIM', '1009', 'WNI', 'Bandung, Jawa Barat', '085866007708', 'tatang_sutarman@gmail.com'),
(32, '343376280220040020', 'Rizal', 'Wijaya', 'KTP', '7722', 'WNI', 'Balikpapan', '0856373721219', 'rizal.wijaya@gmail.com'),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, '343376280220040029', 'Agung', 'Suryanto', 'KTP', '1772', 'WNI', 'Bantul, Yogyakarta', '087711222188821', 'agunggaming@gmail.com'),
(36, '343376280220040057', 'Gunawan', 'Tribuana', 'KTP', '1442', 'WNI', 'Surabaya', '0822112212777', 'gunawan.tribuana@gmail.com'),
(37, '3433762802200400075', 'Andi', 'Hermawan', 'KTP', '1567', 'WNI', 'Bantul', '085251251527127', 'andi.hermawan@gmail.com'),
(38, '343376280220040057', 'Gunawan', 'Tribuana', 'KTP', '1442', 'WNI', 'Surabaya', '0822112212777', 'gunawan.tribuana@gmail.com'),
(39, '343376280220040057', 'Gunawan', 'Tribuana', 'KTP', '1442', 'WNI', 'Surabaya', '0822112212777', 'gunawan.tribuana@gmail.com'),
(40, '343376280220040057', 'Gunawan', 'Tribuana', 'KTP', '1442', 'WNI', 'Surabaya', '0822112212777', 'gunawan.tribuana@gmail.com'),
(41, '343376280220040059', 'Otong', 'Sudrajat', 'SIM', '8888', 'WNI', 'Surabaya', '08651212545427', 'otongsudrajat@gmail.com'),
(42, '343376280220040076', 'Arataki', 'Itto', 'Passport', '1550', 'WNA', 'Tokyo, Jepang', '088128281271271', 'arataki_itto@gmail.com'),
(43, '343376280220040063', 'Rizki Cahya', 'Ramdani', 'KTP', '1555', 'WNI', 'Jalan. Aipda KS Tubun no 56, Ngampilan, Yogyakarta.', '085866005577', 'rizki.cahya03@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipekamar`
--

CREATE TABLE `tipekamar` (
  `id_kamar_tipe` int(11) NOT NULL,
  `nama_kamar_tipe` varchar(50) DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `gambar` varchar(500) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tipekamar`
--

INSERT INTO `tipekamar` (`id_kamar_tipe`, `nama_kamar_tipe`, `fasilitas`, `gambar`, `harga`) VALUES
(6, 'Single Room', 'Single room biasanya hanya terdiri dari satu ruangan yang berisi hanya satu tempat tidur, sofa, dan kamar mandi. Jenis kamar hotel single room cocok satu orang saja karena memang fasilitas dan kapasitas yang tidak besar.', './assets/img/kamar-11.jpg', 'Rp 450.000'),
(7, 'Double Room', 'Twin bed sebenarnya mengacu pada jumlah ranjang atau tempat tidur yang ada dalam kamar hotel. Kamar yang menyediakan twin bed menyediakan dua kasur dengan ukuran kecil.', './assets/img/kamar-31.jpg', 'Rp. 520.000,00'),
(8, 'Deluxe Room', 'Kamar ini tentu memiliki kamar yang lebih besar. Tersedia pilihan kasur yang bisa kamu pilih, double bed atau twin bed. Biasanya, dari segi interior kamar ini terkesan lebih mewah.', './assets/img/kamar-32.jpg', 'Rp. 500.000,00'),
(9, 'Suite Room', 'Suite room merupakan tipe kamar hotel dengan fasilitas yang sangat lengkap. Bisa dikatakan bahwa suite room ini adalah apartemen kecil. Mengapa demikian? Hal ini karena di suite room terdapat beberapa bagian seperti kamar tidur, ada ruang memasak atau dapur dan ruang tamu.', './assets/img/kamar-51.jpg', 'Rp. 700.000,00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `level` enum('Administrator','Resepsionis') NOT NULL,
  `akses_terakhir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`, `akses_terakhir`) VALUES
(8, 'rizkicahya_04', 'db87d5fd3b6dbf853a0ed172c42fca9f', 'Rizki Cahya Ramdani', 'Administrator', '2022-02-09'),
(9, 'fahdli_gita', 'f553a9b7ad6893f2505506ee6784213a', 'Fahdli Gita Firmansyah', 'Administrator', '2022-02-23'),
(10, 'donnyromel_80', '0eba3320c117cffa37f29cd0a8f25fdc', 'Donny Lingga AR', 'Administrator', '2022-02-11'),
(11, 'miku_nakano', '26d1ebd4ec8c55cc69f190d0d37f6dac', 'Miku Nakano', 'Resepsionis', '2022-03-13'),
(12, 'rickyrafif', '56ea8b83122449e814e0fd7bfb5f220a', 'Ricky Rafif Alvaro', 'Resepsionis', '2022-03-15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitashotel`
--
ALTER TABLE `fasilitashotel`
  ADD PRIMARY KEY (`id_fasilitas_hotel`) USING BTREE;

--
-- Indeks untuk tabel `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`) USING BTREE;

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`) USING BTREE;

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`) USING BTREE;

--
-- Indeks untuk tabel `tipekamar`
--
ALTER TABLE `tipekamar`
  ADD PRIMARY KEY (`id_kamar_tipe`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fasilitashotel`
--
ALTER TABLE `fasilitashotel`
  MODIFY `id_fasilitas_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tipekamar`
--
ALTER TABLE `tipekamar`
  MODIFY `id_kamar_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
