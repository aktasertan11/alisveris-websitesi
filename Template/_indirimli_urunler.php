<?php


$brand = array_map(function ($pro){ return $pro['item_brand']; }, $product_shuffle);
$unique = array_unique($brand);
sort($unique);
shuffle($product_shuffle);


//Request
if($_SERVER['REQUEST_METHOD'] =="POST"){
    if (isset($_POST['indirimli_urunler_submit'])){
        $Cart->addToCart($_POST['user_id'],$_POST['item_id']);

    }

}
$in_cart = $Cart->getCartId($product->getData(table: 'cart'));
?>

<section id="indirimli-urunler">
    <div class="container">
        <h4 class="font-size-20">İndirimli Ürünler</h4>
        <div id="filters" class="button-group " style="text-align: right;">
            <button class="btn is-checked" data-filter="*">Tüm Markalar</button>

            <?php
            array_map(function ($brand){
                printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
            }, $unique);

            ?>

        </div>
        <hr>
        <div class="grid" style="margin-left: 80px;">
            <?php array_map(function ($item) use($in_cart){?>
            <div class="grid-item border <?php echo$item['item_brand'] ?? "Marka"; ?>">
                <div class="item py-2" style="width: 210px;">
                    <div class="product">
                        <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"> <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"?>" alt="13" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name'] ?? "unknown"?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="fiyat py-2">
                                <span><?php echo $item['item_price'] ?? "Unknown"?>₺</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']??1?>">
                                <input type="hidden" name="user_id" value="<?php echo 1?>">
                                <?php
                                if (in_array($item['item_id'], $in_cart)){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">Sepetinizde</button>';
                                }else{
                                    echo '<button type="submit" name="indirimli_urunler_submit" class="btn btn-warning font-size-12">Sepete Ekle</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php },$product_shuffle)?>
        </div>
    </div>

</section>