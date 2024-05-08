<?php 
session_start();
// koneksi DB
$koneksi = new mysqli("localhost","root","","pemweb");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NTS Shop</title>
    <link rel="stylesheet" href="style.css" />
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
          <li><a href="#" aria-current="Page" style="color: rgb(253, 132, 31)">BERANDA</a></li>
          <li><a href="produk.php">PRODUK</a></li>
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


    <div id="home" class="slider">
      <h4>Klik Disini Untuk Slide Gambar</h4>
      <input type="radio" name="choose" id="" class="choose_1" />
      <input type="radio" name="choose" id="" class="choose_2" />
      <div class="slides">
        <a href="https://www.instagram.com/p/Chteg38JuN8/?igshid=YmMyMTA2M2Y=" target="_blank" rel="noopener noreferrer" class="slide s1">
          <img src="images/Promo FF.png" alt="" />
        </a>
        <a href="https://www.instagram.com/p/ChtdWidp6pF/?igshid=YmMyMTA2M2Y=" target="_blank" rel="noopener noreferrer" class="slide">
          <img src="images/Promo ML.png" alt="" />
        </a>
      </div>
    </div>

    <h1 class="title-p">POPULER</h1>
    <section id="populer" class="populer">
      <div class="ff">
        <div class="link">
          <a href="ff.php">
            <img src="./images/ff.png" alt="" />
            <div class="judul-produk">Free Fire</div>
          </a>
        </div>
      </div>

      <div class="mlbb">
        <div class="link">
          <a href="ml.php">
            <img src="./images/mlbb.jpg" alt="" />
            <div class="judul-produk">Mobile Legends</div>
          </a>
        </div>
      </div>

      <div class="pubgm">
        <div class="link">
          <a href="pubg.php">
            <img src="./images/pubgm.jpg" alt="" />
            <div class="judul-produk">PUBG Mobile</div>
          </a>
        </div>
      </div>

      <div class="valo">
        <div class="link">
          <a href="valo.php">
            <img src="./images/valorant.jpg" alt="" />
            <div class="judul-produk">Valorant</div>
          </a>
        </div>
      </div>

      <div class="genshin">
        <div class="link">
          <a href="genshin.php">
            <img src="./images/GenshinImpact.jpg" alt="" />
            <div class="judul-produk">Genshin Impact</div>
          </a>
        </div>
      </div>

      <div class="hdi">
        <div class="link">
          <a href="hdi.php">
            <img src="./images/higgs_domino.jpg" alt="" />
            <div class="judul-produk">Higgs Domino</div>
          </a>
        </div>
      </div>
    </section>

    <section class="tentang" id="tentang" style="margin-left: 25%;">
      <div class="card">
        <h1>TENTANG KAMI</h1>
        <br />
        <p>
          <a href="" class="title">NTSSHOP</a> merupakan salah satu platform yang sangat spesial buat para gamers online di Indonesia. Layanan ini mempermudah urusan para gamers saat membeli item untuk game-nya. Jenis game yang bisa
          dilayani di sini juga sangat lengkap mulai dari game mobile sampai game PC, diantaranya ada PB, CSGO, Free Fire, Mobile Legends, dan yang lainnya.
          <!--           <br />
          
          <br /> -->
        </p>
      </div>
    </section>

    <footer>
      <div class="sosmed">
        <h1>SOSIAL MEDIA</h1>
        <a href="https://www.instagram.com/invites/contact/?i=1dyndc3ax92aw&utm_content=nzbkvsg" target="_blank" rel="noopener noreferrer"><img src="./images/ig.png" alt="" /></a>
        <a href="https://www.facebook.com/profile.php?id=100007252755758&mibextid=ZbWKwL" target="_blank" rel="noopener noreferrer"><img src="./images//fb.png" alt="" /></a>
        <a href="https://github.com/sebastian20035/NTSSHOP.git" target="_blank" rel="noopener noreferrer"><img src="./images/github.png" alt="" /></a>
      </div>
    </footer>
    <div id="copyright">&copy;2022 NTSSHOP</div>
  </body>
</html>
