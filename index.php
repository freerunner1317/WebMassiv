<?
	if(isset($_GET["headColor"])){
		$headColor = $_GET["headColor"];
	} else {$headColor = "#ed5a69";}

	if(isset($_GET["bodyColor"])){
		$bodyColor = $_GET["bodyColor"];
	} else {$bodyColor = "#ffaf7a";}

	if(isset($_GET["sortType"]) && ($_GET["sortType"] != 0)){
		$sortType = (($_GET['sortType'] == 2) ? SORT_DESC : SORT_ASC);
	}
	if(isset($_GET["sortColumn"])){
		$sortColumn = (int)$_GET["sortColumn"];
	}
	
	$items = array(array("Микронаушник", "1000", "10", "ООО 'Спиши беспалева'"),
					   array("Ручки", "15", "30000", "ООО 'Черный след'"),
					   array("Каранаши", "1500", "20", "ООО 'Шедевр'"),
					   array("Луна", "500000", "1", "ООО 'Млечный путь'"),
					   array("Елки", "150", "230", "ООО 'Деревья'"),
					   array("Лед", "230", "23", "ООО 'Мира'"),
					   array("Варежки", "23", "4", "ООО 'Тепло'"));

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body id="body"> 
	<?
	showTable($items, $sortColumn, $sortType, $headColor, $bodyColor);
	function showTable($items, $sortColumn, $sortType, $headColor, $bodyColor)
	{
		$name_items = array("Название","Цена","Остаток на складе","Производитель");	

		?> 
			<style type="text/css">	
				.table th {
					background-color:<?echo $headColor?>;
				}
				.table td {
					background-color:<?echo $bodyColor?>;
				}

			</style>
		<?
		setlocale(LC_ALL, 'ru_RU.UTF-8');
		foreach ($items as $key => $value) {
			$tableArray[$key]["name"] = $items[$key][0];
			$tableArray[$key]["cost"] = $items[$key][1];
			$tableArray[$key]["quantity"] = $items[$key][2];
			$tableArray[$key]["manufacturer"] = $items[$key][3];

			$sortingArray[0][$key] = $items[$key][0];
			$sortingArray[1][$key] = $items[$key][1];
			$sortingArray[2][$key] = $items[$key][2];
			$sortingArray[3][$key] = $items[$key][3];
		}

		if($_GET["sortType"] != 0)
			array_multisort($sortingArray[$sortColumn], $sortType,$tableArray);

	?>
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
			foreach ($tableArray as $key => $value) {
				echo "<tr>";
				foreach ($value as $key_item => $item) {
					echo "<td>$item</td>";
				}
				echo "</tr>";
			}
		?>		
		</tbody>

	</table>
	<?
	}
	?>
	<a href="changeColor.php">Форма изменения обличия таблицы</a>	

</body>
<style type="text/css">	

</style>
</html>
