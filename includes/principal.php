
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/views/main.php">O nome da sua loja aqui</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
      aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="/views/usuarios.php">Usuários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/views/clientes.php">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/views/usuarios.php">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/views/usuarios.php">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/views/usuarios.php">Usuarios</a>
        </li>
      </ul>
    </div>
    <a class="navbar-brand">Bem vindo(a) <?= $_SESSION['user']['email'] ?> </a>
    <a class="navbar-brand" href="/logout.php">Sair</a>
  </div>
</nav>

<!--Navbar!-->