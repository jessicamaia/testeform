<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf=8">
	<title>Cadastro do Usuário</title>
</head>
<body>
	<h2>Preencha os campos abaixo</h2>
	<form action="DadosUsuario.php" method= "POST">
		<label>Nome</label>
		<input type="text" name="name"><br><br>
		
		<label>Sobrenome</label>
		<input type="text" name="secname"><br><br>
		
		<input type="radio" name="sexo" value="F">Feminino
		<input type="radio" name="sexo" value="M">Masculino
		<input type="radio" name="sexo" value="O">Outro<br><br>
		
		<label>Email</label>
		<input type="email" name="Email"><br><br>
		
		<label> Senha </label>
		<input type="password" name="password"><br><br>
		
		<label>Mensagem</label>
		<input type="text" name="mensage" rows="100" cols="40"><br><br>
		<input type="submit" value="Enviar">
	</form>
	
</body>
</html>