<html>

<head>
    <link rel="stylesheet" href="design.css">
</head>

<body>
    <div class="main-dashboard">
        <?php include 'header.php';
        include 'a_sidenav.php'; ?>

        <div class="form-profile">
            <form action="addinstruc.php" method="post" class="addform">

                <h6>ADD INSTRUCTOR</h6>
                <div class="row">
                    <div class="col-50">



                        <label>Instructor ID:</label>
                        <input type="text" id="display" name="InstructorID">
                        <label>First Name:</label>
                        <input type="text" id="display" name="Fname">
                        <label>Last Name</label>
                        <input type="text" id="display" name="Lname">
                        <label>Home Address:</label>
                        <input type="text" id="display" name="Address">

                    </div>
                    <div class="col-50">

                        <label>Email Address:</label>
                        <input type="email" id="display" name="EmailAddress">
                        <label>Middle Name:</label>
                        <input type="text" id="display" name="Mname">




                        <label>Contact Number:</label>
                        <input type="text" id="display" name="ContactNumber">

                        <label>Gender:</label>

                        <input type="radio" name="Gender" <?php if (isset($Gender) && $Gender == "female") echo "checked"; ?> value="female">Female
                        <input type="radio" name="Gender" <?php if (isset($Gender) && $Gender == "male") echo "checked"; ?> value="male">Male
                    </div>

                </div>


                <button name="submit" id="savebtn">Save </button>

            </form>
        </div>
    </div>
</body>

</html>