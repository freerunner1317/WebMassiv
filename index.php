<?
	if(isset($_GET["butColor"])){
		$butColor = $_GET["butColor"];
	}
	if(isset($_GET["width"])){
		$width = $_GET["width"];
	}
	if(isset($_GET["sortType"]) && ($_GET["sortType"] != 0)){
		$sortType = (($_GET['sortType'] == 2) ? SORT_DESC : SORT_ASC);
	}
	if(isset($_GET["sortColumn"])){
		$sortColumn = (int)$_GET["sortColumn"];
	}
	$items = array(array("аМикронаушник", "1000", "10", "ООО 'Спиши беспалева'"),
					   array("бРучки", "15", "30000", "ООО 'Черный след'"),
					   array("гКаранаши", "1500", "20", "ООО 'Шедевр'"),
					   array("вЛуна", "500000", "1", "ООО 'Млечный путь'"));

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/style.css">
</head>
	<?
		
		
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
	<?
	showTable($items, $sortColumn, $sortType, $butColor);
	function showTable($items, $sortColumn, $sortType, $butColor)
	{
		$name_items = array("Название","Цена","Остаток на складе","Производитель");	
		
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
		var_dump($sortType);
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
