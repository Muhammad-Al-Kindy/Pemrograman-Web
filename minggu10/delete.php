<?php
include 'myconnection.php';

$id = $_GET["id"];

$query = "DELETE FROM student WHERE id=$id";
$query1 = "SELECT * from student where id = $id";
$result = mysqli_query($connect,$query1);
$row = mysqli_fetch_array($result);

unlink("$row[dataimage]");

if (mysqli_query($connect,$query)) {
    header('Location:homeCRUD.php');
}
else {
    echo "Data gagal dihapus <br>" . mysqli_error($connect);
}
mysqli_close($connect);
?>