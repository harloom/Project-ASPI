/*
SQLyog Enterprise Trial - MySQL GUI v7.11 
MySQL - 5.5.5-10.1.29-MariaDB : Database - db_aspi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_aspi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_aspi`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`username`,`password`) values ('admin','12345678');

/*Table structure for table `foto_kontes` */

DROP TABLE IF EXISTS `foto_kontes`;

CREATE TABLE `foto_kontes` (
  `id_peserta` varchar(20) DEFAULT NULL,
  `url_image` varchar(200) DEFAULT NULL,
  KEY `FK_foto_kontes` (`id_peserta`),
  CONSTRAINT `FK_foto_kontes` FOREIGN KEY (`id_peserta`) REFERENCES `peserta` (`id_peserta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `foto_kontes` */

insert  into `foto_kontes`(`id_peserta`,`url_image`) values ('P5ce48c86c9b60','5ce48c86e6ecd.png'),('P5ce4a35eb1f0c','5ce4a35ec83cf.png'),('P5ce4a35eb1f0c','5ce4a35ee9163.png'),('P5ce4a35eb1f0c','5ce4a35ef15b6.png');

/*Table structure for table `peserta` */

DROP TABLE IF EXISTS `peserta`;

CREATE TABLE `peserta` (
  `id_peserta` varchar(20) NOT NULL,
  `nama_depan` varchar(50) DEFAULT NULL,
  `url_imageKTP` varchar(200) DEFAULT NULL,
  `no_handphone` varchar(16) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(200) DEFAULT NULL,
  `asal_kota` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `tgl_pendaftaran` date NOT NULL,
  PRIMARY KEY (`id_peserta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `peserta` */

insert  into `peserta`(`id_peserta`,`nama_depan`,`url_imageKTP`,`no_handphone`,`alamat`,`nama_belakang`,`jenis_kelamin`,`asal_kota`,`email`,`tgl_pendaftaran`) values ('P5ce48c86c9b60','ilham','5ce48c86c9b9d.jpg','8116921534','jl samosir, muara bungo, indonesia','solehudin','Pria','Bandar Lampung','harloom19@gmail.com','2019-05-22'),('P5ce4a35eb1f0c','Harloom','5ce4a35eb1f78.png','8116921534','jl samosir, muara bungo, indonesia','Eranta','Pria','Metro','harloom19@gmail.com','2019-05-22');

/* Procedure structure for procedure `ambil_foto` */

/*!50003 DROP PROCEDURE IF EXISTS  `ambil_foto` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ambil_foto`(IN _id_peserta VARCHAR(20))
BEGIN
	select *from foto_kontes where id_peserta= _id_peserta;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `daftar_peserta` */

/*!50003 DROP PROCEDURE IF EXISTS  `daftar_peserta` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `daftar_peserta`(IN id_peserta_ VARCHAR(20),IN nama VARCHAR(50),
	IN urlImage VARCHAR(200),
	IN noHandphone VARCHAR(16),
	IN alamat VARCHAR(100),
	IN namaBelakang VARCHAR(50),
	IN jenisK VARCHAR(200),
	IN asalKota VARCHAR(50),IN email VARCHAR(30),
	IN tanggal DATE)
BEGIN
	insert into peserta values (id_peserta_,nama,urlImage,noHandphone,alamat,namaBelakang,jenisK,asalKota,email,tanggal);
	select id_peserta From peserta	where id_peserta = id_peserta_ ;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `insert_foto_kontes` */

/*!50003 DROP PROCEDURE IF EXISTS  `insert_foto_kontes` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_foto_kontes`(IN id_p VARCHAR(20),IN url_img VARCHAR(200))
BEGIN
	insert into foto_kontes values (id_p,url_img);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `jumlah_peserta` */

/*!50003 DROP PROCEDURE IF EXISTS  `jumlah_peserta` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `jumlah_peserta`()
BEGIN
 SELECT COUNT(*) from peserta;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `lihat_detail_peserta` */

/*!50003 DROP PROCEDURE IF EXISTS  `lihat_detail_peserta` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `lihat_detail_peserta`(IN _id_peserta varchar(20))
BEGIN
 SELECT * from peserta where id_peserta = _id_peserta;
END */$$
DELIMITER ;

/* Procedure structure for procedure `lihat_peserta` */

/*!50003 DROP PROCEDURE IF EXISTS  `lihat_peserta` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `lihat_peserta`()
BEGIN
 SELECT * from peserta;
END */$$
DELIMITER ;

/* Procedure structure for procedure `login` */

/*!50003 DROP PROCEDURE IF EXISTS  `login` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `login`(IN _usernmae varchar(20),IN _password varchar(50))
BEGIN
	select *from admin where username = _usernmae AND password = _password;
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `tolak_peserta` */

/*!50003 DROP PROCEDURE IF EXISTS  `tolak_peserta` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `tolak_peserta`(IN _id_peserta varchar(20))
BEGIN
		DELETE  from peserta where id_peserta = _id_peserta;
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
