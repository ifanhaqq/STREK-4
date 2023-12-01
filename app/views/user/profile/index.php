<div class="mx-auto" style="width: 1000px">
    <div class="container" style="margin-left: 35px; margin-top: 50px;">
        <div class="row d-flex">
            <div class="col-sm-2">
                <img src="<?= BASEURL; ?>/img/<?= $_SESSION['foto']; ?>" alt="avatar"
                    class="rounded-circle img-fluid border border-white border-4" style="width: 150px;">
            </div>
            <div class="col-sm-10 align-self-center">
                <h1 class="my-3 text-white">
                    <?= $_SESSION['name']; ?>
                </h1>
            </div>
        </div>
    </div>
    <div class="d-flex container" style="margin-top: 20px; margin-left: 220px">
        <div class="row">
            <div style="background: rgba(255, 255, 255, 0.3); border: 2px solid #ccc; padding: 20px; border-radius: 40px">
                <div class="ms-5 mb-5 me-5">
                    <table class="table table-borderless text-white fw-bolder mb-5">
                        <tbody>
                            <tr>
                                <td style="width: 120px">
                                    <h2 class="text-black fw-bolder mb-1 text-stroke" id="text-stroke"
                                        style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: white;">Nama
                                    </h2>
                                </td>
                                <td style="width: 10px; ">
                                    <h2 class="fw-bolder text-black"
                                        style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: white;">:</h2>
                                </td>
                                <td>
                                    <h2 class="fw-bolder"
                                        style="-webkit-text-stroke-width: 2px; -webkit-text-stroke-color: black;">
                                        <?= $_SESSION['name']; ?>
                                    </h2>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="text-black fw-bolder mb-1 text-stroke" id="text-stroke"
                                        style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: white;">NIP
                                    </h2>
                                </td>
                                <td>
                                    <h2 class="fw-bolder text-black"
                                        style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: white;">:</h2>
                                </td>
                                <td>
                                    <h2 class="fw-bolder"
                                        style="-webkit-text-stroke-width: 2px; -webkit-text-stroke-color: black;">
                                        <?= $_SESSION['nip']; ?>
                                    </h2>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="text-black fw-bolder mb-1 text-stroke" id="text-stroke"
                                        style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: white;">Kelas
                                    </h2>
                                </td>
                                <td>
                                    <h2 class="fw-bolder text-black"
                                        style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: white;">:</h2>
                                </td>
                                <td>
                                    <h2 class="fw-bolder"
                                        style="-webkit-text-stroke-width: 2px; -webkit-text-stroke-color: black;">
                                        <?= $_SESSION['kelas']; ?>
                                    </h2>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h1 class="text-center fw-bolder text-white" class="fw-bolder"
                        style="-webkit-text-stroke-width: 2px; -webkit-text-stroke-color: black;">SDN ERETAN KULON 4
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>