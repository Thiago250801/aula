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

    $somaIdade = $idade + 10;

    // arrays 
    $frutas = ["Maçã", "Banana", "Laranja"];
    
    echo "Primeira fruta: " . $frutas[0] . "<br>";
    echo "Segunda fruta: " . $frutas[1] . "<br>";
    echo "Terceira fruta: " . $frutas[2] . "<br>";

    $frutas[] = "Uva"; // Adicionando uma nova fruta ao array
    echo "Quarta fruta: " . $frutas[3] . "<br>";

    // operadores 

    $a = 10;
    $b = 5;

    echo "Soma: " . ($a + $b) . "<br>";
    echo "Subtração: " . ($a - $b) . "<br>";
    echo "Multiplicação: " . ($a * $b) . "<br>";
    echo "Divisão: " . ($a / $b) . "<br>";
?>