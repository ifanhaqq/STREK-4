<div class="container mt-5">
  <div class="row">


    <div class="col-10">
      <div class="rounded text-white"
        style="background: rgba(255, 255, 255, 0.1); border: 2px solid #ccc; padding: 20px;">
        <h1 class="h1 ms-3 mb-2 text-white">Daftar Tabungan Kelas
          <?= $_SESSION['kelas']; ?>
        </h1>


        <a href="" class="mb-2" data-bs-toggle="modal" data-bs-target="#excelModal"><button type="button"
            class="mb-2 btn btn-primary mt-4">Upload Data Tabungan</button></a>

        <?php Flasher::flash(); ?>
        <?php Flasher::loginFlash(); ?>
        <table class="table table-secondary table-striped fw-bold border border-dark">
          <thead class="table-dark text-white">
            <tr>
              <th scope="col" class="border border-end border-dark w-13">No</th>
              <th scope="col" class="border border-end border-dark">Nama</th>
              <th scope="col" class="border border-end border-dark">NISN</th>
              <th scope="col" class="border border-end border-dark">Gender</th>
              <th scope="col" class="border border-end border-dark">Total Tabungan</th>
              <th scope="col" class="border border-end border-dark text-center"><button class="rounded"
                  style="background-color: white;" type="button" data-bs-toggle="modal"
                  data-bs-target="#tabunganModal"><i style="color: black; width: 40px;"
                    class="bi bi-plus-lg"></i></button></th>
              <th scope="col" class="border border-end border-dark" style="width: 115px"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($data['tbg'] as $row): ?>
              <tr>
                <th scope="row">
                  <?= $no; ?>
                </th>
                <td class="border border-end border-dark">
                  <?= $row['nama'] ?>
                </td>
                <td class="border border-end border-dark">
                  <?= $row['nisn'] ?>
                </td>
                <td class="border border-end border-dark">
                  <?= $row['gender'] ?>
                </td>
                <td class="border border-end border-dark">Rp.
                  <?= $row['saldo'] ?>
                </td>
                <td class="text-center"><a href="" class="tambahModal" data-bs-toggle="modal" data-bs-target="#saldoModal"
                    data-id="<?= $row['nisn']; ?>"><i class="bi bi-plus-lg"></i></a></td>
                <td class="border border-end border-dark">
                  <a href="" class="deleteTabungan" data-bs-toggle="modal" data-bs-target="#hapusTabungan"
                    data-id="<?= $row['nisn']; ?>"><button type="button" class="btn btn-danger rounded"><i
                        class="bi bi-trash3"></i> Hapus</button></a>
                </td>
              </tr>
              <?php
              $no++;
            endforeach; ?>
          </tbody>
        </table>
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

<!-- Modal upload data siswa -->
<div class="modal fade" id="excelModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Upload Daftar Tabungan Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/excel/upload" method="POST" enctype="multipart/form-data" accept=".xls, .xlsx">
          <div class="mb-3 nisn-class">
            <label for="nisn" class="form-label">Upload File Excel</label>
            <input type="file" class="form-control" id="nisn" name="excelFile">
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>