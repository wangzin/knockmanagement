/*
SQLyog Ultimate v8.82 
MySQL - 5.5.5-10.4.32-MariaDB : Database - knockmanagement
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`knockmanagement` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `knockmanagement`;

/*Table structure for table `abouts` */

DROP TABLE IF EXISTS `abouts`;

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `instegram` varchar(200) DEFAULT NULL,
  `linkin` varchar(200) DEFAULT NULL,
  `youtube` varchar(200) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `vision` varchar(500) DEFAULT NULL,
  `org_name` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `location_map` text DEFAULT NULL,
  `operation_hours` text DEFAULT NULL,
  `welcome_note` text DEFAULT NULL,
  `welcome_note1` text DEFAULT NULL,
  `slider_type` enum('image','video') DEFAULT 'image',
  `video_slider` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `image2` varchar(200) DEFAULT NULL,
  `image3` varchar(200) DEFAULT NULL,
  `mission` varchar(500) DEFAULT NULL,
  `slider_title` varchar(200) DEFAULT NULL,
  `slider_details` text DEFAULT NULL,
  `about_video` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `abouts` */

insert  into `abouts`(`id`,`contact`,`email`,`facebook`,`twitter`,`instegram`,`linkin`,`youtube`,`about`,`vision`,`org_name`,`logo`,`description`,`address`,`location_map`,`operation_hours`,`welcome_note`,`welcome_note1`,`slider_type`,`video_slider`,`image`,`image2`,`image3`,`mission`,`slider_title`,`slider_details`,`about_video`) values (1,'123123123','knockmanagement@gmail.com','https://www.facebook.com','https://www.twitter.com/','https://www.instagram.com/','https://www.linkedin.com/','https://www.youtube.com/','Knock Management is a dynamic new enterprise offering integrated operational support and resource solutions. We address critical, everyday challenges for businesses by providing reliable staffing, specialized cleaning services, and plans for sustainable agricultural production. Our mission is to be a versatile partner that enhances our clients\' operational efficiency, cleanliness, and resource stability. This plan details our phased strategy to launch and scale our core service lines, establish a strong market presence, and build a financially sustainable company poised for growth.','To become the most trusted partner for businesses seeking comprehensive operational support, from maintaining pristine environments to securing a dependable workforce.','Knock Management ','1771893022logo1.jpeg',NULL,' 1440 Lawrence Ave. West, Toronto, Ontario, Canada','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.066313204408!2d-79.48175582526196!3d43.70917094881111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b31665b5a624b%3A0xfe567a4c18f4e227!2s1440%20Lawrence%20Ave%20W%2C%20North%20York%2C%20ON%20M6L%201B4!5e0!3m2!1sen!2sca!4v1772135836246!5m2!1sen!2sca\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>','<p><span style=\"color: rgb(255, 255, 255);\">Monday                                     9:00 AM - 5:00 PM</span></p><p><span style=\"color: rgb(255, 255, 255);\">Tuesday                                    9:00 AM - 5:00 PM</span></p><p><span style=\"color: rgb(255, 255, 255);\">Wednesday                            9:00 AM - 5:00 PM</span></p><p><span style=\"color: rgb(255, 255, 255);\">Thursday                                  9:00 AM - 5:00 PM</span></p><p><span style=\"color: rgb(255, 255, 255);\">Friday                                        9:00 AM - 5:00 PM</span></p><p><span style=\"color: rgb(255, 255, 255);\">Saturday & Sunday             Closed</span></p>','We Started Since 2018. <br>\r\nBest staffing in Toronto.',NULL,'','1771917181700_F_412650544_qebTo1CjQxtHF0wpCJVVW1Ihpuez4yVl_ST.mp4','17718939816655117987f4776a999784c179aa1047_-ontario-toronto-division-toronto-scarborough-the-wellspring-centre-416-284-1969html.jpg','1771893981blue.jpg','1772040666u5new.webp.bv.webp','Knock Management empowers businesses to focus on their core operations by delivering exceptional, reliable, and tailored services in cleaning, staffing, and sustainable agriculture. We are committed to quality, reliability, and building long-term partnerships that foster mutual growth.','Knock Management - Trusted Cleaning Company in Toronto','Professional Commercial Cleaning & Janitorial Services in Toronto','1771921031700_F_412650544_qebTo1CjQxtHF0wpCJVVW1Ihpuez4yVl_ST.mp4');

/*Table structure for table `cleaning_process` */

DROP TABLE IF EXISTS `cleaning_process`;

CREATE TABLE `cleaning_process` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sequence` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `cleaning_process` */

insert  into `cleaning_process`(`id`,`name`,`description`,`details`,`image`,`sequence`,`created_at`,`updated_at`) values (1,'Step 1: Understanding Your Requirements','We start by talking to the client and understanding the size, type, and frequency of cleaning needed. This ensures the service is tailored to their facility.','','1771950564MCA-21-1.png',1,'2026-02-24 04:29:24','2026-02-24 04:32:13'),(2,'Step 2: Customized Cleaning Plan','Based on the requirements, we create a personalized cleaning plan that fits the client’s schedule, facility type, and unique needs.','','1771951160MCA-10-1.png',2,'2026-02-24 04:39:20',NULL),(3,'Step 3: Professional Cleaning Service','Our trained technicians carry out the cleaning using professional equipment and methods, following the customized plan to ensure consistent quality.','','1771951284MCA-9-1.png',3,'2026-02-24 04:39:47','2026-02-24 04:41:24'),(5,'Step 4: Quality Check & Ongoing Support','After each service, we check the results, gather client feedback, and provide ongoing support to ensure satisfaction and long-term service reliability.','','1771951316MCA-8-1.png',4,'2026-02-24 04:41:56',NULL);

/*Table structure for table `cleaning_services` */

DROP TABLE IF EXISTS `cleaning_services`;

CREATE TABLE `cleaning_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sequence` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `cleaning_services` */

insert  into `cleaning_services`(`id`,`name`,`description`,`details`,`image`,`sequence`,`created_at`,`updated_at`) values (2,'Residential Cleaning','Comprehensive home cleaning tailored to your needs. From weekly maintenance to deep cleaning sessions.','<span style=\"color: rgb(103, 115, 126); font-family: ui-sans-serif, system-ui, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: medium;\">Comprehensive home cleaning tailored to your needs. From weekly maintenance to deep cleaning sessions.</span>','1772157136images.png',1,'2026-02-27 01:52:16',NULL),(3,'Commercial Cleaning','Keep your workplace pristine and professional. Custom schedules for offices, retail, and more.','<span style=\"color: rgb(103, 115, 126); font-family: ui-sans-serif, system-ui, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: medium;\">Keep your workplace pristine and professional. Custom schedules for offices, retail, and more.</span>','1772157208comm.png',2,'2026-02-27 01:53:28',NULL),(4,'Deep Cleaning','Intensive cleaning that reaches every corner. Perfect for move-ins, move-outs, or seasonal refresh.','<span style=\"color: rgb(103, 115, 126); font-family: ui-sans-serif, system-ui, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: medium;\">Intensive cleaning that reaches every corner. Perfect for move-ins, move-outs, or seasonal refresh.</span>','17721572944419438.png',3,'2026-02-27 01:54:54',NULL);

/*Table structure for table `excellence` */

DROP TABLE IF EXISTS `excellence`;

CREATE TABLE `excellence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sequence` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `excellence` */

insert  into `excellence`(`id`,`name`,`description`,`details`,`image`,`sequence`,`created_at`,`updated_at`) values (1,'Proven Experience','30+ years in the commercial cleaning industry and 500+ satisfied clients across the GTA','','1771946332dswa.webp',1,'2026-02-24 03:18:52',NULL),(2,'Professional & Reliable Team','Fully trained, insured, and background-checked staff dedicated to quality and consistency.','','1771946359fs.webp',2,'2026-02-24 03:19:19',NULL),(3,'Eco-Friendly Approach','We use advanced, environmentally safe products and modern equipment for a cleaner, healthier workspace.','','1771946430udtcyh.webp',3,'2026-02-24 03:20:30',NULL),(5,'Sustainable Growth','Our unique \"Knock Grow\" initiative ensures we grow alongside the community through sustainable practices.','','1771947883stylish-sustainable-growth-icon_611551-16624.avif',5,'2026-02-24 03:37:22','2026-02-24 03:44:43'),(6,'Integrated Solutions','From commercial cleaning to industrial staffing, we provide a single point of contact for your operations.','','1771947936unnamed.jpg',6,'2026-02-24 03:45:36',NULL),(8,'Proven Reliability','We solve the pain point of inconsistent quality by implementing strict operational protocols.','','1771948146logo-png-mnl3yzxNG3fPzEML.avif',8,'2026-02-24 03:49:06',NULL);

/*Table structure for table `menus` */

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('menu','submenu') DEFAULT 'menu',
  `has_submenu` enum('No','Yes') DEFAULT 'No',
  `menu_id` int(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sequence` int(11) NOT NULL,
  `sub_sequence` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `menus` */

insert  into `menus`(`id`,`type`,`has_submenu`,`menu_id`,`name`,`description`,`image`,`sequence`,`sub_sequence`,`created_at`,`updated_at`) values (1,'menu','No',NULL,'About Us','<h2 class=\"text-white mb-3\" style=\"margin-top: 0px; font-weight: 700; line-height: 1.2; font-size: 46px; --bs-text-opacity: 1; font-family: &quot;Plus Jakarta Sans&quot;, sans-serif; margin-bottom: 1rem !important; color: rgb(255, 255, 255) !important;\"><span style=\"background-color: rgb(255, 255, 255);\">Knock Management</span></h2><p class=\"text-white\" style=\"margin-bottom: 1rem; font-size: 20px; --bs-text-opacity: 1; font-family: &quot;Plus Jakarta Sans&quot;, sans-serif; color: rgb(255, 255, 255) !important;\"><span style=\"background-color: rgb(255, 255, 255);\">Knock Management is a dynamic new enterprise offering integrated operational support and resource solutions. We address critical, everyday challenges for businesses by providing reliable staffing, specialized cleaning services, and plans for sustainable agricultural production. Our mission is to be a versatile partner that enhances our clients\' operational efficiency, cleanliness, and resource stability. This plan details our phased strategy to launch and scale our core service lines, establish a strong market presence, and build a financially sustainable company poised for growth.</span></p>','1771916675Slider 10.jpg',1,NULL,'2025-01-29 09:54:52','2026-02-24 07:04:35');

/*Table structure for table `quotes` */

DROP TABLE IF EXISTS `quotes`;

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL DEFAULT 0,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(150) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `quotes` */

insert  into `quotes`(`id`,`full_name`,`email`,`phone`,`message`,`created_at`,`updated_at`,`updated_by`) values (0,'Tshewang Tenzin','wangzin53@gmail.com','4168238710','testtt','2026-02-26 08:12:48',NULL,NULL);

/*Table structure for table `registrations` */

DROP TABLE IF EXISTS `registrations`;

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(150) NOT NULL,
  `start_date` date NOT NULL,
  `worked_before` varchar(150) DEFAULT NULL,
  `immigration_status` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `shift` varchar(100) NOT NULL,
  `employment_status` varchar(150) NOT NULL,
  `resume` varchar(250) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `registrations` */

insert  into `registrations`(`id`,`full_name`,`email`,`phone`,`start_date`,`worked_before`,`immigration_status`,`address`,`shift`,`employment_status`,`resume`,`created_at`,`updated_at`,`updated_by`) values (1,'Tshewang Tenzin','wangzin53@gmail.com','4168238710','2026-03-03','No','Work Permit,Other','Longbow Sq\r\n3','Afternoon,Night','Employed-Part','1772135749GAO Tek Inc. - Internship Agreement Form.pdf','2026-02-26 07:55:49',NULL,NULL),(2,'Tshewang Tenzin','wangzin53@gmail.com','4168238710','2026-02-18','No','Student,Work Permit','Longbow Sq\r\n3,2','Weekend,Any','Employed-Part','1772136824GAO Tek Inc. - Internship Agreement Form.pdf','2026-02-26 08:13:44',NULL,NULL),(3,'Tshewang Tenzin','wangzin53@gmail.com','4168238710','2026-03-18','Yes','Student','Longbow Sq\r\n3','Afternoon','Employed-Full','1772395798Scanned Document 5.pdf','2026-03-01 08:09:58',NULL,NULL),(4,'Tshewang Tenzin','wangzin531@gmail.com','4168238710','2026-03-25','Yes','Work Permit','Longbow Sq\r\n3','Morning','Retired','1772396066IMM0127_2-1EMSPYZD (1).pdf','2026-03-01 08:14:26',NULL,NULL);

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sequence` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `services` */

insert  into `services`(`id`,`name`,`description`,`details`,`image`,`sequence`,`created_at`,`updated_at`) values (2,'Retail & Professional','Pristine cleaning for banks, retail stores, and professional offices to ensure a premium client experience.','<br>','1771941645printine cleaning.avif',1,'2025-02-12 05:49:44','2026-02-24 02:00:45'),(3,'Industrial & Manufacturing','Reliable staffing solutions for light industrial factories and manufacturing plants across the GTA.','<br>','1771941695photo-1581091226825-a6a2a5aee158.avif',2,'2025-02-12 06:04:00','2026-02-24 02:01:35'),(5,'Agriculture & Local Farms','Supporting local farms with seasonal staffing and developing sustainable agricultural production.','','1771941729agriculture.avif',3,'2026-02-24 02:02:09',NULL);

/*Table structure for table `sliders` */

DROP TABLE IF EXISTS `sliders`;

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `seq` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `sliders` */

insert  into `sliders`(`id`,`name`,`description`,`details`,`image`,`seq`,`created_at`,`updated_at`) values (18,'Glass Cleaning','Glass cleaning','<p><br></p>','1771917460240_F_268642423_vXTKYzeYXFqkb5L9BMwnoLsczh6imvKY.jpg',1,'2025-01-30 12:27:58','2026-02-24 07:17:40'),(19,'Cleanign','General Cleaning','','1771917497240_F_204617538_hRpwEjHLwLKLVPvikPLsJCDjMaCrc7W9.jpg',2,'2025-02-10 06:47:54','2026-02-24 07:18:17'),(20,'Office Cleaning','Office Cleaning','','17719175291000_F_483655014_YAfRf0ynjM21iffNcIbkMx6rcj54F3t9.jpg',3,'2026-02-24 07:18:49',NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(244) NOT NULL,
  `password` varchar(244) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `contact_number` varchar(25) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status` enum('1','0') DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `last_updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`password`,`user_name`,`contact_number`,`description`,`role_id`,`status`,`image`,`created_at`,`last_updated_at`) values (1,'admin','$2y$10$JSIBmJQiR6FjXOhfRubg.ucjIc39JZq7yRHJQdmCp8D11KHcto6Re','Administrator','123123',NULL,1,'1','ss',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
