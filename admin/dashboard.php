<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Adicione outros estilos aqui -->

    <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>
<body>

<?php include_once 'includes/header.php'; ?>



<div class="container mt-4">
    
    <div class="container mt-4">
    <center><h1>Bem-vindo ao Painel Administrativo</h1></center>
    <!-- Adicione o conteúdo do dashboard aqui -->

    <div class="row mt-4">
        <div class="col-md-3 text-center">
            <a href="cadastrar_admin.php">
                <img src="assets/images/admin.png" alt="Avatar Administrador" class="mb-2" style="max-width: 250px; max-height: 250px;">
                <button class="btn btn-primary btn-block">Cadastrar Admin.</button>
            </a>
        </div>
        <div class="col-md-3 text-center">
            <a href="adicionar_medico.php">
                <img src="assets/images/medico.png" alt="Avatar Médico" class="mb-2" style="max-width: 250px; max-height: 250px;">
                <button class="btn btn-primary btn-block">Cadastrar Médico</button>
            </a>
        </div>
        <div class="col-md-3 text-center">
            <a href="adicionar_paciente.php">
                <img src="assets/images/paciente.png" alt="Avatar Paciente" class="mb-2" style="max-width: 250px; max-height: 250px;">
                <button class="btn btn-primary btn-block">Cadastrar Paciente</button>
            </a>
        </div>
        <div class="col-md-3 text-center">
            <a href="\enfemed\marca_consulta.php">
                <img src="assets/images/consulta.png" alt="Avatar Consulta" class="mb-2" style="max-width: 250px; max-height: 250px;">
                <button class="btn btn-primary btn-block">Marcar Consulta</button>
            </a>
        </div>
    </div>
</div>


<?php include_once 'includes/footer.php'; ?>

<script src="js/bootstrap.bundle.min.js"></script>
<!-- Adicione outros scripts aqui -->
</body>
</html>
