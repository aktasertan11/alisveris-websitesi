<?php
$item_id = $_GET['item_id']??1;
foreach($product->getData() as $item):
    if($item['item_id']== $item_id):


?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image']?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-success form-control"> Satın Al</button>

                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-warning form-control"> Sepete Ekle</button>
                    </div>
                </div>

            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-size-20"> <?php echo $item['item_name']??"unknown" ?></h5>
                <small><?php echo $item['item_brand']?? "unknown" ?></small>
                <div class="">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                        <a href="#" style="font-size: 0.7rem;" class="px-2"> 20 oylama üzerinden | 15 kullanıcı yorumu</a>

                    </div>
                    <hr class="m-1">

                    <!-- fiyat bilgilendirme -->
                    <table class="my-3">
                        <tr class="font-size-14">
                            <td>Eski Fiyat:</td>
                            <td> <strike><?php echo $item['item_price'] +100 ?>₺</strike></td>
                        </tr>
                        <tr class="font-size-14">
                            <td>Fiyat:</td>
                            <td class="font-size-20 text-danger"> <span><?php echo $item['item_price']?? "unknown" ?>₺</span> <span class="text-dark font-size-12">KDV Dahil fiyattır.</span></td>
                        </tr>
                        <tr class="font-size-14">
                            <td>Kazanç:</td>
                            <td> 100₺</td>
                        </tr>
                    </table>
                    <div id="kurallar">
                        <div class="d-flex">
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2" style="color: blue;">
                                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" style="font-size: 0.6rem;"> 10 Gün içinde Değişim imkanı</a>
                            </div>
                            <div class="return text-center mr-5 mx-3">
                                <div class="font-size-20 my-2" style="color: orange;">
                                    <span class="fas fa-truck border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" style="font-size: 0.6rem;"> 3 iş günü içinde adrese teslim</a>
                            </div>
                            <div class="return text-center mr-5 mx-3">
                                <div class="font-size-20 my-2" style="color: green;">
                                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" style="font-size: 0.6rem;"> 2 Yıl Garanti</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- şipariş detayları -->
                    <div id="siparis-detaylari" class="d-flex flex-column text-dark">
                        <small> Kargoya verilme tarihi: 5 mart- 8 mart</small>
                        <small>Satıcı: <a href="http://www.<?php echo $item['item_brand']?? "unknown" ?>.com"><?php echo $item['item_brand']?? "unknown" ?> </a> (4.9 Puan | 200 oylama)</small>
                        <small><i class="fas fa-map-marker-alt color-primary"></i> İstanbul/Türkiye</small>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="color my-3">
                                <div class="d-flex justify-content-between">
                                    <h6>Color:</h6>
                                    <div class="p-2 rounded-circle" style="background-color: orangered;"><button class="btn font-size-14"></button></div>
                                    <div class="p-2 rounded-circle" style="background-color: black;"><button class="btn font-size-14"></button></div>
                                    <div class="p-2 rounded-circle" style="background-color: grey;"><button class="btn font-size-14"></button></div>

                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="adet d-flex">
                                <h6>ADET</h6>
                                <div class="px-4 d-flex">
                                    <button class="adet-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                    <input type="text" class="adet_sayısı border px-2 bg-light text-center " data-id="pro1" disabled value="1" placeholder="1">
                                    <button class="adet-down border bg-light " data-id="pro1"><i class="fas fa-angle-down"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="size my-3">
                        <h6>Hafıza:</h6>
                        <div class="d-flex justify-content-between w-75">
                            <div class="border p-2">
                                <button class="btn p-0 font-size-14">64GB</button>

                            </div>
                            <div class="border p-2">
                                <button class="btn p-0 font-size-14">128GB</button>

                            </div>
                            <div class="border p-2">
                                <button class="btn p-0 font-size-14">256GB</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 py-5">
                <h6> Ürün özellikleri</h6>
                <hr>
                <p class="font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum veniam sapiente voluptate ea amet, modi error excepturi recusandae, autem quasi mollitia dolor voluptas quod numquam iusto animi ut at assumenda, enim voluptatem minus totam facilis culpa. Quas iste libero eos dolore reprehenderit unde repellat excepturi. Voluptatum molestiae cum eos laborum repudiandae quas odit! Eum eos doloremque sed voluptatum neque, earum sint ipsa tempora possimus ut veniam culpa fugit voluptates alias vero aliquid. Accusamus facilis incidunt doloremque, eaque error modi debitis nesciunt officiis, excepturi earum quos amet temporibus eligendi sed itaque voluptates maiores. Eaque consequuntur aut reiciendis dolor aperiam quibusdam exercitationem animi minus dolorum expedita modi obcaecati nam mollitia deleniti maiores ad vitae, voluptas fugiat enim eum. Tempore placeat debitis harum aliquam veniam autem explicabo perferendis, provident ea libero nisi, possimus maxime iusto! Eos, fuga quis in at fugit molestias sapiente harum aliquam natus laboriosam, exercitationem iusto aspernatur dolorem porro ipsa ipsum voluptatum expedita enim minima? Enim, ex. Vel aperiam velit delectus, necessitatibus omnis numquam inventore modi esse eos corrupti, eius similique accusamus commodi ab quaerat ipsam ut magnam ad dolorem harum. Ut eligendi exercitationem, velit eveniet repudiandae amet laboriosam rerum cumque modi voluptates quaerat, beatae adipisci? Animi tempora explicabo quibusdam.</p>
            </div>
        </div>
    </div>
</section>

<?php
        endif;
        endforeach;

        ?>