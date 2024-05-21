<?php
session_start();
$username = $_SESSION['username'];;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password | Admin</title>
    <link rel="stylesheet" href="design.css">

</head>


<body>
    <div class="main-dashboard">
        <?php include 'header.php';
        include 'a_sidenav.php';
        ?>

        <div class="pass-container">
            <h1>Change Password</h1>
            <form action="update_pass.php" method="post">
                <label>Create New Password:</label>
                <input type="text" name="NewPassword">
                <label>Confirm Password:</label>
                <input type="text" name="ConfirmPassword"><br>

                <button type="submit" id="changepass" name="submit">Change</button>


            </form>
        </div>
    </div>

</body>

</html>