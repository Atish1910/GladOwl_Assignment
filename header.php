<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= LINK; ?>">
  <img src="<?= LINK; ?>img/logo.png" alt="" height="60"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= LINK; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= LINK; ?>./admin/college.php">Add College</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="<?= LINK; ?>./admin/course.php">Add Course</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= LINK; ?>all-course">About Course</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= LINK; ?>display">Display Queary</a>
        </li>
      </ul>
    </div>
  </div>
</nav>