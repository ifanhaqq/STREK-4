<div class="container mt-5">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="fw-bolder">
                <?php Flasher::flash(); ?>
                <div class="rounded text-white"
                    style="background: rgba(255, 255, 255, 0.3); border: 2px solid #ccc; padding: 10px;">
                    <h1 class="mb-5 text-center">Edit Data Akun</h1>
                    <form method="post" action="<?= BASEURL; ?>/user/update" class="rounded"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-6">
                                <input type="hidden" name="id" id="id" value="<?= $data['users']['id'] ?>">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control border-dark" name="nama" id="nama"
                                        value="<?= $data['users']['name'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="nip" class="form-label">NISN</label>
                                    <input type="text" class="form-control border-dark" name="nip" id="nip" value="<?= $data['users']['nip'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="file" class="form-control border-dark" name="foto" id="foto" value="<?= $data['users']['foto'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="kelas" class="form-label">Kelas</label>
                                    <input type="number" class="form-control border-dark" name="kelas" id="kelas" value="<?= $data['users']['kelas'] ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control border-dark" name="email" id="email" value="<?= $data['users']['email'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control border border-dark" name="username"
                                        id="username" value="<?= $data['users']['username'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control border-dark" name="password"
                                        id="password">
                                </div>
                                <div class="mb-3">
                                    <label for="pwdRpt" class="form-label">Masukkan kembali password</label>
                                    <input type="password" class="form-control border-dark" name="pwdRpt" id="pwdRpt">
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary rounded-pill">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>