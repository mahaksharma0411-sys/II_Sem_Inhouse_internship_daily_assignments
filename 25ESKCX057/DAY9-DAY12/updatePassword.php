<?php
session_start();

if (!isset($_SESSION['user_name'])) {
    header("Location: login.php");
    exit();
}

include ("db_connect.php");
include ("dashboardHeader.php");
include ("dashboardVerticalContent.php");
?>

<div class="container">
    <h1>Update Password</h1>
    <form action="" method="POST">

        <div class="mb-3">
            <label for="old_password" class="form-label">Old Password</label>
            <input type="password" class="form-control" id="old_password" name="old_password" required>
        </div>

        <div class="mb-3">
            <label for="new_password" class="form-label">New Password</label>
            <input type="password" class="form-control" id="new_password" name="new_password" required>
        </div>

        <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirm New Password</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Password</button>
    </form>
</div>

<?php
include ("dashboardFooter.php");
?>