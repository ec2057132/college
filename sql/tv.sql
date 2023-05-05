CREATE TABLE `tv` (
  `tv_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tv_title` VARCHAR(40) NOT NULL,
  `tv_description` VARCHAR(500) NOT NULL,
  `tv_year` SMALLINT(4) UNSIGNED NOT NULL,
  `g_id_1` SMALLINT(2) UNSIGNED NOT NULL,
  `g_id_2` SMALLINT(2) UNSIGNED NULL,
  `g_id_3` SMALLINT(2) UNSIGNED NULL,
  `tv_thumbnail` VARCHAR(50) NOT NULL,
  `tv_trailer` VARCHAR(300) NOT NULL,
  `tv_creator` VARCHAR(60) NOT NULL,
  `tv_actors` VARCHAR(500) NOT NULL,
  `tv_age` SMALLINT(2) UNSIGNED NOT NULL,
  PRIMARY KEY (tv_id)
);