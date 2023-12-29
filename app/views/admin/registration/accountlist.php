<div class="container">
    <div class="row">
        <div class="fw-bolder mt-5">
        <?php Flasher::flash(); ?>
            <div class="rounded text-white"
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
                            <th scope="col" class="border border-end border-dark text-center" style="width: 200px">Aksi
                            </th>
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
                                    <a href="" class="editAccount" data-bs-toggle="modal" data-bs-target="#editakun"
                                        data-id="<?= $row['id']; ?>"><button type="button"
                                            class="btn btn-warning rounded"><i class="bi bi-pencil-square"></i>
                                            Edit</button></a> |
                                    <a href="" class="deleteAccount" data-bs-toggle="modal" data-bs-target="#tabunganModal"
                                        data-id="<?= $row['id']; ?>"><button type="button" class="btn btn-danger rounded"><i
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
</div>

<!-- Modal hapus akun -->
<div class="modal fade" id="tabunganModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Apakah anda yakin?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/user/deleteaccount" method="post">
                    <input type="hidden" class="form-control" id="id" name="id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-primary">Iya</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal edit akun -->
<div class="modal fade" id="editakun" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Verifikasi Akun</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/user/test" method="post">
                    <input type="hidden" class="form-control" id="id_edit" name="id_edit">
                    <input type="hidden" class="form-control" id="truepw" name="truepw">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Masukkan password</label>
                        <input type="password" class="form-control" id="pw" name="pw">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>