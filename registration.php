<?php 
if(!empty($_POST)) {
 $db = new PDO('mysql:host=localhost;dbname=vkloc;charset=utf8', 'vkloc', '12345');
 $db->query('insert into users (email, login, password, date) values ("' . $_POST['email'] . '", "' . $_POST['login'] . '", "' . $_POST['password'] .'" , "' . $_POST['date'] . '")');
 $thankYouMessage = $_POST['login'] . ', You are Welcome';
}
?>
<DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8"> <!--Распознавание языка-->
			<title> Регистрация </title> <!--Заголовок-->
			 <link rel="stylesheet" type="text/css" href="/css/main.css"> <!--Подключение Css-->
	</head>
	<body >
			<h1> Регистрация </h1>  <!--Заголовок-->
			<form method="post"> 
				 <div class="main"> <!--Подключение сss, для выравнивания полей-->
					<div class="field">
						<label for="email">Поле для  ввода email</label>
						<input type="text" id="email" name="email"/>
					</div>
					<div class="field">
						<label for="login"> Поле для ввода логина</label>
						<input type="text" id="login" name="login" />
					</div>
					<div class="field">
						<label for="password">Поле для ввода пароля</label>
						<input type="password" id="password" name="password" />
					</div>
					<div class="field">
						<label for="date"> Дата рождения </label>
						<input type="text" id="date" name="date"/>
					</div>
					 <div class="field">
						<label for="submit"> </label> <!--Кнопка-->
						<input type="submit" id="submit" />
					</div>
					 <div class="field">
						<label for="checkbox">Запомнить</label>
						<input type="checkbox" id="checkbox" name="checkbox" />
					</div>
				</div>
			</form>  <!--Формы-->
			<div class="field">	</div> <!--Отмена флоат для картинки-->
			<img src="/image/vk.loc.jpg"> <!--Картинка-->
			<a href="index.php"> Ссылка на сайт </a> <!--Ссылка-->
	</body>
</html>
