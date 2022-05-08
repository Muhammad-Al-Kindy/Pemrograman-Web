<?Php
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

$query = "CREATE TABLE student(
    id int primary key auto_increment,
    name varchar(30) not null,
    address varchar(100))";

    if (mysqli_query($connect,$query)) {
        echo "Tabel student berhasil dibuat";
    }else {
        echo "Tabel student gagal dibuat <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>