<?php


?>
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		color: #d3d3d3;
		background-color: #d3d3d3;
	}
	header{
		z-index: 3;
		width: 100%;
		height:65px;
		background: rgb(255,0,0);
		background: linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(194,0,49,1) 17%, rgba(162,2,64,1) 32%, rgba(0,212,255,1) 100%);
		margin: 0;
		padding: 10;
		position: fixed;
		box-shadow: 0 0 10px 5px rgba(0,0,0,0.3);
	}
	.header{
		position: relative;
		top:20px;
	}
	.logo{
		font-size: 26px;
		font-family: arial;
		position: relative;
		left: 20px;
		color: #d3d3d3;
		text-decoration: none;
	}
	.ourprofile{
		font-size: 22px;
		font-family: arial;
		position: relative;
		float: right;
		right: 40px;
		top: 3px;
		color: #d3d3d3;
		text-decoration: none;
	}
	.careers{
		font-size: 22px;
		font-family: arial;
		position: relative;
		float: right;
		right: 60px;
		top: 3px;
		color: #d3d3d3;
		text-decoration: none;
	}
</style>
<header>
	<div class="header"><a class="logo" href="index.php">Hot Beans <?php if($career == "1"){?> Career <?php }else{ ?>Web <?php } ?></a><a class="ourprofile" <?php if($_GET['pid'] == "1"){?> style="cursor: not-allowed;" <?php }else{ ?> href="profile.php?pid=1" <?php } ?>>About Us</a></div>
</header>