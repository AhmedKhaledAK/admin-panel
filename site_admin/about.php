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
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<title>Document</title>
</head>
<body>
	<?php require "header.php" ;?>
<!-- start  about -->
	<div class="container">
		<div class="row">
		<div class="form col-lg-10 col-md-offset-2 marg ">
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#about" data-whatever="@mdo">Add To Section</button>
			<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="aboutLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="aboutLabel">New Section</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" class="form-control  btn-info" id="select">
			          </div>
			          <div class="form-group">
			            <label for="title-text" class="form-control-label">title</label>
					    <input type="text" class="form-control" placeholder="title" id="title-text" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="text-text" class="form-control-label">text</label>
					    <input type="text" class="form-control" placeholder="text" id="text-text" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Add Section </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	

		<!-- model Edit about -->
		<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="editAbout" tabindex="-1" role="dialog"  aria-labelledby="Editabout" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="Editabout">Edit about</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" class="form-control  btn-info" id="select">
			          </div>
			          <div class="form-group">
			            <label for="title-text" class="form-control-label">title</label>
					    <input type="text" class="form-control" placeholder="title" id="title-text" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="text-text" class="form-control-label">text</label>
					    <input type="text" class="form-control" placeholder="text" id="text-text" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary"> Edit about </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
		<!-- end  edit modal -->

		<!-- show table about -->
			<div class="col-lg-10 col-md-offset-2">	
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>title</th>
				      <th>text</th>
				      <th>Img</th>
				       <th> Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Mark</td>
				      <td>Mark</td>
					   <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#editAbout" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
				  <td><button id="delete_about" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
			    </tr>
				</table>
			</div>
		</div>
	</div>	
<!-- end show table about -->

<!--  -->

<!-- start  skllis -->
	<div class="container">
		<div class="row">
		<div class="form col-lg-10 col-md-offset-2 ">
			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#skils" data-whatever="@mdo">Add To Sklis</button>
			<div class="modal fade" id="skils" tabindex="-1" role="dialog" aria-labelledby="Edieskiles" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="Edieskiles">New Sklis</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img:</label>
			            <input type="file" class="form-control  btn-warning " id="select">
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">title:</label>
					    <input type="text" class="form-control" placeholder="title" id="heading-text" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="pragraph-text" class="form-control-label">rate:</label>
					    <input type="text" class="form-control" placeholder="rate" id="pragraph-text" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Add Sklis </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>

		<!-- model Edit skils -->
		<div class="form col-lg-10 col-md-offset-2 ">
			<div class="modal fade" id="editSkils" tabindex="-1"  role="dialog" aria-labelledby="#skils" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="skils">Edit skiles</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" class="form-control  btn-warning" id="select">
			          </div>
			          <div class="form-group">
			            <label for="title-text" class="form-control-label">title</label>
					    <input type="text" class="form-control" placeholder="title" id="title-text" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="text-text" class="form-control-label">text</label>
					    <input type="text" class="form-control" placeholder="text" id="text-text" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary"> Edit skiles </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
		<!-- end  edit modal -->

		<!--  show table skils -->
			<div class="col-lg-10 col-md-offset-2">	
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>title</th>
				      <th>rate </th>
				       <th> Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Mark</td>
					   <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#editSkils" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
				  <td><button id="delete_skils" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
				</table>
			</div>
		</div>
	</div>	
<!-- end table skllis -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">

 var sure =document.getElementById('delete_about');
 sure.onclick = function () {
  	test = confirm('are you suer delete about');
 	if (test === true) {
 		alert('deleted succssfuly');
 	} 
 }

  var sure =document.getElementById('delete_skils');
 sure.onclick = function () {
  	test = confirm('are you suer delete skils');
 	if (test === true) {
 		alert('deleted succssfuly');
 	} 
 }
 </script>
</body>
</html>