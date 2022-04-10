<?php
include "koneksi.php";
$name = $_REQUEST['name'];
$tglLahir =$_REQUEST['tanggallahir'];
$jk =$_REQUEST['jeniskelamin'];
$email = $_REQUEST['email'];
$user =$_REQUEST['username'];
$pass =$_REQUEST['password'];

$mysqli = "INSERT INTO tb_member(NAMA,TANGGAL_LAHIR,JENIS_KELAMIN,EMAIL,USERNAME,PASSWORD) VALUES('$name','$tglLahir','$jk','$email','$user','$pass')";

$result = mysqli_query($koneksi, $mysqli);

if ($result) {
    echo"data yang diinputkan berhasil";
    header("Location: login1.php");
}else {
    echo "data gagal";
}
mysqli_close($koneksi);
?>