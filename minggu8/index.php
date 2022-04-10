<!DOCTYPE html>
<html lang="en">
<head>
    <title>Restoran kind</title>
    <link rel="stylesheet" href="halamanutama.css">
    <link rel="stylesheet" href="slideshow.css">
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
            <div class="slideshow-container">
                <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="img/makanan.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="img/makanan2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="img/burger.jpg" style="width:100%">
            </div>

            </div>
            <br>
            <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            </div>

            <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
            </script>
        </div>
        <div class="right">
            <h3>Buku Terpopuler</h3>
            <ul>
                <li><a href="profilmember.php">Profil Member</a></li>
                <li><a href="pesan_makanan.php">Pesan Makanan</a></li>
            </ul>
        </div>
        <div class="footer">
            <p>Copyright &copy Belajar CSS</p>
        </div>
    </div>
</body>
</html>