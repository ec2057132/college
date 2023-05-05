CREATE TABLE `card` (
  `c_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `u_id` int(255) UNSIGNED NOT NULL,
  `c_number` VARCHAR(16) NOT NULL,
  `c_name` VARCHAR(70) NOT NULL,
  `e_cvc` int(3) UNSIGNED NOT NULL,
  `c_ex_month` SMALLINT(2) UNSIGNED NOT NULL,
  `c_ex_year` SMALLINT(4) UNSIGNED NOT NULL,
  `s_date` DATETIME NOT NULL,
  PRIMARY KEY (c_id)
);