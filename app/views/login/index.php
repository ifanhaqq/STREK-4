<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="http://localhost/STREK-4/public/css/style.css" rel="stylesheet">
</head>
<body>
<div class="row">
        <div class="col-6">
            <div class="top-panel">
                <div class="d-flex flex-column justify-content-center fw-bold">
                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 align-center"><h1>SISTEM <span style="color: aqua;">TABUNGAN</span></h1></div>
                    </div>
                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2"><h1><span style="color: aqua;">SDN ERETAN</span> KULON 4</h1></div>
                    </div>
                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2"><h1></div>
                    </div>
                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2"></div>
                    </div>
                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2"><img src="<?= BASEURL;?>/img/Kids.png" width="400" height="auto" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6" style="background-color: rgb(190, 250, 230);">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-6 top-panel panel panel-secondary" style="background-color: aqua">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center mt-4">Sign in</h3>
                    </div>
                    <div class="panel-body">
                        <form name="form" method="POST" action="">
                            <fieldset>
                                <div class="form-group text-center">
                                    <label>Username</label>
                                    <input class="form-control" placeholder="Masukkan username..." name="username" type="text" autofocus="true" required="true">
                                </div>
                                <div class="form-group text-center">
                                    <label>Password</label>
                                    <input class="form-control" placeholder="Masukkan password..." name="password" type="password" required="true">
                                </div>
                                <button type="submit" class="btn btn-success mb-4">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="<?= BASEURL;?>/js/script.js"></script>
</body>
</html>