<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                    Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari mahasiswa.." name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach( $data['mhs'] as $mhs ) : ?>
                <li class="list-group-item ">
                    <?= $mhs['nama']; ?>
                    <?= $mhs['saldo']; ?>
                    <a href="" class="badge bg-success float-end me-2 saldoModal" data-bs-toggle="modal" data-bs-target="#formModal">Tambah saldo</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-end me-2" onclick="return confirm('yakin?')">Hapus</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id']; ?>" class="badge bg-warning float-end me-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">Edit</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end me-2">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
            
                
            
        </div>
    </div>

</div> 

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">Kelas</label>
                <input type="number" class="form-control" id="nim" name="nim">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Jumlah yang ingin diambil</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Alasan</label>
                <select class="form-control" name="prodi" id="prodi">
                    <option value="RPL">RPL</option>
                    <option value="TI">TI</option>
                    <option value="TM">TM</option>
                    <option value="TP">TP</option>
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