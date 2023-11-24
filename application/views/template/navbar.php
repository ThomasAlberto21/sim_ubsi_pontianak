<!-- Navar Start -->
<section>
    <div aria-label="" class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="/assets/logo_ubsi.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item">
                        <a class="nav-link text-black" aria-current="page" href="<?= base_url('beranda') ?>">Beranda</a>
                    </li>

                    <!-- Tentang UBSI -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang UBSI
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="<?= base_url('tentang/sambutan') ?>">Sambutan Rektor</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('tentang/sejarah') ?>">Sejarah UBSI</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('tentang/visimisi') ?>">Visi & Misi UBSI</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Prodi
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="<?= base_url('prodi/sisteminformasi') ?>">Sistem Informasi</a>
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url('prodi/ilmukomputer') ?>">Ilmu Komputer</a></li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('prodi/akuntansi') ?>">Akuntansi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" aria-current="page" href="<?= base_url('kegiatan') ?>">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" aria-current="page" href="<?= base_url('berita') ?>">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" aria-current="page" href="<?= base_url('prestasi') ?>">Prestasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Navbar end -->