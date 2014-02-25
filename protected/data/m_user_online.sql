CREATE TABLE `m_user_online` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(20) NOT NULL,
	`password` VARCHAR(128) NOT NULL,
	`activationKey` VARCHAR(128) NOT NULL DEFAULT '',
	`createtime` INT(10) NOT NULL DEFAULT '0',
	`lastvisit` INT(10) NOT NULL DEFAULT '0',
	`lastaction` INT(10) NOT NULL DEFAULT '0',
	`lastpasswordchange` INT(10) NOT NULL DEFAULT '0',
	`superuser` INT(1) NOT NULL DEFAULT '0',
	`status` INT(1) NOT NULL DEFAULT '0',
	`avatar` VARCHAR(255) NULL DEFAULT NULL,
	`notifyType` ENUM('None','Digest','Instant','Threshold') NULL DEFAULT 'Instant',
	PRIMARY KEY (`id`),
	UNIQUE INDEX `username` (`username`),
	INDEX `status` (`status`),
	INDEX `superuser` (`superuser`)
)