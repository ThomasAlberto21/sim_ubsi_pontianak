<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kegiatan</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <a href="<?= base_url('admin/tambah_kegiatan') ?>" class="btn btn-primary d-flex align-items-center py-3 rounded-4">
                            <iconify-icon icon="ic:baseline-plus" style="font-size: 22px" class="mr-2"></iconify-icon>
                            Tambah Kegiatan
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-responsive">
                        <thead class="sidebar-dark-primary text-white">
                            <tr>
                                <th scope="col" class="text-center">No.</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Kegiatan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($record)) : ?>
                                <?php $i = 1; ?>
                                <?php foreach ($record as $row) : ?>
                                    <tr>
                                        <th scope="row" class="text-center" style="width: 50px">
                                            <?= $i++; ?>
                                        </th>
                                        <td>
                                            <img src="<?= base_url() . 'assets/images/kegiatan/' . $row['gambar']; ?>" alt="" class="w-100" />
                                        </td>
                                        <td><?= $row['nama_kegiatan']; ?></td>
                                        <td>Senin , 07 Agustus 2023 , 08:30 WIB</td>
                                        <td>
                                            <?= $row['deskripsi']; ?>
                                        </td>

                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary mr-2 text-white">
                                                    <iconify-icon icon="mdi:pencil" style="font-size: 25px"></iconify-icon>
                                                </a>
                                                <a href="<?php echo base_url('kegiatan/delete_kegiatan/' . $row['id_kegiatan']) ?>" class="btn btn-danger">
                                                    <iconify-icon icon="mdi:trash" style="font-size: 25px"></iconify-icon>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>