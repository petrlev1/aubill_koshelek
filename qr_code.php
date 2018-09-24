<?php include 'header.php'; ?>

<?php
$menuBack = "menu.php";
$titleName = "QR-код";
$rightTit = "";
include 'head_menu2.php';
?>

<div class="containAll">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
  
  <tr>
    <td><strong><a href="#">Мой QR-код</a></strong><br>
      <div class="note1">QR-код для получения документов и перечисления мне денег</div></td>
  </tr>
  <div class="modal1 modal1NewPortType" style="right: 20px">
<div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg"></a></div>
<div style="margin: 0 0 10px 0"><a href="#">Назначить младшим<br>пользователем</a><br>
<br>
<a href="#">Удалить</a></div>
      </div>
      <script> function modal1NewPortType() { $(".modal1NewPortType").show(); } </script>
      
  <tr>
    <td><strong><a href="#">Сканировать QR-код</a></strong><br>
      <div class="note1">Сканирование QR-кода другого кошелька или документа</div></td>
  </tr>
  
</table>

</div>

<?php include 'footer.php'; ?>