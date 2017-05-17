<html lang="ru">
	<head>
		<?php include ('blocks/head.php'); ?>
		<link href="style2.css" rel="stylesheet">
	</head>
	<body>
		<? /*--------------------TOP_MENU--------------------*/ ?>
		<?php include ('blocks/top_menu.php'); ?>
		<? /*--------------------EXAMPLE--------------------*/ ?>
		<div class="container-fluid">
			<ul class="body_slides">
				<li></li><!--1-->
				<li></li><!--2-->
				<li></li><!--3-->
				<li></li><!--4-->
			</ul>
			<div class="col-lg-12 fface_title">
				Федеральное государственное бюджетное образовательное учреждение высшего образования
				<h1>«Чувашский государственный университет<br> имени И.Н. Ульянова»</h1>
				Факультет информатики и вычислительной техники<br>
				Кафедра компьютерных технологий<br><br>
				<h1>Информационно-обучающая система<br> "Современные языки программирования"</h1>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div class="col-lg-8 text_block">
				<h1>О нашем продукте</h1>
				Данный обучающий ресурс предназначен для организации дистанционного процесса обучения языкам программирования на кафедре компьютерных технологий. В курс включены:
				
				<ul>
					<li>
						Лекционные теоретические материалы по современным языкам программирования;
					</li>
					<li>
						Онлайн-тесты для закрепления полученных знаний
					</li>
					<li>
						Интегрированная среда разработки по каждому языку
					</li>
				</ul>
			</div>
			<div class="col-lg-4">
				<p class="comment">
					!!!После входа в систему вместо этого блока будет надпись "Добро пожаловать, ФИО!"!!!
				</p>
				<form method="POST">
					<div class="entering_form">
						<h1>Авторизация пользователей</h1>
						<input type="text" class="" placeholder="Логин" name="login" id="login"><br>
						<input type="password" class="" placeholder="Пароль" name="pass" id="pass"><br>
						<input type="submit" name="auth" id="auth" value="Войти"><br>
						Если вы в первый раз в системе - 
						<a href="reg.php">зарегистрируйтесь</a>
					</div>
				</form>
			</div>
			<div class="row"></div>
			<div class="text_block">
				<a href="language.php"><h1>Выбор языка программирования</h1></a>
				<p class="comment">
					!!!Ссылки становятся доступными только после входа в систему!!!
				</p>
				<div class="row">
					<div class="col-lg-4">
						<img src="../img/c1.png" width="120px">
						<a href="list_courses.php">C#</a>
					</div>
					<div class="col-lg-4">
						<img src="../img/c1.png" width="120px">
						<a href="list_courses.php">C#</a>
					</div>
					<div class="col-lg-4">
						<img src="../img/c1.png" width="120px">
						<a href="list_courses.php">C#</a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<img src="../img/c1.png" width="120px">
						<a href="list_courses.php">C#</a>
					</div>
					<div class="col-lg-4">
						<img src="../img/c1.png" width="120px">
						<a href="list_courses.php">C#</a>
					</div><div class="col-lg-4">
						<img src="../img/c1.png" width="120px">
						<a href="list_courses.php">C#</a>
					</div>
				</div>
			</div>
			<div class="row"></div>
			<div class="text_block">
				<h1>Авторы-разработчики</h1>
				<div class="row">
					<div class="col-lg-6">
						<img src="../img/avatar_1.png" width="120px">
						Андреев Антон, программный менеджер
					</div>
					<div class="col-lg-6">
						<img src="../img/avatar_2.png" width="120px">
						Тимофеев Александр, разработчик архитектуры
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<img src="../img/avatar_3.png" width="120px">
						Никитин Сергей, программист
					</div>
					<div class="col-lg-6">
						<img src="../img/avatar_4.png" width="120px">
						Иванов Иван, тестировщик
					</div>
				</div>
			</div>
		</div>
		<? /*--------------------SCRIPTS--------------------*/ ?>
		<?php include ('blocks/scripts.php'); ?>
	</body>
</html>