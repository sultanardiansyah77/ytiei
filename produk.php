<?php 
session_start();
// koneksi DB
$koneksi = new mysqli("localhost","root","","pemweb");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NTS Shop - Produk</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @font-face {
            font-family: Poppins;
            src: url(/font/poppins/Poppins-Regular.otf);
        }
    </style>
</head>

<body>
    <header>
        <h2>NTS SHOP</h2>
        <nav>
            <ul>
                <li><a href="index.php">BERANDA</a></li>
                <li><a href="#" aria-current="Page" style="color: rgb(253, 132, 31)">PRODUK</a></li>
                <li><a href="contact.html">HUBUNGI KAMI</a></li>
                <!-- Kondisi sudah login -->
                <?php if (isset($_SESSION["user"])):?>
                <li><a href="logout.php">LOGOUT</a></li>
                <!-- Kondisi belum login -->
                <?php else: ?>
                <li><a href="login.php">LOGIN</a></li>
                <?php endif ?>
            </ul>
        </nav>
    </header>

    <h1 class="title-mobile">MOBILE GAME</h1>
    <section id="mobile" class="mobile">
        <div class="ff">
            <div class="link">
                <a href="ff.php">
                    <img src="./images/ff.png" alt="">
                    <div class="judul-produk">Free Fire</div>
                </a>
            </div>
        </div>

        <div class="mlbb">
            <div class="link">
                <a href="ml.php">
                    <img src="./images/mlbb.jpg" alt="">
                    <div class="judul-produk">Mobile Legends</div>
                </a>
            </div>
        </div>

        <div class="pubgm">
            <div class="link">
                <a href="pubg.php">
                    <img src="./images/pubgm.jpg" alt="">
                    <div class="judul-produk">PUBG Mobile</div>
                </a>
            </div>
        </div>

        <div class="coc">
            <div class="link">
                <a href="coc.php">
                    <img src="./images/coc.jpg" alt="">
                    <div class="judul-produk">Clash Of Clans</div>
                </a>
            </div>
        </div>

        <div class="genshin">
            <div class="link">
                <a href="genshin.php">
                    <img src="./images/GenshinImpact.jpg" alt="">
                    <div class="judul-produk">Genshin Impact</div>
                </a>
            </div>
        </div>

        <div class="hdi">
            <div class="link">
                <a href="hdi.php">
                    <img src="./images/higgs_domino.jpg" alt="">
                    <div class="judul-produk">Higgs Domino</div>
                </a>
            </div>
        </div>

        <div class="stumble">
            <div class="link">
                <a href="stumble.php">
                    <img src="./images/stumble.png" alt="">
                    <div class="judul-produk">Stumble Guys</div>
                </a>
            </div>
        </div>
    </section>

    <h1 class="title-pc">PC GAME</h1>
    <section id="pc" class="pc">
        <div class="pb">
            <div class="link">
                <a href="pb.php">
                    <img src="./images/pb.jpg" alt="">
                    <div class="judul-produk">Point Blank</div>
                </a>
            </div>
        </div>

        <div class="apex">
            <div class="link">
                <a href="apex.php">
                    <img src="./images/apex.jpg" alt="">
                    <div class="judul-produk">Apex Legends</div>
                </a>
            </div>
        </div>

        <div class="csgo">
            <div class="link">
                <a href="cs.php">
                    <img src="./images/csgo.png" alt="">
                    <div class="judul-produk">Counter Strike</div>
                </a>
            </div>
        </div>

        <div class="valo">
            <div class="link">
                <a href="valo.php">
                    <img src="./images/valorant.jpg" alt="">
                    <div class="judul-produk">Valorant</div>
                </a>
            </div>
        </div>
    </section>

    <footer>
        <div class="sosmed">
            <h1>SOSIAL MEDIA</h1>
            <a href="https://" target="_blank" rel="noopener noreferrer"><img src="./images/ig.png" alt=""></a>
            <a href="http://" target="_blank" rel="noopener noreferrer"><img src="./images//fb.png" alt=""></a>
            <a href="http://" target="_blank" rel="noopener noreferrer"><img src="./images/github.png" alt=""></a>
            <a href="http://" target="_blank" rel="noopener noreferrer"><img src="./images/linkedin.png" alt=""></a>
        </div>
    </footer>
    <div id="copyright">
        &copy;2022 NTSSHOP
    </div>

</body>

</html>