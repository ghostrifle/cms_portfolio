<?php



$db = $gCms->getDb();
$values = array();

array_push($values,$params['entry_id']);
$db->Execute('DELETE FROM '.cms_db_prefix().'portfolio WHERE id=?',$values);

$this->Redirect($id, 'defaultadmin', $returnid);
?>