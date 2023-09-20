<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Cabeçalho e metadados -->
</head>
<body>
<?php include_once 'includes/header.php'; ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Acesso ao Painel Administrativo</div>
                <div class="card-body">
                    <form method="POST" action="processar_login.php">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuário</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'includes/footer.php'; ?>
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Outros scripts -->
</body>
</html>
