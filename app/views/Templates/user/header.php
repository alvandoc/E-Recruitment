<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= BASEURL ?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= BASEURL ?>assets/img/logo.png">
    <title>
        <?= $data['judul']; ?>
    </title>

    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>

    <link href="<?= BASEURL ?>assets/css/nucleo-icons.css" rel="stylesheet"/>
    <link href="<?= BASEURL ?>assets/css/nucleo-svg.css" rel="stylesheet"/>

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <link id="pagestyle" href="<?= BASEURL ?>assets/css/material-dashboard.min.css?v=3.0.6" rel="stylesheet"/>

    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/owl.theme.default.css">

</head>

<body class="g-sidenav-show bg-gray-200">


<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 d-lg-none ms-3  bg-gradient-dark"
       id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#">
            <img src="<?= BASEURL ?>assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Bumi Padjajaran</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <?php if (isset($_SESSION['id'])) { ?>
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white"
                       aria-controls="ProfileNav" role="button" aria-expanded="false">
                        <img src="<?= BASEURL ?>assets/img/team-3.jpg" class="avatar">
                        <span class="nav-link-text ms-2 ps-1">Nama Akun User</span>
                    </a>

                    <div class="collapse" id="ProfileNav" style>
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="<?= BASEURL ?>pages/pages/profile/overview.html">
                                    <span class="sidenav-mini-icon"> MP </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> My Profile </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="<?= BASEURL ?>pages/pages/account/settings.html">
                                    <span class="sidenav-mini-icon"> S </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Settings </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="<?= BASEURL ?>home/keluar">
                                    <span class="sidenav-mini-icon"> L </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Logout </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr class="horizontal light mt-0">
                </li>
            <?php } ?>
            <li class="nav-item">
                <a class="nav-link text-white active" href="<?= BASEURL ?>Admin">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}"><span
                                class="material-icons-round">
home
</span></i>
                    <span class="nav-link-text ms-2 ps-1">Home</span>
                </a>
            </li>

        </ul>
    </div>
</aside>

<div class="main-content position-relative max-height-vh-100 h-100">
    <nav class="navbar navbar-expand-lg bg-gradient-faded-dark position-sticky top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky"
         id="navbarBlur" data-scroll="true">
        <div class="container py-1 px-3">

            <a class="navbar-brand" href="<?= BASEURL ?>"><img alt="Logo Perusahaan" height="33"
                                                               src="<?= BASEURL ?>assets/img/logo.png" width="59"
                /></a>
            <div class="sidenav-toggler sidenav-toggler-inner d-lg-none">
                <a href="javascript:" class="nav-link text-body p-0">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item active ">
                        <a class="nav-link text-white" href="<?= BASEURL ?>home">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= BASEURL ?>user_lowongan">Lowongan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= BASEURL ?>bioUser">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= BASEURL ?>home/aboutUs">About Us</a>
                    </li>
                </ul>

                <?php if (isset($_SESSION['id'])) { ?>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav ">
                            <li class="nav-item dropdown">
                                <a href="javascript:" class="nav-link text-white position-relative"
                                   id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/black-chair.jpg"
                                         class="avatar avatar-sm me-3" alt="table image">
                                    <span class="position-absolute"><?= $data['user']['nama_lengkap'] ?></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-2 me-sm-n4"
                                    aria-labelledby="dropdownMenuButton">
                                    <li class="mb-2">
                                        <a class="dropdown-item border-radius-md" href="javascript:">
                                            <div class="d-flex align-items-center py-1">
                                                <span class="material-icons">account_circle</span>
                                                <div class="ms-2">
                                                    <h6 class="text-sm font-weight-normal my-auto">
                                                        Akun
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a class="dropdown-item border-radius-md" href="javascript:">
                                            <div class="d-flex align-items-center py-1">
                                                <span class="material-icons">settings</span>
                                                <div class="ms-2">
                                                    <h6 class="text-sm font-weight-normal my-auto">
                                                        Pengaturan
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item border-radius-md" href="<?= BASEURL ?>home/keluar">
                                            <div class="d-flex align-items-center py-1">
                                                <span class="material-icons">logout</span>
                                                <div class="ms-2">
                                                    <h6 class="text-sm font-weight-normal my-auto">
                                                        Logout
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                <?php } else { ?>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item mx-2">
                                <button type="button" class="btn btn-outline-light btn-sm mb-0" data-bs-toggle="modal"
                                        data-bs-target="#login">
                                    Masuk
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="btn btn-outline-light btn-sm mb-0" data-bs-toggle="modal"
                                        data-bs-target="#register">
                                    Register
                                </button>
                            </li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
    </nav>

    <!--    Modal Login-->
    <div class="modal fade" id="login" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Masuk</h5>
                    <i class="material-icons ms-3">login</i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form role="form" class="text-start" method="POST" action="<?= BASEURL ?>home/masuk">
                        <div class="input-group input-group-static mb-4">
                            <label>Email</label>
                            <input type="email" required="required" name="email" class="form-control"
                                   placeholder="john@email.com">
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Password</label>
                            <input type="password" name="password" required="required" class="form-control"
                                   placeholder="•••••••••••••">
                        </div>
                        <div class="form-check form-switch d-flex align-items-center mb-3">
                            <input class="form-check-input" type="checkbox" id="rememberMe" required="required" checked>
                            <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary btn-sm" data-bs-dismiss="modal">Close
                    </button>
                    <button type="submit" class="btn bg-gradient-info btn-sm">Masuk</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!--    Modal Register -->
    <div class="modal fade" id="register" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Register</h5>
                    <i class="material-icons ms-3">login</i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form role="form" class="text-start" method="POST" action="<?= BASEURL ?>home/daftar">
                        <div class="input-group input-group-static mb-4">
                            <label>Nama lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" required="required"
                                   placeholder="Nama Lengkap">
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="john@email.com"
                                   required="required">
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Password</label>
                            <input type="password" required="required" name="password" class="form-control"
                                   placeholder="•••••••••••••">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary btn-sm" data-bs-dismiss="modal">Close
                    </button>
                    <button type="submit" class="btn bg-gradient-info btn-sm">Daftar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!--    Modal Tambah pendidikan  -->
    <div class="modal fade" id="addPendidikan" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Tambah Latar Belakang Pendidikan</h5>
                    <i class="material-icons ms-3">login</i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form role="form" class="text-start" method="POST" action="<?= BASEURL ?>bioUser/insertPendidikan">
                        <div class="input-group input-group-static mb-4" required="required">
                            <label>Pendidikan</label>
                            <select class="form-control" name="pendidikan" id="choices-category" required="required">
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMK">SMK</option>
                                <option value="Diploma 3">Diploma 3</option>
                                <option value="Sarjana 1">S1</option>
                            </select>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Nama Universitas</label>
                            <input type="text" name="nama_inversitas" class="form-control"
                                   placeholder="Nama Universitas/Sekolah" required="required">
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" placeholder="Jurusan"
                                   required="required">
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>IPK</label>
                            <input type="text" name="ipk" class="form-control" placeholder="IPK" required="required">
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>tanggal_mulai</label>
                            <input type="date" name="tanggal_mulai" class="form-control" placeholder="IPK"
                                   required="required">
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>tanggal_selesai</label>
                            <input type="date" name="tanggal_selesai" class="form-control" placeholder="IPK"
                                   required="required">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary btn-sm" data-bs-dismiss="modal">Close
                    </button>
                    <button type="submit" class="btn bg-gradient-primary btn-sm">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!--    Modal Tambah pendidikan  -->
    <div class="modal fade" id="addPekerjaan" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Tambah Riwayat Pekerjaan</h5>
                    <i class="material-icons ms-3">login</i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form role="form" class="text-start" action="<?= BASEURL ?>bioUser/addPekerjaan" method="POST">
                        <div class="input-group input-group-static mb-4" required="required">
                            <label class="form-label">Nama Perusahaan</label>
                            <input type="text" name="nama_perusahaan" class="form-control">
                        </div>
                        <div class="input-group input-group-static mb-4" required="required">
                            <label class="form-label">Posisi</label>
                            <input type="text" name="posisi" class="form-control">
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>tanggal_masuk</label>
                            <input type="date" name="tanggal_masuk" class="form-control" required="required"
                                   placeholder="">
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Tanggal Keluar</label>
                            <input type="date" name="tanggal_keluar" class="form-control" placeholder=""
                                   required="required">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary btn-sm" data-bs-dismiss="modal">Close
                    </button>
                    <button type="button" class="btn bg-gradient-primary btn-sm">Tambah</button>
                </div>
            </div>
        </div>
    </div>