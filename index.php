<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pakistani Pizza Delivery</title>

<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="page">

<header>
<img src="./images/logo.jpg" width="100">
<h1>Pakistan Pizza Delivery</h1>
</header>

<div id="nav">
  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="">Home</a></li>
    <li><a href="pizzas">Pizza</a></li>
    <li><a href="order">Order</a></li>
    <li><a href="history">History</a></li>
  </ul>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>

</div>

<content id="content">
<h1>Pizza</h1>
You can get your pizza delivered at your home
<br>

<a href="center/?type=loc" style="color:#000000;text-decoration:none;">
<div class="tile">
Get Pizza at your home.<br>
</div>
</a>

</content>

<script type="text/javascript">
function search_course()
	{
	var search_item = document.getElementById('search').value;
	window.location = './search.php?item='+search_item;
	}
</script>

<?php
require_once('include/footer.html');
?>

</div>
</body>
</html>