<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title>Untitled Document</title>
<link href="css/tz100.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

</head>

<body>

<h1>Кошелек 2.0</h1>

<h2>Структура экранов</h2>
<img src="css/img/structure.png" width="1045" height="810">
<h2>Вход и авторизация</h2>
<table width="1%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td valign="top"><img src="screens/avtorizat.png"><div class="note2">Первый вход или после logout</div></td>
    <td valign="top"><img src="screens/avtorizat2.png"><div class="note2">Повторный вход</div></td>
  </tr>
</table>

<br><br><hr>
<a name="index"></a><h2>Список документов (главный экран)</h2>
    <table border="0" cellspacing="0" cellpadding="0" class="tzTable">
  <tr>
    <td width="1" valign="top"><iframe src="index.php" class="frame1" scrolling="no"></iframe></td>
    <td valign="top"><div class="cont">Главный экран приложения, в который мы попадаем сразу после авторизации.<br>
      <br>
      Основную часть экрана занимает список документов. При клике на документ мы попадаем в <a href="#passport">паспорт документа</a>. По-умолчанию открывается список принятых документов.
    Для переключения списка документов можно щелкнуть по соответствующей ссылке под названием приложения либо свайпом влево/вправо.<br>
    Новые документы в списке документов выделяются жирным шрифтом. <br>
    <br>
    Под ссылками переключения документов располагаются фильтры отображения документов:<br>
    Левый фильтр - отображает вид документа.<br>
    Правый фильтр - отображает документа по дате либо по сумме.<br>
    <br>
    Внизу располагается информационная панель и плавабщая кнопка создания документов. Плавающая кнопка меняется в зависимости от экрана в котором мы находимся.<br>
    <br>
    В правом верхнем углу располагается иконка <a href="#genMenu">главного меню</a> приложения.<br>
    <br>
    В левом верхнем углу располагается иконка уведомлений о приходе новых документов, при нажатии на которую окрыватеся <a href="#uvedomleniya">экран со списком новых документов</a>. Цифра справа от колокольчика означает количество новых документов.</div></td>
  </tr>
</table>

<br><br><hr>
<a name="passport"></a><h2>Экран документа (паспорт документа)</h2>
<table border="0" cellspacing="0" cellpadding="0" class="tzTable">
  <tr>
    <td width="1" valign="top"><iframe src="passport.php" class="frame1" scrolling="no"></iframe></td>
    <td valign="top"><div class="cont">Паспорт содержит детальную информацию о документе. <br>
      <br>
    Плавающая кнопка "СОЗДАТЬ" меняется на "ДЕЙСТВИЯ".</div></td>
  </tr>
</table>

<br><br><hr>
<h2>Создание документа</h2>
<table border="0" cellspacing="0" cellpadding="0" class="tzTable">
  <tr>
    <td width="1" valign="top"><iframe src="sozdanie_cheka.php" class="frame1" scrolling="no"></iframe>
    <div class="note2">Выпуск чека</div></td>
    <td width="1" valign="top"><iframe src="sozdanie_scheta.php" class="frame1" scrolling="no"></iframe>
    <div class="note2">Создание счета</div>
    </td>
    <td valign="top"><div class="cont">Создание документов в данном случае показано на примере создания чека и счета. В действительности, документов может быть больше.<br>
      <br>
    При создании счета можно указать координаты получателя - номер кошелька либо телефон. Это делается при помощи переключения в верхней части экран.</div></td>
  </tr>
</table>

<br><br><hr>
<a name="uvedomleniya"></a><h2>Уведомления</h2>
<table border="0" cellspacing="0" cellpadding="0" class="tzTable">
  <tr>
    <td width="1" valign="top"><iframe src="uvedomliniya.php" class="frame1" scrolling="no"></iframe></td>
    <td valign="top"><div class="cont">Тут содержатся все непрочитанные документы. После прочтения, документ автоматически удаляется из данного списка.</div></td>
  </tr>
</table>

<br><br><hr>
<a name="genMenu"></a><h2>Главное меню</h2>
<table border="0" cellspacing="0" cellpadding="0" class="tzTable">
  <tr>
    <td width="1" valign="top"><iframe src="menu.php" class="frame1" scrolling="no"></iframe></td>
    <td valign="top"><div class="cont">Главное меню - это основное меню приложения, в котором содержатся все необходимые настройки. Зайти в меню можно при помощи иконки в верхнем правом углу приложения с любой страницы.<br>
      <br>
    Экран меню открывается на весь экран. Выйти из него можно так же, как из любой внутренней страницы приложения - нажатием кнопки &quot;Назад&quot; в левом углу.<br>
    <br>
    Шапка с именем и названием кошелька
    служит кнопкой переключения между кошельками. Для переключения можно нажать на любое место в шапке, после чего откроется модальное окно со списком доступных кошельков.<br>
    <br>
    При смене кошелька меняется содержание доступных функций меню, в зависимости от установленных прав владельцем главного кошелька.
    </div></td>
  </tr>
</table>

<br><br><hr>
<h2>Профиль</h2>
<table border="0" cellspacing="0" cellpadding="0" class="tzTable">
  <tr>
    <td width="1" valign="top"><iframe src="menu_profil.php" class="frame1" scrolling="no"></iframe></td>
    <td valign="top"><div class="cont"> </div></td>
  </tr>
</table>

<br><br><hr>
<h2>Настройка</h2>
<iframe src="menu_nastroyki.php" class="frame1" scrolling="no"></iframe>

<br><br><hr>
<h2>Кошельки</h2>
<table border="0" cellspacing="0" cellpadding="0" class="tzTable">
  <tr>
    <td width="1" valign="top"><iframe src="koshelki.php" class="frame1" scrolling="no"></iframe>
    <div class="note2">Список кошельков</div></td>
    <td width="1" valign="top"><iframe src="sozdanie_novogo_koshelka.php" class="frame1" scrolling="no"></iframe>
    <div class="note2">Создание нового кошелька</div></td>
    <td valign="top"><div class="cont"> </div></td>
  </tr>
</table>

<br><br><hr>
<h2>Счета</h2>
<table border="0" cellspacing="0" cellpadding="0" class="tzTable">
  <tr>
    <td width="1" valign="top"><iframe src="scheta.php" class="frame1" scrolling="no"></iframe>
    <div class="note2">Список счетов</div></td>
    <td width="1" valign="top"><iframe src="schetaPassport.php" class="frame1" scrolling="no"></iframe>
    <div class="note2">Подробности счета</div></td>
    <td valign="top"><div class="cont"> </div></td>
  </tr>
</table>

<br><br><hr>
<h2>Управление младшими пользователями</h2>
<table width="1%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td><iframe src="menu_upravlenie_slujeb_users.php" class="frame1" scrolling="no"></iframe></td>
    <td><iframe src="menu_sozdanie_slujeb_user.php" class="frame1" scrolling="no"></iframe></td>
  </tr>
</table>

<br><br><hr>
<h2>QR-код</h2>
<iframe src="qr_code.php" class="frame1" scrolling="no"></iframe>

<br><br><hr>
<h2>Контакты</h2>
<table width="1%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td><iframe src="contacts.php" class="frame1" scrolling="no"></iframe></td>
  </tr>
</table>


</body>

</html>