<?php
		session_start();
		if($_SESSION['checkadmin'] == 'admin'){
		?>
			<script type="text/javascript">
				document.location.href = "../admin.php";
			</script>
			<?php
		}else{
			if($_SESSION['checkadmin'] == 'user'){
			?>
			<script type="text/javascript">
				document.location.href = "../user.php";
			</script>
			<?php
		}
		}
?>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<script src="https://kit.fontawesome.com/d0511322e2.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
</head>
<body>
	<div class='loginmain'>
		<p style="font-size: 54px; text-align: center;">Авторизация</p>
		<form method="POST">
			<input type="text" name="login" id='login' placeholder="Login" required>
			<input type="password" name="pass" id='pass' placeholder="Password" required>
			 <i class="far fa-eye" id="eye" onclick="pass()" style="color: black; font-size: 26px;"></i>
			<input type="submit" name="submit" value="Авторизоваться">
		</form>
		<?php
		require('connect.php');
									if($_SESSION['authincab'] == 0 || $_SESSION['authincab'] == 'none'){
									if(isset($_POST['submit'])){
									if(isset($_POST['login']) && isset($_POST['pass'])){
									    $username = $_POST['login']; 
								        $password = sha1($_POST['pass']);  
								        $log = "SELECT * FROM `auth` WHERE login = '$username' and password = '$password'";
								        $data = mysqli_query($link, $log);
								        	if(mysqli_num_rows($data) == 1){
								                $result = mysqli_query($link, $log); 
								                	if($result){
								                		$forautharray=mysqli_query($link,"SELECT * FROM `auth` WHERE login = '$username'");
								                		$autharray = mysqli_fetch_array($forautharray);
								                		$_SESSION['authincab'] = 1;
								                		$_SESSION['name'] = $autharray['name'];
								                		$_SESSION['login'] = $autharray['login'];
								                		$_SESSION['email'] = $autharray['email'];
								                		$_SESSION['checkadmin'] = $autharray['checkadmin'];
								                		$_SESSION['nomer']= $autharray['nomer'];	
								                		if($_SESSION['checkadmin'] == 'admin'){
															?>
															<script type="text/javascript">
																document.location.href = "../admin.php";
															</script>
															<?php
														}else{
															?>
															<script type="text/javascript">
																document.location.href = "../user.php";
															</script>
															<?php
														}
								                    }else{
								                    	$_SESSION['authincab'] = 0;
								                        ?>
								                        	<script type="text/javascript">
								                        		document.getElementById('login').className = "Auth";
								                        		document.getElementById('pass').className = "Auth";
								                        	</script>
								                        <?php
								                    }
								                }else{
								                	$_SESSION['authincab'] = 0;
								                        ?>
								                        	<script type="text/javascript">
								                        		document.getElementById('login').className = "Auth";
								                        		document.getElementById('pass').className = "Auth";
								                        	</script>
								                        <?php
								                }   
								            }
										}
									}
									?>
	</div>
	<script type="text/javascript" src='../js/js.js'></script>
</body>