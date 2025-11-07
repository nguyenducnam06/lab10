<?php
session_start();

$display_username = htmlspecialchars($_SESSION['username']);
$display_email = htmlspecialchars($_SESSION['email']);
?>
<!DOCTYPE html>
<html>
<head><title>profile</title></head>
<body>
    
    <h1>Welcome!</h1>
    <h3>Username: <?php echo $display_username; ?></h2>
    <h3>Email: <?php echo $display_email; ?></h2>
    <button><a href="update_form.php">Update email</a></button>
</body>
</html>





