<div class="createaccount">
	<form method="post">
		<input type="text" name="addloginuser" id='changepassinput'class='forminputtable' placeholder="login" required>
		<input type="text" name="addpassuser" id='changepassinput'class='forminputtable' placeholder="password" required>
		<input type="text" name="addemailuser" id='changepassinput'class='forminputtable' placeholder="email" required>
		<input type="text" name="addnameuser" id='changepassinput'class='forminputtable' placeholder="name" required>
		<input type="text" name="addfamilyuser" id='changepassinput'class='forminputtable' placeholder="family" required>
		<input type="text" name="addfathernameuser" id='changepassinput'class='forminputtable' placeholder="fathername" required>
		<input type="text" name="addprivelegy" id='changepassinput'class='forminputtable' placeholder="Привелегия" required>
		<input type="submit" name="adduserbtn" id="changepassbtninform" class="cabbtn" value='Создать акк'>
	</form>
	<?php
		if(isset($_POST['adduserbtn'])){
			require('php/connect.php');
			$addloginuser = $_POST['addloginuser'];
			$addpassuser = $_POST['addpassuser'];
			$addemailuser = $_POST['addemailuser'];
			$addnameuser = $_POST['addnameuser'];
			$addfamilyuser = $_POST['addfamilyuser'];
			$addfathernameuser = $_POST['addfathernameuser'];
			$addprivelegy = $_POST['addprivelegy'];
			$logadd = "SELECT * FROM `auth` WHERE login = '$addloginuser' AND email = '$addemailuser' OR login = '$addloginuser' OR email = '$addemailuser'";
			$resultdbadd=mysqli_query($link,$logadd);
			if(mysqli_num_rows($resultdbadd) == 0){
			$addzapr = "INSERT INTO `auth` (`id`, `login`, `password`, `email`, `name`, `family`, `fathername`, `checkadmin`) VALUES (NULL, '$addloginuser', 'sha1($addpassuser)', '$addemailuser', '$addnameuser', '$addfamilyuser', '$addfathernameuser', 'user');";
			$resultdb=mysqli_query($link,$addzapr);
			$error = "<div class='changepassok'><h1 id='changepassok'>Пользватель успешно создан</h1></div>";
		}else{
			$error = "<div class='changepasserr'><h1 id='changepasserr'>Пользватель с таким логином или email уже создан</h1></div>";
		}
			echo $error;
		}
	?>
</div>