<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit;
}
?>

<h2>Welcome, <?php echo $_SESSION['user_name']; ?></h2>
<br><br>

<a href="logout.php">Logout</a>