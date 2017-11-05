-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-11-2017 a las 14:50:28
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inteligencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambits`
--

CREATE TABLE `ambits` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_ambit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_evento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_16_172439_add_sipocs_table', 1),
(4, '2017_10_16_172538_add_thematics_table', 1),
(5, '2017_10_16_172654_add_ambits_table', 1),
(6, '2017_10_16_172820_add_sectors_table', 1),
(7, '2017_10_19_163720_create_vsectors_table', 2),
(8, '2017_10_23_205153_create_pajustadas_table', 3),
(9, '2017_10_31_155042_create_provincias_table', 4),
(10, '2017_10_31_173809_create_eventos_table', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pajustadas`
--

CREATE TABLE `pajustadas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_pajustada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pajustadas`
--

INSERT INTO `pajustadas` (`id`, `nombre_pajustada`, `created_at`, `updated_at`) VALUES
(1, 'Adecuar el marco de contratación laboral a la realidad productiva', '2017-10-24 02:12:28', '2017-10-24 02:19:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_provincia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `nombre_provincia`, `created_at`, `updated_at`) VALUES
(1, 'Azuay', '2017-10-31 22:06:11', '2017-10-31 22:14:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectors`
--

CREATE TABLE `sectors` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_sector` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sectors`
--

INSERT INTO `sectors` (`id`, `nombre_sector`, `created_at`, `updated_at`) VALUES
(1, 'Adecuar el marco de contratación laboral a la realidad productivA', '2017-10-19 19:56:36', '2017-10-24 02:17:31'),
(2, 'Arroz', '2017-10-19 20:22:10', '2017-10-19 20:22:10'),
(3, 'Automotriz Motos', '2017-10-19 20:22:30', '2017-10-19 20:22:30'),
(4, 'Banano', '2017-10-19 20:22:38', '2017-10-19 20:22:38'),
(5, 'Cacao', '2017-10-19 20:22:45', '2017-10-19 21:17:41'),
(6, 'Café', '2017-10-19 20:22:52', '2017-10-19 20:22:52'),
(7, 'Camarón, atún, pesca artesanal y otros', '2017-10-19 20:23:29', '2017-10-19 20:23:29'),
(8, 'Caña de azucar', '2017-10-19 20:25:47', '2017-10-19 20:25:47'),
(9, 'Caucho y plástico', '2017-10-19 20:26:01', '2017-10-19 20:26:01'),
(10, 'Comercio', '2017-10-19 20:26:08', '2017-10-19 20:26:08'),
(11, 'Construcción y vivienda', '2017-10-19 20:26:33', '2017-10-19 20:26:33'),
(12, 'Entidades financieras y seguros', '2017-10-19 20:26:53', '2017-10-19 20:26:53'),
(13, 'Flores', '2017-10-19 20:26:58', '2017-10-19 20:26:58'),
(14, 'Ganadería', '2017-10-19 20:27:12', '2017-10-19 20:27:12'),
(15, 'Industrias de electrodomésticos y electrónicos', '2017-10-19 20:27:39', '2017-10-19 20:27:39'),
(16, 'Logística y transporte', '2017-10-19 20:28:00', '2017-10-19 20:28:00'),
(17, 'Madera', '2017-10-19 20:28:10', '2017-10-19 20:28:10'),
(18, 'Maíz, soya, balaceados, avicultura y porcicultura', '2017-10-19 20:28:49', '2017-10-19 20:28:49'),
(19, 'Metalmecánica', '2017-10-19 20:29:10', '2017-10-19 20:29:10'),
(20, 'Minería e hidrocarburos', '2017-10-19 20:29:35', '2017-10-19 20:29:35'),
(21, 'Palma', '2017-10-19 20:29:43', '2017-10-19 20:29:43'),
(22, 'Papel y cartón', '2017-10-19 20:29:59', '2017-10-19 20:29:59'),
(23, 'Química, farmacéutica, productos de aseo y cosméticos', '2017-10-19 20:30:32', '2017-10-19 20:30:32'),
(24, 'Servicios', '2017-10-19 20:30:43', '2017-10-19 20:30:43'),
(25, 'Textil y calzado', '2017-10-19 20:31:08', '2017-10-19 20:31:08'),
(26, 'Turismo', '2017-10-19 20:31:19', '2017-10-19 20:31:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sipocs`
--

CREATE TABLE `sipocs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_sipoc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sipocs`
--

INSERT INTO `sipocs` (`id`, `nombre_sipoc`, `created_at`, `updated_at`) VALUES
(6, 'Proveedores', '2017-10-18 22:34:07', '2017-10-18 22:34:07'),
(7, 'Insumos', '2017-10-18 22:34:13', '2017-10-18 22:34:13'),
(8, 'Procesos', '2017-10-18 22:34:24', '2017-10-18 22:34:24'),
(9, 'Producto', '2017-10-18 22:34:32', '2017-10-18 22:34:32'),
(10, 'Mercado', '2017-10-18 22:34:41', '2017-10-18 22:34:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `thematics`
--

CREATE TABLE `thematics` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_thematic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `thematics`
--

INSERT INTO `thematics` (`id`, `nombre_thematic`, `created_at`, `updated_at`) VALUES
(1, 'Acceso a mercados', '2017-10-19 00:52:06', '2017-10-19 00:52:06'),
(2, 'Entorno productivo', '2017-10-19 00:53:01', '2017-10-19 00:53:01'),
(3, 'Innovación, calidad y emprendimiento', '2017-10-19 01:33:44', '2017-10-19 01:33:44'),
(4, 'Inversión y Financiamiento', '2017-10-19 01:34:09', '2017-10-19 01:34:09'),
(5, 'Cacao-2', '2017-10-19 01:34:19', '2017-10-19 21:16:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'carlos', 'csgallardof@gmail.com', '$2y$10$3.OTpnHr5ibcA5BfFjnmduwBkOVfHXZvZY1okYeTto3KDHTSnf.ua', '2Yv4U2YEUx8ZisWDWQcjhaXRy6bgXOedMUUgOkNUHQngCVgWeiq6BgHnpBwm', '2017-10-16 22:49:44', '2017-10-16 22:49:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vsectors`
--

CREATE TABLE `vsectors` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_vsector` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vsectors`
--

INSERT INTO `vsectors` (`id`, `nombre_vsector`, `created_at`, `updated_at`) VALUES
(1, 'EPS', '2017-10-20 00:08:27', '2017-10-20 00:08:27'),
(2, 'Artesanos', '2017-10-20 00:12:40', '2017-10-20 00:12:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ambits`
--
ALTER TABLE `ambits`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pajustadas`
--
ALTER TABLE `pajustadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sipocs`
--
ALTER TABLE `sipocs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `thematics`
--
ALTER TABLE `thematics`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vsectors`
--
ALTER TABLE `vsectors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambits`
--
ALTER TABLE `ambits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `pajustadas`
--
ALTER TABLE `pajustadas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `sipocs`
--
ALTER TABLE `sipocs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `thematics`
--
ALTER TABLE `thematics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `vsectors`
--
ALTER TABLE `vsectors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
