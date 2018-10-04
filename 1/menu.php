<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title>Untitled Document</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/main.6532340a.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/hammer.min.js"></script>

<base target="_parent">

</head>

<body>
<div class="menuCont">
  
  <?php
include 'head_menu.php';
?>
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
</body>
</html>