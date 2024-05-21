<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talibon Polythecnic College | Learning Management System Login Form</title>
    <link rel="stylesheet" href="design.css">


</head>

<body>
    <img src="tpc_background.jpg" id="backpic" alt="wa">
    <div class="index-container">
        <div class="school">
            <div class="schoolname">
                <h1>TPC</h1>
                <p style="margin-top: 0%; ">Learning Management System</p>
                <img src="tpc.png" id="logopic" alt="#">
            </div>
        </div>

        <div class="logform">

            <form class="form" action="login.php" method="post">

                <h1>Welcome, Admin!</h1> <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <div class="flex-column">
                    <label>Username: </label>
                </div>
                <div class="inputForm">

                    <svg viewBox="0 0 344 384" height="26.72093023255814" width="24">
                        <path d="M170.5 192q-35.5 0-60.5-25t-25-60.5T110 46t60.5-25T231 46t25 60.5t-25 60.5t-60.5 25zm0 43q31.5 0 69.5 9t69.5 29.5T341 320v43H0v-43q0-26 31.5-46.5T101 244t69.5-9z" fill="#000000"></path>
                    </svg>
                    <input name="username" class="input" type="text" />
                </div>

                <div class="flex-column">
                    <label>Password: </label>
                </div>
                <div class="inputForm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="-64 0 512 512" height="20">
                        <path d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0"></path>
                        <path d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0"></path>
                    </svg>
                    <input name="password" class="input" type="password" />
                </div>

                <div class="flex-row">


                </div>
                <button class="button-submit">Log in</button>


            </form>

        </div>

    </div>

</body>


</html>