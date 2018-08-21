<?php include 'header.php'; ?>

<?php
$menuBack = "menu.php";
$titleName = "Профиль";
include 'head_menu2.php';
?>

<div class="containAll">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
  <tr>
    <td>Мое имя в этом кошельке:</td>
    <td>

    <input name="textfield2" type="text" id="textfield2" style="margin: 5px 0 0 0; width: 120px;" value="Иванов Иван">

    </td>
  </tr>
  <tr>
    <td>Мой телефон: </td>
    <td>+79059999999</td>
  </tr>
  <tr>
    <td colspan="2"><br>
     
      <div class="modal1 modal1NewPortType" style="left: 10px; right: 10px;">
<div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg"></a></div>
<div style="margin: 0 0 10px 0">Укажите название нового типа кошелька:</div>
<input name="" type="text" style="width: 200px; height: 20px;" />
<div style="margin: 15px 0 0 0"><a href="#"  class="modal1Close"><strong>Создать</strong></a></div>
      </div>
      <a href="#" onClick="modal1NewPortType();">Создать новый тип кошелька</a>
      <script> function modal1NewPortType() { $(".modal1NewPortType").show(); } </script>
      </td>
    </tr>
  
</table>
</div>

<?php include 'footer.php'; ?>