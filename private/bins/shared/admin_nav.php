<?php

if(isset($_SESSION["useM"])){

  $sesUse = $_SESSION["useM"];

  $match_account_type = mysqli_query($connections, "SELECT * FROM usrs WHERE usrname='$sesUse'");
  $get_account_type = mysqli_fetch_assoc($match_account_type);
  $account_type = $get_account_type["account_type"];
  
  if($account_type != 1){
  
      // echo"<script>window.location.href='m_a';</script>";
      header('Location: ../../forbidden');
  
  }

}else{
  
  // echo "<script>window.location.href='a';</script>";
  // header('Location: ../private/user');
  header('Location: ../../');
  // echo "<script>window.location.href='private/user?=Success!'.$r.'&&ready_'.$qw.'='.$lp.'&&redir_'.$qw.'='.$hg.$o';</script>";

}


$getName = mysqli_query($connections, "SELECT * FROM usrs WHERE usrname='$sesUse' ");
    $fetchName = mysqli_fetch_assoc($getName);
    $name = $fetchName["firstName"];
    $userN = $fetchName["usrname"];


?>

<nav class="navbar navbar-expand-sm bg-success navbar-dark sticky-top">
  <!-- <a class="navbar-brand" href="#">Logo</a> -->
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  
  <ul class="navbar-nav justify-content-end">
    <li class="nav-item userHover">
      <a class="nav-link" href="../admin">Home</a>
    </li>

    <!-- <li class="nav-item userHover">
      <a class="nav-link" href="community">Comunity</a>
    </li> -->

    <li class="nav-item userHover">
      <a class="nav-link" href="members">Members</a>
    </li>

    <li class="nav-item dropdown userHover">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <?php echo $userN; ?>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="admin_account_settings">Account Settings</a>
        <!-- <a class="dropdown-item" href="#">Link 2</a> -->
        <a class="dropdown-item" href="logOut">Log Out</a>
      </div>
    </li>
    <li class="nav-item" style="visibility:hidden;">
      <a class="nav-link" href="#">nav</a>
    </li>
  </ul>
</div>
</nav>