<!DOCTYPE html>
<html>
<head>
	<title>Apresentar</title>
	
</head>
<body>
	<form method="post">
		<label for="numero">Digite o número</label>
		<input type="number" id="numero" name="numero" min="0" max="999" required>
		<button type="submit" name="enviar">Ler Número</button>
	</form>

	<?php
		if (isset($_POST['enviar'])) {
			$numero = $_POST['numero'];

			if ($numero >= 1000) {
				echo "<p>O número digitado é maior ou igual a 1000.</p>";
			}
			else {
				$centenas = floor($numero / 100);
				$dezenas = floor(($numero % 100) / 10);
				$unidades = $numero % 10;

				$texto = "";

				if ($centenas > 0) {
					if ($centenas == 1) {
						$texto .= "1 centena";
					}
					else {
						$texto .= "{$centenas} centenas";
					}
				}
				if ($dezenas > 0) {
					if ($centenas > 0) {
						$texto .= ", ";
					}
					if ($dezenas == 1) {
						$texto .= "1 dezena";
					}
					else {
						$texto .= "{$dezenas} dezenas";
					}
				}
				if ($unidades > 0) {
					if ($centenas > 0 || $dezenas > 0) {
						$texto .= " e ";
					}
					if ($unidades == 1) {
						$texto .= "1 unidade";
					}
					else {
						$texto .= "{$unidades} unidades";
					}
				}

				echo "<p>{$texto}</p>";
			}
		}
	?>
</body>




Regenerate response
