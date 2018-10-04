<div class="frameMenu">
  <div class="menuCont">
    
    <?php
include 'head_menu.php';
?>
    
    <div class="containAll containAllMenu">
      
      <div id="content_menu_generalUser">
        <?php include 'inc/content_menu_generalUser.html'; ?>
      </div>
      
      <div id="content_menu_juniorUser"><?php include 'inc/content_menu_juniorUser.html'; ?></div>
      
    </div>
  </div>
</div>

<div class="menuAll"></div>

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