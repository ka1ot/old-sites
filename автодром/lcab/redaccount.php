<div class="createaccount">
	<form method="post">
		<input type="text" name="rediduser" id='changepassinput'class='forminputtable' placeholder="id" required>
		<input type="text" name="redloginuser" id='changepassinput'class='forminputtable' placeholder="login" required>
		<input type="text" name="redpassuser" id='changepassinput'class='forminputtable' placeholder="password" required>
		<input type="text" name="redemailuser" id='changepassinput'class='forminputtable' placeholder="email" required>
		<input type="text" name="rednameuser" id='changepassinput'class='forminputtable' placeholder="name" required>
		<input type="text" name="redfamilyuser" id='changepassinput'class='forminputtable' placeholder="family" required>
		<input type="text" name="redfathernameuser" id='changepassinput'class='forminputtable' placeholder="fathername" required>
		<input type="text" name="redprivelegy" id='changepassinput'class='forminputtable' placeholder="Привелегия" required>
		<input type="submit" name="reduserbtn" id="changepassbtninform" class="cabbtn" value='Редактировать акк'>
	</form>
	<?php
		if(isset($_POST['reduserbtn'])){
			require('php/connect.php');
			$rediduser = $_POST['rediduser'];
			$redloginuser = $_POST['redloginuser'];
			$redpassuser = $_POST['redpassuser'];
			$redpassuser = sha1($redpassuser);
			$redemailuser = $_POST['redemailuser'];
			$rednameuser = $_POST['rednameuser'];
			$redfamilyuser = $_POST['redfamilyuser'];
			$redfathernameuser = $_POST['redfathernameuser'];
			$redprivelegy = $_POST['redprivelegy'];
			$logadd = "SELECT * FROM `auth` WHERE id = '$rediduser'";
			$resultdbadd=mysqli_query($link,$logadd);
			if(mysqli_num_rows($resultdbadd) == 1){

			$addzapr = "UPDATE `auth` SET `login` = '$redloginuser' , `password` = '$redpassuser',`email` = '$redemailuser',`name` = '$rednameuser',`family` = '$redfamilyuser',`fathername` = '$redfathernameuser', `checkadmin` = '$redprivelegy' WHERE `auth`.`id` = '$rediduser'";
			$resultdb=mysqli_query($link,$addzapr);
			$error = "<div class='changepassok'><h1 id='changepassok' class='changepasstext'>Пользватель успешно создан</h1></div>";
		}else{
			$error = "<div class='changepasserr'><h1 id='changepasserr' style='width: 250px;'>Пользватель с таким логином или email уже создан</h1></div>";
		}
			echo $error;
		}
	?>
</div>