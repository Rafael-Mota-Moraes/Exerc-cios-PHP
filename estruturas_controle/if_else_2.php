<div class="titulo">If/Else #02</div>

<?php
if(true) {
    echo "Serei impresso? <br>";
}

if(false) {
    echo 'Verdadeiro <br> ';
} else {
    echo 'Falso <br> ';
}

if(false) {
    echo 'Passo A <br>';
} else if (true) {
    echo 'Passo B <br>';
} else {
    echo 'Ultimo passo!';
}

echo 'Fim! <br>';