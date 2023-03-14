<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIG Persebaran Sentra IKM, Eksportir dan Pasar Rakyat</title>
    <!-- BOOTSTRAP STYLES-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- DATATABLES-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Search select option -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />
    <!-- LIBRARY LEAFET -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <!-- Internal CSS -->
    <style>
        html,
        body {
            margin: 0;
            height: 100%;
            padding: 0;
        }

        #app-nav-bar {
            display: block;
            width: 100%;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .dropdown-menu li {
            position: relative;
        }

        .dropdown-menu .dropdown-submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -7px;
        }

        .dropdown-menu .dropdown-submenu-left {
            right: 100%;
            left: auto;
        }

        .dropdown-menu>li:hover>.dropdown-submenu {
            display: block;
        }

        td {
            text-align: center;
            vertical-align: middle;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }

        .form-signin .checkbox {
            font-weight: normal;
        }

        .form-signin .form-control {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="navbar navbar-default nav-fixed-top" role="navigation" id="app-nav-bar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SIG</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?= base_url('User'); ?>" data-toggle="collapse" data-target=".navbar-collapse.in">Beranda</a></li>
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Data Master <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url('User/ikm'); ?>" data-toggle="collapse" data-target=".navbar-collapse.in">Data Sentra IKM</a></li>
                            <li><a href="<?= base_url('User/ekspor'); ?>" data-toggle="collapse" data-target=".navbar-collapse.in">Data Eksportir</a></li>
                            <li><a href="<?= base_url('User/pasar'); ?>" data-toggle="collapse" data-target=".navbar-collapse.in">Data Pasar Rakyat</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Kabupaten/Kota <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in">Kabupaten Bantul &raquo;</a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li><a class="dropdown-item" href="<?= base_url('User/sentraBT'); ?>">Data Sentra IKM</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('User/eksporBT'); ?>">Data Eksportir</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('User/pasarBT'); ?>">Data Pasar Rakyat</a></li>
                                </ul>
                            </li>
                            <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in">Kabupaten Gunungkidul &raquo;</a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li><a class="dropdown-item" href="<?= base_url('User/sentraGK'); ?>">Data Sentra IKM</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('User/eksporGK'); ?>">Data Eksportir</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('User/pasarGK'); ?>">Data Pasar Rakyat</a></li>
                                </ul>
                            </li>
                            <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in">Kabupaten Kulon Progo &raquo;</a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li><a class="dropdown-item" href="<?= base_url('User/sentraKP'); ?>">Data Sentra IKM</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('User/eksporKP'); ?>">Data Eksportir</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('User/pasarKP'); ?>">Data Pasar Rakyat</a></li>
                                </ul>
                            </li>
                            <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in">Kabupaten Sleman &raquo;</a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li><a class="dropdown-item" href="<?= base_url('User/sentraSL'); ?>">Data Sentra IKM</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('User/eksporSL'); ?>">Data Eksportir</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('User/pasarSL'); ?>">Data Pasar Rakyat</a></li>
                                </ul>
                            </li>
                            <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in">Kota Yogyakarta &raquo;</a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li><a class="dropdown-item" href="<?= base_url('User/sentraYK'); ?>">Data Sentra IKM</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('User/eksporYK'); ?>">Data Eksportir</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('User/pasarYK'); ?>">Data Pasar Rakyat</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url('User/upload'); ?>" data-toggle="collapse" data-target=".navbar-collapse.in">File Master</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= base_url('Login'); ?>" data-toggle="collapse" data-target=".navbar-collapse.in">Login</a></li>
                </ul>
            </div>
        </div>
    </div>