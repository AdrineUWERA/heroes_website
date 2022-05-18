-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 12:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heroes_website_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `heroes_table`
--

CREATE TABLE `heroes_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `real_name` varchar(255) NOT NULL,
  `last_seen` varchar(255) NOT NULL,
  `short_bio` text NOT NULL,
  `long_bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heroes_table`
--

INSERT INTO `heroes_table` (`id`, `name`, `real_name`, `last_seen`, `short_bio`, `long_bio`) VALUES
(6, 'Professor X', 'Charles Xavier', 'Avengers Vs. X-Men #11', 'Charles Xavier is the founder of the X-Men and was the original headmaster of the Xavier Institute of Higher Learning.', 'Professor Charles Xavier is the creator of the X-Men and founder of the Xavier School for Gifted Youngsters. His dream of peaceful coexistence between mutants and humanity has long been the driving force for the X-Men. An immensely powerful telepath and scientific genius, Xavier was among the world&#039;s greatest masterminds. Killed at the hands of a Phoenix crazed Cyclops, Xavier&#039;s memory and dream still remains and motivates his X-Men to keep fighting for a world that fears and hates them.'),
(7, 'Cyclops', 'Scott Summers', 'All New X-Men and Uncanny X-Men', 'Scott Summers was Xavier&#039;s first recruit and often the group&#039;s field leader. Former headmaster of the Xavier Institute, former leader of the X-Factor, and current leader of the Uncanny X-Men.', 'The first X-Man, Scott Summers possesses the mutant ability to fire powerful concussive blasts through his eyes that act as a portal to another dimension full of the force that makes up his optic blast. He is visually distinctive for the ruby quartz visor he wears to control his devastating power. A born leader, Cyclops succeeded his mentor Professor X to command the X-Men.'),
(8, 'Iceman', 'Robert &#039;&#039;Bobby&#039;&#039; Louis Drake', 'Amazing X-Men', 'Robert &quot;Bobby&quot; Drake is the second and youngest member of the original team. Former member of the Champions, the Defenders, and X-Factor. Currently, he is serving as a senior staff member at the Jean Grey School for Higher Learning.', 'The youngest member of the original X-Men. Bobby is an Omega-level mutant, although it took some help from Emma Frost to realize this. Bobby&#039;s control of ice is vast; he can create shields, clones, spikes, slides and also freeze others. He currently sails with the Marauders out of Krakoa.'),
(9, 'Angel', 'Warren Worthington III', 'Wolverine and the X-Men', 'A mutant and original member of the X-Men, Warren received his angelic wings at a young age along with a unique healing factor in his blood. After being twisted into a weapon of Apocalypse, Warren became the cold and distant Archangel. In the years since then, he&#039;s gone back and forth between his two identities.', 'The youngest member of the original X-Men. Bobby is an Omega-level mutant, although it took some help from Emma Frost to realize this. Bobby&#039;s control of ice is vast; he can create shields, clones, spikes, slides and also freeze others. He currently sails with the Marauders out of Krakoa.'),
(14, 'Beast', 'Dr. Henry &quot;Hank&quot; McCoy', 'Amazing X-Men and New Avengers', 'Dr. Henry &quot;Hank&quot; McCoy was the original team&#039;s scientist. Former member of the Avengers, the Defenders and X-Factor. Currently, he is the vice principal of the Jean Grey School for Higher Learning, he is also an agent of S.W.O.R.D and the Illuminati.', 'A founding member of the X-Men, Dr. Hank McCoy is a mutant possessing animal-like strength and agility. Despite being covered in blue fur and resembling a ferocious beast, Hank possesses an astounding intellect and a superb wit. He is currently a key member of X-Force.'),
(16, 'Mimic', 'Calvin Montgomery Rankin', 'X-Men: Legacy', 'Calvin Montgomery Rankin was, at first, a villain to the X-Men, after an unsuccesful attempt to enhance his power, Professor X erased his memory. Former member of Norman Osborn&#039;s Dark X-Men.', 'Mimic is a super-human with the ability to copy the powers and abilities of others. He was the first new recruit to the original X-Men team and later a member of the Brotherhood of Evil Mutants, Excalibur and Norman Osborn&#039;s X-Men team before rejoining the X-Men at the Jean Grey School for Higher Learning.'),
(17, 'Morph', 'Kevin Sydney', 'The X-Men, Vol. 1 #42 (1968)(dies while impersonating Professor X)', 'Kevin Sydney joins the X-Men while impersonating Professor X under the request of Charles Xavier himself. a former member of thee villainous Factor Three.', 'Morph is a former X-Man and the shape-shifting funny-man of the Exiles. Not much is known about Changeling&#039;s past. It is known that he was reluctant at what life had given him and eventually allied himself with a shady organization known as Factor Three. This organization was bent on making mutants the dominant species instead of humanity, and was bent on world-domination. This brought him and Factor Three into contact with the mutant-superhero team known as the X-men. The members fought each other on some occasion, but Changeling eventually fled the organization when he realized that the leader of his band was actually an alien. He was not heard from for some time.'),
(19, 'Tony', 'Brighton Mboya', '2022', 'He wants to be like Adrine :)', 'He wants to be like Adrine :) lOL');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `name`, `username`, `email`, `password`, `role`) VALUES
(9, 'Kundai Chasinda', 'kundai_ch', 'k.chasinda@alustudent.com', '6fd49b4ae65553b200182fc57f31b284606ed88b', 'admin'),
(10, 'Patrick MUSHIMIYE', 'patrick_m', 'p.mushimiy@alustudent.com', 'cbb7353e6d953ef360baf960c122346276c6e320', 'user'),
(11, 'Abraham Diress', 'abraham_di', 'a.diress@alustudent.com', '1517d545cc11283e2360bdb315c68b19bd465256', 'admin'),
(12, 'Adrine UWERA', 'adrine_u', 'a.uwera@alustudent.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'admin'),
(13, 'Adrine Adu UWERA', 'adura', 'uweraadrine3@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `heroes_table`
--
ALTER TABLE `heroes_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `heroes_table`
--
ALTER TABLE `heroes_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
