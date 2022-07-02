<div id='showtableusers'>
	<form method="post">
		<input type="text" name="searchloginoremail" id='changepassinput' class='forminputtablesearch forminputtable' placeholder="Логин или Email">
		<input type="submit" name="searchbtn" class="cabbtn" value="Найти">
	</form>
	<table>
	<tr class='ykaz'>
			<th>id</th>
			<th>login</th>
			<th>email</th>
			<th>права</th>
		</tr>
	<?php
	require('php/connect.php');
	if(isset($_POST['searchbtn'])){
		$emailorlogin = $_POST['searchloginoremail'];
		$sqlsearchlogin = "SELECT * FROM auth WHERE login = '$emailorlogin' OR email = '$emailorlogin'";
		$resultsearchlogin = mysqli_query($link, $sqlsearchlogin) or die("Ошибка " . mysqli_error($link));
		$searchuser = mysqli_fetch_array($resultsearchlogin);
		?>
		<?php
		$userid=$searchuser['id'];
		$userlogintable=$searchuser['login'];
		$emailuser=$searchuser['email'];
		$checkadmin=$searchuser['checkadmin'];
		echo '<tr><th>'.$userid.'</th><th>'.$userlogintable.'</th><th>'.$emailuser.'</th><th>'.$checkadmin.'</th></tr>';
	}
	?>
	</table>
</div>