<!-- Sidebar-->
<div class="bg-sidebar fw-bolder" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom">STREK-4</div>
    <ul class="list-group mt-auto list-group-flush">
        <a href="" style="text-decoration: none"><li class="list-group-item list-group-item-action list-group-item-secondary p-3 mb-4 border-end border-dark">
            <img src="<?= BASEURL; ?>/img/profile.png" class="img-thumbnail me-2 rounded-circle" width="40" height="auto">ADMIN</li></a>
        <a href="<?= BASEURL; ?>/mutations" style="text-decoration: none"><li class="list-group-item list-group-item-action list-group-item-secondary p-3">Daftar Mutasi</li></a>
        <a href="<?= BASEURL; ?>/request" style="text-decoration: none"><li class="list-group-item list-group-item-action list-group-item-secondary p-3">Pengajuan</li></a>
        <a href="<?= BASEURL; ?>/registrations" style="text-decoration: none"><li class="list-group-item list-group-item-action list-group-item-secondary p-3">Registrasi</li></a>
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
    <nav class="navbar navbar-expand-lg navbar-success bg-white border-bottom">
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