<?php

    $banco = new mysqli("localhost", "root", "", "bd_carros");

    if($banco->connect_errno){
        echo "<p>ERRO! $banco->errno --> $banco->connect_error</p>";
        die();
    }

    $banco->query("set names 'utf8'");
    $banco->query("set character_set_connection=utf8");
    $banco->query("set character_set_client=utf8");
    $banco->query("set character_set_results=utf8");