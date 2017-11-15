-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-11-2017 a las 19:35:52
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
(1, 'Atracción de la inversión extranjera directa', '2017-10-24 07:12:28', '2017-10-24 07:12:28'),
(2, 'Crédito y financiamiento productivo', '2017-10-24 07:12:28', '2017-10-24 07:12:28'),
(3, 'Cumplimiento de la transparencia fiscal', '2017-10-24 07:12:28', '2017-10-24 07:12:28'),
(4, 'Fomento de la producción nacional', '2017-10-24 07:12:28', '2017-10-24 07:12:28'),
(5, 'Fortalecimiento de la dolarización', '2017-10-24 07:12:28', '2017-10-24 07:12:28'),
(6, 'Fortalecimiento del sector exportador', '2017-10-24 07:12:28', '2017-10-24 07:12:28'),
(7, 'Generación de empleo', '2017-10-24 07:12:28', '2017-10-24 07:12:28'),
(8, 'Impulso a las alianzas público privadas', '2017-10-24 07:12:28', '2017-10-24 07:12:28'),
(9, 'Impulso al cambio de la matriz productiva', '2017-10-24 07:12:28', '2017-10-24 07:12:28'),
(10, 'Inversión en iniciativas productivas nacionales', '2017-10-24 07:12:28', '2017-10-24 07:12:28'),
(11, 'Optimización y simplificación tributaria', '2017-10-24 07:12:28', '2017-10-24 07:12:28'),
(12, 'Otros', '2017-10-24 07:12:28', '2017-10-24 07:12:28'),
(13, 'Promoción del consumo responsable', '2017-10-24 07:12:28', '2017-10-24 07:12:28'),
(14, 'Simplificación de trámites', '2017-10-24 07:12:28', '2017-10-24 07:12:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_evento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `provincia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre_evento`, `created_at`, `updated_at`, `provincia_id`) VALUES
(1, 'Evento-001-Cotopaxi', '2017-11-15 23:09:29', '2017-11-15 23:09:29', 6),
(2, 'Ejemplo evento 789-Azuay', '2017-11-15 23:11:19', '2017-11-15 23:11:19', 1);

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
(1, 'uno', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(2, 'Acuerdo', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(3, 'Asistencia técnica', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(4, 'Asociatividad,', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(5, 'Big data', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(6, 'Contratación pública', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(7, 'Convenios ', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(8, 'Desarrollo del proyecto', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(9, 'Ejecución del proyecto', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(10, 'Financiamiento', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(11, 'Incentivos tributarios', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(12, 'Infraestructura', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(13, 'Insumos', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(14, 'Intervención zonal', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(15, 'Inversión ', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(16, 'Ley', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(17, 'Logística', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(18, 'Ordenanzas', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(19, 'Personal adecuado', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(20, 'Política pública', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(21, 'Precios', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(22, 'Recursos asignados', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(23, 'Reglamento', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(24, 'Tecnología', '2017-11-10 00:03:08', '2017-11-10 00:03:08'),
(25, 'Tratado comercial', '2017-11-10 00:03:08', '2017-11-10 00:03:08');

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
(12, '2017_11_07_215259_create_solucions_table', 6),
(13, '2017_11_13_224514_create_roles_table', 7),
(14, '2017_11_13_225423_create_role_user_table', 7),
(15, '2017_11_14_152320_add_column_to_table', 7),
(16, '2017_11_14_163723_create_evento_solucion_user_table', 7),
(17, '2017_11_14_174018_add_column_to_table_users', 7),
(18, '2017_11_14_200711_add_apellido_cedula_telefono_celular_to_users_table', 7),
(20, '2017_11_15_171909_add_create_tipo_empresa_table', 8),
(21, '2017_11_15_174647_add_tipo_empresa_id_to_solucions_table', 9);

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
(1, 'Adecuar el marco de contratación laboral a la realidad productiva', '2017-10-24 07:12:28', '2017-10-24 07:19:56'),
(2, 'una', '2017-11-08 06:44:22', '2017-11-08 06:44:22');

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
(1, 'Azuay', '2017-11-01 03:06:11', '2017-11-01 03:14:27'),
(2, 'Bolívar', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(3, 'Cañar', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(4, 'Carchi', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(5, 'Chimborazo', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(6, 'Cotopaxi', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(7, 'El Oro', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(8, 'Esmeraldas', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(9, 'Galápagos', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(10, 'Guayas', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(11, 'Imbabura', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(12, 'Loja.', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(13, 'Los Ríos', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(14, 'Manabí', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(15, 'Morona Santiago', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(16, 'Napo', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(17, 'Orellana', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(18, 'Pastaza', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(19, 'Pichincha', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(20, 'Santa Elena', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(21, 'Santo Domingo de los Tsáchilas', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(22, 'Sucumbios', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(23, 'Tungurahua', '2017-11-07 22:55:00', '2017-11-07 22:55:00'),
(24, 'Zamora Chinchipe', '2017-11-07 22:55:00', '2017-11-07 22:55:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre_role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Participante', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 0, NULL, NULL),
(5, 11, 2, NULL, NULL),
(6, 12, 2, NULL, NULL),
(7, 13, 2, NULL, NULL);

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
(1, 'Adecuar el marco de contratación laboral a la realidad productivA', '2017-10-20 00:56:36', '2017-10-24 07:17:31'),
(2, 'Arroz', '2017-10-20 01:22:10', '2017-10-20 01:22:10'),
(3, 'Automotriz Motos', '2017-10-20 01:22:30', '2017-10-20 01:22:30'),
(4, 'Banano', '2017-10-20 01:22:38', '2017-10-20 01:22:38'),
(5, 'Cacao', '2017-10-20 01:22:45', '2017-10-20 02:17:41'),
(6, 'Café', '2017-10-20 01:22:52', '2017-10-20 01:22:52'),
(7, 'Camarón, atún, pesca artesanal y otros', '2017-10-20 01:23:29', '2017-10-20 01:23:29'),
(8, 'Caña de azucar', '2017-10-20 01:25:47', '2017-10-20 01:25:47'),
(9, 'Caucho y plástico', '2017-10-20 01:26:01', '2017-10-20 01:26:01'),
(10, 'Comercio', '2017-10-20 01:26:08', '2017-10-20 01:26:08'),
(11, 'Construcción y vivienda', '2017-10-20 01:26:33', '2017-10-20 01:26:33'),
(12, 'Entidades financieras y seguros', '2017-10-20 01:26:53', '2017-10-20 01:26:53'),
(13, 'Flores', '2017-10-20 01:26:58', '2017-10-20 01:26:58'),
(14, 'Ganadería', '2017-10-20 01:27:12', '2017-10-20 01:27:12'),
(15, 'Industrias de electrodomésticos y electrónicos', '2017-10-20 01:27:39', '2017-10-20 01:27:39'),
(16, 'Logística y transporte', '2017-10-20 01:28:00', '2017-10-20 01:28:00'),
(17, 'Madera', '2017-10-20 01:28:10', '2017-10-20 01:28:10'),
(18, 'Maíz, soya, balaceados, avicultura y porcicultura', '2017-10-20 01:28:49', '2017-10-20 01:28:49'),
(19, 'Metalmecánica', '2017-10-20 01:29:10', '2017-10-20 01:29:10'),
(20, 'Minería e hidrocarburos', '2017-10-20 01:29:35', '2017-10-20 01:29:35'),
(21, 'Palma', '2017-10-20 01:29:43', '2017-10-20 01:29:43'),
(22, 'Papel y cartón', '2017-10-20 01:29:59', '2017-10-20 01:29:59'),
(23, 'Química, farmacéutica, productos de aseo y cosméticos', '2017-10-20 01:30:32', '2017-10-20 01:30:32'),
(24, 'Servicios', '2017-10-20 01:30:43', '2017-10-20 01:30:43'),
(25, 'Textil y calzado', '2017-10-20 01:31:08', '2017-10-20 01:31:08'),
(26, 'Turismo', '2017-10-20 01:31:19', '2017-10-20 01:31:19'),
(27, 'Acuícola', '2017-10-20 01:27:39', '2017-10-20 01:27:39'),
(28, 'Agroindustria', '2017-10-20 01:27:39', '2017-10-20 01:27:39'),
(29, 'Industria', '2017-10-20 01:27:39', '2017-10-20 01:27:39'),
(30, 'Transporte', '2017-10-20 01:27:39', '2017-10-20 01:27:39');

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
(6, 'Proveedores', '2017-10-19 03:34:07', '2017-10-19 03:34:07'),
(7, 'Insumos', '2017-10-19 03:34:13', '2017-10-19 03:34:13'),
(8, 'Proceso', '2017-10-19 03:34:24', '2017-10-19 03:34:24'),
(9, 'Producto', '2017-10-19 03:34:32', '2017-10-19 03:34:32'),
(10, 'Mercado', '2017-10-19 03:34:41', '2017-10-19 03:34:41'),
(11, 'otro', '2017-11-08 06:43:58', '2017-11-08 06:43:58');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo_empresa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `solucions`
--

INSERT INTO `solucions` (`id`, `problema_solucion`, `problema_validar_solucion`, `verbo_solucion`, `sujeto_solucion`, `complemento_solucion`, `coordinador_zonal_solucion`, `responsable_solucion`, `corresponsable_solucion`, `sistematizador_solucion`, `lider_mesa_solucion`, `tipo_fuente`, `ambit_id`, `evento_id`, `instrumento_id`, `pajustada_id`, `provincia_id`, `sector_id`, `sipoc_id`, `thematic_id`, `vsector_id`, `created_at`, `updated_at`, `tipo_empresa_id`) VALUES
(1, 'Problemática 1', 'PROBLEMáTICA1', 'Ayudar', 'IESS', 'controlar cantidad de  bonos', 'Luis Salgado', 'MIPRO', 'SRI, SENESCYT', 'Pedro Perez', 'Jhonatan Arcos', 1, 2, 1, 10, 0, 1, 26, 8, 0, 0, '2017-11-15 23:11:19', '2017-11-15 23:11:19', 3),
(2, 'Problemática 2', 'PROBLEMáTICA2', 'Corregir', 'SRI', 'cobrar Impuestos', 'Luis Salgado', 'ACDC', 'IESS', 'Pedro Perez', 'Jhonatan Arcos', 1, 11, 1, 5, 0, 1, 26, 10, 0, 0, '2017-11-15 23:11:19', '2017-11-15 23:11:19', 6),
(3, 'Problemática 5 Problemática 5', 'PROBLEMáTICA5PROBLEMáTICA5', 'Validar', 'SRI', 'cobro de Impuestos', 'Luis Salgado', 'FBI', 'IESS', 'Pedro Perez', 'Jhonatan Arcos', 1, 11, 1, 7, 0, 1, 26, 8, 0, 0, '2017-11-15 23:11:19', '2017-11-15 23:11:19', 5),
(4, 'Problemática 1', 'PROBLEMáTICA1', 'Colaborar', 'IESS', 'Software de control', 'Luis Salgado', 'ONU', 'SECOM', 'Pedro Perez', 'Jhonatan Arcos', 1, 11, 1, 13, 0, 1, 26, 8, 0, 0, '2017-11-15 23:11:19', '2017-11-15 23:11:19', 4);

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
(1, 'Acceso a mercados', '2017-10-19 05:52:06', '2017-10-19 05:52:06'),
(2, 'Entorno productivo', '2017-10-19 05:53:01', '2017-10-19 05:53:01'),
(3, 'Innovación, calidad y emprendimiento', '2017-10-19 06:33:44', '2017-10-19 06:33:44'),
(4, 'Inversión y Financiamiento', '2017-10-19 06:34:09', '2017-10-19 06:34:09'),
(5, 'Cacao-2', '2017-10-19 06:34:19', '2017-10-20 02:16:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_empresa`
--

CREATE TABLE `tipo_empresa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_tipo_empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_empresa`
--

INSERT INTO `tipo_empresa` (`id`, `nombre_tipo_empresa`, `created_at`, `updated_at`) VALUES
(1, 'Microempresa', NULL, NULL),
(2, 'Empresa Pequeña', NULL, NULL),
(3, 'Empresa Mediana', NULL, NULL),
(4, 'Empresa Grande', NULL, NULL),
(5, 'EPS', NULL, NULL),
(6, 'Artesano', NULL, NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_fuente` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `vsector_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `apellidos`, `cedula`, `telefono`, `celular`, `tipo_fuente`, `sector_id`, `vsector_id`) VALUES
(1, 'carlos', 'csgallardof@gmail.com', '$2y$10$3.OTpnHr5ibcA5BfFjnmduwBkOVfHXZvZY1okYeTto3KDHTSnf.ua', '2Yv4U2YEUx8ZisWDWQcjhaXRy6bgXOedMUUgOkNUHQngCVgWeiq6BgHnpBwm', '2017-10-17 03:49:44', '2017-10-17 03:49:44', '', '', '', '', 0, 0, 0),
(11, 'Diego Eduardo', 'mail-1111@outlook.es', '604107670', NULL, '2017-11-15 23:24:26', '2017-11-15 23:24:26', 'Toledo Toledo', '604107670', '32865448', '976457622', 1, 29, 3),
(12, 'Jose Luis', 'mail-2222@outlook.es', '604107677', NULL, '2017-11-15 23:27:35', '2017-11-15 23:27:35', 'Buenaño Buenaño', '604107677', '22759887', '976457622', 1, 26, 4),
(13, 'Jennifer Alexandra', 'mail-3333@outlook.es', '485739272', NULL, '2017-11-15 23:31:05', '2017-11-15 23:31:05', 'Tello Valle', '485739272', '2602519', '985664231', 1, 30, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_evento_solucion`
--

CREATE TABLE `user_evento_solucion` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `evento_id` int(11) NOT NULL,
  `solucion_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'EPS', '2017-10-20 05:08:27', '2017-10-20 05:08:27'),
(2, 'Artesano', '2017-10-20 05:12:40', '2017-10-20 05:12:40'),
(3, 'Público', '2017-10-20 05:12:40', '2017-10-20 05:12:40'),
(4, 'Privado', '2017-10-20 05:12:40', '2017-10-20 05:12:40');

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
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
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
-- Indices de la tabla `tipo_empresa`
--
ALTER TABLE `tipo_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `user_evento_solucion`
--
ALTER TABLE `user_evento_solucion`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `instrumentos`
--
ALTER TABLE `instrumentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
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
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
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
-- AUTO_INCREMENT de la tabla `tipo_empresa`
--
ALTER TABLE `tipo_empresa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `user_evento_solucion`
--
ALTER TABLE `user_evento_solucion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `vsectors`
--
ALTER TABLE `vsectors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
