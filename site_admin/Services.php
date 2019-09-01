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
<!-- start table slider -->
	<div class="container">
		<div class="row">
				<div class="form col-lg-10 col-md-offset-2 marg ">
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add To Services</button>
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">New Services</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form>
				          <div class="form-group">
				            <label for="select" class="form-control-label">select icon</label>
				            <input type="file" class="form-control  btn-danger" id="select">
				          </div>
				          <div class="form-group">
				            <label for="heading-text" class="form-control-label">heading</label>
						    <input type="text" class="form-control" placeholder="heading" id="heading-text" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
				            <label for="content-text" class="form-control-label">content</label>
						    <input type="text" class="form-control" placeholder="content" id="content-text" aria-describedby="basic-addon1">
				          </div>
				        </form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary">Add Services </button>
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
				        <h5 class="modal-title" id="EditLabel">Edit Services</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form action="php_site/generl_input.php" method="POST" enctype="multipart/form-data">
				          <div class="form-group">
				            <label for="select" class="form-control-label">select icon</label>
				            <input type="file" class="form-control  btn-info" id="select"  name="img_slider">
				          </div>
				          <div class="form-group">
						    <input type="text" class="form-control" placeholder="heading"  name="heading_slider" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
						    <input type="text" class="form-control" placeholder="content"  name="pragraph_slider" aria-describedby="basic-addon1">
				          </div>
				        </form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary"> Edit Services </button>
				      </div>
				    </div>
				  </div>
				</div>
			</div>	
			<!-- end modal edit -->

			<div class="col-lg-10 col-md-offset-2">	
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>heading</th>
				      <th>icon</th>
				      <th>content</th>
				      <th> Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td> Mark</td>
				      <td>Mark</td>
				      <td>Mark</td>
					  <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#Edit" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
				 	 <td><button id="delete_servise" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
				    </tr>
				</table>
			</div>
		</div>
	</div>	
<!-- end table slider -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script type="text/javascript">

 var sure =document.getElementById('delete_servise');
 sure.onclick = function () {
  	test = confirm('are you suer delete');
 	if (test === true) {
 		alert('deleted succssfuly');
 	} 
 }

 </script>
</body>
</html>