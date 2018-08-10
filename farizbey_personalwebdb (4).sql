-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2016 at 06:47 AM
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
(3, 'Middle aligned media 3', 'm3.jpg', 'm3_large.png', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>								Nulla id volutpat magna. Suspendisse sit amet turpis eget metus mollis condimentum. Mauris sit amet ornare massa, sit amet suscipit tortor. Maecenas in odio in nunc pharetra consectetur. Donec sodales urna non justo pellentesque, euismod molestie ante molestie. Vivamus semper mattis ligula, quis vehicula libero posuere ac. Proin id auctor est. Mauris feugiat convallis justo sit amet ullamcorper. Vestibulum dignissim odio sed sagittis cursus. Fusce dapibus, risus ac fringilla dictum, libero augue maximus urna, a ultrices erat diam sit amet eros. Donec ultrices, lorem et vulputate blandit, ligula tellus egestas urna, vel fringilla magna sem eget augue. Curabitur auctor metus id purus sodales, ut accumsan metus rhoncus. Cras tincidunt sem nec ante ultricies, eget ultrices ex porttitor. Nunc porttitor ipsum eget cursus vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.								<br></br>								Suspendisse ut enim convallis, ultrices magna eget, pulvinar lorem. In id sapien ac magna venenatis aliquam ac vel metus. Nunc et eros pulvinar, rutrum augue eu, lacinia erat. Duis volutpat vehicula neque. Sed laoreet augue at consectetur scelerisque. Cras dapibus lacus nec fringilla mollis. Nullam feugiat lorem at ex maximus, id pretium mauris semper. Integer sit amet efficitur lacus, in ultricies sem. Duis ultrices varius lacus et lobortis. In dignissim mattis felis, eget imperdiet ipsum mollis sit amet. Nullam nec tincidunt nibh. Donec malesuada dolor sed tortor congue porttitor. Aliquam erat volutpat. Etiam eget suscipit nisi, sed porta nibh. Nullam a aliquam ex, ac cursus quam. Cras bibendum laoreet nisl, nec fringilla diam imperdiet vel.', '2016-08-08 11:13:02', ''),
(4, 'metal gear', 'm4.png', 'm4_large.png', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>								Nulla id volutpat magna. Suspendisse sit amet turpis eget metus mollis condimentum. Mauris sit amet ornare massa, sit amet suscipit tortor. Maecenas in odio in nunc pharetra consectetur. Donec sodales urna non justo pellentesque, euismod molestie ante molestie. Vivamus semper mattis ligula, quis vehicula libero posuere ac. Proin id auctor est. Mauris feugiat convallis justo sit amet ullamcorper. Vestibulum dignissim odio sed sagittis cursus. Fusce dapibus, risus ac fringilla dictum, libero augue maximus urna, a ultrices erat diam sit amet eros. Donec ultrices, lorem et vulputate blandit, ligula tellus egestas urna, vel fringilla magna sem eget augue. Curabitur auctor metus id purus sodales, ut accumsan metus rhoncus. Cras tincidunt sem nec ante ultricies, eget ultrices ex porttitor. Nunc porttitor ipsum eget cursus vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.								<br></br>								Suspendisse ut enim convallis, ultrices magna eget, pulvinar lorem. In id sapien ac magna venenatis aliquam ac vel metus. Nunc et eros pulvinar, rutrum augue eu, lacinia erat. Duis volutpat vehicula neque. Sed laoreet augue at consectetur scelerisque. Cras dapibus lacus nec fringilla mollis. Nullam feugiat lorem at ex maximus, id pretium mauris semper. Integer sit amet efficitur lacus, in ultricies sem. Duis ultrices varius lacus et lobortis. In dignissim mattis felis, eget imperdiet ipsum mollis sit amet. Nullam nec tincidunt nibh. Donec malesuada dolor sed tortor congue porttitor. Aliquam erat volutpat. Etiam eget suscipit nisi, sed porta nibh. Nullam a aliquam ex, ac cursus quam. Cras bibendum laoreet nisl, nec fringilla diam imperdiet vel.', '2016-08-08 11:16:17', ''),
(5, 'uncharted', 'm5.jpg', 'm5_large.jpg', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>								Nulla id volutpat magna. Suspendisse sit amet turpis eget metus mollis condimentum. Mauris sit amet ornare massa, sit amet suscipit tortor. Maecenas in odio in nunc pharetra consectetur. Donec sodales urna non justo pellentesque, euismod molestie ante molestie. Vivamus semper mattis ligula, quis vehicula libero posuere ac. Proin id auctor est. Mauris feugiat convallis justo sit amet ullamcorper. Vestibulum dignissim odio sed sagittis cursus. Fusce dapibus, risus ac fringilla dictum, libero augue maximus urna, a ultrices erat diam sit amet eros. Donec ultrices, lorem et vulputate blandit, ligula tellus egestas urna, vel fringilla magna sem eget augue. Curabitur auctor metus id purus sodales, ut accumsan metus rhoncus. Cras tincidunt sem nec ante ultricies, eget ultrices ex porttitor. Nunc porttitor ipsum eget cursus vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.								<br></br>								Suspendisse ut enim convallis, ultrices magna eget, pulvinar lorem. In id sapien ac magna venenatis aliquam ac vel metus. Nunc et eros pulvinar, rutrum augue eu, lacinia erat. Duis volutpat vehicula neque. Sed laoreet augue at consectetur scelerisque. Cras dapibus lacus nec fringilla mollis. Nullam feugiat lorem at ex maximus, id pretium mauris semper. Integer sit amet efficitur lacus, in ultricies sem. Duis ultrices varius lacus et lobortis. In dignissim mattis felis, eget imperdiet ipsum mollis sit amet. Nullam nec tincidunt nibh. Donec malesuada dolor sed tortor congue porttitor. Aliquam erat volutpat. Etiam eget suscipit nisi, sed porta nibh. Nullam a aliquam ex, ac cursus quam. Cras bibendum laoreet nisl, nec fringilla diam imperdiet vel.', '2016-08-08 11:16:17', ''),
(6, 'Middle aligned media 6', 'm6.png', 'm6_large.jpg', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>								Nulla id volutpat magna. Suspendisse sit amet turpis eget metus mollis condimentum. Mauris sit amet ornare massa, sit amet suscipit tortor. Maecenas in odio in nunc pharetra consectetur. Donec sodales urna non justo pellentesque, euismod molestie ante molestie. Vivamus semper mattis ligula, quis vehicula libero posuere ac. Proin id auctor est. Mauris feugiat convallis justo sit amet ullamcorper. Vestibulum dignissim odio sed sagittis cursus. Fusce dapibus, risus ac fringilla dictum, libero augue maximus urna, a ultrices erat diam sit amet eros. Donec ultrices, lorem et vulputate blandit, ligula tellus egestas urna, vel fringilla magna sem eget augue. Curabitur auctor metus id purus sodales, ut accumsan metus rhoncus. Cras tincidunt sem nec ante ultricies, eget ultrices ex porttitor. Nunc porttitor ipsum eget cursus vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.								<br></br>								Suspendisse ut enim convallis, ultrices magna eget, pulvinar lorem. In id sapien ac magna venenatis aliquam ac vel metus. Nunc et eros pulvinar, rutrum augue eu, lacinia erat. Duis volutpat vehicula neque. Sed laoreet augue at consectetur scelerisque. Cras dapibus lacus nec fringilla mollis. Nullam feugiat lorem at ex maximus, id pretium mauris semper. Integer sit amet efficitur lacus, in ultricies sem. Duis ultrices varius lacus et lobortis. In dignissim mattis felis, eget imperdiet ipsum mollis sit amet. Nullam nec tincidunt nibh. Donec malesuada dolor sed tortor congue porttitor. Aliquam erat volutpat. Etiam eget suscipit nisi, sed porta nibh. Nullam a aliquam ex, ac cursus quam. Cras bibendum laoreet nisl, nec fringilla diam imperdiet vel.', '2016-08-08 11:16:17', ''),
(7, 'Middle aligned media 7', 'm7.png', 'm7_large.jpg', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>								Nulla id volutpat magna. Suspendisse sit amet turpis eget metus mollis condimentum. Mauris sit amet ornare massa, sit amet suscipit tortor. Maecenas in odio in nunc pharetra consectetur. Donec sodales urna non justo pellentesque, euismod molestie ante molestie. Vivamus semper mattis ligula, quis vehicula libero posuere ac. Proin id auctor est. Mauris feugiat convallis justo sit amet ullamcorper. Vestibulum dignissim odio sed sagittis cursus. Fusce dapibus, risus ac fringilla dictum, libero augue maximus urna, a ultrices erat diam sit amet eros. Donec ultrices, lorem et vulputate blandit, ligula tellus egestas urna, vel fringilla magna sem eget augue. Curabitur auctor metus id purus sodales, ut accumsan metus rhoncus. Cras tincidunt sem nec ante ultricies, eget ultrices ex porttitor. Nunc porttitor ipsum eget cursus vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.								<br></br>								Suspendisse ut enim convallis, ultrices magna eget, pulvinar lorem. In id sapien ac magna venenatis aliquam ac vel metus. Nunc et eros pulvinar, rutrum augue eu, lacinia erat. Duis volutpat vehicula neque. Sed laoreet augue at consectetur scelerisque. Cras dapibus lacus nec fringilla mollis. Nullam feugiat lorem at ex maximus, id pretium mauris semper. Integer sit amet efficitur lacus, in ultricies sem. Duis ultrices varius lacus et lobortis. In dignissim mattis felis, eget imperdiet ipsum mollis sit amet. Nullam nec tincidunt nibh. Donec malesuada dolor sed tortor congue porttitor. Aliquam erat volutpat. Etiam eget suscipit nisi, sed porta nibh. Nullam a aliquam ex, ac cursus quam. Cras bibendum laoreet nisl, nec fringilla diam imperdiet vel.', '2016-08-08 11:16:17', ''),
(8, 'Middle aligned media 8', 'm8.png', 'm8_large.png', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>								Nulla id volutpat magna. Suspendisse sit amet turpis eget metus mollis condimentum. Mauris sit amet ornare massa, sit amet suscipit tortor. Maecenas in odio in nunc pharetra consectetur. Donec sodales urna non justo pellentesque, euismod molestie ante molestie. Vivamus semper mattis ligula, quis vehicula libero posuere ac. Proin id auctor est. Mauris feugiat convallis justo sit amet ullamcorper. Vestibulum dignissim odio sed sagittis cursus. Fusce dapibus, risus ac fringilla dictum, libero augue maximus urna, a ultrices erat diam sit amet eros. Donec ultrices, lorem et vulputate blandit, ligula tellus egestas urna, vel fringilla magna sem eget augue. Curabitur auctor metus id purus sodales, ut accumsan metus rhoncus. Cras tincidunt sem nec ante ultricies, eget ultrices ex porttitor. Nunc porttitor ipsum eget cursus vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.								<br></br>								Suspendisse ut enim convallis, ultrices magna eget, pulvinar lorem. In id sapien ac magna venenatis aliquam ac vel metus. Nunc et eros pulvinar, rutrum augue eu, lacinia erat. Duis volutpat vehicula neque. Sed laoreet augue at consectetur scelerisque. Cras dapibus lacus nec fringilla mollis. Nullam feugiat lorem at ex maximus, id pretium mauris semper. Integer sit amet efficitur lacus, in ultricies sem. Duis ultrices varius lacus et lobortis. In dignissim mattis felis, eget imperdiet ipsum mollis sit amet. Nullam nec tincidunt nibh. Donec malesuada dolor sed tortor congue porttitor. Aliquam erat volutpat. Etiam eget suscipit nisi, sed porta nibh. Nullam a aliquam ex, ac cursus quam. Cras bibendum laoreet nisl, nec fringilla diam imperdiet vel.', '2016-08-08 11:16:17', '');

-- --------------------------------------------------------

--
-- Table structure for table `child_collections_comment_tbl`
--

CREATE TABLE IF NOT EXISTS `child_collections_comment_tbl` (
`child_collections_comment_id` int(11) NOT NULL,
  `comment_collections_id` int(11) NOT NULL,
  `child_collections_comment_sender_email` varchar(256) NOT NULL,
  `child_collections_comment` text NOT NULL,
  `par_code` varchar(10) NOT NULL,
  `child_ip_address` varchar(256) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_collections_comment_tbl`
--

INSERT INTO `child_collections_comment_tbl` (`child_collections_comment_id`, `comment_collections_id`, `child_collections_comment_sender_email`, `child_collections_comment`, `par_code`, `child_ip_address`, `create_date`) VALUES
(1, 1, 'Anonymous', 'ceec', 'CEY1IP', '::1', '2016-12-20 11:35:31'),
(2, 1, 'Anonymous', 'nooooo', 'CEY1IP', '::1', '2016-12-20 11:36:12'),
(3, 1, 'Anonymous', 'rregregerre', 'RLXVAq', '::1', '2016-12-20 11:36:52'),
(4, 5, 'Anonymous', 'ok', 'pyMY2C', '::1', '2016-12-20 12:05:42'),
(5, 5, 'farizbey@gmail.com', 'efeawaf', 'Aa9rvI', '::1', '2016-12-20 12:06:42');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_comment_tbl`
--

INSERT INTO `child_comment_tbl` (`child_comment_id`, `comment_blog_id`, `child_comment_sender_email`, `child_comment`, `par_code`, `child_ip_address`, `create_date`) VALUES
(1, 1, 'falishabey@gmail.com', 'Reply to First comment', 'aHjEuz', '::1', '2016-09-23 11:27:00'),
(2, 1, 'falishabey@gmail.com', 'reply again to first comment', 'aHjEuz', '::1', '2016-09-23 11:27:14'),
(3, 1, 'falishabey@gmail.com', 'hello', '1vCW1D', '::1', '2016-09-23 11:31:21'),
(4, 1, 'Anonymous', 'iya betul', '7XnpjR', '::1', '2016-11-29 10:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `collections_comment_tbl`
--

CREATE TABLE IF NOT EXISTS `collections_comment_tbl` (
`collections_comment_id` int(11) NOT NULL,
  `comment_collections_id` int(11) NOT NULL,
  `comment_sender_email` varchar(256) NOT NULL,
  `comment` text NOT NULL,
  `code` varchar(10) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collections_comment_tbl`
--

INSERT INTO `collections_comment_tbl` (`collections_comment_id`, `comment_collections_id`, `comment_sender_email`, `comment`, `code`, `ip_address`, `create_date`) VALUES
(1, 1, 'Anonymous', 'test', 'CEY1IP', '::1', '2016-12-19 16:25:29'),
(2, 1, 'Anonymous', 'woweijwiej', 'RLXVAq', '::1', '2016-12-20 11:36:29'),
(3, 5, 'Anonymous', 'hello 5', 'pyMY2C', '::1', '2016-12-20 12:05:28'),
(4, 5, 'farizbey@gmail.com', 'tooti', 'Aa9rvI', '::1', '2016-12-20 12:06:28');

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
  `collections_descriptions_full` text NOT NULL,
  `collections_price` float NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collections_tbl`
--

INSERT INTO `collections_tbl` (`collections_id`, `collections_title`, `image_name`, `image_name_thumb`, `collections_descriptions`, `collections_descriptions_full`, `collections_price`, `create_date`) VALUES
(1, 'uncharted 1', 'p1.jpg', 'p1.jpg', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>', 120000, '2016-08-09 14:14:44'),
(2, 'uncharted 2', 'p2.png', 'p2.png', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>', 159000, '2016-08-09 14:14:44'),
(3, 'uncharted 3', 'p3.jpg', 'p3.jpg', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>', 300000, '2016-08-09 14:14:44'),
(4, 'uncharted 4', 'p4.png', 'p4.png', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>', 210000, '2016-08-09 14:14:44'),
(5, 'uncharted 5', 'p5.png', 'p5.png', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>', 99000, '2016-08-09 14:14:44'),
(6, 'uncharted 6', 'p6.jpg', 'p6.jpg', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>', 250000, '2016-08-09 14:14:44'),
(7, 'Thumbnail label 7', 'p7.jpg', 'p7.jpg', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>', 325000, '2016-08-09 14:14:44'),
(8, 'Thumbnail label 8', 'p8.jpg', 'p8.jpg', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>', 175000, '2016-08-09 14:14:44'),
(9, 'Thumbnail label 9', 'p9.png', 'p9.png', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>', 179000, '2016-08-09 14:14:44'),
(10, 'Thumbnail label 10', 'p10.png', 'p10.png', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>', 523900, '2016-08-09 14:14:44'),
(11, 'Thumbnail label 11', 'p11.png', 'p11.png', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>', 89000, '2016-08-09 14:16:09'),
(12, 'Thumbnail label 12', 'p12.png', 'p12.png', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi tortor, elementum nec purus in, mattis ultricies lacus. Sed commodo nisi vitae tempor efficitur. Vivamus scelerisque consequat sodales. Proin congue posuere nisi, id eleifend est facilisis egestas. Quisque varius molestie nisl at vestibulum. Mauris vitae consequat nulla. Praesent ac malesuada augue, sit amet posuere quam. Phasellus tincidunt ut diam non molestie. Morbi euismod sodales urna, vitae convallis orci volutpat nec. Duis consequat porta urna, nec tristique turpis pellentesque id. Duis justo nunc, dictum consectetur mollis ac, commodo vitae dui. Etiam a sollicitudin massa. Donec eget metus in magna eleifend dapibus eu sed enim.		    					<br></br>', 199000, '2016-08-09 14:16:16');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_tbl`
--

INSERT INTO `comment_tbl` (`comment_id`, `comment_blog_id`, `comment_sender_email`, `comment`, `code`, `ip_address`, `create_date`) VALUES
(1, 1, 'falishabey@gmail.com', 'First Comment', 'aHjEuz', '::1', '2016-09-23 11:26:46'),
(2, 1, 'falishabey@gmail.com', 'Second Comment', '1vCW1D', '::1', '2016-09-23 11:27:26'),
(3, 1, 'Anonymous', '', 'RPcvit', '::1', '2016-10-21 17:34:12'),
(4, 1, 'Anonymous', 'wow keren blog nya', '7XnpjR', '::1', '2016-11-29 10:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE IF NOT EXISTS `contact_tbl` (
`contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_subject` varchar(255) NOT NULL,
  `contact_message` text NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `ip_address`, `create_date`) VALUES
(1, 'Fariz Bey', 'farizbey@gmail.com', 'Test 1', 'Really Want to test 1', '::1', '2016-12-05 15:48:15'),
(2, '', '', '', '', '::1', '2016-12-05 15:51:09'),
(3, 'Fariz', 'cumi@iijige.com', 'yahooo', 'egaeaegeaga', '::1', '2016-12-20 12:47:23');

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

-- --------------------------------------------------------

--
-- Table structure for table `tr_order`
--

CREATE TABLE IF NOT EXISTS `tr_order` (
`order_id` int(11) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` int(20) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_order`
--

INSERT INTO `tr_order` (`order_id`, `customer_id`, `country`, `first_name`, `last_name`, `address`, `city`, `state`, `zip_code`, `phone_number`, `email_address`, `payment_type`, `create_date`) VALUES
(1, '2', 'Australia', 'Fariz', 'Bey', '1 Botany Road', 'Sydney', 'NSW', 2000, 415631458, 'farizbey@gmail.com', '6', '2016-12-14 14:28:35'),
(2, '1', 'Indonesia', 'Fariz', 'Bey', 'Kesehatan', 'Jakarta', 'Jawa', 10160, 2133300210, 'falishabey@gmail.com', '7', '2016-12-14 14:30:08'),
(3, '1', 'Australia', 'Fariz', 'Bey', '1 Botany Road', 'Sydney', 'NSW', 2000, 415631458, 'farizbey@gmail.com', '7', '2016-12-20 11:54:24'),
(4, '0', 'Australia', 'Fariz', 'Bey', '1 Botany Road', 'Sydney', 'NSW', 2000, 415631458, 'farizbey@gmail.com', '8', '2016-12-20 11:55:10'),
(5, '0', 'Indonesia', 'Falisha', 'Bey', 'Kesehatan', 'Jakarta', 'Jawa', 10160, 2133300210, 'falishabey@gmail.com', '8', '2016-12-20 12:04:12');

-- --------------------------------------------------------

--
-- Table structure for table `tr_order_detail`
--

CREATE TABLE IF NOT EXISTS `tr_order_detail` (
`order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `collections_id` int(11) NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_order_detail`
--

INSERT INTO `tr_order_detail` (`order_detail_id`, `order_id`, `collections_id`, `total_quantity`, `price`, `total_price`) VALUES
(1, 1, 12, 2, 199000, 398000),
(2, 1, 11, 1, 89000, 89000),
(3, 1, 1, 1, 120000, 120000),
(4, 1, 10, 2, 523900, 1047800),
(5, 1, 9, 1, 179000, 179000),
(6, 2, 5, 2, 99000, 198000),
(7, 2, 6, 1, 250000, 250000),
(8, 2, 8, 2, 175000, 350000),
(9, 2, 7, 1, 325000, 325000),
(10, 2, 10, 1, 523900, 523900),
(11, 3, 3, 2, 300000, 600000),
(12, 3, 9, 2, 179000, 358000),
(13, 4, 1, 1, 120000, 120000),
(14, 5, 3, 1, 300000, 300000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs_tbl`
--
ALTER TABLE `blogs_tbl`
 ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `child_collections_comment_tbl`
--
ALTER TABLE `child_collections_comment_tbl`
 ADD PRIMARY KEY (`child_collections_comment_id`);

--
-- Indexes for table `child_comment_tbl`
--
ALTER TABLE `child_comment_tbl`
 ADD PRIMARY KEY (`child_comment_id`);

--
-- Indexes for table `collections_comment_tbl`
--
ALTER TABLE `collections_comment_tbl`
 ADD PRIMARY KEY (`collections_comment_id`);

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
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
 ADD PRIMARY KEY (`contact_id`);

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
-- Indexes for table `tr_order`
--
ALTER TABLE `tr_order`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tr_order_detail`
--
ALTER TABLE `tr_order_detail`
 ADD PRIMARY KEY (`order_detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs_tbl`
--
ALTER TABLE `blogs_tbl`
MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `child_collections_comment_tbl`
--
ALTER TABLE `child_collections_comment_tbl`
MODIFY `child_collections_comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `child_comment_tbl`
--
ALTER TABLE `child_comment_tbl`
MODIFY `child_comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `collections_comment_tbl`
--
ALTER TABLE `collections_comment_tbl`
MODIFY `collections_comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `collections_tbl`
--
ALTER TABLE `collections_tbl`
MODIFY `collections_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
--
-- AUTO_INCREMENT for table `tr_order`
--
ALTER TABLE `tr_order`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tr_order_detail`
--
ALTER TABLE `tr_order_detail`
MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
