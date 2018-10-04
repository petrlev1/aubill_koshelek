<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title>Untitled Document</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/main.6532340a.css" rel="stylesheet">
<link href="css/testStyle.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script src="https://hammerjs.github.io/dist/hammer.js"></script>

</head>

<body>
<div id="myElement"></div>
<div class="modal2" style="width: 200px; height: 200px; background-color:#0C6">Content for New Div Tag Goes Here</div>
</body>

<script type="text/javascript">

var myElement = document.getElementById('myElement');
var mc = new Hammer(myElement);


mc.on("panleft panright tap press", function(ev) {
    myElement.textContent = ev.type +" gesture detected 1.";
});

mc.on("panleft", function(ev) {
	$(".modal2").hide();
});


$("#modal2").click(function(){
    $(".modal2").show();
});

</script>

</html>
