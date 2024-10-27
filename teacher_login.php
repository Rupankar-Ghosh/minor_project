<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(247, 235, 255);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: none;
            padding: 20px;
            border-radius: 10px;
            /* box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1); */
            width: 300px;
            text-align: center;
        }

        h2 {}

        input[type="text"],
        input[type="password"] {
            width: 80%;
            padding: 15px;
            border: none;
            border-radius: 50px;
            background-color: transparent;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #c05cd4;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
        }

        .input {
            width: 100%;
            height: 45px;
            border: none;
            border-radius: 50px;
            background-color: #f8e9ff;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;

        }

        input[type="text"]:hover {
            border: none;

        }

        input[type="submit"]:hover {
            background-color: #b700ff;
        }

        input:focus {
            outline: none;

        }

        .error {
            color: red;
            display: none;
        }

        .img {
            background-image: url(img/login.svg);
            background-size: contain;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            width: 300px;
            height: 300px;
        }

        img {
            height: 400px;
        }

        .main {
            background-color: white;
            padding: 20px;
            padding-left: 0px;
            border-radius: 30px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            width: 800px;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .icons {

            right: 100px;
            height: 20px;
            width: 10px;
            margin-right: 20px;
        }
    </style>
</head>

<body>

    <center>
        <?php
        if (isset($_POST["submit"])) {
            $id = $_POST['id'];
            $password = $_POST['password'];

            $mysql = mysqli_connect("localhost", "root", "", "minor_project");

            if ($mysql === false) {
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM teacher WHERE id='$id' AND password='$password'";
            $record_obj = mysqli_query($mysql, $sql);

            $n = mysqli_num_rows($record_obj);

            if ($n > 0) {

                session_start();
                $_SESSION["id"] = $id;
                $_SESSION["password"] = $password;

                header("Location: teacher.php");
            } else {

                echo '<script>alert("Invalid login. Please try again.")</script>';
            }

            mysqli_close($mysql);
        }
        ?>
    </center>

    <div class="main">
        <img src="img/login.svg">
        <div class="container">
            <h2>Log In</h2>

            <!-- Login Form -->
            <form id="loginForm" method="post" action="">
                <div class="input">
                    <input type="text" id="id" name="id" placeholder="Username" required>
                    <img class="icons" src="img/user.svg">
                </div>

                <div class="input">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <img class="icons" src="img/password.svg">
                </div>

                <input type="submit" name="submit" value="Sign In">
            </form>
        </div>
    </div>

</body>


</html>