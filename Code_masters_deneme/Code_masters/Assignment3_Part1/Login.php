<!DOCTYPE html>
<!-- Declares the document type as HTML -->

<html lang="en">
<!-- Sets the language of the document to English -->

<head>
  <!-- The head section of the HTML document, which contains metadata about the document -->
  <meta charset="UTF-8" />
  <!-- Specifies the character encoding for the document -->
  <title>GAME VALLEY</title>
  <!-- Sets the title of the document, which appears in the browser tab -->

  <!-- CSS style section -->
  <link rel="stylesheet" href="css/All.css" />
  <!-- Links to an external CSS stylesheet -->
</head>
<!-- End of the head section -->

<body>
  <!-- Start of the body section -->
  <header>
    <!-- Header section of the webpage -->
    <h2>GAME VALLEY</h2>
    <!-- Heading with the website name -->
  </header>

  <nav>
    <!-- Navigation bar section -->
    <a href="index.php">Home</a>
    <!-- Link to the homepage -->
    <a href="about.php">About</a>
    <!-- Link to the about page -->
    <a href="Membership.php">Membership</a>
    <!-- Link to the Membership page -->
    <a href="Login.php">Login</a>
    <!-- Link to the Login page -->
    <a href="contactus.php">Contact Us</a>
    <!-- Link to the contactus page -->
	   <a href="admin.php">Admin</a>
  </nav>
	
	<h2>Login</h2>
	<form action="Login.php" method="post">
		<label for="kullanici_adi">Username:</label>
		<input type="text" id="kullanici_adi" name="kullanici_adi"><br><br>
		<label for="sifre">Password:</label>
		<input type="password" id="sifre" name="sifre"><br><br>
		<input type="submit" value="Sign in">
	</form>
</body>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	<footer>
      <!-- Footer section of the webpage -->
      <p>
        Game Valley, All Right Reserved, Developed by Code Masters
        <a href="codemasters@gmail.com" class="link"
          >codemasters@gmail.com</a
        >
        Copyright@2023
      </p>
      <!-- Paragraph with author name, student ID, email address, and copyright -->
    </footer>
</html>
