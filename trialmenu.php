<!DOCTYPE html>
<html>
<head>
	<title>trialmenu</title>
	<style type="text/css">
		.veg{
			border: 1px solid green;

		}
		.non-veg{
			border: 1px solid red;

		}
		.pizza{
			/*border: 1px solid red;*/
		}
		.photo{
			width: 200px;
			/*height: 100px;*/
		}
		.photo img{
			width: 100%;
		}
	</style>
</head>
<body>
	<?php 
	include "connection.php";
	$nv = array();
	$v = array();

	$sql = "select * from items";
	$result = $conn->query($sql);
	// $row= $result->fetch_assoc();
	while($row= $result->fetch_object()) :
		// $c = $row['category'];
		$c = $row->category;
		// echo "<br>array = ";
		// print_r($row);
		if ($c == "veg"){			
			array_push($v, $row);
		}elseif($c == "Non-veg"){
			array_push($nv, $row);
		}

	endwhile;
	// print_r($row);
	echo "<br>v count = =".count($v);
	echo "<br>nv count = =".count($nv);

	echo "<h3>Veg</h3>";
	for ($i=0; $i < count($v); $i++) :
		?>
		<div class="veg">
			<div class="pizza">
				<div class="photo"><img src="./media/images/pizza.png"></div>
				<div class="content">
					<div>
						<h3><?=$v[$i]->name; ?></h3>
						<p><?=$v[$i]->category; ?></p>
						<button type="button">click</button>
					</div>
				</div>
			</div>
		</div>

		<?php
	endfor;
	$count = count($non_veg);
	echo "<h3>Non Veg</h3>";
	for ($i=0; $i < count($nv); $i++) :
		?>
		<div class="non-veg">
			<div class="pizza">
				<div class="photo"><img src="./media/images/pizza.png"></div>
				<div class="content">
					<div>
						<h3><?=$nv[$i]->name; ?></h3>
						<p><?=$nv[$i]->category; ?></p>
						<button type="button">click</button>
					</div>
				</div>
			</div>
		</div>

		<?php
	endfor;
/*	
	for ($i=0; $i < $count; $i++) { 
		foreach ($veg[$i] as $key => $value) {
			echo $key. " = ".$value. ", ";
		}
		echo "<br>";
	}
*/
	?>
</body>
</html>