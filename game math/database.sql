create database gamemath;
use gamemath;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `Hall_of_Fame` (
  `no` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Hall_of_Fame` (`no`, `nama`, `score`) VALUES
(1, 'a', 30),

ALTER TABLE `Hall_of_Fame`
  ADD PRIMARY KEY (`no`);

ALTER TABLE `Hall_of_Fame`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

