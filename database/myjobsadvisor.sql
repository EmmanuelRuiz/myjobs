-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2017 a las 21:37:59
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `myjobsadvisor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `claimcompany`
--

CREATE TABLE `claimcompany` (
  `id` int(30) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `businessemail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `officenumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personalnumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `opinion_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `body` text,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(25) CHARACTER SET utf8 NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companies`
--

CREATE TABLE `companies` (
  `id` int(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tradename` varchar(255) DEFAULT NULL,
  `businessname` varchar(255) DEFAULT NULL,
  `rfc` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `description` text,
  `businesssector` varchar(255) DEFAULT NULL,
  `representant` varchar(30) DEFAULT NULL,
  `contacname` varchar(250) DEFAULT NULL,
  `contactlastname` varchar(255) DEFAULT NULL,
  `position` varchar(250) DEFAULT NULL,
  `telephoneext` varchar(250) DEFAULT NULL,
  `businessemail` varchar(250) DEFAULT NULL,
  `personalnumber` varchar(255) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `document` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `tradename`, `businessname`, `rfc`, `logo`, `description`, `businesssector`, `representant`, `contacname`, `contactlastname`, `position`, `telephoneext`, `businessemail`, `personalnumber`, `status`, `document`, `created_at`, `updated_at`) VALUES
(12, 4, 'Oxxo', 'Oxxo Store', '87289389', NULL, 'asdfasdfasdf', 'Tienda', 'si', 'Ruben', 'Amaya', 'Gerente', '34234', 'ruben@gmail.com', '234243', 'invalid', NULL, '2017-05-13 21:17:22', '2017-05-13 21:17:22'),
(13, 2, 'Big Apple', 'Crisvales', '23425235', NULL, 'askbfaklsbfjnaksjdf', 'abarrotes', 'no', NULL, NULL, NULL, NULL, NULL, NULL, 'invalid', NULL, '2017-05-13 21:18:48', '2017-05-13 21:18:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `following`
--

CREATE TABLE `following` (
  `id` int(255) NOT NULL,
  `user` int(255) DEFAULT NULL,
  `followed` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `following`
--

INSERT INTO `following` (`id`, `user`, `followed`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(255) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE `likes` (
  `id` int(255) NOT NULL,
  `user` int(255) DEFAULT NULL,
  `company` int(255) DEFAULT NULL,
  `opinions_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--

CREATE TABLE `notifications` (
  `id` int(255) NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `type_id` int(255) DEFAULT NULL,
  `readed` varchar(3) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `extra` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opinions`
--

CREATE TABLE `opinions` (
  `id` int(255) NOT NULL,
  `company_id` int(255) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `generalcomment` text,
  `point1` varchar(250) DEFAULT NULL,
  `point2` varchar(250) DEFAULT NULL,
  `point3` varchar(250) DEFAULT NULL,
  `point4` varchar(250) DEFAULT NULL,
  `point5` varchar(250) DEFAULT NULL,
  `point6` varchar(250) DEFAULT NULL,
  `point7` varchar(250) DEFAULT NULL,
  `point8` varchar(250) DEFAULT NULL,
  `point9` varchar(250) DEFAULT NULL,
  `point10` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `points`
--

CREATE TABLE `points` (
  `id` int(255) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `valu` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `private_messages`
--

CREATE TABLE `private_messages` (
  `id` int(255) NOT NULL,
  `message` longtext,
  `emitter` int(255) DEFAULT NULL,
  `receiver` int(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `readed` varchar(3) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `plastname` varchar(255) NOT NULL,
  `mlastname` varchar(255) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `connection` datetime DEFAULT NULL,
  `biography` text,
  `image` varchar(255) DEFAULT NULL,
  `termscondition` varchar(50) DEFAULT NULL,
  `datejob` datetime DEFAULT NULL,
  `privacy` varchar(50) DEFAULT NULL,
  `role` varchar(20) NOT NULL,
  `anonimo` varchar(2) NOT NULL,
  `active` varchar(2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `plastname`, `mlastname`, `age`, `email`, `telephone`, `password`, `connection`, `biography`, `image`, `termscondition`, `datejob`, `privacy`, `role`, `anonimo`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Juan', 'Amaya', 'Ku', 25, 'amayajuan95@gmail.com', '9841781760', '$2y$04$e7NSezX5Jz2n8hEJ0.7Nn.ZFMTw7RkwFJRpviMrVK3zBZ6g15rAmK', NULL, 'Hola, yo soy Juan, trabajo como Desarrollador Web en Epikode', '11494181407.jpeg', NULL, NULL, NULL, 'ADMINISTRADOR', 'No', NULL, NULL, NULL),
(2, 'Emmanuel', 'Ruiz', 'Estrada', 55, 'emmanuel@gmail.com', '985472214', '$2y$04$bo/5DTxpbC7kFlyD2utE.OJ37nxWgt6nrnFY8QoPAl11y2DH7xJOa', NULL, NULL, NULL, '', '2011-07-19 00:00:00', NULL, 'ROLE_USER', 'No', NULL, NULL, NULL),
(3, 'Silvia', 'Ku', 'Ake', 33, 'silvia@gmail.com', '9329234234', '$2y$04$95CJm3FGfzhY1rR7JcUVjOEx/x2GYoqhEc5RE8IILXK4ZUkjtwjTu', NULL, NULL, NULL, '', '2007-01-01 00:00:00', NULL, 'ROLE_USER', 'No', NULL, NULL, NULL),
(4, 'Ruben', 'Amaya', 'Ku', 87, 'ruben@gmail.com', '838328329', '$2y$04$GmUmGsYPStZcoyHnaex0OOI9oG5scgt8hLnc9jp2N2Cvi5yQxiqwu', NULL, NULL, NULL, '', '2009-01-01 00:00:00', NULL, 'ROLE_USER', 'No', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `claimcompany`
--
ALTER TABLE `claimcompany`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_claimcompany_company` (`company_id`),
  ADD KEY `fk_claimcompany_user` (`user_id`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_5F9E962A51885A6A` (`opinion_id`),
  ADD KEY `FK_5F9E962AA76ED395` (`user_id`);

--
-- Indices de la tabla `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_8244AA3AA76ED395` (`user_id`);

--
-- Indices de la tabla `following`
--
ALTER TABLE `following`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_71BF8DE34D02BC17` (`followed`),
  ADD KEY `FK_71BF8DE38D93D649` (`user`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_image_company` (`company_id`),
  ADD KEY `fk_image_user` (`user_id`);

--
-- Indices de la tabla `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_49CA4E7D4A47BD39` (`opinions_id`),
  ADD KEY `FK_49CA4E7D4FBF094F` (`company`),
  ADD KEY `FK_49CA4E7D8D93D649` (`user`);

--
-- Indices de la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_6000B0D3A76ED395` (`user_id`);

--
-- Indices de la tabla `opinions`
--
ALTER TABLE `opinions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_BEAF78D0979B1AD6` (`company_id`),
  ADD KEY `FK_BEAF78D0A76ED395` (`user_id`);

--
-- Indices de la tabla `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_27BA8E29979B1AD6` (`company_id`),
  ADD KEY `FK_27BA8E29A76ED395` (`user_id`);

--
-- Indices de la tabla `private_messages`
--
ALTER TABLE `private_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_7C94C13B758ECD31` (`emitter`),
  ADD KEY `FK_7C94C13B3DB88C96` (`receiver`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_uniques_fields` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `claimcompany`
--
ALTER TABLE `claimcompany`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `following`
--
ALTER TABLE `following`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `opinions`
--
ALTER TABLE `opinions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `points`
--
ALTER TABLE `points`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `private_messages`
--
ALTER TABLE `private_messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `claimcompany`
--
ALTER TABLE `claimcompany`
  ADD CONSTRAINT `fk_claimcompany_company` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_claimcompany_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_5F9E962A51885A6A` FOREIGN KEY (`opinion_id`) REFERENCES `opinions` (`id`),
  ADD CONSTRAINT `FK_5F9E962AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `FK_8244AA3AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `following`
--
ALTER TABLE `following`
  ADD CONSTRAINT `FK_71BF8DE34D02BC17` FOREIGN KEY (`followed`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_71BF8DE38D93D649` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_image_company` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `fk_image_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `FK_49CA4E7D4A47BD39` FOREIGN KEY (`opinions_id`) REFERENCES `opinions` (`id`),
  ADD CONSTRAINT `FK_49CA4E7D4FBF094F` FOREIGN KEY (`company`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `FK_49CA4E7D8D93D649` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `FK_6000B0D3A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `opinions`
--
ALTER TABLE `opinions`
  ADD CONSTRAINT `FK_BEAF78D0979B1AD6` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `FK_BEAF78D0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `points`
--
ALTER TABLE `points`
  ADD CONSTRAINT `FK_27BA8E29979B1AD6` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `FK_27BA8E29A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `private_messages`
--
ALTER TABLE `private_messages`
  ADD CONSTRAINT `FK_7C94C13B3DB88C96` FOREIGN KEY (`receiver`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_7C94C13B758ECD31` FOREIGN KEY (`emitter`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
