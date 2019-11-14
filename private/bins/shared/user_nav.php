<?php

$getName = mysqli_query($connections, "SELECT * FROM usrs WHERE usrname='johnhumbert' ");
    $fetchName = mysqli_fetch_assoc($getName);
    $name = $fetchName["firstName"];


?>

<nav class="navbar navbar-expand-sm bg-success navbar-dark sticky-top">
  <!-- <a class="navbar-brand" href="#">Logo</a> -->
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../registration">Home</a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" href="about">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact">Contact</a>
    </li> -->
<!-- <br> -->
    <div class="container floating righting">

    <li class="nav-item">
      <a class="nav-link" id="UserName"><?php echo $name; ?><span id="arrow"></span></a>
      <div class="dropdown_menu" style="float:right">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
    </div>
  </ul>
</div>
</nav>