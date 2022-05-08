<?php
$hostname ="localhost";
$username ="root";
$password ="";
$database = "web_db";

$connect = mysqli_connect($hostname,$username,$password,$database);

if ($connect) {
    echo "Koneksi ke MYSQL berhasil <br>";
}
else {
    echo "Koneksi ke MYSQL gagal". mysqli_connect_error();
}

$query = "insert into student(name,address)
values('Muhammad Al Kindy','Jakarta'),
('Muhammad Brilian Krisnadi','Bekasi'),
('Muhammad Sultan Machfud','Malang')";

if (mysqli_query($connect,$query)) {
    echo "Data baru berhasil ditambahkan";
}
else {
    echo "Data baru gagal ditambahkan <br>" . mysqli_error($connect);
}
mysqli_close($connect);
?>