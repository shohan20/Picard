<?php
session_start();
if(!empty($_FILES['files']['name'][0])){
	$files= $_FILES['files'];
	$uploaded= array();
	$failed= array();
	foreach ($files['name'] as $position => $file_name) {
		$file_tmp=$files['tmp_name'][$position];
		$file_size=$files['size'][$position];
		$file_error = $files['error'][$position];
		$file_ext=explode('.', $file_name);
		$file_ext=strtolower(end($file_ext));
		$check = getimagesize($file_tmp);
    		if($check !== false && $file_error==0) {
    			$file_name_new=uniqid('',true).'.'.$file_ext;
    			if (!file_exists($_SESSION['id'])) {
    				mkdir($_SESSION['id'], 0777, true);
    				$file_destination=$_SESSION['id'].'/'.$file_name_new;
    				if(move_uploaded_file($file_tmp, $file_destination)){
    					$uploaded[$position]=$file_destination;
    				}
    				else{
    					$failed[$position]=$file_name." not uploaded";
    				}
				}
				else{
					$file_destination=$_SESSION['id'].'/'.$file_name_new;
    				if(move_uploaded_file($file_tmp, $file_destination)){
    					$uploaded[$position]=$file_destination;
    				}
    				else{
    					$failed[$position]=$file_name." not uploaded";
    				}
				}
			}
			else{
				$failed[$position]=$file_name." extension ".$file_ext." not allowed";
			}
	}
	if(!empty($uploaded)){
		print_r($uploaded);
	}
	if(!empty($failed)){
		print_r($failed);
	}
}
else
	echo "no file has selected";
?>