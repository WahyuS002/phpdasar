<?php

    require"functions.php";

    $id = $_GET["id"];

    $mal = query("SELECT * FROM myanimelist WHERE id = $id")[0];

    if(isset($_POST["submit"])){
        
        if(ubah($_POST)>0){
            echo "<script>
                alert('Data berhasil diubah');
                document.location.href = 'index.php';
            </script>";
        }else{
            echo "<script>
                alert('Data gagal diubah');
                document.location.href = 'index.php';
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Myanimelist</title>
</head>
<body>
    
    <h1>Edit Anime</h1>

    <form action="" method="post">

        <input type="hidden" name="id" value="<?= $mal["id"]?>">

        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="<?= $mal["title"]?>" required>

        <br><br>

        <label for="icon">Icon</label>
        <input type="text" id="icon" name="icon" value="<?= $mal["icon"]?>" required>

        <br><br>

        <label for="category">Category</label>
        <input type="text" id="category" name="category" value="<?= $mal["category"]?>" required>

        <br><br>

        <label for="aired">Aired</label>
        <input type="text" id="aired" name="aired" value="<?= $mal["aired"]?>" required>

        <br><br>

        <label for="episodes">Episodes</label>
        <input type="text" id="episodes" name="episodes" value="<?= $mal["episodes"]?>" required>

        <br><br>

        <button type="submit" class="btn btn-success" name="submit" >Submit</button>

    </form>

</body>
</html>