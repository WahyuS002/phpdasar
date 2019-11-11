<?php

    require"functions.php";

    if(isset($_POST["submit"])){
        
        if(tambah($_POST)>0){
            echo "<script>
                alert('Data berhasil dimasukkan');
                document.location.href = 'index.php';
            </script>";
        }else{
            echo "<script>
                alert('Data gagal dimasukkan');
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
    
    <h1>Add New Anime</h1>

    <form action="" method="post" enctype="multipart/form-data">

        <label for="title">Title</label>
        <input type="text" id="title" name="title" required>

        <br><br>

        <label for="icon">Icon</label>
        <input type="file" id="icon" name="icon" required>

        <br><br>

        <label for="category">Category</label>
        <input type="text" id="category" name="category" required>

        <br><br>

        <label for="aired">Aired</label>
        <input type="text" id="aired" name="aired" required>

        <br><br>

        <label for="episodes">Episodes</label>
        <input type="text" id="episodes" name="episodes" required>

        <br><br>

        <button type="submit" class="btn btn-warning" name="submit" >Submit</button>

    </form>

</body>
</html>