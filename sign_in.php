<!DOCTYPE html>
<html>

<head>
    <title>php</title>

</head>

<body>
    <center>
        <?php
        if (isset($_POST["submit"])) 
        {
            $id = $_POST['id'];
            $password = $_POST['password'];

            echo $id . "<br>" . $password . "<br>";

            if ($id == "Rup" && $password == "2005") {
                echo "Sucessful";
            } else {
                echo "Try agin";
            }
        }
        else{
            echo '<a href="sign_in.html">Go to Sign in page </a>';
        }
        ?>
    </center>
</body>

</html>