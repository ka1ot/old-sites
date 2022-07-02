<?php
		session_start();
		if($_SESSION['checkadmin'] == 'admin'){
		?>
			
			<?php
		}else{
			if($_SESSION['checkadmin'] == 'user'){
			?>
			
			<?php
		}else{
			?>
			<script type="text/javascript">
				document.location.href = "../";
			</script>
			<?php
		}
	}

?>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../css/lkab.css">
	<script src="https://kit.fontawesome.com/d0511322e2.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
</head>
<body>
	<div id="personal-cab">
	<div class='admbtns'>
		<form method="post">
			<input type="submit" name="zakazbiletov" id='zakazbiletov' class="cabbtn" value='Заказанные билеты'></input>
			<input type="submit" name="changepass" id='changepass' class="cabbtn changepassadm" value='Сменить пароль'></input>
			<?php
					if(isset($_POST['zakazbiletov'])){
						$_SESSION['userbtnmenu'] = '1';
					}
					if(isset($_POST['changepass'])){
						$_SESSION['userbtnmenu'] = '2';
					}
					unset($_POST['zakazbiletov'], $_POST['changepass']);
			?>
		</form>
	</div>
	<div class='admmenu cabmenu'>
		<?php
					if($_SESSION['userbtnmenu'] == '1'){
						require('lcab/zakazannyebilety.php');
					}

					if($_SESSION['userbtnmenu'] == '2'){
						require('lcab/changepass.php');
					}
		?>
		
	</div>
</div>
	<script type="text/javascript" src='../js/js.js'></script>
	<div class='btnhome' onclick="location.href = '../';"><a href='../'>Вернуться на сайт</a></div>
</body>
</html>