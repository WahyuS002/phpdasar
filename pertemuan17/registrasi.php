<?php

    require"functions.php";
    if( isset($_POST["registrasi"])){

        if( registrasi($_POST) > 0 ){
            echo "<script>
                    alert('New user has been added!');
                </script>";
        }else{
            echo mysqli_error($conn);
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Registration</title>
</head>
<body>
    
    <h1>Registration</h1>

    <form action="" method="post">

        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
        <br><br>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
        <br><br>

        <label for="password2">Re-password :</label>
        <input type="password" name="password2" id="password2">
        <br><br>

        <button type="submit" name="registrasi" class="btn btn-warning">Register</button>

    </form>

    <a href="login.php">Already have an account? Login here</a>

</body>
</html>