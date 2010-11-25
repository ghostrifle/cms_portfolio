<?php 
	// create entry link
	$smarty->assign('addlink', $this->CreateLink($id, 'add_entry', $returnid, $gCms->variables['admintheme']->DisplayImage('icons/system/newobject.gif', 		$this->Lang('add_entry'),'','','systemicon'), array(), '', false, false, '') .' '. $this->CreateLink($id, 'add_entry', $returnid, $this->Lang('add_entry'), 	array(), '', false, false, 'class="pageoptions"'));


	// getting the entries
	$db = $gCms->GetDb();

	$entries = $db->GetAll('SELECT * FROM cms_portfolio');
	
	for($i = 0; $i < count($entries); $i++){
		$entries[$i]['edit_link'] = $this->CreateLink($id, 'edit_entry', $returnid, $gCms->variables['admintheme']->DisplayImage('icons/system/edit.gif', 		$this->Lang('edit_entry'),'','','systemicon'), array('entry_id' => $entries[$i]['id']), '', false, false, '');
		$entries[$i]['delete_link'] = $this->CreateLink($id, 'delete_entry', $returnid, $gCms->variables['admintheme']->DisplayImage('icons/system/delete.gif', 		$this->Lang('edit_entry'),'','','systemicon'), array('entry_id' => $entries[$i]['id']), '', false, false, '');	
	}
	
	$smarty->assign_by_ref('PORTFOLIO_ENTRIES',$entries);

	echo $this->ProcessTemplate('index.tpl');
?>