<div id="pricetablered" class="pricetablemen">
							<p>Редакировать цены на услуги</p>
							<div class="pricetablemenbtn">
								<form method="post">
									<input type="text" name="redid" class="forminputtable" placeholder="id">
									<input type="text" name="redysluga" class="forminputtable" placeholder="Конфиг">
									<input type="text" name="redage" class="forminputtable" placeholder="ЛС">
									<input type="text" name="redtime" class="forminputtable" placeholder="Время">
									<input type="text" name="redprice" class="forminputtable" placeholder="Цена">
									<input type='submit' name='redredtable' class="cabbtn" id='redtable' value='Применить'></input>
								</form>
								<?php
								require('php/connect.php');
								if(isset($_POST['redredtable'])){
									$redid = $_POST['redid']; 
							    	$redysluga = $_POST['redysluga'];
							    	$redage = $_POST['redage']; 
							    	$redtime = $_POST['redtime'];
							    	$redprice = $_POST['redprice'];  
									$zaprosnared = "UPDATE `tovar` SET `konfig` = '$redysluga', `ls` = '$redage', `time` = '$redtime', `price` = '$redprice' WHERE `tovar`.`id` = '$redid'";
									$result = mysqli_query($link, $zaprosnared) or die("Ошибка с бд" . mysqli_error($link));
								}
								?>
							</div>
						</div>