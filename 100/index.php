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

<?php include 'footer.php'; ?>