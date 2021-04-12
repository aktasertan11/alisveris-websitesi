<?php



shuffle($product_shuffle);


//Request
if($_SERVER['REQUEST_METHOD'] =="POST"){
    if (isset($_POST['cok-satanlar_submit'])){
        $Cart->addToCart($_POST['user_id'],$_POST['item_id']);

    }

}

?>

<section id="cok-satanlar">
    <div class="container py-5">
        <h4 class="font-size-20">Çok Satanlar</h4>
        <hr>

        <!-- ikinci slider cok satanlar için -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item){?>
            <div class="item py-2">
                <div class="product">
                    <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"> <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"?>" alt="1" class="img-fluid"></a>
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
                            if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">Sepetinizde</button>';
                            }else{
                                echo '<button type="submit" name="cok-satanlar_submit" class="btn btn-warning font-size-12">Sepete Ekle</button>';
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <?php }?>

        </div>


    </div>
</section>