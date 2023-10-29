<div class="container mt-5" >
    <div class="row">
        <h1 class="h1 ms-3 mb-4">Daftar Tabungan</h1>
        <div class="col-10">
        <?php Flasher::flash(); ?>
            <table class="table table-striped border border-dark">
                <thead class="bg-dark text-white">
                    <tr>
                    <th scope="col" class="border border-end border-dark w-13">No</th>
                    <th scope="col" class="border border-end border-dark">Nama</th>
                    <th scope="col" class="border border-end border-dark">NISN</th>
                    <th scope="col" class="border border-end border-dark">Gender</th>
                    <th scope="col" class="border border-end border-dark">Total Tabungan</th>
                    <th scope="col" class="border border-end border-dark text-center"><button class="rounded" style="background-color: rgb(116, 218, 121);" type="button" data-bs-toggle="modal" data-bs-target="#addTabunganModal"><i style="color: black; width: 40px;" class="bi bi-plus-lg"></i></button></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data['tbg'] as $row) : ?>
                    <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td class="border border-end border-dark"><?= $row['nama'] ?></td>
                    <td class="border border-end border-dark"><?= $row['nisn'] ?></td>
                    <td class="border border-end border-dark"><?= $row['gender'] ?></td>
                    <td class="border border-end border-dark"><?= $row['saldo'] ?></td>
                    <td class="text-center"><a href="<?= BASEURL; ?>/tabungan/tambahJumlahSaldo/<?= $row['id'] ?>" class="saldoModal" data-bs-toggle="modal" data-bs-target="" data-id="<?= $row['id']; ?>"><i class="bi bi-plus-lg"></i></a></td>
                    </tr>
                    <?php
                    $no++;
                    endforeach; ?>
                </tbody>
                </table>
        </div>
    </div>
</div>

<!-- Modal tambah data siswa -->
<div class="modal fade" id="addTabunganModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/tabungan/tambah" method="post">
            <div class="mb-3">
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