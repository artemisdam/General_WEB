<?php
  session_start();
  // Start the session

  if (!isset($_SESSION['id'])) {
      // If the 'id' session variable is not set
      header("Location:Login.php");
      // Redirect the user to the login page
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Panel</title>
	<link rel="stylesheet" href="css/All.css" />	
	<!-- Include the CSS stylesheet -->
	<style>	
	</style>
</head>
<body>
	<header>
      <!-- Header section of the webpage -->
      <h>GAME VALLEY</h>
      <!-- Heading with student name and student ID -->
    </header>
    <nav>
      <!-- Navigation bar section -->
      <a href="index.php">Home</a>
      <!-- Link to the homepage -->
      <a href="about.php">About</a>
      <!-- Link to the about page -->
      <a href="Membership.php">Membership</a>
      <!-- Link to the bibliography page -->
		<a href="Login.php">Login</a>
      <!-- Link to the bibliography page -->
		<a href="contactus.php">Contact Us</a>
    </nav>
	
	<h2>Profile</h2>
    <div style="background: #fff; width: 900px; height: 500px; padding: 30px; margin: 0 auto; border-radius: 20px;">
    <!-- Styling for the profile container -->
    <p>
        <?php 
            $member_name = $_SESSION['member_name']; 
            // Get the value of the 'member_name' session variable and assign it to the $member_name variable
            $member_email = $_SESSION['member_email']; 
            // Get the value of the 'member_email' session variable and assign it to the $member_email variable
            $member_type = $_SESSION['member_type']; 
            // Get the value of the 'member_type' session variable and assign it to the $member_type variable
        ?>
        Welcome <?php echo $member_name; ?>,<br>
        <!-- Display the member's name -->
        Mail: <?php echo $member_email; ?>,<br>
        <!-- Display the member's email -->
        Member Type: <?php echo $member_type; ?>.
        <!-- Display the member's type -->
    </p>

    <a style="bottom: 0" href="logout.php">Logout</a>
    <!-- Link to the logout page -->
    </div>
</body>
</html>
