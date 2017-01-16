<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
	<div>
		<?php
		include'header.php';
		?>
	</div>
	<div>
		<h1>Les spectacles</h1>
	</div>
	<div>
		<table>
			<tr>
			  <td>heure</td>
			  <td>titre_ spectacle</td>
			  <td>artiste</td>
			  <td>image_url</td>
			</tr>

			<?php
				include 'spectacle.php';
				foreach ($spectacles as $spectacle) {
					echo "<tr>";
					foreach ($spectacle as $key => $valeur) {
					echo "<td>".$valeur."</td>" ;
					}
				echo "<br>" ;
				echo "<tr>";
				}
			?>

		</table>
	</div>


	<div>
		<?php
		include'footer.php';
		?>
	</div>
</body>
</html>
