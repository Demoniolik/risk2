function logoHide(){
  $('.container-logo').css('display', 'none');
  $('.content').css('display', 'block');

}
setTimeout(logoHide, 1000);

$(".category .cat").click(function(e){
  e.preventDefault();
  $(".category .cat").removeClass("active");
  $(this).toggleClass("active");
  itemsSelected();
});


function itemsSelected() {

  if ($(".cat.drinks").hasClass("active")) {
    $(".items").removeClass("active");
    $(".items.drinks").toggleClass("active");
  } else if($(".cat.salad").hasClass("active")) {
    $(".items").removeClass("active");
    $(".items.salad").toggleClass("active");
  } else if($(".cat.firstdish").hasClass("active")) {
    $(".items").removeClass("active");
    $(".items.firstdish").toggleClass("active");
  } else if ($(".cat.pizza").hasClass("active")) {
    $(".items").removeClass("active");
    $(".items.pizza").toggleClass("active");
  };

};

function openCart() {
  $(".container-cart").toggleClass("show");
}

$(".container-cart").click(function(){
  $(this).removeClass("show");
});

function setHeiHeight() {
    $('.content').css({
        height: $(window).height() + 'px'
    });
}
setHeiHeight(); // устанавливаем высоту окна при первой загрузке страницы
$(window).resize( setHeiHeight ); // обновляем при изменении размеров окна


/*var countChecked = function() {
  var count = $('input[type=checkbox]:checked').length;
  $( ".amount-items" ).text(count);
  console.log(count);
};
countChecked();
$( "label.item").on( "click", countChecked );
*/
var count = 0;

    $(function() {
        displayCount();
        $('input[type=checkbox]').click(function() {
            if (this.checked) {
                count++;
            } else {
                count--;
            }
            displayCount();
        });
        
    });

    function displayCount() {
        $('.amount-items').text(count);
    }

 var form = document.getElementById("form");
        const request = new XMLHttpRequest();
        request.open("get","script.php");
        request.onload = function() {
        console.log(request.responseText);
        request.send(new FormData(form));
      }