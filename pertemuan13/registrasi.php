<?php

    require"functions.php";

    if( isset($_POST["registrasi"]) ){

        if( registrasi($_POST) > 0 ){
            echo"
                <script>
                    alert('new user has been added')
                </script>
            ";
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>

    <h1>Registration</h1>
    
    <form action="" method="post">
    
        <label for="username">Username</label>
        <input type="text" id="username" name="username">
        <br><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <br><br>

        <label for="password2">Re Password</label>
        <input type="password" id="password2" name="password2">
        <br><br>

        <button type="submit" class="btn btn-warning" name="registrasi">Registration</button>

    </form>

</body>
</html>