<?php include 'header.php'; ?>

<?php
$menuBack = "menu_Junior.php";
$titleName = "Настройки";
include 'head_menu2.php';
?>

<div class="containAll">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
  <tr>
    <td>Перемещать документы в архив по истечении:</td>
    <td><label>
      <select name="select2" id="select2">
        <option>12 часов</option>
        <option>1 дня</option>
        <option>3 дней</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Код авторизации для подключения меня младшим пользователем<br>
      <a>Сгенерировать</a></td>
    <td><label>
      <input name="textfield2" type="text" id="textfield2" size="6">
    </label></td>
  </tr>
</table>

</div>

<?php include 'footer.php'; ?>