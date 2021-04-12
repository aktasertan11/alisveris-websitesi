<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['silme_submit'])){

            $silinenitem = $Cart->deleteCart($_POST['item_id']);
        }
}
?>

<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class=" font-size-20">Sepetim</h5>

        <!-- sepet items   -->
        <div class="row">
            <div class="col-sm-9">
                <?php

                foreach ($product->getData(table: 'cart') as $item):
                    $cart =$product->getProduct(item_id: $item['item_id'] );
                    $subTotal[]= array_map(function ($item){

                ?>
                <!-- cart item -->
                <div class="row border-top py-3 mt-3">

                    <div class="col-sm-2">
                        <img src="<?php echo $item['item_image']?? "./assets/product/1.png"?>" style="height: 120px;" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class=" font-size-20"><?php echo $item['item_name']?? "unknown"?></h5>
                        <small><?php echo $item['item_brand']?? "unknown"?></small>
                        <!-- ürün oylaması -->
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2  font-size-14">20 oylama</a>
                        </div>
                        <!--  ürün oylaması-->

                        <!-- adet sayısı -->
                        <div class="adet d-flex pt-2">
                            <div class="d-flex  w-25">
                                <button class="adet-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0' ?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?php echo $item['item_id'] ?? '0' ?>" class="adet_sayısı border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="<?php echo $item['item_id'] ?? '0' ?>" class="adet-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                            <button type="submit" class="btn  text-danger px-3 border-right" name="silme_submit" >Sil</button>
                            </form>
                            <button type="submit" class="btn  text-danger">Daha sonrası için kaydet</button>

                        </div>
                        <!-- adet sayısı -->

                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger ">
                            <span class="product_price" data-id="<?php echo $item['item_id'] ?? '0' ?>"><?php echo $item['item_price']?? 0?>₺</span>
                        </div>
                    </div>
                </div>
                <!-- !cart item -->

                <?php
                        return $item['item_price'];
                },$cart);

                endforeach;

                ?>
            </div>

            <!-- toplam section-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 text-success py-3"><i class="fas fa-check"></i> Kargo ücretsiz.</h6>
                    <div class="border-top py-4">
                        <h5 class="font-size-20">Toplam (<?php echo isset($subTotal) ? count($subTotal) : 0; ?>ürün):&nbsp; <span class="text-danger"><span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?>₺</span> </span> </h5>
                        <button type="submit" class="btn btn-warning mt-3">Satın Al</button>
                    </div>
                </div>
            </div>
            <!-- !toplam section-->
        </div>
        <!--  !sepet items   -->
    </div>
</section>
