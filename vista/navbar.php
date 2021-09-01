<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mantenedor</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
      <div class="navbar-nav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <div class="nav-link">
              <a class="btn btn-outline-success" aria-current="page" href="../controlador/home.php">
                <i class="fas fa-home"></i>
              </a>
            </div>
          </li>
          <li class="nav-item">
            <div class="nav-link">
              <a class="btn btn-outline-success" href="../controlador/perfil.php">
                <i class="fas fa-user-cog"></i>
              </a>
            </div>
          </li>
          <li class="nav-item">
            <form class="nav-link" action="../controlador/home.php" method="post">
              <input type="hidden" name="flag" value="2">
              <button class="btn btn-outline-success" type="submit">
                <i class="fas fa-door-open"></i>
              </button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>