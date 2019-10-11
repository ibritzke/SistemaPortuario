<?php
$pdo = new PDO(
	'mysql:host=localhost;dbname=bd_seaporto;charset=utf8',
	'root',
	''
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

session_start();
if (!isset($_SESSION['empresa'])) {
	header('location: index.php');
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="shortcut icon" href="imagens/container.ico" type="image/x-icon" />
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="css/geral.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<title>Sea Port - Operador</title>
</head>

<body>

	<!--Navbar -->

	<div class="topnav">
		<a href="operador.php"><img src="imagens/logo/logo3.png" width="180" height="50" alt="logo"> </a>
		<li class="right"><a href="logout.php">Sair <i class='fas fa-sign-out-alt fa-fw' style='font-size:16px'></i> </a></li>
		<div class="useremp">
			<a>Usuário: <?php echo $_SESSION['empresa']; ?> </a>
		</div>
	</div>

	<!--/Navbar -->

	<!--Sidebar -->

	<div class="menu">
		<ul class="mainmenu">
			<li><a href="operador.php"><i class='fas fa-home fa-fw' style='font-size:16px'></i> Home </a></li>
			<li><a href="#"><i class='fas fa-truck fa-fw' style='font-size:16px'></i> Caminhão</a>
				<ul class="submenu">
					<li><a href="carregacaminhao.php"><i class='fas fa-pallet fa-fw' style='font-size:16px'></i> Carregar</a></li>
					<li><a href="descarregacaminhao.php"><i class='fas fa-truck-loading fa-fw' style='font-size:16px'></i> Descarregar</a></li>
				</ul>
			</li>
			<li><a href="#"><i class='fas fa-ship fa-fw' style='font-size:16px'></i> Navio</a>
				<ul class="submenu">
					<li><a href="carreganavio.php"><i class='fas fa-pallet fa-fw' style='font-size:16px'></i> Carregar</a></li>
					<li><a href="descarreganavio.php"><i class='fas fa-truck-loading fa-fw' style='font-size:16px'></i> Descarregar</a></li>
				</ul>
			</li>
			<li><a href="patio.php"><i class='fas fa-cubes fa-fw' style='font-size:18px'></i> Pátio</a></li>
			<li><a href="relatorio.php"><i class="fas fa-file-alt" style='font-size:18px'></i> Relatório</a></li>
			<li><a class="active" href="contatooperador.php"><i class='far fa-address-card fa-fw' style='font-size:16px'></i> Contato</a></li>
		</ul>
	</div>

	<!--/Sidebar -->

	<div class="formcontato">
		<form action="cadastrarnavio.php" method="get">
			<legend>Formulário de contato</legend>

			Nome:<br>
			<input type="text" name="nome" class="form-control" placeholder="Nome" required autofocus><br>

			E-mail<br>
			<input type="email" id="email" class="form-control" placeholder="E-mail" required autofocus><br>

			Telefone<br>
			<input type="tel" name="telefone" class="form-control" placeholder="Telefone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required autofocus><br>
			<div class="formcontato2">
				Mensagem<br>
				<textarea name="mensagem" rows="10" cols="30" name="mensagem" class="form-control" placeholder="Mensagem" required autofocus></textarea><br>
				<input type="submit" value="Enviar">
				<input type="reset" value="Limpar">
		</form>
	</div>

</body>

</html>