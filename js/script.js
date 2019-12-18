
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

