<?php include 'header.php'; ?>

<?php
$menuBack = "menu.php";
$titleName = "Кошельки";
include 'head_menu2.php';
?>

<div class="containAll">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
  <tr>
    <td><strong>Мой кошелек</strong></td>
    <td></td>
  </tr>
  <tr>
    <td><strong>Мой семейный кошелек</strong><br>

Старший пользователь: Иванов Константин</td>
    <td></td>
  </tr>
  <tr>
    <td><strong>Кафе Березка</strong></td>
    <td></td>
  </tr>
</table>
<br>
<br>

<a href="sozdanie_novogo_koshelka.php" class="but2">Создать новый кошелек</a>
</div>

<div class="modal1 modal1NewPortType" style="left: 10px; right: 10px;">
<div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg"></a></div>
<div style="margin: 0 0 10px 0; font-size: 18px; text-align:center">Ваш новый кошелек с именем "Кафе Березка" успешно создан!
<div class="note2" style="margin: 5px 0 0 0">Кошелек теперь доступен в общем списке ваших кошельков.</div>
</div>
<div style="margin: 15px 0 0 0; text-align:center"><a href="#"  class="modal1Close"><strong>Ok</strong></a></div>
      </div>

<?php include 'footer.php'; ?>