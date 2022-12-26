-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 08:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_movie`
--

CREATE TABLE `add_movie` (
  `id` int(25) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `directer` varchar(100) NOT NULL,
  `release_date` varchar(100) NOT NULL,
  `categroy` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `you_tube_link` varchar(250) NOT NULL,
  `show` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `decription` varchar(3000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_movie`
--

INSERT INTO `add_movie` (`id`, `movie_name`, `directer`, `release_date`, `categroy`, `language`, `you_tube_link`, `show`, `action`, `decription`, `image`, `status`) VALUES
(1, 'Black Adam', 'Jaume Collet-Serra', '21 October 2022', 'Science', 'English', 'https://www.youtube.com/embed/X0tOpBuYasI', '17:00,19:00', 'running', 'From New Line Cinema, Dwayne Johnson stars in the action adventure “Black Adam.” The first-ever feature film to explore the story of the DC Super Hero comes to the big screen under the direction of Jaume Collet-Serra (“Jungle Cruise”). Nearly 5,000 years after he was bestowed with the almighty powers of the ancient gods—and imprisoned just as quickly—Black Adam (Johnson) is freed from his earthly tomb, ready to unleash his unique form of justice on the modern world.', 'BlackAdam.jpg', 1),
(2, 'Bullet Train', 'David Leitch', '5 August 2022', 'Action', 'English', 'https://www.youtube.com/embed/0IOsk2Vlc4o', '14:00', 'running', 'Five assassins aboard a fast moving bullet train find out their missions have something in common.', 'BulletTrain.jpg', 1),
(3, 'Deadpool', 'Tim Miller', '12 February 2016', 'Action', 'English', 'https://www.youtube.com/embed/Xithigfg7dA', '21:00', 'running', 'Wade Wilson (Ryan Reynolds) is a former Special Forces operative who now works as a mercenary. His world comes crashing down when evil scientist Ajax (Ed Skrein) tortures, disfigures and transforms him into Deadpool. The rogue experiment leaves Deadpool with accelerated healing powers and a twisted sense of humor.', 'Deadpool.jpg', 1),
(4, 'Shang-Chi and the Legend of the Ten Rings', 'Destin Daniel Cretton', '26 November 2021', 'Superhero', 'English', 'https://www.youtube.com/embed/8YjFbMbfXaQ', '15:00,18:15', 'running', 'The movie, based on Marvel Comics, will focus on Shang-Chi; \'The Master of Kung-Fu\'. Marvel Studios\' \"Shang-Chi and The Legend of The Ten Rings\" stars Simu Liu as Shang-Chi, who must confront the past he thought he left behind when he is drawn into the web of the mysterious Ten Rings organization. The film also stars Tony Leung as Wenwu, Awkwafina as Shang-Chi\'s friend Katy and Michelle Yeoh as Jiang Nan, as well as Fala Chen, Meng\'er Zhang, Florian Munteanu and Ronny Chieng.', 'Shang-ChiandtheLegendoftheTenRings.jpg', 1),
(5, 'Spider-Man (2002)', 'Sam Raimi', '11 May 2002', 'Superhero', 'English', 'https://www.youtube.com/embed/t06RUxPbp_c', '18:00,15:15', 'running', 'After being bitten by a genetically-modified spider, a shy teenager gains spider-like abilities that he uses to fight injustice as a masked superhero and face a vengeful enemy. Based on Marvel Comics\' superhero character, this is a story of Peter Parker who is a nerdy high-schooler.', 'Spider-Man(2002).jpg', 1),
(6, 'Spider-Man: No Way Home', 'Jon Watts', '16 December 2021', 'Superhero', 'English', 'https://www.youtube.com/embed/rt-2cxAiPJk', '21:15', 'running', 'When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man. Peter Parker\'s secret identity is revealed to the entire world. Desperate for help, Peter turns to Doctor Strange to make the world forget that he is Spider-Man.', 'Spider-ManNoWayHome.jpg', 1),
(7, 'The Matrix', 'Lilly Wachowski | Lana Wachowski', '24 December 2021', 'Thriller', 'English', 'https://www.youtube.com/embed/vKQi3bBA1y8', '08:00', 'running', 'Neo finds himself targeted by the police when he is contacted by Morpheus, a legendary computer hacker branded a terrorist by the government. As a rebel against the machines, Neo must confront the agents: super-powerful computer programs devoted to stopping Neo and the entire human rebellion.', 'TheMatrix.jpg', 1),
(8, 'The Transporter (2002)', 'Louis Leterrier | Corey Yuen', '2 October 2002', 'Thriller', 'English', 'https://www.youtube.com/embed/7FnbLyv2oio', '10:00', 'running', 'Ex-Special Forces operator Frank Martin (Jason Statham) lives what seems to be a quiet life along the French Mediterranean, hiring himself out as a mercenary transporter who moves goods - human or otherwise - from one place to another. No questions asked.', 'TheTransporter(2002).jpg', 1),
(9, 'Guardians of the Galaxy Vol. 3', 'James Gunn', '5 May 2023', 'Action', 'English', 'https://www.youtube.com/embed/u3V5KDHRQvk', '', 'upcoming', 'In Marvel Studios Guardians of the Galaxy Vol. 3 our beloved band of misfits are looking a bit different these days. Peter Quill, still reeling from the loss of Gamora, must rally his team around him to defend the universe along with protecting one of their own. A mission that, if not completed successfully, could quite possibly lead to the end of the Guardians as we know them.', 'GuardiansoftheGalaxyVol.3.jpg', 1),
(10, 'The Little Mermaid', 'John Musker | Ron Clements', '26 May 2023', 'Fantasy', 'English', 'https://www.youtube.com/embed/0-wPm99PF9U', '', 'upcoming', 'A young mermaid makes a deal with a sea witch, to trade her beautiful voice for human legs so she can discover the world above water and impress a prince. A young mermaid makes a deal with a sea witch, to trade her beautiful voice for human legs so she can discover the world above water and impress a prince.', 'TheLittleMermaid.jpg', 1),
(11, 'Tiệc Trăng Máu', 'Nguyễn Quang Dũng', '23 October 2020', 'Drama', 'Vietnamese', 'https://www.youtube.com/embed/nh0BklwPN9Q', '09:00', 'running', 'Một nhóm bạn thân chơi với nhau gần 40 năm tụ họp lại với nhau trong một buổi tiệc tân gia. Cùng với những bà vợ và người yêu của mình, họ nảy ra ý tưởng về việc chơi một trò chơi với luật chơi phải công khai mọi tin nhắn và cuộc gọi từ chiếc smartphone của mỗi người trong buổi tiệc đó. Những tưởng đây chỉ là một game vui vẻ giúp gắn kết mọi người với nhau, nhưng nó chính là “chìa khóa” mở cánh cửa những bí mật của mỗi người được phơi bày. Từ đây những câu chuyện oái oăm xảy ra, những bí mật động trời mà người đầu ấp tay gối cũng lộ diện, để rồi những chiếc vỏ hào nhoáng mà họ “khoác” bên ngoài dần dần bị gỡ bỏ một cách trần trụi.', 'TiệcTrăngMáu.jpg', 1),
(14, 'Ròm', 'Trần Thanh Huy', '4 October 2019', 'Crime', 'Vietnamese', 'https://www.youtube.com/embed/XRm1P7oGpMQ', '13:30', 'running', 'Ròm – tên phim cũng chính là tên nhân vật chính của phim. Cậu bé Ròm (Trần Anh Khoa đóng) là trẻ lang thang đường phố, chuyên bán vé dò cho người dân khu phố soi số lô đề. Ròm đã từng được cả khu phố tin tưởng vì luôn dự đoán những con số thần kỳ mang lại vận may đổi đời. Nhưng đến ngày vận xui đến, Ròm dự đoán sai và chứng kiến nhiều cảnh “tan nhà nát cửa” của dân nghiện lô đề.', 'Ròm.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `is_active`) VALUES
(1, 'Jainam', 'jainmdg@gmail.com', 'admin', '1'),
(2, 'Admin', 'nguyenminhnhatip@gmail.com', '123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `movie` varchar(100) NOT NULL,
  `show_time` varchar(100) NOT NULL,
  `seat` varchar(100) NOT NULL,
  `totalseat` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `payment_date` varchar(100) NOT NULL,
  `booking_date` varchar(100) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_number` varchar(25) NOT NULL,
  `ex_date` varchar(100) NOT NULL,
  `cvv` int(5) NOT NULL,
  `custemer_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `uid`, `movie`, `show_time`, `seat`, `totalseat`, `price`, `payment_date`, `booking_date`, `card_name`, `card_number`, `ex_date`, `cvv`, `custemer_id`) VALUES
(8, 1, 'Black Adam', '17:00', 'A9,A10', '2', '600', 'Sat-12-22 ', 'Sun-12-22 ', '123', '123', '3221-02-12', 1, 47179972),
(32, 2, 'Black Adam', '17:00', 'D9,D10', '2', '300000', 'Mon-12-22 ', 'Tue-12-22 ', '123451', '12345', '2222-02-22', 123, 29182016);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `massage` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `massage`) VALUES
(60, 'Expiget_Online', 'nguyenminhnhatpro2002@gmail.com', 'Bringht UI, easy to interact');

-- --------------------------------------------------------

--
-- Table structure for table `theater_show`
--

CREATE TABLE `theater_show` (
  `id` int(25) NOT NULL,
  `show` varchar(100) NOT NULL,
  `theater` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theater_show`
--

INSERT INTO `theater_show` (`id`, `show`, `theater`) VALUES
(1, '21:00', '1'),
(2, '15:00', '1'),
(3, '18:00', '1'),
(4, '18:15', '2'),
(5, '15:15', '2'),
(6, '21:15', '2'),
(7, '17:00', '2'),
(8, '14:00', '2'),
(9, '19:00', '1'),
(10, '08:00', '1'),
(11, '10:00', '1'),
(12, '09:00', '2'),
(13, '13:30', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `city` varchar(25) NOT NULL,
  `password` varchar(12) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `mobile`, `city`, `password`, `image`) VALUES
(1, 'pratik', 'prati@gmail.com', 2147483647, 'Surendranagar', '4550', ''),
(2, 'Expiget_Online', 'nguyenminhnhatpro2002@gmail.com', 989414357, 'Hồ Chí Minh', '123', ''),
(9, 'Nhat Nguyen', 'nguyenminhnhatip@gmail.com', 2147483647, 'Thành Phố Thủ Đức', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_movie`
--
ALTER TABLE `add_movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater_show`
--
ALTER TABLE `theater_show`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_movie`
--
ALTER TABLE `add_movie`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `theater_show`
--
ALTER TABLE `theater_show`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
