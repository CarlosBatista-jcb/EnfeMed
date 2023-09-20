<?php $pageTitle = "Título da Página"; ?>
<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Adicione este link ao head -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

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
      <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">

      <ul>
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
            <b><a href="/admin/dashboard.php">Cadastro</a></b>
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
      <h1>Bem-vindos a EnfeMed</h1>
      <h2>Estamos aqui para justificar suas necessidades médicas e garantir seu bem-estar</h2>
      <a href="contato.php" class="btn-get-started scrollto">Iniciar</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Por que escolher a EnfeMed?</h3>
              <p>
                EnfeMed é um sistema integrado de resiliência médica e seguro que permite a qualquer pessoa obter a melhor assistência médica dentro de um orçamento razoável. Entendemos a importância dos cuidados médicos e, portanto, estamos ao seu lado para fornecer todas as formas de justiça médica.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Saber mais <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-plus-medical"></i>
                    <h4>Melhores serviços</h4>
                    <p>Se você está na EnfeMed, deve ser quem valoriza a qualidade. E você está no lugar certo para isso.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-heart"></i>
                    <h4>Confiável</h4>
                    <p>A confiança são os pilares sobre os quais nos apoiamos. A EnfeMed garante que você obtenha toda a justiça pelo que você paga.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-dollar"></i>
                    <h4>Orçamento amigável</h4>
                    <p>Não há mais compromissos com sua saúde para seu orçamento limitado. Temos planos para todos.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
<!-- ======= Services Section ======= -->
<section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Serviços</h2>
          
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4><a href="#" target="_blank">Plano PRO</a></h4>
              <p>Previsão multi-doença, análise e serviços de laboratório patológico. </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-chart-area"></i></div>
              <h4><a href="#/" target="_blank">Aconselhamentos</a></h4>
              <p>Análise dedicada de sentimentos médicos.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hospital-user"></i></div>
              <h4><a href="https://www.who.int/" target="_blank">OMS</a></h4>
              <p>Um site de conscientização e informação alimentado pela OMS (Organização Mundial da Saúde).</p>
            </div>
          </div>          

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-syringe"></i></div>
              <h4><a href="https://www.saude.pr.gov.br/Pagina/Hemepar-Centro-de-Hematologia-e-Hemoterapia-do-Parana" target="_blank">Banco de sangue.</a></h4>
              <p>Disposições internas para doação de sangue e recepção de sangue do banco de sangue.</p>
            </div>
          </div>     
         
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-peace"></i></div>
              <h4><a href="#/"  target="_blank">Yogafit</a></h4>
              <p>Aplicativo de saúde que ensina e treina pessoas a praticar Yoga de forma adequada.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a href="https://www.google.com/maps/search/farmacias+populares+s%C3%A3o+jose+dos+pinhais/@-25.4470341,-49.3654454,12z/data=!3m1!4b1?entry=ttu" target="_blank">Farmácia Amiga</a></h4>
              <p>Sistema completo de gestão da Farmácia para melhor entrega de medicamentos e manutenção.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contato</h2>
          <p>Sinta-se à vontade para entrar em contato conosco</p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.1946080274633!2d-49.08931962559006!3d-25.53189373692924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcf4597d55a55d%3A0xc324f3a5f780baf7!2sRua%20Tubar%C3%A3o%2C%20156%20-%20S%C3%A3o%20Sebastiao%2C%20S%C3%A3o%20Jos%C3%A9%20dos%20Pinhais%20-%20PR%2C%2083075-060%2C%20Brasil!5e0!3m2!1spt-BR!2sch!4v1692210552583!5m2!1spt-BR!2sch" frameborder="0" allowfullscreen></iframe>      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Endereço:</h4>
                <p>Rua Tubarão, 156 CEP 83075-060</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>saude.enfemed@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Fone:</h4>
                <p>+55 41 99521-2462</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

          <?php include 'contato.php'; ?>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>EnfeMed</h3>
        <p>
          Rua Tubarão, 156 <br>
          SJP - Paraná<br>
          <br><br>
          <strong>Fone:</strong> +55 41 99521-2462<br>
          <strong>Email:</strong> enfemed@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Links Úteis</h4>
        <ul>
          <li><a href="index.php">Página Inicial</a></li>
          <li><a href="cadastro_medico.php">Cadastro de Médico</a></li>
          <li><a href="cadastro_paciente.php">Cadastro de Paciente</a></li>
          <li><a href="marca_consulta.php">Marcação de Consulta</a></li>
          <li><a href="pesquisa_consultas.php">Pesquisa de Consultas</a></li>
          <li><a href="pesquisa_medicos.php">Pesquisa Médicos</a></li>
          <li><a href="pesquisa_pacientes.php">Pesquisa Pacientes</a></li>
          <li><a href="contato.php">Contato</a></li>
      </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Outros Serviços</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Pathological Labs</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Hospital Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Pharmacy Management</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Blood Donation</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Medical Insurance</a></li>
        </ul>
      </div>

      <div class="col-lg-3  footer-links">
        <img src="assets/img/favicon.png" height="250px" width="360px">
      </div>
     

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>EnfeMed</span></strong>. Todos os dieitos reservados
    </div>
    <div class="credits">
        Desenvolvido por <a href="cbsites10.com.br" target="_blank">CBsites10</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
</body>
</html>
