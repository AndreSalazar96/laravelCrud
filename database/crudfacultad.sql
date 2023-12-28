-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-12-2023 a las 16:11:26
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crudfacultad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edo_civil`
--

CREATE TABLE `edo_civil` (
  `id_edo_civil` bigint(20) UNSIGNED NOT NULL,
  `edo_civil` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `edo_civil`
--

INSERT INTO `edo_civil` (`id_edo_civil`, `edo_civil`, `created_at`, `updated_at`) VALUES
(1, 'soltero', NULL, NULL),
(2, 'casado', NULL, NULL),
(3, 'viudo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_07_201958_create_personas_table', 2),
(6, '2023_12_15_185854_create_edo_civil_table', 3),
(7, '2023_12_15_191820_create_edo_civil_table', 4),
(8, '2023_12_15_192600_id_edo_civil', 5),
(9, '2023_12_15_193236_id_edo_civil', 6),
(10, '2023_12_15_194409_id_edo_civil', 7),
(11, '2023_12_15_200431_create_edo_civil_table', 8),
(15, '2023_12_26_173904_avatar', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `paterno` varchar(255) NOT NULL,
  `materno` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_edo_civil` bigint(20) UNSIGNED NOT NULL,
  `id_usuario` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `paterno`, `materno`, `fecha_nacimiento`, `created_at`, `updated_at`, `id_edo_civil`, `id_usuario`) VALUES
(1, 'Andres', 'Salazar', 'Avila', '1996-04-01', NULL, NULL, 1, 3),
(4, 'Fulanito', 'Herrera', 'Machis', '1999-05-05', '2023-12-15 18:37:47', '2023-12-19 17:43:40', 3, 4),
(11, 'Adrian', 'Salcedo', 'Aguilar', '1988-05-06', '2023-12-18 23:35:45', '2023-12-19 17:43:48', 1, 7),
(15, 'Segundo nombre', 'Apellido', 'Apellido', '1970-05-03', '2023-12-22 23:26:21', '2023-12-22 23:26:21', 1, 10),
(16, 'Marianyelis', 'Lopez', 'Mota', '1999-02-25', '2023-12-22 23:26:57', '2023-12-22 23:26:57', 2, 3),
(18, 'Doggy Dog', 'Doddy Paterno', 'Doggy Materno', '1996-04-01', '2023-12-27 22:21:05', '2023-12-27 22:32:09', 2, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`) VALUES
(3, 'Andres Eduardo', 'asalazar@gmail.com', NULL, '$2y$10$xv2qNHVDo5CBJ2PNQ1Cvb.xWL2q/3SR0.JtVBBY5tDbrBrIFsL.S.', NULL, '2023-12-21 19:48:01', '2023-12-28 18:18:03', 'img/avatar/1703773083-newdog-removebg-preview.png'),
(4, 'Carlos', 'andres@gmail.com', NULL, '$2y$10$oj5b8j/LVOMlfN4kOC/jG.XFRZvducqiTpGxiOMCagGUF2c8FYBA.', NULL, '2023-12-21 23:07:12', '2023-12-28 18:18:51', 'img/avatar/1703773131-c09.png'),
(7, 'Eduardo', 'eduardo@gmail.com', NULL, '$2y$10$VFQdHGOwi.zhCbliWgcluuNY1subPg/JswIlF12UyhePIUcOEsYFC', NULL, '2023-12-22 00:23:42', '2023-12-22 00:23:42', ''),
(8, 'Hector', 'hector@gamil.com', NULL, '$2y$10$aBub0earAiudDTtvEfASn.08xICuN4EtqitrHaXfVfzcF1h5rrdP2', NULL, '2023-12-22 00:29:52', '2023-12-22 00:29:52', ''),
(10, 'Alberth', 'alberth@gmail.com', NULL, '$2y$10$NOWbmgMyawIBmGPuZxYKqOp1OA3kh69GOQcby6Zplp830zDDCD4hO', NULL, '2023-12-22 23:15:57', '2023-12-22 23:15:57', ''),
(14, 'Doggy', 'doggy@gmail.com', NULL, '$2y$10$1vCunm4y7w0oAIe/ak8mH.bdUMDaffH4u7Mx0Yo0/cQljJ8Z/qj9.', NULL, '2023-12-27 22:20:38', '2023-12-27 22:20:38', 'img/avatar/1703701238-d966ed3f00c2dde92cb0069d76a7eec1.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `edo_civil`
--
ALTER TABLE `edo_civil`
  ADD PRIMARY KEY (`id_edo_civil`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personas_id_edo_civil_foreign` (`id_edo_civil`),
  ADD KEY `id_usuario` (`id_usuario`);

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
-- AUTO_INCREMENT de la tabla `edo_civil`
--
ALTER TABLE `edo_civil`
  MODIFY `id_edo_civil` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `personas_id_edo_civil_foreign` FOREIGN KEY (`id_edo_civil`) REFERENCES `edo_civil` (`id_edo_civil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
