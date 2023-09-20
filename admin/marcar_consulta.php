<!DOCTYPE html>
<html lang="pt-br">

<?php $pageTitle = "Título da Página"; ?>
<?php include 'includes/header.php'; ?>



<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EnfeMed - Portal Médico</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">saude.enfemed@gmail.com</a>
        <i class="bi bi-phone"></i> 41 99521-2462
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="fa fas-book-medical"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">EnfeMed</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">

      <ul>
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
            <b><a href="#">Cadastro</a></b>
                <div class="dropdown-content">
                    <a href="cadastro_medico.php">Cadastro Médico</a>
                    <a href="cadastro_paciente.php">Cadastro Paciente</a>
                </div>
            </li>
            <li class="dropdown">
                <b><a href="#">Pesquisa</a></b>
                <div class="dropdown-content">
                    <a href="pesquisa_medicos.php">Pesquisa Médico</a>
                    <a href="pesquisa_pacientes.php">Pesquisa Pacientes</a>
                </div>
            </li>
            <li><a href="marca_consulta.php">Marcar Consultas</a></li>
            <!--<li><a href="#">Contato</a></li>--> 
        </ul>   
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->   
      

    </div>
  </header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Marcação de Consulta!</h1>
      <h2>Estamos aqui para atender suas necessidades médicas e garantir seu bem-estar</h2>      
    </div>
  </section><!-- End Hero --><br><br><br><br>

    <section class="content">
        <h2>Marcação de Consulta</h2>

        
        <form action="processar_marca_consulta.php" method="post">        
                      
                      
            <label for="horario">Horário (dd/mm/aaaa):</label>
            <input type="text" id="horario" name="horario" placeholder="dd/mm/aaaa" required>
            
            <label for="data">Data:</label>
            <input type="date" id="data" name="data" required>

            <label for="id_medico">Médico:</label>
            <select id="id_medico" name="id_medico" required>
                
                
                <?php
                include 'includes/db_connection.php'; // Conexão com o banco de dados

                $sql = "SELECT id, nome FROM medicos";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
                    }
                } else {
                    echo "<option value=''>Nenhum médico disponível</option>";
                }

                $conn->close();
                ?>
            </select>

            <label for="id_paciente">Paciente:</label>
            <select id="id_paciente" name="id_paciente" required>
                <?php
                include 'includes/db_connection.php'; // Conexão com o banco de dados

                $sql = "SELECT id, nome FROM pacientes";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
                    }
                } else {
                    echo "<option value=''>Nenhum paciente disponível</option>";
                }

                $conn->close();
                ?>
            </select>
            
            <button type="submit">Agendar Consulta</button>
        </form>
    </section>

    
    <?php include 'includes/footer.php'; ?>
</body>
</html>



