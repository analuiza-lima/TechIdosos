<?php

$dados = $dados ?? [
    'id' => '',
    'titulo' => '',
    'conteudo' => '',
    'explicacao' => '',
    'status' => ''
];
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bombando No Zap - Fato ou Fake?</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

<h2>Cadastro de Notícia</h2>

<form method="POST" action="<?= APP ?>/noticias/gravar">

    <input type="hidden" name="id" value="<?= $dados['id'] ?>">

    <div class="mb-3">
        <label class="form-label">Título:</label>
        <input type="text" name="titulo" class="form-control" value="<?= $dados['titulo'] ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Conteúdo:</label>
        <textarea name="conteudo" class="form-control" required><?= $dados['conteudo'] ?></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Explicação:</label>
        <textarea name="explicacao" class="form-control"><?= $dados['explicacao'] ?></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Status:</label>
        <select name="status" class="form-control" required>
            <option value="">Selecione...</option>
            <option value="FATO" <?= $dados['status'] == 'FATO' ? 'selected' : '' ?>>Fato</option>
            <option value="FAKE" <?= $dados['status'] == 'FAKE' ? 'selected' : '' ?>>Fake</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>

</form>

</body>
</html>