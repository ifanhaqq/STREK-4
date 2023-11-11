<div class="container mt-5">
    <div class="row">
        <h1 class="h1 ms-3 mb-4">Daftar Mutasi</h1>
    </div>
    <div class="col-7">
    <table class="table table-striped border border-dark">
        <thead class="bg-dark text-white">
            <tr>
            <th scope="col" class="border border-end border-dark w-13">Tanggal</th>
            <th scope="col" class="border border-end border-dark">Mutasi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['mutasi'] as $row) : ?>
            <tr>
            <td scope="row"><?= $row['tanggal'] ?></td>
            <td class="border border-end border-dark" data-id="<?= $row['jumlah'] ?>">
            <?php if ($row['jumlah'] < 0) {echo "Rp. " . $row['jumlah'];} else {echo "Rp. +" . $row['jumlah'];}  ?>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>