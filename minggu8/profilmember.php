<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login1.php");
    exit;
}
$username=$_SESSION["username"];
include 'koneksi.php';
$query = "SELECT * FROM tb_member WHERE USERNAME ='$username'";
$check = $koneksi->query($query);
if (mysqli_num_rows($check)==1) {
    $hasil = $check->fetch_array();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profil akun</title>
    <link rel="stylesheet" href="halamanutama.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Selamat Datang Di Restoran Kind</h1>
        </div>
        <div class="left">
            <h3>Menu</h3>
            <ul>
                <li><a href="login1.php">Login</a></li>
                <li><a href="profil.php">Profil Restoran</a></li>
                <li><a href="daftarmenu.php">Daftar Menu</a></li>
            </ul>
        </div>
        <div class="middle">
            <h3>Profil Akun</h3>
            <table border="0">
                <tr align="left">
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo $hasil['NAMA']?></td><br>
                </tr>
                <tr align="left">
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo $hasil['TANGGAL_LAHIR']?></td><br>
                </tr>
                <tr align="left">
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo $hasil['EMAIL']?></td><br>
                </tr>
                <tr align="left">
                    <td>Username</td>
                    <td>:</td>
                    <td><?php echo $hasil['USERNAME']?></td><br>
                </tr>
                <tr align="left">
                    <td>Password</td>
                    <td>:</td>
                    <td><?php echo $hasil['PASSWORD']?></td><br>
                </tr>
            </table>
        </div>
        <div class="right">
            <h3>Buku Terpopuler</h3>
            <ul>
                <li><a href="profilmember.php">Profil Member</a></li>
                <li><a href="pesan_makanan.php">Pesan Makanan</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="footer">
            <p>Copyright &copy Belajar CSS</p>
        </div>
    </div>
</body>
</html>