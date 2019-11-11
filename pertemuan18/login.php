<?php

    session_start();

    require"functions.php";
    //cek cookie
    if(isset($_COOKIE["id"]) && isset($_COOKIE["key"])){
        $id = $_COOKIE["id"];
        $key = $_COOKIE["key"];

        $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id ");
        $row = mysqli_fetch_assoc($result);

        if( $key === hash('sha256', $row['username']) ){
            $_SESSION["login"] = true;
        }

    }

    if( isset($_SESSION["login"])){
        header("Location: index.php");
        exit;
    }

    if( isset($_POST["login"])){

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");

        // cek username
        if( mysqli_num_rows($result) === 1 ){
            $row = mysqli_fetch_assoc($result);

            //cek password
            if( password_verify($password, $row["password"]) ){

                //cek checkbox "ingat saya"
                if( isset($_POST["remember"]) ){
                    setcookie('id', $row["id"], time() + 360);
                    //key = username untuk biar tidak kedetek dgn hacker
                    setcookie('key', hash('sha256' ,$row["username"]), time() + 360 );
                }

                $_SESSION["login"] = true;
                header("location: index.php");
                exit;
            }
        }

        $error = true;

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
    <title>Login</title>
</head>
<body>
    
    <h1>Login</h1>

    <?php if( isset($error) ):?>
        <p style="color:red; font-style:italic;">Username or password is wrong</p>
    <?php endif;?>

    <form action="" method="post">

        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
        <br><br>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
        <br><br>

        <label for="remember">Ingat Saya</label>  
        <input type="checkbox" name="remember" id="remember">
        <br><br>

        <button type="submit" name="login" class="btn btn-warning">Login</button>

    </form>

    <a href="registrasi.php">Don't have account? Register here</a>

</body>
</html>