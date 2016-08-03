<?PHP
$stylesheet=<<<STYLESHEET 
<style>
body{
	margin:0;
	color:#0060a9;
	font-family:'Open Sans',"Helvetica Neue",Helvetica,Arial,Roboto,sans-serif;
}
#container{
	position:absolute;
	height:100%;
	width:100%;
}
#header{
	height: 120px;
	background-color:#efefef;
	box-shadow: 0 1px 2px 0 rgba(0,0,0,0.2);
	padding-top:15px;
}
#search-banner{
	padding-bottom:15px;
	background-color:#efefef;
	box-shadow: 0 1px 2px 0 rgba(0,0,0,0.2);
}
#fantasy-costco-logo{
	padding-top: 30px;
	max-width: 16.9375rem;
	padding-left:100px;
	padding-bottom:15px;
}
#phone-shop-menu{
	display:none;
}
#search-bar{
	position: relative;
	top:28px;
	border:1px solid #3071a9;
	margin-left:15px;
	padding:0px 15px 0px 15px;
	height:40px;
	font-size: 1.25em;
}
#icon-container{
	display:none;
}
#signin{
	position:relative;
	float:left;
	color:#0060a9;
	font-size: 1.25em;
	top:44px;
}
#shop-menu{
	position:relative;
	height:17%;
	min-height:25px;
	padding:15px 15px 15px 15px;
	top:-8px;
	background-color:#0073a6;
}
#content-container{
	height:100%;
}
.icon{
	width:26px;
	vertical-align:middle;
	float:left;
	padding-left:5px;
}
#carousel{
	position:absolute;
	outline:1px solid black;
	height:60%;
	width:100%;
}
#info-links{
	position:relative;
	float:right;
	margin-right:25px;
	z-index: 1;
	top:15px;
	color:#0060a9;
}
@media (max-width: 1107px){
	#signin{
		display:none;
	}
}
@media(min-width:1267px){
	#search-bar{
		width: 41.66%;float: left; padding:0px 15px 0px 15px;;
	}
}
@media (max-width: 320px){

	#info-links{
		display:none;
	}
	#header{
		padding-bottom:0px;
		padding-left:15px;
		padding-right:15px;
		box-shadow: 1px 1px 2px  rgba(0,0,0,0.2);
		width:100%;
	}
	#header:before{
		height:0px;
	}
	#fantasy-costco-logo{
		position:absolute;
		left:0px;
		top:0px;
		float:left;
		clear:both;
		padding:15px;
		height: 39px;
		max-width:125px;
		width:125px;
	}
	#phone-shop-menu{
		position:relative;
		display:block;
		width: 25%;
		float: left;
		clear:left;
		padding: 5px;
		background-color:#0073a6;
		height:30px;
		top:50px;
		color:white;
	}
	#search-bar{
		position: absolute;
		float:left;
		clear:both;
		border:1px solid #3071a9;
		width: 58.33%;
		top:65px;
	}
	#icon-container{
		position:relative;
		display:block;
		width:50%;
		height:36px;
		float:right;
		padding:0px;
		top:-5px;
		left:10px;
	}
	.icon-div{
		position:relative;
		width:33%;
		height:100%;
		float:left;
		font-size:.75rem;
		border-right:1px solid black;
		left:-10px;
		padding:2px;
		vertical-align:middle;
	}
	#shop-menu{
		display:none;
	}
	#signin{
		display:none;
	}
	span{
		vertical-align: center;
		text-align:center;
	}
}
.col-1 {width: 8.33%;float: left;padding: 15px;}
.col-2 {width: 16.66%;float: left;padding: 15px;}
.col-3 {width: 25%;float: left;padding: 15px;}
.col-4 {width: 33.33%;float: left;padding: 15px;}
.col-5 {width: 41.66%;float: left;padding: 15px;}
.col-6 {width: 50%;float: left;padding: 15px;}
.col-7 {width: 58.33%;float: left;padding: 15px;}
.col-8 {width: 66.66%;float: left;padding: 15px;}
.col-9 {width: 75%;float: left;padding: 15px;}
.col-10 {width: 83.33%;float: left;padding: 15px;}
.col-11 {width: 91.66%;float: left;padding: 15px;}
.col-12 {width: 100%;float: left;padding: 15px;}
</style>
STYLESHEET;
$banner=<<< BANNER
			<span id="info-links">Customer Service</span>
			<span id="info-links">Magical Gashapon</span>
			<span id="info-links">About Us</span>
			<span id="info-links">Locations</span>
			<img id="fantasy-costco-logo" class ="col-4" src="/img/Fantasy-Costco-by-Ryanphantom.png">
			<div id ="phone-shop-menu">
			<img style="background-color:red" class="icon" style="border:1px solid white;width:30px"src="/img/signs.svg">
			<span style="float:right">Shop</span>
			</div>
			<input id="search-bar" type="text" class="col-6">
			<span id="signin">Sign In/Register</span>
			<div id="icon-container" class='col-6'>
				<div class="icon-div">
					<img id="location-pin" src="/img/location-pin.svg" class="icon">
					<span style="clear:both;float:left">
					Location</span>
				</div>
				<div class="icon-div">
					<img id="Account" src="/img/user-silhouette.svg" class="icon" style="position:relative;left:4px">
					<span style="clear:both;float:left">
					Account</span>
				</div>
				<div class="icon-div" style="border-right:0px;top:-39px;left:66%">
					<img id="cart" src="/img/commerce.svg" class="icon" style="">
					<span style="position:relative;clear:both;float:left;text-align:middle;left:6px">
					Cart</span>
				</div>
			</div>
		</header>
BANNER;
