<div class="titulo">Multidimensionais</div>

<?php

$dados = [
    "pessoa1" => [ 
        "nome" => "Rafael",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    "pessoa2" => [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"    
    ]
];

print_r($dados);

echo '<hr>' . $dados["pessoa1"]["idade"];
echo '<hr>' . $dados["pessoa2"]["idade"];

$dados = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do Mexico"
];

echo "<br>";

print_r($dados);