<?php 
	$this->smarty->assign('entry_name', $this->CreateInputText($id, 'name', $title, 30, 255));
	$this->smarty->assign('entry_body', $this->CreateTextArea(true, $id, $content, 'body'));
	$this->smarty->assign('entry_link', $this->CreateInputText($id, 'link', $link, 30,255));
	$this->smarty->assign('entry_image', $this->CreateFileUploadInput($id, 'image', $link, 30,255));
	
	$this->smarty->assign('startform', $this->CreateFormStart($id, 'createentry', $returnid,'post','multipart/form-data'));
	$this->smarty->assign('submit', $this->CreateInputSubmit($id, 'submit', lang('create')));
	$this->smarty->assign('endform', $this->CreateFormEnd());
	echo $this->ProcessTemplate('add_entry.tpl');
?>