<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
     <!DOCTYPE html>
     <html>

     <head>
          <title>HOME</title>
          <link rel="stylesheet" href="style.css">
     </head>

     <body>
          <?php include('navbar.html'); ?>

          <h1 class="h1">Hello, <?php echo $_SESSION['name']; ?></h1>
          <a href="logout.php">Logout</a>
     </body>

     </html>

<?php
} else {
     header("Location: index2.php");
     exit();
}
?>