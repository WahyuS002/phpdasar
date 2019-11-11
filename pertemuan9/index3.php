<?php
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    $result = mysqli_query($conn, "SELECT * FROM myanimelist")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Myanimelist</title>
</head>
<body>
    
    <table border="1" cellpadding="10">
        
            <tr>
                <th>No</th>
                <th>Action</th>
                <th>Icon</th>
                <th>Category</th>
                <th>Aired</th>
                <th>Episodes</th>
            </tr>

        <?php $i = 1;?>
        <?php while($row = mysqli_fetch_assoc($result)):?>
            <tr style="text-align:center">
                <td><?= $i?></td>
                <td>
                    <a href="">ubah</a>
                    <a href="">hapus</a>
                </td>
                <td><img src="image/<?= $row["icon"]?>" width="50"></td>
                <td><?= $row["category"]?></td>
                <td><?= $row["aired"]?></td>
                <td><?= $row["episodes"]?></td>
            </tr>
            <?php $i++?>
        <?php endwhile;?>
    </table>
    

</body>
</html>