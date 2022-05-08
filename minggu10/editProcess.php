<?php
include "myconnection.php";
    $id = $_POST["myid"];
    $name = $_POST["myname"];
    $address = $_POST["myaddress"];
    $gambar ="Uploads/" . $_FILES['uploadFile']['name'];

    $target_path="Uploads/";

    $target_path=$target_path.basename($_FILES['uploadFile']['name']);

    $query1 = "SELECT * from student where id = $id";
    $result = mysqli_query($connect,$query1);
    $row = mysqli_fetch_array($result);
    
    if (file_exists($_FILES['uploadFile']['name'])) {
        unlink("$row[dataimage]");
    }
    if (move_uploaded_file($_FILES['uploadFile']['tmp_name'],$target_path)) {
        unlink("$row[dataimage]");
        echo "The file ". basename($_FILES['uploadFile']['name'])." has been update";
    }else {
        echo "There was an error uploading the file, please try again!";
    }

    $query = "UPDATE student SET name = '$name', address = '$address', dataimage= '$gambar' WHERE id = $id";

    if (mysqli_query($connect,$query)) {
        header('Location:homeCRUD.php');
    }else {
        echo "Gagal mengubah data <br>" . mysqli_error($connect);
    }
mysqli_close($connect);
?>