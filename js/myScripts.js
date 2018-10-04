//модальное окно
$(".modal1Close").click(function() {$(".modal1").hide();});


//выпадающий список
$(".dropMenu2").hide(); $(".dropMenu2").css({'opacity': '0'});
$("#dropListDocs").click(function() { $("#dropListDocs2").show(); $(".dropMenu2").css({'opacity': '1'}); });
$("#dropListDate").click(function() { $("#dropListDate2").show(); $(".dropMenu2").css({'opacity': '1'}); });
$(".dropMenuClose").click(function() { $(".dropMenu2").hide(); $(".dropMenu2").css({'opacity': '0'}); });


//меню
$(".menuAll").hide();
$(".genMenu").click(function() { $(".menuAll").show(); $(".frameMenu").css({'left': '0'}); });
$(".menuAll").click(function() { $(".frameMenu").css({'left': '-320px'}); setTimeout(function() { $(".menuAll").hide(); }, (1 * 380));  });


//события скролла
var lastScrollTop = 0;

$("#containCheki").scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){
       //$( ".head1 , .indFilters" ).hide();
	   $( ".head1" ).css({'opacity': '0'});
	   $( ".tab2" ).css({'top': '24px' , 'box-shadow': '0 2px 2px rgba(0,0,0,0.3)' });
	   $( ".indFilters" ).css({'opacity': '0' , 'top': '0'});
	   $(".containCheki").css({'top': '72px'});
	   
	   $(".floatBut").css({'width': '55px'}); setTimeout(function() { $(".floatBut p").hide(); }, (1 * 200));
	   
   } else {
	   $( ".head1" ).css({'opacity': '1'});
	   $( ".tab2" ).css({'top': '64px' , 'box-shadow': '0 0 0 rgba(0,0,0,0)' });
      $(".indFilters").css({'opacity': '1' , 'top': '112px'});
	  $(".containCheki").css({'top': '148px'});
	  
	  $(".floatBut").css({'width': '150px'}); setTimeout(function() { $(".floatBut p").show(); }, (1 * 200));
   }
   lastScrollTop = st;
});

$(".contain2").scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){
	   $(".floatBut").css({'width': '55px'}); setTimeout(function() { $(".floatBut p").hide(); }, (1 * 200));
	   
   } else {
	  $(".floatBut").css({'width': '150px'}); setTimeout(function() { $(".floatBut p").show(); }, (1 * 200));
   }
   lastScrollTop = st;
});





/* $(document).load($(window).bind("load . resize", checkPosition));

function checkPosition()
{
    if($(window).width() < 576)
    {
        $(".head1").css({ 'display': 'none' });
    } else {
        $(".head1").css({ 'display': 'block' });
    }
} */