CREATE TABLE `admin` (
  `a_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(75) NOT NULL,
  `pwd` VARCHAR(65535) NOT NULL,
  PRIMARY KEY (a_id),
  UNIQUE(email)
);