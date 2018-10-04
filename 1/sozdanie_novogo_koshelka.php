<?php include 'header.php'; ?>

<?php
$menuBack = "koshelki.php";
$titleName = "Создание нового кошелька";
include 'head_menu2.php';
?>

<div class="containAll">
<ul class="fieldList">
  <li><input type="text" size="8" placeholder="Название кошелька" class="inpText"></li>
</ul>
<div class="note2">В создаваемом кошельке вы становитесь старшим пользователем. Для добавления в кошелек младших пользователей, после создания кошелька зайдите в Меню -> Управление младшими пользователям</div>
<br>
<div class="but1">СОЗДАТЬ</div>
</div>

<div class="modal1 modal1NewPortType" style="left: 10px; right: 10px;">
<div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg"></a></div>
<div style="margin: 0 0 10px 0; font-size: 18px; text-align:center">Ваш новый кошелек с именем "Кафе Березка" успешно создан!
<div class="note2" style="margin: 5px 0 0 0">Кошелек теперь доступен в общем списке ваших кошельков.</div>
</div>
<div style="margin: 15px 0 0 0; text-align:center"><a href="#"  class="modal1Close"><strong>Ok</strong></a></div>
      </div>

<?php include 'footer.php'; ?>