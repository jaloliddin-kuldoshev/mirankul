/* dop */
$(".open_all_acc").click(function(e){
  $(this).find("img").toggleClass("more_view");
})
/* dop */
   // for plus and minus 
   $(".prod_rew_amt_ctrl_btn").click(function () {

    var amountInput = $(this).siblings(".prod_rew_amt_ctrl_inp");
    var amount = parseInt(amountInput.val());
    if ($(this).hasClass("minus"))
    {
      if (amount > 1)
      {
        amountInput.val(--amount);
      }
    }
    else if ($(this).hasClass("plus"))
    {
      amountInput.val(++amount);
    }
  });

   $(".prod_rew_amt_ctrl_inp").keyup(function (){

    var checkValue = parseInt($(this).val());

    if (isNaN(checkValue) || checkValue == 0)
    {
      checkValue = 1;
      $(this).val(checkValue);
    }
    else
    {
      $(this).val(checkValue);
    }
  });

// display hide
$(".my_navbar-nav_a").click(function(){
  $("#myNavbar").removeClass('in');
});


 // video


 $(document).ready(function() {
  $('video').mediaelementplayer({
    alwaysShowControls: true,
    videoVolume: 'horizontal',
    features: ['playpause','progress','volume','fullscreen']
  });
});


// acardion
var acc = document.getElementsByClassName("accordionv1");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("activev1");
    var panelv1 = this.nextElementSibling;
    if (panelv1.style.maxHeight){
      panelv1.style.maxHeight = null;
    } else {
      panelv1.style.maxHeight = panelv1.scrollHeight + "px";
    } 
  });
}







$('.myslick').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
});

// $('.single-item').slick();


$('.single-item').slick({
 autoplay: true,
 autoplaySpeed: 10000,

 prevArrow: $(".slick-prev"),
 nextArrow:$(".slick-next")
});



// 3 slick
$('.all-prom-alldiv').slick({
  slidesToShow: 8,
  slidesToScroll: 8,
  autoplay: true,
  autoplaySpeed: 10000,
  // dots: true,
  responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 4,
      slidesToScroll: 4,
      infinite: true,
        // dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    
    ]
  });


// last slick
$('.last_pop_slixck').slick({
  slidesToShow: 4,
  slidesToScroll: 4,
  autoplay: true,
  autoplaySpeed: 10000,
  dots: true,
  responsive: [
  {
    breakpoint: 1200,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: true,
      dots: true
    }
  },
  {
    breakpoint: 992,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2
    }
  },
  {
    breakpoint: 768,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false
    }
  }    
  ]
});




// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
// var btn = document.getElementById("myBtn");
$("#myBtn").click(function(){
  modal.style.display = "block";
})

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
// btn.onclick = function() {
//     modal.style.display = "block";
// }

// When the user clicks on <span> (x), close the modal
$("span").click(function(){
  modal.style.display = "none";
})

// span.onclick = function() {
//     modal.style.display = "none";
// }

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

$(".my_navbar-nav_a.chan_header_a.chan_header_a1").click(function(e){
  document.getElementById("typanel").style.display = "none";
  document.getElementById("modal-1ty").style.display = "block";
})

$("#typanel").click(function(){
  $(".modal-content .close").click();
})



// thank you
$("#modal-1ty button").click(function(e){
  e.preventDefault();
  $("#modal-1ty").css({"display":"none"});
  $("#typanel").css({"display":"block"});
})
// function tymyFunction() {
//     document.getElementById("typanel").style.display = "block";
//     document.getElementById("modal-1ty").style.display = "none";
//     return false;
// }

// click all in one
$("#allinone-buts").click(function(){
  $(".my_navbar-nav_a.chan_header_a.chan_header_a1").click();
})
$("#allinone").click(function(){
  $(".my_navbar-nav_a.chan_header_a.chan_header_a1").click();
})


$("#all-ininaa").click(function(){
  $(".my_navbar-nav_a.chan_header_a.chan_header_a1").click();
})

$("#all-ininaa2").click(function(){
  $(".my_navbar-nav_a.chan_header_a.chan_header_a1").click();
})









// header fixed uchun

var bheader = document.getElementById("bmyHeader");
var bsticky = bheader.offsetTop;

function myFunction() {


  if(window.pageYOffset >= 30){
    bheader.classList.add("bsticky");
  }

  if($("#bmyHeader").hasClass("bsticky")){
    if(window.pageYOffset < 30) {
      $("#bmyHeader").removeClass("bsticky");
    }
  }
  
}







 //top botton
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction();
  myFunction()};
// window.onscroll = function() {};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("topmyBtn").style.display = "block";
  } else {
    document.getElementById("topmyBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
function topFunction() {

 $('html, body').animate({scrollTop:0}, 'slow');
}




// scroll ;;;;;;;;;;;;;;;;;;;;;;;;;;
$(document).ready(function(){
    $('.go_to').click( function(){ // ловим клик по ссылке с классом go_to
        var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
          $('html, body').animate({ scrollTop: $(scroll_el).offset().top - 89 }, 500); // анимируем скроолинг к элементу scroll_el
        }

      return false; // выключаем стандартное действие
    });
      // for  tabs mobile...
    $(".go_to_ul li").click( function(){ // ловим клик по ссылке с классом go_to
        var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
         $('html, body').animate({ scrollTop: $(scroll_el).offset().top - 89 }, 500); // анимируем скроолинг к элементу scroll_el
         $(".go_to_ul li").each(function(index, value){
          $(value).removeClass("active");
        });


         $(this).addClass("active");

         $(".tabs_about .tab-pane").each(function(index, value){
          $(value).removeClass("active");
        })
         $($(this).find("a").attr("href")).addClass("active");
       }

      return false; // выключаем стандартное действие
    });
  });

/*--------------open on for accordion -------------------*/

$(".myacardi-p-btn button").click(function(){

  if($(this).hasClass("open_all_acc")){
    $(".accordionv1:not(.activev1)").click();
  }else{
    $(".accordionv1.activev1").click();
  }
  $(this).toggleClass("open_all_acc");
})



// read more informatinon btn
$(document).ready(function(){
  $(".read_morebtn1").click(function(){
    $(".read_morep1").css("height", "auto");
    $(this).css("display", "none");   
  });
});





//.......................... tabs...................................
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("catabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("catablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" caactive", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " caactive";
}

$(".inner a").click(function(e){
  e.preventDefault();

  var a_href = $(this).attr("href");
  var div_url = $(this).find("div").data("src");

  $("#social_img_1").attr("href", a_href);
  $("#social_img_1 div.download_imgfirst").css({"background-image": "url("+div_url+")"});
  return false;
}) 

// Get the element with id="defaultOpen" and click on it
//document.getElementById("cadefaultOpen").click();

// $("#cadefaultOpen").click();





// header display hide




$("a.go_to").click(function(e){
  e.preventDefault();
  $(".navbar-toggle.my_navbar-toggle_add.collapsed").click();
});

$(document).on("click", ".add-cart", function (e) {
  e.preventDefault();
  var id = $(this).data('id');
  cart = $('#cart').val();
  $.ajax({
    type: 'GET',
    url: '/public/getCart/',
    data: {id: id, cart: cart},
    success: function (res) {
      location.reload();
      alert('Спасибо! Ваш продукт добавлен в корзину');
    },
    error: function () {
      alert('Ошибка при добавлении в корзину');
    }
  })
});
$(document).on("click", ".minus", function (e) {
  e.preventDefault();
  var id = $(this).data('id');
  $.ajax({
    type: 'GET',
    url: '/public/minus/',
    data: {id: id},
    success: function (res) {
      location.reload();
      alert('Спасибо! Ваш продукт добавлен в корзину');
    },
    error: function () {
      alert('Ошибка при добавлении в корзину');
    }
  })
});
$(document).on("click", ".plus-cart", function (e) {
  e.preventDefault();
  var id = $(this).data('id');
  $.ajax({
    type: 'GET',
    url: '/public/getCart/',
    data: {id: id},
    success: function (res) {
      location.reload();
      alert('Спасибо! Ваш продукт добавлен в корзину');
    },
    error: function () {
      alert('Ошибка при добавлении в корзину');
    }
  })
});
$(document).on('click', '.del-item', function () {

  var id = $(this).data('id');

  $.ajax({
    url: '/public/del-item',
    data: {id: id},
    type: 'GET',
    success: function (res) {
     location.reload();
            //alert('Р’Р°С€ РїСЂРѕРґСѓРєС‚ СѓРґР°Р»РµРЅРѕ РёР· РєРѕСЂР·РёРЅС‹');
          },
          error: function () {
            alert('РћС€РёР±РєР° РїСЂРё СѓРґР°Р»РµРЅРёРё');
          }
        });

});
$(window).on('load', function(){
  $('.products_lochin').attr('data-id', $('.catablinks').eq(0).attr('data-id')); 
});

$(document).on('click', '.catablinks', function(){
  $('.products_lochin').attr('data-id', $(this).attr('data-id')); 
});
$(document).ready(function(){
 $(document).on('click','#btn-more',function(){
   var id = $(this).data('id');
   var products_id = $(this).data('products_id');
   $("#btn-more").html("Загружется....");
   $.ajax({
    url : '/loadDataAjax',
    method : "GET",
    data : {id:id, products_id:products_id},
    dataType : "text",
    success : function (data)
    {
      if(data != '') 
      {
        $('#remove-row').remove();
        $('#'+id+1).append(data);
      }
      else
      {
        $('#btn-more').html("No Data");
      }
    }
  });
 });  
}); 