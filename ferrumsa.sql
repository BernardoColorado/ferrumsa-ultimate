CREATE DATABASE IF NOT EXISTS `ferrumsa` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `ferrumsa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `categorias`
--

TRUNCATE TABLE `categorias`;
--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `img`) VALUES
(1, 'Planos y Acanalados', 'planos-y-acanalados.jpg\r\n'),
(2, 'Perfiles', 'perfiles.jpg'),
(3, 'Solera', 'solera.jpg'),
(4, 'Tubería', 'tuberia.jpg'),
(5, 'Accesorios', 'accesorios.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripciones`
--

DROP TABLE IF EXISTS `descripciones`;
CREATE TABLE IF NOT EXISTS `descripciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) DEFAULT NULL,
  `texto` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3B8E30E8F760EA80` (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `descripciones`
--

TRUNCATE TABLE `descripciones`;
--
-- Volcado de datos para la tabla `descripciones`
--

INSERT INTO `descripciones` (`id`, `id_producto`, `texto`) VALUES
(1, 1, 'Contamos con una extensa gama de acabados, anchos y calibres conforme a las necesidades y expectativas del cliente.'),
(2, 1, 'Los usos del rollo de acero pueden ser variados, para acanalarse, formar perfilería y corte de cinta para transformarse en otros productos derivados del acero.'),
(3, 2, 'Corte y nivelado de lámina con variedad en calibre y largo, el ancho de la lamina puede ser de 3ft o 4ft.'),
(4, 3, 'Útil para caída de agua en techumbres'),
(5, 3, 'Capacidad estructural mediana, recomendable para fachadas y techos.'),
(6, 4, 'Cintas derivadas del corte de rollos de acero por slitter conforme al ancho requerido por el cliente.'),
(7, 5, 'Útil para estructuras de techumbres de lamina.'),
(8, 5, 'Resistencia media para cargas inferiores a los 150 kgs.'),
(9, 5, 'Usos comunes: Postes, travesaños, soportes.'),
(10, 6, 'Estructurales, esenciales para postes, y columnas.'),
(11, 6, 'Ornamentales, marcos para ventanas, puertas,etc.'),
(12, 7, 'Bastidor.'),
(13, 7, 'Riel de Puerta.'),
(14, 7, 'Manguete.'),
(15, 7, 'Tope Sencillo.'),
(16, 7, 'Tope Doble.'),
(17, 7, 'Duela.'),
(18, 8, 'Útil para caída de agua en techumbres.'),
(19, 8, 'Capacidad estructural mediana, recomendable para fachadas y techos.'),
(20, 9, 'Gran poder de cobertura.'),
(21, 9, 'Facilidad de traslape e instalación.'),
(22, 9, 'Tiene 8 crestas o canaletas en la sección total para facilitar la caída del agua.'),
(23, 9, 'Pendiente de hasta 31 grados.'),
(38, 10, 'Utilizada para facilitar los procedimientos de construcción y diseño de losas y entrepisos, se adhiere perfectamente al concreto, disminuyendo el costo de construcción y mano de obra.'),
(39, 10, 'Se recomienda utilizar como máximo calibre 22, siguiendo la normatividad del Manual de Construcción y diseño de la Ciudad de México.'),
(40, 12, 'Tomando como materia prima, lámina negra, es utilizada principalmente para trabajos de pailería, complementos estructurales de poca carga, etc.'),
(41, 13, 'Ángulo liso'),
(42, 13, 'T Sencilla.'),
(43, 13, 'Chambrana.'),
(44, 13, 'Escalonado con ceja.'),
(45, 13, 'Chambrana Cerrada'),
(46, 13, 'Marco Mosquitero.'),
(47, 13, 'T Doble.'),
(48, 13, 'Ranurado.'),
(49, 13, 'Canaleta.'),
(50, 13, 'Canaleta Ancha.'),
(51, 13, 'Plafón'),
(52, 14, 'Perfil de sección circular fabricado de lámina negra o galvanizada y con una costura de soldadura.\r\nSe utiliza para barandales, postes, panorámicos y letreros de altura media.'),
(53, 15, 'Los caballetes mejoran los tiempos de instalación de techumbres de lámina ya que facilitan la sujeción de la misma, además de dar una mejor vista aparente.'),
(54, 16, 'Los caballetes mejoran los tiempos de instalación de techumbres de lámina ya que facilitan la sujeción de la misma, además de dar una mejor vista aparente.'),
(55, 17, 'Los caballetes mejoran los tiempos de instalación de techumbres de lámina ya que facilitan la sujeción de la misma, además de dar una mejor vista aparente.');

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) DEFAULT NULL,
  `nombre` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `pdf` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_767490E6CE25AE0A` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

TRUNCATE TABLE `productos`;

INSERT INTO `productos` (`id`, `id_categoria`, `nombre`, `img`, `pdf`) VALUES
(1, 1, 'Rollos de Acero', 'rollos-de-acero.jpg', 'rollos-de-acero.pdf'),
(2, 1, 'Lámina Lisa', 'lamina-lisa.jpg', 'lamina-lisa.pdf'),
(3, 1, 'Lámina Rectangular', 'lamina-rectangular.jpg', 'lamina-rectangular.pdf'),
(4, 1, 'Cinta', 'cinta.jpg', 'cinta.pdf'),
(5, 2, 'Polín C', 'polin-c.jpg', 'polin-c.pdf'),
(6, 2, 'Peril Tubular Rectangular', 'perfil-tubular-rectangular.jpg', 'perfil-tubular-rectangular.pdf'),
(7, 2, 'Perfiles Para Puerta', 'perfiles-para-puerta.jpg', 'perfiles-para-puerta.pdf'),
(8, 1, 'Lámina Ondulada', 'lamina-ondulada.jpg', 'lamina-ondulada.pdf'),
(9, 1, 'Galvateja', 'galvateja.jpg', 'galvateja.pdf'),
(10, 1, 'Losacero', 'losacero.jpg', 'losacero.pdf'),
(12, 3, 'Solera Negra', 'solera-negra.jpg', 'solera-negra.pdf'),
(13, 2, 'Perfiles Para Ventana', 'perfiles-para-ventana.jpg', 'perfiles-para-ventana.pdf'),
(14, 4, 'Tubería Industrial', 'tuberia-industrial.jpg', 'tuberia-industrial.pdf'),
(15, 5, 'Caballete Para Teja', 'caballete-para-teja.jpg', 'caballete-para-teja.pdf'),
(16, 5, 'Caballete Liso', 'caballete-liso.jpg', 'caballete-liso.pdf'),
(17, 5, 'Caballete Dentado', 'caballete-dentado.jpg', 'caballete-dentado.pdf');

--
-- Filtros para la tabla `descripciones`
--
ALTER TABLE `descripciones`
  ADD CONSTRAINT `FK_3B8E30E8F760EA80` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `FK_767490E6CE25AE0A` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE;