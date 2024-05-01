<!DOCTYPE HTML>
<html lang="PT-BR">
    <head>
        

        <title>MyHomeTeacher Sistema Pedagógico</title>
        <!-- Meta-Tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        
        <!-- //Meta-Tags -->
        <!-- Stylesheets -->
        <link href="styles\styles.css" rel="stylesheet">
        <!-- <link href="../styles/font-awesome.css" rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="../Controllers/indexControllers.js" > </script> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <!--// Stylesheets -->
        <!--fonts-->
        <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
        <!--//fonts-->

    </head>
    <body>
        <h1>Seja bem vindo! </h1>
        <div class="w3ls-login box box--big">
		<!-- form starts here -->
		<form action="../Model/conexaoDAO.php" method="POST">
			<div class="agile-field-txt">
				<label><i class="fa fa-user" aria-hidden="true"></i> Usuário </label>
				<input type="text" name="name" placeholder="Digite seu usuário" required="" />
			</div>
			<div class="agile-field-txt">
				<label><i class="fa fa-unlock-alt" aria-hidden="true"></i> Senha </label>
				<input type="password" name="password" placeholder="Digite sua senha" required="" id="myInput" />
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="Mostrar Senha" onclick="mostraSenha()">
					<label class="check" for="check3">Mostrar a senha</label>
				</div>
				<div class="agile-right">
					<a href="#">Esqueceu sua senha?</a>
				</div>
			</div>
			<div class="form-group" >
    			<button type="submit" style='text-align:center;' name="acessar" class="btn btn-primary">Login</button>
			</div>

			<!-- <input type="submit" value="LOGIN"> -->
		</form>
	</div>
	<!-- //form ends here -->
	<!--copyright-->
	<div class="copy-wthree">
		<p style='text-align:center;'>© 2023 MyHomeTeacher. Todos os direitos reservados | Desenvolvido por
			<a href="http://www.tiourudi.com.br/" target="_blank">Tio Urudi</a>
		</p>
	</div>
	<!--//copyright-->

    </body>

</html>