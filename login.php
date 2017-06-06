<?php 
	session_start();
?>
<meta charset="utf-8">
<?php
			$login     = htmlspecialchars($_POST['login']);
			$password  = htmlspecialchars($_POST['password']);
			$logins    = file('files/logins_J8ki9q0R8UsyR821kqPsnF2.txt', FILE_IGNORE_NEW_LINES);
			$passwords = file('files/passwords_K7uQ6t2h8Y6t1RBn1.txt', FILE_IGNORE_NEW_LINES);
			for ($i = 0; $i < count($logins); $i++) {
			    if ($login == $logins[$i] && $password == $passwords[$i]) {
				$_SESSION['login'] = $login;
				if ($_SESSION['login'] == 'ilya.aleksin' && $password == '12345678') {
				    $_SESSION['adminmode'] = 'activated';
				}
				echo '<script>location.href="', $_SERVER['HTTP_REFERER'], '"</script>';
				exit;
			    }
			}
			echo 'Произошла ошибка ввода, <a href="index.php">Попробуйте снова</a>';
			?>