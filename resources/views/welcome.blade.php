<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Perpustakaan Digital - SMP Darul Quran</title>
  <meta name="title" content="Perpustakaan Digital - SMP Darul Quran">
  <meta name="description" content="This is a Book eCommerce html template made by codewithsadee">

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
    href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&family=Work+Sans:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-bg.jpg">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="header-top">
      <div class="container">

        <a href="#" class="logo">
          <img src="./assets/images/logo.svg" width="138" height="28" alt="booken home">
        </a>

        <div class="header-action">
          <button class="nav-open-btn" aria-label="open menu" title="Open Menu" data-nav-toggler>
            <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
          </button>

          <a href="{{ route('login') }}">
            <button class="header-action-btn" aria-label="Admin" title="Admin">
                <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
              </button>
        </a>
        </div>

      </div>
    </div>

    <div class="header-bottom" data-navbar>
      <div class="container">

        <nav class="navbar">

          <button class="nav-close-btn" data-nav-toggler aria-label="clsoe menu" title="Clsoe Menu">
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>

          <div class="navbar-top">
            <input type="search" name="search" placeholder="Search our store" class="input-field">

            <button class="search-btn" aria-label="Search">
              <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>

          <ul class="navbar-list">

            <li>
              <a href="#" class="navbar-link">Beranda</a>
            </li>

            <li>
              <a href="#ebook" class="navbar-link">E-Book</a>
            </li>

            <li>
              <a href="#us" class="navbar-link">Tim Kami</a>
            </li>

          </ul>

        </nav>
      </div>
    </div>

    <div class="overlay" data-overlay data-nav-toggler></div>
  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('./assets/images/hero-bg.jpg')">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title has-after">
              Selamat Datang &<br>
              Selamat Membaca
            </h1>

            <p class="hero-text">
              Website ini adalah perpustakaan digital bagi para siswa di SMP Darul Quran Glenmore. Sebagai siswa anda dapat membaca dan belajar menggunakan media e-book yang sudah kami sediakan.
            </p>

            <div class="btn-wrapper">

              <a href="#ebook" class="btn">
                <span class="span">Mulai Membaca</span>

                <ion-icon name="arrow-forward-outline"></ion-icon>
              </a>              
            </div>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="475" height="600" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>


      <!-- 
        - #FEATURED COLLECTION
      -->

      <section class="section featured" aria-label="featured collection"  id="ebook">
        <div class="container">

          <h2 class="h2 section-title">Koleksi E-Book Kami</h2>

          <p class="section-text">
            Kami memiliki beberapa koleksi e-book yang dapat anda baca secara online.
          </p>
          
        <div class="section-text">
          <div class="input-wrapper">
            <input type="search" name="search" placeholder="Cari buku..." class="input-field">
  
            <button class="btn btn-primary"><ion-icon name="search-outline"></ion-icon></button>
          </div>
        </div>

          <ul class="grid-list">
            @foreach ($ebook as $item)
            <li>
                <div class="product-card">
                  <div class="card-banner img-holder" style="--width: 384; --height: 480;">
                    <img src="{{asset('storage/'.$item->image)}}" width="384" height="480" loading="lazy" alt="cover" class="img-cover">
                    <div class="card-action">
                        <a href="{{route('ebuku.pdf',$item->id)}}" target="_blank">
                            <button class="action-btn" aria-label="Baca" title="Baca">
                                <ion-icon name="book-outline"></ion-icon>
                            </button>
                        </a>
                    </div>
                  </div>
  
                  <div class="card-content">
                    <h3 class="h3">
                      <a href="#" class="card-title">{{$item->judul}}</a>
                    </h3>
                    <h2 class="card-price">{{$item->kategori->nama_kategori}}</h2>
                  </div>
  
                </div>
              </li>
            @endforeach
          </ul>

        </div>
      </section>


      <!-- 
        - #BLOG
      -->

      <section class="section blog" aria-label="blog" id="us">
        <div class="container">

          <h2 class="h2 section-title">Tim Kami</h2>

          <p class="section-text">
            Kami mahasiswa program Kampus Mengajar yang berasal dari Politeknik Negeri Banyuwangi & Universitas PGRI Banyuwangi.
          </p>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 400;">
                  <img src="./assets/images/blog-1.jpg" width="600" height="400" loading="lazy"
                    alt="Nada Celia Sinka Audy Ines" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Nada Celia Sinka Audy Ines</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="meta-item">
                      <time class="meta-link" datetime="2022-03-04">Politeknik Negeri Banyuwangi</time>
                    </li>

                    <li class="meta-item">
                      <a href="#" class="meta-link">Bendahara</a>
                    </li>

                  </ul>

                  <p class="card-text">
                    The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light...
                  </p>

                  <a href="#" class="btn card-btn">Read More...</a>

                </div>

              </div>
            </li>
            <li class="scrollbar-item">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 400;">
                  <img src="./assets/images/blog-1.jpg" width="600" height="400" loading="lazy"
                    alt="Significant reading has info" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Rafa Putra Anggi Fiansyah</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="meta-item">
                      <time class="meta-link" datetime="2022-03-04">Politeknik Negeri Banyuwangi</time>
                    </li>

                    <li class="meta-item">
                      <a href="#" class="meta-link">Medkom</a>
                    </li>

                  </ul>

                  <p class="card-text">
                    The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light...
                  </p>

                  <a href="#" class="btn card-btn">Read More...</a>

                </div>

              </div>
            </li>
            <li class="scrollbar-item">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 400;">
                  <img src="./assets/images/blog-2.jpg" width="600" height="400" loading="lazy"
                    alt="Riko Rayhan Radite Putra Wibowo" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Riko Rayhan Radite Putra Wibowo</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="meta-item">
                      <time class="meta-link" datetime="2022-03-04">Universitas PGRI Banyuwangi</time>
                    </li>

                    <li class="meta-item">
                      <a href="#" class="meta-link">Sekretaris</a>
                    </li>

                  </ul>

                  <p class="card-text">
                    The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light...
                  </p>

                  <a href="#" class="btn card-btn">Read More...</a>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 400;">
                  <img src="./assets/images/blog-3.jpg" width="600" height="400" loading="lazy"
                    alt="Azril Praya Prasetyo" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Azril Praya Prasetyo</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="meta-item">
                      <time class="meta-link" datetime="2022-03-04">Politeknik Negeri Banyuwangi</time>
                    </li>

                    <li class="meta-item">
                      <a href="#" class="meta-link">Ketua</a>
                    </li>

                  </ul>

                  <p class="card-text">
                    The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light...
                  </p>

                  <a href="#" class="btn card-btn">Read More...</a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer has-bg-image" style="background-image: url('./assets/images/section-bg.jpg')">
    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          Copyright 2024 | Dibuat oleh Mahasiswa Kampus Mengajar 7 - Poliwangi & UNIBA.
        </p>

      </div>
    </div>

  </footer>

  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
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