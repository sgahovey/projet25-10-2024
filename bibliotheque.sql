-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 25 oct. 2024 à 11:13
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `annee` year NOT NULL,
  `statut` varchar(30) NOT NULL DEFAULT 'Disponible',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`id`, `titre`, `auteur`, `genre`, `annee`, `statut`) VALUES
(1, 'Le Petit Prince', 'Antoine de Saint-Exupéry', 'Roman', '1943', 'Disponible'),
(2, '1984', 'George Orwell', 'Science-Fiction', '1949', 'Emprunté'),
(3, 'Harry Potter à l\'école des sorciers', 'J.K. Rowling', 'Fantasy', '1997', 'Disponible'),
(4, 'The Power', 'Naomi Alderman', 'Science-fiction', '2017', 'Disponible'),
(5, 'La Peste', 'Albert Camus', 'Roman', '1947', 'Emprunté'),
(6, 'Le Seigneur des Anneaux', 'J.R.R. Tolkien', 'Fantasy', '1954', 'Disponible'),
(16, 'Sapiens: Une brève histoire de l\'humanité', 'Yuval Noah Harari', 'Essai', '2011', 'Disponible'),
(8, 'L\'Étranger', 'Albert Camus', 'Roman', '1942', 'Disponible'),
(9, 'Fahrenheit 451', 'Ray Bradbury', 'Science-Fiction', '1953', 'Disponible'),
(10, 'Educated', 'Tara Westover', 'Biographie, Mémoires', '2018', 'Emprunté'),
(11, 'La Métamorphose', 'Franz Kafka', 'Nouvelle', '1915', 'Disponible'),
(12, 'The Overstory', 'Richard Powers', 'Fiction', '2018', 'Disponible'),
(13, 'The Road', 'Cormac McCarthy', 'Roman dystopique', '2006', 'Disponible'),
(14, 'The Girl on the Train', 'Paula Hawkins', 'Thriller psychologique', '2015', 'Disponible'),
(15, 'Dune', 'Frank Herbert', 'Science-Fiction', '1965', 'Emprunté'),
(17, 'Le Signal', 'Maxime Chattam', 'Thriller', '2018', 'Emprunté'),
(18, 'La vie secrète des écrivains', 'Guillaume Musso', 'Roman', '2019', 'Disponible'),
(19, 'Les Furtifs', 'Alain Damasio', 'Science-Fiction', '2019', 'Disponible'),
(20, 'Une terre promise', 'Barack Obama', 'Biographie', '2020', 'Disponible'),
(21, 'L\'Anomalie', 'Hervé Le Tellier', 'Roman', '2020', 'Disponible'),
(22, 'Le Lambeau', 'Philippe Lançon', 'Autobiographie', '2018', 'Disponible'),
(23, 'Changer: méthode', 'Edouard Louis', 'Roman', '2021', 'Emprunté'),
(24, 'Atomic Habits', 'James Clear', 'Développement personnel', '2018', 'Disponible'),
(25, 'La vie mensongère des adultes', 'Elena Ferrante', 'Roman', '2020', 'Disponible'),
(26, 'La Panthère des neiges', 'Sylvain Tesson', 'Récit', '2019', 'Disponible'),
(27, 'Minuit dans l’univers', 'Lily Brooks-Dalton', 'Science-Fiction', '2016', 'Emprunté'),
(28, 'L\'île du diable', 'Nicolas Beuglet', 'Thriller', '2021', 'Disponible'),
(29, 'La Maison des voix', 'Donato Carrisi', 'Thriller', '2020', 'Disponible'),
(30, 'Les aérostats', 'Amélie Nothomb', 'Roman', '2020', 'Disponible'),
(7, 'Le Consentement', 'Vanessa Springora', 'Autobiographie', '2020', 'Disponible'),
(31, 'Fantastique histoire d\'amour', 'Sophie Divry', 'Roman ', '2024', 'Emprunté'),
(34, 'A Game of Thrones', 'George R. R. Martin', 'Fantasy', '1996', 'Emprunté'),
(35, 'A Game of Thrones', 'George R. R. Martin', 'Fantasy', '1996', 'Emprunté'),
(36, 'The Silent Patient', 'Alex Michaelides', 'Thriller psychologique', '2019', 'Disponible'),
(37, 'Where the Crawdads Sing', 'Delia Owens', 'Fiction', '2018', 'Emprunté'),
(43, 'The Last Heir', 'John Grisham', 'Thriller juridique', '2024', 'Emprunté'),
(44, 'The Night Circus', 'Erin Morgenstern', 'Fantastique', '2011', 'Disponible'),
(45, 'Gone Girl', 'Gillian Flynn', 'Thriller psychologique', '2012', 'Disponible'),
(46, 'The Goldfinch', 'Donna Tartt', 'Fiction littéraire', '2013', 'Emprunté'),
(47, 'All the Light We Cannot See', 'Anthony Doerr', 'Fiction historique', '2014', 'Disponible'),
(48, 'The Girl on the Train', 'Paula Hawkins', 'Thriller psychologique', '2015', 'Disponible'),
(49, 'The Underground Railroad', 'Colson Whitehead', 'Fiction historique', '2016', 'Emprunté'),
(50, 'The Power', 'Naomi Alderman', 'Science-fiction', '2017', 'Disponible'),
(51, 'Circe', 'Madeline Miller', 'Fantastique', '2018', 'Disponible'),
(52, 'The Testaments', 'Margaret Atwood', 'Dystopie', '2019', 'Emprunté'),
(53, 'The Last Heir', 'John Grisham', 'Thriller juridique', '2024', 'Disponible');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
