<?php

$db = $gCms->getDb();
$values = array();

array_push($values,$params['entry_id']);
$entry = $db->GetRow('SELECT * FROM '.cms_db_prefix().'portfolio WHERE id=?',$values);

$this->smarty->assign('entry_id', $this->CreateInputHidden($id, 'entry_id', $entry['id']));
$this->smarty->assign('entry_name', $this->CreateInputText($id, 'name', $entry['name'], 30, 255));
$this->smarty->assign('entry_body', $this->CreateTextArea(true, $id, $entry['body'], 'body'));
$this->smarty->assign('entry_link', $this->CreateInputText($id, 'link', $entry['link'], 30,255));
$this->smarty->assign('entry_image', $this->CreateFileUploadInput($id, 'image', $link, 30,255));

$this->smarty->assign('startform', $this->CreateFormStart($id, 'updateentry', $returnid,'post','multipart/form-data'));
$this->smarty->assign('submit', $this->CreateInputSubmit($id, 'submit', $this->lang('update')));
$this->smarty->assign('endform', $this->CreateFormEnd());

$config = $gCms->getConfig();
$smarty->assign('ROOT_URL',$config['root_url']);
$smarty->assign_by_ref('ENTRY',$entry);

echo $this->ProcessTemplate('edit_entry.tpl');
?>