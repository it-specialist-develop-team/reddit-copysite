-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-11-12 07:51:17
-- サーバのバージョン： 10.4.14-MariaDB
-- PHP のバージョン: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `reddit`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `evaluation_logs`
--

DROP TABLE IF EXISTS `evaluation_logs`;
CREATE TABLE `evaluation_logs` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `evaluation` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `subreddit_id` int(11) NOT NULL,
  `post_type` int(11) DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `attachment` text DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `evaluation` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `posts`
--

INSERT INTO `posts` (`id`, `subreddit_id`, `post_type`, `title`, `body`, `attachment`, `parent_id`, `user_id`, `evaluation`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, NULL, 'Accusamus accusamus.', 'Rerum tenetur distinctio ea labore facere eaque quas. Voluptate sint quidem sit aut. Perspiciatis consequatur commodi exercitationem voluptatem. Deleniti rerum corporis unde quo natus eos.', NULL, NULL, 15, NULL, '2006-04-03 20:18:43', '1977-04-19 18:24:01', NULL),
(2, 7, NULL, 'Labore quasi ut sit.', 'Voluptatem ex doloribus architecto vero ratione. Laudantium doloribus ratione ut ut. Et laborum dolor quibusdam neque molestiae fuga ut. Quas deserunt id et odio velit perspiciatis et.', NULL, NULL, 19, NULL, '2011-06-04 00:13:23', '1994-08-27 15:00:20', NULL),
(3, 1, NULL, 'Cumque nihil quis.', 'Omnis neque ipsum cum dolorem ullam. Sit voluptas cumque quam ab est aperiam. Eveniet fugiat officiis enim quo quis officiis. Labore quia atque ipsa quo necessitatibus numquam quia.', NULL, NULL, 18, NULL, '1996-11-22 01:38:45', '1983-05-04 08:21:35', NULL),
(4, 1, NULL, 'Quisquam dolorum.', 'Qui perferendis omnis laudantium non modi numquam aspernatur. Eveniet accusamus qui rerum consectetur qui. Quo velit quam debitis. Eveniet nihil aut officia facere animi quo quia.', NULL, NULL, 17, NULL, '1993-08-26 21:28:02', '1983-04-05 20:29:20', NULL),
(5, 7, NULL, 'Doloremque pariatur.', 'Fuga iure pariatur eos. Pariatur molestiae repellendus id commodi maxime qui. Voluptatum velit officia occaecati eaque. Est placeat rerum sit reiciendis.', NULL, NULL, 5, NULL, '1992-03-09 01:00:29', '2017-12-07 19:10:31', NULL),
(6, 5, NULL, 'Corrupti iusto.', 'Dolore id laudantium necessitatibus suscipit. Modi possimus possimus adipisci cumque ut voluptatem laboriosam. Ipsum numquam aut repellat eligendi.', NULL, NULL, 12, NULL, '1976-06-11 07:14:52', '2010-10-01 00:13:45', NULL),
(7, 4, NULL, 'Quisquam quisquam.', 'Est et ut sit. Veritatis magni est placeat ducimus. Voluptas ipsam id beatae consequatur provident sint. Officiis consequuntur fugiat dolorem odio harum perferendis.', NULL, NULL, 17, NULL, '2004-06-04 13:13:46', '1973-11-09 18:42:17', NULL),
(8, 5, NULL, 'Aut accusamus fuga.', 'Eius nam ipsum porro aliquam nam et nemo. Ut ipsa vero enim et non sunt voluptas. Dicta sed qui ab natus porro maxime. Facere temporibus facere numquam et sint quia.', NULL, NULL, 19, NULL, '1971-03-29 03:45:26', '2014-09-13 03:16:03', NULL),
(9, 6, NULL, 'Et non et eaque.', 'Eum voluptate quaerat sint et fugiat beatae. Distinctio cumque odit omnis est debitis id inventore. Aut optio alias aut quidem.', NULL, NULL, 3, NULL, '1987-09-17 19:15:19', '1996-12-12 18:23:38', NULL),
(10, 1, NULL, 'Et sed debitis hic.', 'Explicabo a molestias accusamus debitis dicta consequatur. Cumque eos qui at neque. Ut necessitatibus quo voluptas consequatur tempore eveniet. Nobis totam voluptatum et.', NULL, NULL, 14, NULL, '1999-04-28 16:08:46', '1989-09-26 02:05:25', NULL),
(11, 3, NULL, 'Earum est dolorem.', 'Perspiciatis officia aut omnis molestias quasi facere pariatur harum. Et nulla et accusamus quia cumque praesentium. Provident minus minima nemo illum. Quia at accusamus doloremque et ducimus omnis.', NULL, NULL, 18, NULL, '1987-01-04 13:55:47', '2009-02-18 17:30:40', NULL),
(12, 7, NULL, 'Assumenda ut totam.', 'Nostrum laudantium qui tempora rem eos qui possimus. Mollitia aut inventore numquam. Esse temporibus eaque enim qui dolorem accusamus. Fuga repudiandae adipisci cumque in temporibus quo rem.', NULL, NULL, 8, NULL, '1997-05-16 21:15:25', '1979-12-30 03:36:58', NULL),
(13, 3, NULL, 'Harum dolorem.', 'Modi iste corrupti omnis ipsam blanditiis excepturi. Ipsam et accusamus earum qui mollitia. Veniam accusantium quia itaque earum enim laboriosam. Perferendis ad illo quos necessitatibus sint.', NULL, NULL, 16, NULL, '1973-10-29 18:41:53', '1983-12-02 08:27:03', NULL),
(14, 4, NULL, 'Neque quisquam sunt.', 'Officiis quas iste omnis maiores accusamus sit. Odit rerum et esse. Officiis excepturi at quos ipsum soluta enim quibusdam minima. Alias explicabo quisquam quia quia voluptatibus voluptas.', NULL, NULL, 15, NULL, '1992-01-12 03:14:24', '1989-11-15 15:24:24', NULL),
(15, 3, NULL, 'Quaerat ad ipsa.', 'Officia qui autem natus illo et voluptatem. Facilis iusto dolorem nostrum nam aspernatur consequatur quisquam. Quam voluptas porro eveniet nihil ut fugiat.', NULL, NULL, 19, NULL, '2003-11-20 20:48:14', '1980-10-28 13:17:52', NULL),
(16, 6, NULL, 'Praesentium.', 'Fuga voluptatibus voluptatem magni occaecati culpa veritatis. Voluptatem nihil corporis quis.', NULL, NULL, 4, NULL, '1987-02-26 17:42:51', '1986-05-24 00:27:35', NULL),
(17, 3, NULL, 'Neque temporibus.', 'Nostrum aut quia omnis. Explicabo recusandae eveniet dolor veritatis. Eveniet nobis minus corrupti debitis nam blanditiis a id. Molestiae id natus hic. Fuga nihil et consectetur praesentium quod.', NULL, NULL, 7, NULL, '1986-05-12 21:04:38', '1980-06-25 22:21:12', NULL),
(18, 5, NULL, 'Ipsa dolores.', 'Inventore et qui ut minus delectus inventore. Ducimus rerum sit numquam quo. Sit excepturi odio in eos laborum et ut. Est porro magni voluptatem sint. Et harum numquam vel voluptas dolores magni.', NULL, NULL, 17, NULL, '1989-12-12 01:37:45', '2001-11-18 09:24:42', NULL),
(19, 3, NULL, 'Possimus et error.', 'Doloribus non ut minus quos. Iure facilis sapiente inventore eveniet unde eos. Fugit qui aliquid dolorem ipsam molestiae nihil ut. Et architecto voluptas inventore voluptas corrupti soluta.', NULL, NULL, 18, NULL, '2020-07-05 22:03:37', '2017-01-24 06:55:18', NULL),
(20, 4, NULL, 'Qui qui adipisci.', 'Porro sequi quia id. Repellat atque at cumque in architecto quibusdam qui. Sed tempore deleniti officiis recusandae iure tempore.', NULL, NULL, 17, NULL, '1995-04-28 12:29:23', '2010-07-13 05:21:53', NULL),
(21, 1, NULL, 'Commodi voluptas.', 'Fugit earum exercitationem sequi et magni reiciendis velit. Quisquam qui explicabo quaerat cum. Facilis in nostrum voluptatem ipsa. Expedita aut commodi sunt possimus.', NULL, NULL, 20, NULL, '1971-02-03 15:59:13', '2013-03-22 16:51:06', NULL),
(22, 6, NULL, 'Provident.', 'Velit dolorem sunt esse. Autem nesciunt ratione provident laboriosam veniam. Natus magni provident et delectus quia. Quidem ipsum iusto est. Id veritatis nostrum enim distinctio placeat.', NULL, NULL, 3, NULL, '1989-07-04 07:22:34', '1997-04-23 09:20:53', NULL),
(23, 2, NULL, 'Aut nesciunt omnis.', 'Ex officiis et aut ratione nesciunt quia. Vero cum ipsam repellat itaque debitis doloremque nam. Cumque voluptatem qui tenetur explicabo fuga rem est.', NULL, NULL, 9, NULL, '2019-07-28 23:46:57', '1991-06-23 08:44:20', NULL),
(24, 1, NULL, 'Non voluptas.', 'Recusandae iusto suscipit a voluptatum. Sunt at vel voluptate praesentium sit ipsum. Excepturi optio voluptate voluptatibus dolore qui. Vitae labore officiis architecto aut autem perspiciatis.', NULL, NULL, 14, NULL, '1992-09-18 15:14:29', '2010-05-20 05:15:54', NULL),
(25, 5, NULL, 'Soluta a inventore.', 'Quia neque cum impedit optio et illo. Quaerat non maiores et beatae numquam.', NULL, NULL, 19, NULL, '1977-06-27 23:42:30', '1970-07-03 11:37:22', NULL),
(26, 1, NULL, 'Optio sit est rerum.', 'Vel corrupti reprehenderit non ullam aliquid non ipsam. Aspernatur dolorem facere quos odit qui. Itaque est delectus optio aspernatur dolor quos et. Inventore commodi qui voluptates hic.', NULL, NULL, 1, NULL, '1990-07-22 09:20:36', '1981-01-26 12:31:30', NULL),
(27, 2, NULL, 'Sed porro.', 'Voluptatem enim illo hic quia culpa omnis ducimus. Doloribus qui quidem numquam non qui. Consectetur omnis velit vel dolorum sunt nesciunt id dolorem.', NULL, NULL, 16, NULL, '1983-02-25 20:58:51', '2015-04-18 10:00:46', NULL),
(28, 6, NULL, 'Ex totam est.', 'Deleniti aut amet unde in qui sit harum. Voluptatem facilis laboriosam voluptatem et incidunt quae. Eius voluptatem autem aut ullam esse occaecati.', NULL, NULL, 10, NULL, '1988-02-21 09:49:28', '2009-07-15 08:31:49', NULL),
(29, 6, NULL, 'Dicta et eius esse.', 'Fugiat qui incidunt deserunt minima ut vero. Eum placeat non rem. Expedita aperiam autem omnis rerum.', NULL, NULL, 12, NULL, '2017-05-18 22:12:43', '2015-03-21 06:40:34', NULL),
(30, 1, NULL, 'Qui voluptas.', 'Impedit nihil et omnis quam ut iusto dolor. Expedita consequatur similique et sed saepe est. Esse illo enim quas qui accusamus non laborum.', NULL, NULL, 10, NULL, '1989-02-12 01:30:54', '1979-03-17 06:50:18', NULL),
(31, 3, NULL, 'Voluptas in non qui.', 'Incidunt consequatur quod nulla alias. Laborum maiores vel sed iste ex.', NULL, NULL, 17, NULL, '1989-08-26 08:26:45', '2002-02-19 20:49:39', NULL),
(32, 7, NULL, 'Voluptate facilis.', 'Odio aspernatur unde impedit quidem. Incidunt quae non in at adipisci harum. Minus et ea sit aut libero voluptatem.', NULL, NULL, 9, NULL, '1972-06-25 21:39:52', '2002-01-28 11:20:07', NULL),
(33, 7, NULL, 'Reprehenderit.', 'Autem iure modi rem ducimus voluptates iste modi. Nihil qui velit eos totam quidem quia exercitationem vitae. Laboriosam maxime aliquam adipisci laboriosam beatae. Voluptas fugiat est ducimus.', NULL, NULL, 2, NULL, '1982-11-26 16:53:26', '2000-09-13 13:17:35', NULL),
(34, 7, NULL, 'Similique provident.', 'Commodi voluptatem numquam est non voluptas ut sit sapiente. Sint molestiae quos et. Modi sunt velit voluptas qui.', NULL, NULL, 9, NULL, '2019-12-31 22:54:45', '2004-01-14 05:16:57', NULL),
(35, 1, NULL, 'Quisquam ut.', 'Et aperiam consequuntur enim officia eum fugiat qui. Excepturi voluptatem consequatur recusandae nihil at minus. Qui hic totam non quia. Enim rerum labore eaque ea amet.', NULL, NULL, 13, NULL, '2020-09-07 02:27:53', '1984-06-23 01:31:59', NULL),
(36, 6, NULL, 'A rerum quia quis.', 'Ut aut aut quos quam aut dolor inventore. Vero distinctio velit harum impedit eos veniam. Cum cumque non saepe recusandae exercitationem autem facere. Rerum dicta officia numquam et ut rerum.', NULL, NULL, 20, NULL, '2008-08-03 19:52:33', '2003-06-18 17:39:06', NULL),
(37, 7, NULL, 'Quia quidem est.', 'Dolorem veritatis cumque quia similique repudiandae nobis autem. Tempora aspernatur id non id exercitationem. Laborum aut amet fugit cumque sed in.', NULL, NULL, 20, NULL, '1998-01-21 02:55:31', '2009-01-13 13:19:04', NULL),
(38, 6, NULL, 'Officia qui quo.', 'Et atque earum eos consequatur natus repellat nemo. Dolorem quia sed quia corrupti porro fuga. Dolor accusantium aut non ipsum id. Dolores autem quia distinctio reprehenderit ut.', NULL, NULL, 10, NULL, '2000-09-24 07:28:48', '2002-05-27 17:14:02', NULL),
(39, 1, NULL, 'Ducimus facere.', 'Ex voluptatem dolorum in qui. In sapiente ullam quibusdam officia molestias sint. Rerum sequi sequi vel esse voluptate atque repellat. Dolorem qui quo assumenda aspernatur rerum libero.', NULL, NULL, 2, NULL, '2002-11-06 23:02:34', '1983-06-19 17:36:06', NULL),
(40, 3, NULL, 'At amet modi.', 'Est et dolor id qui. Natus porro sapiente incidunt incidunt perferendis numquam.', NULL, NULL, 16, NULL, '2000-09-03 11:05:02', '1995-12-23 21:00:49', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `subreddits`
--

DROP TABLE IF EXISTS `subreddits`;
CREATE TABLE `subreddits` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subreddit_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test', 'test@example.com', '2007-07-28 21:08:03', '$2y$10$d7zMYH5PVhwJ81ZdV08P8eu3eitvxppjAwa9MYiVUeQhLIjfI67Vq', '1978-08-18 00:00:17', '2018-11-13 22:10:19', NULL),
(2, 'sasaki.satomi', 'aota.miki@kondo.jp', '1985-01-17 19:31:47', '$2y$10$7C.uIz.rst0jaEXvI3eOJu3Ook84mYTA8qcixVgME0iwR4lSARiD6', '1987-08-12 12:33:41', '2007-05-14 03:45:56', NULL),
(3, 'akemi92', 'nagisa.naoki@kudo.info', '1989-02-03 10:56:36', '$2y$10$CJvJrpNczNz2FNJjpVGGguQkVhDTWS/.KuniHDrLaf.DkTNdydYuS', '1987-08-04 19:35:24', '2003-05-09 19:07:21', NULL),
(4, 'naoto02', 'yoshida.rei@hotmail.co.jp', '1995-11-14 00:29:13', '$2y$10$CDqP/Z/JvjLxl3h2nbJnne5j/nJ6XL9OtOcEM0xHK4W0r6E1nM5bm', '1998-12-01 02:13:33', '1978-04-13 15:01:23', NULL),
(5, 'ryosuke.kijima', 'kondo.kana@yahoo.co.jp', '1989-08-04 21:35:30', '$2y$10$sDlCwxPr/kJYDNcu8Cxiwu2OHgGe94ITZBrTptOjT6UCoO6q44pxO', '1974-07-31 21:52:12', '1974-08-27 22:15:17', NULL),
(6, 'manabu.kudo', 'uhamada@watanabe.jp', '2016-08-19 18:09:36', '$2y$10$J/LBRYp4QtxnQA2dk37dye6JqK7Z4CB3oF5YlrUfEMCRL.trxArJe', '1971-03-12 12:54:29', '1982-01-09 02:31:14', NULL),
(7, 'ksato', 'tidaka@yahoo.co.jp', '2002-06-11 22:15:35', '$2y$10$eDfI.fwNcIkNg5/wgxSyoeSSrWVGJDKu0dQhe9YwYfeU40gVSsP22', '1996-02-27 08:07:10', '2020-01-27 18:53:58', NULL),
(8, 'wkato', 'uishida@yoshimoto.jp', '1990-10-07 14:36:07', '$2y$10$luYzDO.4wWqGngY42zDXX.U9xCyFk6Esvj9T3f9YJ/FLzbee1Pwsu', '1973-03-22 13:42:44', '1981-05-08 17:40:32', NULL),
(9, 'idaka.atsushi', 'nharada@tsuda.com', '2006-06-01 05:30:58', '$2y$10$xqrRt9FYUGthGZsO6Vcqz.8QeV9QmfWG522EvgXNzK2sHaM43AENi', '2013-12-27 13:36:30', '1995-12-25 00:51:33', NULL),
(10, 'hanako16', 'mitsuru82@mail.goo.ne.jp', '2008-10-04 20:41:30', '$2y$10$gXpQjfdp5di3oER1WafiX.y.p6ICjYqoYVIvny/rzrc644O28aItu', '2016-05-10 06:04:00', '2018-08-22 00:56:20', NULL),
(11, 'ekoda.takuma', 'maaya97@mail.goo.ne.jp', '2019-10-25 20:34:22', '$2y$10$M1sBaR2eCgJFEzyjXogI6uOjhXVj5WtNBgHtEdoknB1pWOh2H0o7W', '1980-12-16 18:21:56', '2018-06-30 00:12:24', NULL),
(12, 'ksasaki', 'chiyo.yamagishi@hotmail.co.jp', '1990-01-10 03:36:32', '$2y$10$lbCWDIEXlAqmjJh65ZhgM.QydS.MmjAQeeVjTIb8tanhV6RVZMM6m', '1977-09-21 00:13:25', '2005-12-29 22:52:44', NULL),
(13, 'wishida', 'lnakajima@gmail.com', '1978-05-04 02:14:26', '$2y$10$K.Zf9rN5acNj9L1n17ySF.DV275ePB3h7geaC8PsvubWwkNWFZ6ai', '2001-02-21 16:47:39', '1984-04-25 22:33:40', NULL),
(14, 'yuki58', 'ogaki.jun@mail.goo.ne.jp', '1977-02-09 17:23:41', '$2y$10$55z2YvzqajgsquWpNpy3Wu6MBHjWBEhE09fQTWYIkJeIPHiTvkoBG', '1970-11-16 06:13:32', '1991-01-30 12:01:33', NULL),
(15, 'yamagishi.mitsuru', 'shuhei13@hotmail.co.jp', '2007-04-30 08:22:02', '$2y$10$9EilKzUyasJWCQdyip3wred.qTIY/noolz4hYpnbtvoJ8n4t0CIBu', '1970-05-13 10:44:30', '2014-10-29 06:48:09', NULL),
(16, 'kaori.kudo', 'sayuri.aoyama@idaka.jp', '1990-06-14 00:49:59', '$2y$10$/Gil2imSeXFiAwMuAg..vuh/.LMbpc1U3sushZBGaJX0Y3v5b4Tou', '2009-05-21 13:34:42', '2019-11-22 19:39:45', NULL),
(17, 'soutaro.murayama', 'manabu.sasaki@yahoo.co.jp', '1986-11-20 18:53:43', '$2y$10$dEdbSgZMqn9vq3H7HNccFulmsMaIyb3ygF9exN2XlvB/eFzVnRUXW', '1989-09-04 02:06:37', '2010-01-03 06:44:14', NULL),
(18, 'psuzuki', 'wkato@mail.goo.ne.jp', '2001-06-02 11:10:38', '$2y$10$dteRYHi1kKN/PAFp5vRBr./1E56Rqn/5//gQcr7m3xOWzEBAxPqI2', '2007-08-09 06:35:38', '1978-07-14 21:45:36', NULL),
(19, 'yumiko48', 'mitsuru45@hotmail.co.jp', '1978-12-21 05:17:46', '$2y$10$43XVtnX8m1z7QrFp86WHVesLxHIYJXcVnNKz0JwN2bWa7rK8/Zbh.', '1973-04-21 07:27:30', '1991-08-22 10:43:25', NULL),
(20, 'youichi08', 'manabu10@kijima.jp', '1989-03-04 14:11:48', '$2y$10$Riph/pU69vF9rZlBO3xj3u3fpTSKM7IG.sxTx/OBL3PLgJZXLdbGW', '1973-06-02 18:37:31', '1985-12-28 14:48:16', NULL),
(21, 'miyake.maaya', 'ksato@kato.com', '1972-11-26 03:23:34', '$2y$10$ziTu21y1X.qw3yg8eyxDuOYc7oPy//cv66XVSJDn5JNQ3RFkaWbAK', '1992-12-30 09:58:07', '1989-08-25 00:43:43', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `user_subreddit_links`
--

DROP TABLE IF EXISTS `user_subreddit_links`;
CREATE TABLE `user_subreddit_links` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subreddit` int(11) NOT NULL,
  `role` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `evaluation_logs`
--
ALTER TABLE `evaluation_logs`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `subreddits`
--
ALTER TABLE `subreddits`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `user_subreddit_links`
--
ALTER TABLE `user_subreddit_links`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルのAUTO_INCREMENT `evaluation_logs`
--
ALTER TABLE `evaluation_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルのAUTO_INCREMENT `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- テーブルのAUTO_INCREMENT `subreddits`
--
ALTER TABLE `subreddits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルのAUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- テーブルのAUTO_INCREMENT `user_subreddit_links`
--
ALTER TABLE `user_subreddit_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
