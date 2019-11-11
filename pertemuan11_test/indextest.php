<?php

    require"functionstest.php";
    $myanimelist = query("SELECT * FROM myanimelist");

    if( isset($_POST["cari"]) ){
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

    <h1>Daftar Anime</h1>

    <a href="tambahtest.php" style="color:white"><button type="button" class="btn btn-primary">Add new anime</button></a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" autofocus="" autocomplete="off" placeholder="Search an anime...">
        <button type="submit" name="cari" class="btn btn-info">Search</button>

    </form>

    <br>

    <table border="1" cellpadding="1">
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
                <a href="ubahtest.php?id=<?= $row["id"]?>"><button type="button" class="btn btn-success">Ubah</button></a>
                <a href="hapus.php?id=<?= $row["id"]?>" onclick="return confirm('Yaqueen?')"><button type="button" class="btn btn-danger">Hapus</button></a>
            </td>

            <td><?= $row["title"]?></td>
            <td><img src="image/<?= $row["icon"]?>" width="50"></td>
            <td><?= $row["category"]?></td>
            <td><?= $row["aired"]?></td>
            <td><?= $row["episodes"]?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>
    </table>

</body>
</html>