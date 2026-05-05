<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Formulário</title>
</head>
<body>

<h2><?= isset($link) ? 'Editar' : 'Novo' ?> Link</h2>

<form method="POST" action="<?= APP ?>/links/<?= isset($link) ? 'atualizar' : 'salvar' ?>">

    <input type="hidden" name="id" value="<?= $link['id'] ?? '' ?>">

    <label>Link:</label><br>
    <input type="text" name="link" value="<?= $link['link'] ?? '' ?>"><br><br>

    <label>Veracidade:</label><br>
    <select name="veracidade">
        <option value="1" <?= (isset($link) && $link['veracidade']) ? 'selected' : '' ?>>Verdadeiro</option>
        <option value="0" <?= (isset($link) && !$link['veracidade']) ? 'selected' : '' ?>>Falso</option>
    </select><br><br>

    <label>Data:</label><br>
    <input type="date" name="data" value="<?= $link['data'] ?? '' ?>"><br><br>

    <button type="submit">Salvar</button>

</form>

</body>
</html>