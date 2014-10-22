-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Gazda: localhost
-- Timp de generare: 22 Oct 2014 la 18:14
-- Versiune server: 5.5.8
-- Versiune PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza de date: `proiect_test`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `description` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `email`, `phone_number`, `description`) VALUES
(1, 'Adriana', 'Adriana Titiu', 'blablabla', 'adrianna@yahoo.com', '747152345', 'Description'),
(3, 'Andrei', 'Andrei Moldovan', 'bllbllbll', 'andrei@yahoo.com', '747453678', 'Description'),
(4, 'Ionel', 'Ionel Xulescu', 'asdfgh45647', 'ionel@yahoo.com', '0756234567', 'Ionel''s Description'),
(6, 'Ana', 'Ana Avram', 'dg4564ghdfh', 'ana@yahoo.com', '0745234122', 'Ana''s Description'),
(7, 'Voda Stefan', 'Stefan', '0752936566', 'stefan@yahoo.com', '0752936566', 'dgfsjkhjbfklsahgfalwjbfkjabwfk');
