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

        $nameFile = $_FILES["icon"]["name"];
        $tmpName = $_FILES["icon"]["tmp_name"];
        $error = $_FILES["icon"]["error"];
        $size = $_FILES["icon"]["size"];

        //cek gambar yang diupload ada atau tidak error === 4 artinya tidak ada gambar yg diinsert
        if($error === 4){
            echo "<script>
                alert('Please insert an image');
            </script>";
            return false;
        }

        //cek yang diupload gambar atau file lain
        $extensiFileValid = ['jpg','jpeg','png'];
        $extensiFile = explode('.', $nameFile);
        $extensiFile = strtolower(end($extensiFile));

        if( !in_array($extensiFile, $extensiFileValid) ){
            echo "<script>
                alert('Please insert valid image(jpg,jpeg,png)');
            </script>";
            return false;
        }

        //cek ukuran file
        if( $size > 1000000 ){
            echo "<script>
                alert('Please add image less than 1MB');
            </script>";
            return false;
        }

        //agar tidak ada duplikat nama
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $extensiFile;

        move_uploaded_file($tmpName, 'image/' . $namaFileBaru);

        return $namaFileBaru;

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
        $iconLama = htmlspecialchars($data["iconLama"]);
        
        if( $_FILES["icon"]["error"] === 4 ){
            $icon = $iconLama;
        }else{
            $icon = upload();
        }
        

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
    
    function registrasi($data){
        global $conn;

        $username = stripslashes($data["username"]);
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");

        if( mysqli_fetch_assoc($result) ){
            echo"
                <script>
                    alert('Username has been registered please take another username')
                </script>
            ";
            return false;
        }

        if( $password !== $password2 ){
            echo"
                <script>
                    alert('Password not match')
                </script>
            ";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

        return mysqli_affected_rows($conn);

    }

?>