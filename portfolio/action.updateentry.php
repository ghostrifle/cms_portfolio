<?php

// getting the database connection
$db = $gCms->GetDb();

// getting the entry
$values = array();
array_push($values,$params['entry_id']);
$entry = $db->GetRow('SELECT * FROM '.cms_db_prefix().'portfolio WHERE id=?',$values);

$image_file_name = $entry['image'];

// image upload handling
if(isset($_FILES['m1_image']['tmp_name'])){
	$config = $gCms->getConfig();
	$image_move_path = $config['root_path'].'/uploads/images/portfolio/'.$_FILES['m1_image']['name'];
	
	if(move_uploaded_file($_FILES['m1_image']['tmp_name'],$image_move_path)){
		$image_file_name = $_FILES['m1_image']['name'];
		
		// resizing
		require_once $config['root_path'].'/modules/portfolio/lib/ThumbLib.inc.php';  

		$thumb = PhpThumbFactory::create($image_move_path);  
		$thumb->resize(180, 180)->save($image_move_path);
	  }else{
		// error handling
	}
}

// storing the new entry
$values = array();
array_push($values,$params['name']);
array_push($values,$params['body']);
array_push($values,$params['link']);
array_push($values,$image_file_name);
array_push($values,$entry['id']);

$db->Execute('UPDATE '.cms_db_prefix().'portfolio SET name=?,body=?,link=?,image=? WHERE id=?;',$values);

// back to the default admin after creating the entry
$this->Redirect($id, 'defaultadmin', $returnid);
?>