<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Foto</title>
</head>

<body>
	<table>
		<thead>
			<tr>
				<td>Foto</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($foto as $value) { ?>
				<tr>
					<td>
						<img width="200px" src="<?= base_url('upload/' . $value) ?>">
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>

</html>