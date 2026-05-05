<?php
$noticias = $noticias ?? [];
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Notícias</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

<!-- TOPO -->
<div class="d-flex justify-content-between align-items-center mb-4">

    <a href="<?= APP ?>" class="btn btn-secondary">
        ← Voltar
    </a>

    <h2 class="mb-0">Notícias</h2>

    <a href="<?= APP ?>/noticias/novo" class="btn btn-primary">
        + Adicionar Notícia
    </a>

</div>

<!-- CONTEÚDO -->
<?php if (empty($noticias)): ?>

    <div class="alert alert-info">
        Nenhuma notícia cadastrada.
    </div>

<?php else: ?>

    <?php foreach ($noticias as $n): ?>

        <div class="card mb-3 shadow-sm">
            <div class="card-body">

                <h4 class="card-title">
                    <?= htmlspecialchars($n['titulo']) ?>
                </h4>

                <p class="card-text">
                    <?= nl2br(htmlspecialchars($n['conteudo'])) ?>
                </p>

                <hr>

                <p class="text-muted">
                    <?= nl2br(htmlspecialchars($n['explicacao'])) ?>
                </p>

                <span class="badge <?= $n['status'] == 'FATO' ? 'bg-success' : 'bg-danger' ?>">
                    <?= htmlspecialchars($n['status']) ?>
                </span>

                <div class="mt-3">
                    <a href="<?= APP ?>/noticias/editar/<?= $n['id'] ?>" class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <a href="<?= APP ?>/noticias/excluir/<?= $n['id'] ?>" 
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Tem certeza?')">
                        Excluir
                    </a>
                </div>

            </div>
        </div>

    <?php endforeach; ?>

<?php endif; ?>

</body>
</html>