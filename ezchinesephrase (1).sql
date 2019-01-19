-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 08:35 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezchinesephrase`
--

-- --------------------------------------------------------

--
-- Table structure for table `chinesephrase`
--

CREATE TABLE `chinesephrase` (
  `id` int(11) NOT NULL,
  `phrase` varchar(255) CHARACTER SET utf8 NOT NULL,
  `translation` varchar(255) CHARACTER SET utf8 NOT NULL,
  `audioChinese` varchar(255) CHARACTER SET utf8 NOT NULL,
  `audioEnglish` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chinesephrase`
--

INSERT INTO `chinesephrase` (`id`, `phrase`, `translation`, `audioChinese`, `audioEnglish`) VALUES
(1, '你是学生吗？', 'Are you a student?', '../Chinese phrase/are u student.m4a', ''),
(2, '你还好吗?', 'Are you okay?', '../Chinese phrase/are u ok.m4a', ''),
(3, '呼叫警察!', 'Call the police!', '../Chinese phrase/call the police.m4a', ''),
(4, '我能使用网络吗？', 'Can I use the internet?', '../Chinese phrase/may I use the internet.m4a', ''),
(5, '能复述一遍吗？', 'Could you repeat that one more time?', '../Chinese phrase/can you repeat that one more time.m4a', ''),
(6, '你有学生的折扣吗？', 'Do you have discounts for students?', '../Chinese phrase/could u have discount for student.m4a', ''),
(7, '你讲英语吗？', 'Do you speak English?', '../Chinese phrase/do u speak English.m4a', ''),
(8, '你到这里来吗？', 'Do you turn up here?', '../Chinese phrase/do u turn up here.m4a', ''),
(9, '打扰一下!', 'Excuse me!', '../Chinese phrase/excuse me.m4a', ''),
(10, '一切都会好!', 'Get well soon!', '../Chinese phrase/get well soon.m4a', ''),
(11, '走开!', 'Go away!', '../Chinese phrase/go away.m4a', ''),
(12, '下午好!', 'Good afternoon!', '../Chinese phrase/good afternoon.m4a', ''),
(13, '晚上好!', 'Good evening!', '../Chinese phrase/good evening.m4a', ''),
(14, '早上好!', 'Good morning!', '../Chinese phrase/good morning.m4a', ''),
(15, '晚安!', 'Good night!', '../Chinese phrase/good night.m4a', ''),
(16, '好或者坏?', 'Good or bad?', '../Chinese phrase/good or bad.m4a', ''),
(17, '新年快乐！', 'Happy New Year!', '../Chinese phrase/happy new year.m4a', ''),
(18, '你有来过美国吗？', 'Have you ever been to the United States?', '../Chinese phrase/have you even been to the US.m4a', ''),
(19, '你好吗？', 'How are you?', '../Chinese phrase/how are u.m4a', ''),
(20, '你在这里住多久了？', 'How long have you lived here?', '../Chinese phrase/how long have u lived here.m4a', ''),
(21, '多少钱?', 'How much is this?', '../Chinese phrase/how much.m4a', ''),
(22, '你多少岁了？', 'How old are you?', '../Chinese phrase/how old are u.m4a', ''),
(23, '我是一位旅行者。', 'I am a traveler.', '../Chinese phrase/im the traveler.m4a', ''),
(24, '我找不到我的行李。', 'I cannot find my luggage.', '../Chinese phrase/I cannot find my luggage.m4a', ''),
(25, '我身体感觉不适。', 'I don\'t feel good.', '../Chinese phrase/I dont feel good.m4a', ''),
(26, '我不知道!', 'I don\'t know!', '../Chinese phrase/idk.m4a', ''),
(27, '我很好。', 'I\'m fine.', '../Chinese phrase/im fine.m4a', ''),
(28, '我来自美国。', 'I\'m from USA.', '../Chinese phrase/im from US.m4a', ''),
(29, '对不起!', 'I\'m sorry!', '../Chinese phrase/im sry.m4a', ''),
(30, '好久不见!', 'Long time no see!', '../Chinese phrase/long time no see.m4a', ''),
(31, '我能有你的电话号码吗？', 'May I have your phone number?', '../Chinese phrase/may I have your phone number.m4a', ''),
(32, '我的名字是...', 'My name is...', '../Chinese phrase/im name is....m4a', ''),
(33, '请帮助我!', 'Please help me!', '../Chinese phrase/please help me.m4a', ''),
(34, '说的慢一点!', 'Please speak slowly!', '../Chinese phrase/please speak slow.m4a', ''),
(35, '很高兴见到你!', 'Pleased to meet you!', '../Chinese phrase/Pleased to meet u.m4a', ''),
(36, '再见!', 'See you later!', '../Chinese phrase/see u later.m4a', ''),
(37, '谢谢!', 'Thank you!', '../Chinese phrase/thank u.m4a', ''),
(38, '你的爱好是什么？', 'What are your hobbies?', '../Chinese phrase/what is your hobbie.m4a', ''),
(39, '你叫什么名字？', 'What\'s your name?', '../Chinese phrase/what is your name.m4a', ''),
(40, '你在哪里工作？', 'Where do you work?', '../Chinese phrase/where do u work.m4a', ''),
(41, '厕所在哪里？', 'Where is the bathroom?', '../Chinese phrase/where is the bathroom.m4a', ''),
(42, '医院在哪里？', 'Where is the nearest hospital?', '../Chinese phrase/where is the nearest hospital.m4a', ''),
(43, '最近的旅店在哪里？', 'Where is the nearest hotel?', '../Chinese phrase/where is the nearest hotel.m4a', ''),
(44, '最近的交通在哪里？', 'Where is the nearest transportation?', '../Chinese phrase/where is the nearest transportation.m4a', ''),
(45, '最好吃的地方在哪里？', 'Where\'s the best place to eat?', '../Chinese phrase/where is the best place to eat.m4a', ''),
(46, '谁是最好的导游？', 'Who is the best tour guide?', '../Chinese phrase/who is the best tour guide.m4a', ''),
(47, '不用谢!', 'You are welcome!', '../Chinese phrase/u r Welcome.m4a', ''),
(48, '你今天看起来很好！', 'You look good today!', '../Chinese phrase/you looks good today.m4a', ''),
(49, '我应该避免什么地方？', 'What places should I avoid?', '../Chinese phrase/what place should I void.m4a', ''),
(50, '你能载我一程吗？', 'Can you give me a ride?', '../Chinese phrase/can u give me a ride.m4a', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chinesephrase`
--
ALTER TABLE `chinesephrase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chinesephrase`
--
ALTER TABLE `chinesephrase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
