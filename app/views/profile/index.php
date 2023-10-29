<div class="container mt-5">
    <div class="row">
        <h1 class="mb-4 fw-bolder">Profil <span style="color: aqua">Guru</span></h1>
    </div>
    <div class="row mt-5">
        <div class="col-2 mt-4">
            <img src="<?= BASEURL; ?>/img/profile.png" class="rounded-circle" width="200">
        </div>
        <div class="col-5 ms-4">
            <?php if(isset($_SESSION['id'])) : ?>
            <table class="table table-borderless fs-1 fw-bolder">
                <tbody>
                    <tr>
                        <th class="w-25">Nama</th>
                        <td>:</td>
                        <td><?= $_SESSION['name']; ?></td>
                    </tr>
                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td><?= $_SESSION['nip']; ?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?= $_SESSION['kelas']; ?></td>
                    </tr>
                </tbody>
            </table>
            <?php endif; ?>
        </div>
    </div>
</div>