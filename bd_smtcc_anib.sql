-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-12-2022 a las 02:20:43
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_smtcc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inven_sis_riego`
--

DROP TABLE IF EXISTS `inven_sis_riego`;
CREATE TABLE IF NOT EXISTS `inven_sis_riego` (
  `ID` int(7) UNSIGNED NOT NULL AUTO_INCREMENT,
  `DEPARTAMENTO` varchar(10) COLLATE utf32_bin DEFAULT NULL,
  `SISTEM_FUNC_N` int(4) DEFAULT NULL,
  `SISTEM_FUNC_PERCENT` decimal(5,2) DEFAULT NULL,
  `USUARIOS_FAM_N` int(7) DEFAULT NULL,
  `USUARIOS_FAM_PERCENT` decimal(5,2) DEFAULT NULL,
  `AREA_HA` int(7) DEFAULT NULL,
  `AREA_PERCENT` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Volcado de datos para la tabla `inven_sis_riego`
--

INSERT INTO `inven_sis_riego` (`ID`, `DEPARTAMENTO`, `SISTEM_FUNC_N`, `SISTEM_FUNC_PERCENT`, `USUARIOS_FAM_N`, `USUARIOS_FAM_PERCENT`, `AREA_HA`, `AREA_PERCENT`) VALUES
(1, 'CHUQUISACA', 739, '13.10', 20308, '7.10', 29869, '9.50'),
(2, 'COCHABAMBA', 1337, '23.70', 114948, '40.40', 108734, '34.60'),
(3, 'LA PAZ', 1058, '18.70', 63573, '22.30', 56183, '17.90');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_proy`
--

DROP TABLE IF EXISTS `registro_proy`;
CREATE TABLE IF NOT EXISTS `registro_proy` (
  `ID` int(7) NOT NULL AUTO_INCREMENT,
  `TIPO_REG` varchar(32) COLLATE utf32_bin DEFAULT NULL,
  `INSTITUCION` varchar(32) COLLATE utf32_bin DEFAULT NULL,
  `TIPO_INST` varchar(32) COLLATE utf32_bin DEFAULT NULL,
  `NOMBRE_CONT` varchar(32) COLLATE utf32_bin DEFAULT NULL,
  `APELLIDO_CONT` varchar(32) COLLATE utf32_bin DEFAULT NULL,
  `CARGO` varchar(32) COLLATE utf32_bin DEFAULT NULL,
  `DIRECCION` varchar(32) COLLATE utf32_bin DEFAULT NULL,
  `CIUDAD` varchar(32) COLLATE utf32_bin DEFAULT NULL,
  `TELF` varchar(32) COLLATE utf32_bin DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `senari`
--

DROP TABLE IF EXISTS `senari`;
CREATE TABLE IF NOT EXISTS `senari` (
  `ID` int(7) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TITULAR` varchar(64) COLLATE utf32_bin DEFAULT NULL,
  `DEPARTAMENTO` varchar(16) COLLATE utf32_bin DEFAULT NULL,
  `FUENTE` varchar(16) COLLATE utf32_bin DEFAULT NULL,
  `TIPO_FUENTE` varchar(32) COLLATE utf32_bin DEFAULT NULL,
  `OBRA` varchar(32) COLLATE utf32_bin DEFAULT NULL,
  `TIPO_OBRA` varchar(16) COLLATE utf32_bin DEFAULT NULL,
  `SUPERFICIE_HA` int(16) DEFAULT NULL,
  `UTM` geometry DEFAULT NULL,
  `FAMILIAS` int(16) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Volcado de datos para la tabla `senari`
--

INSERT INTO `senari` (`ID`, `TITULAR`, `DEPARTAMENTO`, `FUENTE`, `TIPO_FUENTE`, `OBRA`, `TIPO_OBRA`, `SUPERFICIE_HA`, `UTM`, `FAMILIAS`) VALUES
(1, 'ASOCIACION DE REGANTES DE LA REPRESA DE CH\'ALLA MAYU', 'COCHABAMBA', 'QUEBRADA', 'CH\'ALLA MAYU', 'CH\'ALLA MAYU', 'PRESA', 300, NULL, 144),
(2, 'ASOCIACION DE REGANTES SISTEMA DE RIEGO MACHU MITA', 'COCHABAMBA', 'KHORA', 'RIO', 'LAGUNA MAYU', 'PRESA', NULL, NULL, 950);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sup_manejo_forest`
--

DROP TABLE IF EXISTS `sup_manejo_forest`;
CREATE TABLE IF NOT EXISTS `sup_manejo_forest` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `TIPO_USUARIO` varchar(16) COLLATE utf32_bin DEFAULT NULL,
  `AÑO` int(4) DEFAULT NULL,
  `SUP_HA` int(7) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Volcado de datos para la tabla `sup_manejo_forest`
--

INSERT INTO `sup_manejo_forest` (`ID`, `TIPO_USUARIO`, `AÑO`, `SUP_HA`) VALUES
(1, 'CAMPESINO', 2016, 205060),
(2, 'CAMPESINO', 2017, 80782),
(3, 'CAMPESINO', 2018, 58834),
(4, 'CAMPESINO', 2019, 104233);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uso_agricola`
--

DROP TABLE IF EXISTS `uso_agricola`;
CREATE TABLE IF NOT EXISTS `uso_agricola` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `DEPARTAMENTO` varchar(10) COLLATE utf32_bin DEFAULT NULL,
  `PROYECTOS` int(4) DEFAULT NULL,
  `AREA_HA` int(6) DEFAULT NULL,
  `FAMILIAS` int(6) DEFAULT NULL,
  `COST_BS` int(16) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Volcado de datos para la tabla `uso_agricola`
--

INSERT INTO `uso_agricola` (`ID`, `DEPARTAMENTO`, `PROYECTOS`, `AREA_HA`, `FAMILIAS`, `COST_BS`) VALUES
(1, 'COCHABAMBA', 584, 65701, 59004, 2745172200),
(2, 'SANTA CRUZ', 706, 61604, 18334, 1205506825);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
