<div class="header0">
<div class="head1">


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td width="5"><a href="uvedomliniya.php"  class="notif"><img src="css/img/ic_notif.svg"><span>1</span></a></td>
    <td align="center"><div class="indTit"><strong>AyBill - кошелек</strong></div></td>
    <td width="1"><!--<?php include 'inc/dropMenu.php'; ?> --></td>
    <td width="1"><a href="menu.php"  class="genMenu"><img src="css/img/menu.svg"></a></td>
  </tr>
</table>

</div>
<div class="tab1"><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><a class="tab1Act"><strong>Принятые</strong></a><div class="actLine"></div></td>
    <td align="center"><a>Отправленные</a></td>
    <td align="center"><a>Архив</a></td>
  </tr>
</table>
</div>
<div class="line1"></div>
<div class="indFilters">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="50%">
      
      <div class="dropList2">
      <div class="dropList2Ar"><img src="css/img/dropList2Ar.svg" /></div>
      <select name="select" id="changeList">
      <option value="changeListShowAll">Все документы</option>
      <option  value="changeListShowCheki">Чеки</option>
      <option value="changeListShowSchet">Счета</option>
    </select>
    </div>
    
      <div id="dropListDocs2" class="modal1" style="top: 36px; left: 0">
<div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg"></a></div>
<a href="#" class="content_menu_generalUser" style="display:block; padding: 15px 0; border-bottom: 1px solid #e6e6e6">Все документы</a>
<a href="#" class="content_menu_generalUser" style="display:block; padding: 15px 0; border-bottom: 1px solid #e6e6e6">Чеки</a>
<a href="#" class="content_menu_generalUser" style="display:block; padding: 15px 0;">Счета</a>
</div>
      </td>
      <td width="50%" align="right" style="border-left: 1px #1468cc solid;">
      
      <div class="dropList2">
      <div class="dropList2Ar"><img src="css/img/dropList2Ar.svg" /></div>
      <select name="select" id="changeListDate">
      <option value="changeListShowAllDate">По дате</option>
      <option value="changeListShowAllSum">По сумме</option>
    </select>
    </div>
      
      <div id="dropListDate2" class="modal1" style="top: 36px; left:0">
<div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg"></a></div>
<a href="#" class="content_menu_generalUser" style="display:block; padding: 15px 0; border-bottom: 1px solid #e6e6e6">По сумме</a>
<a href="#" class="content_menu_generalUser" style="display:block; padding: 15px 0;">По дате</a>
</div>
</td>
      </tr>
  </table>
  

<script type="text/javascript">
$("#dropListDocs").click(function() {$("#dropListDocs2").show();});
$("#dropListDate").click(function() {$("#dropListDate2").show();});

</script>
  
</div>

</div>