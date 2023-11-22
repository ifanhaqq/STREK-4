<div class="container mt-5">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="fw-bolder">
                <?php Flasher::flash(); ?>
                <div class="rounded text-white"
                    style="background: rgba(255, 255, 255, 0.3); border: 2px solid #ccc; padding: 10px;">
                    <h1 class="mb-5 text-center">Registrasi Akun Siswa</h1>
                    <form method="post" action="<?= BASEURL; ?>/user/register" class="rounded"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control border-dark" name="nama" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="nip" class="form-label">NISN</label>
                                    <input type="text" class="form-control border-dark" name="nip" id="nip">
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="file" class="form-control border-dark" name="foto" id="foto">
                                </div>
                                <div class="mb-3">
                                    <label for="kelas" class="form-label">Kelas</label>
                                    <input type="number" class="form-control border-dark" name="kelas" id="kelas">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control border-dark" name="email" id="email">
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control border border-dark" name="username"
                                        id="username">
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
                            <button type="submit" class="btn btn-primary rounded-pill">Tambah data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 15%">
        <div class="fw-bolder">
            <?php Flasher::flash(); ?>
            <div class="rounded text-white"
                style="background: rgba(255, 255, 255, 0.3); border: 2px solid #ccc; padding: 10px;">
                <h1 class="mb-5 text-center">Daftar Akun Siswa Kelas
                    <?= $_SESSION['kelas']; ?>
                </h1>
                <table class="table table-primary table-striped fw-bold border border-dark">
                    <thead class="table-dark text-white">
                        <tr>
                            <th scope="col" class="border border-end border-dark w-13">No</th>
                            <th scope="col" class="border border-end border-dark">Nama</th>
                            <th scope="col" class="border border-end border-dark">NISN</th>
                            <th scope="col" class="border border-end border-dark">Username</th>
                            <th scope="col" class="border border-end border-dark">Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data['user'] as $row): ?>

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
                                    <?= $row['password']; ?>
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