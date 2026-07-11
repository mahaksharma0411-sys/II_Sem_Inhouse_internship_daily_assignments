<?php
include ("header.php");
include ("db_connect.php");
include ("checkRegistrationError.php");
?>

<div class="container mt-5" style="max-width:400px;">
    <form action="" method = "post">
        <h3 class="mb-3">Register</h3>

        <input type="text" name="name" class="form-control mb-3" placeholder="Name" value="<?= $name?>">

        <input type="email" class="form-control mb-3" name="email" placeholder="Email" value="<?= $email?>">

        <input type="password" class="form-control mb-3" placeholder="Password" name="password" value="<?= $password?>">

        <input type="password" class="form-control mb-3" placeholder="Confirm Password" name="confirmPassword" value="<?= $confirmPassword?>">

        <button class="btn btn-primary w-100">Register</button>
    </form>
</div>




<?php 
include ("footer.php"); ?>