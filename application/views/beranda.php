<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SIM UBSI Pontianak</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?= base_url('assets/styles/style.css') ?>" />
</head>

<body>
<!-- Header Start -->
<section>
  <div class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <a class="text-white h6" href="#">(0561) 583924</a>
      <div class="flex text-white justify-content-center align-items-center">
        <iconify-icon icon="ic:baseline-facebook" width="20" class="mx-1"></iconify-icon>
        <iconify-icon icon="ri:instagram-fill" width="20" class="mx-1"></iconify-icon>
        <iconify-icon icon="mdi:youtube" width="20" class="mx-1"></iconify-icon>
        <iconify-icon icon="mdi:linkedin" width="20" class="mx-1"></iconify-icon>
      </div>
    </div>
  </div>
</section>
<!-- Header End -->

<!-- Navar Start -->
<section>
  <div aria-label="" class="navbar navbar-expand-lg bg-white">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="<?= base_url('assets/images/logo_ubsi.png') ?>" alt="" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto gap-3">
          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="#">Beranda</a>
          </li>

          <!-- Tentang UBSI -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-black" href="#" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">
              Tentang UBSI
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="tentangUBSI/sambutanRektor.html">Sambutan Rektor</a>
              </li>
              <li>
                <a class="dropdown-item" href="tentangUBSI/sejarahUBSI.html">Sejarah UBSI</a>
              </li>
              <li>
                <a class="dropdown-item" href="tentangUBSI/visi_misi.html">Visi & Misi UBSI</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-black" href="#" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">
              Prodi
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="/prodi/SistemInformasi.html">Sistem Informasi</a>
              </li>
              <li>
                <a class="dropdown-item" href="/prodi/IlmuKomputer.html">Ilmu Komputer</a>
              </li>
              <li>
                <a class="dropdown-item" href="/prodi/Akuntansi.html">Akuntansi</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="/kegiatan/Kegiatan.html">Kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="/berita/Berita.html">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="/prestasti/Prestasi.html">Prestasi</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Navbar end -->

<!-- Hero section start -->
<section style="
  background-image: url('<?= base_url('assets/images/hero.png') ?>');
  padding: 200px 0 200px 0;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  ">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-11 col-lg-9 col-xl-7 col-xxl-6 text-center text-white mt-5">
        <h6 class="fw-bold mb-3">UNTUK MASA DEPAN YANG LEBIH BAIK</h6>
        <h1 class="display-3 mb-4 fw-bold">
          Kuliah...? <span class="text-warning">BSI Aja!!</span>
        </h1>
      </div>
    </div>
  </div>
</section>
<!-- Hero section end -->

<!-- Sejarah UBSI Start -->
<section>
  <div class="container my-5">
    <div class="row">
      <div class="col-lg-4">
        <img src="<?= base_url('assets/images/ubsi.png') ?>" alt="sejarah" class="w-100 h-100 rounded-3" />
      </div>
      <div class="col-lg-8 my-3">
        <h4 class="fw-bold">Sejarah UBSI</h4>
        <p class="opacity-50">UBSI Pontianak</p>
        <p class="opacity-75 lh-lg mb-5" style="text-align: justify">
          Perubahan Akademik Bina Sarana Informatika (BSI) menjadi
          Universitas Bina Sarana Informatika (UBSI) telah diresmikan.
          Penyerahan Surat Keputusan Perubahan Akademi BSI menjadi
          Universitas Bina Sarana Informatika (UBSI) ini berlangsung di BSI
          Convention Center, Jalan Raya Kaliabang nomor 8, Perwira, Bekasi
          Utara, Bekasi, Jawa Barat. Surat Keputusan tersebut diserahkan
          langsung oleh Sekretaris Jenderal Kementrian Riset, Teknologi dan
          Pendidikan Tinggi, Prof Ainun Naâ€™im PhD, MBA, kepada Pengurus
          Yayasan Bina Sarana Informatika, Efriadi Salim yang didampingi
          Direktur BSI Naba Aji Notoseputro. Kegiatan ini dilakukan
          bersamaan dengan rangkaian kegiatan seminar motivasi BSI dan
          disaksikan langsung oleh 9 ribu mahasiswa baru BSI tahun ajaran
          2018/2019....
        </p>

        <a href="sejarahUBSI.html" type="button"
           class="text-primary mt-5 px-0 align-items-center d-flex gap-2 text-decoration-none">
          Baca Selengkapnya
          <iconify-icon icon="formkit:arrowright"></iconify-icon>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- Sejarah UBSI End -->

<!-- Prodi Start -->
<section>
  <div class="container my-5">
    <h1 class="fw-bold">Program Studi</h1>
    <p class="opacity-50">
      Apa saja program studi yang terdapat di kampus UBSI Kota Pontianak ?
    </p>
    <div class="row row-cols-1 row-cols-md-3 g-4 my-3">
      <!-- Card 1 -->
      <div class="col">
        <div class="card border-0 shadow rounded-3">
          <img src="<?= base_url('assets/images/ilmu_komputer.png') ?>" class="card-img-top px-5" alt="Ilmu Komputer" />
          <div class="card-body text-center my-3">
            <a href="prodi/IlmuKomputer.html" class="h5 text-decoration-none card-title">Ilmu Komputer</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col">
        <div class="card border-0 shadow rounded-3">
          <img src="<?= base_url('assets/images/sistem_informasi.png') ?>" class="card-img-top px-5" alt="Sistem Informasi" />
          <div class="card-body text-center my-3">
            <a href="prodi/SistemInformasi.html" class="h5 text-decoration-none card-title">Sistem Informasi</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col">
        <div class="card border-0 shadow rounded-3">
          <img src="<?= base_url('assets/images/akuntansi.png') ?>" class="card-img-top px-5" alt="akuntansi" />
          <div class="card-body text-center my-3">
            <a href="prodi/Akuntansi.html" class="h5 text-decoration-none card-title">Akuntansi</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Prodi End -->

<!-- Kegiatan Start -->
<section>
  <div class="container mb-3" style="margin-top: 100px">
    <div class="row">
      <div class="col-lg-6 col-12">
        <img src="assets/kegiatan_section.png" class="w-100 h-100 rounded-2" alt="Kegiatan" />
      </div>
      <div class="col-lg-6 col-12 my-3">
        <h1>Kegiatan</h1>
        <p class="opacity-50">Kegiatan UBSI Pontianak</p>
        <p class="opacity-75" style="text-align: justify">
          Sebagai Universitas terbaik nomor 2 di pontianak , UBSI Kota
          Pontianak sering mengadakan beberapa kegiatan yang bisa
          meningkatkan wawasan dan juga skill para mahasiswanya
        </p>

        <a href="/kegiatan/Kegiatan.html" type="button"
           class="text-primary mt-5 px-0 align-items-center d-flex gap-2 text-decoration-none">
          Lihat Kegiatan
          <iconify-icon icon="formkit:arrowright"></iconify-icon>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- Kegiatan End -->

<!-- Berita Start -->
<section>
  <div class="container" style="margin-top: 100px">
    <div class="d-flex justify-content-between">
      <div>
        <h1>Berita</h1>
        <p class="opacity-75">Berita UBSI Pontianak</p>
      </div>

      <a href="/berita/Berita.html" type="button"
         class="text-primary mt-5 px-0 align-items-center d-flex gap-2 text-decoration-none">
        Lihat Berita
        <iconify-icon icon="formkit:arrowright"></iconify-icon>
      </a>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4 my-2">
      <!-- Berita 1 -->
      <div class="col">
        <div class="card">
          <img src="/assets/berita/berita1.jpeg" class="card-img-top w-100 img-fluid" alt="Berita 1" />
          <div class="card-body">
            <figcaption class="blockquote-footer mt-2">
              <cite title="Source Title">#berita</cite>
            </figcaption>
            <a href="/berita/detailBerita.html" class="h5 text-decoration-none card-title">
              Lewat BKOT Universitas BSI Ajak Orang Tua Mahasiswa Baru
              Kenali Dunia Kampus
            </a>
            <p class="card-text opacity-75 mt-4" style="text-align: justify">
              Sebagai langkah awal dalam menyambut semester baru ganjil
              2023-2024, Kampus Digital Kreatif Universitas BSI (Bina Sarana
              Informatika) akan kembali menghadirkan BKOT (Bincang Kampus
              Bersama Orang Tua).....
            </p>

            <hr class="mt-5" />
            <div class="d-flex align-items-center gap-4 opacity-75">
              <iconify-icon icon="clarity:date-line"></iconify-icon>
              Senin , 07 Agustus 2023 , 08:30 WIB
            </div>
          </div>
        </div>
      </div>

      <!-- Berita 2 -->
      <div class="col">
        <div class="card">
          <img src="/assets/berita/berita2.jpg" class="card-img-top img-fluid" alt="Berita 2" />
          <div class="card-body">
            <figcaption class="blockquote-footer mt-2">
              <cite title="Source Title">#berita</cite>
            </figcaption>
            <a href="/berita/detailBerita.html" class="h5 text-decoration-none card-title">
              Tingkatkan Sinergi Kampus Dengan Orang Tua, Universitas BSI
              akan Gelar BKOT
            </a>
            <p class="card-text opacity-75 mt-4" style="text-align: justify">
              Dalam rangka menyiapkan lulusan bertalenta digital,
              Universitas BSI (Bina Sarana Informatika) akan mengadakan
              acara Bincang Kampus bersama Orang Tua (BKOT). Acara ini akan
              digelar pada Sabtu, 12 Agustus 2023 di Universitas BSI kampus
              Kramat 98....
            </p>

            <hr class="mt-5" />
            <div class="d-flex align-items-center gap-4 opacity-75">
              <iconify-icon icon="clarity:date-line"></iconify-icon>
              Senin , 07 Agustus 2023 , 08:30 WIB
            </div>
          </div>
        </div>
      </div>

      <!-- Berita 3 -->
      <div class="col">
        <div class="card">
          <img src="/assets/berita/berita3.jpeg" class="card-img-top w-100 img-fluid" alt="Berita 3" />
          <div class="card-body">
            <figcaption class="blockquote-footer mt-2">
              <cite title="Source Title">#berita</cite>
            </figcaption>

            <a href="/berita/detailBerita.html" class="h5 text-decoration-none card-title">
              Capaian UBSI Di Usia BSI Ke-33 Tahun, Menyambut Hari Baru
            </a>
            <p class="card-text opacity-75 mt-4" style="text-align: justify">
              Bina Sarana Informatika kini telah menginjak usia 33 tahun.
              Sepanjang itu tentu BSI telah melahirkan banyak lulusan
              terbaiknya yang mampu berkompetisi dan berdaya saing
              tinggi.Dalam Dies Natalis ke-33 tahun, BSI melangsungkan
              kegiatan secara terbatas....
            </p>

            <hr class="mt-5" />
            <div class="d-flex align-items-center gap-4 opacity-75">
              <iconify-icon icon="clarity:date-line"></iconify-icon>
              Senin , 07 Agustus 2023 , 08:30 WIB
            </div>
          </div>
        </div>
      </div>

      <!-- Berita 4 -->
      <div class="col">
        <div class="card">
          <img src="/assets/berita/berita4.jpeg" class="card-img-top w-100 img-fluid" alt="Berita 4" />
          <div class="card-body">
            <figcaption class="blockquote-footer mt-2">
              <cite title="Source Title">#berita</cite>
            </figcaption>

            <a href="/berita/detailBerita.html" class="h5 text-decoration-none card-title">
              Universitas BSI Kampus Pontianak Jamin Kampusnya Tak Ada
              Perploncoan
            </a>
            <p class="card-text opacity-75 mt-4" style="text-align: justify">
              Pengenalan Kehidupan Kampus Bagi Mahasiswa Baru (PKKMB)
              merupakan wahana bagi pemimpin perguruan tinggi untuk
              memperkenalkan dan mempersiapkan mahasiswa baru (maba) dalam
              proses transisi menjadi mahasiswa yang dewasa dan mandiri...
            </p>

            <hr class="mt-5" />
            <div class="d-flex align-items-center gap-4 opacity-75">
              <iconify-icon icon="clarity:date-line"></iconify-icon>
              Senin , 07 Agustus 2023 , 08:30 WIB
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Berita End -->

<!-- Prestasi Start -->
<section>
  <div class="container my-5" style="margin-top: 200px">
    <div class="d-flex justify-content-between">
      <div>
        <h1>Prestasi</h1>
        <p class="opacity-75">Prestasi UBSI Pontianak</p>
      </div>

      <a href="/prestasi/Prestasi.html" type="button"
         class="text-primary mt-5 px-0 align-items-center d-flex gap-2 text-decoration-none">
        Lihat Prestasi
        <iconify-icon icon="formkit:arrowright"></iconify-icon>
      </a>
    </div>

    <div class="mt-4 d-grid gap-4">
      <!-- Prestasi 1 -->
      <div class="card border-0 shadow">
        <div class="row">
          <div class="col-lg-4">
            <img src="/assets/prestasi/prestasi1.jpeg" alt="Prestasi 1" class="w-100 h-100" />
          </div>

          <div class="col-lg-8">
            <div class="card-body">
              <h4 class="card-title mb-2">
                Sukses Di Kesempatan Pertama, Mahasiswa Universitas BSI Raih
                Prestasi Di Bidang Modeling
              </h4>
              <div class="d-flex align-items-center gap-4 opacity-50 mb-4">
                <iconify-icon icon="clarity:date-line"></iconify-icon>
                Senin , 07 Agustus 2023 , 08:30 WIB
              </div>
              <p class="card-text opacity-75" style="text-align: justify">
                Menjadi mahasiswa yang berprestasi, kreatif dan inovatif
                tentulah tidak mudah, perlu usaha dan kerja keras serta
                Latihan yang serius jika untuk menggapai beberapa factor
                tersebut, biasanya mahasiswa selalu menghindar Ketika
                diharapkan dengan sebuah tantangan ataupun permasalahan,
                namun tidak dengan ke enam orang mahasiswa dan mahasiswa
                Universitas BSI Kampus kota Pontianak ini. Adalah herman,
                Caroline, Narko, Frans, Antik dan Irma,......
              </p>

              <a href="/prestasi/detailPrestasi.html"
                 class="text-primary mt-5 px-0 align-items-center d-flex gap-2 text-decoration-none">
                Baca Selengkapnya
                <iconify-icon icon="formkit:arrowright"></iconify-icon>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Prestasi 2 -->
      <div class="card border-0 shadow">
        <div class="row">
          <div class="col-lg-4">
            <img src="/assets/prestasi/prestasi2.jpg" alt="Prestasi 2" class="w-100 h-100" />
          </div>

          <div class="col-lg-8">
            <div class="card-body">
              <h4 class="card-title mb-2">
                Lanjut Ke Tingkat Nasional, Mahasiswa Universitas BSI Sukses
                Raih Gelar Putra Putri Kampus Kalimantan Barat 2024
              </h4>
              <div class="d-flex align-items-center gap-4 opacity-50 mb-4">
                <iconify-icon icon="clarity:date-line"></iconify-icon>
                Senin , 07 Agustus 2023 , 08:30 WIB
              </div>
              <p class="card-text opacity-75" style="text-align: justify">
                Memiliki prestasi ditingkat lokal maupun Nasional tentunya
                menjadi target oleh para mahasiswa/i yang senang akan
                kompetisi, di mana dengan memiliki sebuah prestasi yang
                dapat dibanggakan baik ditingkat lokal maupun Nasional
                berarti membuktikan bahwa mahasiswa memiliki bakat, tidak
                hanya dibidang akademik saja melainkan juga bidang non
                akademik.....
              </p>

              <a href="/prestasi/detailPrestasi.html"
                 class="text-primary mt-5 px-0 align-items-center d-flex gap-2 text-decoration-none">
                Baca Selengkapnya
                <iconify-icon icon="formkit:arrowright"></iconify-icon>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Prestasi 3 -->
      <div class="card border-0 shadow">
        <div class="row">
          <div class="col-lg-4">
            <img src="/assets/prestasi/prestasi3.jpeg" alt="Prestasi 3" class="w-100 h-100" />
          </div>

          <div class="col-lg-8">
            <div class="card-body">
              <h4 class="card-title mb-2">
                Mahasiswa Universitas BSI Kampus Pontianak Meraih Prestasi
                Pada Ankreas 2022
              </h4>
              <div class="d-flex align-items-center gap-4 opacity-50 mb-4">
                <iconify-icon icon="clarity:date-line"></iconify-icon>
                Senin , 07 Agustus 2023 , 08:30 WIB
              </div>
              <p class="card-text opacity-75" style="text-align: justify">
                Ankreas (Ajang Kreasi dan Seni) merupakan sebuah ajang
                perlombaan yang dilakukan setahun sekali, oleh Badan
                Eksekutif Mahasiswa (BEM) Universitas Muhammadiyah
                Pontianak. Ankreas 2022 ini dilaksanakan pada 3–4 Juni 2022
                yang berlokasi di auditorium Universitas Muhammadiyah
                Pontianak.....
              </p>

              <a href="/prestasi/detailPrestasi.html"
                 class="text-primary mt-5 px-0 align-items-center d-flex gap-2 text-decoration-none">
                Baca Selengkapnya
                <iconify-icon icon="formkit:arrowright"></iconify-icon>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Prestasi End -->

<!-- Footer Start -->
<section>
  <footer class="text-center text-white bg-primary">
    <div class="container pt-4">
      <div class="flex text-white justify-content-center align-items-center mb-3">
        <iconify-icon icon="ic:baseline-facebook" width="35" class="mx-3"></iconify-icon>
        <iconify-icon icon="ri:instagram-fill" width="35" class="mx-3"></iconify-icon>
        <iconify-icon icon="mdi:youtube" width="35" class="mx-3"></iconify-icon>
        <iconify-icon icon="mdi:linkedin" width="35" class="mx-3"></iconify-icon>
      </div>
    </div>

    <!-- Copyright -->
    <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">Universitas Bina Sarana Informatika Kota Pontianak</a>
    </div>
    <!-- Copyright -->
  </footer>
</section>
<!-- Footer End -->

<!-- Script Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

<!-- Script Iconify Design -->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>