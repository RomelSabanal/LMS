<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <title>Student List</title>
</head>



<body>
    <div class="main-dashboard">
        <?php include "header.php";
        include "a_sidenav.php"; ?>


        <div class="tabled">

            <h1>LIST OF STUDENTS</h1>



            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search ID here..." title="Type in a name">

            <table id="myTable">
                <tr class="header">
                    <th style="width: 60px;">Student ID</th>
                    <th style="width: 60px;">Course</th>
                    <th style="width: 60px;">Firstname</th>
                    <th style="width: 60px;">Lastname</th>
                    <th style="width: 60px;">Middlename</th>
                    <th style="width: 60px;">Gender</th>
                    <th style="width: 60px;">Password</th>
                    <th style="width: 60px;">Email</th>
                    <th style="width: 60px;">Address</th>
                    <th style="width: 60px;">Contact Number</th>
                    <th style="width: 60px;">Profile Picture</th>
                </tr>
                <?php
                include "db.php";
                $sql = "SELECT * FROM students";
                $result =  mysqli_query($conn, $sql) or die();
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row['StudentID'];
                            ?></td>
                        <td><?php echo $row['Course'];
                            ?></td>
                        <td><?php echo $row['Firstname'];
                            ?></td>
                        <td><?php echo $row['Lastname'];
                            ?></td>
                        <td><?php echo $row['Middlename'];
                            ?></td>
                        <td><?php echo $row['Gender'];
                            ?></td>
                        <td><?php echo $row['Password'];
                            ?></td>
                        <td><?php echo $row['EmailAddress'];
                            ?></td>
                        <td><?php echo $row['Address'];
                            ?></td>
                        <td><?php echo $row['ContactNumber'];
                            ?></td>
                        <td><?php echo $row['img_pic'];
                        } ?></td>
                    </tr>
            </table>

            <script>
                function myFunction() {
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[0];
                        if (td) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
            </script>

            </table> <button id="addbtn" name="submit">Add</button>
        </div>
    </div>
</body>

</html>