-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2017 a las 19:24:03
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `4geekproyect`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuadros`
--

CREATE TABLE `cuadros` (
  `id` int(10) UNSIGNED NOT NULL,
  `contenido` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` longtext COLLATE utf8_unicode_ci NOT NULL,
  `boton_texto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cuadros`
--

INSERT INTO `cuadros` (`id`, `contenido`, `title`, `imagen`, `boton_texto`, `url`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'asasas', ' aaaaaaaa aaaaaaaa aaaaaaaa aaaaaaaa aaaaaaaa aaaaaaaa aaaaaaaa', '/imagenes_cargadas/0001b83df3b5f78505e33acbf2ad8d80.png', 'XD', 'http://4geekproyect/admin/testimonios/create', '2017-09-14 13:05:01', NULL, '2017-09-14 13:05:01'),
(2, 'asasas', ' aaaaaaaa aaaaaaaa aaaaaaaa aaaaaaaa aaaaaaaa aaaaaaaa aaaaaaaa', '/imagenes_cargadas/0001b83df3b5f78505e33acbf2ad8d80.png', 'XD', 'http://4geekproyect/admin/testimonios/create', '2017-09-14 13:05:01', NULL, '2017-09-14 13:05:01'),
(3, 'asasas', ' aaaaaaaa aaaaaaaa aaaaaaaa aaaaaaaa aaaaaaaa aaaaaaaa aaaaaaaa', '/imagenes_cargadas/0001b83df3b5f78505e33acbf2ad8d80.png', 'XD', 'http://4geekproyect/admin/testimonios/create', '2017-09-14 13:05:01', NULL, '2017-09-14 13:05:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_14_033409_CreateTableCuadros', 1),
(4, '2017_09_14_072514_CreateProyectTable', 1),
(5, '2017_09_14_072729_CreateTestimonioTabla', 1),
(6, '2017_09_14_072754_CreateServicioTabla', 1),
(7, '2017_09_14_072807_CreatePersonalTabla', 1),
(8, '2017_09_14_145727_CreateTextosTable', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(10) UNSIGNED NOT NULL,
  `contenido` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` longtext COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `github` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `contenido`, `nombre`, `cargo`, `imagen`, `twitter`, `facebook`, `github`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'sasasasasa as as as a as rewr325 45 45 ', 'xDasa', 'asasasa', '/imagenes_cargadas/30d8de25cc4e6a0e8b2bca33928557a3.png', 'asasas', 'asasa', 'asasa', '2017-09-14 13:47:36', NULL, '2017-09-14 13:50:44'),
(2, 'sasasasasa as as as a as rewr325 45 45 ', 'xDasa', 'asasasa', '/imagenes_cargadas/30d8de25cc4e6a0e8b2bca33928557a3.png', 'asasas', 'asasa', 'asasa', '2017-09-14 13:47:36', NULL, '2017-09-14 13:50:44'),
(3, 'sasasasasa as as as a as rewr325 45 45 ', 'xDasa', 'asasasa', '/imagenes_cargadas/30d8de25cc4e6a0e8b2bca33928557a3.png', 'asasas', 'asasa', 'asasa', '2017-09-14 13:47:36', NULL, '2017-09-14 13:50:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyect`
--

CREATE TABLE `proyect` (
  `id` int(10) UNSIGNED NOT NULL,
  `contenido` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proyect`
--

INSERT INTO `proyect` (`id`, `contenido`, `title`, `imagen`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'XDDD esto es un proyecto chido <3', 'Raffa1', '/imagenes_cargadas/0001b83df3b5f78505e33acbf2ad8d80.png', '2017-09-14 11:45:26', '2017-09-14 11:46:32', '2017-09-14 11:46:32'),
(2, 'asasa', 'ass', '/imagenes_cargadas/30d8de25cc4e6a0e8b2bca33928557a3.png', '2017-09-14 11:46:39', NULL, '2017-09-14 11:46:39'),
(3, 'asass', 'asasas', '/imagenes_cargadas/9eb4880ef9b528e6725db70c46e695ee.png', '2017-09-14 11:46:46', NULL, '2017-09-14 11:46:46'),
(4, '2222', '12', '/imagenes_cargadas/0001b83df3b5f78505e33acbf2ad8d80.png', '2017-09-14 11:46:54', NULL, '2017-09-14 11:46:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int(10) UNSIGNED NOT NULL,
  `contenido` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `contenido`, `title`, `imagen`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, '<3', 'xD', '/imagenes_cargadas/0001b83df3b5f78505e33acbf2ad8d80.png', '2017-09-14 13:25:52', NULL, '2017-09-14 13:26:04'),
(2, '12312323 dasd asd asd as dasd asd asd asd asd ', '111', '/imagenes_cargadas/30d8de25cc4e6a0e8b2bca33928557a3.png', '2017-09-14 13:26:18', NULL, '2017-09-14 13:26:18'),
(3, '123123123123', 'asa', '/imagenes_cargadas/9eb4880ef9b528e6725db70c46e695ee.png', '2017-09-14 13:26:27', NULL, '2017-09-14 13:26:27'),
(4, 'ewqeeqwe qwe qwqwe qwe qwe qwe qwew qwe qwe qwe qw ', 'qweqwe', '/imagenes_cargadas/0001b83df3b5f78505e33acbf2ad8d80.png', '2017-09-14 13:26:38', NULL, '2017-09-14 13:26:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonio`
--

CREATE TABLE `testimonio` (
  `id` int(10) UNSIGNED NOT NULL,
  `contenido` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `empresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `testimonio`
--

INSERT INTO `testimonio` (`id`, `contenido`, `nombre`, `empresa`, `url`, `cargo`, `imagen`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'Esto es lo maximo broooo', 'Raffaele Ranaldo', 'RRANALDo', '', 'Jefe', '/imagenes_cargadas/0001b83df3b5f78505e33acbf2ad8d80.png', '2017-09-14 12:25:14', '2017-09-14 12:26:09', '2017-09-14 12:26:09'),
(2, 'qw32323333333', 'xd333333333', 'asas33333333', '', 'asas333333333333', '/imagenes_cargadas/30d8de25cc4e6a0e8b2bca33928557a3.png', '2017-09-14 12:26:18', '2017-09-14 12:33:42', '2017-09-14 12:33:42'),
(3, 'd31414', 'xxxxxxxxx', '1233213', '', 'asdasdas', '/imagenes_cargadas/ae1732b55a49646d05245b360f702284.png', '2017-09-14 12:33:56', '2017-09-14 12:52:33', '2017-09-14 12:52:33'),
(4, 'asdasdasd', 'faas', 'sdasd', '', 'asdasdasd', '/imagenes_cargadas/0001b83df3b5f78505e33acbf2ad8d80.png', '2017-09-14 12:34:17', NULL, '2017-09-14 12:34:17'),
(5, 'asasas', '23123', '23312', '', 'asasas', '/imagenes_cargadas/30d8de25cc4e6a0e8b2bca33928557a3.png', '2017-09-14 12:34:30', NULL, '2017-09-14 12:34:30'),
(6, 'asas', 'asas', 'asasa', 'http://4geekproyect/admin/testimonios/create', 'asa', '/imagenes_cargadas/ae1732b55a49646d05245b360f702284.png', '2017-09-14 12:56:42', '2017-09-14 12:56:47', '2017-09-14 12:56:47'),
(7, 'xD', 'Chavez Vive', 'XD', 'http://google.com', 'xD', '/imagenes_cargadas/2f552508539c59cfa7fc4518d429636b.jpeg', '2017-09-14 21:20:36', NULL, '2017-09-14 21:20:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `texto`
--

CREATE TABLE `texto` (
  `id` int(10) UNSIGNED NOT NULL,
  `contexto` text COLLATE utf8_unicode_ci NOT NULL,
  `contenido` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `texto`
--

INSERT INTO `texto` (`id`, `contexto`, `contenido`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'TituloPrincipal', 'Do something you love.', NULL, NULL, NULL),
(2, 'SubTituloPrincipal', 'Another free HTML5 bootstrap template by FREEHTML5.co released under Creative Commons 3.0', NULL, NULL, NULL),
(3, 'SubtituloWork', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', NULL, NULL, NULL),
(4, 'SubtituloTestimonial', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', NULL, NULL, NULL),
(5, 'SubtituloServices', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', NULL, NULL, NULL),
(6, 'SubtituloAbout', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', NULL, NULL, NULL),
(7, 'arreglo cifras funFacts', '89,2343419,1312,52', NULL, NULL, '2017-09-14 21:07:11'),
(8, 'Subtitulo GetInTouch.', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.22222', NULL, NULL, '2017-09-14 21:06:46'),
(9, 'Direccion contacto', 'Elate Free HTML5. All Rights Reserved. 1111', NULL, NULL, '2017-09-14 21:06:46'),
(10, 'Telefono contacto', '(123) 465-67893333333333', NULL, NULL, '2017-09-14 21:06:46'),
(11, 'correo contacto', 'info@freehtml5.co', NULL, NULL, NULL),
(12, 'pagina url contacto.', 'freehtml5.co', NULL, NULL, NULL),
(13, 'Mensaje Footer', 'Elate Free HTML5. All Rights Reserved. ', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'administrador', 'ranaldoraffaele@gmail.com', '$2y$10$gF9LRz.wOuqOp8IaTfwKAeYBach2VeB.Qvt4O0.MvQLsLabmeRqe.', 'ptIb5wNoc15XtEZveQTwSYamD4L04iYK3V6HEo4uG1B2qFnrUrxnr91qk7Pw', NULL, '2017-09-14 11:37:48');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuadros`
--
ALTER TABLE `cuadros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyect`
--
ALTER TABLE `proyect`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `testimonio`
--
ALTER TABLE `testimonio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `texto`
--
ALTER TABLE `texto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuadros`
--
ALTER TABLE `cuadros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `proyect`
--
ALTER TABLE `proyect`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `testimonio`
--
ALTER TABLE `testimonio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `texto`
--
ALTER TABLE `texto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
