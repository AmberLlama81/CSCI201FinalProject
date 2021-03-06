<?php require_once 'controllers/authenticate.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<form action="register_form.php" method="POST">
			<h1 class="col-12 mt-4 mb-4">User Registration</h1>
		</div> <!-- .row -->
	</div> <!-- .container -->

<?php if(count($errors) > 0): ?>
		<div class="alert alert-danger">
			<?php foreach($errors as $error): ?>
				<li><?php echo $error; ?></li>
			<?php endforeach; ?>
		</div>
<?php endif; ?>

	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
	        <a class="navbar-brand" href="#">Piazza 2.0</a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		          <span class="navbar-toggler-icon"></span>
		        </button>
	      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav mr-auto">
	            <li class="nav-item active">
	              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#">Link</a>
	            </li>
           		<li class="nav-item dropdown">
              		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                	Dropdown
              		</a>
              		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		                <a class="dropdown-item" href="#">Action</a>
		                <a class="dropdown-item" href="#">Another action</a>
		                <div class="dropdown-divider"></div>
		                <a class="dropdown-item" href="#">Something else here</a>
             		</div>
            	</li>
	            <li class="nav-item">
	              <a class="nav-link disabled" href="#">Disabled</a>
	            </li>
          </ul>
	        <form class="form-inline my-2 my-lg-0">
	        	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	          </form>
        	</div>
      	</nav>

			<div class="form-group row">
				<label for="username-id" class="col-sm-3 col-form-label text-sm-right">Username: <span class="text-danger">*</span></label>
				<div class="col-sm-9">
					<input type="email" value = "<?php echo $Username; ?>" class="form-control form-control-lg" id="username-id" name="email" placeholder = "must include @usc.edu">
					<small id="email-error" class="invalid-feedback">Username is required.</small>
				</div>
			</div> <!--form-group -->	

			<div class="form-group row">
				<label for="password-id" class="col-sm-3 col-form-label text-sm-right">Password: <span class="text-danger">*</span></label>
				<div class="col-sm-9">
					<input type="password" class="form-control" id="password-id" name="password" >
					<small id="password-error" class="invalid-feedback">Password is required.</small>
				</div>
			</div> <!--form-group -->

			<div class="form-group row">
				<label for = "status-id" class="col-sm-3 col-form-label text-sm-right">Status: <span class="text-danger">*</span></label>
				<div class="col-sm-9">
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input type="checkbox" name="status[]" id= "status-id" class="form-check-input" value="true">
							Student
						</label>
					</div> <!--form-check -->
					<div class="form-check form-check-inline">
						<label class="form-check-label ml-2">
							<!--false means is an instructor-->
							<input type="checkbox" name="status[]" id= "status-id" class="form-check-input" value="false">
							Instructor
						</label>
					</div> <!--form-check -->
					<small id="status-error" class="invalid-feedback">Status is required.</small>
				</div>
			</div> <!--form-group -->

			<div class="form-group row">
				<label for="course-id" class="col-sm-3 col-form-label text-sm-right">Course Enrolled: <span class="text-danger">*</span></label>
				<div class="col-sm-9">
					<select name="course" id="course-id" class="form-control">
						<option value="" disabled selected>-- Select One --</option>
						<option value="csci201">CSCI 201</option>
						<option value="csci270">CSCI 270</option>
						<option value="math225">MATH 225</option>
						<option value="phys151">PHYS 151</option>
					</select>
					<small id="course-error" class="invalid-feedback">Course is required.</small>
				</div>
			</div> <!-- .form-group -->

			<div class="row">
				<div class="ml-auto col-sm-9">
					<span class="text-danger font-italic">* Required</span>
				</div>
			</div> <!-- .form-group -->

			<div class="form-group row">
				<div class="col-sm-3"></div>
				<div class="col-sm-9 mt-3">
					<button type="submit" name = "signup_btn" class="btn btn-primary">Register</button>
					<a href="login.html" role="button" class="btn btn-light">Cancel</a>
				</div>
			</div> <!-- .form-group -->
		</form>
	</div> <!-- .container -->

</body>
</html>
