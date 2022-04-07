<?php

    $link = "https://jonasnunes.github.io";

    echo "<header>";
        echo "<div>";
            echo "<p>Catálogo de carros</p>";
        echo "</div>";

        echo "<input type='checkbox' id='menu-hamburguer' class='input'>";

        echo "<label for='menu-hamburguer'>";
            echo "<div class='menu'>";
                echo "<span class='hamburguer'></span>";
            echo "</div>";
        echo "</label>";

        echo "<ul>";
            echo "<li><a href='index.php'>Home</a></li>";
            echo "<li><a href='catalogo.php'>Catálogo</a></li>";
            echo "<li><a href=$link target='_blank'>Contato</a></li>";
        echo "</ul>";
    echo "</header>";