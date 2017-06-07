<?php 
	session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Кабинет администратора</title>
		<style>
		   a { 
			text-decoration: none; 
		   }
		</style>
	</head>
	<body bgcolor="#FFDEAD">
		<font face="Calibri">
		<table>
		<tr>
		<td colspan="4" ALIGN=CENTER> 
				<font size="5" color="brown" face="Arial">
				<p><b>Выбрать новость дня:</b>
                        
							 <?php $daynews=file('files/key_news.txt', FILE_IGNORE_NEW_LINES); ?>
                        
							<form action="add_daynews.php" method="POST" >
							<p><select name="daynews">
							<option selected value="Мы всегда рады видеть вас в нашем магазине!">Выбрать</option>'
							<?php for ($i=0; $i<count($daynews); $i++){
                        		echo '<option VALUE="', $daynews[$i] ,'">', $daynews[$i] ,'</option>';
                        	}
							?>
							</select></p>
							<p><input type="submit" value="Опубликовать"></p>
							</form></p>
							
							<p><b>Выбрать рекламный баннер:</b><br>
							
							<form method="post" enctype="multipart/form-data" action="add_banner.php">
							
							<p>Название:<br>
							<input type="text" size="40" name="bannername" required></p>
							<p>Изображение рекламного баннера (рекоменд. размер - 580x140px):<br>
							<input type="file" name="bannerimg" required></p>
							<p>Ссылка:<br>
							<input type="text" size="40" name="bannersrc" required></p>
							<input type="submit" value="Добавить баннер">
							</form>
							</p>	
						</font>
			</td>
		</tr>
		</table>
		<a href="index.php">Вернуться на главную страницу</a>
		</font>
	</body>
</html>
