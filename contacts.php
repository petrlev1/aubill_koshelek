<?php include 'header.php'; ?>

<?php
$menuBack = "index.php";
$titleName = "Контакты";
$rightTit = "<img src=\"css/img/ic_search.svg\" style=\"margin-right: 5px\">";
include 'head_menu2.php';
?>

<div class="contain2">
  <div class="containAll">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
      
      <tr onClick="modal1NewPortType();" style="cursor:pointer">
        <td>Иванов Иван</td>
        </tr>
      <div class="modal1 modal1NewPortType" style="right: 20px">
        <div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg"></a></div>
        <div style="margin: 0 0 10px 0"><a href="#">Назначить младшим<br>пользователем</a><br>
          <br>
          <a href="#">Удалить</a></div>
        </div>
      <script> function modal1NewPortType() { $(".modal1NewPortType").show(); } </script>
      
      <tr onClick="modal1NewPortType();" style="cursor:pointer">
        <td>Константинопольский Константин</td>
        </tr>
      
      </table>
    
    <br><br>
    <div style="text-align: left">
      <div class="but3">+ СОЗДАТЬ КОНТАКТ</div>
      </div>
    
  </div>
</div>
<?php include 'footer.php'; ?>