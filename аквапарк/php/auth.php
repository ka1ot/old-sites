<?php
$auth = $_SESSION['authincab'];
require ('php/connect.php');
?>
				<div id='auth'>
					<div class='logpannel'>
						<div class='logpannel1'>
							<p>Login :</p>
							<p>Password :</p>
						</div>
						<div class='logpannel2'>
							<div class='login-fas-fa'>
								<i class="fas fa-user-shield"></i>
								<p> 
							</div>
							<div class="login-inputs">
									<form method="post">
							    	<input type="text" name="login" id="login" class='authme' required>
								    <input type="password" name="pass" id="pass" class='authme' required>
								    <i class="far fa-eye" id="eye" onclick="pass()" style="color: white;"></i>
								    <input type='submit' name='authbtn' id='authbtn' value='Войти' onclick="authandlcab()"></input>
							    </form>
									<?php
									if($_SESSION['authincab'] == 0 || $_SESSION['authincab'] == 'none'){
									if(isset($_POST['authbtn'])){
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
								                		$_SESSION['checkadmin'] = $autharray['checkadmin'];	
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
						</div>
					</div>
				</div>