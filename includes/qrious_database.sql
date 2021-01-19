-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 09:50 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qrious_database`
create DATABASE qrious_database;
use qrious_database;

--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_img` varchar(1000) NOT NULL DEFAULT 'default.png',
  `blog_by` int(11) NOT NULL,
  `blog_date` date NOT NULL,
  `blog_votes` int(11) NOT NULL DEFAULT 0,
  `blog_content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_img`, `blog_by`, `blog_date`, `blog_votes`, `blog_content`) VALUES
(3, 'The Importance of Reading Fiction', 'blog-cover.png', 2, '2020-10-26', 1, 'Scientific data proves that people who read more fiction are more likely to be fast learners and have high adaptability to real-life situations.\r\n\r\nCommunication, usage of tools, and various other actions that were believed to differentiate between humans and other living beings have since been proven to be universal actions that other beings can learn. So what differentiates humans from other animals? Human\'s can simulate different situations in their mind and learn real-world skills from fictional worlds.\r\n\r\nBut isn\'t fiction being lost as the art of reading books seems to decrease so much every year? This is merely a misconception as fiction is not being lost, but it is just transforming. Poetry transforms into musical lyrics, stories transform into games, which provide an even better simulation due to being fiction that changes based on stimulation.\r\n\r\nThe importance of fiction can be seen just from how our brain works. We spend on average, 4 hours a day in daydreams, which are fictions that our mind creates that allow us to simulate different situations. This ability is something we have developed through evolution.\r\n\r\nThe only downside is the fact that nowadays we can spend more time in our fictional world than needed. Similar to how in today\'s world we face health issues through overeating because of the abundance of food in most developed areas.'),
(4, 'Healthy Lifestyle!', '5f96f12b421753.49206623.jpg', 2, '2020-10-26', 2, '\r\nPhysical fitness is not the sole basis of being healthy; being healthy means being mentally and emotionally fit. Being healthy should be part of your overall lifestyle. Living a healthy lifestyle can help prevent chronic diseases and long-term illnesses. Feeling good about yourself and taking care of your health are important for your self-esteem and self-image. Maintain a healthy lifestyle by doing what is right for your body.\r\n\r\n*Maintain a regular exercise routine*\r\nNo, you do not have to force yourself into intense workouts at the gym but you need to keep as active as possible. You can stick to easy floor exercises, swimming, walking, or simply keep yourself moving by doing some household chores. Do what your body allows you to do.\r\n\r\nWhat is important is that you continue exercising. Give at least twenty to thirty minutes a day to exercise at least three to five times a week. Have a routine; see to it that you have enough physical activity each day.\r\n\r\n*Be conscious in your diet*\r\nTo maintain a healthy lifestyle, you need to keep eating healthy. Add more fruits and vegetables in your diet and eat less carbohydrates, high sodium and unhealthy fat. Avoid eating junk food and sweets.\r\n\r\nAvoid skipping a meal—this will only make your body crave more food the moment you resume eating. Remember to burn more calories than you eat.\r\n\r\n*Engage in the things you are passionate about*\r\nEvery now and then, to keep the stress and the demands of life from taking over, take a break to do something you love doing.\r\n\r\n*Surround yourself with positive energy*\r\nIn order to have a sound mental and emotional state, you must surround yourself with positive energy. Yes, not all problems can be avoided. But it helps to face such obstacles with an optimist outlook. Surround yourself with encouraging friends and people that will provide you with constructive criticism every once in a while to help you improve.\r\n\r\nMaintaining a healthy lifestyle is not that difficult, nor does it require a lot of work. Just keep doing what you do and apply the staying healthy tips listed above—surely you will be a well-rounded individual in no time.'),
(6, 'AI vs Human Intelligence', '5f96f56ae00b37.00557330.jpg', 2, '2020-10-26', 2, 'Here’s a head to head comparison between Artificial Intelligence and Human Intelligence: Functioning Humans use the brain’s computing power, memory, and ability to think, whereas AI-powered machines rely on data and specific instructions fed into the system. Learning power Human Intelligence is all about learning from various incidents and past experiences. It is about learning from mistakes made via trial and error approach throughout one’s life. Intelligent thought and intelligent behavior lie at the core of Human Intelligence. However, Artificial Intelligence falls behind in this respect – machines cannot think. They can learn from data and through continuous training, but they can never achieve the thought process unique to humans. While AI-powered systems can perform specific tasks quite well, it can take years for them to learn a completely different set of functions for a new application area. *What AI cannot do without – The “human” factor *:Artificial Intelligence vs. Human Intelligence debate isn’t a fair one. Granted that AI has helped develop intelligent machines that can outperform humans in some respects (case in point – AlphaGo and DeepBlue), they have yet to go a very long way to match the human brain’s potential. Although AI systems are designed and trained to mimic and simulate human behavior, they cannot make rational decisions like humans. The decision-making power of AI systems is primarily based on events, the data they’re trained on, and how they are related to a particular event. AI machines cannot understand the concept of “cause and effect” simply because they lack common sense. Nick Burns, an SQL Services Data Scientist, puts it quite well: “No matter how good your models are, they are only as good as your data…” Humans possess the unique ability to learn and apply their acquired knowledge in combination with logic, reasoning, and understanding. Real-world scenarios require a holistic, logical, rational, and emotional approach that is specific to humans.'),
(10, 'Self-hypnosis', 'blog-cover.png', 3, '2020-12-08', 0, '<p><strong>Self-hypnosis </strong>or<strong> auto-hypnosis</strong> (as distinct from hetero-hypnosis) is a form, a process, or the result of a self-induced hypnotic state.</p>\r\n<p>&nbsp;</p>\r\n<p>Frequently, self-hypnosis is used as a vehicle to enhance the efficacy of self-suggestion; and, in such cases, the subject \"plays the dual role of suggester and suggestee\".</p>\r\n<p>The nature of the auto-suggestive practice maybe, at one extreme, \"concentrative\", wherein \"all attention is so totally focused on [the words of the auto-suggestive formula, e.g. \"Every day, in every way, I\'m getting better and better\"] that everything else is kept out of awareness\" and, at the other, \"inclusive\", wherein subjects \"allow all kinds of thoughts, emotions, memories, and the like to drift into their consciousness\".</p>'),
(13, 'Break the \"That is a good question\" Habit', 'blog-cover.png', 1, '2020-12-08', 2, '<p>How often have you heard or said &ldquo;That&rsquo;s a good question.&rdquo;? Maybe you are even saying it now in response to my question. My guess is you hear or say it over and over again in meetings and presentations.</p>\r\n<p>&nbsp;</p>\r\n<p>Why is it repeated so often? There are three main reasons:</p>\r\n<p style=\"padding-left: 40px;\"><em><strong>- It is an automatic response that is not tied to the quality of the question</strong></em></p>\r\n<p style=\"padding-left: 40px;\"><em><strong>- It is a stall when you don&rsquo;t have an immediate answer</strong></em></p>\r\n<p style=\"padding-left: 40px;\"><em><strong>- It is genuinely a good question.</strong></em></p>\r\n<p>&nbsp;</p>\r\n<p>What is so wrong about using &ldquo;That is a good question.&rdquo;?&nbsp;</p>\r\n<p>First, it is overused and has lost any meaning. Second, how might someone feel who doesn&rsquo;t hear &ldquo;That is a good question.&rdquo; in response to their question? I imagine they might feel &ldquo;Oh, he has a good question, she has a good question, but mine is not good?&rdquo;</p>\r\n<p>What can you say instead of &ldquo;That&rsquo;s a good question.&rdquo;?</p>\r\n<p>If you do it automatically, retrain yourself to simply repeat the question, which is usually helpful to the other people in the meeting or presentation.</p>\r\n<p>If you need some time to process, add a clarifying question, &ldquo;Is that about ABC or XYZ?&rdquo;. This clarifying question will help give you time to think and formulate an answer.</p>\r\n<p>What if it REALLY IS a good question? Yes, go ahead and compliment, but be specific about what makes it a good question. Or use these replacement phrases &ldquo;Interesting, I hadn&rsquo;t thought about it that way&rdquo; or &ldquo;I&rsquo;m glad you asked.&rdquo;</p>\r\n<p>Replacing a rote response to a question with one of the above suggestions will help you sound more authentic and engaged.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `blogvotes`
--

CREATE TABLE `blogvotes` (
  `voteId` int(11) NOT NULL,
  `voteBlog` int(11) NOT NULL,
  `voteBy` int(11) NOT NULL,
  `voteDate` date NOT NULL,
  `vote` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogvotes`
--

INSERT INTO `blogvotes` (`voteId`, `voteBlog`, `voteBy`, `voteDate`, `vote`) VALUES
(4, 6, 3, '2020-10-26', 1),
(5, 4, 3, '2020-10-26', 1),
(9, 4, 1, '2020-10-29', 1),
(10, 3, 1, '2020-11-01', 1),
(11, 6, 1, '2020-12-06', 1),
(12, 13, 1, '2020-12-08', 1),
(13, 13, 3, '2020-12-08', 1);

--
-- Triggers `blogvotes`
--
DELIMITER $$
CREATE TRIGGER `calc_blog_votes_after_delete` AFTER DELETE ON `blogvotes` FOR EACH ROW BEGIN

		update blogs
        set blogs.blog_votes = blogs.blog_votes - old.vote
        where blogs.blog_id = old.voteBlog;	

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `calc_blog_votes_after_insert` AFTER INSERT ON `blogvotes` FOR EACH ROW BEGIN
	
	update blogs
        set blogs.blog_votes = blogs.blog_votes + new.vote
        where blogs.blog_id = new.voteBlog;	
		
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `calc_blog_votes_after_update` AFTER UPDATE ON `blogvotes` FOR EACH ROW BEGIN
	
		update blogs
        set blogs.blog_votes = blogs.blog_votes + (new.vote * 2)
        where blogs.blog_id = new.voteBlog;	
		
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(8) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'Python Programming', 'Queries related to Python'),
(2, 'General', 'Any General Queries'),
(3, 'DBMS', 'Database related Queries'),
(4, 'Gaming', 'Gaming related Queries'),
(5, 'Politics', 'Queries on Politics'),
(6, 'Health and Lifestyle', 'Queries related to Health and Life'),
(7, 'Java', 'Queries related to Java'),
(8, 'Placements', 'Placement related discussion'),
(9, 'Technical Difficulties', 'Technical Issues/ Queries'),
(10, 'Exams', 'Queries related to Exams');

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

CREATE TABLE `conversation` (
  `id` int(11) NOT NULL,
  `user_one` int(11) NOT NULL,
  `user_two` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `conversation`
--

INSERT INTO `conversation` (`id`, `user_one`, `user_two`) VALUES
(1, 1, 2),
(2, 3, 1),
(3, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_by` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `event_date` datetime NOT NULL,
  `event_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_by`, `title`, `date_created`, `event_date`, `event_image`) VALUES
(1, 1, 'Enactus Recruiting', '2020-10-22', '2020-11-10 00:00:00', 'about-image-1-940x460.jpg'),
(2, 1, 'Semicolon', '2020-10-23', '2020-10-25 00:00:00', 'event_cover.png'),
(3, 1, 'PES Ideathon', '2020-10-23', '2020-10-31 00:00:00', 'blog-4-720x480.jpg'),
(5, 1, 'Football Tournament', '2020-10-23', '2021-01-31 15:00:00', 'event_cover.png'),
(9, 1, 'Pool Party', '2020-12-08', '2020-12-29 18:00:00', 'event_cover.png');

-- --------------------------------------------------------

--
-- Table structure for table `event_info`
--

CREATE TABLE `event_info` (
  `event_id` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `headline` varchar(100) NOT NULL,
  `description` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_info`
--

INSERT INTO `event_info` (`event_id`, `event`, `title`, `headline`, `description`) VALUES
(1, 1, 'Enactus Recruiting', 'Are you passionate about entrepreneurship with a heart to help the world? This is your invitation to', 'The Enactus network of global business, academic, and student leaders spread across 36 countries, unified by our vision—to create a better, more sustainable world based on the 17 UN sustainable development goals. Wanna make yourself a part of this team! We are coming at your college on 10 November 2020.'),
(2, 2, 'Semicolon', 'Digging your digital thinking and finding innovative solution is the soul point of this event. In or', 'Get along with us for another edition of the most awaited event \"Semicolon\", Be ready to fix the errors and have your code sorted in a very short span of time. Excited? Yes, we ensure you to have the best experience with us.!\r\nDate: 25th October 2020'),
(3, 3, 'PES Ideathon', 'Put your minds to work once again with us!!', 'Had planned a lot for this year, but everything got stuck onto \"online mode\"!\r\nDo not step aback, We still have greater opportunities for you to explore and learn. Be a part of this unique edition. In this event, the participants will be given a set of themes within which they have to submit their ideas. \r\nDate: 31st October 2020'),
(5, 5, 'Football Tournament', '\"Play for the name on the front of the shirt, and they will remember the name on the back.\"', 'The game of football is both an art and science. Even a crumpled up piece of paper can be called a football when kicked - the football can be anything, anytime, anywhere. \r\nEWB brings to you \'Football For A Cause\' On this 31st January 2021, a fundraising event for the betterment of society. If you have the skills, the zeal to compete, and the will to do your bit to make the world a better place, here\'s your chance to prove yourself. Come and join us to be a part of this social cause at Tunit Football Turf behind OMR Street'),
(9, 9, 'Pool Party', 'Hotel Paradise', 'Let\'s get dressed in some Florals...\r\n& Get ready to float ;D');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `user_from` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `conversation_id`, `user_from`, `user_to`, `message`) VALUES
(74, 1, 1, 2, 'hey'),
(75, 1, 2, 1, 'Hey! how are you..'),
(76, 3, 1, 3, 'hi'),
(77, 2, 1, 3, 'hi'),
(78, 2, 1, 3, 'test'),
(79, 1, 1, 2, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE `polls` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `poll_desc` varchar(5000) NOT NULL,
  `locked` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `polls`
--

INSERT INTO `polls` (`id`, `subject`, `created`, `modified`, `status`, `created_by`, `poll_desc`, `locked`) VALUES
(3, 'Deepika or Alia', '2020-10-26 16:52:44', '2020-10-26 16:52:44', '1', 3, 'Who do you like??', 0),
(4, 'Dog or Cat :)', '2020-10-26 17:03:50', '2020-10-26 17:03:50', '1', 3, 'Which is preferable as a pet?\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `poll_options`
--

CREATE TABLE `poll_options` (
  `id` int(11) NOT NULL,
  `poll_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `poll_options`
--

INSERT INTO `poll_options` (`id`, `poll_id`, `name`, `created`, `modified`, `status`) VALUES
(3, 3, 'Deepika', '2020-10-26 16:52:44', '2020-10-26 16:52:44', '1'),
(4, 3, 'Alia', '2020-10-26 16:52:44', '2020-10-26 16:52:44', '1'),
(5, 4, 'Dog', '2020-10-26 17:03:50', '2020-10-26 17:03:50', '1'),
(6, 4, 'Cat', '2020-10-26 17:03:50', '2020-10-26 17:03:50', '1'),
(7, 4, 'Both', '2020-10-26 17:03:50', '2020-10-26 17:03:50', '1');

-- --------------------------------------------------------

--
-- Table structure for table `poll_votes`
--

CREATE TABLE `poll_votes` (
  `id` int(11) NOT NULL,
  `poll_id` int(11) NOT NULL,
  `poll_option_id` int(11) NOT NULL,
  `vote_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `poll_votes`
--

INSERT INTO `poll_votes` (`id`, `poll_id`, `poll_option_id`, `vote_by`) VALUES
(2, 3, 3, 2),
(4, 3, 4, 1),
(5, 4, 6, 1),
(6, 3, 4, 3),
(8, 4, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(8) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `post_topic` int(8) NOT NULL,
  `post_by` int(8) NOT NULL,
  `post_votes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_content`, `post_date`, `post_topic`, `post_by`, `post_votes`) VALUES
(2, 'How to prepare for an interview in one week :(', '2020-09-21 21:52:09', 2, 1, 1),
(3, 'How to study a day before exams !!', '2020-09-21 21:56:11', 3, 3, 0),
(5, 'What is the interview process of Accenture?', '2020-09-21 22:00:41', 5, 2, 0),
(7, 'You can visit freecodecamp.org', '2020-09-21 22:04:29', 1, 2, 0),
(8, 'You can visit freecodecamp.org', '2020-09-21 22:06:17', 1, 2, 0),
(10, 'what do you think is the best way of living a happy life?', '2020-11-01 21:32:54', 7, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `postvotes`
--

CREATE TABLE `postvotes` (
  `voteId` int(11) NOT NULL,
  `votePost` int(11) NOT NULL,
  `voteBy` int(11) NOT NULL,
  `voteDate` date NOT NULL,
  `vote` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Triggers `postvotes`
--
DELIMITER $$
CREATE TRIGGER `calc_forum_votes_after_delete` AFTER DELETE ON `postvotes` FOR EACH ROW BEGIN

		update posts
        set posts.post_votes = posts.post_votes - old.vote
        where posts.post_id = old.votePost;	

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `calc_forum_votes_after_insert` AFTER INSERT ON `postvotes` FOR EACH ROW BEGIN
	
	update posts
        set posts.post_votes = posts.post_votes + new.vote
        where posts.post_id = new.votePost;	
		
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `calc_forum_votes_after_update` AFTER UPDATE ON `postvotes` FOR EACH ROW BEGIN
	
		update posts
        set posts.post_votes = posts.post_votes + (new.vote * 2)
        where posts.post_id = new.votePost;	
		
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(8) NOT NULL,
  `topic_subject` varchar(255) NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` int(8) NOT NULL,
  `topic_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`) VALUES
(1, 'Games !!', '2020-09-21 21:51:03', 4, 1),
(2, 'Interview Soon', '2020-09-21 21:52:09', 8, 1),
(3, 'Exam Tomorrow !!', '2020-09-21 21:56:10', 10, 3),
(4, 'Adopting a DOG :)', '2020-09-21 21:58:03', 2, 3),
(5, 'Accenture coming to college', '2020-09-21 22:00:41', 8, 2),
(7, 'life', '2020-11-01 21:32:54', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `userLevel` int(11) NOT NULL DEFAULT 0,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `gender` char(1) NOT NULL,
  `headline` varchar(500) DEFAULT NULL,
  `bio` varchar(4000) DEFAULT NULL,
  `userImg` varchar(500) DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `userLevel`, `f_name`, `l_name`, `uidUsers`, `emailUsers`, `pwdUsers`, `gender`, `headline`, `bio`, `userImg`) VALUES
(1, 0, '', '', 'shivi', 'shivi@gmail.com', '$2y$10$dq9/dzgzMVnW3uIjuX/uXeoVCm8PS024XAUwxUu2KVx.y/SpbPyXK', 'f', '', '', '5f9eea43051ad1.50075686.png'),
(2, 0, '', '', 'muskan', 'muskan@gmail.com', '$2y$10$f9HsmsdFrEJRF.ZQ6Dwz2emzgHUI/Unedss47ZabKP.vnMeQRmAAq', 'f', '', '', 'default.png'),
(3, 1, 'Vishal2', '', 'vishal', 'vishal1@gmail.com', '$2y$10$rA4SS7fgAUk0yh6byRRNEenBsUkFC66K/ZCbiPBaNGlCAZV7J9fAC', 'm', '', '', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `blog_by` (`blog_by`);

--
-- Indexes for table `blogvotes`
--
ALTER TABLE `blogvotes`
  ADD PRIMARY KEY (`voteId`),
  ADD KEY `voteBlog` (`voteBlog`),
  ADD KEY `voteBy` (`voteBy`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name_unique` (`cat_name`);

--
-- Indexes for table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_one` (`user_one`),
  ADD KEY `user_two` (`user_two`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `events_ibfk_1` (`event_by`);

--
-- Indexes for table `event_info`
--
ALTER TABLE `event_info`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `event` (`event`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_from` (`user_from`),
  ADD KEY `user_to` (`user_to`),
  ADD KEY `conversation_id` (`conversation_id`);

--
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `poll_options`
--
ALTER TABLE `poll_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poll_id` (`poll_id`);

--
-- Indexes for table `poll_votes`
--
ALTER TABLE `poll_votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poll_id` (`poll_id`),
  ADD KEY `poll_option_id` (`poll_option_id`),
  ADD KEY `vote_by` (`vote_by`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_topic` (`post_topic`),
  ADD KEY `post_by` (`post_by`);

--
-- Indexes for table `postvotes`
--
ALTER TABLE `postvotes`
  ADD PRIMARY KEY (`voteId`),
  ADD KEY `voteBy` (`voteBy`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `topic_cat` (`topic_cat`),
  ADD KEY `topic_by` (`topic_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blogvotes`
--
ALTER TABLE `blogvotes`
  MODIFY `voteId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `event_info`
--
ALTER TABLE `event_info`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `poll_options`
--
ALTER TABLE `poll_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `poll_votes`
--
ALTER TABLE `poll_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `postvotes`
--
ALTER TABLE `postvotes`
  MODIFY `voteId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`blog_by`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blogvotes`
--
ALTER TABLE `blogvotes`
  ADD CONSTRAINT `blogvotes_ibfk_1` FOREIGN KEY (`voteBlog`) REFERENCES `blogs` (`blog_id`),
  ADD CONSTRAINT `blogvotes_ibfk_2` FOREIGN KEY (`voteBy`) REFERENCES `users` (`idUsers`);

--
-- Constraints for table `conversation`
--
ALTER TABLE `conversation`
  ADD CONSTRAINT `conversation_ibfk_1` FOREIGN KEY (`user_one`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conversation_ibfk_2` FOREIGN KEY (`user_two`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`event_by`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event_info`
--
ALTER TABLE `event_info`
  ADD CONSTRAINT `event_info_ibfk_1` FOREIGN KEY (`event`) REFERENCES `events` (`event_id`) ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_from`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`user_to`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_ibfk_3` FOREIGN KEY (`conversation_id`) REFERENCES `conversation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `polls`
--
ALTER TABLE `polls`
  ADD CONSTRAINT `polls_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `poll_options`
--
ALTER TABLE `poll_options`
  ADD CONSTRAINT `poll_options_ibfk_1` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `poll_votes`
--
ALTER TABLE `poll_votes`
  ADD CONSTRAINT `poll_votes_ibfk_1` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `poll_votes_ibfk_2` FOREIGN KEY (`poll_option_id`) REFERENCES `poll_options` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `poll_votes_ibfk_3` FOREIGN KEY (`vote_by`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`post_topic`) REFERENCES `topics` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`post_by`) REFERENCES `users` (`idUsers`) ON UPDATE CASCADE;

--
-- Constraints for table `postvotes`
--
ALTER TABLE `postvotes`
  ADD CONSTRAINT `postvotes_ibfk_1` FOREIGN KEY (`voteBy`) REFERENCES `users` (`idUsers`) ON UPDATE CASCADE;

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`topic_cat`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topics_ibfk_2` FOREIGN KEY (`topic_by`) REFERENCES `users` (`idUsers`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
