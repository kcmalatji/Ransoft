<!DOCTYPE>
<html>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>RAnsoft - Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
   
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="home.html" class="w3-bar-item w3-button w3-wide">ransoft</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="about.html" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="contact.html" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

 <?php
// define variables and set to empty values




$name = $email = $gender = $comment = $website = $mobile= $work = $company_name = $company_size = $qoute_on = $Description ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $message = test_input($_POST["message"]);
 $service = test_input($_POST['service']);

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>


    <div class="container-contact100">
		<div class="wrap-contact100">
			<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Send Us A Message
				</span>


				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<label class="label-input100" for="name">Full name</label>
					<input id="name" class="input100" type="text" name="name" placeholder="Enter your name...">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<label class="label-input100" for="email">Email Address</label>
					<input id="email" class="input100" type="text" name="email" placeholder="Enter your email...">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100">
					<div class="label-input100">What do you need?</div>
					<div>
						<select class="js-select2" name="service">
							<option>Please chooses</option>
							<option value="Mobile App">Mobile App</option>
							<option value="Website">Website</option>
                            <option value="Software">Software</option>
                            <option value="Web application">Web application</option>
                            <option value="Devops">Devops</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<label class="label-input100" for="message">Message</label>
					<textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Send
					</button>
				</div>

				<div class="contact100-form-social flex-c-m">
					<a href="https://www.facebook.com/brillientmind.co.za/" class="contact100-form-social-item flex-c-m bg1 m-r-5">
						<i class="fa fa-facebook-f" aria-hidden="true"></i>
					</a>

                    
					<a href="whatsapp://send?text=Hello I need a qoute!&amp;phone=+27814451351" class="contact100-form-social-item flex-c-m bg2 m-r-5">
						<i class="fa fa-whatsapp" aria-hidden="true"></i>
					</a>

					<a href="https://www.linkedin.com/in/chris-malatji-907163112/" class="contact100-form-social-item flex-c-m bg3">
						<i class="fa fa-linkedin" aria-hidden="true"></i>
					</a>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
			</div>
		</div>
	</div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
		$(".js-select2").each(function(){
			$(this).on('select2:open', function (e){
				$(this).parent().next().addClass('eff-focus-selection');
			});
		});
		$(".js-select2").each(function(){
			$(this).on('select2:close', function (e){
				$(this).parent().next().removeClass('eff-focus-selection');
			});
		});

	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
 <?php
$servername = "localhost";
$username = "id5710948_root";
$password = "Blackcoffe081!@";
$dbname = "id5710948_enquiry";
if (isset($_POST['name']))
{ 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO contact ( name, email, service, message )
    VALUES ('$name', '$email', '$service', '$message' )";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

}
?>
</body>

</html>