<?php include 'header.php'; ?>

<?php include 'head1.php'; ?>

<div class="containCheki">
  
  <div id="changeListShowAll"><?php include 'inc/list_all.html'; ?></div>
  <div id="changeListShowCheki"><?php include 'inc/list_cheki.html'; ?></div>
  <div id="changeListShowSchet"><?php include 'inc/list_schet.html'; ?></div>
  <div id="changeListShowSum"><?php include 'inc/list_all_sum.html'; ?></div>

  
<script type="text/javascript">
$("#changeList").change(function(){
								 
   if($(this).val()=="changeListShowAll")
   {    
       $("div#changeListShowAll").show();
	   $("div#changeListShowSum").hide();
   } else {
	   $("div#changeListShowAll").hide();
   }
								 
   if($(this).val()=="changeListShowCheki")
   {    
       $("div#changeListShowCheki").show();
	   $("div#changeListShowSum").hide();
   } else {
	   $("div#changeListShowCheki").hide();
   }
   
   if($(this).val()=="changeListShowSchet")
   {    
       $("div#changeListShowSchet").show();
	   $("div#changeListShowSum").hide();
   } else {
	   $("div#changeListShowSchet").hide();
   }
  
});

$("#changeListDate").change(function(){
	
   if($(this).val()=="changeListShowAllSum")
   {    
       $("div#changeListShowSum").show();
       $("div#changeListShowAll").hide();
       $("div#changeListShowCheki").hide();
	   $("div#changeListShowSchet").hide();
   }
   
   if($(this).val()=="changeListShowAllDate")
   {    
       $("div#changeListShowSum").hide();
       $("div#changeListShowAll").show();
       $("div#changeListShowCheki").hide();
	   $("div#changeListShowSchet").hide();
   }
  
});

</script>
  </div>
  

  <a href="#" id="modal2" class="floatBut">
    <span><img src="css/img/ic_plus.svg"></span>
    <p>СОЗДАТЬ</p>
  </a>
  <div class="modal2 modal2hide">
  <div class="modal2cont">
  
    <div style="text-align:right"><a href="#" class="modal2hide"><img src="css/img/close.svg" /></a></div>
    <ul class="modalList">
    <li><a href="sozdanie_cheka.php">Чек</a></li>
    <li class="modalListEnd"><a href="sozdanie_scheta.php">Счет</a></li>
    </ul>
  </div>
</div>
<script type="text/javascript">
$("#modal2").click(function(){
    $(".modal2").show();
});

$(".modal2hide").click(function(){
    $(".modal2").hide();
});
</script>



<div class="downPanel">
  <div style="padding: 3px 8px; font-size: 13px">
<div style="margin: 0 0 2px 0">Всего чеков: <strong>2</strong></div>
На сумму: <strong>8000 р.</strong>
    </div>
</div>

<?php include 'footer.php'; ?>