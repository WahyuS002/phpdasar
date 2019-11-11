<?php

    require"functions.php";
    $myanimelist = query("SELECT * FROM myanimelist");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>ADMIN</title>
</head>
<body>
    
    <h1>Daftar Anime</h1>

    <button type="button" class="btn btn-dark"><a href="tambah.php">Tambah Anime</a></button>
    <br><br>

    <table border="1" cellpadding="10">

    <tr>
        <th>No.</th>
        <th>Action</th>
        <th>Title</th>
        <th>Icon</th>
        <th>Category</th>
        <th>Aired</th>
        <th>Episodes</th>
    </tr>

    <?php $i = 1;?>
    <?php foreach ($myanimelist as $row):?>
    <tr style="text-align:center">

        <td><?php echo $i;?></td>
        
        <td>
            <a href="">ubah</a>
            <a href="">hapus</a>  
        </td>

        <td><?php echo $row["title"]?></td>

        <td>
            <img src="image/<?php echo $row["icon"]?>" width=50>
        </td>

        <td><?php echo $row["category"]?></td>
        <td><?php echo $row["aired"]?></td>
        <td><?php echo $row["episodes"]?></td>
    </tr>
    <?php $i++;?>
    <?php endforeach;?>

    </table>

</body>
</html>