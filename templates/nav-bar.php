<nav class="navbar navbar-expand-lg shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= url("index.php") ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lists
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= url("list-create.php"); ?>">Create</a></li>
            <li><a class="dropdown-item" href="<?= url("list-index.php") ?>">Lists</a></li>
            <li><a class="dropdown-item" href="list/index.php">Delete</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>