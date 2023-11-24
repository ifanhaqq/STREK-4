<div class="d-flex justify-content-center" style="margin-top: 50px">
    <div class="row">
        <div class="card mb-4 opacity-100"
            style="width: 500px; background: rgba(255, 255, 255, 0.3); border: 2px solid #ccc; padding: 20px;">
            <div class="card-body text-center">
                <img src="<?= BASEURL; ?>/img/<?= $_SESSION['foto']; ?>" alt="avatar" class="rounded-circle img-fluid"
                    style="width: 200px;">
                <h1 class="my-3 text-white display-5">
                    <?= $_SESSION['name']; ?>
                </h1>
                <table class="table table-borderless">
                    <tbody>
                        <div style="height: 10px">
                            <tr>
                                <td>
                                    <h2 class="text-white mb-1">NIP:
                                        <?= $_SESSION['nip']; ?>
                                    </h2>
                                </td>
                            </tr>
                        </div>
                            <tr>
                                <td>
                                    <h2 class="text-white mb-4">Guru Kelas
                                        <?= $_SESSION['kelas']; ?>
                                    </h2>
                                </td>
                            </tr>
                        

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>