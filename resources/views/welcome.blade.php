<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIMBA - SPEMDAQU</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">SIMBA</a>    
      <!-- Sistem Inventaris & Media Baca Siswa -->
      <nav class="navbar container" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link" data-nav-link>Beranda</a>
          </li>

          <li>
            <a href="#collection" class="navbar-link" data-nav-link>Koleksi</a>
          </li>

          <li>
            <a href="#about" class="navbar-link" data-nav-link>Tim Kami</a>
          </li>

          <li>
            <a href="{{ route('login') }}" class="btn btn-primary">Masuk</a>
          </li>

        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>

    </div>
  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="hero">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Perpustakaan Digital SMP Darul Quran</p>

            <h1 class="h1 hero-title">Selamat Datang </h1>

            <p class="hero-text">
              Simba merupakan sebuah website pengelolaan inventaris perpustakaan sekaligus perpustakaan digital bagi para masyarakat sekolah di lingkungan SMP Darul Quran Glenmore. 
            </p>

            <a href="#collection" class="btn btn-primary">Mulai Membaca</a>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/read.png" width="720" height="673" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>

      <!-- 
        - #collection
      -->

      <section class="section project" id="collection" aria-label="project">
        <div class="container">

          <h2 class="h2 section-title">Koleksi Ebook Kami</h2>

          <p class="section-text">
            Kami memiliki beberapa koleksi e-book yang dapat anda baca secara online. 
          </p>

          <ul class="grid-list">
            @foreach ($ebook as $item)
            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                  <img src="{{asset('storage/'.$item->image)}}" width="510" height="700" loading="lazy"
                    alt="Sampul {{$item->judul}}" class="img-cover">
                </figure>

                <div class="card-content">

                  <p class="card-subtitle">{{$item->kategori->nama_kategori}}</p>

                  <h3 class="h3">
                    <a href="#" class="card-title">{{$item->judul}}</a>
                  </h3>

                  <a href="{{route('ebuku.pdf',$item->id)}}" class="btn btn-primary" target="_blank">Baca Buku</a>

                </div>

              </div>
            </li>
            @endforeach
          </ul>

        </div>
      </section>

      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <div class="about-banner img-holder" style="--width: 720; --height: 960;">
            <img src="./assets/images/tim.jpg" width="720" height="960" loading="lazy" alt="about banner"
              class="img-cover">

          </div>

          <div class="about-content">

            <h2 class="h2 section-title">Tim Kami</h2>

            <p class="section-text">
              Kami mahasiswa program Kampus Mengajar yang berasal dari Politeknik Negeri Banyuwangi & Universitas PGRI Banyuwangi.
            </p>

            <h3 class="h3">Anggota Kami</h3>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                <p class="section-text">
                  Nada Celia Sinka Audy Ines
                </p>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                <p class="section-text">
                  Rafa Putra Anggi Fiansyah
                </p>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                <p class="section-text">
                  Riko Rayhan Radite Putra Wibowo
                </p>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                <p class="section-text">
                  Azril Praya Prasetyo
                </p>
              </li>

            </ul>

            <h3 class="h3">Misi Kami</h3>

            <p class="section-text">
              Menjadi mitra guru yang dapat membantu guru dapat meningkatkan literasi dan numerasi anak didik pasca pandemi.
            </p>

          </div>

        </div>
      </section>

      <!-- 
        - #CTA
      -->

      <section class="section cta" aria-label="cta" style="background-image: url('./assets/images/cta-bg.jpg')">
        <div class="container">

          <p class="cta-subtitle">Apakah Anda Adalah Admin?</p>

          <h2 class="h2 section-title">Silahkan Masuk Untuk Dapat Mengakses Menu Inventaris & Pengelolaan Website.</h2>

          <a href="{{ route('login') }}" class="btn btn-secondary">Masuk</a>

        </div>
      </section>

    </article>
  </main>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <p class="copyright">
        &copy; copyright 2024 | Mahasiswa Kampus Mengajar 7 - <a href="https://www.instagram.com/km7_smpdarulquran_glenmore/"
        target="_onblank" class="copyright-link">Poliwangi & Uniba</a>
      </p>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" aria-label="back to top" data-back-top-btn class="back-top-btn">
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>