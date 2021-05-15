<?php
require "koneksi.php";

function registrasi($data) {
    global $koneksi;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    
    if ($password != $password2){
        echo "<script>
                alert('Konfirmasi password tidak sesuai');
            </script>";
        return false;
    }
    
    
    $cekuser = mysqli_query($koneksi,"SELECT username FROM tb_user WHERE username = '$username'");

    if(mysqli_fetch_assoc($cekuser)){
        echo "<script>
                alert('Username sudah terdaftar sebelumnya');
            </script>";
        return false;
    }

    
    $password = password_hash($password, PASSWORD_DEFAULT);

    
    mysqli_query($koneksi, "INSERT INTO tb_user VALUES('','$username','$password')");

    return mysqli_affected_rows($koneksi);
}

?>