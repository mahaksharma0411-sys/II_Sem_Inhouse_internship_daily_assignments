<?php
  session_start();

  if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
    exit();
  }
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>

<body>
    <header class="bg-light border-bottom">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center py-3">

                <!-- Logo -->
                <img src="welcometomypage.jpeg" alt="Logo" width="80">

                <!-- Navigation -->
                <nav>
                    
                        <ul>
    <li><a href="home.php" style="text-decoration: none; color: #0275d8;">Home</a></li>
    <li><a href="about.php" style="text-decoration: none; color: #0275d8;">About Us</a></li>
    <li><a href="contact.php" style="text-decoration: none; color: #0275d8;">Contact Us</a></li>
</ul>
                    </ul>
                </nav>

                <!-- Login Button -->
                <button type="button" class="btn btn-primary">
                    Login
                </button>

            </div>
        </div>
    </header>

    <?php include ("footer.php"); ?>