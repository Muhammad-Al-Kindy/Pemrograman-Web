<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form pendaftaran member</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>FORM MEMBER</h1>
    <div class="kotak_login">
        <p class="tulisan_login">Silahkan Isi</p>
        <img class="gambar" src="img/restoran.png" alt="restoran">
        <form action="submit.php" method="POST">
            <table border="0">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="name" placeholder="Nama"></td><br>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggallahir"></td><br>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="jeniskelamin" value="pria">Pria
                    <input type="radio" name="jeniskelamin" value="wanita">Wanita</td><br>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" placeholder="Email"></td><br>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" placeholder="Username"></td><br>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" placeholder="Password"></td><br>
                </tr>
                <tr><td><input type="submit" name="submit" value="kirim"></td></tr>
                <tr><td><a href="index.php"><input type="button" name="kembali" value="kembali"></a></td></tr>
            </table>
        </form>
    </div>
</body>
</html>