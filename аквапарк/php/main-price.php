<?php
?>
<div id="mainulprice">
	<div class='priceshat'>
		<i class="fas fa-ticket-alt"></i>
		<p class='pricehattext'>Купить билет</p>
	</div>
	<table>
		<tr class='ykaz'>
			<th>Услуга</th>
			<th>Возраст</th>
			<th>Время</th>
			<th>Цена</th>
		</tr>
			<?php
				$dbid ="SELECT * FROM tovar";
				$resultdbid = mysqli_query($link, $dbid) or die("Ошибка " . mysqli_error($link)); 
					if($resultdbid){
						$rows = mysqli_num_rows($resultdbid);
							for($i=1;$i<=$rows;$i++){
							    echo '<tr>';
							    $resultdb=mysqli_query($link,"SELECT * FROM `tovar` WHERE id='$i'");
								while($row = mysqli_fetch_array($resultdb)){
									$ysluga=$row['ysluga'];
									$age=$row['old'];
									$time=$row['time'];
									$price=$row['price'];
								    echo '<th>'.$ysluga.'</th><th>'.$age.' лет</th><th>'.$time.'</th><th>'.$price.' рублей</th>';
				    			}
				    			echo '</tr>';
							}
					}
			?>
	</table>
</div>