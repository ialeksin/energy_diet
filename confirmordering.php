<?php 
	session_start();
	for ($i=0; $i<$_SESSION['cartcounter']; $i++)
	{
		$sum=$sum+$_SESSION['price'.$i]*$_SESSION['quantity'.$i];
		file_put_contents('files/ordersitems.txt', $_SESSION['item'.$i].' ('.$_SESSION['quantity'.$i].') - '.$_SESSION['price'.$i]*$_SESSION['quantity'.$i].'<br>', FILE_APPEND);
	}
	file_put_contents('files/ordersitems.txt', ' --- '.$sum.' --- '."\n", FILE_APPEND);
	$login=$_SESSION['login'];
	$fullname=$_GET['fullname'];
	$phonenumber=$_GET['phonenumber'];
	$email=$_GET['email'];
	$address=$_GET['address'];
	$date=$_GET['date'];
	date_default_timezone_set('Etc/GMT-6');
	$orderingdate=date("d.m.y H:i");
	file_put_contents('files/orderslogins.txt', $login."\n", FILE_APPEND);
	file_put_contents('files/ordersfullnames.txt', $fullname."\n", FILE_APPEND);
	file_put_contents('files/ordersphonenumbers.txt', $phonenumber."\n", FILE_APPEND);
	file_put_contents('files/ordersemails.txt', $email."\n", FILE_APPEND);
	file_put_contents('files/ordersaddresses.txt', $address."\n", FILE_APPEND);
	file_put_contents('files/ordersdates.txt', $date."\n", FILE_APPEND);
	$_SESSION['cartcounter']=0;
	echo '<script>location.href="thankyou.php"</script>';
?>