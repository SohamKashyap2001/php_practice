<?php
session_start();
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h2>Login</h2>

        <?php 
        if(isset($_GET['registered'])){
            echo "<p style='color:green;'>Register Successfull. Please Login</p>";
        }
        ?>

        <form method="POST" action="login_process.php">
            <label>Email</label>
            <input type="email" name="email" required><br><br>

            <label>Password</label>
            <input type="password" name="password" required><br><br>

            <button type="submit"> Login </button>
        </form>
    </body>
</html>