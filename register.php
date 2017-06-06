<?php 
	session_start();
?>
<meta charset="utf-8">
<?php 
					if (isset($_SESSION['login'])) {
							echo '<script>location.href="index.php"</script>';
						}
					else {
						$login=htmlspecialchars($_POST['login']);
						$password=htmlspecialchars($_POST['password']);
						$logins=file('files/logins_J8ki9q0R8UsyR821kqPsnF2.txt', FILE_IGNORE_NEW_LINES);
						
						for ($i=0; $i<count($logins); $i++)
						{
							if ($login==$logins[$i])
							{
								$_SESSION['login_already_exist']=true;
								echo '<script>location.href="registration.php"</script>';
								exit;
							}
						}
						
						file_put_contents('files/logins_J8ki9q0R8UsyR821kqPsnF2.txt', $login."\n", FILE_APPEND);
						file_put_contents('files/passwords_K7uQ6t2h8Y6t1RBn1.txt', $password."\n", FILE_APPEND);
						$_SESSION['login']=$login;
						echo 'Вы успешно зарегистрированы! <a href="index.php">Перейти на главную</a>';
					}
?>