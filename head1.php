<div class="header0">
<div class="head1">


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="#" class="newDoc"><img src="css/img/plus.svg"></a>
    <div class="modal1 modal1NewDoc">
<div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg"></a></div>
Создать новый:
<br>
<br>
<a href="sozdanie_cheka.php">Чек</a><br>
<br>
<a href="sozdanie_scheta.php">Счет</a><br>
<br>
</div>

<script type="text/javascript">
$(".newDoc").click(function(){
    $(".modal1NewDoc").show();
});

$(".modal1NewDocClose").click(function(){
    $(".modal1NewDoc").hide();
});
</script>

    </td>
    <td align="center"><strong>AyBill - кошелек</strong><br>
Всего чеков: 2 на сумму: 8000 р.</td>
    <td><a href="menu.php"><img src="css/img/menu.svg"></a></td>
  </tr>
</table>

</div>
<div class="tab1"><table width="100%" border="0" cellpadding="0" cellspacing="8">
  <tr>
    <td align="center"><strong>Принятые</strong></td>
    <td align="center" style="border-left: 1px solid #E6E6E6;"><a>Отправленные</a></td>
    <td align="center" style="border-left: 1px solid #E6E6E6;"><a>Архив</a></td>
  </tr>
</table>
</div>
<div class="containAll">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%"><label>
    <select name="select" id="changeList">
      <option value="changeListShowAll">Все документы</option>
      <option  value="changeListShowCheki">Чеки</option>
      <option value="changeListShowSchet">Счета</option>
    </select>
  </label></td>
    <td width="50%" align="right"><select name="select" id="changeListDate">
      <option value="changeListShowAllDate">По дате</option>
      <option value="changeListShowAllSum">По сумме</option>
    </select></td>
  </tr>
</table>
</div>
</div>