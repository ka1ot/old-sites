<?php
		session_start();
		if($_SESSION['checkadmin'] == 'admin'){
		?>
			
			<?php
		}else{
			if($_SESSION['checkadmin'] == 'user'){
			?>
			<script type="text/javascript">
				document.location.href = "../user.php";
			</script>
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
	<div id='mainpersonal'>
	<div id="personal-cab">
		<div class='admbtns'>
			<form method="post">
				<input type="submit" name="pricetableadm" id='pricetableadm' class="cabbtn" value='Редактировать цены'></input>
				<input type="submit" name="accountredadm" id='accountredadm' class="cabbtn" value="Радактировать базу аккаунтов"></input>
				<input type="submit" name="changepass" id='changepass' class="cabbtn changepassadm" value='Сменить пароль'></input>
				<?php
						if(isset($_POST['pricetableadm'])){
							$_SESSION['admbtnmenu'] = '1';
						}
						if(isset($_POST['accountredadm'])){
							$_SESSION['admbtnmenu'] = '2';
						}
						if(isset($_POST['changepass'])){
							$_SESSION['admbtnmenu'] = '3';
						}
						unset($_POST['pricetableadm'], $_POST['accountredadm'],$_POST['changepass']);
				?>
			</form>
		</div>
		<div class='admmenu cabmenu'>
			<?php
						if($_SESSION['admbtnmenu'] == '1'){
							require('lcab/prices.php');
						}

						if($_SESSION['admbtnmenu'] == '2'){
							require('lcab/account.php');
						}

						if($_SESSION['admbtnmenu'] == '3'){
							require('lcab/changepass.php');
						}
			?>	
		</div>
	</div>
</div>
	<script type="text/javascript" src='../js/js.js'></script>
	<div class='btnhome' onclick="location.href = '../';"><a href='../'>Вернуться на сайт</a></div>
</body>
</html>