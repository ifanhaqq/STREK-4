<div class="container">
    <div class="row">
        <div class="fw-bolder">
            <?php Flasher::flash(); ?>
            <div class="rounded text-white mt-5"
                style="background: rgba(255, 255, 255, 0.3); border: 2px solid #ccc; padding: 10px;">
                <h1 class="mb-4 text-center">Daftar Akun Siswa Kelas <?= $_SESSION['kelas']; ?></h1>
                <table class="table table-primary table-striped fw-bold border border-dark">
                    <thead class="table-dark text-white">
                        <tr>
                            <th scope="col" class="border border-end border-dark w-13">No</th>
                            <th scope="col" class="border border-end border-dark">Nama</th>
                            <th scope="col" class="border border-end border-dark">NISN</th>
                            <th scope="col" class="border border-end border-dark">Username</th>
                            <th scope="col" class="border border-end border-dark">Tipe</th>
                            <th scope="col" class="border border-end border-dark text-center" style="width: 200px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data['users'] as $row): ?>

                            <tr scope="row">
                                <th scope="row">
                                    <?= $no; ?>
                                </th>
                                <td class="border border-end border-dark">
                                    <?= $row['name']; ?>
                                </td>
                                <td class="border border-end border-dark">
                                    <?= $row['nip']; ?>
                                </td>
                                <td class="border border-end border-dark">
                                    <?= $row['username']; ?>
                                </td>
                                <td class="border border-end border-dark">
                                    <?= $row['type']; ?>
                                </td>
                                <td class="border border-end border-dark">
                                    <a href=""><button type="button" class="btn btn-warning rounded"><i class="bi bi-pencil-square"></i> Edit</button></a> | 
                                    <a href=""><button type="button" class="btn btn-danger rounded"><i class="bi bi-trash3"></i> Hapus</button></a>
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