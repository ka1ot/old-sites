<!DOCTYPE html>
<html>
<head>
	<title>Сайт</title>
	<link rel="stylesheet" type="text/css" href="css/stylemain.css">
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/d0511322e2.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(65377963, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/65377963" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	<div class='mainwindow'>
		<div class='hat'>
			<i class="fas fa-book" onclick="location.href = 'php/login.php';"></i>
			<h1>Колесо INC.</h1>
			<h2>Лучшее у нас</h2>
			<h1 id='phonenumberhat'>8(999)666-66-66</h1>
		</div>
		<div class='mainsite'>
			<div class='main'>
				<div class='sections'>
					<div id='sectionf' class='FirstSection'>
						<div id='FirstSection' class='liSection' onclick="location.href = '#mainsecond';">
							<a href='#mainsecond'>О нас</a>
						</div>
					</div>
					<div id='sections' class='SecondSection'>
						<div id='SecondSection' class='liSection' onclick="location.href = '#prices';">
							<a href='#prices'>Цены</a>
						</div>
					</div>
					<div id='sectiont' class='ThriedSection'>
						<div id='ThriedSection' class='liSection' onclick="information();">
							<a>Контакты</a>
						</div>
						<div id='thriedsectionmain'>
							<p style='text-align: center; font-size: 24px;'>Пн-Пт: 9:00-19:00</p>
							<p style='text-align: center; font-size: 24px;'>Cб-Вс: 9:00-23:00</p>
							<p style='text-align: center; font-size: 24px;'>Телефон: 8(999)666-66-66</p>
							<p style='text-align: center; font-size: 18px;'>Адрес: м.1905 года, ул. Ивушкина, д.314 к.12</p>
 						</div>
					</div>
				</div>
				<div class='Photo'>
				<div id="AutoPhoto">
					<div class='AutoPhoto'>
					</div>
				</div>
				<p>Колесо</p>
			</div>
			</div>
		</div>
		<!--Ниже главной менюшки мэин-->

			<div class='mainsecond' id='mainsecond'>
				<div class='mainwindowsecond'>
					<div class='firstinfo'>
						<h1>О нас</h1>
						<br>
						<br>
						<br>
						<br>
						<p>Компания Колесо предоставляет множество услуг для вашего автомобиля.</p>
						<p>Почему выбирают нас: 	
						<p>Сертифицированные специалисты с опытом работы у официального дилера</p>
						<p>Современное оборудование, оригинальный спец. инструмент</p>
						<p>Гарантия качества</p>
						<p>Все работы производятся с соблюдением стандартов и тех требований заводов производителей</p>
						<p>Гибкая система скидок</p>
	
					</div>
				<div class='secondinfo'>
					<div class='secondinfoqwe'></div>
				</div>
				</div>
			<div class='BMWPNG'></div>
			<div class="services">
				<h2>Наши услуги</h2>
				<div class="serices_blocks">
					<div class="services_block bl1">
						<div class="services_block_middle">
							<div class="services_blocks">
								<div class="services_blocks_title">
									<h3>Кузовной цех</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="services_block bl2">
						<div class="services_block_middle">
							<div class="services_blocks">
								<div class="services_blocks_title">
									<h3>Мойка и химчистка</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="services_block bl3">
						<div class="services_block_middle">
							<div class="services_blocks">
								<div class="services_blocks_title">
									<h3>Цех ТО и ремонта</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="serices_blocks">
					<div class="services_block bl4">
						<div class="services_block_middle">
							<div class="services_blocks">
								<div class="services_blocks_title">
									<h3>Шиномонтаж и ремонт колес</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="services_block bl5">
						<div class="services_block_middle">
							<div class="services_blocks">
								<div class="services_blocks_title">
									<h3>Малярный цех (камера Nova Verta)</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="services_block bl6">
						<div class="services_block_middle">
							<div class="services_blocks">
								<div class="services_blocks_title">
									<h3>Электрика</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class='prices' id='prices'>
				<h1>Цены</h1>
				<table>
  
  <tr>
    <th>№ п/п</th>
    <th>Услуги</th>
    <th>Сроки, мин.</th>
	<th>Цена, руб.</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Мойка и химчистка</td>
    <td>30</td>
	 <td>500</td>
  </tr>
  <tr>
    <td>1</td>
    <td>Цех ТО и ремонта</td>
    <td>60</td>
	 <td>500</td>
  </tr>
  <tr>
    <td>1</td>
    <td>Шиномонтаж и ремонт колес</td>
    <td>30</td>
	 <td>500</td>
  </tr>
  <tr>
    <td>1</td>
    <td>Малярный цех</td>
    <td>60</td>
	 <td>1500</td>
  </tr>
  <tr>
    <td>1</td>
    <td>Электрика</td>
    <td>по ситуации</td>
	 <td>2500</td>
  </tr>
  <tr>
    <td>1</td>
    <td>Кузовной цех</td>
    <td>по ситуации</td>
	 <td>1000-5000</td>
  </tr>
</table>
			</div>
			<div id="feedback" class='zakaz'>
				<div class='zakazplate'>
					<h1>Заказ билетов</h1>
				<form method="POST"> 
				              <input type="text" name='name' placeholder="Имя" required>
				              <input type="email" name='email' placeholder="Email" required>
				            
				            <div class="form-field half-width">
				                <select name='usl' class="select-field">
				                  <option style="color: gray;">Кол-во Л/C</option>
				                  <?php
				                  require('php/connect.php');
				                  $dbid ="SELECT ls FROM tovar";
											$resultdbid = mysqli_query($link, $dbid) or die("Ошибка " . mysqli_error($link)); 
												if($resultdbid){
													$rows = mysqli_num_rows($resultdbid);
														for($i=1;$i<=$rows;$i++){
														    echo '<tr>';
														    $resultdb=mysqli_query($link,"SELECT ls FROM `tovar` WHERE id='$i'");
															while($row = mysqli_fetch_array($resultdb)){
																$ls=$row['ls'];
															    echo '<option> До '.$ls.' Л/Cил</option>';
											    			}
														}
												}
				                  ?>
				                </select>
				              <input type="tel" name ='tel' placeholder="Номер телефона" required>
				            </div>
				            <input type="submit" name="sendinfo" id="f" class="btn btn-round" value='Заказать билет'></input>
				            <?php
				           if(isset($_POST['sendinfo'])){
				           	require 'php/connect.php';
				           	$name = $_POST['name'];
				           	$email = $_POST['email'];
				           	$lsusl = $_POST['usl'];
				           	$tel = $_POST['tel'];
				           	$string = preg_replace('~[^0-9]+~','',$lsusl);
								$log = "INSERT INTO `zakaz` (`name`, `email`, `ls`, `nomer`) VALUES ('$name','$email','$string','$tel')";
								    $result = mysqli_query($link, $log) or die("Ошибка с бд" . mysqli_error($link)); 
								      	if($result){
								            ?>
							            <script type="text/javascript">
								           		alert("Ваш заказ принят, мы перезвоним вам в ближайшее время.");
								           	</script>
								            <?php
								        }else{
								        ?>
								           	<script type="text/javascript">
								           		alert("Ошибка ввода!");
								           	</script>
								        <?php
						    }	  
							}
							unset ($_POST['sendinfo'],$_POST['sendinfo'],$_POST['email'],$_POST['lsusl'],$_POST['tel']);
				          ?>
				          </form>
				      </div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src='js/javamain.js'></script>
	<script src="js/js_scroll.js" type="text/javascript"></script>
</body>
</html>