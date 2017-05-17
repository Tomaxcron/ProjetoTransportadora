<!DOCTYPE html>
<?php 
    require_once 'Motorista.php';
    require_once 'DB.php';
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $pedro = new Motorista();
            $pedro->id = 10;
            $pedro->nome = 'Pedro Oliveira';
            $pedro->cpf = '11011212190';
            $pedro->telefone = '1222224321';
            $pedro->celular = '1293345231';
            echo "{$pedro->nome } tem o cpf {$pedro->cpf}";
            $db = DB::getInstance();
            $nQuery = $db->query("SELECT * FROM Motorista");
            $linha = mysqli_fetch_assoc($nQuery);
            // calcula quantos dados retornaram
            $total = mysqli_num_rows($nQuery);
            if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
			<p><?=$linha['nome']?> / <?=$linha['telefone']?></p>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysqli_fetch_assoc($nQuery));
	// fim do if 
	}
        ?>
    </body>
</html>
