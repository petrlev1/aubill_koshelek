<?php include 'header.php'; ?>

<?php
$menuBack = "index.php";
$titleName = "Профиль";
include 'head_menu2.php';
?>

<div class="containAll">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
  <tr>
    <td>Тип кошелька:</td>
    <td><label>
      <select name="select2" id="select2">
    <option>Семейный</option>
    <option>Рабочий</option>
    <option>Корпоративный</option>
      </select>
    </label>
    <br>
    <br>
    другое название:<br>
    <input name="textfield2" type="text" id="textfield2" style="margin: 5px 0 0 0; width: 120px;">

    </td>
  </tr>
  <tr>
    <td>Имя старшего пользователя:</td>
    <td>Иванов Константин</td>
  </tr>
  
</table>

</div>

<?php include 'footer.php'; ?>