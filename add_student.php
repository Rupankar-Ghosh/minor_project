<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F3F3FE;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 30px;
            padding-right: 50px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: left;
        }

        h1 {
            text-align: center;
        }

        input[type="text"],
        input[type="password"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"] :hover {
            background-color: #0056b3;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Add Student</h1>


        <?php

        if (isset($_POST["submit"])) {
            // Capture form data
            $name = $_POST['name'];
            $id = $_POST['id'];
            $password = $_POST['password'];
            $course = $_POST['course'];
            $dob = $_POST['dob'];
            $year = $_POST['year'];

            // Simple validation check
            if (empty($name) || empty($id) || empty($password) || empty($course) || empty($dob) || empty($year)) {
                echo "<center class=error> All fields are required!</center>";
            } else {
                $mysql = mysqli_connect("localhost", "root", "", "minor_project");
                $sql = "insert into student values('$id','$password','$name','$dob','$course','$year')";
                $mysql->query($sql);

                // $sql="insert into student values(?,?,?,?,?,?)";
                // $ps=$mysql->prepare($sql);
                // $ps->bind_param("issssi",$id,$password,$name,$dob,$course,$year);
                // $ps->execute();
        
                echo "<center class=success> Registration successful!</center>";
            }
        }
        ?>

        <form method="POST" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name">

            <label for="id">Student ID:</label>
            <input type="text" id="id" name="id" placeholder="Enter your ID">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">

            <label for="course">Course:</label>
            <input type="text" id="course" name="course" placeholder="Enter your course">

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob">

            <label for="year">Year of Study:</label>
            <select id="year" name="year">
                <option value="">Select Year</option>
                <option value="1">1st Year</option>
                <option value="2">2nd Year</option>
                <option value="3">3rd Year</option>
                <option value="4">4th Year</option>
            </select>

            <input type="submit" name="submit">
        </form>
    </div>

</body>

</html>