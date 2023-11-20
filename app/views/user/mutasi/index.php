<div class="container mt-5">
    <div class="col-7">
        <div class="rounded text-white"
            style="background: rgba(255, 255, 255, 0.1); border: 2px solid #ccc; padding: 20px;">
            <h1 class="h1 ms-3 mb-4">Daftar Mutasi</h1>
            <table class="table table-primary table-striped border border-dark">
                <thead class="table-dark text-white">
                    <tr>
                        <th scope="col" class="border border-end border-dark w-13">Tanggal</th>
                        <th scope="col" class="border border-end border-dark">Mutasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['mutasi'] as $row): ?>
                        <tr>
                            <td scope="row">
                                <?= $row['tanggal'] ?>
                            </td>
                            <td class="border border-end border-dark" data-id="<?= $row['jumlah'] ?>">
                                <?php if ($row['jumlah'] < 0) {
                                    echo "Rp. " . $row['jumlah'];
                                } else {
                                    echo "Rp. +" . $row['jumlah'];
                                } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>