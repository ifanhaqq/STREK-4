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
                    <th scope="col" class="border border-end border-dark text-center"><button class="rounded" style="background-color: rgb(116, 218, 121);" type="button" data-bs-toggle="modal" data-bs-target="#tabunganModal"><i style="color: black; width: 40px;" class="bi bi-plus-lg"></i></button></th>
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
                    <td class="text-center"><a href="" class="saldoModal" data-bs-toggle="modal" data-bs-target="#saldoModal" data-id="<?= $row['id']; ?>"><i class="bi bi-plus-lg"></i></a></td>
                    </tr>
                    <?php
                    $no++;
                    endforeach; ?>
                </tbody>
                </table>
        </div>
    </div>
</div>