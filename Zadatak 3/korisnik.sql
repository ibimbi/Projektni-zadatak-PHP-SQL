SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+01:00";

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Ime` varchar(255) NOT NULL,
  `Prezime` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Korisnickoime` varchar(255) NOT NULL,
  `Lozinka` varchar(255) NOT NULL,
  `Zemlja` char(2) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `archive` enum('Y','N') NOT NULL DEFAULT 'Y'
    ) 
ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `users` ADD PRIMARY KEY (`id`);
  
ALTER TABLE `users` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;