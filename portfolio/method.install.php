<?php
if (!isset($gCms)) exit;

$db =& $this->GetDb();

// creating the database entries
$db->Execute('CREATE TABLE IF NOT EXISTS `'.cms_db_prefix().'portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;');

// creating directories
$config = $gCms->getConfig();
mkdir($config['root_path'].'/uploads/images/portfolio');
?>