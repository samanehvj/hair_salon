<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="imgs/logo.png" class="nav-logo" alt="yoshi hair salon ">
  </a>

  <a href="contact.php/#booking" class="btn align-middle btn-infoo ml-auto mr-2 order-lg-last" type="button">Book Now</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mx-5 mt-4 sv-nav">
      <li class="nav-item
      <?php
      if (basename($_SERVER['PHP_SELF'], '.php') == 'index') {
        echo 'active';
      }
      ?>
      ">
        <a class="nav-link" href="index.php">Welcome </a>
      </li>



      <li class="nav-item
       <?php
        if (basename($_SERVER['PHP_SELF'], '.php') == 'service') {
          echo 'active';
        }
        ?>
  ">
        <a class="nav-link" href="service.php">Services</a>
      </li>
      <li class="nav-item 
      <?php
      if (basename($_SERVER['PHP_SELF'], '.php') == 'protfolio') {
        echo 'active';
      }
      ?>
">
        <a class="nav-link" href="portfolio.php">Portfolio</a>
      </li>
      <li class="nav-item 
      <?php
      if (basename($_SERVER['PHP_SELF'], '.php') == 'team') {
        echo 'active';
      }
      ?>
">
        <a class="nav-link " href="team.php">Team</a>
      </li>


      <li class="nav-item 
      <?php
      if (basename($_SERVER['PHP_SELF'], '.php') == 'contact') {
        echo 'active';
      }
      ?>
">
        <a class="nav-link " href="contact.php">Contact</a>
      </li>

    </ul>
  </div>
</nav>