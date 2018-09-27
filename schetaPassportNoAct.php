<?php include 'header.php'; ?>

<?php
$menuBack = "scheta.php";
$titleName = "Подтверждение счета";
include 'head_menu2.php';
?>

<div class="containAll">
Для выпуска чеков необходимо пройти процедуру подтверждения подключенного счета. Для этого введите последние 6 цифр номера вашего счета.

    <br>
    <br>
    <strong>Внимание!</strong> После 10 неудачных попыток ввода, счет будет заблокирован. В этом случае обратитесь в банк для решения проблемы. <br>
    <br>
    <input type="text" size="8" placeholder="Номер счета" class="inpText">
    <br><br>
<br>

<div style="text-align:center"><a href="#" class="but1">ПОДТВЕРДИТЬ</a></div>
</div>


<?php include 'footer.php'; ?>