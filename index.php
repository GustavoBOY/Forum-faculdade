<?php

echo "<h2>Apresentando XML no PHP</h2>";

$xml = simplexml_load_file('arquivo.xml');

foreach ($xml->signo as $registro):
    echo "dataInicio: " . $registro->dataInicio . "<br>";
    echo "dataFim: " . $registro->dataFim . "<br>";
    echo "signoNome: " . $registro->signoNome . "<br>";
    echo "descricao: " . $registro->descricao . "<br>";
    echo "<br>";
endforeach;

