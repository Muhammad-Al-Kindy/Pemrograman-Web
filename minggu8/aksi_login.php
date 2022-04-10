<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tb_member WHERE USERNAME ='$username'";
$check = $koneksi->query($query);
if (mysqli_num_rows($check)==1) {
    $hasil = $check->fetch_array();
    if($hasil['PASSWORD']==$password){
        $message = 'Berhasil Login';
        
        echo "<SCRIPT>
        alert('$message')
        window.location.replace('login.php');
        </SCRIPT>";

        $_SESSION["username"]=$username;
        header("Location: index.php");

        mysqli_close($koneksi);
    } 
    $message = 'Password Salah';                   

        echo "<SCRIPT>
        alert('$message')
        window.location.replace('login.php');
        </SCRIPT>";

        mysqli_close($koneksi);
}
$message = 'User Tidak Ditemukan';                  

    echo "<SCRIPT>
        alert('$message')
        window.location.replace('login.php');
        </SCRIPT>";

    mysqli_close($koneksi);
?>