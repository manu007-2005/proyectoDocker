<?php
$chistes = [
    "¿Por qué los programadores siempre confunden Halloween con Navidad? Porque Oct 31 == Dec 25.",
    "Un byte fue al médico porque se sentía mal. El médico le dijo: 'Tienes un par de bits'.",
    "¿Cuál es el animal más antiguo del mundo? La cebra, porque está en blanco y negro.",
    "¿Qué le dice un GIF a un JPG? 'Anímate, hombre'.",
    "¿Por qué los pájaros no usan Facebook? Porque ya tienen Twitter.",
    "¿Qué hace un informático en el baño? Bytes.",
    "¿Cuál es el colmo de un informático? Que se le estropee la pantalla del ordenador y no pueda ver el salvapantallas.",
    "¿Qué le dice un router a otro? 'La vecina wifi está muy buena'.",
    "¿Por qué los informáticos son tan malos jugando al escondite? Porque cuando están en apuros, siempre usan Ctrl+Alt+Supr.",
    "¿Qué es un terapeuta? 1024 gigapeutas."
];

$chiste = $chistes[array_rand($chistes)];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chiste informático aleatorio</title>
</head>
<body>
    <h1>Chiste informático:</h1>
    <p><?php echo $chiste; ?></p>
</body>
</html>