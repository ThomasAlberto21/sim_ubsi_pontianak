<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><iconify-icon icon="ci:hamburger-lg" style="font-size: 22px"></iconify-icon></a>
            </li>
        </ul>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 vh-100">
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?= base_url(); ?>/assets/images/me.jpg" class="img-circle elevation-2" alt="User Image" />
                </div>
                <div class="info">
                    <a href="<?= base_url('admin'); ?>" class="d-block">Admin Ganteng</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="<?= base_url('beranda'); ?>" class="nav-link d-flex py-3">
                            <iconify-icon icon="ic:round-home" style="font-size: 22px"></iconify-icon>
                            <p class="mx-2">Beranda</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/kegiatan'); ?>" class="nav-link d-flex py-3">
                            <iconify-icon icon="tabler:activity" style="font-size: 22px"></iconify-icon>
                            <p class="mx-2">Kegiatan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/berita'); ?>" class="nav-link d-flex py-3">
                            <iconify-icon icon="ph:globe-bold" style="font-size: 22px"></iconify-icon>
                            <p class="mx-2">Berita</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/prestasi'); ?>" class="nav-link d-flex py-3">
                            <iconify-icon icon="mdi:achievement" style="font-size: 22px"></iconify-icon>
                            <p class="mx-2">Prestasi</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- Sidebar -->