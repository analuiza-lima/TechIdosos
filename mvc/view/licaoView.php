<?php
if (!defined('APP')) define('APP', 'http://localhost/trabalho-grupo-bruna/mvc');


// dados do formulário
if (!isset($dados['form'])) {
    $dados['form'] = ['id'=>'', 'nome'=>'', 'nivel'=>'', 'xp'=>''];
}


?>


<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Sistema de Idosos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body class="container mt-5">


<h2 class="mb-4">Sistema de Idosos</h2>


<div class="row">


   
    <div class="col-md-7">
        <h4>Lista</h4>


        <table class="table table-bordered">
            <tr>
                <th>Nome</th>
                <th>Nível</th>
                <th>XP</th>
                <th>Ações</th>
            </tr>


            <?php foreach($dados as $p): ?>
            <tr>
                <td><?= $p['nome'] ?></td>
                <td><?= $p['nivel'] ?></td>
                <td><?= $p['xp'] ?></td>
                <td>
                    <a href="<?php echo APP. '/licao/editar/'.$p['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="<?php echo APP .'/licao/excluir/'.$p['id']; ?>" class="btn btn-danger btn-sm">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>


    <!-- FORMULÁRIO -->
    <div class="col-md-5">
        <h4><?= empty($licao['id']) ? 'Novo' : 'Editar' ?></h4>


        <form action="<?= APP ?>/licao/gravar" method="post">


            <input type="hidden" name="id" value="<?= $licao['id'] ?>">


            <div class="mb-3">
                Nome:
                <input class="form-control" type="text" name="nome" value="<?= $licao['nome'] ?>" required>
            </div>


            <div class="mb-3">
                Nível:
                <input class="form-control" type="number" name="nivel" value="<?= $licao['nivel'] ?>" required>
            </div>


            <div class="mb-3">
                XP:
                <input class="form-control" type="number" name="xp" value="<?= $licao['nivel'] ?>" required>
            </div>


            <button class="btn btn-success">Salvar</button>


        <a href="<?= APP ?>/telainicial/index" class="btn btn-secondary">Voltar</a>
        </form>
    </div>


</div>


<hr>






