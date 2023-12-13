-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2023 pada 18.17
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bajus`
--

CREATE TABLE `bajus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_baju` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_baju` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_baju` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bajus`
--

INSERT INTO `bajus` (`id`, `name_baju`, `kategori_id`, `deskripsi_baju`, `gambar_baju`, `created_at`, `updated_at`) VALUES
(4, 'Neck Tie Silk Blouse', 1, 'Sebagai bagian penting dari busana formal, dasi leher sutra adalah aksesori yang menghadirkan sentuhan kemewahan dan gaya pada pakaian. Dasi ini terbuat dari bahan sutra, sebuah serat alami yang dihasilkan oleh ulat sutra. Bahan ini terkenal karena kehalusan, kilauan, dan kemampuannya untuk menyerap warna dengan baik.\r\n\r\nDeskripsi tentang neck tie silk fashion mungkin mencakup beberapa elemen berikut:\r\n\r\nBahan Sutra Berkualitas Tinggi:\r\nDasi leher ini terbuat dari sutra berkualitas tinggi, memberikan sentuhan lembut dan halus saat dipegang. Sutra memberikan kilau alami yang elegan, menciptakan tampilan yang mewah dan berkelas.\r\n\r\nKeberagaman Warna dan Pola:\r\nNeck tie silk fashion seringkali tersedia dalam berbagai warna dan pola. Mulai dari warna-warna yang klasik seperti hitam, biru, dan merah hingga warna-warna yang lebih berani dan pola-pola yang unik, memungkinkan pemakainya untuk mengekspresikan gaya pribadi mereka.\r\n\r\nTekstur Halus dan Lentur:\r\nKehalusannya membuat dasi ini mudah diikat dan memberikan simpul yang rapi. Teksturnya yang lembut juga memberikan kesan yang nyaman ketika dipakai, sehingga cocok untuk acara-acara formal dan profesional.\r\n\r\nAksen Berkelas:\r\nDetil dan aksen pada neck tie silk fashion seringkali dirancang dengan teliti. Mungkin terdapat sentuhan-sentuhan seperti bordir halus, cetakan, atau bahkan aksen logam pada ujung dasi yang menambah nilai estetika dan menonjolkan keanggunan.\r\n\r\nKombinasi Fleksibilitas dan Formalitas:\r\nDasi leher sutra ini bisa dipadukan dengan berbagai jenis pakaian formal, mulai dari setelan jas hingga blazer. Fleksibilitasnya membuatnya cocok untuk berbagai kesempatan, termasuk acara bisnis, pernikahan, atau acara resmi lainnya.\r\n\r\nPerawatan yang Diperlukan:\r\nSutra membutuhkan perawatan khusus untuk memastikan keindahan dan keawetan dasi ini. Instruksi perawatan yang benar mungkin termasuk penghindaran cairan dan penyimpanan yang tepat agar tidak rusak.\r\n\r\nDengan menggabungkan kehalusan sutra, desain yang menawan, dan kemungkinan variasi warna, neck tie silk fashion menjadi simbol gaya dan elegansi dalam dunia busana pria.', 'imgbaju/7hN9MPHR0h7K9A9PK7aPcQfNshhXMuhYLkJMogUD.jpg', '2023-11-25 20:50:14', '2023-12-12 04:53:43'),
(5, 'Tunik Oversize', 4, 'Tunik adalah pakaian wanita yang memiliki desain longgar dan nyaman, umumnya dipakai sebagai atasan. Tunik biasanya memiliki panjang yang cukup, melebihi pinggang, dan seringkali mencapai sejauh pinggul atau paha. Desainnya dapat bervariasi mulai dari gaya tradisional hingga modern, memungkinkan untuk berbagai gaya dan kesempatan.\r\n\r\nTunik seringkali memiliki potongan longgar dan lebar, memberikan kenyamanan dan kebebasan gerak bagi pemakainya. Beberapa tunik memiliki detail tambahan seperti belahan samping, kerah V, atau hiasan bordir, memberikan sentuhan personal dan gaya unik pada pakaian tersebut.\r\n\r\nBahan yang umum digunakan untuk membuat tunik meliputi katun, rayon, chiffon, atau bahan lain yang ringan dan breathable. Tunik sering dianggap sebagai pakaian serbaguna karena bisa dipadukan dengan berbagai bawahan seperti celana panjang, celana pendek, rok, atau legging, sesuai dengan gaya dan suasana acara.\r\n\r\nTunik dapat menjadi pilihan yang tepat untuk berbagai kesempatan, baik itu casual atau semi-formal, tergantung pada desain dan bahan yang digunakan. Kesederhanaan dan fleksibilitas tunik membuatnya menjadi pilihan yang populer di kalangan wanita yang menginginkan kombinasi kenyamanan dan gaya dalam berpakaian.', 'imgbaju/6t6tPH7ChNZ3YeJlgWOVkIcsGjwCzo8M65fNfCKy.jpg', '2023-11-25 21:05:54', '2023-12-12 04:50:25'),
(6, 'Cardigan Batik', 5, 'Cardigan batik adalah jenis pakaian luar yang menggabungkan gaya tradisional batik dengan desain modern cardigan. Batik sendiri adalah seni tradisional Indonesia yang melibatkan pewarnaan kain dengan pola-pola tertentu menggunakan malam lilin. Cardigan batik mengambil elemen-elemen ini dan menyatukannya dengan desain cardigan yang umumnya longgar, berbuka depan, dan berkerah.\r\n\r\nDeskripsi tentang cardigan batik mungkin melibatkan detail-detail seperti:\r\n\r\nMotif Batik:\r\nCardigan batik akan memiliki motif batik yang khas. Motif ini bisa bervariasi dari tradisional hingga modern, tergantung pada desainer dan preferensi fashion.\r\n\r\nBahan:\r\nCardigan batik dapat terbuat dari berbagai bahan, seperti katun, rayon, atau bahan sintetis lainnya. Bahan yang digunakan biasanya dipilih untuk memberikan kenyamanan saat dikenakan dan memberikan tekstur yang menarik.\r\n\r\nWarna:\r\nWarna-warna pada cardigan batik juga dapat bervariasi. Batik tradisional seringkali memiliki warna alami, seperti coklat, biru, atau hijau, tetapi cardigan batik modern dapat menggunakan berbagai warna yang lebih cerah dan kontemporer.\r\n\r\nPotongan dan Desain Cardigan:\r\nCardigan batik dapat memiliki berbagai potongan, mulai dari model yang panjang hingga yang lebih pendek. Desain cardigan yang umum melibatkan bukaan depan, lengan panjang, dan kerah, memberikan kesan yang nyaman dan fleksibel.\r\n\r\nDetail Tambahan:\r\nBeberapa cardigan batik mungkin memiliki detail tambahan seperti bordir, payet, atau aksen tambahan yang menambahkan sentuhan khusus pada pakaian tersebut.\r\n\r\nCardigan batik bisa menjadi pilihan yang menarik untuk orang yang ingin menampilkan gaya yang mencerminkan kekayaan budaya Indonesia sambil tetap tampil modern dan stylish.', 'imgbaju/aJhY7bWNflEiPuKDq2JnCGwb7TYxDZdRXCNte6Dh.jpg', '2023-11-27 19:00:36', '2023-12-12 04:55:41'),
(7, 'Empire Line Dress', 1, 'Empire line dress adalah jenis pakaian wanita yang memiliki potongan khusus di bagian pinggang, yaitu garis potongan di sekitar bagian dada atau di bawah payudara. Ciri khas dari empire line dress adalah pinggangnya yang ditinggikan, sering kali terletak di bawah bust atau dada, dan garis roknya yang mengembang ke bawah dengan potongan longgar. Desain ini memberikan kesan elegan dan feminin, seringkali memberikan siluet yang memanjang dan memberikan tampilan yang anggun.\r\n\r\nBerikut adalah beberapa elemen deskripsi tentang empire line dress:\r\n\r\nPotongan Empire:\r\nEmpire line dress memiliki garis potongan di bagian atas tubuh yang ditinggikan, biasanya di bawah dada atau di sekitar area bust. Potongan ini memberikan efek memanjang pada tubuh dan seringkali memberikan tampilan yang mengalir ke bawah.\r\n\r\nPinggang Rendah atau Tidak Ada Pinggang:\r\nSebagai kontrast dengan dress-dress lain yang memiliki pinggang yang ditekankan, empire line dress cenderung memiliki pinggang yang lebih rendah atau bahkan tidak menonjol, memberikan kesan longgar dan nyaman.\r\n\r\nRok Mengembang:\r\nRok empire line dress biasanya mengembang ke bawah, memberikan siluet yang mengalir dan memudahkan gerakan. Rok dapat bervariasi dari yang sangat mengembang hingga lebih lembut tergantung pada desain dan gaya.\r\n\r\nBahan dan Detail:\r\nEmpire line dress dapat terbuat dari berbagai bahan, termasuk sutra, katun, chiffon, atau bahan-bahan lainnya. Beberapa dress mungkin memiliki detail tambahan seperti renda, pita, atau bordir, menambahkan sentuhan estetika yang khas.\r\n\r\nKemungkinan Variasi Desain:\r\nMeskipun empire line dress memiliki garis potongan khas, desainnya dapat bervariasi. Beberapa mungkin memiliki lengan panjang atau pendek, sedangkan yang lain mungkin bersifat strapless atau memiliki potongan bahu terbuka.\r\n\r\nEmpire line dress sering kali dianggap sebagai pilihan yang cocok untuk berbagai kesempatan, mulai dari acara formal hingga santai, karena memberikan kenyamanan dan kesan yang anggun pada pemakainya.', 'imgbaju/PWCVWNc4ZvNd4zGPfnotTkt6u5z4WDjVKrCSvvx1.jpg', '2023-11-27 19:01:10', '2023-12-12 04:57:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `image`, `judul_berita`, `isi`, `created_at`, `updated_at`) VALUES
(3, 'imgberita/OlCclBV4dcqfqTCxPJ4czayLu1hnnvJE9R4RZbRJ.jpg', 'Patchwork Batik Lawasan dan Motif Daun Jati Berlaga di Mesir', 'siswi SMA Loyola Semarang, menyabet 2nd Runner Up Miss Eco Teen International 2023 yang digelar di Mesir awal November lalu.Kemenangan Anthea di ajang internasional ini diapresiasi banyak pihak. Terlihat di unggahan soal kemenangan itu di akun Instagramnya, @antheatofani, yang mendapatkan 730 suka dan puluhan komentar dari warganet. Anthea memaparkan kepada Kompas.com telah menjalani karantina di ajang bergengsi tersebut mulai 27 Oktober hingga 2 November 2023 di Sharm El Sheikh, Mesir. Sebelum mencapai malam final, Anthea menjalani berbagai kompetisi. \"Salah satunya mengikuti nation costume competition dan eco dress competition,\" ujarnya pada Kompas.com, Rabu (15/11/2023).', '2023-11-29 10:32:24', '2023-12-11 04:57:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cate_pants`
--

CREATE TABLE `cate_pants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cate_pants`
--

INSERT INTO `cate_pants` (`id`, `name_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Culottes', '2023-11-23 05:45:45', '2023-11-23 05:45:45'),
(2, 'Joger Pants', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(3, 'Palazzo', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(4, 'Pegged Pants', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(5, 'Slim Fit Jeans', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(6, 'Slacks', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(7, 'Overall', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(8, 'Cargo Pants', '2023-11-23 05:45:46', '2023-11-23 05:45:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `image`, `judul_event`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'imgevent/D2DUrRsAxEmno4cy51EWS5uILKopLTQnnkhQe6o6.jpg', 'Indonesia Modest Fashion Week', 'Modest fashion sendiri adalah sebuah statement gaya berpakaian yang cenderung menutupi bagian tubuh sehingga memberikan kesan santun, tertutup namun tetap fashionable. Gaya busana ini sangat sesuai dengan kepribadian wanita bangsa Indonesia yang cenderung memilih berbusana tertutup, rapi namun tetap cantik dan elegan.\r\n\r\nMETRO Department Store menggandeng Group Modest Fashion terbesar di Indonesia, yaitu Modinity Group, untuk menggelar METRO MODEST FASHION WEEK (MMFW) 2023. Acara ini menampilkan 4 brand andalan dari Modinity Group, yaitu Buttonscarves, Benang Jarum, Nada Puspita dan Zyta Delia.', '2023-11-27 20:26:56', '2023-12-12 05:40:58'),
(2, 'imgevent/89ID8AjzXAkYEeL1TFvhZZ1Cyx22qO7iz37DRvFW.jpg', 'Indonesia Fashion Week 2023', '<p>Diselenggarakan oleh APPMI (Asosiasi Perancang dan Pengusaha Mode Indonesia), Indonesia Fashion Week 2023 merupakan ajang fashion tahunan terbesar di Indonesia. Untuk tema tahun ini, Indonesia Fashion Week 2023 menghadirkan &quot;Sagara dari Timur&quot;. IFW berharap dapat menghadirkan gelombang kreativitas baru di dunia fashion dengan menonjolkan keindahan dan biota laut Indonesia di Zona Wallacea.</p>\r\n\r\n<p>Acara tahun ini akan menampilkan sekitar 400 peserta pameran dan 200 desainer. Mulai dari trunk show dan talk show hingga kuliner Indonesia, IFW adalah acara yang tidak boleh Anda lewatkan. Pastikan untuk datang dan melihat beberapa barang fashion terbaik dari Indonesia!</p>', '2023-11-29 16:16:46', '2023-11-29 16:16:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `name_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Blouse', '2023-11-23 05:45:44', '2023-11-23 05:45:44'),
(2, 'Sweater', '2023-11-23 05:45:44', '2023-11-23 05:45:44'),
(3, 'T-shirt', '2023-11-23 05:45:44', '2023-11-23 05:45:44'),
(4, 'Gamis', '2023-11-23 05:45:44', '2023-11-23 05:45:44'),
(5, 'Batik', '2023-11-23 05:45:44', '2023-11-23 05:45:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kat__sepatus`
--

CREATE TABLE `kat__sepatus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kat__sepatus`
--

INSERT INTO `kat__sepatus` (`id`, `name_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Sneakers', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(2, 'Wedges', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(3, 'Flat Shoes', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(4, 'Ballerina Flats', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(5, 'Loafers', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(6, 'Boots', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(7, 'Stiletto', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(8, 'Loafers', '2023-11-23 05:45:46', '2023-11-23 05:45:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kat__tas`
--

CREATE TABLE `kat__tas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kat__tas`
--

INSERT INTO `kat__tas` (`id`, `name_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Backpack', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(2, 'Waist Bag', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(3, 'Envelope Bag', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(4, 'Sling Bag', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(5, 'Tote Bag', '2023-11-23 05:45:46', '2023-11-23 05:45:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kat__topis`
--

CREATE TABLE `kat__topis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kat__topis`
--

INSERT INTO `kat__topis` (`id`, `name_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Beani', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(2, 'Baseball Hat', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(3, 'Flat Cap', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(4, 'Bucket Hat', '2023-11-23 05:45:46', '2023-11-23 05:45:46'),
(5, 'Panama Hat', '2023-11-23 05:45:46', '2023-11-23 05:45:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lifestyles`
--

CREATE TABLE `lifestyles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_style` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lifestyles`
--

INSERT INTO `lifestyles` (`id`, `image`, `judul_style`, `isi`, `created_at`, `updated_at`) VALUES
(2, 'imgstyle/dOikEr2PHq0Ah5neaLXcLFODLo5OQl8YyswoKXSn.jpg', 'Candy Apple Red', '<p><strong>Warna yang Memikat:</strong> Fashion Candy Apple Red adalah pilihan berani yang menciptakan pernyataan gaya yang kuat. Warna merah apel yang manis memberikan sentuhan dramatis pada setiap pakaian, menjadikan Anda sorotan di keramaian. Keberanian warna ini menciptakan energi dan semangat yang sulit diabaikan.</p>\r\n\r\n<p><strong>Kombinasi Klasik dan Modern:</strong> Warna Candy Apple Red menggabungkan unsur klasik dan modern. Dengan inspirasi dari nuansa retro, memberikan tampilan yang timeless, sementara kesan segarnya memberikan sentuhan yang sangat kontemporer.</p>\r\n\r\n<p><strong>Versatilitas dalam Gaya:</strong> Dengan kemampuannya untuk beradaptasi dengan berbagai gaya pakaian, Candy Apple Red membuka berbagai opsi mode. Dari busana kasual hingga gaun malam, warna ini membawa elemen cerah dan bersemangat ke setiap outfit.</p>\r\n\r\n<p><strong>Kesan Ceria dan Bersemangat:</strong> Candy Apple Red menciptakan kesan ceria dan bersemangat. Kehangatan warnanya memberikan aura positif dan dapat meningkatkan mood, menjadikannya pilihan sempurna untuk gaya yang menyala-nyala.</p>\r\n\r\n<p><strong>Aksentuasi Penuh Gaya:</strong> Ketika digunakan sebagai aksentuasi dalam aksesori atau bagian pakaian tertentu, Candy Apple Red memberikan sentuhan dramatis yang membedakan gaya Anda dari yang lain. Sepasang sepatu merah apel ceria atau tas merah dapat menjadi poin fokus yang luar biasa.</p>\r\n\r\n<p><strong>Cocok untuk Berbagai Acara:</strong> Mulai dari pesta malam, pertemuan santai hingga perjalanan kota, Candy Apple Red memberikan fleksibilitas dan keberanian untuk menonjol di setiap kesempatan.</p>\r\n\r\n<p>Fashion Candy Apple Red adalah pilihan berani bagi mereka yang ingin mengadopsi gaya yang memikat dan tidak terlupakan. Berani, ceria, dan penuh semangat, warna ini adalah penyemangat visual yang sempurna untuk menambahkan kilau pada gaya pribadi Anda.</p>', '2023-11-29 20:15:59', '2023-11-29 20:15:59'),
(3, 'imgstyle/ez41mkMsMN7Vg4KXzjV4TF0LDBsCxDNob03gNIip.jpg', 'City Girl School', '<p><strong>Inspirasi Urban dengan Sentuhan Kampus:</strong></p>\r\n\r\n<p>Fashion City School Girl menggabungkan elemen gaya urban yang trendi dengan sentuhan kampus yang fresh. Ini adalah kombinasi yang sempurna antara gaya perkotaan yang berkelas dan keberanian gaya anak kampus yang energik.</p>\r\n\r\n<p><strong>Pakaian yang Menyatu dengan Lingkungan Kota:</strong></p>\r\n\r\n<p>Gaya ini mencerminkan kehidupan di kota besar dengan memilih pakaian yang nyaman dan serbaguna. Padukan celana denim yang stylish, sweater yang kasual, atau rok plaid dengan aksen modern untuk tampilan yang cocok dengan kehidupan perkotaan yang dinamis.</p>\r\n\r\n<p><strong>Sentuhan Khas Kampus:</strong></p>\r\n\r\n<p>Warna-warna ceria, logo, dan aksen-aksen playful menonjolkan sentuhan khas kampus. Sebuah hoodie dengan emblem kampus atau tas ransel berdesain trendi menjadi bagian tak terpisahkan dari gaya City School Girl.</p>\r\n\r\n<p><strong>Kenyamanan untuk Aktivitas Sehari-hari:</strong></p>\r\n\r\n<p>City School Girl mengutamakan kenyamanan untuk menyesuaikan dengan rutinitas sehari-hari di kota dan di kampus. Sneakers trendy atau sepatu kets yang stylish menjadi pilihan utama, memungkinkan mobilitas tinggi tanpa kehilangan gaya.</p>\r\n\r\n<p><strong>Layering yang Kreatif:</strong></p>\r\n\r\n<p>Fashion ini merangkul kekreatifan dalam layering. Padukan atasan berkerah dengan sweater hangat atau kemeja flanel untuk menciptakan dimensi tambahan dan menyesuaikan dengan variasi suhu di lingkungan perkotaan.</p>\r\n\r\n<p><strong>Aksesoris yang Mencolok:</strong></p>\r\n\r\n<p>Detil aksesoris yang mencolok, seperti kacamata matahari modern, jam tangan stylish, atau anting-anting bold, memberikan sentuhan akhir pada gaya City School Girl dan mencerminkan kepribadian yang berani dan dinamis.</p>\r\n\r\n<p><strong>Cocok untuk Kegiatan Sosial dan Akademis:</strong></p>\r\n\r\n<p>City School Girl adalah pilihan yang ideal untuk kegiatan akademis dan sosial. Baik itu berada di kampus, menghadiri kelas, atau bertemu teman di kafe kota, gaya ini memungkinkan Anda tampil chic dan siap untuk berbagai kesempatan.</p>\r\n\r\n<p>Fashion City School Girl adalah kombinasi cerdas antara gaya perkotaan yang trendi dan sentuhan segar anak kampus. Keseimbangan antara kenyamanan, keceriaan, dan keberanian gaya membuatnya cocok untuk perempuan yang ingin tampil modis di setiap langkahnya.</p>', '2023-11-29 20:24:37', '2023-12-12 05:41:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_09_19_042629_create_kategoris_table', 1),
(7, '2023_09_19_042630_create_bajus_table', 1),
(8, '2023_10_24_070622_create_cate_pants_table', 1),
(9, '2023_10_24_070803_create_pants_table', 1),
(10, '2023_10_27_123124_create_kat__topis_table', 1),
(11, '2023_10_27_123245_create_kat__tas_table', 1),
(12, '2023_10_27_123253_create_kat__sepatus_table', 1),
(13, '2023_10_27_123313_create_topis_table', 1),
(14, '2023_10_27_123320_create_tas_table', 1),
(15, '2023_10_27_123329_create_sepatus_table', 1),
(16, '2023_11_07_064807_create_beritas_table', 1),
(17, '2023_11_07_064816_create_events_table', 1),
(18, '2023_11_07_064829_create_lifestyles_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pants`
--

CREATE TABLE `pants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_celana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_pant_id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_celana` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_celana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pants`
--

INSERT INTO `pants` (`id`, `name_celana`, `cate_pant_id`, `deskripsi_celana`, `gambar_celana`, `created_at`, `updated_at`) VALUES
(1, 'Cargo Pant', 8, 'Cargo pants adalah jenis celana yang dirancang dengan beberapa kantong tambahan di bagian samping, paha, dan kadang-kadang di bagian belakang. Celana ini awalnya dikembangkan untuk keperluan militer, namun seiring waktu, cargo pants telah menjadi populer di kalangan masyarakat umum karena kenyamanan dan fungsionalitasnya. Berikut adalah beberapa ciri dan deskripsi umum tentang cargo pants:\r\n\r\nKantong Tambahan:\r\nCargo pants dikenal dengan banyaknya kantong tambahan yang ditempatkan di berbagai bagian celana. Kantong-kantong ini seringkali berukuran besar dan berbentuk kotak, memberikan fungsionalitas tambahan untuk menyimpan barang-barang kecil atau alat.\r\n\r\nPotongan Longgar:\r\nCargo pants biasanya memiliki potongan yang longgar dan nyaman, memberikan kebebasan gerak. Potongan yang lebih longgar juga menciptakan tampilan kasual dan santai.\r\n\r\nBahan Tahan Lama:\r\nCargo pants umumnya terbuat dari bahan yang tahan lama dan kuat, seperti katun atau kanvas. Hal ini membuatnya menjadi pilihan yang cocok untuk kegiatan di luar ruangan atau pekerjaan yang membutuhkan keandalan dan daya tahan.\r\n\r\nPilihan Warna yang Beragam:\r\nCargo pants tersedia dalam berbagai pilihan warna. Warna-warna yang umum melibatkan khaki, hijau militer, dan hitam, tetapi desainer dapat menciptakan versi yang lebih modis dengan berbagai warna dan pola.\r\n\r\nVersatilitas Gaya:\r\nMeskipun awalnya dikaitkan dengan pakaian kasual, cargo pants telah berkembang menjadi pilihan yang lebih modis. Beberapa versi dapat dipadukan dengan kemeja atau blazer untuk tampilan yang lebih formal, sementara yang lain tetap mempertahankan gaya santai.\r\n\r\nPilihan Potongan dan Panjang:\r\nCargo pants dapat hadir dalam berbagai potongan, termasuk potongan lurus, potongan lebar, atau bahkan versi pendek (cargo shorts). Panjang celana juga dapat bervariasi dari celana panjang hingga celana pendek, memberikan pilihan yang sesuai dengan kebutuhan dan preferensi pribadi.\r\n\r\nCargo pants menjadi pilihan yang populer karena kesan santai dan kemampuannya untuk menyimpan barang-barang kecil dengan mudah. Celana ini cocok untuk berbagai kegiatan, termasuk kegiatan sehari-hari, petualangan luar ruangan, atau kegiatan yang membutuhkan mobilitas tinggi.', 'imgcelana/zWCvBG1GEZWIjV8Apg7qxkkrUCsvRwTsEKLdFXi9.jpg', '2023-11-27 18:28:21', '2023-12-12 04:59:17'),
(2, 'Kulot Jeans', 1, '<p>Kulot jeans adalah varian celana kulot yang terbuat dari bahan denim atau jeans. Celana kulot sendiri memiliki potongan longgar dengan lebar pada bagian bawahnya, memberikan kesan mirip rok ketika dipakai. Berikut adalah deskripsi kulot jeans:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Bahan Denim:</strong> Kulot jeans terbuat dari bahan denim yang kuat dan tahan lama. Bahan ini memberikan kesan kasual dan memberikan struktur yang baik pada celana.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Potongan Longgar:</strong> Seperti jenis kulot pada umumnya, kulot jeans memiliki potongan longgar yang dimulai dari pinggang dan melebar ke bawah, menciptakan siluet yang lebar dan nyaman.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pinggang:</strong> Kulot jeans dapat memiliki variasi tinggi pinggang, seperti high waist atau regular waist, sesuai dengan tren dan preferensi pengguna.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Desain Kancing dan Resleting:</strong> Kulot jeans biasanya dilengkapi dengan kancing dan resleting di bagian depan, membuatnya mudah dipakai dan dilepas.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Detail Jeans Khas:</strong> Kulot jeans mungkin memiliki detail khas jeans, seperti jahitan kontras, saku belakang, dan desain khas jeans pada bagian kantong.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Panjang dan Lebar Kaki:</strong> Panjang kulot jeans bervariasi, namun umumnya mencapai bagian tengah betis atau sedikit di atas pergelangan kaki. Lebar kaki kulot jeans juga bervariasi, memberikan opsi bagi pemakai yang menginginkan gaya yang lebih berbeda.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Kombinasi Gaya:</strong> Kulot jeans bisa menjadi alternatif yang modis dan nyaman dari celana jeans konvensional. Pengguna dapat memadukannya dengan berbagai atasan, seperti kaus, blouse, atau jaket, untuk menciptakan tampilan yang sesuai dengan berbagai kesempatan.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Gaya Kasual yang Trendi:</strong> Kulot jeans memberikan kesan kasual yang trendi dan dapat dipakai dalam berbagai situasi, baik untuk kegiatan sehari-hari maupun acara santai.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Kulot jeans menjadi pilihan yang populer di kalangan mereka yang menginginkan kenyamanan celana kulot dengan sentuhan gaya yang berasal dari jeans yang ikonik. Kombinasi antara potongan kulot yang nyaman dan kestabilan denim membuatnya menjadi pilihan yang menarik untuk berbagai gaya dan kesempatan.</p>', 'imgcelana/nvUSijPnS7xFCa5DlSXxJXZhSseKDsXmc1ww7vdB.jpg', '2023-12-12 05:04:47', '2023-12-12 05:04:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sepatus`
--

CREATE TABLE `sepatus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_sepatu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kat__sepatu_id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_sepatu` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_sepatu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sepatus`
--

INSERT INTO `sepatus` (`id`, `name_sepatu`, `kat__sepatu_id`, `deskripsi_sepatu`, `gambar_sepatu`, `created_at`, `updated_at`) VALUES
(1, 'Sneakers Low Cut', 1, 'Sneakers low cut adalah pilihan yang stylish dan nyaman untuk penampilan kasual sehari-hari. Dengan potongan rendah yang ergonomis, sepatu ini memberikan kebebasan gerak optimal dan memberikan tampilan yang trendi. Cocok untuk digunakan dalam berbagai kesempatan, dari kegiatan sehari-hari hingga pertemuan santai bersama teman.', 'imgsepatu/Lb5aFvKjnoaxHcQ2ygTrRLyUkDQp8jMo8vr5L4Fm.jpg', '2023-11-29 19:53:38', '2023-12-06 05:03:53'),
(2, 'New Balance 327 Trainers', 1, '<p>New Balance 327 Trainers merupakan perpaduan yang luar biasa antara desain retro dan kenyamanan modern. Sneakers ini menghadirkan tampilan ikonik yang terinspirasi dari arsip New Balance, sementara teknologi terkini memberikan performa yang optimal. Cocok untuk pria dan wanita yang menghargai gaya klasik namun tetap ingin merasakan kenyamanan maksimal.</p>', 'imgsepatu/2krpA0I2bmdfG0wrKWW2PATS07MPFajfNv0VpvyM.jpg', '2023-11-29 19:55:18', '2023-11-29 19:55:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tas`
--

CREATE TABLE `tas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_tas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kat__tas_id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_tas` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_tas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tas`
--

INSERT INTO `tas` (`id`, `name_tas`, `kat__tas_id`, `deskripsi_tas`, `gambar_tas`, `created_at`, `updated_at`) VALUES
(1, 'Sling Bag', 3, 'Envelope Bag dari Yves Saint Laurent (YSL) adalah aksesori mode mewah yang mendefinisikan keanggunan dan gaya khas dari merek tersebut. Berikut adalah deskripsi tentang Envelope Bag YSL:\r\n\r\nDesain Ikonik:\r\nEnvelope Bag YSL dikenal dengan desainnya yang ikonik dan klasik. Tas ini memiliki bentuk yang menyerupai amplop dengan pinggiran yang dilipat, memberikan kesan simpel namun elegan.\r\n\r\nBahan Berkualitas Tinggi:\r\nTas ini umumnya terbuat dari bahan berkualitas tinggi, seperti kulit mewah atau suede yang halus. Pilihan material yang berkualitas memberikan sentuhan kemewahan dan tahan lama.\r\n\r\nDetail Logo YSL:\r\nCiri khas dari Envelope Bag YSL adalah keberadaan logo \"YSL\" yang ikonik. Logo ini seringkali ditempatkan dengan indah di bagian depan tas, menambahkan elemen branded dan mengukuhkan identitas merek.\r\n\r\nVarian Warna dan Gaya:\r\nEnvelope Bag YSL hadir dalam berbagai varian warna yang elegan, mencakup nuansa klasik seperti hitam, merah, nude, dan warna-warna lain yang seringkali sesuai dengan tren mode. Terdapat pula varian dengan desain atau aksen tambahan, seperti varian dua warna atau dengan aplikasi hardware yang menarik.\r\n\r\nSistem Penutup Khas:\r\nSistem penutup pada tas ini seringkali didesain dengan cermat. Beberapa Envelope Bag YSL menggunakan kancing magnetik atau gesper, memberikan perlindungan untuk barang bawaan sambil tetap mempertahankan tampilan yang bersih dan rapi.\r\n\r\nUkuran yang Variatif:\r\nEnvelope Bag YSL hadir dalam berbagai ukuran, mulai dari versi yang lebih kecil cocok untuk acara santai hingga ukuran yang lebih besar yang dapat memuat lebih banyak barang bawaan. Variasi ukuran ini memungkinkan konsumen memilih tas sesuai dengan kebutuhan dan preferensi mereka.\r\n\r\nFungsional dan Stylish:\r\nMeskipun tampak elegan, Envelope Bag YSL dirancang dengan fungsionalitas tinggi. Ruang dalam yang cukup dan penyusunan kantong yang bijaksana memungkinkan tas ini tidak hanya berfungsi sebagai aksesori mode, tetapi juga sebagai tas sehari-hari yang praktis.\r\n\r\nDapat Dipakai Secara Fleksibel:\r\nTas ini dapat dipakai dengan tali panjang sebagai crossbody bag atau dengan tali pendek untuk digunakan sebagai shoulder bag. Fleksibilitas ini membuatnya cocok untuk berbagai kesempatan, dari acara formal hingga sehari-hari.\r\n\r\nEnvelope Bag YSL adalah simbol kemewahan dan gaya yang timeless, menarik bagi pecinta mode yang menghargai desain klasik dan kualitas tinggi.', 'imgtas/3HpKopSq2MzO4SLLwXYbn598qrV0KqQ0X79vXGD5.jpg', '2023-11-27 19:49:53', '2023-12-05 05:42:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `topis`
--

CREATE TABLE `topis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_topi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kat__topi_id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_topi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_topi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `topis`
--

INSERT INTO `topis` (`id`, `name_topi`, `kat__topi_id`, `deskripsi_topi`, `gambar_topi`, `created_at`, `updated_at`) VALUES
(1, 'Beanie', 1, 'Beanie topi adalah jenis topi yang populer yang umumnya terbuat dari bahan rajutan, seperti wol atau akrilik, dan dirancang untuk menutupi kepala serta sebagian besar telinga. Berikut adalah deskripsi tentang beanie topi:\r\n\r\nDesain Rajutan:\r\nBeanie topi memiliki desain yang umumnya rajut atau anyaman, memberikan kesan casual dan santai. Rajutan ini memberikan fleksibilitas pada topi, sehingga dapat mengakomodasi berbagai ukuran kepala.\r\n\r\nModel yang Simpel:\r\nBeanie topi memiliki model yang sederhana dan minimalis, seringkali tanpa bentuk atap kaku atau pinggiran yang kaku. Desain simpel ini membuatnya mudah dipadukan dengan berbagai gaya pakaian, baik kasual maupun semi-formal.\r\n\r\nKenyamanan dan Kesejukan:\r\nKarena umumnya terbuat dari bahan rajutan yang ringan dan dapat \"bernafas,\" beanie topi memberikan kenyamanan dan kesejukan saat dipakai. Ini membuatnya cocok untuk digunakan dalam berbagai cuaca, terutama saat cuaca dingin.\r\n\r\nVersatilitas Gaya:\r\nBeanie topi dapat dipakai dengan berbagai gaya. Bisa dikenakan dengan cara melipat bagian bawahnya atau dipakai longgar untuk tampilan yang lebih santai. Beberapa orang juga memilih untuk menarik bagian atasnya sedikit ke atas untuk memberikan sedikit tampilan \"berantakan.\"\r\n\r\nVarian Bahan:\r\nMeskipun banyak beanie terbuat dari wol atau akrilik, ada juga varian yang terbuat dari bahan lain seperti katun atau campuran serat sintetis. Ini memberikan variasi dalam hal tekstur dan tingkat kehangatan.\r\n\r\nPilihan Warna dan Motif:\r\nBeanie topi hadir dalam berbagai pilihan warna dan motif, memungkinkan pemakainya untuk mengekspresikan gaya pribadi mereka. Mulai dari warna netral hingga warna-warna yang lebih cerah dan motif seperti garis-garis atau pola rajutan khas.\r\n\r\nAksesori Tambahan:\r\nBeberapa beanie topi mungkin dilengkapi dengan aksesori tambahan seperti pom-pom di bagian atas atau logam/bordir sebagai elemen dekoratif, menambahkan sentuhan unik pada desainnya.\r\n\r\nBeanie topi, dengan kepraktisannya dan daya tarik gayanya, telah menjadi pilihan populer bagi mereka yang mencari gaya santai dan kehangatan, terutama dalam konteks busana musim dingin atau saat cuaca dingin.', 'imgtopi/IMWlEMpIbythLQNnn4T6gN90jfxPtKpLAGqnBgs7.jpg', '2023-11-27 19:41:55', '2023-12-12 05:16:29'),
(2, 'Baseball Hat', 2, '<p>Topi baseball, juga dikenal sebagai baseball cap atau snapback, adalah topi yang memiliki mahkota bulat dengan kisi di bagian belakang dan penutup kepala yang datar. Ini adalah salah satu jenis topi yang paling umum dan populer, terutama di kalangan penggemar olahraga, termasuk baseball. Berikut adalah beberapa ciri khas dan deskripsi tentang topi baseball:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Mahkota Bulat:</strong> Baseball hat memiliki mahkota yang bulat dan seringkali memiliki panel-panel di bagian depan yang membentuk struktur bulat tersebut.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Penutup Kepala Datar:</strong> Salah satu ciri khas topi baseball adalah penutup kepala yang datar atau rata. Penutup ini memberikan tampilan khas dan sering digunakan untuk menampilkan logo, gambar, atau tulisan di bagian depan.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Kisi di Bagian Belakang:</strong> Sebagian besar topi baseball memiliki kisi atau jaring di bagian belakang yang dapat disesuaikan untuk memastikan ukuran yang pas dan memberikan sirkulasi udara yang baik.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Visor atau Peaked Brim:</strong> Baseball hat dilengkapi dengan visor atau brim di bagian depan, yang memberikan perlindungan dari sinar matahari dan memberikan tampilan sporty.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Logo atau Bordir:</strong> Topi baseball seringkali memiliki logo, gambar, atau tulisan yang dijahit atau dibordir di bagian depan atau sampingnya. Logo ini dapat mencakup logo tim olahraga, merek, atau desain lain yang mempersonalisasi topi.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Bahan yang Beragam:</strong> Baseball hat dapat terbuat dari berbagai bahan, termasuk katun, poliester, atau kombinasi bahan lainnya. Pilihan bahan ini memberikan variasi dalam hal kenyamanan dan keberagaman gaya.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Variasi Gaya:</strong> Selain model tradisional, ada berbagai variasi gaya topi baseball, seperti snapback yang dapat disesuaikan dengan menggunakan snap atau gesper, dan fitted yang dirancang untuk ukuran kepala yang lebih tepat.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Aksesori Mode:</strong> Baseball hat bukan hanya pilihan praktis untuk melindungi kepala dari sinar matahari, tetapi juga telah menjadi aksesori mode yang populer. Topi ini dapat dipadukan dengan berbagai gaya pakaian untuk memberikan tampilan yang santai dan trendi.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Topi baseball adalah pilihan yang serbaguna dan populer di berbagai kalangan, tidak hanya di dunia olahraga tetapi juga sebagai bagian dari budaya mode sehari-hari.</p>', 'imgtopi/e7zHj8zgwDgFu0vZ5hRTLbF77HLvs9YA3mHJePmV.jpg', '2023-12-12 05:26:36', '2023-12-12 05:26:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'nepii', 'nevi.yuanita01@gmail.com', NULL, '$2y$10$ZsVXplS4whd2yh.GsapIyefqMTGHe.r.FM2GQyVsciSN65cyjxKfq', NULL, '2023-12-13 10:14:17', '2023-12-13 10:14:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bajus`
--
ALTER TABLE `bajus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bajus_kategori_id_foreign` (`kategori_id`);

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cate_pants`
--
ALTER TABLE `cate_pants`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kat__sepatus`
--
ALTER TABLE `kat__sepatus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kat__tas`
--
ALTER TABLE `kat__tas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kat__topis`
--
ALTER TABLE `kat__topis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lifestyles`
--
ALTER TABLE `lifestyles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pants`
--
ALTER TABLE `pants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pants_cate_pant_id_foreign` (`cate_pant_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sepatus`
--
ALTER TABLE `sepatus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sepatus_kat__sepatu_id_foreign` (`kat__sepatu_id`);

--
-- Indeks untuk tabel `tas`
--
ALTER TABLE `tas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tas_kat__tas_id_foreign` (`kat__tas_id`);

--
-- Indeks untuk tabel `topis`
--
ALTER TABLE `topis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topis_kat__topi_id_foreign` (`kat__topi_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bajus`
--
ALTER TABLE `bajus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `cate_pants`
--
ALTER TABLE `cate_pants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kat__sepatus`
--
ALTER TABLE `kat__sepatus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kat__tas`
--
ALTER TABLE `kat__tas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kat__topis`
--
ALTER TABLE `kat__topis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `lifestyles`
--
ALTER TABLE `lifestyles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pants`
--
ALTER TABLE `pants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sepatus`
--
ALTER TABLE `sepatus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tas`
--
ALTER TABLE `tas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `topis`
--
ALTER TABLE `topis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bajus`
--
ALTER TABLE `bajus`
  ADD CONSTRAINT `bajus_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pants`
--
ALTER TABLE `pants`
  ADD CONSTRAINT `pants_cate_pant_id_foreign` FOREIGN KEY (`cate_pant_id`) REFERENCES `cate_pants` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sepatus`
--
ALTER TABLE `sepatus`
  ADD CONSTRAINT `sepatus_kat__sepatu_id_foreign` FOREIGN KEY (`kat__sepatu_id`) REFERENCES `kat__sepatus` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tas`
--
ALTER TABLE `tas`
  ADD CONSTRAINT `tas_kat__tas_id_foreign` FOREIGN KEY (`kat__tas_id`) REFERENCES `kat__tas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `topis`
--
ALTER TABLE `topis`
  ADD CONSTRAINT `topis_kat__topi_id_foreign` FOREIGN KEY (`kat__topi_id`) REFERENCES `kat__topis` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
