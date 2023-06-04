<!DOCTYPE html>
<!--declares the document type as HTML -->
<html lang="en">
  <!-- set language to English -->
  <head>
    <!-- the head section of the HTML document, which contains metadata about the document -->
    <meta charset="UTF-8" />
    <!-- specifies the character encoding for the document -->
    <title>GAME VALLEY</title>
    <!-- sets the title of the document, it is appears in the browser tab -->
   
    <!-- CSS style section -->
    <link rel="stylesheet" href="css/All.css" />
    <!-- Link to external css stylesheet -->
  </head>
  <!-- End of head section -->
  <body>
    <!-- Start of body section -->
    <header>
      <!-- Header section of the webpage -->
      <h2>Forge of Empire</h2>
      <!-- Heading with student name and student ID -->
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
      <main>
 <section1>
        <!-- Section 1 of main content -->
        <div class="biography">
         
          <h2>
            <a style="text-align: left" style="color: white"
              >About Forge of Empire</a
            >
            <!-- Heading with student's name  -->
          </h2>
          
		
			
          <?php
    // Veritabanı bağlantısı
    $servername = "localhost";
    $username = "phpmyadmin";
    $password = "root2023";
    $dbname = "games";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
    }

    // Button'a tıklanınca veriyi al
    if (isset($_GET["button"])) {
        $link = $_GET["button"];

        // Veriyi veritabanından sorgula
        $sql = "SELECT * FROM minecraft WHERE link = '$link'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Veri detaylarını ekrana yazdır
                echo "Başlık: " . $row["baslik"] . "<br>";
                echo "Açıklama: " . $row["aciklama"] . "<br>";
                // Diğer veri alanlarını buraya ekleyebilirsiniz
            }
        } else {
            echo "Veri bulunamadı.";
        }
    }

    $conn->close();
    ?>

        <!-- Closing tag for the div with class "biography" -->
      </section1>
	</main>
		  <br><br><br><br><br><br><br><br><br><br>
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

  