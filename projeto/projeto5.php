<?php
$livros = [];
$alertas = [];
$erros = [];
$mapaOrdenado = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    for ($i = 1; $i <= 5; $i++) {
        $titulo = trim($_POST["titulo$i"] ?? '');
        $qtd    = trim($_POST["qtd$i"] ?? '');

        if ($titulo === '' || $qtd === '') {
            $erros[] = "Preencha todos os campos do Livro $i.";
            break;
        }

        if (!is_numeric($qtd) || intval($qtd) < 0) {
            $erros[] = "Quantidade inválida no Livro $i.";
            break;
        }

        $livros[] = ['titulo' => $titulo, 'quantidade' => intval($qtd)];
    }

    if (empty($erros)) {
        foreach ($livros as $livro) {
            $chave = strtolower($livro['titulo']);
            if (array_key_exists($chave, $mapaOrdenado)) {
                $erros[] = "Título duplicado: \"{$livro['titulo']}\".";
                break;
            }
            $mapaOrdenado[$chave] = [
                'titulo'     => $livro['titulo'],
                'quantidade' => $livro['quantidade']
            ];
        }

        ksort($mapaOrdenado);

        foreach ($mapaOrdenado as $item) {
            if ($item['quantidade'] < 5) {
                $alertas[] = $item;
            }
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' || (!empty($erros) || empty($mapaOrdenado))) {
    if (empty($erros) && empty($mapaOrdenado)) {
        echo "<h2>Cadastrar 5 Livros</h2>";
        echo "<form method='POST' action=''>";
        for ($i = 1; $i <= 5; $i++) {
            echo "<p><strong>Livro $i</strong></p>";
            echo "<p>Título: <input type='text' name='titulo$i'></p>";
            echo "<p>Quantidade em Estoque: <input type='number' name='qtd$i' min='0'></p>";
            echo "<br>";
        }
        echo "<input type='submit' value='Gerar Lista Ordenada'>";
        echo "</form>";
    } else {
        foreach ($erros as $erro) {
            echo "<p style='color:red;'>$erro</p>";
        }
        echo "<h2>Cadastrar 5 Livros</h2>";
        echo "<form method='POST' action=''>";
        for ($i = 1; $i <= 5; $i++) {
            $tituloVal = htmlspecialchars($_POST["titulo$i"] ?? '');
            $qtdVal    = htmlspecialchars($_POST["qtd$i"] ?? '');
            echo "<p><strong>Livro $i</strong></p>";
            echo "<p>Título: <input type='text' name='titulo$i' value='$tituloVal'></p>";
            echo "<p>Quantidade em Estoque: <input type='number' name='qtd$i' min='0' value='$qtdVal'></p>";
            echo "<br>";
        }
        echo "<input type='submit' value='Gerar Lista Ordenada'>";
        echo "</form>";
    }
} else {
    if (!empty($alertas)) {
        echo "<h2>⚠ Livros com Baixa Quantidade (menos de 5 unidades)</h2>";
        foreach ($alertas as $alerta) {
            $titulo = htmlspecialchars($alerta['titulo']);
            $qtd    = $alerta['quantidade'];
            echo "<p style='color:orange;'>⚠ $titulo — $qtd unidade(s)</p>";
        }
        echo "<br>";
    }

    echo "<h2>Lista Ordenada por Título</h2>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>#</th><th>Título</th><th>Qtd. em Estoque</th><th>Status</th></tr>";

    $i = 1;
    foreach ($mapaOrdenado as $item) {
        $titulo = htmlspecialchars($item['titulo']);
        $qtd    = $item['quantidade'];
        $status = $qtd < 5 ? "Baixo" : "Normal";
        $cor    = $qtd < 5 ? "red" : "green";
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>$titulo</td>";
        echo "<td>$qtd</td>";
        echo "<td style='color:$cor;'><strong>$status</strong></td>";
        echo "</tr>";
        $i++;
    }

    echo "</table><br>";
    echo "<a href='?'>🔄 Reiniciar</a>";
}
?>