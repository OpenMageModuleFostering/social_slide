<?php

$installer = $this;

$installer->startSetup();

$installer->run("
CREATE TABLE IF NOT EXISTS `{$this->getTable('ksv_socialgp')}` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `key_id` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `desc` text NOT NULL,
  `plus` int(11) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=106 ;
");

$installer->endSetup();
