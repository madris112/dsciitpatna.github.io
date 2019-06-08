<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="./leaderboard.php">DSC Leaderboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
        </li>
        <?php if(isset($_SESSION['email'])) { ?>
        <li class="nav-item">
          <a class="nav-link" href="./admin.php">Admin Page</a>
        </li>
        <?php } else { ?>
          <li class="nav-item">
          <a class="nav-link" href="./adminlogin.php">Admin Login</a>
        </li>
        <?php } ?>
      </ul>

    </div>
  </div>
</nav>