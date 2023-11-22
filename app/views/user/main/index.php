<div class="container mt-4">
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <div class="rounded text-white mt-lg-5" style="background: rgba(255, 255, 255, 0.1); border: 2px solid #ccc; padding: 20px;">
                    <h1 class="display-1 fw-bolder text-center text-white">Rp. <?= $data['tbg']['saldo'] ?></h1>
                    <table class="table table-border fs-3 text-white">
                        <tbody>
                            <tr>
                                <td width="10%">Nama</td>
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
                </div>
        </div>
</div>