<div id="acctablered" class="acctablemen">
							<p >Редакировать базу аккаунтов</p>
							<div class="acctablemenbtn">
								<form method="post">
									<input type='submit' name='addaccount' class="cabbtn" id='redtablebtn' value='Добавить акк'></input>
									<input type='submit' name='redaccount' class="cabbtn" id='redtablebtn' value='Редактировать акки'></input>
								</form>
								<?php
								if(isset($_POST['addaccount'])){
									$_SESSION['accounts'] = 'addaccount';
								}
								if(isset($_POST['redaccount'])){
									$_SESSION['accounts'] = 'redaccount';
								}

								if($_SESSION['accounts'] == 'addaccount'){
									require('lcab/addaccount.php');
								}

								if($_SESSION['accounts'] == 'redaccount'){
									require('lcab/redaccount.php');
								}

								require('lcab/hideaccandtable.php');
								
								?>
							</div>
						</div>