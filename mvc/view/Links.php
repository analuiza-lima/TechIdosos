<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Links</title>
    <a href="<?= APP ?>/telainicial/index" class="btn btn-secondary">Voltar</a>
</head>
<body>

<h2>Lista de Links</h2>

<a href="<?= APP ?>/links/novo">Novo Link</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Link</th>
        <th>Veracidade</th>
        <th>Data</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($dados as $l): ?>
    <tr>
        <td><?= $l['id'] ?></td>
        <td><?= $l['link'] ?></td>
        <td><?= $l['veracidade'] ? 'Verdadeiro' : 'Falso' ?></td>
        <td><?= $l['data'] ?></td>
        <td>
            <a href="<?= APP ?>/links/editar/<?= $l['id'] ?>">Editar</a>
            <a href="<?= APP ?>/links/excluir/<?= $l['id'] ?>">Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>