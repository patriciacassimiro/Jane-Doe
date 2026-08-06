<!doctype php>
<php lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Potifólio Pessoal com Bootstrap</title>
    <meta name="description" content="Criação de web site com bootstrap">
    <meta name="author" content="Patricia Cassimiro">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta name="keywords" content="Jane Doe, desenvolvedora web, web developer, front-end, back-end, UX/UI, portfólio, projetos web, serviços de desenvol-vimento web">
    <script src="https://kit.fontawesome.com/d132031da6.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <!-- Leaflet Routing Machine CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css" />

  <style>
    /* Define altura do mapa */
    #map {
      height: 400px;
      margin-top: 10px;
    }
  </style>
  <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>
</head>   
<body">
    <header>
       <nav class="navbar navbar-expand-lg">
  <div class="container-fluid ">
    <a class="navbar-brand" style="color: rgb(163, 235, 40)" href="index.php">JANE DOE<br>PORTIFÓLIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre.php">Sobre</a>
       </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Projetos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Projeto App</a></li>
            <li><a class="dropdown-item" href="#">Projeto Restaurante</a></li>
            <li><a class="dropdown-item" href="projetos.php">Projetos </a></li>
          </ul>
        </li> 
          <li class="nav-item">
            <a class="nav-link" href="servicos.php">Serviços</a>
          </li>
           <li class="nav-item">
            <a class="nav-link " href="contacto.php">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="login.php">Login</a>
          </li>
      </ul>
      <i class="fa-solid fa-magnifying-glass"></i>
    </div>
  </div>
</nav>
</header>