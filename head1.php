<div class="header0">
<div class="head1">


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="1">
<a href="menu.php"><img src="css/img/menu.svg"></a>
    </td>
    <td align="center"><strong>AyBill - кошелек</strong></td>
    <td width="1"><?php include 'inc/dropMenu.php'; ?></td>
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