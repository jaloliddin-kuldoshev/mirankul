-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `advans`;
CREATE TABLE `advans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des1` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon1` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des2` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon2` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title3` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des3` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon3` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `advans` (`id`, `text`, `title`, `des`, `icon`, `title1`, `des1`, `icon1`, `title2`, `des2`, `icon2`, `title3`, `des3`, `icon3`, `created_at`, `updated_at`) VALUES
(1,	'<p>По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст.</p>',	'Лидер на рынке  отрасли',	'По своей сути рыбатекст является альтернативой традиционному lorem ipsum',	'/site/photo/advans/JaegM5aCTtWfMeFBpXwdFfymUkhCLhE7W6sT7kki.png',	'Отлаженый механизм производства',	'По своей сути рыбатекст является альтернативой традиционному lorem ipsum',	'/site/photo/advans/Q9zjs2dinRNYio048leI2fQjs7ycxZms7GtYKw3q.png',	'Мировое качество продукции',	'По своей сути рыбатекст является альтернативой традиционному lorem ipsum',	'/site/photo/advans/uKXsbOJUFMRhF8tagd59uO4y05szB4EgQryBixc2.png',	'Долгосрочные отношения с клиентами',	'По своей сути рыбатекст является альтернативой традиционному lorem ipsum',	'/site/photo/advans/Gf9eSVYuyG6iSBYxdzJFqJO6c0GUcnem92NMjqIX.png',	NULL,	'2018-05-20 07:33:19');

DROP TABLE IF EXISTS `alboums`;
CREATE TABLE `alboums` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) DEFAULT NULL,
  `works_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `alboums` (`id`, `title`, `img`, `count`, `works_id`, `created_at`, `updated_at`) VALUES
(2,	'Миранкул быстровозводимые конструкции 2018',	'/site/photo/alboums/QX7nZCGDclyFEQszecteOy58lO6JbezjQPTZO9le.png',	NULL,	20,	'2018-05-15 07:21:39',	'2018-05-21 06:49:15');

DROP TABLE IF EXISTS `benefits`;
CREATE TABLE `benefits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `works_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `benefits` (`id`, `title`, `img`, `text`, `works_id`, `created_at`, `updated_at`) VALUES
(1,	'qwert',	'/site/photo/benefits/hF398XSXUorN1vMtN1Uv6Iv6wATSJqBYkSVF3xGE.png',	'qweqwr',	20,	NULL,	'2018-05-21 07:53:17');

DROP TABLE IF EXISTS `catalogs`;
CREATE TABLE `catalogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `works_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `catalogs` (`id`, `title`, `works_id`, `created_at`, `updated_at`) VALUES
(2,	'Соединители для лотков',	20,	'2018-05-15 04:25:54',	'2018-05-21 18:55:01');

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telegram` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `face` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `contacts` (`id`, `text`, `img`, `telegram`, `file`, `face`, `created_at`, `updated_at`) VALUES
(1,	'<p>Равным образом начало повседневной работы по формированию позиции способствует подготовки и реализации направлений прогрессивного развития. Разнообразный и богатый опыт реализация намеченных плановых заданий представляет собой интересный эксперимент проверки форм развития. Повседневная практика показывает, что постоянное информационно-пропагандистское обеспечение нашей деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений. Повседневная практика показывает, что реализация намеченных плановых заданий позволяет оценить значение новых предложений.</p>',	'/site/photo/contacts/w15InxnnuFeaizvXrGs04DhA07jPQY0rIwaDDpcr.png',	'33',	'/site/photo/contacts/S2 T5 ADO.NET MVC Cont.docx',	'55',	NULL,	'2018-05-20 20:49:43');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2018_05_11_090325_create_offices_table',	2),
(4,	'2018_05_11_090523_create_vacancies_table',	2),
(5,	'2018_05_11_090630_create_partners_table',	2),
(6,	'2018_05_11_122114_create_benefits_table',	2),
(7,	'2018_05_11_122228_create_sliders_table',	2),
(8,	'2018_05_11_122719_create_texts_table',	2),
(9,	'2018_05_12_071111_create_works_table',	2),
(10,	'2018_05_12_071219_create_catalogs_table',	2),
(11,	'2018_05_12_071306_create_products_table',	2),
(12,	'2018_05_12_092924_create_alboums_table',	2),
(13,	'2018_05_12_102534_create_advans_table',	2),
(14,	'2018_05_12_103616_create_photos_table',	2),
(15,	'2018_05_14_052040_create_contacts_table',	2),
(16,	'2018_05_14_070606_create_properties_table',	2),
(17,	'2018_05_14_071205_create_videos_table',	2);

DROP TABLE IF EXISTS `offices`;
CREATE TABLE `offices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mob` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `offices` (`id`, `title`, `ad`, `pos`, `person`, `mob`, `tel`, `email`, `map`, `created_at`, `updated_at`) VALUES
(2,	'ОФИС В ТАШКЕНТЕ',	'10080, Узбекистан, г. Ташкент, ул. Азимова, 68',	'Менеджер по развитию бизнеса',	'Темур Абдуллаев',	'+99897 929 6999',	'+99871 120 3287 доб: 3110',	'admin@gmail.com',	'temur@mironkul.uz',	'2018-05-16 04:49:33',	'2018-05-20 20:51:19');

DROP TABLE IF EXISTS `partners`;
CREATE TABLE `partners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `partners` (`id`, `img`, `created_at`, `updated_at`) VALUES
(1,	'/site/photo/partners/QPuvrMhuhH6YTYbx4lgVcgcYd6UkU2st2XSJMRHD.png',	NULL,	'2018-05-21 20:55:42');

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alboums_id` int(11) DEFAULT NULL,
  `works_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `photos` (`id`, `img`, `alboums_id`, `works_id`, `created_at`, `updated_at`) VALUES
(54,	'/site/photo/photos/zLdZ4jQOyeKTkdUVqKVmPndmoYmOw8P42iAs1jSH.png',	2,	20,	'2018-05-18 02:11:18',	'2018-05-21 20:48:35'),
(55,	'/site/photo/photos/ZOLUBOLr7ANR3LpfcgXkOvOWyDy91FSJJ8lJGJ7p.png',	NULL,	NULL,	'2018-05-21 05:28:52',	'2018-05-21 20:41:21'),
(56,	'/site/photo/photos/photos-1526903111.mirl1bac.png',	2,	20,	'2018-05-21 06:45:11',	'2018-05-21 20:42:06'),
(57,	'/site/photo/photos/photos-1526903133.mirl3bac.png',	2,	20,	'2018-05-21 06:45:33',	'2018-05-21 06:45:33'),
(58,	'/site/photo/photos/photos-1526903167.ctbigtopimg.png',	2,	20,	'2018-05-21 06:46:07',	'2018-05-21 20:42:36');

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `works_id` int(11) unsigned NOT NULL,
  `catalogs_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `catalogs_id` (`catalogs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `title`, `img`, `price`, `text`, `text1`, `works_id`, `catalogs_id`, `created_at`, `updated_at`) VALUES
(1,	'Кронштейн настенный',	'[\"\\/site\\/photo\\/products\\/products-1526946320.ctinst.png\",\"\\/site\\/photo\\/products\\/products-1526953964.ctinst1.png\",\"\\/site\\/photo\\/products\\/products-1526953964.ctinst2.png\",\"\\/site\\/photo\\/products\\/products-1526953964.ctinst.png\"]',	'300',	'<p>sadsad</p>',	'<p>dsadsad</p>',	20,	2,	'2018-05-21 01:07:25',	'2018-05-21 20:52:44'),
(2,	'Кранштейн ',	'[\"\\/site\\/photo\\/products\\/products-1526988264.ctinst.png\",\"\\/site\\/photo\\/products\\/products-1526988264.ctinst1.png\",\"\\/site\\/photo\\/products\\/products-1526988264.ctinst2.png\"]',	'2222',	'<p>2222</p>',	'<p>2222</p>',	20,	2,	'2018-05-22 06:24:24',	'2018-05-22 06:24:24');

DROP TABLE IF EXISTS `properties`;
CREATE TABLE `properties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `properties` (`id`, `title`, `value`, `products_id`, `created_at`, `updated_at`) VALUES
(30,	'123',	'123',	18,	'2018-05-19 05:14:25',	'2018-05-19 05:14:25'),
(31,	'34534',	'345345',	18,	'2018-05-19 05:14:25',	'2018-05-19 05:14:25'),
(32,	'3445',	'345',	18,	'2018-05-19 05:14:25',	'2018-05-19 05:14:25'),
(33,	'adw',	'ads',	19,	'2018-05-19 05:18:37',	'2018-05-19 05:18:37'),
(34,	'asd',	'asd',	19,	'2018-05-19 05:18:37',	'2018-05-19 05:18:37'),
(35,	'awdawd',	'awdawd',	1,	'2018-05-21 01:07:25',	'2018-05-21 01:07:25'),
(36,	'qweqwe',	'qweqwe',	1,	'2018-05-21 01:07:25',	'2018-05-21 01:07:25'),
(37,	'Кранштейн настенный',	'Кранштейн настенный',	2,	'2018-05-22 06:24:25',	'2018-05-22 06:24:25'),
(38,	'Кранштейн настенный',	'Кранштейн настенный',	2,	'2018-05-22 06:24:25',	'2018-05-22 06:24:25');

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motto` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sliders` (`id`, `title`, `motto`, `des`, `icon`, `img`, `created_at`, `updated_at`) VALUES
(1,	'1234',	'Надежные дома для  спокойной жизни',	'1234',	'/site/photo/sliders/B8U6q2419RIkdnvcTajEPFQPteVAESMdeTjRq0PK.png',	'/site/photo/sliders/07Vr6Hm70IbIrO9853PDbkYQn1WwCA5zF8o5gx5J.png',	'2018-05-20 18:18:53',	'2018-05-22 02:15:02'),
(2,	'СТРОИТЕЛЬНЫЕ УСЛУГИ',	'Надежные дома для  спокойной жизни',	'По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который  вызывает у некторых людей недоумение при попытках прочитать рыбу текст.',	'/site/photo/sliders/gWOBZZwGp2vm1Hl1uSPEEe94RGQcwVKImBis18pr.png',	'/site/photo/sliders/RHWbqLmSROW4ZgoReNcPM5B2rwTWebUFexwGBmzw.png',	'2018-05-20 19:20:11',	'2018-05-20 19:24:51');

DROP TABLE IF EXISTS `texts`;
CREATE TABLE `texts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text1` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `texts` (`id`, `img`, `text`, `text1`, `created_at`, `updated_at`) VALUES
(1,	'/site/photo/cart/KVAIxZrM0crdpOq661jVY6K9Vo6hQ0TZ3ZpmqRXS.png',	'<p>По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст.</p>',	NULL,	NULL,	'2018-05-23 00:02:31'),
(2,	'/site/photo/vacancy/KwYdrmDreYvMl1m8xFbQGDTU7SHwYo8dxbRaXuq5.png',	'<p>Равным образом начало повседневной работы по формированию позиции способствует подготовки и реализации направлений прогрессивного развития. Разнообразный и богатый опыт реализация намеченных плановых заданий представляет собой интересный эксперимент проверки форм развития. Повседневная практика показывает, что постоянное информационно-пропагандистское обеспечение нашей деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений. Повседневная практика показывает, что реализация намеченных плановых заданий позволяет оценить значение новых предложений.</p>',	'<h5>Не нашли подходящую Вам вакансию?</h5>\r\n\r\n<p>Отправьте нам свое резюме на русском языке с фото и указанием вакансии в электронном виде по адресу <a href=\"http://Hr@mirankul.uz\">Hr@mirankul.uz</a>.</p>\r\n\r\n<p>В теме письма необходимо указать фамилию, имя и желаемую позицию. Ваше резюме размещается базе резюме компании, и когда появится необходимость в</p>\r\n\r\n<p>вашей кандидатуре, мы обязательно свяжемся с Вами.</p>',	NULL,	'2018-05-20 21:14:41'),
(3,	'/site/photo/vacancy/T03wVQTnAkgVwH4pxF4GeUuFLRzTJn9GcXWGPWg4.png',	'<p>qazwsxedc</p>',	NULL,	NULL,	'2018-05-21 01:26:03');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'admin',	'admin@gmail.com',	'$2y$10$L3KNjfvNbeOEZPABacqTWepHhLFL5bcge/jzachIEWogPKa1Wofoq',	'xMiJmPbmp5hvarxMlVgEYN04zYmV0hUVzouosVbbONwZ1rpgkxo1NMlKGqet',	'2018-04-30 02:28:21',	'2018-04-30 02:28:21');

DROP TABLE IF EXISTS `vacancies`;
CREATE TABLE `vacancies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `works_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `videos` (`id`, `path`, `status`, `works_id`, `created_at`, `updated_at`) VALUES
(20,	'/site/photo/video/20567596_112990962693052_7334036908554584064_n.mp4',	NULL,	NULL,	'2018-05-17 06:22:35',	'2018-05-21 01:40:24'),
(21,	'/site/photo/media/vidiodold.mp4',	NULL,	20,	'2018-05-21 07:42:04',	'2018-05-21 07:42:04');

DROP TABLE IF EXISTS `works`;
CREATE TABLE `works` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motto` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_main` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sym` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tit` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mob` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ex` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `works` (`id`, `title`, `motto`, `des`, `icon`, `img`, `img_main`, `sym`, `text`, `tit`, `pos`, `contact`, `mob`, `tel`, `ex`, `email`, `file`, `size`, `status`, `created_at`, `updated_at`) VALUES
(20,	'Mirankul Сендвич панели',	'Надежные лотки для вашего спокойной жизни.',	'По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст.',	'/site/photo/works/1OaGQm2boooQNEYvSm1DwYko7Oyl8oa6FsP0OqdV.png',	'/site/photo/works/DUVvj8F22RMd6wWiKXk3LaTtHMiVlgqjzalhJBHr.png',	'/site/photo/works/aLttaht8DxjIlDabAXBENFlJFFzArPvkAgS1A7Sq.png',	'/site/photo/works/yQOsNdInQ32QI1ZraAUWzBS6xBq2xEaJAEYWehfd.png',	'<p>Товарищи! начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке новых предложений. Повседневная практика показывает, что начало повседневной работы по позиции представляет собой интересный эксперимент проверки форм развития.</p>',	'MIRONKUL CABLE TRAYS',	'Менеджер по развитию бизнеса',	'Темур Абдуллаев',	'+99897 929 6999',	'+99871 120 3287 доб: 3110',	'tg.me',	'admin@gmail.com',	'/site/photo/works/S2 T5 ADO.NET MVC Cont.docx',	2,	1,	'2018-05-15 04:06:52',	'2018-05-23 06:26:58'),
(21,	'Лотки',	'По своей сути рыбатекст является альтернативой традиционному lorem ipsum.',	'По своей сути рыбатекст является альтернативой традиционному lorem ipsum.',	'/site/photo/works/oSyhWbqXa5Q1VlPHjdAM2C7Bf03hQvfAYDdCgejl.png',	'/site/photo/works/1uGoF1bjkwdJ9ZV9VYulIMaTtc5BQSVvEQ9a3ycH.png',	'/site/photo/works/UvDwCZXZGh2wOOKNkMhYDL1PM16usOsBihNWZ0Cm.png',	'/site/photo/works/txBUbt1EROKznVdbczHPtj2bp2vImj20y6cWWTcV.png',	'<p>12</p>',	'12',	'12',	'12',	'12',	'12',	'12',	'admin@gmail.com',	'/site/photo/works/Tutorial 5. SQL DDL.docx',	1,	1,	'2018-05-23 06:44:57',	'2018-05-23 06:44:57');

-- 2018-05-24 13:26:45
