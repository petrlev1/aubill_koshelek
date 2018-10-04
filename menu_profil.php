<?php include 'header.php'; ?>

<?php
$menuBack = "index.php";
$titleName = "Профиль";
include 'head_menu2.php';
?>

<div class="contain2">
  <div class="containAll">
    
    <ul class="fieldList">
      <li>
        <span>Мое имя в этом кошельке</span>
        <input type="text" size="8" value="Иванов Иван" class="inpText2">
        </li>
      <li>
        <span>Мой телефон</span>
        <input type="text" size="8" value="+7 905 9999999" class="inpText2">
        </li>
      </ul>
    
    <div class="modal1 modal1NewPortType" style="left: 10px; right: 10px;">
      <div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg"></a></div>
      <div style="margin: 0 0 10px 0">Укажите название нового типа кошелька:</div>
      <input name="" type="text" style="width: 200px; height: 20px;" />
      <div style="margin: 15px 0 0 0"><a href="#"  class="modal1Close"><strong>Создать</strong></a></div>
      </div>
    <br>
    
    <a href="#" onClick="modal1NewPortType();" class="but3">+ СОЗДАТЬ НОВЫЙ ТИП КОШЕЛЬКА</a>
    <script> function modal1NewPortType() { $(".modal1NewPortType").show(); } </script>
  </div>
</div>
<?php include 'footer.php'; ?>