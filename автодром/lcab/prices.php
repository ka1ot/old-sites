<div id="pricetablemenu" style="display: block;" class="lkcabmenu hidecabmenu">
			<div class="pricetablebtns">
				<form method="post">
					<input type="submit" name="pricetableadmbtn" class="cabbtn" style="margin-left: 15px;" id="pricetableadmbtn" value='Добавить услуги'></input>
					<input type="submit" name="pricetabledmredbtn" class="cabbtn" id="pricetabledmredbtn" value="Редактировать цены"></input>
				</form>
				<div>
				<?php
					if(isset($_POST['pricetableadmbtn'])){
						$_SESSION['prices'] = 'add';
					}
					if(isset($_POST['pricetabledmredbtn'])){
						$_SESSION['prices'] = 'red';
					}

					if($_SESSION['prices'] == 'add'){
						
						require('lcab/addprices.php');
					}

					if($_SESSION['prices'] == 'red'){
						require('lcab/redprices.php');
					}
					unset($_POST['pricetabledmredbtn'], $_POST['pricetableadmbtn']);
				?>
			</div>
			</div>
		</div>