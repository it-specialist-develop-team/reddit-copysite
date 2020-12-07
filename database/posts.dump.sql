-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-11-26 06:26:53
-- サーバのバージョン： 10.4.13-MariaDB
-- PHP のバージョン: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `reddit-copysite`
--

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
(1, 5, NULL, 'Accusamus accusamus.', 'Rerum tenetur distinctio ea labore facere eaque quas. Voluptate sint quidem sit aut. Perspiciatis consequatur commodi exercitationem voluptatem. Deleniti rerum corporis unde quo natus eos.', NULL, NULL, 15, 1, '2020-11-24 02:17:34', '1977-04-19 18:24:01', NULL),
(2, 7, NULL, 'Labore quasi ut sit.', 'Voluptatem ex doloribus architecto vero ratione. Laudantium doloribus ratione ut ut. Et laborum dolor quibusdam neque molestiae fuga ut. Quas deserunt id et odio velit perspiciatis et.', NULL, 1, 19, 1, '2020-11-24 02:17:34', '1994-08-27 15:00:20', NULL),
(3, 1, NULL, 'Cumque nihil quis.', 'Omnis neque ipsum cum dolorem ullam. Sit voluptas cumque quam ab est aperiam. Eveniet fugiat officiis enim quo quis officiis. Labore quia atque ipsa quo necessitatibus numquam quia.', NULL, 1, 18, 1, '2020-11-24 02:17:34', '1983-05-04 08:21:35', NULL),
(4, 1, NULL, 'Quisquam dolorum.', 'Qui perferendis omnis laudantium non modi numquam aspernatur. Eveniet accusamus qui rerum consectetur qui. Quo velit quam debitis. Eveniet nihil aut officia facere animi quo quia.', NULL, 2, 17, 1, '2020-11-24 02:17:34', '1983-04-05 20:29:20', NULL),
(5, 7, NULL, 'Doloremque pariatur.', 'Fuga iure pariatur eos. Pariatur molestiae repellendus id commodi maxime qui. Voluptatum velit officia occaecati eaque. Est placeat rerum sit reiciendis.', NULL, NULL, 5, 1, '2020-11-24 02:17:34', '2017-12-07 19:10:31', NULL),
(6, 5, NULL, 'Corrupti iusto.', 'Dolore id laudantium necessitatibus suscipit. Modi possimus possimus adipisci cumque ut voluptatem laboriosam. Ipsum numquam aut repellat eligendi.', NULL, NULL, 12, 1, '2020-11-24 02:17:34', '2010-10-01 00:13:45', NULL),
(7, 4, NULL, 'Quisquam quisquam.', 'Est et ut sit. Veritatis magni est placeat ducimus. Voluptas ipsam id beatae consequatur provident sint. Officiis consequuntur fugiat dolorem odio harum perferendis.', NULL, NULL, 17, 1, '2020-11-24 02:17:34', '1973-11-09 18:42:17', NULL),
(8, 5, NULL, 'Aut accusamus fuga.', 'Eius nam ipsum porro aliquam nam et nemo. Ut ipsa vero enim et non sunt voluptas. Dicta sed qui ab natus porro maxime. Facere temporibus facere numquam et sint quia.', NULL, NULL, 19, 1, '2020-11-24 02:17:34', '2014-09-13 03:16:03', NULL),
(9, 6, NULL, 'Et non et eaque.', 'Eum voluptate quaerat sint et fugiat beatae. Distinctio cumque odit omnis est debitis id inventore. Aut optio alias aut quidem.', NULL, NULL, 3, 1, '2020-11-24 02:17:34', '1996-12-12 18:23:38', NULL),
(10, 1, NULL, 'Et sed debitis hic.', 'Explicabo a molestias accusamus debitis dicta consequatur. Cumque eos qui at neque. Ut necessitatibus quo voluptas consequatur tempore eveniet. Nobis totam voluptatum et.', NULL, NULL, 14, 1, '2020-11-24 02:17:34', '1989-09-26 02:05:25', NULL),
(11, 3, NULL, 'Earum est dolorem.', 'Perspiciatis officia aut omnis molestias quasi facere pariatur harum. Et nulla et accusamus quia cumque praesentium. Provident minus minima nemo illum. Quia at accusamus doloremque et ducimus omnis.', NULL, NULL, 18, 1, '2020-11-24 02:17:34', '2009-02-18 17:30:40', NULL),
(12, 7, NULL, 'Assumenda ut totam.', 'Nostrum laudantium qui tempora rem eos qui possimus. Mollitia aut inventore numquam. Esse temporibus eaque enim qui dolorem accusamus. Fuga repudiandae adipisci cumque in temporibus quo rem.', NULL, NULL, 8, 1, '2020-11-24 02:17:34', '1979-12-30 03:36:58', NULL),
(13, 3, NULL, 'Harum dolorem.', 'Modi iste corrupti omnis ipsam blanditiis excepturi. Ipsam et accusamus earum qui mollitia. Veniam accusantium quia itaque earum enim laboriosam. Perferendis ad illo quos necessitatibus sint.', NULL, NULL, 16, 1, '2020-11-24 02:17:34', '1983-12-02 08:27:03', NULL),
(14, 4, NULL, 'Neque quisquam sunt.', 'Officiis quas iste omnis maiores accusamus sit. Odit rerum et esse. Officiis excepturi at quos ipsum soluta enim quibusdam minima. Alias explicabo quisquam quia quia voluptatibus voluptas.', NULL, NULL, 15, 1, '2020-11-24 02:17:34', '1989-11-15 15:24:24', NULL),
(15, 3, NULL, 'Quaerat ad ipsa.', 'Officia qui autem natus illo et voluptatem. Facilis iusto dolorem nostrum nam aspernatur consequatur quisquam. Quam voluptas porro eveniet nihil ut fugiat.', NULL, NULL, 19, 1, '2020-11-24 02:17:34', '1980-10-28 13:17:52', NULL),
(16, 6, NULL, 'Praesentium.', 'Fuga voluptatibus voluptatem magni occaecati culpa veritatis. Voluptatem nihil corporis quis.', NULL, NULL, 4, 1, '2020-11-24 02:17:34', '1986-05-24 00:27:35', NULL),
(17, 3, NULL, 'Neque temporibus.', 'Nostrum aut quia omnis. Explicabo recusandae eveniet dolor veritatis. Eveniet nobis minus corrupti debitis nam blanditiis a id. Molestiae id natus hic. Fuga nihil et consectetur praesentium quod.', NULL, NULL, 7, 1, '2020-11-24 02:17:34', '1980-06-25 22:21:12', NULL),
(18, 5, NULL, 'Ipsa dolores.', 'Inventore et qui ut minus delectus inventore. Ducimus rerum sit numquam quo. Sit excepturi odio in eos laborum et ut. Est porro magni voluptatem sint. Et harum numquam vel voluptas dolores magni.', NULL, NULL, 17, 1, '2020-11-24 02:17:34', '2001-11-18 09:24:42', NULL),
(19, 3, NULL, 'Possimus et error.', 'Doloribus non ut minus quos. Iure facilis sapiente inventore eveniet unde eos. Fugit qui aliquid dolorem ipsam molestiae nihil ut. Et architecto voluptas inventore voluptas corrupti soluta.', NULL, NULL, 18, 1, '2020-11-24 02:17:34', '2017-01-24 06:55:18', NULL),
(20, 4, NULL, 'Qui qui adipisci.', 'Porro sequi quia id. Repellat atque at cumque in architecto quibusdam qui. Sed tempore deleniti officiis recusandae iure tempore.', NULL, NULL, 17, 1, '2020-11-24 02:17:34', '2010-07-13 05:21:53', NULL),
(21, 1, NULL, 'Commodi voluptas.', 'Fugit earum exercitationem sequi et magni reiciendis velit. Quisquam qui explicabo quaerat cum. Facilis in nostrum voluptatem ipsa. Expedita aut commodi sunt possimus.', NULL, NULL, 20, 1, '2020-11-24 02:17:34', '2013-03-22 16:51:06', NULL),
(22, 6, NULL, 'Provident.', 'Velit dolorem sunt esse. Autem nesciunt ratione provident laboriosam veniam. Natus magni provident et delectus quia. Quidem ipsum iusto est. Id veritatis nostrum enim distinctio placeat.', NULL, NULL, 3, 1, '2020-11-24 02:17:34', '1997-04-23 09:20:53', NULL),
(23, 2, NULL, 'Aut nesciunt omnis.', 'Ex officiis et aut ratione nesciunt quia. Vero cum ipsam repellat itaque debitis doloremque nam. Cumque voluptatem qui tenetur explicabo fuga rem est.', NULL, NULL, 9, 1, '2020-11-24 02:17:34', '1991-06-23 08:44:20', NULL),
(24, 1, NULL, 'Non voluptas.', 'Recusandae iusto suscipit a voluptatum. Sunt at vel voluptate praesentium sit ipsum. Excepturi optio voluptate voluptatibus dolore qui. Vitae labore officiis architecto aut autem perspiciatis.', NULL, NULL, 14, 1, '2020-11-24 02:17:34', '2010-05-20 05:15:54', NULL),
(25, 5, NULL, 'Soluta a inventore.', 'Quia neque cum impedit optio et illo. Quaerat non maiores et beatae numquam.', NULL, NULL, 19, 1, '2020-11-24 02:17:34', '1970-07-03 11:37:22', NULL),
(26, 1, NULL, 'Optio sit est rerum.', 'Vel corrupti reprehenderit non ullam aliquid non ipsam. Aspernatur dolorem facere quos odit qui. Itaque est delectus optio aspernatur dolor quos et. Inventore commodi qui voluptates hic.', NULL, NULL, 1, 1, '2020-11-24 02:17:34', '1981-01-26 12:31:30', NULL),
(27, 2, NULL, 'Sed porro.', 'Voluptatem enim illo hic quia culpa omnis ducimus. Doloribus qui quidem numquam non qui. Consectetur omnis velit vel dolorum sunt nesciunt id dolorem.', NULL, NULL, 16, 1, '2020-11-24 02:17:34', '2015-04-18 10:00:46', NULL),
(28, 6, NULL, 'Ex totam est.', 'Deleniti aut amet unde in qui sit harum. Voluptatem facilis laboriosam voluptatem et incidunt quae. Eius voluptatem autem aut ullam esse occaecati.', NULL, NULL, 10, 1, '2020-11-24 02:17:34', '2009-07-15 08:31:49', NULL),
(29, 6, NULL, 'Dicta et eius esse.', 'Fugiat qui incidunt deserunt minima ut vero. Eum placeat non rem. Expedita aperiam autem omnis rerum.', NULL, NULL, 12, 1, '2020-11-24 02:17:34', '2015-03-21 06:40:34', NULL),
(30, 1, NULL, 'Qui voluptas.', 'Impedit nihil et omnis quam ut iusto dolor. Expedita consequatur similique et sed saepe est. Esse illo enim quas qui accusamus non laborum.', NULL, NULL, 10, 1, '2020-11-24 02:17:34', '1979-03-17 06:50:18', NULL),
(31, 3, NULL, 'Voluptas in non qui.', 'Incidunt consequatur quod nulla alias. Laborum maiores vel sed iste ex.', NULL, NULL, 17, 1, '2020-11-24 02:17:34', '2002-02-19 20:49:39', NULL),
(32, 7, NULL, 'Voluptate facilis.', 'Odio aspernatur unde impedit quidem. Incidunt quae non in at adipisci harum. Minus et ea sit aut libero voluptatem.', NULL, NULL, 9, 1, '2020-11-24 02:17:34', '2002-01-28 11:20:07', NULL),
(33, 7, NULL, 'Reprehenderit.', 'Autem iure modi rem ducimus voluptates iste modi. Nihil qui velit eos totam quidem quia exercitationem vitae. Laboriosam maxime aliquam adipisci laboriosam beatae. Voluptas fugiat est ducimus.', NULL, NULL, 2, 1, '2020-11-24 02:17:34', '2000-09-13 13:17:35', NULL),
(34, 7, NULL, 'Similique provident.', 'Commodi voluptatem numquam est non voluptas ut sit sapiente. Sint molestiae quos et. Modi sunt velit voluptas qui.', NULL, NULL, 9, 1, '2020-11-24 02:17:34', '2004-01-14 05:16:57', NULL),
(35, 1, NULL, 'Quisquam ut.', 'Et aperiam consequuntur enim officia eum fugiat qui. Excepturi voluptatem consequatur recusandae nihil at minus. Qui hic totam non quia. Enim rerum labore eaque ea amet.', NULL, NULL, 13, 1, '2020-11-24 02:17:34', '1984-06-23 01:31:59', NULL),
(36, 6, NULL, 'A rerum quia quis.', 'Ut aut aut quos quam aut dolor inventore. Vero distinctio velit harum impedit eos veniam. Cum cumque non saepe recusandae exercitationem autem facere. Rerum dicta officia numquam et ut rerum.', NULL, NULL, 20, 1, '2020-11-24 02:17:34', '2003-06-18 17:39:06', NULL),
(37, 7, NULL, 'Quia quidem est.', 'Dolorem veritatis cumque quia similique repudiandae nobis autem. Tempora aspernatur id non id exercitationem. Laborum aut amet fugit cumque sed in.', NULL, NULL, 20, 1, '2020-11-24 02:17:34', '2009-01-13 13:19:04', NULL),
(38, 6, NULL, 'Officia qui quo.', 'Et atque earum eos consequatur natus repellat nemo. Dolorem quia sed quia corrupti porro fuga. Dolor accusantium aut non ipsum id. Dolores autem quia distinctio reprehenderit ut.', NULL, NULL, 10, 1, '2020-11-24 02:17:34', '2002-05-27 17:14:02', NULL),
(39, 1, NULL, 'Ducimus facere.', 'Ex voluptatem dolorum in qui. In sapiente ullam quibusdam officia molestias sint. Rerum sequi sequi vel esse voluptate atque repellat. Dolorem qui quo assumenda aspernatur rerum libero.', NULL, NULL, 2, 1, '2020-11-24 02:17:34', '1983-06-19 17:36:06', NULL),
(40, 3, NULL, 'At amet modi.', 'Est et dolor id qui. Natus porro sapiente incidunt incidunt perferendis numquam.', NULL, NULL, 16, 1, '2020-11-24 02:17:34', '1995-12-23 21:00:49', NULL);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
