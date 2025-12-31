<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    include ("db.php");
    
    // Check request input
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $file = $_FILES['fileToUpload'];
    
    // Start Session
    session_start();

    //Admin user cred
    // $adminname = 'admin';
    // $adminEmail = 'admin@yopmail.com';
    // $adminPassword = 'admin';

    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);

    // Check admin or user
    // if($name == $adminname && $email == $adminEmail && $password == $adminPassword){
    //     $_SESSION['user'] = $username;
    //     echo "Hello ". $_SESSION['user'];
    // }else {
    //     $_SESSION['user'] = 'customer';
    //     echo "Hello , $name ($email)" . "<br>";
    // }
    
    
    // check which session set
    // print_r($_SESSION); 

    $targetFile = null;

    //Upload file is there store file
    if (isset($_FILES['fileToUpload']['name'])){
        // echo "FileName: " . $_FILES['fileToUpload']['name'] . "<br>";

        //Move Uploaded File 
        $targetDir = __DIR__ . "/uploads/";

        if(!is_dir($targetDir)){
            mkdir($targetDir,0777,true);
        }   

        $fileName = basename($_FILES['fileToUpload']['name']);
        $targetFile = $targetDir . $fileName;

        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile)) {
            echo "File Uploaded Successfully";
        } else {
            echo "No file uploaded <br>";    
        }
    } 

    //Prepare an SQL INSERT STATEMENT using prepared statement
    $stmt = $connection->prepare("INSERT INTO users (name,email,pass,profile_img) VALUES (?,?,?,?)");
    
    //Bind Parameters in
    $stmt->bind_param("ssss",$name,$email,$hashedPassword,$targetFile);

    //Execute the statement 
    if($stmt->execute()){
        // Redirect To login page
        header("Location: login.php?registered=success");
        exit;
    }else{
        echo "Error: " . $stmt->error;
    }

    //Close Statement and connection
    $stmt->close();
    $connection->close();

}else {
    echo "Invalid request!";
}
?>