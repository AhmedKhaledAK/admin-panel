
<?php
echo exec('whoami');
require '../connect_database.php';
$sql = "select * from slider";
$sliders = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<title>slider</title>
</head>
<body>
		<?php require "../partials/header.php" ;?>+
	<!-- start table slider -->
	<div class="container">
		<div class="row">
		<div class="form col-lg-10 col-md-offset-2 marg">
			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addslider" data-whatever="@mdo">
			Add To slider</button>
			<div class="modal fade" id="addslider" tabindex="-1" role="dialog" aria-labelledby="addsliderLabel"
			 aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="addsliderLabel">New Slider</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="form_add" action="#" method="POST" enctype="multipart/form-data">
			          <div class="form-group">
			            <input type="file" class="form-control  btn-warning"  name="img_slider">
			          </div>
			          <div class="form-group">
					    <input type="text" class="form-control" placeholder="heading"  name="heading_slider" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
					    <input type="text" class="form-control" placeholder="pragraph"  name="pragraph_slider" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="btn_add" type="submit" class="btn btn-primary"> Add Slider </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<!-- model Edit  -->
		<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="EditLabel">Edit Slider</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="form_edit" action="php_site/generl_input.php" method="POST" enctype="multipart/form-data">
			        	<img id="selected_img" src="" style="width: 70px; height: 70px">
			          <div class="form-group">
			            <input type="file" class="form-control  btn-info"  name="img_slider" id="img_edit" onchange="changing()">
			          </div>
			          <div class="form-group">
					    <input id="title_id" type="text" class="form-control" placeholder="heading"  name="heading_slider" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
					    <input id="desc_id" type="text" class="form-control" placeholder="pragraph"  name="pragraph_slider" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
					    <input type="hidden" class="form-control" placeholder="pragraph"  id="edit_id" name="edit_id" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
					    <input type="text" class="form-control" placeholder="pragraph"  id="image" name="image" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="btn_edit_slider" type="submit" class="btn btn-primary"> Edit Slider </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<!-- end modal edit -->


		<!-- delet modal -->
		<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="EditLabel">Delete Slider</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form id="form_delete" action="php_site/generl_input.php" method="POST" enctype="multipart/form-data">
			          <div class="form-group">
					    <input type="text" class="form-control" placeholder="pragraph" id="deleted_id" name="deleted_id" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button id="btn_delete_slider" type="submit" class="btn btn-primary"> Delete Slider </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<!-- end of delete modal -->

		<div class="col-lg-10 col-md-offset-2">
			<table class="table ">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>heading</th>
			      <th>pragrph</th>
			      <th>Img</th>
			      <th>Edit</th>
			      <th>Delete</th>
			    </tr>
			  </thead>
			  <tbody>

			  	<?php foreach($sliders as $key => $value) { ?>
			    <tr>
			      <th scope="row"><?php echo $key+1; ?></th>
			      <td><?php echo $value['title']; ?></td>
			      <td><?php echo $value['description']; ?></td>
			      <td><img width="70" height="70" src="../../course_site/images/slider/<?php echo $value['image']; ?>"></td>
				  <td><button id="btn_edit" data-id="<?php echo $value['id']; ?>" data-title="<?php echo $value['title']; ?>" data-desc="<?php echo $value['description']; ?>" data-img="<?php echo $value['image']; ?>" type="button" class="btn btn-info" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
				  <td><button id="btn_delete" data-id="<?php echo $value['id']; ?>" data-toggle="modal" id="delete" class="btn btn-danger" data-target="#Delete"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
			    </tr>
			<?php } ?>
			</table>
		</div>
	</div>
</div>
<!-- end table slider -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>
 <script type="text/javascript">

$(document).on('click', '#btn_add', function(a){
	var data = new FormData(document.getElementById('form_add'));
	$.ajax({
		type: 'POST',
		url: "slider_add.php",
		data: data,
		async: false,
		processData: false,
		contentType: false,
	}).done(function (data) {
		console.log(data);
		if (data=="success") {
			window.location.reload();
		}
		else{
			alert(data+ " failed");
		}

 });
 a.preventDefault();
});

$(document).on('click', '#btn_delete_slider', function(a){
	var data = new FormData(document.getElementById('form_delete'));
	$.ajax({
		type: 'POST',
		url: "slider_delete.php",
		data: data,
		async: false,
		processData: false,
		contentType: false,
	}).done(function (data) {
		console.log(data);
		if (data=="success") {
			window.location.reload();
		}
		else{
			alert(data+ " failed");
		}

 });
 a.preventDefault();
});


$(document).on('click', '#btn_delete', function(a){
	var id = $(this).data('id');
	$('#deleted_id').val(id);
});


$(document).on('click', '#btn_edit_slider', function(a){
	var data = new FormData(document.getElementById('form_edit'));
	$.ajax({
		type: 'POST',
    url: "slider_edit.php",
    data: data,
    async: false,
    processData: false,
    contentType: false,
	}).done(function (data) {
		console.log(data);
		if (data=="success") {
			alert("success");
			window.location.reload();
		}
		else{
			alert(data+ " failed");
		}

 });
 a.preventDefault();
});


$(document).on('click', '#btn_edit', function(a){
	var id = $(this).data('id');
	var title = $(this).data('title');
	var desc = $(this).data('desc');
	var image = $(this).data('img');
	alert(id+" "+title +" "+desc);
	$('#edit_id').val(id);
	$('#desc_id').val(desc);
	$('#title_id').val(title);
	$('#image').val(image);
	$('#selected_img').attr('src', '../../course_site/images/slider/'+image);
});

function changing(){
	var oFReader=new FileReader();
	oFReader.readAsDataURL(document.getElementById("img_edit").files[0]);
	oFReader.onload = function(oFREvenet){
		document.getElementById("selected_img").src = oFREvenet.target.result;
	}
}

 </script>
</body>
</html>
