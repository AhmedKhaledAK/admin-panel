<?php
require '../connect_database.php';
if(isset($_POST['deleted_id'])){
	$id = $_POST['deleted_id'];

	$sql = "delete from slider where id = '$id'";
	if($conn->query($sql)==true){
		echo "success";
	} else {
		echo "error1";
	}
}else{
	echo "error2";
}

?>
