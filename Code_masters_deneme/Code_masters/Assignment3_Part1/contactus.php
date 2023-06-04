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
	  
	   <?php
    // PHP code to establish database connection
    $baglan=mysqli_connect("localhost","phpmyadmin","root2023","contactus");

    if(!$baglan)
    {
        die("connection failed:" .mysqli_connect_error());
    }
    else
    {
        echo "Successfully connected";
    }
  ?>

  <?php
    if(isset($_POST["submit"]))
    {
        // Retrieve form data
        $Name = $_POST["Name"];
        $surname = $_POST["surname"];
        $subject = $_POST["subject"];

        // Insert data into database
        $sql="INSERT INTO contacts(Name,surname,subject) VALUES ('$Name','$surname','$subject')";
        $sonuc=mysqli_query($baglan,$sql);// Assuming $connection is the database connection object
		// Check if the query executed successfully
        if($sonuc)
        {
            echo "Data added";
        }
        else
        {
            echo "Error fault";
        }
    }
  ?>	  
	<!-- Form for submitting contact information -->
					  <form action="" method="post">						  
						 <div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Your Name</label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="Name" placeholder="Your name..">
				
			  </div>						  
						   <div class="mb-3">
				<label for="exampleInputEmail1" class="form-label"> Your Surname</label>
				<input type="text" class="form-control" id="exampleInputEmail1" 
					   name="surname" placeholder="Your last name..">
				
			  </div>						  
			
			  <div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Subject</label>
				<input type="text" class="form-control" id="exampleInputPassword1" 
					   name="subject" placeholder="Write something..">
				  
			  </div>
						 <br>
			 
		<button type="submit" name="submit" class="btn btn-primary btn-lg">Contact Us</button>

		</form>	
	  
  </body>	  
	



<br> <br> <br> <br> <br>  <br>  <br>
	
    <!-- Closing tag for main content section of the webpage -->
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
<!-- End of HTML document -->
		
