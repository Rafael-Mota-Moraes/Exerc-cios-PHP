<div class="titulo">Desafio operadores lógicos</div>

<!-- 
	Dois trabalhos -> terça e quinta!
	- Se os dois forem executados -> TV 50' e sorvete
	- Se um for executado -> TV 32' e sorvete
	- Se nenhum for executado -> Fica em casa mais saudavel
-->

<form action="#" method="POST">
	<div>
		<label for="t1">Trabalho 1 (terça): </label>
		<select name="t1" id="t1">
			<option value="1">Executado</option>
			<option value="0">Não Executado</option>
		</select>
	</div>
	<div>
		<label for="t2">Trabalho 2 (quinta): </label>
		<select name="td" id="t2">
			<option value="1">Executado</option>
			<option value="0">Não Executado</option>
		</select>
	</div>
	<button>Executar</button>
	<style>
		button, select {
			font-size: 1.8rem;
		}
	</style>
</form>

<?php
$t1 = $_POST['t1'] === '1';
$t2 = !!$_POST['t2'];
$tv = '';
$sorvete = false;

if($t1 and $t2) {
	$tv = '50"';
} else if ($t1 xor $t2) {
	$tv = '32"';
}

if($t1 or $t2) {
	$sorvete = true;
}

if($tv) {
	$resultado = "Vamos comprar uma TV de $tv";
} else {
	$resultado = "Sem TV dessa vez";
}

if(!$sorvete) {
	$resultado .= '<br> Estamos mais saudaveis';
} else {
	$resultado .= '<br> Sorvete liberado!';
}

echo "<p>$resultado</p>"

?>