<?php
session_start();
require_once("settings.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $new_email = trim($_POST['new_email']); 
    $username = $_SESSION['username'];

    $conn = mysqli_connect($host, $user, $pwd, $sql_db);
 
    $query = "UPDATE user SET email = '$new_email' WHERE username = '$username'";

    if (mysqli_query($conn, $query)) {        
        $_SESSION['email'] = $new_email; 
        header("Location: profile.php");
        exit();
        
    } else {
        echo "Error:" . mysqli_error($conn);
    }

    mysqli_close($conn);

} else {
    header("Location: profile.php");
    exit();
}
?>