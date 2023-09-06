<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Electron: Интернет-магазин электроники</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="images/main_icon.svg" type="image/x-icon">
</head>
<body>
	<!-- Шапка сайта -->
	<header>
			<div class="header-top">
				<div class="container">
					<div class="header-top-box">
						<div class="contacts-block">
							<div class="contacts-phone">
								<a href="tel: +021-95-51-84" class="header-top-links contacts-phone-link">
									<img src="images/phone.svg" class="contacts-icons">
									+7-989-449-29-49
								</a>
							</div>
							<div class="contacts-mail">
								<a href="mailto: email@email.com" class="header-top-links contacts-phone-mail">
									<img src="images/email.svg" class="contacts-icons">
									electron2023@gmail.com
								</a>
							</div>
						</div>
						<div class="reg-block">
							<div class="reg">
								<?php
									if (isset($_SESSION["status"]) == "yes") {
										echo '
										<a href="#" class="header-top-links logout-show">
											<img src="images/user.svg" class="contacts-icons">
													'.$_SESSION["name"].'
										</a>';
									} else {
										echo '
										<a href="#" class="header-top-links login-link">
											<img src="images/user.svg" class="contacts-icons">
													Войти
										</a>';
									}
								?>
							</div>
						</div>
					</div>

					<div class="login-block">
						<div class="form-fields">
							<span class="close-button-span">
								<i class="fa fa-times close-button" aria-hidden="true"></i>
							</span>
							<h1 class="login-title">Вход</h1>
							<form method="post">
								<div class="form-field">
									<input type="text" name="auth-login" placeholder="Логин" required class="login">
								</div>
								<div class="form-field">
									<input type="password" name="auth-password" placeholder="Пароль" required class="password">
								</div>
								<div class="form-buttons">
									<button class="login-button">Войти</button>
								</div>
								<span class="row">
									Вы не зарегистрированы ?
								</span>
								<a href="regist.php" class="row regist-link">
									Регистрация
								</a>
							</form>
						</div>
					</div>
					
					<div class="logout-block">
						<a href="#" class="logout-link">Выйти</a>
					</div>
				</div>
			</div>

			<div class="header-middle">
				<div class="container">
					<div class="header-middle-box">
						<div class="logo">
							<a href="index.php" class="logo-link">
								Electron<span class="dot">.</span>
							</a>
						</div>
						<div class="search-block">
							<form method="get" action="search.php">
								<div class="search-block-box">
									<input type="text" class="search-text" name="search-text" placeholder="Введите название" required>
									<button class="search-button">Поиск</button>
								</div>
							</form>
						</div>
						<div class="cart-block">
							<a href="cart.php" class="cart-link">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="header-bottom">
				<nav>
					<div class="container">
						<ul class="menu-list">
							<li class="active"><a href="index.php" class="menu-list-link">Главная</a></li>
							<li><a href="index.php#catalog" class="menu-list-link">Каталог</a></li>
							<li><a href="index.php#new-products" class="menu-list-link">Новые продукты</a></li>
							<li><a href="index.php#popular" class="menu-list-link">Популярные</a></li>
							<li><a href="info.php" class="menu-list-link">О нас</a></li>
						</ul>
					</div>
				</nav>
			</div>
	</header>