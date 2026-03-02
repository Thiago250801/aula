<?php
    echo "<h1 style='color: blue;'>Variáveis e Tipos de Dados em PHP</h1>";

    echo "Teste";

    $nome = "João";
    $sobrenome = "Silva";
    // Concatenando strings para formar o nome completo
    $nomeCompleto = $nome . " " . $sobrenome;
    $idade = 30;
    $altura = 1.75;
    $isStudent = true;

    echo "<p>Nome: $nome</p>";
    echo "<p>Sobrenome: $sobrenome</p>";
    echo "<p>Nome Completo: $nomeCompleto</p>";
    echo "<p>Idade: $idade</p>";
    echo "<p>Altura: $altura</p>";
    echo "<p>É estudante: " . ($isStudent ? "Sim" : "Não") . "</p>";

?>