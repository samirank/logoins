<?php 

include('class/display.php');
$display = new display();
$result = $display->display_all('files');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Logo picker</title>
</head>
<body>
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="vendor/image-picker/image-picker.css">
	<link rel="stylesheet" href="vendor/logoins/css/style.css">

	








	<div class="container-fluid align-middle">
		<form action="action/submit_selected.php" method="POST">
			<select class="image-picker masonry" multiple="multiple" class="image-picker" name="selected[ ]">
				<?php while($row=mysqli_fetch_assoc($result)){ ?>
					<option data-img-src="<?php echo $row['url']; ?>" value="<?php echo $row['slno']; ?>" data-img-class='rounded' data-img-alt="logo_<?php echo $row['slno']; ?>">Logo <?php echo $row['slno']; ?></option>
				<?php } ?>
			</select>
			<div class="row bg-light p-2 fixed-bottom">
				<div class="col-sm-5"></div>
				<button type="button" class="btn btn-primary col-sm-2" data-toggle="modal" data-target="#exampleModal">
				  Submit
				</button>
			</div>


			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<div class="form-group">
						<label>Full name</label>
						<input type="text" class="form-control" name="fullname">
					</div>
			       	<div class="form-group">
						<label>Email address</label>
						<input type="email" class="form-control" name="email">
					</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <input class="form-control btn btn btn-primary col-2" type="submit" name='submit_selected' value="Submit">
			      </div>
			    </div>
			  </div>
			</div>
		</form>
	</div>

	






	<script src="vendor/jquery/jquery-3.3.1.min.js"></script>
	<script src="vendor/image-picker/image-picker.js"></script>
	<script src="vendor/masonry/masonry.pkgd.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script>
		$("select").imagepicker()
	</script>

</body>
</html>