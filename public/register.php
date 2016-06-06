<!DOCTYPE HTML>
<html>
<head id="head">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link id="originalTheme" rel="stylesheet" href="/css/register.css">
</head>
<body id="body">
	<div class="banner">
		<button id="changeTheme">Change Theme</button>
		<img src="/img/leaficon.png">
		<div class="taskbar btn-toolbar" role="toolbar">
			<div id="shopdropdownmenu"></div>
			<button class="taskbarbutton" type="button" id="shop">Shop<span class="glyphicon glyphicon-chevron-down"></button></span>
			<button class="taskbarbutton" type="button">Register</button>
			<button class="taskbarbutton" type="button">Contact Us</button>
			<button class="taskbarbutton" type="button">Sign off</button>
			<div id="profiledropdownmenu"></div>
			<button class="taskbarbutton" id="profilebttn" type="button">Profile<span class="glyphicon glyphicon-chevron-down"></button></span>
			<div class="searchbardiv col-xs-5 input-group">
			<input type="text" id="searchbar" class="col-s-3 searchbar" placeholer="Search">
			<span class=><button id="searchbarbutton" class="btn btn-secondary" type="button"><span class="glyphicon glyphicon-search"></button></span></span>
			</div>
		</div>
	</div>	
	<div class="moreinfo">
		<div class="bottombar">
		</div>
	</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>
	var shopbttn = document.getElementById("shop");
	var shopdropdown = document.getElementById("shopdropdownmenu");
	var body = document.getElementById("body");
	var profilebttn = document.getElementById("profilebttn");
	var profiledropdown = document.getElementById("profiledropdownmenu");
	var changeTheme = document.getElementById("changeTheme");
	shop.onmouseover = function () {
		shopdropdown.style.display="block";
	}
	shop.onmouseout = function(){
		shopdropdown.style.display="none";
	}
	shopdropdown.onmouseout = function(){
		shopdropdown.style.display="none";
	}
	profilebttn.onmouseover = function () {
		profiledropdown.style.display="block";
	}
	profilebttn.onmouseout = function(){
		profiledropdown.style.display="none";
	}
	shopdropdown.onmouseout = function(){
		profiledropdown.style.display="none";
	}
	changeTheme.onclick = function(){
		var originalTheme = document.getElementById("originalTheme");
		var neopolitan = document.createElement("link");
		originalTheme.setAttribute("href","/css/chocolate.css");
	}

</script>
</body>
</html>