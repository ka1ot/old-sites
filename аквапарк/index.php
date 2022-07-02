<?php
		session_start();
		require('php/connect.php');
?>
<html>
<head>
	<title>Аквапарк </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="hat.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="lkab.css">
	<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/d0511322e2.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/animejs.js"></script>
</head>
<body>
	<div class="main-page">
		<div class="hat">
			<div class="hat-main">
				<div class='icohat'></div>	<!-- сделать шапку -->
				<div class='logosite'>Аквапарк Фантазия</div>
				<div class="siteinfo">
					<div class='texttime'>9:00-21:00</div>
					<i class="fas fa-phone-alt"></i>
					<div class='phonenumber'>+7(999)666-66-66</div>	
				</div>
				<div id='obl'></div>
			</div>
			<div class="hat-rollingpannel"> <!-- картинки по кругу -->
				<div id="scr">
					<div class="left" id='scrollleft' onclick='slider.left();'><p><</p></div>
					<div class="right" id='scrollright' onclick='slider.right();'><p>></p></div>
					<div class='indicators'>
						<div class='indi' id='ind1' onclick='slider.first();'><div class='indicenter'></div></div>
						<div class='indi' id='ind2' onclick='slider.second();'><div class='indicenter'></div></div>
						<div class='indi' id='ind3' onclick='slider.three();'><div class='indicenter'></div></div>
					</div>
				</div>
				<div id='authphp'>
				<?php
					if($_SESSION['authincab']==1){
						include('php/lkab.php');
					}else{
						include('php/auth.php');
					}
				?>
				</div>
				<script type="text/javascript" src="js/hat.js"></script>
			</div>
		<div class="main-center">
			<div class="main-ul-pannel">
				<div class='main-ul-btn'>
					<form class='main-ul-btn' method="post">
						<input type="submit" class='ul-btn ul-btn-left' id='ul-btn-main' name='main' value='ГЛАВНАЯ'></input>
						<input type='submit' class='ul-btn ul-btn-center' id='ul-btn-price' name='price' value='ЦЕНЫ'></input>
						<input type='submit' class='ul-btn ul-btn-right' id='ul-btn-kontakt' name='kontakt' value='О НАС'></input>
						<?php
							if(isset($_POST['main'])){
								$_SESSION['main'] = 1;
								$_SESSION['lkab'] = 0;
							}else{
							if(isset($_POST['price'])){
								$_SESSION['main'] = 2;
								$_SESSION['lkab'] = 0;
							}else{
							if(isset($_POST['kontakt'])){
								$_SESSION['main'] = 3;
								$_SESSION['lkab'] = 0;
							}
						}
					}
						?>
					</form>
				</div>
			</div>
			<?php
			$main = $_SESSION['main'];
			if($main == 1 || (!isset($main))){
				require('php/main-main.php');
			}else{
				if($main == 2){
					require('php/main-price.php');
				}else{
					if($main == 3){
					require('php/main-kontakt.php');
					}
				}
			}
			unset ($main);
			?>
				<?php
					if($_SESSION['lkab'] == 1){
						$_SESSION['main'] = 0;
						require('php/lkabadmin.php');
					}
				?>
		</div>
	</div>
</div>
<?php
if($_SESSION['destroy'] == 1){
	
	session_destroy();
}
?>
</body>

</html>