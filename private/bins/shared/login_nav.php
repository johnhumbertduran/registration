<nav class="navbar navbar-expand-sm bg-success navbar-dark sticky-top">
  <!-- <a class="navbar-brand" href="#">Logo</a> -->

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" id="home" href="../registration">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="about" href="<?php echo url_for('/about'); ?>">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact" href="contact">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="register" href="register">Register</a>
    </li>
    <br>
      <div class="container floating d-flex justify-content-end">
          <form class="form-inline" action="">
              <div class="input-group mb-3 float-right">
                <input type="text" name="userM" placeholder="Username" class="form-control mr-sm-2" id="user" autocomplete="off">
                <input type="password" name="password" placeholder="Password" class="form-control mr-sm-2" id="password">
                <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Log In</button>
                </div>
              </div>
          </form>
      </div>
    </ul>
  </div>
</nav>