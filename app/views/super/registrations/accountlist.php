<div class="container">
    <div class="row">
        <div class="fw-bolder">
            <?php Flasher::flash(); ?>
            <div class="rounded text-white mt-5"
                style="background: rgba(255, 255, 255, 0.3); border: 2px solid #ccc; padding: 10px;">
                <h1 class="mb-4 text-center">Daftar Akun</h1>
                <table class="table table-primary table-striped fw-bold border border-dark">
                    <thead class="table-dark text-white">
                        <tr>
                            <th scope="col" class="border border-end border-dark w-13">No</th>
                            <th scope="col" class="border border-end border-dark">Nama</th>
                            <th scope="col" class="border border-end border-dark">NISN</th>
                            <th scope="col" class="border border-end border-dark">Username</th>
                            <th scope="col" class="border border-end border-dark">Tipe</th>
                            <th scope="col" class="border border-end border-dark" style="width: 100px">Aksi</th>
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
                                    <a href=""><button type="button" class="btn btn-danger rounded"></button></a>
                                    <a href=""><button type="button" class="btn btn-warning rounded"></button></a>
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-4">
                                            <button type="button" class="btn btn-warning rounded"></button></a>
                                        </div>
                                    </div>
                                   
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