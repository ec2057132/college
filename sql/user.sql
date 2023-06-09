CREATE TABLE `user` (
  `u_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_name` VARCHAR(25) NOT NULL,
  `s_name` VARCHAR(25) NOT NULL,
  `email` VARCHAR(75) NOT NULL,
  `p_num` VARCHAR(20) NOT NULL,
  `dob_d` SMALLINT(2) UNSIGNED NOT NULL,
  `dob_m` SMALLINT(2) UNSIGNED NOT NULL,
  `dob_y` SMALLINT(4) UNSIGNED NOT NULL,
  `cntry` VARCHAR(60) NOT NULL,
  `pwd` VARCHAR(65535) NOT NULL,
  `sub_status` BOOLEAN DEFAULT 0 NOT NULL,
  `sec_q_1` VARCHAR(75) NOT NULL,
  `sec_q_1_a` VARCHAR(200) NOT NULL,
  `sec_q_2` VARCHAR(75) NOT NULL,
  `sec_q_2_a` VARCHAR(200) NOT NULL,
  `act_status` SMALLINT(3) UNSIGNED DEFAULT 1 NOT NULL,
  `j_date` DATETIME NOT NULL,
  `a_id` int(255) UNSIGNED NULL,
  PRIMARY KEY (u_id),
  UNIQUE(email)
);