<?php
if (!defined('APP')) define('APP', 'http://localhost/trabalho-grupo-bruna/mvc');
if (!isset($idosos)) $idosos = [];
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechIdosos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #eef2f7;
            font-family: 'Segoe UI', sans-serif;
        }

        /* 🔵 NAVBAR */
        .topbar {
            background: linear-gradient(135deg, #0d6efd, #4f46e5);
            color: white;
            padding: 15px 25px;
            border-radius: 10px;
        }

        .brand {
            font-size: 22px;
            font-weight: bold;
        }

        .slogan {
            font-size: 13px;
            opacity: 0.8;
        }

        /* 📦 CARD */
        .card-custom {
            margin-top: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 20px #00000014;
            padding: 20px;
            background: white;
        }

        /* 📊 TABELA */
        .table thead {
            background: #0d6efd;
            color: white;
        }

        /* 🔘 BOTÕES */
        .btn-custom {
            border-radius: 8px;
            padding: 6px 12px;
        }

        .btn-primary {
            background: #2563eb;
            border: none;
        }

        .btn-danger {
            background: #dc2626;
            border: none;
        }

        .btn-success {
            background: #16a34a;
            border: none;
        }

        .btn-success:hover {
            background: #15803d;
        }

        /* 🏷 ID */
        .badge-id {
            background: #e2e8f0;
            padding: 5px 10px;
            border-radius: 6px;
        }
    </style>
</head>

<body class="container mt-4">

    <!--topo -->
    <div class="topbar d-flex justify-content-between align-items-center">
        <div>
            <div class="brand">👵 TechIdosos</div>
            <div class="slogan">Tecnologia acessível para a melhor idade</div>
        </div>

        <a class="btn btn-light btn-custom"
           href="<?php echo APP.'/index.php?url=idosos/novo'; ?>">
            Adicionar Usuário
        </a>
    </div>

    <div class="card-custom">

        <h5 class="mb-3">📋 Lista de Usuários</h5>

        <div class="table-responsive">
            <table class="table table-hover align-middle">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>CPF</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($idosos)): ?>
                        <?php foreach ($idosos as $idoso): ?>
                            <tr>

                                <td><span class="badge-id"><?php echo $idoso['id']; ?></span></td>

                                <td><strong><?php echo $idoso['nome']; ?></strong></td>

                                <td><?php echo $idoso['email']; ?></td>

                                <td><?php echo $idoso['telefone']; ?></td>

                                <td><?php echo $idoso['cpf']; ?></td>

                                <td class="text-center">

                                    <a class="btn btn-sm btn-primary btn-custom"
                                       href="<?php echo APP.'/index.php?url=idosos/editar/'.$idoso['id']; ?>">
                                        ✏️ Editar
                                    </a>

                                    <a class="btn btn-sm btn-danger btn-custom"
                                       href="<?php echo APP.'/index.php?url=idosos/excluir/'.$idoso['id']; ?>"
                                       onclick="return confirm('Tem certeza?')">
                                        🗑 Excluir
                                    </a>

                                </td>

                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center text-muted p-4">
                                Nenhum usuário cadastrado 😕
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>

            </table>
        </div>

    </div>
                         <a href="<?= APP ?>/telainicial/index" class="btn btn-secondary">Voltar</a>
</body>
</html>