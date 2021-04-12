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

//adet sayısını azaltma
let $adet_up = $(".adet .adet-up");
let $adet_down = $(".adet .adet-down");
//let $adet_text =$(".adet .adet_sayısı");
//click on
$adet_up.click(function(e){
    let $adet_text = $(`.adet_sayısı[data-id='${$(this).data("id")}']`);
if ($adet_text.val() >= 1 && $adet_text.val() <=9) {
    $adet_text.val(function(i,oldval){
        return ++oldval;
    });
}
});
$adet_down.click(function(e){
    let $adet_text = $(`.adet_sayısı[data-id='${$(this).data("id")}']`);
    if ($adet_text.val() > 1 && $adet_text.val() <=10) {
        $adet_text.val(function(i,oldval){
            return --oldval;
        });
    }
    });


});


