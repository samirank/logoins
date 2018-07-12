<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<title>Logo design questionnaire</title>

	<!-- Styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
	<link rel="stylesheet" href="vendor/mdb/css/mdb.css">
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css'>
	<link rel="stylesheet" href="vendor/logoins/css/cf.css">
	<link rel="stylesheet" href="vendor/logoins/css/custom-cf.css">
	<link rel="stylesheet" href="vendor/logoins/css/style.css">
</head>



<body>
	<!--Navigation-->
	<div>
		<nav class="navbar default-color">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand waves-effect waves-light" href="index.php">Logos</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#" class="waves-effect waves-light">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="#" class="waves-effect waves-light">Questionnaire</a></li>
						<li><a href="questionnaire.php" class="waves-effect waves-light">Login</a></li>
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



    <section class="valign-wrapper">
    	<div class="">
    		<!-- <div class="col text-center"> -->
    			<!-- <h3>Logo design questionnaire</h3> -->
		    <!-- <p class="author">
		    	<small class="text-muted">© Samiran Kakoty 2018</small>
		    </p> -->
		    <!-- <h6 class="text-muted">Please answer the questions in the chat.</h6>
		    <hr class="my-4">
		    <br>
		    <button class="btn btn-sm btn-default" id="toggle">Fullscreen</button> -->
		    <!-- </div> -->
		    <div class="row">
		    	<div class="col col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
		    		<div id="fullElement">


		    			<form id="form" action="action/submit.php" method="POST" cf-form cf-context style="height:350px;visibility:hidden;overflow:hidden" class="dark-theme">


		    				<div class="form-group">
		    					<label for="nameofclient">Your full name</label>
		    					<input type="text" class="form-control" id="nameofclient">
		    				</div>


		    				<div class="form-group">
		    					<label for="company_description">Company name, background & short description of services.</label>
		    					<textarea class="form-control" name="company_description" id="company_description" cols="20" rows="5"></textarea>
		    				</div>


		    				<div class="form-group">
		    					<label for="email">Email address</label>
		    					<input type="text" class="form-control" id="email">
		    				</div>

		    				<div class="form-group">
		    					<label for="contact_number">Contact number</label>
		    					<input type="text" class="form-control" id="contact_number">
		    				</div>

		    				<div class="form-group">
		    					<label for="country">Country</label>
		    					<input id="country" type="text" class="form-control">
		    				</div>

		    				<div class="form-group">
		    					<label>Project type</label>
		    					<div class="form-check">
		    						<input class="form-check-input" type="checkbox" value="">
		    						<label class="form-check-label">
		    							New design
		    						</label>
		    					</div>
		    					<div class="form-check">
		    						<input class="form-check-input" type="checkbox" value="">
		    						<label class="form-check-label">
		    							Re-design
		    						</label>
		    					</div>
		    				</div>


		    				<div class="form-group">
		    					<label>Design deadline</label>
		    					<input type="text" class="form-control">
		    					<small class="form-text text-muted">dd/mm/yyyy</small>
		    				</div>


		    				<div class="form-group">
		    					<label>Is your deadline fixed or flexible?</label>
		    					<div class="form-check">
		    						<input class="form-check-input" type="checkbox" value="">
		    						<label class="form-check-label">
		    							Fixed
		    						</label>
		    					</div>
		    					<div class="form-check">
		    						<input class="form-check-input" type="checkbox" value="">
		    						<label class="form-check-label">
		    							Flexible
		    						</label>
		    					</div>
		    				</div>


		    				<div class="form-group">
		    					<label>Current web address (if available)</label>
		    					<input type="text" class="form-control">
		    				</div>


		    				<div class="form-group">
		    					<label>In what way do you differ from your competition?</label>
		    					<div class="form-check">
		    						<input class="form-check-input" type="checkbox" value="">
		    						<label class="form-check-label">
		    							Product
		    						</label>
		    					</div>
		    					<div class="form-check">
		    						<input class="form-check-input" type="checkbox" value="">
		    						<label class="form-check-label">
		    							Expertise
		    						</label>
		    					</div>
		    					<div class="form-check">
		    						<input class="form-check-input" type="checkbox" value="">
		    						<label class="form-check-label">
		    							Years in business
		    						</label>
		    					</div>
		    					<div class="form-check">
		    						<input class="form-check-input" type="checkbox" value="">
		    						<label class="form-check-label">
		    							Location
		    						</label>
		    					</div>
		    					<div class="form-check">
		    						<input class="form-check-input" type="checkbox" value="">
		    						<label class="form-check-label">
		    							Customer service
		    						</label>
		    					</div>
		    					<div class="form-check">
		    						<input class="form-check-input" type="checkbox" value="">
		    						<label class="form-check-label">
		    							Other (please describe)
		    						</label>
		    					</div>
		    					<input type="text" class="form-control">
		    				</div>


		    				<div class="form-group">
		    					<label>Please write the exact name as you would like to appear in your logo.</label>
		    					<input type="text" class="form-control">
		    				</div>


		    				<div class="form-group">
		    					<label>What is your tagline if applicable. Do you want this in the logo?</label>
		    					<input type="text" class="form-control">
		    				</div>


		    				<div class="form-group">
		    					<label>Do you have specific images or icons that you wish or do not wish to be in your logo?</label>
		    					<input type="text" class="form-control">
		    				</div>


		    				<div class="form-group">
		    					<label>Do you have any colour preferences or any existing colours you want in your logo?</label>
		    					<input type="text" class="form-control">
		    				</div>


		    				<div class="form-group">
		    					<label>What attributes of your business would you like your logo to reflect?</label>
		    					<textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
		    				</div>


		    				<div class="form-group">
		    					<label>What is the overall message you want to convey to your target audience?</label>
		    					<textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
		    				</div>


		    				<div class="form-group">
		    					<label>Where will your new logo be used?</label>
		    					<div class="form-check">
		    						<input class="form-check-input" type="checkbox" value="">
		    						<label class="form-check-label">
		    							Print
		    						</label>
		    					</div>
		    					<div class="form-check">
		    						<input class="form-check-input" type="checkbox" value="">
		    						<label class="form-check-label">
		    							Website
		    						</label>
		    					</div>
		    					<div class="form-check">
		    						<input class="form-check-input" type="checkbox" value="">
		    						<label class="form-check-label">
		    							Other (please describe)
		    						</label>
		    					</div>
		    					<input type="text" class="form-control">
		    				</div>


		    				<div class="form-group">
		    					<label>Who are your main competitors? Please list their websites if possible.</label>
		    					<textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
		    				</div>

		    				<div class="form-group">
		    					<label>What are your thoughts about their logos?  How do you want your logo to differ from their logos?</label>
		    					<textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
		    				</div>


		    				<div class="form-group">
		    					<label>Do any existing logos appeal to you & why? If so, please provide a link to a picture of each logo.</label>
		    					<textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
		    				</div>

		    				<div class="form-group">
		    					<label>Your project budget (for the logo)</label>
		    					<input type="text" class="form-control">
		    				</div>


		    				<div class="form-group">
		    					<label>Will you be requiring corporate stationery or other design services?</label>
		    					<input type="text" class="form-control">
		    				</div>

		    				<div class="form-group">
		    					<label>Would you like these services to be included in the quote as a package?</label>
		    					<input type="text" class="form-control">
		    				</div>


		    				<div class="form-group">
		    					<label>Your project budget (for the package as you outlined above if applicable)</label>
		    					<input type="text" class="form-control">
		    				</div>


		    				<div class="form-group">
		    					<label>Who is your target market?  Be very specific.</label>
		    					<input type="text" class="form-control">
		    				</div>


		    				<div class="form-group">
		    					<label>If your customer came away with just two thoughts about your business what would you want them to be?</label>
		    					<textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
		    				</div>


		    				<div class="form-group">
		    					<label>What is the most important application for your logo? (ie. Business Card, Website, Signage, Tshirt, etc)</label>
		    					<textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
		    				</div>


		    				<div class="form-group">
		    					<label>Please supply a brief description of the design you have in mind and any other information that would be useful.</label>
		    					<textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
		    				</div>



		    			</form>
		    		</div>
		    	</div>
		    </div>
		</div>
	</section>
	<footer>
		<div class="col text-center">
			<p>
				<small class="text-muted">© Samiran Kakoty 2018</small>
			</p>
		</div>
	</footer>





</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- <script src="vendor/mdb/js/popper.min.js"></script> -->
<script src="vendor/mdb/js/mdb.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/space10-community/conversational-form@0.9.80/dist/conversational-form.min.js" crossorigin></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/screenfull.js/3.3.2/screenfull.min.js"></script>
<script src="vendor/logoins/js/script.js"></script>
</html>