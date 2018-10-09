<div class="modal2menu modal2hide">
  <div class="modal2cont">
    <ul class="modalList">
    <li><a class="content_menu_generalUser">Мой кошелек</a></li>
    <li><a class="content_menu_juniorUser">Мой семейный кошелек
<div style="display:block; font-size: 11px; margin: 5px 0 0 0;">Старший пользователь: <strong>Иванов Константин</strong></div></a></li>
    <li class="modalListEnd"><a class="content_menu_generalUser2">Кафе Березка</a></li>
    </ul>
  </div>
</div>





<div class="head1Menu">
  
  
  <?php 
   
  if ( $showBack == "1" ) { 
  echo "<td width=\"1\"><a href=\"menu.php\"><img src=\"css/img/arBack.svg\"></a></td>"; 
  }
  ?>
  
  
    <img src="css/img/ic_headMenu_koshel.svg" class="ic_headMenu_koshel">
<div id="modal1ChangeUser" class="headMenu modal2a">
 <div class="headMenuPic"></div>
<div class="headMenuTit">Иванов Иван</div>
<div class="headMenuTit2">Старший кошелек</div>
</div>


<script type="text/javascript">
$("#modal1ChangeUser").click(function() {$(".modal1ChangeUser").show();});

$(".content_menu_generalUser").click(function()
{
	$("div#content_menu_juniorUser").hide();
	$("div#content_menu_generalUser").show();
	$(".modal1").hide();
	document.getElementById('modal1ChangeUser').innerHTML = '<div class="headMenuPic"></div><div class="headMenuTit">Иванов Иван</div><div class="headMenuTit2"><strong>Старший кошелек</strong></div>';
});

$(".content_menu_generalUser2").click(function()
{
	$("div#content_menu_juniorUser").hide();
	$("div#content_menu_generalUser").show();
	$(".modal1").hide();
	document.getElementById('modal1ChangeUser').innerHTML = '<div class="headMenuPic"></div><div class="headMenuTit">Кафе Березка</div><div class="headMenuTit2">Старший кошелек</div>';
});

$(".content_menu_juniorUser").click(function()
{
	$("div#content_menu_juniorUser").show();
	$("div#content_menu_generalUser").hide();
	$(".modal1").hide();
	document.getElementById('modal1ChangeUser').innerHTML = '<div class="headMenuPic"></div><div class="headMenuTit">Мой семейный кошелек</div><div class="headMenuTit2">Младший кошелек</div><div class="headMenuTit3">Старший пользователь: <strong>Иванов Константин</strong></div>';
});

$(".editUserTitle").click(function() {$(".modal1ChangeTitle").show();});

</script>
   

</div>


<script type="text/javascript">
$(".modal2a").click(function(){
    $(".modal2menu").show();
});

$(".modal2hide").click(function(){
    $(".modal2menu").hide();
});
</script>