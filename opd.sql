-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 02:25 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opd`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categorieId` int(12) NOT NULL,
  `categorieName` varchar(255) NOT NULL,
  `categorieDesc` text NOT NULL,
  `categorieCreateDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categorieId`, `categorieName`, `categorieDesc`, `categorieCreateDate`) VALUES
(5, 'BEVERAGES', 'jhdgfhjgjh', '2021-10-01 07:55:28'),
(24, 'Main-Courses', 'Main-courses dishes', '2021-10-14 17:46:03'),
(26, 'Fast Food/Quick', 'A delight for Fast Food lovers! Choose from our wide range of delicious Fast Food', '2021-10-15 19:45:24'),
(27, 'Starters', 'jhss', '2021-10-15 19:47:04'),
(28, 'Soups', 'Soupsss', '2021-10-15 19:54:56'),
(29, 'Chinese dishes/Noodles', 'gsikhdisuisjd', '2021-10-15 20:08:43'),
(30, 'Desserts', 'CHOICE OF TOPPINGS', '2021-10-15 20:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactId` int(21) NOT NULL,
  `userId` int(21) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phoneNo` bigint(21) NOT NULL,
  `orderId` int(21) NOT NULL DEFAULT 0 COMMENT 'If problem is not related to the order then order id = 0',
  `message` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactId`, `userId`, `email`, `phoneNo`, `orderId`, `message`, `time`) VALUES
(1, 2, 'd2019hirthik.pamnani@ves.ac.in', 9284283776, 2, 'please help me', '2021-10-11 16:45:24'),
(2, 2, 'd2019hirthik.pamnani@ves.ac.in', 9284283776, 3, 'jadal dilevry boy hai tumare ye deepak', '2021-10-14 22:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `contactreply`
--

CREATE TABLE `contactreply` (
  `id` int(21) NOT NULL,
  `contactId` int(21) NOT NULL,
  `userId` int(23) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactreply`
--

INSERT INTO `contactreply` (`id`, `contactId`, `userId`, `message`, `datetime`) VALUES
(1, 1, 2, 'kjksd', '2021-10-13 17:02:42'),
(2, 2, 2, 'koi naa hum nikal dege chutiye ko', '2021-10-14 22:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `deliverydetails`
--

CREATE TABLE `deliverydetails` (
  `id` int(21) NOT NULL,
  `orderId` int(21) NOT NULL,
  `deliveryBoyName` varchar(35) NOT NULL,
  `deliveryBoyPhoneNo` bigint(25) NOT NULL,
  `deliveryTime` int(200) NOT NULL COMMENT 'Time in minutes',
  `dateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliverydetails`
--

INSERT INTO `deliverydetails` (`id`, `orderId`, `deliveryBoyName`, `deliveryBoyPhoneNo`, `deliveryTime`, `dateTime`) VALUES
(1, 3, 'deepak', 9645662521, 30, '2021-10-14 22:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodId` int(12) NOT NULL,
  `foodName` varchar(255) NOT NULL,
  `foodPrice` int(12) NOT NULL,
  `foodDesc` text NOT NULL,
  `foodCategorieId` int(12) NOT NULL,
  `foodPubDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodId`, `foodName`, `foodPrice`, `foodDesc`, `foodCategorieId`, `foodPubDate`) VALUES
(35, 'Lava Cake', 99, 'Filled with delecious molten chocolate inside.', 30, '2021-03-17 22:08:13'),
(37, 'Lipton Ice Tea', 25, ' 250ml', 5, '2021-03-17 22:12:53'),
(38, 'Mirinda', 35, '500ml', 5, '2021-03-17 22:13:38'),
(39, 'PEPSI BLACK CAN', 45, 'PEPSI BLACK CAN', 5, '2021-03-17 22:14:24'),
(40, 'Pepsi\r\n', 52, '500ml', 5, '2021-03-17 22:16:29'),
(41, '7Up', 52, '500ml', 5, '2021-03-17 22:17:08'),
(53, 'Packaged Drinking Water', 20, 'Drinking Water	', 5, '2021-03-18 08:20:40'),
(74, 'Cream of Tomato Soup', 100, 'tomato', 28, '2021-10-14 21:28:58'),
(75, 'Chicken Manchow Soup', 180, 'non-veg', 28, '2021-10-14 21:30:36'),
(76, 'Chicken Hot and Sour Soup', 200, 'chicken', 28, '2021-10-14 21:31:03'),
(77, 'Veg Hot and Sour Soup', 120, 'veg', 28, '2021-10-14 21:31:48'),
(78, 'Sweet Corn Veg', 79, 'This Sweet Corn vegetable soup is a creamy and comforting soup that can be enjoyed year-round. It is full of sweet corn, packed with veggies, and has the perfect amount of spices that are guaranteed to delight your taste buds.', 28, '2021-10-14 21:35:45'),
(79, 'Chicken Clear Soup', 150, 'clear', 28, '2021-10-14 21:42:45'),
(80, 'Veg Tom Yum Soup ', 125, 'tom-yum', 28, '2021-10-14 21:44:54'),
(81, 'Baby Corn soup', 135, 'babycorn', 28, '2021-10-14 21:47:53'),
(82, 'Thai-style chicken and baby corn soup', 145, 'thai-style', 28, '2021-10-14 21:50:46'),
(83, 'Spanish Vegetables Soup', 135, 'spanish', 28, '2021-10-14 21:53:22'),
(84, 'Panner Tikka', 279, 'Cubes of Cottage Cheese Marinated with Hung Curd, Carom Seeds & Mustard oil served with mint chutney', 27, '2021-10-14 22:39:41'),
(85, 'Veg Momos', 169, '(5 pcs) delicious mixture of chopped vegetables enveloped in a thin wrapper, steamed to perfection, served with a choice of dip.', 27, '2021-10-14 23:46:57'),
(86, 'Steamed Chicken Classic Momos', 179, '(5 pcs) delicious mix of juicy minced chicken filling enveloped in a thin wrapper, steamed to perfection, served with a choice of dip.', 27, '2021-10-14 23:49:34'),
(87, 'tandoori soya chaap with Mint Chutney', 325, 'Veg Meal soya chaap is a delicious vegan protein option\r\n', 27, '2021-10-15 11:33:36'),
(88, 'Veg-Manchurian Dry', 220, 'Mix veg fried balls, onion and capsicum tossed in classic manchurian sauce.', 27, '2021-10-15 11:35:28'),
(89, 'Chicken Lollipop', 300, 'Juicy chicken wings covered in a fiery red marinade of garlic, red chilli, soy and deep-fried.', 27, '2021-10-15 11:38:49'),
(90, 'Chicken Shami Kebab', 285, 'The chicken shami kebab is a tikki made of mashed boneless chicken seasoned and mint leaves, seasoned by spice for added taste. This tikki is then placed in a roll and served.', 27, '2021-10-15 11:45:31'),
(91, 'Paneer Chilly', 220, 'A delightfully flavorful dish prepared with soft paneer and slow cooked cooked with flavorful chili sauce and other masalas.', 27, '2021-10-15 11:50:31'),
(92, 'Onion Pakoda(Kanda Bajiya)', 50, 'jhs', 27, '2021-10-15 11:52:52'),
(93, 'Khandvi', 69, 'jk', 27, '2021-10-15 11:53:40'),
(94, 'Crispy Chicken Recipe', 359, 'Crispy and delightfully tasty chicken chunks coated in seasoned batter and deep fried.', 27, '2021-10-15 11:56:11'),
(95, 'Garlic Chicken Cheese Balls', 400, 'jhg', 27, '2021-10-15 11:57:43'),
(96, 'Gulab Jamun', 120, 'Soft, spongy and delicious Indian dessert served with a generous helping of sugar syrup.', 30, '2021-10-15 12:23:55'),
(97, 'gajar ka halwa', 119, 'Classic gajar halwa made with winter carrots, milk and dry fruits', 30, '2021-10-15 12:27:30'),
(98, 'Overload Brownie ( 1 Piece )', 105, 'Chocolate brownie loaded with generous amounts of real dark chocolate.', 30, '2021-10-15 12:31:51'),
(99, 'Fries (L)', 99, 'World Famous Fries, crispy golden, fried to perfection and lightly salted. Also known as happiness.', 26, '2021-10-15 20:17:37'),
(100, 'Cheesy Jalapeno Fries', 120, 'World Famous Fries, crispy golden, fried to perfection and lightly salted. Also known as happiness.', 26, '2021-10-15 20:24:13'),
(101, 'Veg Frankie', 35, 'A Traditional Mumbai Frankie consist mashed potato Masala and veggies, seasoned with Indian chutney and spices.', 26, '2021-10-15 20:37:21'),
(102, 'Veg Schezwan Frankie', 40, 'For all you schezwan lovers! The veg schezwan franky roll is made with mashed potato, Indian spices, schezwan sauce and sprinkled with onions.', 26, '2021-10-15 20:39:03'),
(103, 'shawarma', 90, 'Marinated Hot Spiced Chicken Roasted In Rotisserie Topped With Veggies And Garlic Sauce', 26, '2021-10-16 06:41:46'),
(104, 'Noodles Frankie', 45, 'Only Chinese Noodle Frankie comes with special yummy taste.', 26, '2021-10-16 06:44:17'),
(105, 'Cheesy Nugget - Veg Bites - 9 pc', 109, 'Try the new delicious, pack of 9 Cheesy Veg Nuggets that will cheer you up in no time', 26, '2021-10-16 06:49:21'),
(106, 'Veg Cutlet(7pcs)', 66, 'Mixed vegetables crumbed and deep fried , a popular kolkata street food.', 26, '2021-10-16 06:52:43'),
(107, 'Chicken Nuggets(8pcs)', 119, 'Chicken Nuggets', 26, '2021-10-16 06:56:02'),
(108, 'Veg Sada Sandwich', 35, 'Sliced cucumber, potato, tomato, onion, beetroot with slices of bread butter and green chutney', 26, '2021-10-16 07:00:12'),
(109, 'Veg Toast Sandwich', 45, 'Sliced cucumber, potato, tomato, beetroot, onion', 26, '2021-10-16 07:02:10'),
(110, 'Veg Grill Sandwich', 55, 'A wholesome sandwich with assorted veggies tossed in a simple dressing and grilled to perfection.', 26, '2021-10-16 07:05:45'),
(111, 'Veg Cheese Grill Sandwich', 70, 'Freshly baked bread stuffed with select vegetables, layered with cheese, and grilled to perfection.', 26, '2021-10-16 07:06:33'),
(112, 'Samosa (2 Pcs)', 30, 'A delicious snack made by deep frying dough shaped in the form of a traingle and stuffed with spicy potatoes, onions and other vegetables.', 26, '2021-10-16 07:08:27'),
(113, 'Chocoholic Pastry ( 1 Piece )', 79, 'Three layers of chocolate mousse: white, milk and dark chocolate mousse.', 30, '2021-10-16 07:12:09'),
(115, 'Pineapple Pastry', 65, 'Delicious combination of pure cream and fresh pineapple filling in pastry', 30, '2021-10-16 07:18:31'),
(116, 'Blackforest Pastry', 55, 'The classic black forest flavour comes alive as a pastry.', 30, '2021-10-16 07:20:35'),
(117, 'Chocolate Crackle Pastry', 55, 'Chocolate buttercream with a crunchy cashew nougat on top the pastry.', 30, '2021-10-16 07:22:23'),
(118, 'Chinese Bhel', 60, 'Chinese streed food delicacy, fried noodles tossed with schezuan sauce, vegetables & crispy manchuri', 29, '2021-10-16 13:10:48'),
(119, 'Veg Fried Rice', 100, 'Served With Spring Onion Sauce And Schezwan Sauce.', 29, '2021-10-16 13:14:53'),
(120, 'Veg Manchurian Rice', 120, 'Aromatic Fried Rice Flavored And Mix Veg Fried Balls, Onion And Capsicum Tossed In Classic Manchurian', 29, '2021-10-16 13:18:49'),
(121, 'Veg Triple Schezwan Rice', 120, 'Rice & noodle with mixed vegetable tossed in schezwan sauce.', 29, '2021-10-16 13:22:09'),
(122, 'Paneer Schezwan Rice', 135, 'Fried rice with mix diced veg and chunks of paneer , capsicum, mushroom, schezwan sauce.', 29, '2021-10-16 13:24:56'),
(123, 'Paneer Manchurian Rice', 160, 'Yummilious fried rice enriched with soft paneer cubes and Manchurian with Schezwan sauce.', 29, '2021-10-16 13:28:43'),
(124, 'Veg Hong Kong Rice', 110, 'Rice Tossed With Carrot, French Beans & Baby Corn, Sliced Button Mushroom, Red & Yellow Capsicum.', 29, '2021-10-16 13:37:19'),
(125, 'Veg Singapore Fried Rice', 100, 'Rice filled with the goodness of veggies flavoured with soy sauce, chillies and garlic.', 29, '2021-10-16 13:49:11'),
(126, 'Veg Hakka Noodle', 90, 'The perfect blend of boiled vegetables, noodles, soy and Chinese spices.', 29, '2021-10-16 13:50:18'),
(128, 'Veg Schezwan Noodle', 90, 'Yummy noodles combined with tender crisp veggies and sizzled with a dash of schezwan sauce.', 29, '2021-10-16 13:52:37'),
(129, 'Veg Manchurian Noodles', 110, 'Soft and tasty noodles cooked with Manchurian sauce and assorted veggies.', 29, '2021-10-16 13:54:11'),
(130, 'Paneer Noodles', 120, 'Soft and tasty noodles cooked with Paneer cubes and assorted veggies', 29, '2021-10-16 13:56:13'),
(131, 'Veg Singapore Noodles', 100, 'Noodles Tossed With Carrot, Capsicum & Onion & Red Yellow Capsicum Signature Desi Chilli. Kashmiri Chill', 29, '2021-10-16 13:57:28'),
(132, 'Veg Hong Kong Noodles', 100, 'Noodles tossed with carrot cabbage, capsicum & onion, & red yellow capsicum signature desichillisauce. Kashmiri chilli.', 29, '2021-10-16 13:58:31'),
(133, 'Paneer Kadai', 160, 'Dices of paneer or assorted vegetables tossed in aromatic yellowish red gravy with onions and green peppers and robust spices', 24, '2021-10-16 14:11:04'),
(134, 'Paneer Butter Masala', 150, 'Paneer butter masala is essentially cooked in butter, has a smooth curry to which paneer is added.', 24, '2021-10-16 14:12:48'),
(135, 'Paneer Mutter', 150, 'Delicious creamy paneer and peas cooked in kadai gravy', 24, '2021-10-16 14:14:14'),
(136, 'Mixed Vegetables', 120, 'An assortment of farm fresh veggies cooked with Indian spices, herbs, and masala', 24, '2021-10-16 14:15:09'),
(137, 'Bhindi Masala', 110, 'A yummy fry of tender fresh ladies finger and Indian style masala.', 24, '2021-10-16 14:16:09'),
(138, 'Palak Paneer', 150, 'This palak paneer tastes is rich and creamy, made from spinach and the creamy Indian cheese.', 24, '2021-10-16 14:17:17'),
(139, 'Malai Kofta', 150, 'Veggie made from kofta and added malai cooked in authentic Indian masala and spices.', 24, '2021-10-16 14:18:09'),
(140, 'Aloo Jeera', 100, 'Delicious diced potatoes cooked in array of spices and tempered with jeera', 24, '2021-10-16 14:19:02'),
(141, 'Aloo Gobi Masala', 120, 'Potato and fresh cauliflower cooked with onions, tomatoes, garlic and spices', 24, '2021-10-16 14:20:02'),
(142, 'Dal Tadka', 130, 'A flavourful tadka of garlic, spices and hing is what makes the dal so tasty', 24, '2021-10-16 14:20:49'),
(143, 'Dal Makhani', 160, 'Black lentils simmered overnight with a ginger garlic paste and tempered with churned butter and cream.', 24, '2021-10-16 14:21:25'),
(144, 'Butter Chicken', 279, 'Chunks of grilled chicken (tandoori chicken) cooked in a smooth buttery & creamy tomato based gravy', 24, '2021-10-16 14:29:14'),
(145, 'Chicken Kadai', 320, 'A perfectly balanced dish with juicy chicken chunks cooked with onions, tomatoes, freshly ground whole spice mixed and simmered to a thick consistency.', 24, '2021-10-16 14:31:01'),
(146, 'Chicken Home Style', 330, 'Chicken cooked in a familiar home style preparation. Food for the soul', 24, '2021-10-16 14:32:05'),
(147, 'Egg Curry', 120, 'A simple but flavourful belnd of boiled eggs in smooth gravy.', 24, '2021-10-16 14:32:53'),
(148, 'Chicken Curry', 320, 'Chunks of chicken cooked in special grounded masala with delicious onion and tomato gravy.', 24, '2021-10-16 14:33:57'),
(149, 'Mutton Curry', 360, 'A must try, hot and spicy mutton curry in a flavourful concoction of whole spices and earthy maharashtrian essence.', 24, '2021-10-16 14:34:31'),
(150, 'Fish Curry', 280, 'A flavour packed preparation with tender fish simmered in a mouthwatering gravy.', 24, '2021-10-16 14:35:16'),
(151, 'Mutton Keema', 240, 'An indulgent dish with minced mutton cooked in a flavour packed gravy seasoned with Indian spices.', 24, '2021-10-16 14:36:10'),
(152, 'Veg Biryani', 90, 'Veggies and flavoured rice slow cooked in a delicious mixed of Indian masala flavoured with aromatic spices.', 24, '2021-10-16 14:41:18'),
(153, 'Chicken Biryani', 150, 'A delicious savory rice dish in malabar style loaded with chicken, crispy golden fried onion, nad flavorful khaima rice.', 24, '2021-10-16 14:42:02'),
(154, 'Mutton Biryanis', 220, 'A delicious savoury rice dish in malabar style loaded with spicy mutton, crispy golden fried onions, and flavorful khaima rice.', 24, '2021-10-16 14:43:40'),
(155, 'Sada Roti(1pcs)', 15, 'Super-thin and fluffy wheat flour rotis cooked on a tava.', 24, '2021-10-16 14:51:50'),
(156, 'Butter Roti(1pcs)', 20, 'Super soft roti that is cooked to perfection in a tandoor wrapped in butter.', 24, '2021-10-16 14:52:59'),
(157, 'Tandoori Roti(1pcs)', 25, 'Super soft roti that is cooked to perfection in a tandoor.', 24, '2021-10-16 14:53:46'),
(158, 'Rumali Roti(1pcs)', 30, 'Super thin flour rotis that are served folded like a handkerchief.', 24, '2021-10-16 14:55:09'),
(159, 'Rice', 60, 'Rice', 24, '2021-10-16 15:01:22'),
(160, 'Jeera Rice', 90, 'Aromatic rice cooked in a tempering of cumin and whole spices and with love and care.', 24, '2021-10-16 15:01:58'),
(161, 'Maaza', 35, '600ml', 5, '2021-10-18 12:58:31'),
(162, 'Sprite', 35, '600ml', 5, '2021-10-18 12:59:13'),
(163, 'Frooti', 65, '1.2L', 5, '2021-10-18 13:11:57'),
(164, 'Thums-up', 37, '750ml', 5, '2021-10-18 13:15:33'),
(165, 'Mountain Dew', 16, '250ml', 5, '2021-10-18 13:16:19');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(21) NOT NULL,
  `orderId` int(21) NOT NULL,
  `foodId` int(21) NOT NULL,
  `itemQuantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `orderId`, `foodId`, `itemQuantity`) VALUES
(1, 1, 2, 1),
(2, 2, 7, 1),
(3, 3, 78, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(21) NOT NULL,
  `userId` int(21) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipCode` int(21) NOT NULL,
  `phoneNo` bigint(21) NOT NULL,
  `amount` int(200) NOT NULL,
  `paymentMode` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=cash on delivery, \r\n1=online ',
  `orderStatus` enum('0','1','2','3','4','5','6') NOT NULL DEFAULT '0' COMMENT '0=Order Placed.\r\n1=Order Confirmed.\r\n2=Preparing your Order.\r\n3=Your order is on the way!\r\n4=Order Delivered.\r\n5=Order Denied.\r\n6=Order Cancelled.',
  `orderDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `userId`, `address`, `zipCode`, `phoneNo`, `amount`, `paymentMode`, `orderStatus`, `orderDate`) VALUES
(1, 2, 'B.K.NO.383, ROOM.NO.11,NEAR MILAN APT BARRACK,OPP SHIV SHAKTI SALOON, ', 421001, 9284283776, 199, '0', '0', '2021-09-29 23:42:54'),
(2, 2, 'B.K.NO.383, ROOM.NO.11,NEAR MILAN APT BARRACK,OPP SHIV SHAKTI SALOON, ', 421001, 9284283776, 299, '0', '0', '2021-10-11 16:42:28'),
(3, 2, 'B.K.NO.383, ROOM.NO.11,NEAR MILAN APT BARRACK,OPP SHIV SHAKTI SALOON, ', 421001, 9284283776, 79, '0', '1', '2021-10-14 22:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restid` int(12) NOT NULL,
  `restName` varchar(255) NOT NULL,
  `restDesc` text NOT NULL,
  `restCreateDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restid`, `restName`, `restDesc`, `restCreateDate`) VALUES
(7, 'Thane Branch', 'To provide our guests with a comfortable, quality, and satisfying dining experience using local, seasonal ingredients in classic dishes paired with select wine.', '2021-10-17 11:37:44'),
(8, 'Mulund Branch', 'To create an environment where absolute guest satisfaction is our highest priority.”', '2021-10-17 11:38:21'),
(9, 'Nahur Branch', 'To be financially successful through great people consistently delivering outstanding food, drinks and service in an inviting atmosphere, making every guest loyal', '2021-10-17 11:38:51'),
(10, 'Vikhroli Branch', 'To carry on our commitment to and passion for hearty and flavorful food, heartfelt service, and public safety', '2021-10-17 11:40:07'),
(11, 'Chembur Branch', 'Make amazing food – offer warm welcoming service – give back to the neighborhood – run an efficient, profitable business – make flour a better place for both our customers and ourselves', '2021-10-17 11:40:40'),
(12, 'Dadar Branch', 'Make insanely tasty food, provide healthier nutrition on the go, and do it with the smallest environmental footprint possible.', '2021-10-17 11:41:08'),
(13, 'Vashi Branch', 'Serve only the highest quality product, prepare it in a clean and sparkling environment, and serve it in a warm and friendly manner.', '2021-10-17 11:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `sitedetail`
--

CREATE TABLE `sitedetail` (
  `tempId` int(11) NOT NULL,
  `systemName` varchar(21) NOT NULL,
  `email` varchar(35) NOT NULL,
  `contact1` bigint(21) NOT NULL,
  `contact2` bigint(21) DEFAULT NULL COMMENT 'Optional',
  `address` text NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sitedetail`
--

INSERT INTO `sitedetail` (`tempId`, `systemName`, `email`, `contact1`, `contact2`, `address`, `dateTime`) VALUES
(1, 'Munch Square', 'munchsquare@mail.com', 2515469442, 6304468851, '601 Sherwood Ave.<br> San Bernandino', '2021-03-23 19:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(21) NOT NULL,
  `username` varchar(21) NOT NULL,
  `firstName` varchar(21) NOT NULL,
  `lastName` varchar(21) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `userType` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=user\r\n1=admin',
  `password` varchar(255) NOT NULL,
  `joinDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `email`, `phone`, `userType`, `password`, `joinDate`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', 1111111111, '1', '$2y$10$AAfxRFOYbl7FdN17rN3fgeiPu/xQrx6MnvRGzqjVHlGqHAM4d9T1i', '2021-04-11 11:40:58'),
(2, 'hirthik123', 'Hirthik', 'Pamnani', 'd2019hirthik.pamnani@ves.ac.in', 9284283776, '0', '$2y$10$/Tp5nlaj0BXPOrUjVSVqIOnXXZNNPOYvDNEq3oNqqZ/fNY7u/NAY2', '2021-09-29 23:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `viewcart`
--

CREATE TABLE `viewcart` (
  `cartItemId` int(11) NOT NULL,
  `foodId` int(11) NOT NULL,
  `itemQuantity` int(100) NOT NULL,
  `userId` int(11) NOT NULL,
  `addedDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `viewcart`
--

INSERT INTO `viewcart` (`cartItemId`, `foodId`, `itemQuantity`, `userId`, `addedDate`) VALUES
(7, 134, 3, 2, '2021-10-21 17:16:47'),
(8, 155, 4, 2, '2021-10-21 17:16:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categorieId`);
ALTER TABLE `categories` ADD FULLTEXT KEY `categorieName` (`categorieName`,`categorieDesc`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `contactreply`
--
ALTER TABLE `contactreply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliverydetails`
--
ALTER TABLE `deliverydetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orderId` (`orderId`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodId`);
ALTER TABLE `food` ADD FULLTEXT KEY `pizzaName` (`foodName`,`foodDesc`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restid`);

--
-- Indexes for table `sitedetail`
--
ALTER TABLE `sitedetail`
  ADD PRIMARY KEY (`tempId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `viewcart`
--
ALTER TABLE `viewcart`
  ADD PRIMARY KEY (`cartItemId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categorieId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactId` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactreply`
--
ALTER TABLE `contactreply`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deliverydetails`
--
ALTER TABLE `deliverydetails`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foodId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sitedetail`
--
ALTER TABLE `sitedetail`
  MODIFY `tempId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `viewcart`
--
ALTER TABLE `viewcart`
  MODIFY `cartItemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
