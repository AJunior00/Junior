<?php

    function apresentarSistemas() {
        echo "Bem Vindo(a) ao Help Desk!";
    
    
    }


    apresentarSistemas();    

    function abrirChamado($nome, $problema) {
        echo "$nome abriu um chamado: $problema";

    }
    $nome = $_POST["nome"];
    $problema = $_POST["problema"];
    abrirChamado(" Lucas", "Impressora nao funciona");


    function contarChamados($quantidade){
        return "Existem $quantidade chamadors registrados";

    }

    $resultado = contarChamados(5);

     

?>

