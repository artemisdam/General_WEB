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
    <a href="about.html">About</a>
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
    //These lines initialize three boolean variables ($showAlert, $showError, and $exists) to false. 
	//These variables will be used to track certain conditions throughout the code.
        $showAlert = false; 
        $showError = false; 
        $exists=false;
    //This line checks if the HTTP request method is "POST". It is used to ensure that the code 
	//block inside the if statement is executed only when the form is submitted using the HTTP POST method
        if($_SERVER["REQUEST_METHOD"] == "POST") {
	//This line includes the contents of the "config.php" file. 
	//It is likely that the "config.php"file contains the configuration details and establishes the database connection.
            include 'config.php';   
            //These lines retrieve the values submitted via 
			//the form using the $_POST superglobal array and store them in variables. 
			//It assumes that the form has input fields 
			//with the names "name", "email", "password", and "membership_type".
            $username           = $_POST["name"]; 
            $email              = $_POST["email"]; 
            $password           = $_POST["password"];
            $membership_type    = $_POST["membership_type"];
                    
            //executes a SQL query to check if a username already exists in the "members" table of the database.
			//It uses the mysqli_query() function to execute the query and store the result in the $result variable. 
			//The number of rows returned by the query is stored in the $num variable using the mysqli_num_rows() function.
            $sql    = "SELECT * FROM members WHERE member_name='$username'";
            $result = mysqli_query($conn, $sql);
            $num    = mysqli_num_rows($result); 
			//This code block is executed when the username does not already exist in the database ($num == 0). 
			//It constructs an SQL INSERT query to insert a new record into the "members" table with the submitted username, password, email, and membership type.
			//The current_timestamp() function is used to set the "date" column with the current date and time. The query is executed 
			//using the mysqli_query() function, 
            if($num == 0) {
                    
                $sql = "INSERT INTO `members` 
                        ( `member_name`, `member_password`,`date`, `member_email`,`member_type` ) 
                        VALUES ('$username', '$password', current_timestamp(), '$email', '$membership_type')";
        
                $result = mysqli_query($conn, $sql);
        	//if the query is successful, the $showAlert variable is set to true.
                if ($result) {
                    $showAlert = true; 
                }  
            }
            //This code block is executed when the username already exists in the database ($num > 0). 
			//It sets the $exists variable to the string 
			//"Username not available" to indicate that the submitted username is already taken.
        if($num>0) 
        {
            $exists="Username not available"; 
        } 
            
        }
            
    ?>

	<div class="container">
    <!-- Container div for the membership form -->
    <form method="post" action="">
        <!-- Membership form with the POST method -->
        <h2>Membership Form</h2>
        <!-- Heading for the membership form -->

        <?php
        if ($showAlert) {
            // Display a success message if $showAlert is true
            echo '<div style="padding: 15px; background-color: green; color: #fff; border-radius: 30px; margin-bottom: 25px;" class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your account is now created and you can login.
            </div>';
        }

        if ($showError) {
            // Display an error message if $showError is true
            echo '<div style="padding: 15px; background-color: red; color: #fff; border-radius: 30px; margin-bottom: 25px;" class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> ' . $showError . '
            </div>';
        }

        if ($exists) {
            // Display an error message if $exists is true
            echo '<div style="padding: 15px; background-color: yellow; color: #333; border-radius: 30px; margin-bottom: 25px;" class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> ' . $exists . '
            </div>';
        }
        ?>
        <!-- PHP code block to display success and error messages -->

        <label for="name">Name:</label>
        <!-- Label for the Name input field -->
        <input type="text" id="name" name="name" required><br>
        <!-- Name input field -->

        <label for="email">Email:</label>
        <!-- Label for the Email input field -->
        <input type="email" id="email" name="email" required><br>
        <!-- Email input field -->

        <label for="password">Password:</label>
        <!-- Label for the Password input field -->
        <input style="display: block; width: 100%; margin-bottom: 20px; padding: 10px; border: 2px solid #ccc; border-radius: 4px; box-sizing: border-box;" type="password" id="email" name="password" required><br>
        <!-- Password input field -->

        <label for="membership_type">Membership Type:</label>
        <!-- Label for the Membership Type select field -->
        <select style="display: block; width: 100%; height: 40px; margin-bottom: 20px; padding: 10px; border: 2px solid #ccc; border-radius: 4px; box-sizing: border-box;" id="membership_type" name="membership_type">
            <option value="Basic User">Basic ($10/month)</option>
            <option value="Premium User">Premium ($20/month)</option>
            <option value="Pro User">Pro ($30/month)</option>
        </select><br>
        <!-- Membership Type select field -->

        <input type="submit" value="Register">
        <!-- Submit button for the form -->
    </form>
</div>
<!-- Closing tag for the container div -->
</body>
</html>
