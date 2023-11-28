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
        <h4>Sejarah UBSI</h4>
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

        <a href="<?= base_url('tentang/sejarah') ?>" type="button" class="text-primary mt-5 px-0 align-items-center d-flex gap-2 text-decoration-none">
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
    <h1>Program Studi</h1>
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
        <img src="<?= base_url('assets/images/kegiatan/' . $kegiatan[0]['gambar']); ?>" class="w-100 h-100 rounded-2" alt="Kegiatan" />
      </div>
      <div class="col-lg-6 col-12 my-3">
        <h1>Kegiatan</h1>
        <p class="opacity-50"><?= $kegiatan[0]['nama_kegiatan']; ?></p>
        <p class="opacity-75" style="text-align: justify">
          <?= $kegiatan[0]['deskripsi']; ?>
        </p>

        <a href="<?= base_url('kegiatan') ?>" type="button" class="text-primary mt-5 px-0 align-items-center d-flex gap-2 text-decoration-none">
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

      <a href="<?= base_url('berita') ?>" type="button" class="text-primary mt-5 px-0 align-items-center d-flex gap-2 text-decoration-none">
        Lihat Berita
        <iconify-icon icon="formkit:arrowright"></iconify-icon>
      </a>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4 my-2">
      <!-- Berita 1 -->
      <?php if (!empty($berita)) : ?>
        <?php
        $articleCounter = 0;
        foreach ($berita as $b) :
          if ($articleCounter >= 4) {
            break;
          }
        ?>
          <div class="col">
            <div class="card">
              <img src="<?= base_url('assets/images/berita/' . $b['gambar']); ?>" class="card-img-top w-100 img-fluid" alt="Berita 1" />
              <div class="card-body">
                <figcaption class="blockquote-footer mt-2">
                  <cite title="Source Title">#berita</cite>
                </figcaption>
                <a href="/berita/detailBerita.html" class="h5 text-decoration-none card-title">
                  <?= $b['nama_berita']; ?>
                </a>
                <p class="card-text opacity-75 mt-4" style="text-align: justify">
                  <?= $b['deskripsi']; ?>
                </p>
                <hr class="mt-5" />
                <div class="d-flex align-items-center gap-4 opacity-75">
                  <iconify-icon icon="clarity:date-line"></iconify-icon>
                  Senin , 07 Agustus 2023 , 08:30 WIB
                </div>
              </div>
            </div>
          </div>
        <?php
          $articleCounter++;
        endforeach; ?>
      <?php endif; ?>
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

      <a href="<?= base_url('prestasi') ?>" type="button" class="text-primary mt-5 px-0 align-items-center d-flex gap-2 text-decoration-none">
        Lihat Prestasi
        <iconify-icon icon="formkit:arrowright"></iconify-icon>
      </a>
    </div>

    <div class="mt-4 d-grid gap-4">
      <!-- Prestasi 1 -->
      <?php if (!empty($prestasi)) : ?>
        <?php foreach ($prestasi as $p) : ?>
          <div class="card border-0 shadow">
            <div class="row">
              <div class="col-lg-4">
                <img src="<?= base_url('assets/images/prestasi/' . $p['gambar']); ?>" alt="Prestasi 1" class="w-100 h-100" />
              </div>

              <div class="col-lg-8">
                <div class="card-body">

                  <h4 class="card-title mb-2">
                    <?= $p['nama_prestasi']; ?>
                  </h4>
                  <div class="d-flex align-items-center gap-4 opacity-50 mb-4">
                    <iconify-icon icon="clarity:date-line"></iconify-icon>
                    Senin , 07 Agustus 2023 , 08:30 WIB
                  </div>
                  <p class="card-text opacity-75" style="text-align: justify">
                    <?= $p['deskripsi']; ?>
                  </p>

                  <a href="/prestasi/detailPrestasi.html" class="text-primary mt-5 px-0 align-items-center d-flex gap-2 text-decoration-none">
                    Baca Selengkapnya
                    <iconify-icon icon="formkit:arrowright"></iconify-icon>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- Prestasi End -->