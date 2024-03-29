<?php
	include("config.php");
	if(isset($_POST['search'])) {
		$cont = $_POST['search_content'];
		searchPost($cont);
	}
?>
<html>
	<head>
		<title>Interfax</title>
		<meta charset="utf-8"/>
		<link rel="shortcut icon" href="http://www.interfax.ru/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<header>
		<div class="topbar clearfix">
			<ul class="top_navigation">
				<li class="top">Мобильная версия</li>
				<li class="top">Об "Интерфаксе"</li>
				<li class="top">Interfax.com</li>
				<li class="top">Интерфакс-Россия</li>
				<li class="top">Финмаркет</li>
				<li class="top">Туризм</li>
				<li class="top">Недвижимость</li>
				<li class="top">Религия</li>
				<li class="top">Конференции</li>
				<li class="followers">Вход для подписчиков</li>
			</ul>
		</div>
		<div class="middlebar">
			<div class="middleimg left">
        <a href="index.php">
					<img alt="Interfax" src="../img/logo.png"/>
				</a>
			</div>
			<div class="middlemainbar">
				<p id="money_info">Доллар США 01.10 <b class="b_money">65,74</b> <span class="span_red">-0,50</span>   ЕВРО 1.10 <b class="b_money">73,78</b> <span class="span_red">-0,81</span>   Нефть 30.09 <b class="b_money">48,43</b> <span class="span_green">+0,00</span></p>
			</div>
		</div>
	</header>
	<main class="clearfix">
				<div class="search_post">
          <?php
            checkOutPosts($_GET['q']);
          ?>
          <br><br>
          <form action="index.php" method="post">
  					<input type="text" name="search_content" placeholder="продолжить поиск">
  					<input type="submit" name="search" value="search">
  				</form>
				</div>
				<div class="side_bar">
					<p class="side_bar_headers"><b>СЮЖЕТЫ</b></p>
					<ul class="news_list1">
						<li><a class="news_link1" href="#">Дизельный скандал Volkswagen<a></li>
						<li><a class="news_link1" href="#">Борьба с "Исламским государством"<a></li>
						<li><a class="news_link1" href="#">Кризис на Украине<a></li>
						<li><a class="news_link1" href="#">Наплым мигрантов в Европу<a></li>
						<li><a class="news_link1" href="#">Протесты в Молдавии<a></li>
						<li><a class="news_link1" href="#">Все сюжеты<a></li>
					</ul> <br>
					<p class="side_bar_headers"><b>САМОЕ ЧИТАЕМОЕ</b></p>
					<ul class="news_list2">
						<li>
							<a class="news_link2" href="#">Москва<br><a>
								<span class="side_bar_news">Штрафы с грузовиков с 15 ноября будут взиматься только в Подмосковье</span><br><br>
								<hr noshade size="1" color="grey"><br>
						</li>
						<li>
							<a class="news_link2" href="#">В МИРЕ<br><a>
								<span class="side_bar_news">СМИ назвали противодействие РФ целью переброски в Турцию американских F-15С</span><br><br>
								<hr noshade size="1" color="grey"><br>
						</li>
						<li>
							<a class="news_link2" href="#">Экономика<br><a>
								<span class="side_bar_news">ЕС попросил Россию не вводить продуктовое эмбарго для Украины</span><br><br>
						</li>
					</ul><br>
					<p class="side_bar_headers"><b>ФОТОГАЛЕРЕИ</b></p>
					<ul class="news_list2">
						<li>
							<a class="news_link2" href="#">
								<img src="../img/photo1.png" alt="Церемония вручения"/>
							</a>
						</li>
				</div>
			</main>
			<footer>
				<div class="copyright">
					<a href="index.php">
						<img alt="Interfax" src="../img/flogon.png"/>
					</a>
					<span>Copyright © 1991—2015 Interfax. Все права защищены.
					Вся информация, размещенная на данном веб-сайте, предназначена только для персонального пользования и не подлежит дальнейшему воспроизведению и/или распространению в какой-либо форме, иначе как с письменного разрешения Интерфакса.
				</span>
					<div class="news_add">
						<a href="admin.php">Добавить новость</a>
					</div>
				</div>
			</footer>
		</div>
		</body>
		</html>
