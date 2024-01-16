<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="icon" href="<?= base_url('assets/'); ?>images/favicon.png">

    <title><?= $title; ?></title>


    <!-- CSS FILES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css'); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap-icons.css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.theme.default.min.css" />
    <link href="<?= base_url('assets/'); ?>css/templatemo-pod-talk.css" rel="stylesheet" />

    <!--

TemplateMo 584 Pod Talk

https://templatemo.com/tm-584-pod-talk

-->
</head>

<body>
    <main>
        <div class="row">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand me-lg-5 me-0" href="/thetaweb">
                        <img src="<?= base_url('assets/'); ?>images/favicon.png" class="logo-image img-fluid" alt="templatemo pod talk" />
                    </a>

                    <form action="#" method="get" class="custom-form search-form flex-fill me-3" role="search">
                        <div class="input-group input-group-lg">
                            <input name="search" type="search" class="form-control" id="search" placeholder="Search Asessment" aria-label="Search" />

                            <button type="submit" class="form-control" id="submit">
                                <i class="bi-search"></i>
                            </button>
                        </div>
                    </form>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="/thetaweb">Beranda</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/thetaweb/home/about">Tentang Kami</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produk</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="listing-page.html">Listing Page</a></li>

                                    <li><a class="dropdown-item" href="detail-page.html">Detail Page</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Kontak</a>
                            </li>
                        </ul>

                        <div class="ms-4">
                            <a href="#section_3" class="btn custom-btn custom-border-btn smoothscroll">Tes Online</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">

                        <h2 class="mb-0"><?= $title; ?></h2>
                    </div>

                </div>
            </div>
        </header>