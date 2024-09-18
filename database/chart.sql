-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2024 at 07:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chart`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `senderId` int(10) NOT NULL,
  `receiverId` int(10) NOT NULL,
  `message` text NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `senderId`, `receiverId`, `message`, `time`) VALUES
(1, 26, 32, 'Habari yako Eliasi', '21:03:11 17-09-2024 Tuesday'),
(2, 32, 26, 'Salma habari ya wapi regina ', '21:09:30 17-09-2024 Tuesday'),
(3, 26, 32, 'Nipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuizi ', '21:18:00 17-09-2024 Tuesday'),
(4, 32, 26, 'Niko2  Dar vipi mshkaji wako yuko wapi skuizi', '21:20:41 17-09-2024 Tuesday'),
(5, 26, 32, 'Yupi tena?', '21:21:22 17-09-2024 Tuesday'),
(6, 32, 26, 'Revacolizer🤣🤣', '21:22:27 17-09-2024 Tuesday'),
(7, 4, 26, 'Mambo ni vipi regina', '12:47:48 18-09-2024 Wednesday'),
(8, 26, 4, 'pouwa', '14:50:55 18-09-2024 Wednesday'),
(9, 26, 32, 'mbona ni kama simkumbuki tena mimi jaman ', '16:11:44 18-09-2024 Wednesday'),
(10, 26, 32, 'Habari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jaman\n\nHabari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jaman\n\nHabari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jaman\n\nHabari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jaman\n\nHabari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jamanHabari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jamanHabari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jamanHabari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jamanHabari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jamanHabari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jamanHabari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jamanHabari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jamanHabari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jamanHabari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jamanHabari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jamanHabari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jamanHabari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jamanHabari yako EliasiSalma habari ya wapi reginaNipo2 Morogoro nasoma soma2 best na wew Elia wapi sikuiziNiko2 Dar vipi mshkaji wako yuko wapi skuiziYupi tena?Revacolizer🤣🤣mbona ni kama simkumbuki tena mimi jaman', '17:19:19 18-09-2024 Wednesday'),
(11, 26, 0, 'oyy', '18:18:20 18-09-2024 Wednesday'),
(12, 4, 25, 'oyiiiii', '18:46:29 18-09-2024 Wednesday'),
(13, 4, 33, 'Hellow habari ya huko?', '19:29:31 18-09-2024 Wednesday'),
(14, 33, 4, 'salama wazima nyie   huko?', '19:32:04 18-09-2024 Wednesday'),
(15, 4, 33, 'Tunamshukuru mungu uzima upo          aisee', '19:33:37 18-09-2024 Wednesday'),
(16, 4, 33, 'Naomba link ya smart programers', '19:34:34 18-09-2024 Wednesday'),
(17, 4, 33, 'Kama utakuwa nayo lakini', '19:35:06 18-09-2024 Wednesday'),
(18, 33, 4, 'Kunae jamaa alikuwa nayo lakini iliexpire tayari ', '19:38:05 18-09-2024 Wednesday'),
(19, 33, 4, 'Au ngoja niwashtue wale maadmin watanifanyia wepesi hapo nadhani', '19:39:52 18-09-2024 Wednesday'),
(20, 4, 33, 'pouw pouw fanya ivyo', '19:40:49 18-09-2024 Wednesday'),
(21, 33, 4, 'Haina ubaya boss wangu', '19:45:46 18-09-2024 Wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` double NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `tel`, `password`) VALUES
(4, 'Emmanueli', 'imaxshine9@gmail.com', 745173574, '1234567'),
(5, 'Adamu', 'adamu56@gmail.com', 677489945, 'daudi_002'),
(8, 'jonasi', 'jona33@gmail.com', 674455321, '202020'),
(15, 'Mohamed', 'mohamed78@gmail.com', 756454543, '450123'),
(24, 'Rama', 'rama@gmail.com', 745173574, '123456'),
(25, 'Amani', 'amani@gmail.com', 745173574, '123455'),
(26, 'regina ', 'regina@gmail.com', 745173574, 'regina01'),
(27, 'Bakari', 'bakari45@gmail.com', 784019999, '12341234'),
(28, 'ester', 'ester22@gmail.com', 745456766, '595909'),
(29, 'elisha', 'elisha@gmail.com', 667789908, '67899456'),
(30, 'fredy', 'fredy667@gmail.com', 745667221, '544667'),
(31, 'mohamedi', 'mohamedi09@gmail.com', 745671242, 'mohame45'),
(32, 'eliasi', 'eliasi345@gmail.com', 627381678, 'eliasi78'),
(33, 'chavda', 'chavi34@gmail.com', 622336338, 'chavi@88');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
