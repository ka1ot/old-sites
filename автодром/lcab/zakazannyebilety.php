					<table>
					<tr class='ykaz'>
						<th id='ykaz'>Конфиг</th>
						<th id='ykaz'>ЛС</th>
						<th id='ykaz'>Время</th>
						<th id='ykaz'>Цена</th>
					</tr>
						<?php
						require('php/connect.php');
						$nomer = $_SESSION['nomer'];
						$searchzakaz ="SELECT * FROM zakaz WHERE nomer='$nomer'";
						 $data = mysqli_query($link, $searchzakaz);
						if(mysqli_num_rows($data) != 0){
							$row = mysqli_fetch_array($data);
							$ls = $row['ls'];
							$dbid ="SELECT * FROM tovar";
							$resultdbid = mysqli_query($link, $dbid) or die("Ошибка " . mysqli_error($link)); 
								if($resultdbid){
									$rows = mysqli_num_rows($resultdbid);
										for($i=1;$i<=$rows;$i++){
										    echo '<tr>';
										    $resultdb=mysqli_query($link,"SELECT * FROM `tovar` WHERE id='$i' and ls='$ls'");
											while($rowr = mysqli_fetch_array($resultdb)){
												$konfig=$rowr['konfig'];
												$ls=$rowr['ls'];
												$time=$rowr['time'];
												$price=$rowr['price'];
											    echo '<th>'.$konfig.'</th><th>До '.$ls.' Л/C</th><th>'.$time.'</th><th>'.$price.' рублей</th>';
							    			}
							    			echo '</tr>';
										}
								}
							}
						?>
					</table>