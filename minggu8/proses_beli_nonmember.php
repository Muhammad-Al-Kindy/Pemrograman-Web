<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nota Pembelian</title>
    <link rel="stylesheet" href="halamanutama.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Nota Pembelian</h1>
        </div>
        <?php
        function acak_angka(){
            $karakter = '0123456789';
            $data =' ';

            for ($i=0; $i < 3 ; $i++) { 
                $rand = rand(0,strlen($karakter)-1);
                $data .= $karakter{$rand};
            }
            return $data;
        }


        $id_pembeli="ID" . acak_angka(); 
        $username = $_POST["name"];
        $makanan = $_POST["Makanan"];
        $porsi = $_POST["Pesanan"];
        if ($makanan == "Rendang") {
            $harga = 30000;
        } elseif ($makanan == "Ayam") {
            $harga = 20000;
        } elseif ($makanan == "Mie") {
            $harga = 10000;
        } elseif ($makanan == "Cincang") {
            $harga = 15000;
        } elseif ($makanan == "Ikan") {
            $harga = 25000;
        }

        $total = $harga * $porsi;

        if ($porsi > 0 && $porsi <= 3) {
            $potongan_harga = 0;
            $total_harga = $total - $potongan_harga;
        } elseif ($porsi > 2 && $porsi <= 5) {
            $potongan_harga = $total * 0.05;
            $total_harga = $total - $potongan_harga;
        } elseif ($porsi > 5) {
            $potongan_harga = $harga * 0.05;
            $total_harga = $total - ($potongan_harga * $porsi);
        }

            echo "ID Pembeli : ". $id_pembeli. "<br>";
            echo "Nama Pembeli : ". $username. "<br>";
            echo "Status : Non Member ". "<br>";
            echo "Makanan : ". $makanan. "<br>";
            echo "Jumlah porsi : ". $porsi. "<br>";
            echo "Jumlah pembayaran : ". $total_harga. "<br>";
        ?>
        <br><br>
        <a href="index.php">kembali</a>
    </div>
</body>
</html>
