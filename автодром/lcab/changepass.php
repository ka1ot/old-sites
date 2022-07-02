<div id='changepassform'>
	<form method="post">
		<input type="text" name="oldpass" id='changepassinput'class='forminputtable' placeholder="Старый пароль" required>
		<input type="text" name="newpass" id='changepassinput' class='forminputtable' placeholder="Новый пароль" required>
		<input type="submit" name="changepassbtn" id="changepassbtninform" class="cabbtn" value='Изменить'>
		<?php
		require('php/connect.php');
		$err = 2;
		if(isset($_POST['changepassbtn'])){
			$oldpass = sha1($_POST['oldpass']);
			$userlogin = $_SESSION['login'];
			$passzapr = "SELECT * FROM auth WHERE login = '$userlogin' and password = '$oldpass'";
			$resultpass = mysqli_query($link, $passzapr) or die("Ошибка гыгыыы " . mysqli_error($link));
			if(mysqli_num_rows($resultpass) == 1){
			$newpass = sha1($_POST['newpass']);
				$newpass = sha1($_POST['newpass']);
				$changepasszapr = "UPDATE `auth` SET `password` = '$newpass' WHERE `auth`.`login` = '$userlogin'";
				$resultpasscheck = mysqli_query($link, $changepasszapr) or die("Ошибка гыг" . mysqli_error($link));
				$err = 0;
			}else{
				$err = 1;
			}
		}
	?>
	</form>

	<?php 
		if($err == 1){
			require('lcab/errorpass.php');
		}
		if($err == 0){
			require('lcab/changepassok.php');
		}
		$err = 2;
	?>
	
</div>