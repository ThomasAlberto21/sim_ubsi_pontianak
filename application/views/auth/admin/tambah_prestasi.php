<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Prestasi</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="#">
                        <div class="form-group">
                            <label>Gambar</label>
                            <input class="form-control-file" type="file" name="gambar" />
                        </div>
                        <div class="form-group">
                            <label>Kegiatan</label>
                            <input name="nama_kegiatan" class="form-control py-4" type="text" placeholder="Masukkan Prestasi" />
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input class="form-control py-4" type="date" name="tanggal" />
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control py-3" name="deskripsi" rows="10" placeholder="Masukkan Deskripsi Disini"></textarea>
                        </div>

                        <a href="#" class="btn btn-primary w-100 mb-2 py-3">Tambah Prestasi</a>
                        <a href="kegiatan.html" class="btn btn-danger w-100 py-3">
                            Batal
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ./wrapper -->