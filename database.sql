create database volleyball;

use volleyball;

CREATE TABLE `playerss` (
  `id` int(11) NOT NULL auto_increment,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Height` varchar(11) NOT NULL,
  `Location` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
);