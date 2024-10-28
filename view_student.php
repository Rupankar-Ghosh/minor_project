<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
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

    //LOGOUT
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();

        echo '<script>alert("Logout successful");</script>';
        echo '<script>window.location.href = "index.html";</script>';
        exit();
    }


    $sql= "SELECT * FROM student;";
    $record_obj = mysqli_query($mysql, $sql);
    $n = mysqli_num_rows($record_obj);

    ?>

    <table border="3" align="center">
        <tr>
            <th>ID</th>
            <th>PASSWORD</th>
            <th>NAME</th>
            <th>DOB</th>
            <th>COURSE</th>
            <th>YEAR</th>
        </tr>

        <?php
        
        while($row = mysqli_fetch_assoc($record_obj)){
            echo "
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['password']}</td>
                <td>{$row['name']}</td>
                <td>{$row['dob']}</td>
                <td>{$row['course']}</td>
                <td>{$row['year']}</td>
            </tr>
            ";
        }
        ?>
    </table>



</body>

</html>