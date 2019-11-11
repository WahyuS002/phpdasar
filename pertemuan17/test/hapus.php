<?php

    require"functionstest.php";

    $id = $_GET["id"];

    if(hapus($id) > 0){
        echo "<script>
                alert('Anime has been deleted');
                document.location.href = 'indextest.php';
            </script>";
    }else{
        echo "<script>
                alert('Anime not deleted');
                document.location.href = 'indextest.php';
            </script>";
    }

?>