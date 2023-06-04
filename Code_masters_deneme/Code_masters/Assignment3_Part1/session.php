<?php
   include('config.php');
   // Include the 'config.php' file which contains the database connection information
   
   session_start();
   // Start the session
   
   $member_email = $_SESSION['login_user'];
   // Get the value of the 'login_user' session variable and assign it to the $member_email variable
   
   $ses_sql = mysqli_query($db,"select member_email from members where member_email = '$member_email' ");
   // Execute a SQL query to select the 'member_email' from the 'members' table where it matches the $member_email
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   // Fetch the result of the query and store it in the $row variable
   
   $login_session = $row['member_email'];
   // Get the value of 'member_email' from the $row variable and assign it to the $login_session variable
   
   if(!isset($_SESSION['login_user'])){
      // If the 'login_user' session variable is not set
      header("location:Login.php");
      // Redirect the user to the login page
      die();
      // Terminate the script
   }
?>
