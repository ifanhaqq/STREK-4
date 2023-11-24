<?php

class Flasher
{

    public static function setFlash($pesan, $aksi, $jenis, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe,
            'jenis' => $jenis
        ];
    }

    public static function setLoginFlash($tipe, $jenis, $pesan)
    {
        $_SESSION['flash_login'] = [
            'tipe' => $tipe,
            'jenis' => $jenis,
            'pesan' => $pesan
        ];
    }

    public static function loginFlash()
    {
        if (isset($_SESSION['flash_login'])) {
            echo '<div class="alert alert-' . $_SESSION['flash_login']['tipe'] . ' alert-dismissible fade show" role="alert">'. $_SESSION['flash_login']['jenis'] .' anda <strong>' . $_SESSION['flash_login']['pesan'] .
                ' !</strong> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            unset($_SESSION['flash_login']);
        }
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">Data ' . $_SESSION['flash']['jenis'] .
                ' <strong>' . $_SESSION['flash']['pesan'] . '!</strong> ' . $_SESSION['flash']['aksi'] . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            unset($_SESSION['flash']);
        }
    }
}