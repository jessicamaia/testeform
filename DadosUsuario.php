<?php
	if ($_SERVER ["REQUEST_METHOD"] == "POST"){
		@$Nome = @$_POST ['name'];
		@$Sobrenome = @$_POST ['secname'];
		$sexo = $_POST ['sexo'];
		$Email = $_POST ['Email'];	
		$Senha = $_POST ['password'];
		$Mensagem = $_POST ['mensage'];
} 
	if(@$_POST['name'] != null || @$_POST['name' != '']){
		if ($sexo == "F"){
			echo "<h2>Ficha da Sra ".$Nome. "</h2><br>";} 
		else if ($sexo == "M") {
			echo "<h2>Ficha do Sr ".$Nome. "</h2><br>";} 
		else{
			echo "<h2>Ficha do(a) ".$Nome."</h2><br>";} 
	} 
	else {
		echo "<h2> Observação: </h2><h3> O nome do usuário não foi devidamente informado.</h3>";
	}
	
echo "Nome cadastrado: ".$Nome." ".$Sobrenome."<br>";
if ($sexo == "M") {
        echo "Sexo: Masculino<br>";
    } else if ($sexo == "F") {
        echo "Sexo: Feminino<br>";
    } else if ($sexo == "Indefinido"){
        echo "Sexo: Indefinido<br>";
    } else {
        echo "Sexo: Outro<br>";
    }

    echo "Email: ".$Email."<br>";
	echo "Senha: ".$Senha."<br>";
	echo "Mensagem: ".$Mensagem."<br>";


?>