    <?php foreach ($record as $row) : ?>
        <!-- Detail Berita start-->
        <section>
            <div class="container mb-5">
                <!-- Button kembali -->
                <a href="javascript:history.go(-1)" class="align-items-center d-flex text-decoration-none gap-3 mt-3 mb-3 text-black">
                    <iconify-icon icon="formkit:arrowleft"></iconify-icon>
                    <span>Kembali</span>
                </a>

                <div class="image">
                    <!-- Parent Img -->
                    <img src="<?= base_url('/assets/images/berita/' . $row['gambar']); ?>" class="img-fluid w-100 mt-2 mb-3 rounded-2" alt="berita" />
                </div>
                <h3 class="mb-3"><?= $row['nama_berita'] ?></h3>
                <!-- Author -->
                <div class="d-flex gap-3 align-items-center">
                    <img src="<?= base_url('/assets/images/guest.jpg') ?>" class="rounded-circle" alt="author" style="width: 40px; height: 40px" />

                    <div style="font-size: 13px">
                        <span>Admin &nbsp; - &nbsp; </span>
                        <span class="opacity-50 fw-normal">
                            <iconify-icon icon="clarity:date-line"></iconify-icon>
                            Senin , 07 Agustus 2023 , 08:30 WIB
                        </span>
                    </div>
                </div>

                <p class="mt-3 opacity-75 lh-lg" style="text-align: justify">
                    <?= $row['deskripsi']; ?>
                </p>
            </div>
        </section>
    <?php endforeach; ?>
    <!-- Detail Berita end-->