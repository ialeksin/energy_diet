<?php 
	session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Поступившие заказы</title>
		<style>
		   a { 
			text-decoration: none; 
		   }
		</style>
	</head>
	<body bgcolor="#FFDEAD">
		<font face="Calibri">
<?php 
	$logins=file('files/orderslogins.txt', FILE_IGNORE_NEW_LINES);
	$fullnames=file('files/ordersfullnames.txt', FILE_IGNORE_NEW_LINES);
	$phonenumbers=file('files/ordersphonenumbers.txt', FILE_IGNORE_NEW_LINES);
	$emails=file('files/ordersemails.txt', FILE_IGNORE_NEW_LINES);
	$addresses=file('files/ordersaddresses.txt', FILE_IGNORE_NEW_LINES);
	$dates=file('files/ordersdates.txt', FILE_IGNORE_NEW_LINES);
	$items=file('files/ordersitems.txt', FILE_IGNORE_NEW_LINES);
	for ($i=0; $i<count($items); $i++)
	{
	echo '
		Логин: ', $logins[$i], '<br>
		Ф.И.О.: ', $fullnames[$i], '<br>
		Тел. номер: ', $phonenumbers[$i], '<br>
		E-mail: ', $emails[$i], '<br>
		Адрес: ', $addresses[$i], '<br>
		Дата заказа: ', $dates[$i], '<br>
		<br>
		Заказ:
		<br>
		<br>
		', $items[$i], '
		<br>
		-------------------------------------------------------------------------------
		<br>
		<br>
		';
	}
?>
		<form action="cleanorders.php">
			<input type="submit" value="Очистить журнал заказов">
		</form>
		<a href="index.php">Вернуться на главную страницу</a>
		</font>
	</body>
</html>