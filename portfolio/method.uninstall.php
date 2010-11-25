<?php
if (!isset($gCms)) exit;

$db =& $this->GetDb();

$db->Execute('DROP TABLE '.cms_db_prefix().'portfolio;');
?>