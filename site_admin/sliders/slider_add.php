<?php
if(isset($_POST['heading_slider'], $_POST['pragraph_slider'], $_FILES['img_slider'])){
	$title = $_POST['heading_slider'];
	$content = $_POST['pragraph_slider'];

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
		require '../connect_database.php';
		$sql = "insert into slider (`title`, `description`, `image`) values ('$title', '$content', '$file_name')";
		if($conn->query($sql)){
			echo "success";
		} else {
			echo mysqli_error($conn);
		}
	} else {
		print_r($errors);
	}
} else {
	echo "error11";
}

?>
