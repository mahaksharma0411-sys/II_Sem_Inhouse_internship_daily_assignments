<?php
include ("dashboardHeader.php");
include ("dashboardVerticalContent.php");
?>

<h2>
    <?php echo "Welcome, " . $_SESSION['user_name'] . "!"; ?>
</h2>

<?php
include ("dashboardFooter.php");
include ("footer.php");
?>