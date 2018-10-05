

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `siswa` (
  `nama` text NOT NULL,
  `nim` int(25) NOT NULL,
  `tgl_lahir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `siswa` (`nama`, `nim`, `tgl_lahir`) VALUES
('Jinggo', 1235, '2018-10-08'),
('Laemgogo', 1243, '2018-10-08');

ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;
