<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
          crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css">

    <title>OnlineAV</title>
    <?php
    include ('./functions.php');
    ?>
</head>

<body>
<!-- header kısmı -->
<header id="header">
    <div class="strip  px-4 py-1 bg-light" style="display: flex; justify-content: space-between;">
        <p class="font-size-12 text-black-50 m-0">OnlineAV</p>
        <div class="font-size-14">
            <a href="#" class="px-3 border-right border-left text-dark">Giriş</a>
            <a href="#" class="px-3 border-right text-dark">İstek Listesi</a>
        </div>


    </div>
    <!-- 1.navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">OnlineAV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Ana Sayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kategoriler <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ürünler<i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="+1" aria-disabled="true">Sepet</a>
                    </li>
                </ul>
                <form action="#" class="font-size-14 font-open" >
                    <a href="cart.php" class="py-2 rounded-pill bg-primary">
                <span class="font-size-20 px-2 text-white">
                    <i class="fas fa-shopping-cart"></i>
                </span>
                        <span class=" px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData(table: 'cart')); ?></span>
                    </a>
                </form>
            </div>
        </div>
    </nav>
</header>
<!-- main kısmı -->
<main id="main-site">