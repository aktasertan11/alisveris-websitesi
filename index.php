<?php
ob_start();
include('header.php');
?>
    <!--slider  -->
<?php
include('./Template/_slider-area.php');
?>

    <!-- çok satanlar -->
<?php
include('./Template/_cok-satanlar.php');
?>
    <!-- indirimli ürünler -->
<?php
include('./Template/_indirimli_urunler.php');
?>
    <!-- reklam kısmı -->
<?php
include('./Template/_reklam.php');
?>

<?php
include('footer.php');
?>