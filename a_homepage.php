<!DOCTYPE html>
<html>

<head>
    <title>Welcome, Admin</title>
    <link rel="stylesheet" href="design.css">
</head>



<body>
    <div class="main-dashboard">



        <?php include "header.php" ?>
        <?php include "a_sidenav.php" ?>

        <div class="main-content">
            <div class="users">

                <p> Student Registered</p>
                <div id="use"><?php include 'db.php';
                                $sql = "SELECT `ID`FROM `students` WHERE ID";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_num_rows($result);

                                echo " $row  ";
                                ?>
                </div><br>
                <a href="student_list.php ">See Student List</a><br>


                <label id="no">
                    <p> Instructor Register </p>
                    <div id="use"><?php include 'db.php';
                                    $sql = "SELECT `ID`FROM `instructors` WHERE ID";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_num_rows($result);

                                    echo " $row  ";
                                    ?></div><br>
                    <a href="instructorslist.php">See Instructor List</a><br>
                </label>

            </div>

        </div>

    </div>
</body>

</html>