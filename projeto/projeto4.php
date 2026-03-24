<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Divisão de Números</title>
</head>
<body>
    <h2>Divisão de Dois Números</h2>

    <form method="post" action="">
        <label>Primeiro número:</label><br>
        <input type="number" name="num1" step="any" required><br><br>

        <label>Segundo número:</label><br>
        <input type="number" name="num2" step="any" required><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        if ($num2 == 0) {
            echo "<p style='color: red;'>Erro: Não é possível dividir por zero!</p>";
        } else {
            $resultado = $num1 / $num2;
            echo "<p>Resultado: $num1 ÷ $num2 = <strong>$resultado</strong></p>";
        }
    }
    ?>
</body>
</html>