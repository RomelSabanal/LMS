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
    <title>TPC | Admin Profile</title>
    <link rel="stylesheet" href="design.css">
</head>

<body>
    <div class="main-dashboard">
        <?php include 'header.php';
        include 'a_sidenav.php'; ?>
        <div class="form-profile">

            <div class="admin-prof">

                <h1>ADMIN PROFILE</h1>
                <div id="avatar"></div><br>



                <table class="table">
                    <?php
                    include 'db.php';
                    if ($_SESSION['username'] == 0) {
                    } else {
                        $username = $_SESSION['username'];


                        $sql = "SELECT * FROM `admin` where username='$username' ";
                        $result = mysqli_query($conn, $sql);

                        if ($_GET = mysqli_fetch_array($result)) { ?>
                            <div class="row">
                                <div class="col-50">
                                    <label>Username:</label>
                                    <div id="display"><?php echo $_GET['username'];
                                                    }
                                                } ?></div>
                                    <label>Full Name:</label>
                                    <div id="display" style="width: 215%;"><?php echo   $_GET['Firstname'] . ' ' . $_GET['Mname'] . '. ' . $_GET['Lastname'];
                                                                            ?></div>
                                    <label>Gender:</label>
                                    <div id="display"><?php echo   $_GET['Gender'];
                                                        ?></div>

                                </div>
                                <div class="col-50">

                                    <label>Email Address:</label>
                                    <div id="display"><?php echo   $_GET['email'];
                                                        ?></div><br><br><br><br>

                                    <label>Contact Number:</label>
                                    <div id="display"><?php echo   $_GET['ContactNumber'];
                                                        ?></div>
                                </div>

                            </div>
                            <div id="address">
                                <label>Home Address:</label>
                                <div id="display" style="width: 78%;"><?php echo   $_GET['Address'];
                                                                        ?></div>
                            </div>
                            <div id="btn">
                                <a href="a_change_pass.php">
                                    <p id="forpass">Change your password here</p>
                                </a>
                                <a href="a_edit_profile.php"><button id="savebtn">Edit Info </button></a>

                            </div>
                </table>



            </div>

        </div>

    </div>
</body>

</html>