<!doctype html>
<html>

<head>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/style.css">
</head>
	<?
		$name_items = array("Название","Цена","Остаток на складе","Производитель");
		$items = array(array("Микронаушник", "1000", "10", "ООО 'Спиши беспалева'"),
					   array("Ручки", "15", "30000", "ООО 'Черный след'"),
					   array("Каранаши", "1500", "20", "ООО 'Шедевр'"),
					   array("Луна", "500000", "1", "ООО 'Млечный путь'"));

		if(isset($_GET["butColor"])){
			$butColor = $_GET["butColor"];
		}
		if(isset($_GET["width"])){
			$width = $_GET["width"];
		}
		
		setlocale(LC_ALL, 'ru_RU.UTF-8');
		array_multisort($items[0], SORT_ASC, $items);
		
	?>
<style type="text/css">	
	body {
		background-color:<?echo $butColor?>;

	}
	.table {
		width: <?echo $width."%"?>;
	}

</style>
<body id="body"> 
	<table class='table' id="table">
		<thead id="tHead">
			<tr>
			<?		
			  	foreach ($name_items as $key => $value) {
			   		echo "<th>$value</th>";
				}
				echo $butWidth;

			?>				
			</tr>
		
		</thead>
		<tbody id="tBody">
		<?
			foreach ($items as $key => $value) {
				echo "<tr>";
				foreach ($value as $key_item => $item) {
					echo "<td>$item</td>";
				}
				echo "</tr>";
			}
		?>		
		</tbody>

	</table>
	<a href="changeColor.php">Форма изменения обличия таблицы</a>	

</body>
<style type="text/css">	

</style>
</html>
