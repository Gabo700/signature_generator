<!DOCTYPE html>
<html lang="pt">

<head>
	<title>Gerar Assinatura E-Mail</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="style.css" 
</head>

<body>


	<section class="form-container">
		<div class="container">
			<form action="gerar.php">
				<h1>Assinatura de e-mail</h1>
				<p>Preencha os campos de forma correta</p>
				<div class="input-single">
					<input class="input" type="text" name="texto1" id="box1" required autocomplete="OFF" require>
					<label for="box">Nome</label>
				</div>
				<div class="input-single">
					<input class="input" type="text" name="texto2" id="box2" required autocomplete="OFF" require>
					<label for="box2">Cargo</label>
				</div>
				<div class="input-single">
					<input class="input" type="number" name="texto3" id="box3" min="0" max="9999" required autocomplete="OFF" require>
					<label for="box3">Ramal</label>
				</div>
				<div class="input-single">
					<input class="input" type="tel" name="texto4" id="box4" pattern="\([0-9]{2}\)[9]{1}[0-9]{4}-[0-9]{4}" autocomplete="OFF" require>
					<label for="box4">Celular:(xx)9xxxx-xxxx<label>
				</div>
				<div class="input-single">
					<input class="input" type="email" name="texto5" id="box5" required autocomplete="OFF" require>
					<label for="box5">E-mail</label>
				</div>

				<div class="butt"><input type="submit" value="Enviar"></div>

		</div>
		</form>
	</section>
</body>
</html>
