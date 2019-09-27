<?php
require '../connect_database.php';
$sql="";
if(isset($_POST['heading_slider'], $_POST['pragraph_slider'])){
	$title = $_POST['heading_slider'];
	$content = $_POST['pragraph_slider'];
	$id = $_POST['edit_id'];


	if(empty($_FILES['img_slider']['name'])){
		$sql = "update slider set title='$title', description='$content' where id=	$id";
		if($conn->query($sql)){
			echo "success";
		} else {
			echo mysqli_error($conn);
		}
	}

	else {
		$errors = array();
		$file_name = $_FILES['img_slider']['name'];
		$file_size = $_FILES['img_slider']['size'];
		$file_tmp = $_FILES['img_slider']['tmp_name'];
		$file_type = $_FILES['img_slider']['type'];

		$split = explode('.', $file_name);
		$file_ext = strtolower(end($split));
		$extensions = array("jpeg", "jpg", "png");
		if(in_array($file_ext, $extensions) === false){
			$errors[] = "extension not allowed, please a jpe or png file.";
		}

		if($file_size > 20971592){
			$errors[]="files size must be exactly 2 mb";
		}

		if(empty($errors)==true){
			move_uploaded_file($file_tmp, "../../course_site/images/slider/".$file_name);

			$sql = "update slider set title='$title', description='$content', image='$file_name' where id=	$id";
			if($conn->query($sql)){
				$fname = $_POST['image'];
				unlink("../course_site/images/slider/".$fname);
				echo "success";
			} else {
				echo mysqli_error($conn);
			}
		} else {
			print_r($errors);
			echo "error in error array";
		}
	}



} else {
	echo "error11";
}
?>
