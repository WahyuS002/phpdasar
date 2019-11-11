<?php

    require"functions.php";
    $myanimelist = query("SELECT * FROM myanimelist");

    if(isset($_POST["search"])){

        $myanimelist = cari($_POST["keyword"]);

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Myanimelist</title>
</head>
<body>
    
    <h1>Top Anime</h1>

    <a href="tambah.php" style="color:white"><button type="button" class="btn btn-primary">Add new anime</button></a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" autocomplete="off" autofocus="" placeholder="Search Anime, Category, and more..." size="45">
        <button type="submit" name="search" class="btn btn-info">Search</button>
    </form>

    <br>

    <table border="1" cellpadding="10">
        
            <tr style="text-align:center">
                <th>No</th>
                <th>Action</th>
                <th>Title</th>
                <th>Icon</th>
                <th>Category</th>
                <th>Aired</th>
                <th>Episodes</th>
            </tr>

        <?php $i = 1;?>
        <?php foreach($myanimelist as $row):?>
            <tr style="text-align:center">
                <td><?= $i?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]?>"><button type="button" class="btn btn-success">ubah</button></a>
                    <a href="hapus.php?id=<?= $row["id"]?>" onclick="return confirm('yakin?')"><button type="button" class="btn btn-danger">hapus</button></a>
                </td>
                <td><?= $row["title"]?></td>
                <td><img src="image/<?= $row["icon"]?>" width="50"></td>
                <td><?= $row["category"]?></td>
                <td><?= $row["aired"]?></td>
                <td><?= $row["episodes"]?></td>
            </tr>
            <?php $i++?>
        <?php endforeach;?>
    </table>
    

</body>
</html>