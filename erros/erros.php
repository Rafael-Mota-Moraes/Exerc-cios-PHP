<div class="titulo">Erros personalizados</div>

<?php

class FaixaEtariaException extends Exception{
    public function __construct($message, $code = 0, $previus = null){
        // echo "Erro personalizado: $message <br>";
        parent::__construct($message, $code, $previus);
    }
}

function calcularTempoAposentadoria($idd) {
    if($idd < 18) {
        throw new FaixaEtariaException('Ainda está muito longe');
    }
    if($idd > 70) {
        throw new FaixaEtariaException('Já deveria estar aposentada!');
    }

    return 70 - $idd;

}

$idadesAvaliadas = [15, 30, 60, 80];

foreach($idadesAvaliadas as $idade){
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restantes. <br> ";
    } catch (FaixaEtariaException $e) {
        echo "Não foi possivel calcular para $idade anos. <br>";
        echo "Motivo: {$e->getMessage()} <br>";
    }
}

echo '<br> Fim!';
