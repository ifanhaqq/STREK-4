<div class="container mt-4">
    <h1 class="display-1 fw-bolder text-center">Rp. <?= $data['tbg']['saldo'] ?></h1>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 d-flex justify-content-center">
            <table class="table table-border fs-3">
                <tbody>
                    <tr>
                        <th width="10%">Nama</th>
                        <td>:</td>
                        <td><?= $data['tbg']['nama']; ?></td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>:</td>
                        <td><?= $data['tbg']['nisn']; ?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?= $_SESSION['kelas']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div class="col-4">
        
    </div>
</div>