<div class="container mt-5">
    <div class="row">
        <div class="col-10">
            <div class="rounded text-white"
                style="background: rgba(255, 255, 255, 0.1); border: 2px solid #ccc; padding: 20px;">
                <h1 class="h1 ms-3 mb-4">Daftar Pengajuan Pengambilan Tabungan</h1>
                <div class="ms-2 row mb-3">
                    <div class="col-5"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#ajukanModal"><i class="bi bi-plus"></i> Tambah pengajuan</button></div>
                </div>
                <table class="table table-striped table-primary border border-dark">
                    <thead class="bg-dark table-dark text-white">
                        <tr>
                            <th scope="col" class="border border-end border-dark" style="width: 5%">No</th>
                            <th scope="col" class="border border-end border-dark text-center" width="200px">Jumlah</th>
                            <th scope="col" class="border border-end border-dark text-center" width="200px">Alasan</th>
                            <th scope="col" class="border border-end border-dark text-center" width="200px">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data['pgjn'] as $row): ?>
                            <tr>
                                <th scope="row">
                                    <?= $no ?>
                                </th>
                                <td class="border border-end border-dark">
                                    <?= $row['saldo'] ?>
                                </td>
                                <td class="border border-end border-dark">
                                    <?= $row['alasan'] ?>
                                </td>
                                <td class="border border-end border-dark text-center" data-id="<?= $row['status']; ?>">
                                    <?php
                                    switch ($row['status']) {
                                        case 1:
                                            echo 'Belum diverifikasi';
                                            break;
                                        case 2:
                                            echo 'Pengajuan diterima';
                                            break;
                                        case 0:
                                            echo 'Pengajuan ditolak';
                                            break;
                                        default:
                                            echo "Tidak tahu";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php
                            $no++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>



<!-- Modal pengajuan -->
<div class="modal fade" id="ajukanModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Pengajuan pengambilan tabungan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/ajukan/tambahPengajuan" method="post">
                    <input type="hidden" class="form-control" id="nama" name="nama" value="<?= $_SESSION['name']; ?>">
                    <input type="hidden" class="form-control" id="kelas" name="kelas"
                        value="<?= $_SESSION['kelas']; ?>">
                    <input type="hidden" id="nisn" name="nisn" value="<?= $_SESSION['nip']; ?>">
                    <input type="hidden" id="tgl" name="tgl" value="<?= date("Y-m-d H:i:s") ?>">
                    <div class="mb-3">
                        <label for="saldo" class="form-label">Jumlah saldo</label>
                        <input type="number" class="form-control" id="saldo" name="saldo">
                    </div>
                    <div class="mb-3">
                        <label for="alasan" class="form-label">Alasan</label>
                        <textarea class="form-control" name="alasan" id="alasan" cols="4" rows="4"></textarea>
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