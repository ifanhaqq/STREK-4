<!-- Sidebar-->
<div class="bg-sidebar fw-bolder" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom">STREK-4</div>
    <ul class="list-group mt-auto list-group-flush">
        <a href="<?= BASEURL; ?>/profile" style="text-decoration: none"><li class="list-group-item list-group-item-action list-group-item-secondary p-3 mb-4 border-end border-dark">
            <img src="<?= BASEURL; ?>/img/<?= $_SESSION['foto'] ?>" class="img-thumbnail me-2 rounded-circle" width="40" height="auto">
            <?php if(isset($_SESSION['id'])) {
                echo $_SESSION['name'];
            } else {
                echo 'Guest';
            } ?>
        </li></a>
        <a href="" data-bs-toggle="modal" data-bs-target="#ajukanModal" style="text-decoration: none"><li class="list-group-item list-group-item-action list-group-item-secondary p-3">Pengajuan</li></a>
        <a href="<?= BASEURL; ?>/mutasi" style="text-decoration: none"><li class="list-group-item list-group-item-action list-group-item-secondary p-3">Mutasi</li></a>
    </ul>
    <ul class="position-absolute" style="bottom: 0">
        <div class="bg-merah rounded-pill">
            <a href="<?= BASEURL;?>/user/logout" style="text-decoration: none" ><li class="list-group-item list-group-item-action p-3 rounded-pill text-black fw-bolder">Logout</li></a>
        </div>
    </ul>
</div>
<!-- Page content wrapper-->
<div id="page-content-wrapper">
    <!-- Top navigation-->
    <nav class="navbar navbar-expand-lg navbar-success bg-strek border-bottom">
        <div class="container-fluid">
            <button class="btn" id="sidebarToggle"><i class="bi bi-border-width"></i></button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-2 mt-2 mt-lg-0">
                    <li class="nav-item active"><a class="nav-link fw-bolder text-black" href="<?= BASEURL; ?>">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!-- Modal pengajuan -->
<div class="modal fade" id="ajukanModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Pengajuan pengambilan tabungan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/tabungan/tambah" method="post">
            <div class="mb-3 nisn-class">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas">
            </div>
            <div class="mb-3">
                <label for="saldo" class="form-label">Saldo</label>
                <input type="text" class="form-control" id="saldo" name="saldo">
            </div>
            <div class="mb-3">
                <label for="alasan" class="form-label">Alasan</label>
                <textarea class="form-control" name="alasan" id="alasan" cols="4" rows="4"></textarea>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>