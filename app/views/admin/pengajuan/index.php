<div class="container mt-5" >
    <div class="row">
        <h1 class="h1 ms-3 mb-4">Daftar Pengajuan Pengambilan Tabungan</h1>
        <div class="col-10">
            <table class="table table-striped border border-dark">
                <thead class="bg-dark text-white">
                    <tr>
                    <th scope="col" class="border border-end border-dark" style="width: 5%">No</th>
                    <th scope="col" class="border border-end border-dark">Nama</th>
                    <th scope="col" class="border border-end border-dark">Kelas</th>
                    <th scope="col" class="border border-end border-dark">Saldo</th>
                    <th scope="col" class="border border-end border-dark">Alasan</th>
                    <th scope="col" class="border border-end border-dark">Test</th>
                    <th scope="col" class="border border-end border-dark">Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach ($data['pgjn'] as $row) : ?>
                    <tr>
                    <th scope="row"><?= $no ?></th>
                    <td class="border border-end border-dark"><?= $row['nama'] ?></td>
                    <td class="border border-end border-dark"><?= $row['kelas'] ?></td>
                    <td class="border border-end border-dark"><?= $row['saldo'] ?></td>
                    <td class="border border-end border-dark"><?= $row['alasan'] ?></td>
                    <td class="border border-end border-dark">
                        <a href=""><i class="bi bi-x-circle-fill"></i></a> |
                        <a href=""><i class="bi bi-check-circle-fill"></i></a>
                    </td>
                    <td class="border border-end border-dark" data-id="<?= $row['status']; ?>">
                    <?php
                    switch ($row['status']) {
                        case 1:
                            echo "Belom diverifikasi";
                         break;
                         case 2:
                            echo "Permintaan diterima";
                         break;
                         case 0:
                            echo "Permintaan ditolak";
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