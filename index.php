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
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/mdb/css/mdb.css">
	<link rel="stylesheet" href="vendor/mdb/css/style.css">
	<link rel="stylesheet" href="vendor/logoins/css/style.css">
	<link rel="stylesheet" href="vendor/logoins/css/cf.css">
</head>
<body class="body-top-pad body-bottom-pad">

    <!--Navigation-->
    <div>
    	<nav class="navbar navbar-fixed-top default-color">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand waves-effect waves-light" href="#">Logos</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#" class="waves-effect waves-light">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="questionnaire.php" class="waves-effect waves-light">Questionnaire</a></li>
                        <li><a href="#" class="waves-effect waves-light">Login</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- <form class="navbar-form navbar-right" role="search">
                        <div class="form-group waves-effect waves-light">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form> -->
                </div>
            </div>
        </nav>
    </div>
    <!--/.Navigation-->



<div class="container">
	<div class="col text-center">
	    <h3>Logo Inspirations</h3>
	    <p class="author">
	    	<small class="text-muted">By Samiran Kakoty</small>
	    </p>
	    <!-- <h6 class="text-muted">Please select the logos of your choice and press submit.</h6> -->
	    <br>
	</div>
  
<form action="action/submit_selected.php" method="POST">	
<?php while($row=mysqli_fetch_assoc($result)){ ?>
	<div class="col-xs-6 col-sm-4 col-md-3 nopad text-center">
		<label class="image-checkbox">
		  <img class="img-responsive" src="<?php echo $row['url']; ?>" />
		  <input type="checkbox" name="image[]" value="<?php echo $row['slno']; ?>" />
		  <i class="fa fa-check hidden"></i>
		</label>
	</div>
<?php } ?>
  
  	<div class="footer bg-light">
  		<button type="button" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#exampleModal" id="submitButton">
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
			        <input class="btn btn-default col-2" type="submit" name='submit_selected' value="Submit">
			      </div>
			    </div>
			  </div>
			</div>
	</form>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="vendor/mdb/js/popper.min.js"></script>
<script src="vendor/mdb/js/mdb.min.js"></script>
<script src="vendor/logoins/js/script.js"></script>
</body>
</html>