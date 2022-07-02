<?php
	
	if(!$_SESSION['authincab']==1){
		require('php/auth.php');
	}
?>
	<div id='auth'>
		<div class='login-fas-fa'>
			<i class="fas fa-user-shield"></i>
		</div>
		<div id="lktext">
			<p id="loglk" class="lktext">Login: </p>
			<p id="namelk" class="lktext">Имя: </p>
			<p id="cadmlk" class="lktext">Права: </p>
		</div>
		<form method="post">
		<input type='submit' name='lkab' id="lkab" class='lkbtns' value='Личный кабинет' onclick="lkab()"></input>
			<?php
				if(isset($_POST['lkab'])){
					if($_SESSION['checkadmin']=='admin'){
						$_SESSION['lkab'] = 1;	
					}
					if($_SESSION['checkadmin']=='seller'){
						$_SESSION['lkab'] = 2;	
					}
					if($_SESSION['checkadmin']=='user'){
						$_SESSION['lkab'] = 3;	
					}
				}
			?>
		<input type="submit" id="logout" class='lkbtns' name='logout' value="Log Out"></input>
			<?php
			if(isset($_POST['logout'])){
				$_SESSION['main'] = 1;
				$_SESSION['lkab'] = 0;
				$_SESSION['authincab'] = "none";
				$_SESSION['destroy'] = 1;
			}
			?>
		</form>
	</div>
	<?php
	echo "<p id='namebd' style='display:none;'>".$_SESSION['name']."</p>";
	echo "<p id='loginbd' style='display:none;'>".$_SESSION['login']."</p>";
	echo "<p id='adminbd' style='display:none;'>".$_SESSION['checkadmin']."</p>";
	?>
	<script type="text/javascript">
		document.getElementById('loglk').innerHTML += document.getElementById('loginbd').innerHTML;
        document.getElementById('namelk').innerHTML += document.getElementById('namebd').innerHTML;
        document.getElementById('cadmlk').innerHTML += document.getElementById('adminbd').innerHTML;
	</script>
