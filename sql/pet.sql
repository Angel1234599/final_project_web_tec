-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 04:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animal_adoption`
--

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `idPet` int(11) NOT NULL,
  `idTypePet` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `idStatus` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`idPet`, `idTypePet`, `name`, `age`, `image`, `idStatus`, `iduser`) VALUES
(1, 1, 'Haku', 6, '0', 1, NULL),
(2, 1, 'Simba', 6, '0', 1, NULL),
(3, 2, 'Polo', 6, '0', 1, NULL),
(8, 2, 'Test', 10, '', 1, 3),
(9, 2, 'Test4', 10, '66717_304750619628163_1226538076_n.jpg', 1, 3),
(10, 2, 'Test4', 10, '', 1, 3),
(11, 2, 'Test4', 10, '66717_304750619628163_1226538076_n.jpg', 1, 3),
(12, 2, 'Test4', 10, '66717_304750619628163_1226538076_n.jpg', 1, 3),
(13, 2, 'Test4', 10, '66717_304750619628163_1226538076_n.jpg', 1, 3),
(14, 2, 'Test4', 10, '1383224_415173938604950_328481151_n.jpg', 1, 3),
(15, 1, 'ali', 20, '', 1, 3),
(16, 1, 'ali', 20, '', 1, 3),
(17, 2, 'tommy', 10, '1424504_393659730737251_2003389747_n.jpg', 2, 3),
(18, 2, 'tommy', 10, '1424504_393659730737251_2003389747_n.jpg', 2, 3),
(19, 2, 'billy', 20, '11754928_494538200720932_6711588559346302309_o.jpg', 3, 3),
(20, 2, 'billy', 20, '11754928_494538200720932_6711588559346302309_o.jpg', 3, 3),
(21, 2, 'billy', 20, '11754928_494538200720932_6711588559346302309_o.jpg', 3, 3),
(22, 2, 'billy3', 20, '1185203_466072743491763_766222280_n.jpg', 3, 3),
(36, 2, 'tommy', 10, '1424504_393659730737251_2003389747_n.jpg', 2, 4),
(37, 2, 'FinalPet', 20, '1424504_393659730737251_2003389747_n.jpg', 2, 4),
(38, 1, 'Ali malpara', 20, '1545186_410027632433794_1564989602_n.jpg', 1, 4);

--
-- Triggers `pet`
--
DELIMITER $$
CREATE TRIGGER `pet_trig` AFTER UPDATE ON `pet` FOR EACH ROW begin

    IF OLD.idstatus != NEW.idstatus THEN

       insert into history_adoption
        values(0,NEW.idpet,NEW.iduser,NEW.idstatus,NOW());
       
	END IF;
       
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`idPet`),
  ADD KEY `FK_pet_petType` (`idTypePet`),
  ADD KEY `FK_pet_status` (`idStatus`),
  ADD KEY `FK_pet_user` (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `idPet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `FK_pet_petType` FOREIGN KEY (`idTypePet`) REFERENCES `pettype` (`idTypePet`),
  ADD CONSTRAINT `FK_pet_status` FOREIGN KEY (`idStatus`) REFERENCES `statuspet` (`idStatus`),
  ADD CONSTRAINT `FK_pet_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
