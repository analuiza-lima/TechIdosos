<?php
if (!defined('APP')) define('APP', 'http://localhost/trabalho-grupo-bruna/mvc');

if (!isset($dados)) {
    $dados = ['id' => '', 'nome' => '', 'email' => '', 'telefone' => '', 'cpf' => ''];
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechIdosos - Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #eef2f7;
            font-family: 'Segoe UI', sans-serif;
        }

        /* 🔵 TOPO */
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
            padding: 25px;
            background: white;
        }

        /* INPUTS */
        .form-control {
            border-radius: 8px;
        }

        .form-control:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 0.2rem #4f46e533;
        }

        /* BOTÕES */
        .btn-custom {
            border-radius: 8px;
            padding: 8px;
        }

        .btn-success {
            background: #16a34a;
            border: none;
        }

        .btn-success:hover {
            background: #15803d;
        }

        .btn-secondary {
            background: #6b7280;
            border: none;
        }

        .btn-secondary:hover {
            background: #4b5563;
        }

        /* ID */
        .id-field {
            background: #e2e8f0;
        }
    </style>
</head>

<body class="container mt-4">

    <!-- 🔵 TOPO -->
    <div class="topbar d-flex justify-content-between align-items-center">
        <div>
            <div class="brand">👵 TechIdosos</div>
            <div class="slogan">Tecnologia acessível para a melhor idade</div>
        </div>

        <a class="btn btn-light btn-custom"
           href="<?php echo APP.'/index.php?url=idosos/listar'; ?>">
            ← Voltar
        </a>
    </div>

    <!-- 📦 FORM -->
    <div class="card-custom">

        <h5 class="mb-4">📝 Cadastro de Usuário</h5>

        <form action="<?php echo APP . '/index.php?url=idosos/gravar'; ?>" method="post">

            <div class="mb-3">
                <label class="form-label">ID</label>
                <input readonly type="text" class="form-control id-field" name="id" value="<?php echo $dados['id']; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $dados['nome']; ?>" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $dados['email']; ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Telefone</label>
                    <input type="text" class="form-control" name="telefone" value="<?php echo $dados['telefone']; ?>">
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label">CPF</label>
                <input type="text" class="form-control" name="cpf" value="<?php echo $dados['cpf']; ?>">
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success btn-custom">
                    💾 Salvar Dados
                </button>

                <a href="<?php echo APP.'/index.php?url=idosos/listar'; ?>"
                   class="btn btn-secondary btn-custom">
                    Cancelar
                </a>
            </div>

        </form>

    </div>

</body>
</html>