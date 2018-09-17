<?php include 'header.php'; ?>

<?php
$menuBack = "koshelki.php";
$titleName = "Создание нового кошелька";
include 'head_menu2.php';
?>

<div class="containAll">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
  <tr>
    <td>Название кошельке:</td>
    <td>

    <input name="textfield2" type="text" id="textfield2" style="margin: 5px 0 0 0; width: 120px;" value="Кафе Березка">

    </td>
  </tr>
  <tr>
    <td colspan="2"><div class="note2">В создаваемом кошельке вы становитесь старшим пользователем. Для добавления в кошелек младших пользователей, после создания кошелька зайдите в Меню -> Управление младшими пользователям</div></td>
    </tr>
  
</table>
</div>

<div class="modal1 modal1NewPortType" style="left: 10px; right: 10px;">
<div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg"></a></div>
<div style="margin: 0 0 10px 0; font-size: 18px; text-align:center">Ваш новый кошелек с именем "Кафе Березка" успешно создан!
<div class="note2" style="margin: 5px 0 0 0">Кошелек теперь доступен в общем списке ваших кошельков.</div>
</div>
<div style="margin: 15px 0 0 0; text-align:center"><a href="#"  class="modal1Close"><strong>Ok</strong></a></div>
      </div>

<div class="panel1" style="height: 45px;">
  <table width="100%" border="0" cellspacing="8" cellpadding="0">
    <tr>
      <td width="100%" align="center" valign="top">
      <a href="#" onClick="modal1NewPortType();">Создать</a>
      <script> function modal1NewPortType() { $(".modal1NewPortType").show(); } </script>
      </td>
      </tr>
      
  </table>
</div>

<?php include 'footer.php'; ?>