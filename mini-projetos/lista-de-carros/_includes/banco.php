<?php

    // conexão com o banco de dados
    $banco = new mysqli("localhost", "root", "", "bd_carros");

    // se não conseguir conectar com o banco
    if($banco->connect_errno){
        // exiba uma mensagem de erro com seu respectivo código
        echo "<p>ERRO! $banco->errno --> $banco->connect_error</p>";
        // logo após mate o programa e não o execute
        die();
    }

    // resolvendo problemas com caracteres acentuados
    $banco->query("set names 'utf8'");
    $banco->query("set character_set_connection=utf8");
    $banco->query("set character_set_client=utf8");
    $banco->query("set character_set_results=utf8");

?>