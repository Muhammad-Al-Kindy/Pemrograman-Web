<?php
include 'myconnection.php';
$target_path="Uploads/";

$target_path=$target_path.basename($_FILES['uploadFile']['name']);

    if (move_uploaded_file($_FILES['uploadFile']['tmp_name'],$target_path)) {
        echo "The file ". basename($_FILES['uploadFile']['name'])." has been uploaded <br><br>";
    }else {
        echo "There was an error uploading the file, please try again!";
    }

    $name = $_POST["myname"];
    $address = $_POST["myaddress"];
    $gambar ="Uploads/" . $_FILES['uploadFile']['name'];

    $query = "insert into student(name,address,dataimage)
    values('$name','$address','$gambar')";

    if (mysqli_query($connect,$query)) {
        echo "Data baru berhasil ditambahkan";
    }
    else {
        echo "Data baru gagal ditambahkan <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>