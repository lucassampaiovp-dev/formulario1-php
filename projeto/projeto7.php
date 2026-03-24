<?php
$a = isset($_POST['a']) ? $_POST['a'] : null;
$b = isset($_POST['b']) ? $_POST['b'] : null;

$resultado = '';

if ($a !== null && $b !== null) {
    $a = (float)$a;
    $b = (float)$b;

    if ($a == $b) {
        $resultado = "Números iguais: " . $a;
    } elseif ($a < $b) {
        $resultado = $a . " " . $b;
    } else {
        $resultado = $b . " " . $a;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
</head>
<body>
    <h2>Ordenação de dois números</h2>
    <form method="POST">
        <label>Valor de A: <input type="number" name="a" step="any" required></label><br><br>
        <label>Valor de B: <input type="number" name="b" step="any" required></label><br><br>
        <button type="submit">Verificar</button>
    </form>

    <?php if ($resultado !== ''): ?>
        <h3>Resultado: <?php echo $resultado; ?></h3>
    <?php endif; ?>
</body>
</html>