<?php //Adiciona Controle de Sessao
include_once 'controleSessao.php'; //include do banco
sessao_valida();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lista Estoque</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h1>Gerar Relatorio Estoques</h1>            
            
            <a href="lista_estoque.php">Gerar Relatorio</a>
        </div>
    </body>
</html>
