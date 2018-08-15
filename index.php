<?php 
	session_start();
	if(isset($_GET["a"]) && $_GET["a"] != 0 && $_GET["a"] > 20)
		$_SESSION["curURL"] = $_SERVER["REQUEST_URI"];
	include_once ('lib/DataProvider.php'); 
	include_once ('lib/ShoppingCart.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Shop NMN</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</head>

<body>
	<div id="wrapper">
		<!--HEADER-->
		<div id="header">
			<?php include ('modules/mHeader.php'); ?>
		</div>
		<!--End HEADER-->

		<!--START MENU-->
		<section id="menuContainer">
			<?php include ("modules/mSearchBar.php"); ?>
		</section>
		<!--END MENU-->

		<div id="mainContainer">
			<!--SIDEBAR-->
			<div id="sidebar">
				<?php include ('modules/mMenuLoai.php'); ?>
				<?php include ('modules/mMenuHang.php'); ?>
			</div>
			<!--End SIDEBAR-->

			<!--CONTENT-->
			<div id="content">
			<script>
			</script>
				<?php include ('modules/mContent.php'); ?>
			</div>
			<!--End CONTENT-->
		</div>
		<!--FOOTER-->
		<div id="footer">
			<?php include ('modules/mFooter.php'); ?>
		</div>
		<!--End FOOTER-->
	</div>
</body>
</html>