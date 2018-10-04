<?php include 'header.php'; ?>

<?php
$menuBack = "index.php";
$titleName = "Счета";
include 'head_menu2.php';
?>

<div class="containAll">

<div class="scheta_list_block">

<a href="schetaPassport.php" class="listLink">
    <div class="picList2"><img src="css/img/sberbank.svg"></div>
<div class="listText"><strong>Сбербанк</strong></div>
<div class="listDate">подключен 10.05.2017</div>
</a>
<a href="schetaPassportBlock.php" class="listLink">
    <div class="picList2"><img src="css/img/sberbank.svg"></div>
<div class="listText"><strong>Сбербанк 2</strong></div>
<div class="listDate">заблокирован</div>
</a>
<a href="schetaPassportNoAct.php" class="listLink">
    <div class="picList2"><img src="css/img/sberbank.svg"></div>
<div class="listText"><strong>Сбербанк 3</strong></div>
<div class="listDate">не подтвержден</div>
</a>

</div>
<br>
<br>
<a href="scheta.php" class="but3">+ ПОДКЛЮЧИТЬ НОВЫЙ СЧЕТ</a>
</div>

<div class="modal1 modal1NewPortType" style="left: 10px; right: 10px;">
<div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg"></a></div>
<div style="margin: 0 0 10px 0; font-size: 18px; text-align:center">Ваш новый кошелек с именем "Кафе Березка" успешно создан!
<div class="note2" style="margin: 5px 0 0 0">Кошелек теперь доступен в общем списке ваших кошельков.</div>
</div>
<div style="margin: 15px 0 0 0; text-align:center"><a href="#"  class="modal1Close"><strong>Ok</strong></a></div>
      </div>

<?php include 'footer.php'; ?>