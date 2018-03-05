<?php

$installer = $this;

$installer->startSetup();

$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('whistling')};
CREATE TABLE {$this->getTable('whistling')} (
  `whistling_id` int(11) unsigned NOT NULL auto_increment,
  `customer_id` varchar(255) NOT NULL default '',
  `product_id` varchar(255) NOT NULL default '',
  PRIMARY KEY (`whistling_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");

$installer->endSetup(); 