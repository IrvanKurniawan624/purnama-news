-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 17, 2025 at 10:34 PM
-- Server version: 10.11.10-MariaDB-cll-lve
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n1484909_d_purnama_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori_id` bigint(20) NOT NULL,
  `slug_judul` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `text_gambar` varchar(150) DEFAULT NULL,
  `meta_keyword` varchar(75) DEFAULT NULL,
  `meta_deskripsi` varchar(75) DEFAULT NULL,
  `jumlah_klik` bigint(20) DEFAULT 0,
  `deskripsi_singkat` text NOT NULL,
  `content` text NOT NULL,
  `is_publish` char(1) NOT NULL DEFAULT '0',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `kategori_id`, `slug_judul`, `gambar`, `text_gambar`, `meta_keyword`, `meta_deskripsi`, `jumlah_klik`, `deskripsi_singkat`, `content`, `is_publish`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(7, 'Ini Data Dumb Judul Berita 1', 1, 'ini-adalah-data-dumb-judul-berita-1', '757f2d4dff32354a8b8a6989019e60ed.jpg', NULL, 'wa', 'wa', 25, '', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni saepe qui doloribus sequi tempora aspernatur beatae quam officiis a blanditiis! waas</p>', '0', NULL, '2023-05-28 04:08:22', NULL, '2023-05-29 17:46:14'),
(10, 'Ini Data Dumb Judul Berita 2', 4, 'ini-data-dumb-judul-berita-2', '7cfaa1bf46204275c987e5ee137a7e7c.jpg', NULL, 'wad', 'wasd', 0, '', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia officia veritatis pariatur non excepturi voluptatum molestias quis, voluptas repellendus hic!<br></p>', '1', NULL, '2023-05-28 15:14:56', NULL, '2023-05-28 18:17:55'),
(12, 'Ini Data Dumb Judul Berita 3', 1, 'ini-data-dumb-judul-berita-3', '0e4320115cb66fa51a4732f94cd4de1d.jpg', NULL, 'aw', 'aw', 0, '', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia officia veritatis pariatur non excepturi voluptatum molestias quis, voluptas repellendus hic!<br></p>', '1', NULL, '2023-05-28 15:16:50', NULL, '2023-05-28 18:17:45'),
(13, 'Ini Data Dumb Judul Berita 4', 5, 'ini-data-dumb-judul-berita-4', '6857f1def9861274ea512a64f7a804c6.jpg', NULL, '123', '213', 0, '', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia officia veritatis pariatur non excepturi voluptatum molestias quis, voluptas repellendus hic!<br></p>', '1', NULL, '2023-05-28 17:41:48', NULL, '2023-05-28 16:24:08'),
(14, 'Ini Data Dumb Judul Berita 5', 1, 'ini-data-dumb-judul-berita-5', 'b9446fc6498b8f7f14359b98b0b7bae6.jpg', NULL, 'waawwaw', 'aw', 0, '', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia officia veritatis pariatur non excepturi voluptatum molestias quis, voluptas repellendus hic!<br></p>', '1', NULL, '2023-05-28 16:27:04', NULL, '2023-05-29 17:46:04'),
(16, 'test', 1, 'test', 'a5e375d69c99ffe62dede64b05a68ef4.jpg', NULL, 'test', 'testse', 0, '<span style=\"color: rgb(102, 102, 102); font-family: poppins, sans-serif; font-size: 15px;\">Tahun 2023 disebut sebagai tahun politik &nbsp;dan tentu seluruh partai akan bekerja keras dan maksimal untuk lolo ambang batas Parlemen &nbsp;Pemilu 2024 dan &nbsp;juga bisa menghantar calon presiden yang didukungnya untuk memenangi kontestasi Pilpres 2024.. Menanggapi hal yang demikian Wakil ketua MPR Prof. Dr. Sjarifuddin Hasan MM., MBA., berharap seluruh partai yang ikut dalam kontestasi pemilu untuk bersikap saling menghargai. “Semua partai pasti akan mempersiapkan dirinya dengan baik untuk mengikuti pemilu”, ujarnya saat melakukan kunjungan kerja di Pacitan, Jawa Timur, 14 Januari 2023.</span>', '<p><span style=\"color: rgb(102, 102, 102); font-family: poppins, sans-serif; font-size: 15px;\">Tahun 2023 disebut sebagai tahun politik &nbsp;dan tentu seluruh partai akan bekerja keras dan maksimal untuk lolo ambang batas Parlemen &nbsp;Pemilu 2024 dan &nbsp;juga bisa menghantar calon presiden yang didukungnya untuk memenangi kontestasi Pilpres 2024.. Menanggapi hal yang demikian Wakil ketua MPR Prof. Dr. Sjarifuddin Hasan MM., MBA., berharap seluruh partai yang ikut dalam kontestasi pemilu untuk bersikap saling menghargai. “Semua partai pasti akan mempersiapkan dirinya dengan baik untuk mengikuti pemilu”, ujarnya saat melakukan kunjungan kerja di Pacitan, Jawa Timur, 14 Januari 2023.</span></p><p style=\"color: rgb(102, 102, 102); line-height: 1.5; font-size: 15px; font-family: poppins, sans-serif;\">Di tahun politik menurut Politisi Partai Demokrat itu paling penting adalah bagaimana stabilitas politik tetap terjaga. “Meski di Tahun Politik namun persatuan dan kesatuan tetap kita kedepankan”, ujarnya.</p><p style=\"color: rgb(102, 102, 102); line-height: 1.5; font-size: 15px; font-family: poppins, sans-serif;\">Tidak hanya itu yang diinginkan dan diharapkan oleh pria asal Sulawesi Selatan itu. Dirinya secara tegas mengatakan netralitas para penyelenggara pemilu, termasuk pemerintah dan aparatnya &nbsp;harus terjaga. Hal demikian ditekankan agar pemilu sebagai wujud kedaulatan rakyat bisa terselenggara secara demokratis, jujur dan adil. “Jangan ada intervensi dan bentuk-bentuk sejenis lainnya”, tuturnya. Ditambahkan pemilu perlu dijaga agar pesta demokrasi terwujud secara adil dan transparant sesuai pilihan masing masing.</p><p style=\"color: rgb(102, 102, 102); line-height: 1.5; font-size: 15px; font-family: poppins, sans-serif;\"><br></p><p style=\"line-height: 1.5; font-size: 15px; font-family: poppins, sans-serif;\"><span style=\"color: rgb(102, 102, 102); width: 100%;\"><img src=\"https://c4.wallpaperflare.com/wallpaper/142/751/831/landscape-anime-digital-art-fantasy-art-wallpaper-thumb.jpg\" style=\"width: 100%; float: none;\"></span><span style=\"color: rgb(0, 0, 255);\">src:&nbsp;https://c4.wallpaperflare.com/wallpaper/175/524/956/digital-digital-art-artwork-fantasy-art-drawing-hd-wallpaper-thumb.jpg</span></p><p style=\"color: rgb(102, 102, 102); line-height: 1.5; font-size: 15px; font-family: poppins, sans-serif;\">Untuk mewujudkan demokrasi yang adil itulah maka sistem pemilu yang terbuka dianggap yang paling ideal dan tepat. “Sistem terbuka merupakan bentuk kedaulatan rakyat yang terjamin”, ujar Menteri Koperasi dan UMKM di masa Pemerintahan Presiden Susilo Bambang Yudhoyono itu.</p><p style=\"color: rgb(102, 102, 102); line-height: 1.5; font-size: 15px; font-family: poppins, sans-serif;\">Dengan sistem terbuka menurut Sjarifuddin Hasan rakyat atau pemilih benar-benar bebas memilih caleg yang dia sukai, kenal, dan terbukti reputasinya. “Kalau sistem yang digunakan tertutup maka rakyat tidak tahu siapa yang dia pilih”, paparnya. Sistem tertutup membuat rakyat tidak tahu siapa-siapa saja yang diusung oleh partai. “Jadi lagi-lagi &nbsp;yang terbaik adalah sistem pemilu terbuka”, ujarnya.</p><p style=\"color: rgb(102, 102, 102); line-height: 1.5; font-size: 15px; font-family: poppins, sans-serif;\">Sistem terbuka dikatakan oleh pria yang menperoleh&nbsp;<br>gelar proffesor dari Universitas Negeri Makassar itu, akan &nbsp;membuat seluruh caleg akan bekerja keras turun ke lapangan bertemu dengan Rakyat. Mereka akan memperkenalkan diri, bersosialisasi, dan bertatap muka dengan rakyat sehingga rakyat tahu bagaimana komitmen caleg tersebut.Tutup&nbsp;Syarief</p><div><br></div><p style=\"color: rgb(102, 102, 102); line-height: 1.5; font-size: 15px; font-family: poppins, sans-serif;\"></p><p></p><p></p>', '1', NULL, '2023-05-31 01:11:12', NULL, '2023-06-02 03:18:49'),
(17, 'Kasus Serial Killer Bekasi, Wowon CS', 4, 'kasus-serial-killer-bekasi-wowon-cs', 'e59ecd1c1f2de188bc1fad33de22577d.jpeg', NULL, 'WOWON CS', 'WASD', 0, '<p><span style=\"font-size: 11pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Penyelidikan kasus serial killer Wowon cs masih\r\nberlanjut. Penyidik Ditreskrimum Polda Metro Jaya kini tengah melengkapi berkas\r\nperkara Wowon cs</span><br></p>', '<p class=\"MsoNormal\" style=\"text-indent:36.0pt\"><img src=\"https://c4.wallpaperflare.com/wallpaper/175/524/956/digital-digital-art-artwork-fantasy-art-drawing-hd-wallpaper-thumb.jpg\" style=\"width: 551px; float: left;\" class=\"note-float-left\">Padahal saat itu merupakan semua yang akan terjadi kemudian kemungkinan mereka selalu kenapa terjadi kenapa terjandsfjdslfjsdalkjflsakjflksjdf lkjsdfljlkvjdsjflaslfkjasklfj Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, ipsa repellat debitis sequi sunt hic iusto fugit. Corrupti odio culpa iusto dignissimos asperiores molestias esse eaque nulla, error reiciendis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, ipsa repellat debitis sequi sunt hic iusto fugit. Corrupti odio culpa iusto dignissimos asperiores molestias esse eaque nulla, error reiciendis?</p><p class=\"MsoNormal\" style=\"text-indent:36.0pt\"><span style=\"text-indent: 36pt;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, ipsa repellat debitis sequi sunt hic iusto fugit. Corrupti odio culpa iusto dignissimos asperiores molestias esse eaque nulla, error reiciendis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, ipsa repellat debitis sequi sunt hic iusto fugit. Corrupti odio culpa iusto dignissimos asperiores molestias esse eaque nulla, error reiciendis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, ipsa repellat debitis sequi sunt hic iusto fugit. Corrupti odio culpa iusto dignissimos asperiores molestias esse eaque nulla, error reiciendis?</span></p><p class=\"MsoNormal\" style=\"text-indent:36.0pt\"><span style=\"text-indent: 36pt;\"><br></span><br></p>', '1', NULL, '2023-05-31 03:34:49', NULL, '2023-06-02 03:13:25'),
(20, 'Berita Baru', 1, 'berita-baru', 'e012d06f162823544b996f28a2cd0bf3.jpg', NULL, 'wasd', 'wasd', 0, '<p><b>INI ADALAH DESKRIPSI SINGKAT BERITA</b></p>', '<h1>INI ADALAH HEADING BERITA</h1><div><div style=\"display: flex;flex-direction: column;border: 3px dashed sandybrown;padding: 15px 22px; font-size: 1rem\"><span style=\"margin-bottom: 5px;\">Baca Juga</span><a href=\"https://harianpurnamanews.com/detail/test\">BERITA BARU HARI INI</a></div></div><p><br></p><p><img style=\"width: 100%;\" src=\"https://c4.wallpaperflare.com/wallpaper/175/524/956/digital-digital-art-artwork-fantasy-art-drawing-hd-wallpaper-thumb.jpg\"><span style=\"color: rgb(0, 0, 255);\">ini adalah Source Image</span></p><p>Ini Adalah Deskripsi</p>', '1', NULL, '2023-06-02 03:30:49', NULL, '2023-06-02 16:54:21'),
(21, 'berita baru 5', 1, 'berita-baru-5', 'a014e1919654a19dffb0ec49d17ede87.jpg', 'Wakil Menteri BUMN II Kartika Wirjoatmodjo di Sarinah Jakarta, Selasa (14/2/2023). Pemerintah investigasi laporan keuangan Waskita Karya dan Wika.(Kom', 'wasd', 'wasd', 0, '<p>wasd</p>', '<h1>heading</h1><p><img src=\"https://lh3.googleusercontent.com/drive-viewer/AFGJ81qaKup1dRLKwTMgZznLC3DhwEX4bn8-DW5g6cIuQipkwFl9mSuWDB8BKGhFCeWFIDB573nZ_3mL-rgj4hhJ0rlCM7uKfg=s2560\" style=\"width: 128px;\"><span style=\"color: rgb(255, 0, 0);\"><br></span></p><p><span style=\"color: rgb(255, 0, 0);\">source: ini source</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p><p><span style=\"color: rgb(255, 0, 0);\"><br></span></p><div><div style=\"display: flex;flex-direction: column;border: 3px dashed sandybrown;padding: 15px 22px; font-size: 1rem\"><span style=\"margin-bottom: 5px;\">Baca Juga</span><a href=\"http://asdf\">twts</a></div></div><p><span style=\"color: rgb(255, 0, 0);\"><br></span></p><p><span style=\"color: rgb(255, 0, 0);\"><br></span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><span style=\"color: rgb(255, 0, 0);\"><br></span></p>', '1', NULL, '2023-06-06 21:10:56', NULL, '2023-06-07 03:37:07'),
(22, 'JUDUL BERITA CONTOH', 4, 'judul-berita-contoh', '332c0a86b4e6d3e74d1790b90b35ff06.jpg', 'https://html.quomodosoft.com/binduz/assets/images/blog-details-thumb-3.jpg', 'BERITA CONTOH', 'DESKIRPSI CONTOH', 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a', '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><img style=\"width: 420px;\" src=\"https://html.quomodosoft.com/binduz/assets/images/blog-details-thumb-3.jpg\"><span class=\"source-image\">https://html.quomodosoft.com/binduz/assets/images/blog-details-thumb-3.jpg</span><br></p><p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><br></span></p><p><img style=\"width: 880px;\" src=\"https://html.quomodosoft.com/binduz/assets/images/blog-details-thumb-2.jpg\"><span class=\"source-image\">https://html.quomodosoft.com/binduz/assets/images/blog-details-thumb-2.jpg</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><br></span><br></p><p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><br></span></p><p><img style=\"width: 880px;\" src=\"https://html.quomodosoft.com/binduz/assets/images/blog-details-thumb-2.jpg\" class=\"image-1\"><span class=\"source-image\">test</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><br></span><br></p><p><span style=\"font-weight: bolder; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span><br></p>', '1', NULL, '2023-06-07 05:50:27', NULL, '2023-06-08 03:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `kategori_slug` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `kategori_slug`, `keterangan`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Travel', 'travel', 'keterangan kategori 1', 1, '2023-05-27 01:37:52', 1, '2023-05-28 16:06:33'),
(4, 'Bola', 'bola', 'ini Adalah Keterangan Kategori 2', 1, '2023-05-28 16:07:04', NULL, '2023-05-28 16:07:04'),
(5, 'Teknologi', 'teknologi', 'Ini Adalah Keterangan Kategori 3', 1, '2023-05-28 16:07:31', NULL, '2023-05-28 16:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_26_153021_create_banners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 'admin@gmail.com', NULL, '$2y$10$KDUZDWBFDqCfpLfnhu2fiOK6B/evLvdOKM/46gr55vqfiWW.DDMWi', NULL, '2023-05-26 13:32:50', '2023-05-26 13:32:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `berita_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_created_by_foreign` (`created_by`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
