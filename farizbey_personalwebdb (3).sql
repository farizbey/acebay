-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2016 at 03:50 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `farizbey_personalwebdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs_tbl`
--

CREATE TABLE IF NOT EXISTS `blogs_tbl` (
`blog_id` int(11) NOT NULL,
  `blog_title` varchar(256) NOT NULL,
  `blog_image_thumb` varchar(256) NOT NULL,
  `blog_image_large` varchar(255) NOT NULL,
  `blog_details_preview` text NOT NULL,
  `blog_details_full` text NOT NULL,
  `create_date` datetime NOT NULL,
  `ip_address` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs_tbl`
--

INSERT INTO `blogs_tbl` (`blog_id`, `blog_title`, `blog_image_thumb`, `blog_image_large`, `blog_details_preview`, `blog_details_full`, `create_date`, `ip_address`) VALUES
(1, 'Middle aligned media', 'm1.png', 'm1_large.png', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>								Nulla id volutpat magna. Suspendisse sit amet turpis eget metus mollis condimentum. Mauris sit amet ornare massa, sit amet suscipit tortor. Maecenas in odio in nunc pharetra consectetur. Donec sodales urna non justo pellentesque, euismod molestie ante molestie. Vivamus semper mattis ligula, quis vehicula libero posuere ac. Proin id auctor est. Mauris feugiat convallis justo sit amet ullamcorper. Vestibulum dignissim odio sed sagittis cursus. Fusce dapibus, risus ac fringilla dictum, libero augue maximus urna, a ultrices erat diam sit amet eros. Donec ultrices, lorem et vulputate blandit, ligula tellus egestas urna, vel fringilla magna sem eget augue. Curabitur auctor metus id purus sodales, ut accumsan metus rhoncus. Cras tincidunt sem nec ante ultricies, eget ultrices ex porttitor. Nunc porttitor ipsum eget cursus vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.								<br></br>								Suspendisse ut enim convallis, ultrices magna eget, pulvinar lorem. In id sapien ac magna venenatis aliquam ac vel metus. Nunc et eros pulvinar, rutrum augue eu, lacinia erat. Duis volutpat vehicula neque. Sed laoreet augue at consectetur scelerisque. Cras dapibus lacus nec fringilla mollis. Nullam feugiat lorem at ex maximus, id pretium mauris semper. Integer sit amet efficitur lacus, in ultricies sem. Duis ultrices varius lacus et lobortis. In dignissim mattis felis, eget imperdiet ipsum mollis sit amet. Nullam nec tincidunt nibh. Donec malesuada dolor sed tortor congue porttitor. Aliquam erat volutpat. Etiam eget suscipit nisi, sed porta nibh. Nullam a aliquam ex, ac cursus quam. Cras bibendum laoreet nisl, nec fringilla diam imperdiet vel.', '2016-08-08 11:10:00', ''),
(2, 'Middle aligned media 2', 'm2.gif', 'm2_large.jpg', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>								Nulla id volutpat magna. Suspendisse sit amet turpis eget metus mollis condimentum. Mauris sit amet ornare massa, sit amet suscipit tortor. Maecenas in odio in nunc pharetra consectetur. Donec sodales urna non justo pellentesque, euismod molestie ante molestie. Vivamus semper mattis ligula, quis vehicula libero posuere ac. Proin id auctor est. Mauris feugiat convallis justo sit amet ullamcorper. Vestibulum dignissim odio sed sagittis cursus. Fusce dapibus, risus ac fringilla dictum, libero augue maximus urna, a ultrices erat diam sit amet eros. Donec ultrices, lorem et vulputate blandit, ligula tellus egestas urna, vel fringilla magna sem eget augue. Curabitur auctor metus id purus sodales, ut accumsan metus rhoncus. Cras tincidunt sem nec ante ultricies, eget ultrices ex porttitor. Nunc porttitor ipsum eget cursus vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.								<br></br>								Suspendisse ut enim convallis, ultrices magna eget, pulvinar lorem. In id sapien ac magna venenatis aliquam ac vel metus. Nunc et eros pulvinar, rutrum augue eu, lacinia erat. Duis volutpat vehicula neque. Sed laoreet augue at consectetur scelerisque. Cras dapibus lacus nec fringilla mollis. Nullam feugiat lorem at ex maximus, id pretium mauris semper. Integer sit amet efficitur lacus, in ultricies sem. Duis ultrices varius lacus et lobortis. In dignissim mattis felis, eget imperdiet ipsum mollis sit amet. Nullam nec tincidunt nibh. Donec malesuada dolor sed tortor congue porttitor. Aliquam erat volutpat. Etiam eget suscipit nisi, sed porta nibh. Nullam a aliquam ex, ac cursus quam. Cras bibendum laoreet nisl, nec fringilla diam imperdiet vel.', '2016-08-08 11:13:02', ''),
(3, 'Middle aligned media 3', 'm3.jpg', '', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', '', '2016-08-08 11:13:02', ''),
(4, 'Middle aligned media 4', 'm4.png', '', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', '', '2016-08-08 11:16:17', ''),
(5, 'Middle aligned media 5', 'm5.jpg', '', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', '', '2016-08-08 11:16:17', ''),
(6, 'Middle aligned media 6', 'm6.png', '', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', '', '2016-08-08 11:16:17', ''),
(7, 'Middle aligned media 7', 'm7.png', '', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', '', '2016-08-08 11:16:17', ''),
(8, 'Middle aligned media 8', 'm8.png', '', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', '', '2016-08-08 11:16:17', '');

-- --------------------------------------------------------

--
-- Table structure for table `child_comment_tbl`
--

CREATE TABLE IF NOT EXISTS `child_comment_tbl` (
`child_comment_id` int(11) NOT NULL,
  `comment_blog_id` int(11) NOT NULL,
  `child_comment_sender_email` varchar(256) NOT NULL,
  `child_comment` text NOT NULL,
  `par_code` varchar(10) NOT NULL,
  `child_ip_address` varchar(256) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_comment_tbl`
--

INSERT INTO `child_comment_tbl` (`child_comment_id`, `comment_blog_id`, `child_comment_sender_email`, `child_comment`, `par_code`, `child_ip_address`, `create_date`) VALUES
(1, 1, 'falishabey@gmail.com', 'Reply to First comment', 'aHjEuz', '::1', '2016-09-23 11:27:00'),
(2, 1, 'falishabey@gmail.com', 'reply again to first comment', 'aHjEuz', '::1', '2016-09-23 11:27:14'),
(3, 1, 'falishabey@gmail.com', 'hello', '1vCW1D', '::1', '2016-09-23 11:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `collections_tbl`
--

CREATE TABLE IF NOT EXISTS `collections_tbl` (
`collections_id` int(11) NOT NULL,
  `collections_title` varchar(256) NOT NULL,
  `image_name` varchar(256) NOT NULL,
  `image_name_thumb` varchar(255) NOT NULL,
  `collections_descriptions` text NOT NULL,
  `collections_price` float NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collections_tbl`
--

INSERT INTO `collections_tbl` (`collections_id`, `collections_title`, `image_name`, `image_name_thumb`, `collections_descriptions`, `collections_price`, `create_date`) VALUES
(1, 'Thumbnail label 1', 'p1.jpg', 'p1.jpg', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 120000, '2016-08-09 14:14:44'),
(2, 'Thumbnail label 2', 'p2.png', 'p2.png', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 159000, '2016-08-09 14:14:44'),
(3, 'Thumbnail label 3', 'p3.jpg', 'p3.jpg', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 300000, '2016-08-09 14:14:44'),
(4, 'Thumbnail label 4', 'p4.png', 'p4.png', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 210000, '2016-08-09 14:14:44'),
(5, 'Thumbnail label 5', 'p5.png', 'p5.png', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 99000, '2016-08-09 14:14:44'),
(6, 'Thumbnail label 6', 'p6.jpg', 'p6.jpg', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 250000, '2016-08-09 14:14:44'),
(7, 'Thumbnail label 7', 'p7.jpg', 'p7.jpg', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 325000, '2016-08-09 14:14:44'),
(8, 'Thumbnail label 8', 'p8.jpg', 'p8.jpg', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 175000, '2016-08-09 14:14:44'),
(9, 'Thumbnail label 9', 'p9.png', 'p9.png', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 179000, '2016-08-09 14:14:44'),
(10, 'Thumbnail label 10', 'p10.png', 'p10.png', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 523900, '2016-08-09 14:14:44'),
(11, 'Thumbnail label 11', 'p11.png', 'p11.png', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 89000, '2016-08-09 14:16:09'),
(12, 'Thumbnail label 12', 'p12.png', 'p12.png', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 199000, '2016-08-09 14:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `comment_tbl`
--

CREATE TABLE IF NOT EXISTS `comment_tbl` (
`comment_id` int(11) NOT NULL,
  `comment_blog_id` int(11) NOT NULL,
  `comment_sender_email` varchar(256) NOT NULL,
  `comment` text NOT NULL,
  `code` varchar(10) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_tbl`
--

INSERT INTO `comment_tbl` (`comment_id`, `comment_blog_id`, `comment_sender_email`, `comment`, `code`, `ip_address`, `create_date`) VALUES
(1, 1, 'falishabey@gmail.com', 'First Comment', 'aHjEuz', '::1', '2016-09-23 11:26:46'),
(2, 1, 'falishabey@gmail.com', 'Second Comment', '1vCW1D', '::1', '2016-09-23 11:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `member_tbl`
--

CREATE TABLE IF NOT EXISTS `member_tbl` (
`member_id` int(11) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `member_email` varchar(255) NOT NULL,
  `member_password` varchar(256) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_tbl`
--

INSERT INTO `member_tbl` (`member_id`, `first_name`, `last_name`, `member_email`, `member_password`, `create_date`) VALUES
(1, 'Fariz', 'Bey', 'farizbey@gmail.com', '685ee1d6192afa6ea787587478910ede', '2016-08-22 15:55:37'),
(2, 'Falisha', 'Bey', 'falishabey@gmail.com', '9277ed617465df37dff59594f3f96902', '2016-08-22 15:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `personal_image_tbl`
--

CREATE TABLE IF NOT EXISTS `personal_image_tbl` (
`personal_image_id` int(11) NOT NULL,
  `personal_blogs_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_name_thumb` varchar(255) NOT NULL,
  `image_size` int(11) NOT NULL,
  `image_type` varchar(20) NOT NULL,
  `maskot` tinyint(4) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs_tbl`
--
ALTER TABLE `blogs_tbl`
 ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `child_comment_tbl`
--
ALTER TABLE `child_comment_tbl`
 ADD PRIMARY KEY (`child_comment_id`);

--
-- Indexes for table `collections_tbl`
--
ALTER TABLE `collections_tbl`
 ADD PRIMARY KEY (`collections_id`);

--
-- Indexes for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
 ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `member_tbl`
--
ALTER TABLE `member_tbl`
 ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `personal_image_tbl`
--
ALTER TABLE `personal_image_tbl`
 ADD PRIMARY KEY (`personal_image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs_tbl`
--
ALTER TABLE `blogs_tbl`
MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `child_comment_tbl`
--
ALTER TABLE `child_comment_tbl`
MODIFY `child_comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `collections_tbl`
--
ALTER TABLE `collections_tbl`
MODIFY `collections_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member_tbl`
--
ALTER TABLE `member_tbl`
MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `personal_image_tbl`
--
ALTER TABLE `personal_image_tbl`
MODIFY `personal_image_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
