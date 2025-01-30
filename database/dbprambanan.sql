-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 02:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbprambanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin_baru', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Akomondasi'),
(2, 'Candi'),
(3, 'Kebudayaan');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `singkat` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `judul`, `singkat`, `isi`, `gambar`, `id_kategori`, `harga`, `link`) VALUES
(29, 'Hotel Royal Ambarukmo', 'Terletak di tepi jalan ramai, hotel mewah yang menduduki bangunan modern ini berjarak 6 km dari pusat perbelanjaan kelas atas di Jalan Malioboro dan 7 km dari Kraton Ngayogyakarta Hadiningrat, istana yang dibangun pada abad ke-18.', 'Hotel Royal Ambarukmo adalah hotel bintang 5 yang terletak di Jalan Laksda Adi Sucipto No. 13, Yogyakarta, Indonesia. Hotel ini berjarak sekitar 10 menit berkendara dari Bandara Internasional Adisutjipto dan 4,8 km dari pusat kota Yogyakarta.\r\n\r\nHotel Royal Ambarukmo memiliki 247 kamar dan suite yang luas dan modern. Kamar-kamarnya dilengkapi dengan fasilitas yang lengkap, termasuk AC, TV layar datar, Wi-Fi gratis, dan kamar mandi pribadi dengan shower atau bathtub.\r\n\r\nHotel ini juga memiliki berbagai fasilitas mewah, termasuk kolam renang outdoor, restoran mewah, dan spa. Kolam renangnya memiliki pemandangan kota Yogyakarta yang indah. Restorannya menyajikan berbagai hidangan Indonesia dan internasional. Spanya menawarkan berbagai perawatan tubuh dan pikiran.\r\n\r\nHotel Royal Ambarukmo adalah pilihan yang tepat untuk wisatawan yang mencari pengalaman menginap yang mewah dan nyaman di Yogyakarta.', '1702213932.jpg', 1, 'Mulai dari Rp 1.508.000 per malam', 'https://www.royalambarrukmo.com/'),
(30, 'Sheraton Mustika Yogyakarta', 'Manjakan diri Anda dengan liburan tak terlupakan di Indonesia di Sheraton Mustika Yogyakarta Resort & Spa. Hotel mewah yang berlokasi hanya 10 menit dari Bandara Internasional Adisucipto dan menawarkan akses mudah ke tempat-tempat wisata termasuk Maliobor', 'Dilengkapi atap pelana dan lampu gantung kristal, hotel resor mewah di kaki gunung berapi ini berjarak 4 km dari pusat perbelanjaan Ambarrukmo Plaza dan 11 km dari candi Prambanan yang berusia ratusan tahun.\r\n\r\nKamar-kamar mewah bergaya Jawa dilengkapi Wi-Fi (dikenakan biaya), TV layar datar, dan balkon. Beberapa kamar memiliki akses langsung ke kolam renang bergaya laguna dan taman, sedangkan suite memiliki tambahan minibar dan fasilitas khusus klub. Room service ditawarkan.\r\n\r\nParkir tersedia secara gratis. Fasilitas meliputi restoran internasional, bar wine di lantai teratas, serta kolam renang indoor dan outdoor. Ada pusat kebugaran, klub anak-anak, spa mewah, dan business center, ditambah lapangan tenis.', '1702214125.jpg', 1, 'Mulai dari Rp 1.000.000 per malam', 'https://id.sheratonyogyakarta.com/'),
(31, 'Hotel Tentrem Yogyakarta', 'Berakar dari budaya Jawa, kata \"tentrem\" mengusung makna kedamaian dan ketenangan. Namun, maknanya melampaui sekedar ketiadaan gejolak, \"tentrem\" merangkul konsep harmoni antara alam semesta dan manusia, menciptakan ketenangan yang sempurna.', 'Hotel mewah yang dikelilingi pertokoan dan restoran ini berjarak 2,9 km dari pasar di Jalan Malioboro yang ramai, dan 5 km dari kompleks istana Keraton Ngayogyakarta Hadiningrat.\r\n\r\nKamar mewah yang modern menawarkan Wi-Fi gratis, TV layar datar, bar mini, serta alat pembuat teh dan kopi. Kamar di kelas yang lebih tinggi memiliki balkon. Kamar studio dan suite dengan 1-2 kamar tidur memiliki ruang keluarga dan/atau bak mandi whirlpool. Kamar suite di kelas yang lebih tinggi menawarkan dapur kecil, powder room, dan jasa pelayan pribadi 24 jam.\r\n\r\nSarapan prasmanan dan parkir gratis. Fasilitas lainnya meliputi 2 restoran kelas atas dan lounge mewah, serta kolam renang outdoor dengan bar di tepi kolam renang. Spa, pusat kebugaran, dan butik juga tersedia.', '1702214429.jpg', 1, 'Mulai dari Rp 1.570.000 per malam', 'https://yogyakarta.hoteltentrem.com/'),
(32, 'Candi Prambanan', 'Candi Prambanan adalah candi Hindu terbesar di Indonesia sekaligus salah satu candi yang terindah di Asia Tenggara. Candi ini terletak di Kecamatan Prambanan, Kabupaten Sleman, Daerah Istimewa Yogyakarta. Candi Prambanan dibangun pada abad ke-9 Masehi pad', 'Candi Prambanan terdiri dari tiga pelataran, yaitu pelataran luar, pelataran tengah, dan pelataran dalam. Pelataran luar merupakan tempat pemujaan umum, pelataran tengah merupakan tempat pemujaan bagi dewa-dewi Hindu, dan pelataran dalam merupakan tempat pemujaan bagi dewa Siwa.\r\n\r\nCandi Prambanan memiliki 240 candi, termasuk 12 candi utama yang merupakan tempat pemujaan bagi dewa-dewi Hindu. Candi-candi utama tersebut adalah Candi Siwa, Candi Brahma, Candi Wisnu, Candi Durga, Candi Brahmastambham, Candi Vishnustambham, Candi Nandin, Candi Garuda, Candi Apit, dan Candi Apit Lawang.\r\n\r\nCandi Prambanan dibangun dengan gaya arsitektur Hindu Jawa yang khas. Candi-candi di Prambanan memiliki struktur yang simetris, dengan atap yang berbentuk stupa. Candi-candi tersebut juga dihiasi dengan berbagai ornamen yang indah, seperti relief dan arca.\r\n\r\nCandi Prambanan telah mengalami kerusakan akibat gempa bumi dan perang. Namun, candi ini telah dipugar dan kini menjadi salah satu destinasi wisata yang populer di Yogyakarta.', '1702215024.jpg', 2, 'Tarif Sekalih Masuk Rp 50.000 Untuk Orang diatas 10 Tahun', 'https://borobudurpark.com/temple/prambanan/'),
(33, 'Candi Lumbung', 'Candi Lumbung adalah salah satu kompleks percandian Buddha yang berada di dalam kompleks Taman Wisata Candi Prambanan, yaitu di sebelah candi Bubrah. Meskipun demikian, candi ini telah masuk ke wilayah Jawa Tengah, yaitu di Kabupaten Klaten.', 'Candi Lumbung merupakan candi bercorak Buddha yang berada di kawasan Prambanan. Candi ini terletak di antara\r\nkelompok Candi Prambanan dan Candi Sewu. Secara administratif, Candi Lumbung terletak di wilayah Kabupaten Klaten,\r\nJawa Tengah. Bangunan bersejarah peninggalan Kerajaan Mataram Kuno ini diperkirakan dibuat pada sekitar abad ke-9\r\natau abad ke-10. Di kelompok Candi Lumbung terdapat satu candi induk yang dikelilingi oleh 16 candi perwara (pendamping).\r\nKondisi candi induk yang menghadap timur saat ini tidak lagi utuh, hanya tersisa bagian batur, tangga masuk, tubuh candi,\r\ndan tanpa atap. Tubuh candi berdiri di atas batur setinggi sekitar 2,5 meter, di mana pada bagian depannya terdapat\r\ntangga dan pintu masuk.Pintu masuk candi induk dilengkapi bilik penampil, yang diapit dinding bergambar Kuwera dan\r\nHariti. Sedangkan bagian tubuh candi lainnya dihiasi pahatan gambar laki-laki dan perempuan.', '1702214884.jpg', 2, 'Include Masuk Tiket Prambanan', 'https://g.co/kgs/kjuJSg'),
(34, 'Candi Bubrah', 'Satu candi Buddha yang berada di dalam kompleks Taman Wisata Candi Prambanan, candi ini terletak di Dukuh Bener, Bugisan, Prambanan, Klaten, Jawa Tengah, Indonesia.', 'Dalam Bahasa Jawa, \"bubrah\" berarti rusak atau hancur berantakan. Penamaan Candi Bubrah berasal dari masyarakat,\r\nkarena saat ditemukan kondisinya sangat rusak tinggal reruntuhan setinggi dua meter. Kini, Candi Bubrah telah\r\nberdiri kokoh menghadap timur setelah dilakukan pemugaran pada 2016-2017. Melansir situs Kemdikbud,\r\nCandi Bubrah dibangun dalam satu periode dengan candi-candi di dekatnya di Kompleks Candi Prambanan.\r\nKompleks percandian Prambanan dibangun oleh Rakai Panangkaran yang menjadi raja Kerajaan Mataram Kuno\r\npada akhir abad ke-8. Candi Bubrah, Candi Sewu, dan Candi Lumbung diyakini sebagai satu kesatuan mandala bercorak Buddha.', '1702215272.jpg', 2, 'Include Masuk Tiket Prambanan', 'https://g.co/kgs/EhL5xw'),
(35, 'Candi Plaosan', 'Candi Plaosan adalah sebutan untuk kompleks percandian yang terletak di Dukuh Plaosan, Desa Bugisan, Kecamatan Prambanan, Kabupaten Klaten, Provinsi Jawa Tengah, Indonesia. Candi ini terletak kira-kira satu kilometer ke arah timur-laut dari Candi Sewu ata', 'Candi Plaosan adalah sebutan untuk kompleks percandian yang terletak di Dukuh Plaosan, Desa Bugisan,\r\nKecamatan Prambanan, Kabupaten Klaten, Provinsi Jawa Tengah, Indonesia. Candi ini terletak kira-kira satu\r\nkilometer ke arah timur-laut dari Candi Sewu atau Candi Prambanan. Adanya kemuncak stupa, arca Buddha,\r\nserta candi-candi perwara (pendamping/kecil) yang berbentuk stupa menandakan bahwa candi-candi tersebut adalah\r\ncandi Buddha. Kompleks ini dibangun pada abad ke-9 oleh Raja Rakai Pikatan dan Sri Kahulunan pada zaman Kerajaan Medang, atau juga dikenal dengan nama Kerajaan Mataram Kuno.', '1702215428.jpg', 2, 'Include Masuk Tiket Prambanan', 'https://g.co/kgs/TRmqTR'),
(36, 'Sendratari Ramayana', 'Sendratari Ramayana Prambanan merupakan sebuah pertunjukan yang menggabungkan tari dan drama tanpa dialog, diangkat dari cerita Ramayana dan dipertunjukkan di dekat Candi Prambanan di Pulau Jawa, Indonesia. Sendratari Ramayana Prambanan merupakan sendrata', 'Cerita Ramayana berdasarkan epos Hindu diadaptasi dengan budaya Jawa membuat Sendratari Ramayana menjadi tarian yang unik. Lebih dari 200 penari profesional dan musisi lokal berpartisipasi dalam Sendratari Ramayana yang bertempat di panggung terbuka dengan Candi Prambanan sebagai latar belakang. Sendratari Ramayana juga diceritakan di relief pada Candi Siwa.\r\n\r\nCerita Ramayana adalah perjalan Rama dalam menyelamatkan istrinya Sita (di Jawa biasa disebut Sinta) yang diculik oleh raja Negara Alengka, Rahwana. Sendratari Ramayana Prambanan biasa digelar tiap hari Selasa, Kamis, dan Sabtu, pementasan di panggung terbuka (Open Stage) hanya pada bulan Kemarau, di luar itu pementasan diadakan di panggung tertutup (Trimurti Stage).', '1702215710.jpg', 3, 'Mulai dari Rp 150.000', 'https://www.youtube.com/watch?v=KpYrmiiY5Z0'),
(37, 'Sendratari Rorojonggrang', 'Sendratari Roro Jonggrang adalah drama tari tanpa dialog yang mengisahkan legenda Candi Prambanan. Cerita ini tentang putri Prabu Boko, Roro Jonggrang, yang memberikan syarat kepada Bandung Bondowoso untuk membangun 1.000 candi dalam waktu satu malam.', 'Kisah ini diawali dengan kekalahan Prabu Damarmoyo oleh Prabu Boko ayahanda Putri Rorojonggrang. Dengan kekalahan itu berceritalah dia pada anaknya Bandung. Bandung yang sangat marah akhirnya menantang perang Prabu Boko dan mengalahkannya. Pada saat itu pula Bandung melihat Roro Jonggrang ,\r\nseorang putri raja yang cantik jelita dan jatuh cinta kepadanya. Namun saat Roro Jonggrang tahu bahwa Bandung adalah pembunuh ayahandanya, maka Roro Jonggrang punya niat licik untuk mempermainkan Bandung dengan cara meminta membangun 1.000 candi jika ingin meminangnya.\r\n\r\nDari sinilah petaka muncul, Bandung yang dibantu Bondowoso dan prajurit setan gagal membangun 1.000 candi. Karena kelicikan dan tipu muslihat ini akhirnya Bandung Bondowoso mengutuk Jonggrang menjadi Arca sebagai penggenapan jumlah 1.000 candi.', '1702215976.jpg', 3, 'Mulai dari Rp 150.000', 'https://www.youtube.com/watch?v=fTXm1ZjDD10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `kategori_wisata` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `kategori_wisata` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
