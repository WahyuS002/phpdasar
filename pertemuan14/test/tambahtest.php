<?php

    require"functionstest.php";
    
    if(isset($_POST["submit"])){

        if(tambah($_POST)>0){
            echo "<script>
                alert('new anime has been added');
                document.location.href = 'indextest.php';
            </script>";
        }else{
            echo "<script>
                alert('new anime not added');
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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Myanimelist</title>
</head>
<body>
    
    <h1>Add new anime</h1>

    <form action="" method="post">

        <label for="title" class="label-center">Title</label>
        <input type="text" id="title" name="title" class="input-center" required>

        <br><br>

        <label for="icon" class="label-center">Icon</label>
        <input type="text" id="icon" name="icon" class="input-center" required>

        <br><br>

        <label for="category" class="label-center">Category</label>
        <input type="text" id="category" name="category" class="input-center" required>

        <br><br>

        <label for="aired" class="label-center">Aired</label>
        <input type="text" id="aired" name="aired" class="input-center" required>

        <br><br>

        <label for="episodes" class="label-center">Episodes</label>
        <input type="text" id="episodes" name="episodes" class="input-center" required>

        <br><br>

        <button class="btn btn-warning" type="submit" name="submit">Submit</button>
    </form>

</body>
</html>