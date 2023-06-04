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
    <h2>Minecraft</h2>
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
  </nav>

  <main>
    <!-- Main content section of the webpage -->
    <section1>
      <!-- Section 1 of main content -->
      <div class="section1">
        <!-- Container for the content -->
        
        <h2>
          <a style="text-align: left" style="color: white"
            >About Minecraft</a
          >
          <!-- Heading for the section -->
        </h2>
          
        <?php
          // Database connection
          $servername = "localhost";
          $username = "phpmyadmin";
          $password = "root2023";
          $dbname = "games";

          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
              die("Connection to the database failed: " . $conn->connect_error);
          }

          // Retrieve data when the button is clicked
          if (isset($_GET["button"])) {
              $link = $_GET["button"];

              // Query the database for data
              $sql = "SELECT * FROM minecraft WHERE link = '$link'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      // Display the data
                      echo "Title: " . $row["baslik"] . "<br>";
                      echo "Description: " . $row["aciklama"] . "<br>";
                      // You can add other data fields here
                  }
              } else {
                  echo "Data not found.";
              }
          }

          $conn->close();
        ?>

      <!-- Closing tag for the div with class  -->
      </div>
    </section1>
  </main>
  
  <br><br><br><br><br><br><br><br><br><br>
  <!-- Extra line breaks for spacing -->
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
  </body>
  <!-- End of body section -->
</html>
<!-- End of HTML document -->

  