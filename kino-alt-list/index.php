<?php

include "database.php";

$query = "SELECT * FROM film";
$result = mysqli_query($connect, $query);

?>

<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Film</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>

	<body>
		<div class="container">
			<img src="img/banner.gif" class="center-block" height="300">
			
			<table class="table">
				<thead>
					<tr>
						<th>Title</th>
						<th>Year</th>
						<th>Recommended By</th>
					</tr>
				</thead>
				
				<tbody>
					<?php while($row = mysqli_fetch_assoc($result)) : ?>
						<tr>
							<td><?php echo $row['title']; ?></td>
							<td><?php echo $row['year']; ?></td>
							<td><?php echo $row['source']; ?></td>
						</tr>
					<?php endwhile; ?>
				</tbody>

				<tfoot>
					<form action="index.php" method="POST">
						<tr>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</form>
				</tfoot>
			</table>
		</div>
	</body>
</html>