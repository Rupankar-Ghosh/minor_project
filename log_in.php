<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 50%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        /* .error {
            color: red;
            display: none;
        } */
    </style>
</head>
<body>

    <div class="container">
        <h2>Log In</h2>

        <div id="error-msg" style="color: red; display: none;">Try again</div>

        <form id="loginForm" method="post" action="">
            <input type="text" id="id" name="id" placeholder="Enter your ID">
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <input type="submit"  name="submit" placeholder="Sign In"> 
        </form>
    </div>


    <center>
        <?php
        echo '<script>document.getElementById("error-msg").style.display = "none"</script>';
        if (isset($_POST["submit"])) 
        {
            $id = $_POST['id'];
            $password = $_POST['password'];


            if ($id == "Rup" && $password == "2005") {
                echo '<script>document.getElementById("error-msg").style.display = "none"</script>';
                
                session_start();
                $_SESSION["id"]=$id;
                $_SESSION["password"]=$password;

                header("location:student.php");
            } 
            else {
                echo '<script>document.getElementById("error-msg").style.display = "block"</script>';
            }
        }
        ?>
    </center>
</body>

=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 50%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .error {
            color: red;
            display: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Log In</h2>
        <div class="error" id="error-msg">Try again</div>
        <form id="loginForm" method="post" action="">
            <input type="text" id="id" name="id" placeholder="Enter your ID">
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <input type="submit"  name="submit" placeholder="Sign In"> 
        </form>
    </div>


    <center>
        <?php
        echo '<script>document.getElementById("error-msg").style.display = "none"</script>';
        if (isset($_POST["submit"])) 
        {
            $id = $_POST['id'];
            $password = $_POST['password'];


            if ($id == "Rup" && $password == "2005") {
                echo '<script>document.getElementById("error-msg").style.display = "none"</script>';
                
                session_start();
                $_SESSION["id"]=$id;
                $_SESSION["password"]=$password;

                header("location:student.php");
            } 
            else {
                echo '<script>document.getElementById("error-msg").style.display = "block"</script>';
            }
        }
        ?>
    </center>
</body>

>>>>>>> 663ae4f209370cb408bd4ad45eefcfee52f43245
</html>