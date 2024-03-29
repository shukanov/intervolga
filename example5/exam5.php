<?php
	require "connection.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>example5</title>
		<link rel="stylesheet" type="text/css" href="style_exam5.css">
	</head>
	<body>
		<table>
			<tr>
				<th>Countries</th>
				<th>Population</th>
			</tr>
			<?php 	
				$requery = 'SELECT * FROM countries';
				foreach ($dbh->query($requery) as $row){?> 
				<tr>
					<td><?= $row['title'];?></td>
					<td><?= $row['population'];?></td>
				</tr>
				<?php }  ?>						
		</table>
		<div id="add-country">

			<form class="form" method="POST">
				<?php
					if(isset($_POST['submit']))
					{
						if( $_POST['title_country'] == '')
						{
							echo '<span style="color: red; display: block">Input Country!</span>';
						}
						else
						{	
							$requery = 'INSERT INTO countries (title, population) VALUES (:title, :population)';
							$stmt = $dbh->prepare($requery, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
							$title_country = htmlspecialchars($_POST['title_country'], ENT_QUOTES);
							$population_country = htmlspecialchars($_POST['population_country'], ENT_QUOTES);
							$stmt->execute(array (':title' => $title_country, ':population' => $population_country));						
							echo '<span style="color: green; display: block">Country added</span>';
						}
					}
				?>
				<h3>Add country</h3>
				<div class="block_input">
					<input type="text" name="title_country" placeholder="The name of the country">
				</div>
				<div class="block_input">
					<input type="text" name="population_country" placeholder="Country population">
				</div>
				<div class="block_button">
					<input type="submit" name="submit" value="Add country">
				</div>
			</form>
		</div>
	</body>
</html>