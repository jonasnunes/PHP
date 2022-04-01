<?php

    $ano = date("Y");
    $data = date("D, d/M/Y");
    $ip = $_SERVER['REMOTE_ADDR'];
    $link = "<a class='link' href='https://jonasnunes.github.io' target='_blank'>Jonas Nunes</a>";

    echo "<footer>";
    echo "<p>Acessado por $ip em $ano</p>";
    echo "<p>Desenvolvido por $link &copy; $data</p>";
    echo "</footer>";

    $banco->close();