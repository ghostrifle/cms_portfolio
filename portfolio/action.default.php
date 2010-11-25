<?php

// getting the entries
$db = $gCms->GetDb();

$entries = $db->GetAll('SELECT * FROM cms_portfolio');
$smarty->assign_by_ref('PORTFOLIO_ENTRIES',$entries);

$config = $gCms->getConfig();
$smarty->assign('ROOT_URL',$config['root_url']);

echo $this->ProcessTemplate('public.tpl');
?>