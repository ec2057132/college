CREATE TABLE `movie` (
  `m_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `m_title` VARCHAR(40) NOT NULL,
  `m_description` VARCHAR(500) NOT NULL,
  `m_year` SMALLINT(4) UNSIGNED NOT NULL,
  `g_id_1` SMALLINT(2) UNSIGNED NOT NULL,
  `g_id_2` SMALLINT(2) UNSIGNED NULL,
  `g_id_3` SMALLINT(2) UNSIGNED NULL,
  `m_duration` SMALLINT(4) UNSIGNED NOT NULL,
  `m_thumbnail` VARCHAR(50) NOT NULL,
  `m_trailer` VARCHAR(300) NOT NULL,
  `m_director` VARCHAR(60) NOT NULL,
  `m_actors` VARCHAR(500) NOT NULL,
  `m_age` SMALLINT(2) UNSIGNED NOT NULL,
  PRIMARY KEY (m_id)
);