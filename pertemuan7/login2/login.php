<?php

    if(isset($_POST["submit"])){
        if($_POST["id"] == "admin" && $_POST["pw"] == "123"){
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
    <title>Login</title>
</head>
<body>

    <?php if(isset($error)):?>
        <h1>Data diri salah</h1>
    <?php endif;?>
    
    <form action="" method="post">
        <label for="id" name="id">ID</label>
        <input type="text" id="id" name="id">
        <br>
        <label for="pw" name="pw">Password</label>
        <input type="password" id="pw" name="pw">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

</body>
</html>