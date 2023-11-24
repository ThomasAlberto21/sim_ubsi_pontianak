<!-- Hero section start -->
<section style="
        background-image: url('<?= base_url(); ?>assets/images/hero.png');
        padding: 100px 0 100px 0;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-11 col-lg-9 col-xl-7 col-xxl-6 text-md-start text-center text-white mt-5">
                <h1 class="fw-bold mb-3">BERITA</h1>
                <p class="fw-medium">
                    <span class="text-warning">Berita UBSI</span>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->

<!-- Berita Start -->
<section>
    <div class="container" style="margin-top: 100px">
        <div class="text-center">
            <div>
                <h1>Berita</h1>
                <p class="opacity-75">Berita UBSI Pontianak</p>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4 mt-2 mb-5">
            <!-- Berita 1 -->
            <?php if (!empty($record)) : ?>
                <?php foreach ($record as $row) : ?>
                    <div class="col">
                        <div class="card">
                            <img src="<?= base_url() . 'assets/images/berita/' . $row['gambar']; ?>" class="card-img-top w-100 img-fluid" alt="Berita 1" />
                            <div class="card-body">
                                <figcaption class="blockquote-footer mt-2">
                                    <cite title="Source Title">#berita</cite>
                                </figcaption>
                                <a href="detailBerita.html" class="h5 text-decoration-none card-title">
                                    <?= $row['nama_berita']; ?>
                                </a>
                                <p class="card-text opacity-75 mt-4" style="text-align: justify">
                                    <?= $row['deskripsi']; ?>
                                </p>
                                <hr class="mt-5" />
                                <div class="d-flex align-items-center gap-4 opacity-75">
                                    <iconify-icon icon="clarity:date-line"></iconify-icon>
                                    Senin , 07 Agustus 2023 , 08:30 WIB
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Berita End -->