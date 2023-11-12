<div class="container mt-5" >
    <div class="row">
        <h1 class="h1 ms-3 mb-4">Daftar Pengajuan Pengambilan Tabungan</h1>
        <div class="col-10">
            <table class="table table-striped border border-dark">
                <thead class="bg-dark text-white">
                    <tr>
                    <th scope="col" class="border border-end border-dark" style="width: 5%">No</th>
                    <th scope="col" class="border border-end border-dark text-center">Nama</th>
                    <th scope="col" class="border border-end border-dark text-center">Kelas</th>
                    <th scope="col" class="border border-end border-dark text-center">Saldo</th>
                    <th scope="col" class="border border-end border-dark text-center">Alasan</th>
                    <th scope="col" class="border border-end border-dark text-center">tes</th>
                    <th scope="col" class="border border-end border-dark text-center" width="100px">Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach ($data['pgjn'] as $row) : ?>
                    <tr>
                    <th scope="row"><?= $no ?></th>
                    <td class="border border-end border-dark"><?= $row['nama'] ?></td>
                    <td class="border border-end border-dark"><?= $row['kelas'] ?></td>
                    <td class="border border-end border-dark"><?= $row['saldo'] ?></td>
                    <td class="border border-end border-dark"><?= $row['alasan']; ?></td>
                    <td class="border border-end border-dark"><a href="" class="setStatus" data-bs-toggle="modal" data-bs-target="#tolakModal" data-id="<?= $row['tab_id']; ?>">aksjfkj</a></td>
                    <td class="border border-end border-dark">
                    <?php
                    switch ($row['status']) {
                        case 1:
                            echo '<div class="text-center"><a href="" class="" data-bs-toggle="modal" data-bs-target="#tolakModal" data-id="<?= $row[' . "'tab_id'" . ']; ?>"><i class="bi bi-x-circle-fill" style="color: red;"></i></a> |
                            <a href=""><i class="bi bi-check-circle-fill" style="color: green;"></i></a></div>';
                         break;
                         case 2:
                            echo '<div class="text-center"><i class="bi bi-check-circle-fill" style="color: green;"></i></div>';
                         break;
                         case 0:
                            echo '<div class="text-center"><i class="bi bi-x-circle-fill" style="color: red;"></i></div>';
                            break;
                        default:
                            echo "Tidak tahu";
                    }
                    ?>
                    </td>
                    </tr>
                    <?php
                    $no++;
                    endforeach;
                    ?>
                </tbody>
                </table>
                
        </div>
    </div>
</div>


<!-- Modal tambah saldo siswa -->
<div class="modal fade" id="tolakModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Apakah anda yakin?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/pengajuan/tolak" method="post">
        <input type="hidden" name="id" id="id">
        <div class="mb-3 nisn-class">
          <label for="nisn" class="form-label">Saldo</label>
          <input type="text" class="form-control" id="saldo" name="saldo">
        </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-primary">Iya</button>
        </form>
      </div>
    </div>
  </div>
</div>