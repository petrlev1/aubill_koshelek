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
