<?php
	require ("includes/db_connect.php");
	
	if (isset($_POST["regist"])){
		$name = $_POST["name"];
		$surname = $_POST["surname"];
		$login = $_POST["login"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$password = $_POST["password"];

		$query = "SELECT * FROM users WHERE login = '$login'";
		$result = mysqli_query($link, $query);

		if (mysqli_num_rows($result) == 0){
			$sql ="INSERT INTO users(name, surname, login, phone, email, password) VALUES ('$name', '$surname', '$login', '$phone', '$email', '$password')";
			$add = mysqli_query($link, $sql);
			session_start();
			$_SESSION["status"] = "yes";
			$_SESSION["name"] = $name;
			$_SESSION["surname"] = $surname;
			$_SESSION["login"] = $login;
			$_SESSION["phone"] = $phone;
			$_SESSION["email"] = $email;
			$_SESSION["password"] = $password;
			header("Location: index.php");
		} else {
			$message = 'Такой пользователь уже есть!';
		}
	}

	include ("includes/header.php");
?>

	<!-- Контент сайта -->
	<main>
		<div class="container">
			<div class="register-form-container">
				<div class="form-fields">
					<h1 class="regist-title">Регистрация</h1>
					<form method="post">
						<div class="form-field">
							<input type="text" name="name" placeholder="Имя" required="" autofocus>
						</div>
						<div class="form-field">
	                    	<input type="text" name="surname" placeholder="Фамилия" required="">
	                	</div>
	                    <div class="form-field">
							<input type="text" name="login" placeholder="Логин" required="">
						</div>
						<div class="form-field">
							<input type="text" name="phone" placeholder="Номер телефона" required="">
						</div>
						<div class="form-field">
							<input type="email" name="email" placeholder="Почта" required="">
						</div>
						<div class="form-field">
							<input type="password" name="password" placeholder="Пароль" required="">
						</div>
						<div class="form-buttons">
							<button class="regist-button" name="regist">Зарегистрироваться</button>
						</div>
					</form>
				</div>
			</div>
			<h1 class="title regist-error"><?php echo $message; ?></h1>
		</div>
	</main>

<?php
	include ("includes/footer.php");
?>