<!DOCTYPE html>
<html lang="en">
  <head> 
	  <!--The <meta> tag sets the character encoding to UTF-8, ensuring proper handling of special characters. -->
    <meta charset="UTF-8" /> 
	  <!--The <title> tag sets the title of the web page that will appear in the browser's title bar. -->
    <title>Welcome to GAME VALLEY</title> 
	  <!--The <link> tag includes an external CSS file named "All.css" to style the content of the page. -->
    <link rel="stylesheet" href="css/All.css" />    
  </head>  
  <body>	
	<!--This section adds an <audio> element with the autoplay attribute, 
	which plays the audio automatically when the page loads. 
	The preload attribute is set to "auto," indicating that the browser should preload the audio file.-->
	<audio autoplay preload="auto" controls>
		<!--The <source> tag specifies the source file ("game.mpeg") and its MIME type ("audio/mpeg"). -->
  	<source src="game.mpeg" type="audio/mpeg">
	</audio>	  
	  <!-- Header Section -->
	  <!--This section defines the header of the webpage. 
		It contains an <h> tag with the text "GAME VALLEY," 
		representing the main heading of the page. -->
	<header>     
      <h>GAME VALLEY</h>    
    </header>
	  <!-- Navigation Section -->
	  <!--This section creates a navigation bar using an <nav> element. 
		It contains multiple <a> tags, each representing a navigation link. 
		Users can click on these links to access different pages of the website. -->
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
	  <!-- Main Section -->
    <main>
   <!-- Section 1: Minecraft -->
		<!--It contains a <section> element representing the first section of the content. 
		Inside the section, there is an <img> tag that displays an image of Minecraft.
		-->
 <section>
     <img src="images/Minecraft.png" style="width: 100%;" alt="Minecraft">
	<!-- <form> element with a submit button. -->
    <form method="GET" action="mine.php" target="_blank">
		<button type="submit" name="button" class="link" 
				style="background: none; 
					   font-weight: bold; 
					   border: none; 
					   color: white; font-size: 25px; 
					   font-family: 'Times New Roman', Times, serif;"
				value="minecraft-ornek-1">Minecraft</button>
    </form>
	<!--When the button is clicked, it submits a GET request to the "mine.php" file and opens the response in a new tab. 
		The JavaScript function openNewPage() is defined but not used in this code snippet. -->
	 <script>
    function openNewPage() {
        window.open("mine.php", "_blank");
    }
	</script>

    <?php
    // Database connection
    $servername = "localhost";
    $username = "phpmyadmin";
    $password = "root2023";
    $dbname = "games";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
    }

    // Retrieve data when the button is clicked
    if (isset($_GET["button"])) {
        $link = $_GET["button"];

        // Query data from the database
        $sql = "SELECT * FROM minecraft WHERE link = '$link'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Print data details to the screen
                echo "Başlık: " . $row["baslik"] . "<br>";
                echo "Açıklama: " . $row["aciklama"] . "<br>";
                // You can add other data fields here
            }
        } else {
            echo "Veri bulunamadı."; // If no data is found
        }
    }

    $conn->close(); // Close the database connection
    ?>
	</section>	
		<!-- Section 2: League of Legends -->
    <section>
		  <img src="images/League of Legends.jpg" style="width: 100%; alt="League of Legends>    
    <form method="GET" action="legends.php" target="_blank">
		<button type="submit" name="button" 
				class="link" 
				style="background: none; 
					   font-weight: bold; 
					   border: none; color: white; 
					   font-size: 23px; 
					   font-family: 'Times New Roman', Times, serif;" 
				value="value-2">Leage of Legends</button>

    </form>
	<script>
    function openNewPage() {
        window.open("legends.php", "_blank");
    }
	</script>
       
       
    </section>
		<!-- Section 3: Forge of Empires -->
    <section>
	<img src="images/forge of empires.webp" style="width: 100%; alt="Forge of Empires>
      
        <form method="GET" action="forge.php" target="_blank">
	<button type="submit" name="button" class="link" 
			style="background: none; 
				   font-weight: bold; 
				   border: none; 
				   color: white; 
				   font-size: 25px; 
				   font-family: 'Times New Roman', Times, serif;" 
			value="value-3">Forge of Empire</button>
    	</form>
	 <script>
    function openNewPage() {
        window.open("forge.php", "_blank");
    }
	</script>       
        
	</section>
	<!-- Section 4: Pokemon Go -->
	<section>
		<img src="images/pokemon go.jpeg" style="width: 100%; alt="Pokemon Go>
      
    <form method="GET" action="pokemon.php" target="_blank">
		<button type="submit" name="button" class="link" 
			style="background: none; 
				   border: none; 
				   color: white; 
				   font-size: 25px; 
				   font-weight: bold;
				   font-family: 'Times New Roman', Times, serif;" 
				value="value-4">Pokemon
    </form>
	 <script>
    function openNewPage() {
        window.open("pokemon.php", "_blank");
    }
	</script>    
      
    </section>
			 <!-- Section 5: Call of Duty -->
	<section>
		<img src="images/call of duty.jpeg" style="width: 100%; alt="Call of Duty>
      
        <h2>
          <a href="https://www.callofduty.com/" class="link" style="color: white"
            >Call of Duty
		  </a>
		</h2>
      
     
    </section>
	<!-- Section 6: Silkroad -->
	<section>
				<img src="images/silkroad.jpg" style="width: 100%; alt="Silkroad>     
        <h2>
          <a href="https://www.joymax.com/silkroad/" class="link" style="color: white"
            >Silkroad
          </a>
        </h2>    
   
    </section>
		<!-- Section 7: Genshin Impact -->
	<section>
		<img src="images/Genshin Impact.jpeg" style="width: 100%; alt="Silkroad>
     
        <h2>
          <a href="https://genshin.hoyoverse.com/tr/" class="link" style="color: white"
            >Genshin Impact
          </a>
        </h2>   
    
    </section>
	<!-- Section 8: Diablo Immortal -->
		<section>
			<img src="images/diablo immortal.webp" style="width: 100%; alt="diablo immortal>
        
        <h2>
          <a href="https://diabloimmortal.blizzard.com/en-us/" class="link" style="color: white"
            >Diablo Immortal
          </a>
        </h2> 
     
      </section>
	 <!-- Section 9: Monument Valley -->
		<section>
			<img src="images/monument valley 2.webp" style="width: 100%; alt="monument valley>
   
        <h2>
          <a href="https://www.monumentvalleygame.com/mvpc" class="link" style="color: white"
            >Monument Valley
          </a>
        </h2>   
      
      </section>
		 <!-- Section 10: Alto's Odyssey -->
		<section>
			<img src="images/altos oddysey.webp" style="width: 100%; alt="altos odyssey>
       
        <h2>
          <a href="https://www.altosodyssey.com/" class="link" style="color: white"
            >Alto's Odyssey
          </a>
        </h2>
     
      </section>	
		<section>
			<img src="images/nfs unbound.jpeg" style="width: 100%; alt="altos odyssey>
        <h2>
          <a href="https://www.ea.com/games/need-for-speed/need-for-speed-unbound?isLocalized=true" class="link" style="color: white"
            >Need For Speed
          </a>
        </h2>  
     
      </section>		
		<section>
			<img src="images/fifa 2023.jpeg" style="width: 100%; alt="altos odyssey>
        <h2>
          <a href="https://www.ea.com/tr-tr/games/fifa/fifa-23" class="link" style="color: white"
            >FIFA 2023
          </a>
        </h2>
      </section>
    </main>
    <footer>
      <p>
        Game Valley, All Right Reserved, Developed by Code Masters
        <a href="codemasters@gmail.com" class="link"
          >codemasters@gmail.com</a
        >
        Copyright@2023
      </p>
    </footer>
  </body>
</html>

