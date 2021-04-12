$(document).ready(function(){

//banner owl carousel
    $("#slider-area .owl-carousel").owlCarousel({

        dots:true,
        items:1
    });

    $("#cok-satanlar .owl-carousel").owlCarousel({

        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
//cok satanlar
// isoope filter
    var $grid =$(".grid").isotope({

        itemSelector:'.grid-item',
        layoutMode:'fitRows'
    });
// butona tıklayınca ürünleri filtreleme
    $(".button-group").on("click","button",function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter:filterValue});

    });

//adet sayısını
    let $adet_up = $(".adet .adet-up");
    let $adet_down = $(".adet .adet-down");
//let $adet_text =$(".adet .adet_sayısı");
//click on,
    $adet_up.click(function(e){

        let $input = $(`.adet_sayısı[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "Template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function (result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() >= 1 && $input.val() <= 9){
                    $input.val(function(i, oldval){
                        return ++oldval;
                    });

                    // increase price of the product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }

            }}); // closing ajax request
    }); // closing qty up button

    /*
    $adet_up.click(function(e){
        let $adet_text = $(`.adet_sayısı[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);
        console.log($price);
        //change product price with ajax
        $.ajax({uri :"Template/ajax.php", type:'post', data :{itemid: $(this).data("id")}, success:function (result){

            let obj = JSON.parse(result);
            let item_price = obj[0]['item_price'];

                if ($adet_text.val() >= 1 && $adet_text.val() <=9) {
                    $adet_text.val(function(i,oldval){
                        return ++oldval;
                    });
                }
                    //fiyat yükseltme
                $price.text(parseInt( item_price * $adet_text.val()).toFixed(2));

            }});


    }); */
    $adet_down.click(function(e){
        let $adet_text = $(`.adet_sayısı[data-id='${$(this).data("id")}']`);
        if ($adet_text.val() > 1 && $adet_text.val() <=10) {
            $adet_text.val(function(i,oldval){
                return --oldval;
            });
        }
    });


});


