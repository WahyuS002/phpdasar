<?php
    
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn;

        $title = htmlspecialchars($data["title"]);
        
        $icon = upload();
        if( $icon === false ){
            return false;
        } 

        $category = htmlspecialchars($data["category"]);
        $aired = htmlspecialchars($data["aired"]);
        $episodes = htmlspecialchars($data["episodes"]);

        $query = "INSERT INTO myanimelist
                    VALUES
                    ('', '$title', '$icon', '$category', '$aired', '$episodes')
                ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }

    function upload(){

        $namaFile = $_FILES['icon']['name'];
        $tmpName = $_FILES['icon']['tmp_name'];
        $error = $_FILES['icon']['error'];
        $size = $_FILES['icon']['size'];

        //mengecek gambar harus dimasukkan sudah ada di tag required

        //apakah yang dimasukkan adalah file valid(gambar)
        $extensiFileValid = ['jpg','jpeg','png'];
        $extensiFile = explode("." , $namaFile);
        $extensiFile = strtolower(end($extensiFile));

        if( !in_array($extensiFile, $extensiFileValid) ){
            echo "<script>
                alert('Please insert an image like jpg,jpeg,png');
                document.location.href = 'index.php';
            </script>";
            return false;
        }

        if( $size > 1000000 ) {
            echo "<script>
                alert('Please add image less than 1 MB');
                document.location.href = 'index.php';
            </script>";
            return false;
        }


    }




    
    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM myanimelist WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
    
    function ubah($data){
        global $conn;

        $id = $data["id"];
        $title = htmlspecialchars($data["title"]);
        $icon = htmlspecialchars($data["icon"]);
        $category = htmlspecialchars($data["category"]);
        $aired = htmlspecialchars($data["aired"]);
        $episodes = htmlspecialchars($data["episodes"]);

        $query = "UPDATE myanimelist SET
                    title = '$title',
                    icon = '$icon',
                    category = '$category',
                    aired = '$aired',
                    episodes = '$episodes'
                    WHERE id = $id
                    ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword){

        $query = "SELECT * FROM myanimelist
                    WHERE
                    title LIKE '%$keyword%' OR
                    category LIKE '%$keyword%' OR
                    aired LIKE '%$keyword%' OR
                    episodes LIKE '%$keyword%'
        ";
        return query($query);

    }   

?>