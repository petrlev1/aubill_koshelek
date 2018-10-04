<a href="#" class="dropMenu"><img src="css/img/dropMenu.svg"></a>
    <div class="modal1 modal1dropMenu">
  <div style="text-align:right"><a href="#" class="modal1Close"><img src="css/img/close.svg" /></a></div>
  <br>
  <a href="#">Кошельки</a><br>
  <br>
  <a href="#">QR-код</a><br>
  <br>
  <a href="#">Контакты</a><br><br />

</div>
<script type="text/javascript">
$(".dropMenu").click(function(){
    $(".modal1dropMenu").show();
});

$(".modal1NewDocClose").click(function(){
    $(".modal1dropMenu").hide();
});
</script>