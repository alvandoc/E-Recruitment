<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= BASEURL ?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= BASEURL ?>assets/img/logo.png">
    <title>
        E-Recruitment | Admin
    </title>

    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>

    <link href="<?= BASEURL ?>assets/css/nucleo-icons.css" rel="stylesheet"/>
    <link href="<?= BASEURL ?>assets/css/nucleo-svg.css" rel="stylesheet"/>

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <link id="pagestyle" href="<?= BASEURL ?>assets/css/material-dashboard.min.css?v=3.0.6" rel="stylesheet"/>


</head>

<body class="g-sidenav-show bg-gray-200">


<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3  bg-gradient-dark"
       id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0"
           href=" https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/analytics.html "
           target="_blank">
            <img src="<?= BASEURL ?>assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Bumi Padjajaran</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-2 mt-0">
                <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav"
                   role="button" aria-expanded="false">
                    <img src="<?= BASEURL ?>assets/img/team-3.jpg" class="avatar">
                    <span class="nav-link-text ms-2 ps-1">Alfan Fauzan</span>
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
                            <a class="nav-link text-white " href="<?= BASEURL ?>admin/keluar">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal  ms-3  ps-1"> Logout </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <hr class="horizontal light mt-0">
            <li class="nav-item">
                <a class="nav-link text-white active" href="<?= BASEURL ?>Admin">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}"><span
                                class="material-icons-round">
perm_identity
</span></i>
                    <span class="nav-link-text ms-2 ps-1">Profil</span>
                </a>
            </li>
            <li class="nav-item mb-2 mt-0">
                <a data-bs-toggle="collapse" href="#lowongan" class="nav-link text-white" aria-controls="ProfileNav"
                   role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}"><span
                                class="material-icons-round">
receipt_long
</span></i>
                    <span class="nav-link-text ms-2 ps-1">Lowongan</span>
                </a>
                <div class="collapse" id="lowongan" style>
                    <ul class="nav ">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= BASEURL ?>Lowongan/">
                                <span class="sidenav-mini-icon"> MP </span>
                                <span class="sidenav-normal  ms-3  ps-1"> Daftar Lowongan </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="<?= BASEURL ?>Lowongan/tambahLowongan">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal  ms-3  ps-1"> Tambah Lowongan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item mb-2 mt-0">
                <a data-bs-toggle="collapse" href="#psikotest" class="nav-link text-white" aria-controls="ProfileNav"
                   role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}"><span
                                class="material-icons-round">
quiz
</span></i>
                    <span class="nav-link-text ms-2 ps-1">Psikotest</span>
                </a>
                <div class="collapse" id="psikotest" style>
                    <ul class="nav ">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= BASEURL ?>psikotest">
                                <span class="sidenav-mini-icon"> DP </span>
                                <span class="sidenav-normal  ms-3  ps-1">Daftar Psikotest</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="<?= BASEURL ?>psikotest/soalPsikotest">
                                <span class="sidenav-mini-icon"> SP </span>
                                <span class="sidenav-normal  ms-3  ps-1"> Soal Psikotest</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#wawancara" class="nav-link text-white" aria-controls="ProfileNav"
                   role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}"><span
                                class="material-icons-round">
summarize
</span></i>
                    <span class="nav-link-text ms-2 ps-1">Wawancara</span>
                </a>
                <div class="collapse" id="wawancara" style>
                    <ul class="nav ">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= BASEURL ?>wawancara">
                                <span class="sidenav-mini-icon"> DP </span>
                                <span class="sidenav-normal  ms-3  ps-1">Daftar Wawancara</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= BASEURL ?>wawancara/tambahJadwalInterview">
                                <span class="sidenav-mini-icon"> DP </span>
                                <span class="sidenav-normal  ms-3  ps-1">Jadwal Wawancara</span>
                            </a>
                        </li>
                    </ul>
            </li>
        </ul>
    </div>
</aside>

