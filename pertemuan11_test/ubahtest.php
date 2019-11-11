<?php

    require"functionstest.php";

    $id = $_GET["id"];

    $mal = query("SELECT * FROM myanimelist WHERE id = $id")[0];
    
    if(isset($_POST["submit"])){

        if(ubah($_POST)>0){
            echo "<script>
                alert('new anime has been edited');
                document.location.href = 'indextest.php';
            </script>";
        }else{
            echo "<script>
                alert('new anime not edited');
                document.location.href = 'indextest.php';
            </script>";
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
    <title>Myanimelist</title>
</head>
<body>
    
    <h1>Edit Anime</h1>

    <form action="" method="post">

        <input type="hidden" name="id" value="<?= $mal["id"]?>">

        <label for="title" class="label-center">Title</label>
        <input type="text" id="title" name="title" class="input-center" value="<?= $mal["title"]?>" required>

        <br><br>

        <label for="icon" class="label-center">Icon</label>
        <input type="text" id="icon" name="icon" class="input-center" value="<?= $mal["icon"]?>" required>

        <br><br>

        <label for="category" class="label-center">Category</label>
        <input type="text" id="category" name="category" class="input-center" value="<?= $mal["category"]?>" required>

        <br><br>

        <label for="aired" class="label-center">Aired</label>
        <input type="text" id="aired" name="aired" class="input-center" value="<?= $mal["aired"]?>" required>

        <br><br>

        <label for="episodes" class="label-center">Episodes</label>
        <input type="text" id="episodes" name="episodes" class="input-center" value="<?= $mal["episodes"]?>" required>

        <br><br>

        <button class="btn btn-warning" type="submit" name="submit">Submit</button>
    </form>

</body>
</html>