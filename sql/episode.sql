CREATE TABLE `episode` (
  `e_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tv_id` int(255) UNSIGNED NOT NULL,
  `s_id` TINYINT(255) UNSIGNED NOT NULL,
  `e_number` int(255) UNSIGNED NOT NULL,
  `e_title` VARCHAR(40) NOT NULL,
  `e_description` VARCHAR(500) NOT NULL,
  `e_duration` SMALLINT(4) UNSIGNED NOT NULL,
  PRIMARY KEY (e_id)
);