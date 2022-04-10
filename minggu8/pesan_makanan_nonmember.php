<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pemesanan Makanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Pemesanan makanan</h1>
    <div class="kotak_login">
        <p class="tulisan_login">Silahkan Isi</p>
        <form action="proses_beli_nonmember.php" method="POST">
            <table border="0">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="name" placeholder="Nama"></td><br>
                </tr>
                <tr>
                    <td><b>Mau makan apa hari ini?</b></td><br>
                    <td>:</td>
                    <td><select name="Makanan" size="1">
                        <option value"Rendang">Rendang
                        <option value"Mie">Mie
                        <option value"Ayam">Ayam Goreng
                        <option value"Cincang" selected>Cincang
                        <option value"Ikan">Ikan Bakar</select>
                    </td><br>
                </tr>
                <tr>
                    <td>Berapa Jumlah Pesanan</td>
                    <td>:</td>
                    <td><input type="text" name="Pesanan" placeholder="Jumlah"></td><br>
                </tr>
                <tr><td><input type="submit" name="submit" value="kirim"></td></tr>
            </table>
        </form>
    </div>
</body>
</html>