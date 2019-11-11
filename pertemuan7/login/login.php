<?php
    if(isset($_POST["submit"])){
        if($_POST["id"] == "admin" && $_POST["password"] == "123"){
            header("Location: admin.php");
            exit;
        }else{
            $error = true;
        }   
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    
    <?php if(isset($error)) :?>
        <h3>Id atau password yang dimasukkan salah</h3>
    <?php endif;?>

    <h1>LOGIN PAGE</h1>

    <ul>
        <form action="" method="post">
            <li>
                <label for="id">id :</label>
                <input type="text" name="id" id="id">
            </li>
            <li>
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">LOGIN</button>
            </li>
        </form>
    </ul>


</body>
</html>