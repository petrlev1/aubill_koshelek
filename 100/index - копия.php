<?php include 'header.php'; ?>

<?php include 'head1.php'; ?>

<div class="containCheki">
  
  <div id="changeListShowAll"><?php include 'inc/list_all.html'; ?></div>
  <div id="changeListShowCheki"><?php include 'inc/list_cheki.html'; ?></div>
  <div id="changeListShowSchet"><?php include 'inc/list_schet.html'; ?></div>

  
<script type="text/javascript">
$("#changeList").change(function(){
								 
   if($(this).val()=="changeListShowAll")
   {    
       $("div#changeListShowAll").show();
   } else {
	   $("div#changeListShowAll").hide();
   }
								 
   if($(this).val()=="changeListShowCheki")
   {    
       $("div#changeListShowCheki").show();
   } else {
	   $("div#changeListShowCheki").hide();
   }
   
   if($(this).val()=="changeListShowSchet")
   {    
       $("div#changeListShowSchet").show();
   } else {
	   $("div#changeListShowSchet").hide();
   }
  
});

</script>
  </div>

<?php include 'footer.php'; ?>