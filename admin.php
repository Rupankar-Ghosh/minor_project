<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        img {
            height: 100px;
            width: 100px;
            padding: 0;
            vertical-align: middle;
            border: 2px solid;
            /*width: 150px;
            height: 150px;
            border: 2px solid #000;
            text-align: center;
            vertical-align: middle;
            font-size: 16px;
            color: #555;*/
        }

        .a {
            /*padding: 10px;
            margin-left: 10px;
            border-left: 10px;*/
        }

        table {
            border-collapse: collapse;
            height: 190px;
            width: 100%;
            margin: 25px auto;
            background-color: aquamarine;

        }

        td {
            padding-left: 20px;
            font-size: 30px;
            padding: 20px;
        }

        td input {
            width: 50%;
            padding: 5px;
            font-size: 20px;
        }

        .box {
            height: 150px;
            width: 200px;
            font-size: 30px;
            text-align: center;
            padding: 25px;
            margin: 20px;
            background-color: blanchedalmond;
            border: 2px solid black;
            border-radius: 20%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: column;

        }

        .container {
            background-color: cadetblue;
            height: 500px;
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .box img {
            height: 60px;
            width: 65px;
            border: 2px solid;
            /padding: 20px;/
        }

        .box:hover {
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 1);
        }

        .box img:hover {
            box-shadow: 0px 0px 15px rgba(0, 0, 1, 1);
        }


        ul {
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;

            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        }

        ul li {
            display: inline-flex;
            padding: 15px;

        }

        ul li:hover {
            background-color: #6674CC;
            color: rgb(255, 255, 255);
        }

        a {
            text-decoration: none;
            color: #000;
        }

        a:hover {
            color: white;
        }

        .n:hover {
            background-color: rgba(255, 196, 0, 0.9);
            color: #000;
        }

        .dropdown {
            display: none;
        }


        ul li:hover .dropdown {
            display: block;
            position: absolute;
            margin-left: -15px;
            margin-top: 36px;
        }

        .dropdown ul li {
            display: block;
            color: black;
        }

        .dropdown ul {
            margin: 0px;
            padding: 0px;
        }
        input{
            border: none;
            background-color: transparent;
        }
    </style>
</head>

<body>

    <?php
    session_start(); 
    $id = $_SESSION["id"];
    $password = $_SESSION["password"];


    $mysql = mysqli_connect("localhost", "root", "", "minor_project");

    if ($mysql === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM admin WHERE id='$id' AND password='$password'";
    $record_obj = mysqli_query($mysql, $sql);

    $n = mysqli_num_rows($record_obj);

    if ($n <= 0) {
        echo '<script>window.location.href = "index.html";</script>';
        exit();
    }
    $row=mysqli_fetch_row($record_obj);
    

    //LOGOUT
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();

        echo '<script>alert("Logout successful");</script>';
        echo '<script>window.location.href = "index.html";</script>';
        exit();
    }
    ?>





    <div class="nav">
        <ul>
            <div class="name">
                <li class="n">img</li>
                <li class="n">Institution Name</li>
            </div>
            <div class="home">
                <li id="start"><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
                <li>
                    <form action="" method="post" class="btn"><input type="submit" name="logout" value="Logout"></form>
                </li>
            </div>
        </ul>
    </div>



    <table>
        <tr>
            <td class="a" rowspan="2"><img src=""><br>add image</td>
            <td class="a">name: <input type="text" name="name" placeholder="<?php echo $id; ?>"> </td>
        </tr>

    </table>



    <div class="container">
        <a href="add_student.php"><div class="box"> <img src="notes.png" alt="notes"> Add Student</div></a>
        <a href="view_student.php"><div class="box"> <img src="notice.png" alt="notice"> View Student</div></a>
        <a href="add_admin.php"><div class="box"><img src="syallabus.png" alt="syallabus"> Add Admin</div></a>
        <a href="add_notic.php"><div class="box"><img src="complain.png" alt="complain"> Add Notice</div></a>
    </div>




</body>

</html>