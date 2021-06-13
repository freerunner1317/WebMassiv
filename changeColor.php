<!doctype html>
<html>

<head>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body id="body"> 
	<form method="GET" action="index.php">
		<div class="formStyle">			
			<a> Выбор сотировки</a>
			<select name="sortType">
			  <option value="0">Как есть</option>
			  <option value="2">По убыванию</option>
			  <option value="3">По возрастанию</option>
			</select>

			<a> Выбор столбца</a>
			<select name="sortColumn">
			  <option value="0">Название</option>
			  <option value="1">Цена</option>
			  <option value="2">Остаток на складе</option>
			  <option value="3">Производитель</option>
			</select>
	    		
		</div>		
		<div class="formStyleColor">
			<a>Цвет фона страницы</a>
			<p><input name="butColor" type="radio" value="#3914AF" >Синий</p>
			<p><input name="butColor" type="radio" value="#FE0000">Красный</p>
			<p><input name="butColor" type="radio" value="#CC0073">Розовый</p>
		</div>	

		
		<p style="text-align: center;"><input type="submit" value="Выбрать"></p>
	</form>

</body>
<style type="text/css">	

</style>
</html>
