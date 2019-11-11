<?php

    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    $query = mysqli_query($conn, "SELECT * FROM myanimelist");
    // $myanimelist = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Myanimelist</title>
</head>
<body>
    
    <table border="1" cellpadding="10" class="list-table">
    
        <th>Title</th>
        <th>Icon</th>
        <th>Category</th>
        <th>Aired</th>
        <th>Episodes</th>

        <?php while($row = mysqli_fetch_assoc($query)):?>
            <tr>
                <td><?= $row["title"]?></td>
                <td><img src=image\<?= $row["icon"]?> class="icon"></td>
                <td><?= $row["category"]?></td>
                <td><?= $row["aired"]?></td>
                <td><?= $row["episodes"]?></td>
            </tr>
        <?php endwhile;?>

    </table>

</body>
</html>