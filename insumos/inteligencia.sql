-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-11-2017 a las 18:41:07
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

--
-- Volcado de datos para la tabla `ambits`
--

INSERT INTO `ambits` (`id`, `nombre_ambit`, `created_at`, `updated_at`) VALUES
(1, 'Atracción de la inversión extranjera directa', '2017-10-24 02:12:28', '2017-10-24 02:12:28'),
(2, 'Crédito y financiamiento productivo', '2017-10-24 02:12:28', '2017-10-24 02:12:28'),
(3, 'Cumplimiento de la transparencia fiscal', '2017-10-24 02:12:28', '2017-10-24 02:12:28'),
(4, 'Fomento de la producción nacional', '2017-10-24 02:12:28', '2017-10-24 02:12:28'),
(5, 'Fortalecimiento de la dolarización', '2017-10-24 02:12:28', '2017-10-24 02:12:28'),
(6, 'Fortalecimiento del sector exportador', '2017-10-24 02:12:28', '2017-10-24 02:12:28'),
(7, 'Generación de empleo', '2017-10-24 02:12:28', '2017-10-24 02:12:28'),
(8, 'Impulso a las alianzas público privadas', '2017-10-24 02:12:28', '2017-10-24 02:12:28'),
(9, 'Impulso al cambio de la matriz productiva', '2017-10-24 02:12:28', '2017-10-24 02:12:28'),
(10, 'Inversión en iniciativas productivas nacionales', '2017-10-24 02:12:28', '2017-10-24 02:12:28'),
(11, 'Optimización y simplificación tributaria', '2017-10-24 02:12:28', '2017-10-24 02:12:28'),
(12, 'Otros', '2017-10-24 02:12:28', '2017-10-24 02:12:28'),
(13, 'Promoción del consumo responsable', '2017-10-24 02:12:28', '2017-10-24 02:12:28'),
(14, 'Simplificación de trámites', '2017-10-24 02:12:28', '2017-10-24 02:12:28');

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

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre_evento`, `created_at`, `updated_at`) VALUES
(1, 'Ejemplo evento 789-Azuay-1510257182', '2017-11-10 00:53:02', '2017-11-10 00:53:02'),
(2, 'Ejemplo evento 789-Azuay-1510268362', '2017-11-10 03:59:22', '2017-11-10 03:59:22'),
(3, 'Ejemplo evento 789-Azuay-1510327395', '2017-11-10 20:23:15', '2017-11-10 20:23:15'),
(4, 'Ejemplo evento 789-Azuay-1510327433', '2017-11-10 20:23:53', '2017-11-10 20:23:53'),
(5, 'Ejemplo evento 789-Azuay-1510327635', '2017-11-10 20:27:15', '2017-11-10 20:27:15'),
(6, 'Ejemplo evento 789-Azuay-1510327667', '2017-11-10 20:27:47', '2017-11-10 20:27:47'),
(7, 'Ejemplo evento 789-Azuay-1510327894', '2017-11-10 20:31:34', '2017-11-10 20:31:34'),
(8, 'Ejemplo evento 789-Azuay-1510328005', '2017-11-10 20:33:25', '2017-11-10 20:33:25'),
(9, 'Ejemplo evento 789-Azuay-1510328100', '2017-11-10 20:35:00', '2017-11-10 20:35:00'),
(10, 'Ejemplo evento 789-Azuay-1510328203', '2017-11-10 20:36:43', '2017-11-10 20:36:43'),
(11, 'Ejemplo evento 789-Azuay-1510328294', '2017-11-10 20:38:14', '2017-11-10 20:38:14'),
(12, 'Ejemplo evento 789-Azuay-1510328336', '2017-11-10 20:38:56', '2017-11-10 20:38:56'),
(13, 'Ejemplo evento 789-Azuay-1510328464', '2017-11-10 20:41:04', '2017-11-10 20:41:04'),
(14, 'Ejemplo evento 789-Azuay-1510328639', '2017-11-10 20:43:59', '2017-11-10 20:43:59'),
(15, 'Ejemplo evento 789-Azuay-1510328802', '2017-11-10 20:46:42', '2017-11-10 20:46:42'),
(16, 'Ejemplo evento 789-Azuay-1510328983', '2017-11-10 20:49:43', '2017-11-10 20:49:43'),
(17, 'Ejemplo evento 789-Azuay-1510329188', '2017-11-10 20:53:08', '2017-11-10 20:53:08'),
(18, 'Ejemplo evento 789-Azuay-1510329221', '2017-11-10 20:53:41', '2017-11-10 20:53:41'),
(19, 'Ejemplo evento 789-Azuay-1510329246', '2017-11-10 20:54:06', '2017-11-10 20:54:06'),
(20, 'Ejemplo evento 789-Azuay-1510329290', '2017-11-10 20:54:50', '2017-11-10 20:54:50'),
(21, 'Ejemplo evento 789-Azuay-1510329386', '2017-11-10 20:56:26', '2017-11-10 20:56:26'),
(22, 'Ejemplo evento 789-Azuay-1510329443', '2017-11-10 20:57:23', '2017-11-10 20:57:23'),
(23, 'Ejemplo evento 789-Azuay-1510329597', '2017-11-10 20:59:57', '2017-11-10 20:59:57'),
(24, 'Ejemplo evento 789-Azuay-1510329657', '2017-11-10 21:00:57', '2017-11-10 21:00:57'),
(25, 'Ejemplo evento 789-Azuay-1510329706', '2017-11-10 21:01:46', '2017-11-10 21:01:46'),
(26, 'Ejemplo evento 789-Azuay-1510329873', '2017-11-10 21:04:33', '2017-11-10 21:04:33'),
(27, 'Ejemplo evento 789-Azuay-1510329921', '2017-11-10 21:05:21', '2017-11-10 21:05:21'),
(28, 'Ejemplo evento 789-Azuay-1510330408', '2017-11-10 21:13:28', '2017-11-10 21:13:28'),
(29, 'Ejemplo evento 789-Azuay-1510330510', '2017-11-10 21:15:10', '2017-11-10 21:15:10'),
(30, 'Ejemplo evento 789-Azuay-1510330574', '2017-11-10 21:16:14', '2017-11-10 21:16:14'),
(31, 'Ejemplo evento 789-Azuay-1510330586', '2017-11-10 21:16:26', '2017-11-10 21:16:26'),
(32, 'Ejemplo evento 789-Azuay-1510330836', '2017-11-10 21:20:36', '2017-11-10 21:20:36'),
(33, 'Ejemplo evento 789-Azuay-1510330934', '2017-11-10 21:22:14', '2017-11-10 21:22:14'),
(34, 'Ejemplo evento 789-Azuay-1510330964', '2017-11-10 21:22:44', '2017-11-10 21:22:44'),
(35, 'Ejemplo evento 789-Azuay-1510330987', '2017-11-10 21:23:07', '2017-11-10 21:23:07'),
(36, 'Ejemplo evento 789-Azuay-1510331066', '2017-11-10 21:24:26', '2017-11-10 21:24:26'),
(37, 'Ejemplo evento 789-Azuay-1510331378', '2017-11-10 21:29:38', '2017-11-10 21:29:38'),
(38, 'Ejemplo evento 789-Azuay-1510331412', '2017-11-10 21:30:12', '2017-11-10 21:30:12'),
(39, 'Ejemplo evento 789-Azuay-1510332098', '2017-11-10 21:41:38', '2017-11-10 21:41:38'),
(40, 'Ejemplo evento 789-Azuay-1510332128', '2017-11-10 21:42:08', '2017-11-10 21:42:08'),
(41, 'Ejemplo evento 789-Azuay-1510332172', '2017-11-10 21:42:52', '2017-11-10 21:42:52'),
(42, 'Ejemplo evento 789-Azuay-1510332201', '2017-11-10 21:43:21', '2017-11-10 21:43:21'),
(43, 'Ejemplo evento 789-Azuay-1510332274', '2017-11-10 21:44:34', '2017-11-10 21:44:34'),
(44, 'Ejemplo evento 789-Azuay-1510332592', '2017-11-10 21:49:52', '2017-11-10 21:49:52'),
(45, 'Ejemplo evento 789-Azuay-1510332657', '2017-11-10 21:50:57', '2017-11-10 21:50:57'),
(46, 'Ejemplo evento 789-Azuay-1510332732', '2017-11-10 21:52:12', '2017-11-10 21:52:12'),
(47, 'Ejemplo evento 789-Azuay-1510332766', '2017-11-10 21:52:46', '2017-11-10 21:52:46'),
(48, 'Ejemplo evento 789-Azuay-1510332823', '2017-11-10 21:53:43', '2017-11-10 21:53:43'),
(49, 'Ejemplo evento 789-Azuay-1510332897', '2017-11-10 21:54:57', '2017-11-10 21:54:57'),
(50, 'Ejemplo evento 789-Azuay-1510332991', '2017-11-10 21:56:31', '2017-11-10 21:56:31'),
(51, 'Ejemplo evento 789-Azuay-1510333099', '2017-11-10 21:58:19', '2017-11-10 21:58:19'),
(52, 'Ejemplo evento 789-Azuay-1510333136', '2017-11-10 21:58:56', '2017-11-10 21:58:56'),
(53, 'Ejemplo evento 789-Azuay-1510333359', '2017-11-10 22:02:39', '2017-11-10 22:02:39'),
(54, 'Ejemplo evento 789-Azuay-1510333413', '2017-11-10 22:03:33', '2017-11-10 22:03:33'),
(55, 'Ejemplo evento 789-Azuay-1510333487', '2017-11-10 22:04:47', '2017-11-10 22:04:47'),
(56, 'Ejemplo evento 789-Azuay-1510333504', '2017-11-10 22:05:04', '2017-11-10 22:05:04'),
(57, 'Ejemplo evento 789-Azuay-1510334935', '2017-11-10 22:28:55', '2017-11-10 22:28:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instrumentos`
--

CREATE TABLE `instrumentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_instrumento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `instrumentos`
--

INSERT INTO `instrumentos` (`id`, `nombre_instrumento`, `created_at`, `updated_at`) VALUES
(1, 'uno', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(2, 'Acuerdo', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(3, 'Asistencia técnica', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(4, 'Asociatividad,', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(5, 'Big data', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(6, 'Contratación pública', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(7, 'Convenios ', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(8, 'Desarrollo del proyecto', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(9, 'Ejecución del proyecto', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(10, 'Financiamiento', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(11, 'Incentivos tributarios', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(12, 'Infraestructura', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(13, 'Insumos', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(14, 'Intervención zonal', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(15, 'Inversión ', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(16, 'Ley', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(17, 'Logística', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(18, 'Ordenanzas', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(19, 'Personal adecuado', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(20, 'Política pública', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(21, 'Precios', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(22, 'Recursos asignados', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(23, 'Reglamento', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(24, 'Tecnología', '2017-11-09 19:03:08', '2017-11-09 19:03:08'),
(25, 'Tratado comercial', '2017-11-09 19:03:08', '2017-11-09 19:03:08');

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
(10, '2017_10_31_173809_create_eventos_table', 5),
(11, '2017_11_06_201205_create_instrumentos_table', 6),
(12, '2017_11_07_215259_create_solucions_table', 6);

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
(1, 'Adecuar el marco de contratación laboral a la realidad productiva', '2017-10-24 02:12:28', '2017-10-24 02:19:56'),
(2, 'una', '2017-11-08 01:44:22', '2017-11-08 01:44:22');

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
(1, 'Azuay', '2017-10-31 22:06:11', '2017-10-31 22:14:27'),
(2, 'Bolívar', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(3, 'Cañar', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(4, 'Carchi', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(5, 'Chimborazo', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(6, 'Cotopaxi', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(7, 'El Oro', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(8, 'Esmeraldas', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(9, 'Galápagos', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(10, 'Guayas', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(11, 'Imbabura', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(12, 'Loja.', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(13, 'Los Ríos', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(14, 'Manabí', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(15, 'Morona Santiago', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(16, 'Napo', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(17, 'Orellana', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(18, 'Pastaza', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(19, 'Pichincha', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(20, 'Santa Elena', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(21, 'Santo Domingo de los Tsáchilas', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(22, 'Sucumbios', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(23, 'Tungurahua', '2017-11-07 17:55:00', '2017-11-07 17:55:00'),
(24, 'Zamora Chinchipe', '2017-11-07 17:55:00', '2017-11-07 17:55:00');

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
(8, 'Proceso', '2017-10-18 22:34:24', '2017-10-18 22:34:24'),
(9, 'Producto', '2017-10-18 22:34:32', '2017-10-18 22:34:32'),
(10, 'Mercado', '2017-10-18 22:34:41', '2017-10-18 22:34:41'),
(11, 'otro', '2017-11-08 01:43:58', '2017-11-08 01:43:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solucions`
--

CREATE TABLE `solucions` (
  `id` int(10) UNSIGNED NOT NULL,
  `problema_solucion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `problema_validar_solucion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `verbo_solucion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sujeto_solucion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complemento_solucion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordinador_zonal_solucion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsable_solucion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `corresponsable_solucion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sistematizador_solucion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lider_mesa_solucion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_fuente` int(11) NOT NULL,
  `ambit_id` int(11) NOT NULL,
  `evento_id` int(11) NOT NULL,
  `instrumento_id` int(11) NOT NULL,
  `pajustada_id` int(11) NOT NULL,
  `provincia_id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `sipoc_id` int(11) NOT NULL,
  `thematic_id` int(11) NOT NULL,
  `vsector_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `solucions`
--

INSERT INTO `solucions` (`id`, `problema_solucion`, `problema_validar_solucion`, `verbo_solucion`, `sujeto_solucion`, `complemento_solucion`, `coordinador_zonal_solucion`, `responsable_solucion`, `corresponsable_solucion`, `sistematizador_solucion`, `lider_mesa_solucion`, `tipo_fuente`, `ambit_id`, `evento_id`, `instrumento_id`, `pajustada_id`, `provincia_id`, `sector_id`, `sipoc_id`, `thematic_id`, `vsector_id`, `created_at`, `updated_at`) VALUES
(1, 'Problemática 1', 'PROBLEMáTICA1', 'Ayudar', 'IESS', 'controlar cantidad de  bonos', 'Luis Salgado', 'MIPRO', 'SRI, SENESCYT', 'Pedro Perez', 'Jhonatan Arcos', 1, 2, 13, 10, 0, 1, 26, 8, 0, 6, '2017-11-10 20:41:04', '2017-11-10 20:41:04'),
(2, 'Problemática 1', 'PROBLEMáTICA1', 'Colaborar', 'IESS', 'Software de control', 'Luis Salgado', 'ONU', 'SECOM', 'Pedro Perez', 'Jhonatan Arcos', 1, 11, 13, 13, 0, 1, 26, 8, 0, 5, '2017-11-10 20:41:04', '2017-11-10 20:41:04'),
(3, 'Problemática 2', 'PROBLEMáTICA2', 'Corregir', 'SRI', 'cobrar impuestos', 'Luis Salgado', 'ACDC', 'IESS', 'Pedro Perez', 'Jhonatan Arcos', 1, 11, 13, 5, 0, 1, 26, 10, 0, 5, '2017-11-10 20:41:04', '2017-11-10 20:41:04'),
(4, 'Problemática 4', 'PROBLEMáTICA2', 'Corregir', 'SRI', 'cobrar mas impuestos', 'Luis Salgado', 'OEA', 'SENESCYT', 'Pedro Perez', 'Jhonatan Arcos', 1, 11, 13, 5, 0, 1, 26, 10, 0, 0, '2017-11-10 20:41:04', '2017-11-10 20:41:04');

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
(2, 'Artesano', '2017-10-20 00:12:40', '2017-10-20 00:12:40'),
(3, 'Microempresa', '2017-10-20 00:08:27', '2017-10-20 00:08:27'),
(4, 'Empresa Pequeña', '2017-10-20 00:08:27', '2017-10-20 00:08:27'),
(5, 'Empresa Mediana', '2017-10-20 00:08:27', '2017-10-20 00:08:27'),
(6, 'Empresa Grande', '2017-10-20 00:08:27', '2017-10-20 00:08:27');

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
-- Indices de la tabla `instrumentos`
--
ALTER TABLE `instrumentos`
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
-- Indices de la tabla `solucions`
--
ALTER TABLE `solucions`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT de la tabla `instrumentos`
--
ALTER TABLE `instrumentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `pajustadas`
--
ALTER TABLE `pajustadas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `sipocs`
--
ALTER TABLE `sipocs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `solucions`
--
ALTER TABLE `solucions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
