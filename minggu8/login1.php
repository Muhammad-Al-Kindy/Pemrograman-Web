<?php
session_start();

if (isset($_SESSION["username"])) {
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Halaman Login</h1>
    <div class="kotak_login">
        <p class="tulisan_login">Silahkan login</p>
        <form action="aksi_login.php" method="POST">
            <table border="0">
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" class="form_login" placeholder="Username"></td><br>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" class="form_login" placeholder="Password"></td><br>
                </tr>
                <tr><td><input type="submit" name="submit" class="tombol_login" value="kirim"></td></tr>
                <br>
                <tr><td><a href="daftar1.php"><input type="button" name="daftar" value="daftar"></a></td></tr>
                <br>
                <tr><td><a href="index.php"><input type="button" name="kembali" value="kembali"></a></td></tr>
            </table>
        </form>
    </div>
    
</body>
</html>