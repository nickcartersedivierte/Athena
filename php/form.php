
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Athena Sample</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/ContactForm.css">
  <link rel="stylesheet" href="../css/styleIndex.css">

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- ICON-->
	<link rel = "icon" href = "../img/logo.png" 
        type = "image/x-icon">

</head>

<body>



<!---NAVBAR-->
<nav class="navbar navbar-expand-lg bg-dark>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
            <span class="navbar-toggler-icon"></span>
        </button>
		
	    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                   
		<ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.html">Back</a>
            </li>
            
		  </ul>
         
        </div>
      </nav>


<!---FORM-->

<div class="container">
<form action="mail.php" method="post">
	
	<h3>Contact Form</h3>
    <div class="row">
        <div class="col-25">
		    <label for="name">Your Name</label>
		</div>
		<div class="col-75">
			<input type="text" id="name" name="name" placeholder="Name" pattern=[A-Z\sa-z]{3,20} required>
		</div>
	</div>
	
	<div class="row">
        <div class="col-25">
			<label for="email">Your E-mail</label>
		</div>
		<div class="col-75">	
			<input type="text" id="lname" name="email" placeholder="your.email@email.com" required>
		</div>
	</div>
	
    <div class="row">
        <div class="col-25">
			<label for="department-selection">Choose your country</label>
		</div>
		<div class="col-75">
			<select id="country" name="country" required>
				<option value="">Select a Country</option>
				<option value="billing">Ireland</option>
				<option value="marketing">UK</option>
				<option value="technical support">USA</option>
			</select>
		</div>
    </div>
	
   <div class="row">
        <div class="col-25">
			<label for="title">Subject</label>
		</div>
		<div class="col-75">
			<input type="text" id="subject" name="subject" required placeholder="Want to know more" pattern=[A-Za-z0-9\s]{8,60}>
		</div>
	</div>
	
    <div class="row">
		<div class="col-25">
			<label for="subject">Message</label>
		</div>
		
		<div class="col-75">
			<textarea id="message" name="message" placeholder="How can we help?" required></textarea>
		</div>
    </div>
	<button type="submit" class="btn btn-success login_btn" >Send </button>
   

</form>


</body>

</html>