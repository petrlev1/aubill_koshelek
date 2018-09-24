<div class="newDocContain">

<button id="newDoc" class="mdc-fab mdc-fab--extended" style="position:absolute; bottom: 21px; right:18px; background-color: var(--mdc-theme-secondary,#1776E6); z-index: 2">
  <span class="material-icons mdc-fab__icon">add</span>
  <span class="mdc-fab__label">СОЗДАТЬ</span>
</button>
<div class="modal1 modal1NewDoc" style="bottom: 40px; right: 0">
<div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg" /></a></div>
<a href="sozdanie_cheka.php">Чек</a><br>
<br>
<a href="sozdanie_scheta.php">Счет</a><br>
<br>
</div>

<script type="text/javascript">
$("#newDoc").click(function(){
    $(".modal1NewDoc").show();
});

$(".modal1NewDocClose").click(function(){
    $(".modal1NewDoc").hide();
});
</script>

</div>

<div class="downPanel">
  <div style="padding: 5px;">Всего чеков: <strong>2</strong><br />
    На сумму: <strong>8000 р.</strong></div>
</div>

