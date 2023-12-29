<div class="container mt-5">
  <div class="row">
    <div class="col-sm-10">
      <div class="rounded text-white"
        style="background: rgba(255, 255, 255, 0.3); border: 2px solid #ccc; padding: 20px;">
        <h1 class="h1 ms-3 mb-4 text-white text-center">Daftar Mutasi</h1>

        <div class="row">
          <div class="col-sm-4 mb-4">
            <!-- Content for column 1 -->
            <a href="<?= BASEURL;?>/mutations/daftarmutasi/1" style="text-decoration: none">
              <div class="card border border-3 border-dark"
                style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.5);">
                <div class="card-body">
                  <h1 class="card-title text-black text-center">Kelas 1</h1>
                </div>
              </div>
            </a>
          </div>

          <div class="col-sm-4 mb-4">
            <!-- Content for Kelas 2 -->
            <a href="<?= BASEURL;?>/mutations/daftarmutasi/2" style="text-decoration: none">
              <div class="card border border-3 border-dark"
                style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.5);">
                <div class="card-body">
                  <h1 class="card-title text-black text-center">Kelas 2</h1>
                </div>
              </div>
            </a>
          </div>

          <div class="col-sm-4 mb-4">
            <!-- Content for Kelas 3 -->
            <a href="<?= BASEURL;?>/mutations/daftarmutasi/3" style="text-decoration: none">
              <div class="card border border-3 border-dark"
                style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.5);">
                <div class="card-body">
                  <h1 class="card-title text-black text-center">Kelas 3</h1>
                </div>
              </div>
          </div>
          </a>
        </div>

        <div class="row">
          <div class="col-sm-4 mb-4">
            <!-- Content for Kelas 4 -->
            <a href="<?= BASEURL;?>/mutations/daftarmutasi/4" style="text-decoration: none">
              <div class="card border border-3 border-dark"
                style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.5);">
                <div class="card-body">
                  <h1 class="card-title text-black text-center">Kelas 4</h1>
                </div>
              </div>
            </a>
          </div>

          <div class="col-sm-4 mb-4">
            <!-- Content for Kelas 5 -->
            <a href="<?= BASEURL;?>/mutations/daftarmutasi/5" style="text-decoration: none">
              <div class="card border border-3 border-dark"
                style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.5);">
                <div class="card-body">
                  <h1 class="card-title text-black text-center">Kelas 5</h1>
                </div>
              </div>
            </a>
          </div>

          <div class="col-sm-4 mb-4">
            <!-- Content for Kelas 6 -->
            <a href="<?= BASEURL;?>/mutations/daftarmutasi/6" style="text-decoration: none">
              <div class="card border border-3 border-dark"
                style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.5);">
                <div class="card-body">
                  <h1 class="card-title text-black text-center">Kelas 6</h1>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal tambah data siswa -->
<div class="modal fade" id="tabunganModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/tabungan/tambah" method="post">
          <input type="hidden" class="form-control" id="kelas" name="kelas" value="<?= $_SESSION['kelas']; ?>">
          <div class="mb-3 nisn-class">
            <label for="nisn" class="form-label">NISN</label>
            <input type="text" class="form-control" id="nisn" name="nisn">
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="mb-3">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <select class="form-control" name="gender" id="gender">
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal tambah saldo siswa -->
<div class="modal fade" id="saldoModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Saldo Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/tabungan/tambahjumlahsaldo" method="post">
          <input type="hidden" name="id" id="id">
          <input type="hidden" name="nis" id="nis">
          <div class="mb-3">
            <label for="saldo" class="form-label">Masukkan Jumlah Saldo</label>
            <input type="number" class="form-control" id="saldo" name="saldo">
          </div>
          <div class="mb-3">
            <input type="datetime" name="tanggal" id="tanggal" value="<?= date("Y-m-d H:i:s") ?>">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal hapus tabungan -->
<div class="modal fade" id="hapusTabungan" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Apakah anda yakin?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/tabungan/delete" method="post">
          <input type="hidden" class="form-control" id="id_hapus" name="id_hapus">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
        <button type="submit" class="btn btn-primary">Iya</button>
        </form>
      </div>
    </div>
  </div>
</div>