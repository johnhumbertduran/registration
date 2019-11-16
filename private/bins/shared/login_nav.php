<?php


$permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$sesUse = $logUse = "";
$qw = md5(rand(1,9));
$r = substr(str_shuffle($permitted_chars), 0, 15);
$o = substr(str_shuffle($permitted_chars), 0, 19);
$lp = sha1(1,9);
$hg = sha1(1,9);
// echo substr(str_shuffle($permitted_chars), 0, 10);
// Output: 54esmdr0qf

if(isset($_SESSION["useM"])){

    $sesUse = $_SESSION["useM"];
    $match_account_type = mysqli_query($connections, "SELECT * FROM usrs WHERE usrname='$sesUse'");
    $get_account_type = mysqli_fetch_assoc($match_account_type);
    $account_type = $get_account_type["account_type"];
    
    if($account_type == 1){
    
        // echo"<script>window.location.href='m_a';</script>";
        header('Location: private/admin');
    
    }elseif($account_type == 2){
    
        // echo "<script>window.location.href='a';</script>";
        header('Location: private/user');
        // echo "<script>window.location.href='private/user?=Success!'.$r.'&&ready_'.$qw.'='.$lp.'&&redir_'.$qw.'='.$hg.$o';</script>";

    }

}


if(isset($_POST["logsIn"])){

    if(empty($_POST["passW"]) && empty($_POST["userM"]) ){

        // $logErr = "User Name and Password are empty!";
        echo"<script>alert('User Name and Password are empty');</script>";
    
        }else{
    
        if(empty($_POST["userM"])){
        
        // $logErr = "Usern Name is empty!";
        echo"<script>alert('User Name is empty');</script>";
    
        }else{
    
        // $you = $_POST["useN"];
        $sesUse = $_POST["userM"];
        
        }

        if(empty($_POST["passW"])){
    
            // $logErr = "Password is empty!";
            echo"<script>alert('Password is empty');</script>";         
        
        }else{
        
            // $pass = $_POST["pas"];
            $logUse = $_POST["passW"];
        
    
        }
    
    }



    if($sesUse && $logUse){

        $userCheck = mysqli_query($connections, "SELECT * FROM usrs WHERE usrname='$sesUse' ");
        $userRow = mysqli_num_rows($userCheck);
        
        if($userRow > 0){
        
            $fetch = mysqli_fetch_assoc($userCheck);
            $db_pass = $fetch["pssword"];
            
            $account_type = $fetch["account_type"];
            // echo" <script> logUsCout = 0; </script> ";
        
        if($account_type == "1"){
        
            
            if($db_pass == $logUse){
                
                    $_SESSION["useM"] = $sesUse;

                    // echo"<script>window.location.href='m_a';</script>";
                    header('Location: private/admin?=Success!'.$r.'&&ready_'.$qw.'='.$lp.'&&redir_'.$qw.'='.$hg.$o);

                
                }else{
                
                    $logUse = ""; 
                    // echo" <script> logPasCout = 1; </script> ";
                    // echo" <script> logPasMobCout = 1; </script> ";
                    echo"<script>alert('Your Password is incorrect!');</script>";
                
                }

        
        }elseif ($account_type == "2") {

            if ($db_pass == $logUse) {

                $_SESSION["useM"] = $sesUse;
                
                // echo"<script>window.location.href='a';</script>";
                header('Location: private/user?=Success!'.$r.'&&ready_'.$qw.'='.$lp.'&&redir_'.$qw.'='.$hg.$o);

                }else{
                
                    $logUse = "";
                    // echo" <script> logPasCout = 1; </script> ";
                    // echo" <script> logPasMobCout = 1; </script> ";
                    echo"<script>alert('Your Password is incorrect!');</script>";
                
                }   
            }   
            
        }else{

            $sesUse = "";
            // echo" <script> logUsCout = 1; </script> ";
            // echo" <script> logUsMobCout = 1; </script> ";
            echo"<script>alert('Sorry, the User Name you entered is not registered.');</script>";
        }
    }

}

?>

<nav class="navbar navbar-expand-sm bg-success navbar-dark sticky-top">
  <!-- <a class="navbar-brand" href="../registration"><img src="<?php echo url_for('public/images/logo.png'); ?>" alt="ACC Logo" srcset="" width="30" height="30"></a> -->

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
          <form method="POST" class="form-inline">
              <div class="input-group mb-3 float-right">
                <input type="text" name="userM" value="<?php echo $sesUse; ?>" placeholder="Username" class="form-control mr-sm-2" id="user" autocomplete="off">
                <input type="password" name="passW" value="<?php echo $logUse; ?>" placeholder="Password" class="form-control mr-sm-2" id="password" autocomplete="off">
                <div class="input-group-append">
                <button class="btn btn-primary" name="logsIn" type="submit">Log In</button>
                </div>
              </div>
          </form>
      </div>
    </ul>
  </div>
</nav>