<?php include 'header.php'; ?>

<?php
$menuBack = "menu_upravlenie_slujeb_users.php";
$titleName = "Создание младшего пользователя";
include 'head_menu2.php';
?>

<div class="contain2" style="bottom: 47px; top: 54px;">
  <div class="containAll">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
      <tr>
        <td>Отображаемое имя</td>
        </tr>
      <tr>
        <td>Номер телефона</td>
        </tr>
      <tr>
        <td>Код авторизации
          <div class="note2">Этот код находится у подключаемого пользователя в настройках кошелька.</div>
          </td>
        </tr>
      <tr>
        <td><br>
          
          <strong>Список прав:</strong><br>
          
          <br>
          <strong>Чеки:</strong><br>
          <div class="spisokPravAll">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
                  <label class="spisokPrav"><input name="" type="checkbox" value="" class="spisokPrav">Создание чека
                  <div class="spisokPrav2">номиналом до: <input name="textfield" type="text" id="textfield" size="3"></div>
                  </label>
                  </td>
                </tr>
              <tr>
                <td>
                  <label class="spisokPrav"><input name="" type="checkbox" value="" class="spisokPrav">Просмотр всех чеков
                    </label>
                  </td>
                </tr>
              <tr>
                <td>
                  <label class="spisokPrav"><input name="" type="checkbox" value="" class="spisokPrav">Получение чека
                  <div class="spisokPrav2">номиналом до: <input name="textfield" type="text" id="textfield" size="3"></div>
                  </label>
                  </td>
                </tr>
              <tr>
                <td>
                  <label class="spisokPrav"><input name="" type="checkbox" value="" class="spisokPrav">Отправка чека
                  <div class="spisokPrav2">номиналом до: <input name="textfield" type="text" id="textfield" size="3"></div>
                  </label>
                  </td>
                </tr>
              <tr>
                <td>
                  <label class="spisokPrav"><input name="" type="checkbox" value="" class="spisokPrav">Погашение чека
                    </label>
                  </td>
                </tr>
              </table>
            </div>
          
          <br>
          <strong>Счета:</strong><br>
          <div class="spisokPravAll">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
                  <label class="spisokPrav"><input name="" type="checkbox" value="" class="spisokPrav">Создание счета
                    </label>
                  </td>
                </tr>
              <tr>
                <td>
                  <label class="spisokPrav"><input name="" type="checkbox" value="" class="spisokPrav">Отправка счета
                    </label>
                  </td>
                </tr>
              <tr>
                <td>
                  <label class="spisokPrav"><input name="" type="checkbox" value="" class="spisokPrav">Оплата счета
                  <div class="spisokPrav2">на сумму менее: <input name="textfield" type="text" id="textfield" size="3"></div>
                  </label>
                  </td>
                </tr>
              <tr>
                <td>
                  <label class="spisokPrav"><input name="" type="checkbox" value="" class="spisokPrav">Отклонение счета
                    </label>
                  </td>
                </tr>
              <tr>
                <td>
                  </td>
                </tr>
              </table>
            </div>
          
          <br>
          <strong>Виртуальные карты:</strong><br>
          <div class="spisokPravAll">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
                  <label class="spisokPrav"><input name="" type="checkbox" value="" class="spisokPrav">Выпуск
                  <div class="spisokPrav2">на сумму менее: <input name="textfield" type="text" id="textfield" size="3"></div>
                  </label>
                  </td>
                </tr>
              <tr>
                <td>
                  <label class="spisokPrav"><input name="" type="checkbox" value="" class="spisokPrav">Передача
                  <div class="spisokPrav2">на сумму менее: <input name="textfield" type="text" id="textfield" size="3"></div>
                  </label>
                  </td>
                </tr>
              </table>
            </div>
          
          </td>
        </tr>
      </table>
    
  </div>
</div>
<div class="panel1" style="height: 45px;">
  <table width="100%" border="0" cellspacing="8" cellpadding="0">
    <tr>
      <td width="100%" align="center" valign="top"><a href="menu_upravlenie_slujeb_users2.php">Создать</a></td>
      </tr>
      
  </table>
</div>
<?php include 'footer.php'; ?>