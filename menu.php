<?php include 'header.php'; ?>

<?php
include 'head_menu.php';
?>

<div class="contain2" style="top: 103px">
<div class="containAll">

<div id="content_menu_generalUser">
  <?php include 'inc/content_menu_generalUser.html'; ?>
</div>

<div id="content_menu_juniorUser"><?php include 'inc/content_menu_juniorUser.html'; ?></div>

    </div>
    </div>
    
    <script type="text/javascript">
$("#content_menu_User").change(function(){
								 
   if($(this).val()=="content_menu_generalUser")
   {    
       $("div#content_menu_generalUser").show();
	   $("div#content_menu_juniorUser").hide();
   } else {
	   $("div#content_menu_juniorUser").show();
	   $("div#content_menu_generalUser").hide();
   }
  
});

</script>
    

<?php include 'footer.php'; ?>