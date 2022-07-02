<div id="pricetableadd" class="pricetablemen">
						<p>Добавление услуги</p>
						<div class="pricetablemenbtn">
							<form method="POST">
								<input type="text" name="addysluga" class="forminputtable" placeholder="Название усл." required>
								<input type="text" name="addage" class="forminputtable" placeholder="Возраст" required>
								<input type="text" name="addtime" class="forminputtable" placeholder="Время" required>
								<input type="text" name="addprice" class="forminputtable" placeholder="Цена" required>
								<input type='submit' name='addtable' class="cabbtn" id='addtable' value='Создать'></input>
								<?php
								require('php/connect.php');
								if(isset($_POST['addtable'])){
							    	$addysluga = $_POST['addysluga']; 
							    	$addage = $_POST['addage'];
							    	$addtime = $_POST['addtime']; 
							    	$addprice = $_POST['addprice'];  
							    	$zaprosaddtablesql ="INSERT INTO `tovar` (ysluga, old, time, price) VALUES ('$addysluga','$addage','$addtime','$addprice')";
									$result = mysqli_query($link, $zaprosaddtablesql) or die("Ошибка с бд" . mysqli_error($link));
									unset($_POST['addtable'],$addprice,$addysluga,$addtime,$addage);
								}
								?>
							</form>
						</div>
					</div>