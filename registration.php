<?php 
	session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Интернет-магазин - Регистрация</title>
	</head>
	<body bgcolor="#FFDEAD">
		<table height="100%" align="center">
			<tr>
				<td>
					<p align="center">
						<font size="6">
							<a href="index.php">Вернуться на главную</a><br>
							<b>Регистрация</b>
						</font>
					</p>
					<form method="post" action="register.php">
                     <p align="center">Логин (не менее 6 символов)</p>
                     <input type="text" name="login" minlength="6" placeholder="Логин (не менее 6 символов)" required>
                     <p align="center">Пароль (не менее 8 символов)</p>
                     <input type="password" name="password" minlength="8" placeholder="Пароль (не менее 8 символов)" required>
                     <br>
                     <br>
                     <p align="center"><input type="submit" value="Зарегистрироваться"></p>
                     <?php
						if (isset($_SESSION['login'])) {
							echo '<script>location.href="index.php"</script>';
						}
						else {
							if(!empty($_SESSION['login_already_exist'])){
								if ($_SESSION['login_already_exist']==true)
								{
									echo '<p align="center">Этот логин занят! Введите другой логин для регистрации!</p>';
									$_SESSION['login_already_exist']=false;
								}
							}
						}
					?>
                  </form>
					<br>
					<br>
					<br>
					<br>
				</td>
			</tr>
		</table>
	</body>
</html>