-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2017 a las 19:13:26
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
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `opinion_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `body` text,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companies`
--

CREATE TABLE `companies` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `tradename` varchar(255) DEFAULT NULL,
  `businessname` varchar(255) DEFAULT NULL,
  `rfc` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `description` text,
  `businesssector` varchar(255) DEFAULT NULL,
  `contacname` varchar(250) DEFAULT NULL,
  `position` varchar(250) DEFAULT NULL,
  `telephoneext` varchar(250) DEFAULT NULL,
  `businessemail` varchar(250) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `document` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `following`
--

CREATE TABLE `following` (
  `id` int(255) NOT NULL,
  `user` int(255) DEFAULT NULL,
  `followed` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(255) NOT NULL,
  `company_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
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
  `company` int(255) DEFAULT NULL
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
  `company_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
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
  `company_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
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
  `nick` varchar(50) NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `plastname`, `mlastname`, `nick`, `age`, `email`, `telephone`, `password`, `connection`, `biography`, `image`, `termscondition`, `datejob`, `privacy`, `role`, `anonimo`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Emmanuel', 'Ruiz', 'Estrada', 'admin', 20, 'admin@admin.com', NULL, 'pruebas', '2017-01-24 20:14:38', NULL, NULL, NULL, '2017-01-24 20:14:38', NULL, 'ROLE ADMIN', '', '1', '2017-01-24 20:14:38', '2017-01-24 20:14:38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment_opinion` (`opinion_id`),
  ADD KEY `fk_comment_user` (`user_id`);

--
-- Indices de la tabla `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_companies_users` (`user_id`);

--
-- Indices de la tabla `following`
--
ALTER TABLE `following`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_following_users` (`user`),
  ADD KEY `fk_followed` (`followed`);

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
  ADD KEY `fk_likes_users` (`user`),
  ADD KEY `fk_likes_company` (`company`);

--
-- Indices de la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_notifications_users` (`user_id`);

--
-- Indices de la tabla `opinions`
--
ALTER TABLE `opinions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_opinion_company` (`company_id`),
  ADD KEY `fk_opinion_user` (`user_id`);

--
-- Indices de la tabla `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_point_company` (`company_id`),
  ADD KEY `fk_point_user` (`user_id`);

--
-- Indices de la tabla `private_messages`
--
ALTER TABLE `private_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_emmiter_privates` (`emitter`),
  ADD KEY `fk_receiver_privates` (`receiver`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_uniques_fields` (`email`,`nick`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `following`
--
ALTER TABLE `following`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comment_opinion` FOREIGN KEY (`opinion_id`) REFERENCES `opinions` (`id`),
  ADD CONSTRAINT `fk_comment_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `fk_companies_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `following`
--
ALTER TABLE `following`
  ADD CONSTRAINT `fk_followed` FOREIGN KEY (`followed`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_following_users` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

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
  ADD CONSTRAINT `fk_likes_company` FOREIGN KEY (`company`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `fk_likes_users` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `fk_notifications_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `opinions`
--
ALTER TABLE `opinions`
  ADD CONSTRAINT `fk_opinion_company` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `fk_opinion_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `points`
--
ALTER TABLE `points`
  ADD CONSTRAINT `fk_point_company` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `fk_point_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `private_messages`
--
ALTER TABLE `private_messages`
  ADD CONSTRAINT `fk_emmiter_privates` FOREIGN KEY (`emitter`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_receiver_privates` FOREIGN KEY (`receiver`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
