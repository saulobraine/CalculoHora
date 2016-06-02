<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="jumbotron"> </div>
        <div class="container"> 
            
            <h2 class="text-center"> Classe CálculoHora </h2>
            <hr>
            <?php
            require_once './CalculoHora.class.php';

            // Hora atual
            echo $HoraAtual = date("H:i:s");
            $HoraFinal = "08:30:00";
            echo "<hr>";

            // Instância a classe
            $Hora = new CalculoHora();

            // Soma duas "horas" diferentes/iguais
            echo $Soma = $Hora->AddHora($HoraAtual, $HoraFinal);
            echo "<hr>";

            // Subtrai duas "horas" diferentes/iguais
            echo $Subtrai = $Hora->SubtraiHora($HoraAtual, $HoraFinal);
            echo "<hr>";

            // Mostra a diferença entre duas "horas" diferentes/iguais
            echo $Diferenca = $Hora->ExibeDiferencaHora($HoraAtual, $HoraFinal);
            echo "<hr>";

            // Adiciona dias
            echo $Dias = $Hora->AddDia($HoraAtual, 80);            
            echo "<hr>";
            
            ?>
        </div>
    </body>
</html>
