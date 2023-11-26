  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0">Berita</h1>
                  </div>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <div class="content">
          <div class="container-fluid">
              <div class="card">
                  <div class="card-body">
                      <form method="post" action="<?= base_url("berita/update_berita") ?>" enctype="multipart/form-data">
                          <input name="id_berita" hidden class="form-control py-4" type="text" value="<?php echo $record->id_berita; ?>" required />
                          <div class="form-group">
                              <label>Gambar</label>
                              <input class="form-control-file" type="file" name="gambar" />
                              <img src="<?php echo base_url('assets/images/berita/' . $record->gambar); ?>" width="500" height="300" class="figure-img img-fluid rounded mt-2" />
                          </div>
                          <div class="form-group">
                              <label>Berita</label>
                              <input name="nama_berita" class="form-control py-4" type="text" value="<?php echo $record->nama_berita; ?>" required />
                          </div>
                          <!-- <div class="form-group">
                              <label>Tanggal</label>
                              <input class="form-control py-4" type="date" name="tanggal" />
                          </div> -->
                          <div class="form-group">
                              <label>Deskripsi</label>
                              <textarea class="form-control py-3" name="deskripsi" rows="10" required><?php echo $record->deskripsi; ?></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary w-100 mb-2 py-3">Update Berita</button>
                          <a href="berita.html" class="btn btn-danger w-100 py-3">
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