<?php include 'header.php'; ?>

<?php
$menuBack = "index.php";
$titleName = "Настройки";
include 'head_menu2.php';
?>

<div class="contain2">
  <div class="containAll">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
      <tr>
        <td>Перемещать документы в архив по истечении:</td>
        <td>
          
          <div class="dropListItem">
            <a href="#" id="dropListDocs">12 часов</a>
            <div id="dropListDocs2" class="dropMenu2">
              <span class="dropMenuClose"></span>
              <a href="#">12 часов</a>
              <a href="#">1 дня</a>
              <a href="#">3 дней</a>
              </div>
            </div>
          </td>
        </tr>
      <tr>
        <td>Код авторизации для подключения меня младшим пользователем<br>
          </td>
        <td><label>
          <input name="textfield2" type="text" id="textfield2" class="inpText" style="width: 80%">
          </label>
          <a class="but3">Сгенерировать</a>
          </td>
        </tr>
      </table>
    
  </div>
</div>
<?php include 'footer.php'; ?>