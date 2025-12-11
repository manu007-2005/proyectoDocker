<?php
$file = 'votos.txt';

// Inicializar contadores
$si = 0;
$no = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $voto = $_POST['voto'] ?? '';
    if ($voto === '1') {
        file_put_contents($file, "1\n", FILE_APPEND);
    } elseif ($voto === '0') {
        file_put_contents($file, "0\n", FILE_APPEND);
    }
}

// Leer votos existentes
if (file_exists($file)) {
    $votes = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($votes as $vote) {
        if ($vote === '1') {
            $si++;
        } elseif ($vote === '0') {
            $no++;
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Encuesta: Independizar Linares</title>
</head>

<body>
    <h1>¿Independizar Linares de la provincia de Jaén? </h1>
    <form method="post">
        <button type="submit" name="voto" value="1">SI porfavor</button>
        <button type="submit" name="voto" value="0">No</button>
    </form>
    <h2>Resultados:</h2>
    <p>Sí: <?php echo $si; ?></p>
    <p>No: <?php echo $no; ?></p>
</body>

</html>