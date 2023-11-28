<!-- Hero section start -->
<section style="
        background-image: url('<?= base_url(); ?>assets/images/hero.png');
        padding: 100px 0 100px 0;
        padding: 100px 0 100px 0;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-11 col-lg-9 col-xl-7 col-xxl-6 text-md-start text-center text-white mt-5">
                <h1 class="fw-bold mb-3">PRESTASI</h1>
                <p class="fw-medium">
                    <span class="text-warning">Prestasi UBSI</span>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->

<!-- Prestasi Start -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="mt-5">Prestasi</h2>
                <p class="opacity-75">
                    Prestasi yang telah diraih oleh mahasiswa dan mahasiswi UBSI
                </p>
            </div>

            <div class="my-5 col-md-12">
                <!-- Prestasi 1 -->
                <?php if (!empty($record)) : ?>
                    <?php foreach ($record as $row) : ?>
                        <div class="card border-0 shadow mb-3">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="<?= base_url('assets/images/prestasi/' . $row['gambar']); ?>" alt="prestasi 1" class="w-100 h-100" />
                                </div>

                                <div class="col-lg-8">
                                    <div class="card-body">
                                        <h4 class="card-title mb-2">
                                            <?= $row['nama_prestasi']; ?>
                                        </h4>
                                        <div class="d-flex align-items-center gap-4 opacity-50 mb-4">
                                            <iconify-icon icon="clarity:date-line"></iconify-icon>
                                            Senin , 07 Agustus 2023 , 08:30 WIB
                                        </div>
                                        <p class="card-text opacity-75" style="text-align: justify">
                                            <?= $row['deskripsi']; ?>
                                        </p>

                                        <a href="<?= base_url("prestasi/detail/" . $row['id_prestasi']) ?>" class=" text-primary mt-5 px-0 align-items-center d-flex gap-2 text-decoration-none">
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
    </div>
</section>

<!-- Kegiatan End -->