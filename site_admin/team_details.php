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
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add link</button>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">New link</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">link</label>
					    <input type="text" class="form-control" placeholder="link" id="heading-text" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">social media</label>
					    <select class="form-control">
					    	<option>fb</option>
					    	<option>linkedin</option>
					    	<option>twitter</option>
					    </select>
			          </div>
			           
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Add Employee </button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>	
<!-- delete modal
 -->
 <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="Employee">delete Employee</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		        <form action="">
		          <div class="form-group">
				     <input type="hidden" class="form-control" id="delete_id">
		          </div>
                <center>
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-info">delete Employee </button>
		        </center>
		        <br>
		        <hr>
		        </form>
		      
		    </div>
    </div>
</div>
		<!-- model Edit  -->
		<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="Employee" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="Employee">edit link</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		   <form>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">link</label>
					    <input type="text" class="form-control" placeholder="link" id="heading-text" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">social media</label>
					    <select class="form-control">
					    	<option>fb</option>
					    	<option>linkedin</option>
					    	<option>twitter</option>
					    </select>
			          </div>
			           
			        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-info">edit </button>
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
			      <th>name</th>
			      <th>link</th>
			      
			    </tr>
			  </thead>
			  <tbody>
				   <tr>
				      <td scope="row"> index </td>
				      <td> name</td>
				      <td>link</td>
				      <td>desc</td>
				      
					  <td>
					  <button id="edit_team" type="button" class="btn btn-info" 
					  data-toggle="modal" data-target="#Edit" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
					  </td>
					  <td><button data-toggle="modal" data-target="#delete" id="delete_team" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
					 
				    </tr> 
			</table>
		</div>
	</div>
</div>	
<!-- end table slider -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">

 // var sure =document.getElementById('delete_team');
 // sure.onclick = function () {
 //  	test = confirm('are you suer delete');
 // 	if (test === true) {
 // 		alert('deleted succssfuly');
 // 	} 
 // }

 </script>
 
<script type="text/javascript">
	function previewImage() {
    // document.getElementById("team_img").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("edit_img").files[0]);
 
    oFReader.onload = function(oFREvent) {
    	console.log(oFREvent);
    document.getElementById("team_img").src = oFREvent.target.result;
    }
  }
</script>

</body>
</html>
