-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 05:49 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `englishchinesewords`
--

-- --------------------------------------------------------

--
-- Table structure for table `englishchinesewords`
--

CREATE TABLE `englishchinesewords` (
  `English` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Chinese` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Definition` varchar(255) CHARACTER SET utf8 NOT NULL,
  `audioChinese` varchar(255) CHARACTER SET utf8 NOT NULL,
  `audioEnglish` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `englishchinesewords`
--

INSERT INTO `englishchinesewords` (`English`, `Chinese`, `Definition`, `audioChinese`, `audioEnglish`) VALUES
('Aunt', '阿姨', 'Sister of one\'s parents.', '../Chinese words/aunt.m4a', '../English words/aunt.mp3'),
('Bank', '银行', 'Financial institution where one can deposit or withdraw currency.', '../Chinese words/bank.m4a', '../English words/bank.mp3'),
('Barber', '理发', 'Person who cuts hair.', '../Chinese words/barber.m4a', '../English words/barber.mp3'),
('Bathroom', '浴室', 'Room containing a toilet and sink.', '../Chinese words/bathroom.m4a', '../English words/bethroom.mp3'),
('Book', '书', 'Written or printed work containing pages glued or sown together and bound in covers.', '../Chinese words/book.m4a', '../English words/book.mp3'),
('Bus', '巴士', 'Large motor vehicle that carries passengers.', '../Chinese words/bus.m4a', '../English words/bus.mp3'),
('Children', '孩子', 'Offspring of two people in love. ', '../Chinese words/children.m4a', '../English words/children.mp3'),
('Computer', '电脑', 'Electronic device for storing and processing data. ', '../Chinese words/computer.m4a', '../English words/computer.mp3'),
('Cousin', '表兄弟', 'Child of one\'s uncle or aunt.', '../Chinese words/cousin.m4a', '../English words/cousin.mp3'),
('Down', '下', 'Lower place or position.', '../Chinese words/down.m4a', '../English words/down.mp3'),
('Family', '家庭', 'Group consisting of parents and children living together.', '../Chinese words/family.m4a', '../English words/family.mp3'),
('Father', '爸爸', 'Man in relation to his natural child/children. ', '../Chinese words/father.m4a', '../English words/father.mp3'),
('Festival', '节日', 'Day or period of celebration.', '../Chinese words/festival.m4a', '../English words/festival.mp3'),
('Food', '食物', 'Consumable nutritious substance that all living organisms need to survive. ', '../Chinese words/food.m4a', '../English words/food.mp3'),
('Friends', '朋友', 'Person one knows and trust through a bond of mutual affection. ', '../Chinese words/friend.m4a', '../English words/friends.mp3'),
('Grandma', '奶奶、外婆', 'Mother of one\'s parents.', '../Chinese words/grandma.m4a', '../English words/grandma.mp3'),
('Grandpa', '爷爷、外公', 'Father of one\'s parents.', '../Chinese words/grandpa.m4a', '../English words/grandpa.mp3'),
('Groceries', '杂货', 'Items, usually food or drinks, bought from a local store.', '../Chinese words/grocery.m4a', '../English words/groceries.mp3'),
('Hello', '你好', 'An everyday greeting between two people.', '../Chinese words/hello.m4a', '../English words/hello.mp3'),
('Help', '帮助', 'Assisting one or needing assistance. ', '../Chinese words/help.m4a', '../English words/help.mp3'),
('Hospital', '医院', 'Institution that provides medical and surgical treatment for the sick and injured.', '../Chinese words/hospital.m4a', '../English words/hospital.mp3'),
('Identification', '身份证', 'A person\'s identity. ', '../Chinese words/ID.m4a', '../English words/identification.mp3'),
('Left', '左', 'Towards the west side of a person\'s point of view.', '../Chinese words/left.m4a', '../English words/left.mp3'),
('Luggage', '行李', 'Bag containing one\'s personal belongings when traveling. ', '../Chinese words/luggage.m4a', '../English words/luggage.mp3'),
('Man', '男人', 'Adult human male.', '../Chinese words/man.m4a', '../English words/man.mp3'),
('Map', '地图', 'Diagrammatic representation of a geographical area of land or sea. ', '../Chinese words/map.m4a', '../English words/map.mp3'),
('Maybe', '可能', 'Possibly.', '../Chinese words/maybe.m4a', '../English words/maybe.mp3'),
('Mother', '妈妈', 'Woman related to her natural child/children. ', '../Chinese words/mother.m4a', '../English words/mother.mp3'),
('No', '否', 'A negative response to a question, statement, etc. ', '../Chinese words/no.m4a', '../English words/no.mp3'),
('Phone', '电话', 'Device used to communicate with someone from long range. ', '../Chinese words/phone.m4a', '../English words/phone.mp3'),
('Plane', '飞机', 'Aircraft used to travel long distances. ', '../Chinese words/plane.m4a', '../English words/plane.mp3'),
('Please', '拜托', 'Used in polite requests or questions. ', '../Chinese words/please.m4a', '../English words/please.mp3'),
('Police', '警察', 'Civil force of a national or local government charged with detecting and preventing crime as well as maintaining public order. ', '../Chinese words/police.m4a', '../English words/police.mp3'),
('Restaurant', '餐厅', 'Place where people pay to sit and eat cooked meals. ', '../Chinese words/restaurant.m4a', '../English words/restaurant.mp3'),
('Right', '右', 'Towards the east side of a person\'s point of view.', '../Chinese words/right.m4a', '../English words/right.mp3'),
('School', '学校', 'Institution for educating children. ', '../Chinese words/school.m4a', '../English words/school.mp3'),
('Sorry', '对不起', 'An apology for one\'s actions.', '../Chinese words/sorry.m4a', '../English words/sorry.mp3'),
('Stop', '停止', 'An action to come to an end. ', '../Chinese words/stop.m4a', '../English words/stop.mp3'),
('Store', '商店', 'Retail establishment that sells items to the public.', '../Chinese words/store.m4a', '../English words/store.mp3'),
('Street', '街道', 'Public road in a city or town ', '../Chinese words/street.m4a', '../English words/street.mp3'),
('Taxi', '的士', 'Form of transportation used to convey passengers in return for payment. ', '../Chinese words/taxi.m4a', '../English words/taxi.mp3'),
('Television', '电视', 'Device that receives signals and reproduces them on a screen.', '../Chinese words/television.m4a', '../English words/television.mp3'),
('Time', '时间', 'Indefinite continued progress of existence measured in hours and minutes.', '../Chinese words/time.m4a', '../English words/time.mp3'),
('Trains', '火车', 'Series of railroad cars moved by a large locomotive or integral motors.', '../Chinese words/train.m4a', '../English words/trains.mp3'),
('Translator', '翻译器', 'Person capable of translating one language to another. ', '../Chinese words/translator.m4a', '../English words/translator.mp3'),
('Turn', '转向', 'Act of moving in a circular direction around an axis or point.', '../Chinese words/turn.m4a', '../English words/turn.mp3'),
('Uncle', '叔叔', 'Brother of one\'s parents.', '../Chinese words/uncle.m4a', '../English words/uncle.mp3'),
('Up', '上', 'Towards the sky or a higher position.', '../Chinese words/up.m4a', '../English words/up.mp3'),
('Woman', '女人', 'Adult human female.', '../Chinese words/woman.m4a', '../English words/woman.mp3'),
('Yes', '是', 'An affirmative response.', '../Chinese words/yes.m4a', '../English words/yes.mp3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `englishchinesewords`
--
ALTER TABLE `englishchinesewords`
  ADD PRIMARY KEY (`English`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
