<?php
session_start();
if (empty($_SESSION['username'])) {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, Admin Profile</title>
    <link rel="stylesheet" href="design.css">
</head>


<body>
    <div class="main-dashboard">
        <?php include 'header.php' ?>
        <?php include 'a_sidenav.php' ?>
        <div class="form-profile">

            <div class="admin-prof">
                <h1>Admin's Profile</h1>
                <div id="avatar"></div><br>
                <table class="table">


                    <table>
                        <div class="fform">
                            <form action="admin_edit.php" method="post">
                                <?php
                                include "db.php";
                                if ($_SESSION['username'] == 0) {
                                } else {
                                    $username = $_SESSION['username'];


                                    $sql = "SELECT * FROM `admin` where username='$username' ";
                                    $result = mysqli_query($conn, $sql);

                                    if ($_GET = mysqli_fetch_array($result)) { ?>
                                        <div class="row">
                                            <div class="col-50">
                                                <label>Username:</label>
                                                <div id="display" name="username"> <?php echo $_GET['username'];
                                                                                }
                                                                            }  ?></div>


                                                <label>First Name:</label>
                                                <input type="text" id="display" name="Firstname" value="<?php echo $_GET['Firstname'] ?>">
                                                <label>Last Name</label>
                                                <input type="text" id="display" name="Lastname" value="<?php echo $_GET['Lastname'] ?>">
                                                <label>Home Address:</label>
                                                <input type="text" id="display" name="Address" value="<?php echo   $_GET['Address'];
                                                                                                        ?>">

                                            </div>
                                            <div class="col-50">

                                                <label>Email Address:</label>
                                                <input type="email" id="display" name="email" value="<?php echo $_GET['email'] ?> ">
                                                <label>Middle Name:</label>
                                                <input type="text" id="display" name="Mname" value="<?php echo $_GET['Mname'] ?> ">




                                                <label>Contact Number:</label>
                                                <input type="text" id="display" name="ContactNumber" value="<?php echo $_GET['ContactNumber'] ?>">

                                                <label>Gender:</label>

                                                <input type="radio" name="Gender" <?php if (isset($Gender) && $Gender == "female") echo "checked"; ?> value="female">Female
                                                <input type="radio" name="Gender" <?php if (isset($Gender) && $Gender == "male") echo "checked"; ?> value="male">Male
                                            </div>



                    </table>

                    <button name="submit" id="savebtn">Save </button>
            </div>
        </div>
</body>

</html>