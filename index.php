<?php require 'functions.php';?>


<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
	
	<!-- Bootstrap CSS JS jquery-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<!--local style CSS-->
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Cisternos</title>
	
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<h1 style="text-align: center">Autocisternos ir baseinai</h1>
		</div>
		<div class="row">
			<div class="col-12">
				
				<table class="table">
					<thead class="thead-light" style="text-align: center">
						<!--thead-->
						<tr>
							<th rowspan="3">Width (m.)</th>
							<th rowspan="3">Deep (m.)</th>
							<th rowspan="3">Length (m.)</th>
							<th rowspan="3">Volume (m3)</th>
							<th colspan="7">Autocisternu kiekis</th>
							<tr>
								<th colspan="2">120 m3</th>
								<th colspan="2">170 m3</th>
								<th colspan="2">220 m3</th>
							</tr>
							<tr>
								<th>Kiekis</th>
								<th>Kaina</th>
								<th>Kiekis</th>
								<th>Kaina</th>
								<th>Kiekis</th>
								<th>Kaina</th>
							</tr>
						</thead>
						<tbody>

							<?php for ($l=10; $l <= 40; $l++) { ?>
								<tr style="text-align: center" >
									<td>10</td>
									<td>3</td>
									<td><?= $l ?></td>
									<td><?= vol_m3(3, 10, $l) ?></td>
									<th><?= get_trucks(vol_m3(3, 10, $l),120) ?></th>
									<th><?= get_price(120, get_trucks(vol_m3(3, 10, $l),120))?></th>
									<th><?= get_trucks(vol_m3(3, 10, $l),170) ?></th>
									<th>120Kaina Eur</th>
									<th><?= get_trucks(vol_m3(3, 10, $l),220) ?></th>
									<th>170Kaina Eur</th>
								</tr>
							<?php } ?>




						</tbody>
					</table>

				</div>
			</body>
			</html>



<?php

