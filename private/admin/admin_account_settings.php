<?php
session_start();
include("../bins/shared/admin_header.php");
include("../bins/shared/connections.php");
// include("../bins/shared/slides.php");
include("../bins/shared/admin_nav.php");


    $username = "";
    $password = "";
    $confirmPassword = "";


?>

<center>
<div class="register_form_container col">
    
<form method="POST">
    <table border="0" width="100%">
    <?php
$err = $result = "";
if(isset($_POST["submit"])){
    

    if(empty($_POST["userM"])){

    }else {
        $username = $_POST["userM"];
        $sesUse = $username;
    }

    if(empty($_POST["regPassword"])){

    }else {
        $password = $_POST["regPassword"];
    }

    if(empty($_POST["confirmPassword"])){

    }else {
        $confirmPassword = $_POST["confirmPassword"];
    }


    if($username && $confirmPassword){

        $checkCount = 0;
        
        if(strlen($username) <= 8){
                $err = "User Name";
                $result = "should have at least combinations of 9 alpha numeric symbols.";
                include("private/bins/shared/warning.php");
                include("private/bins/shared/warningColorUserName.php");
            }else{
                include("private/bins/shared/removeWarningColorUserName.php");
                if(strlen($regPassword) <= 8){
                    $err = "Password";
                    $result = "should have at least combinations of 9 alpha numeric symbols.";
                    include("private/bins/shared/warning.php");
                    include("private/bins/shared/warningColorRegPassword.php");
                }else{
                    include("private/bins/shared/removeWarningColorRegPassword.php");
                    if($confirmPassword != $regPassword){
                        $err = "Confirm Password";
                        $result = "should match to the password you typed.";
                        include("private/bins/shared/warning.php");
                        include("private/bins/shared/warningColorConfirmPassword.php");
                    }else{

                        if($checkCount >= 1){
                           
                        }else{

                        $a = md5(rand(1,9));
                        $b = md5(rand(1,9));
                        $c = md5(rand(1,9));
                        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $o = substr(str_shuffle($permitted_chars), 0, 4);
                        $ab = md5(rand(1,5));
                        $t = rand(1,6);
                        
                        
                        echo"<script>window.location.href='private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
 
                        }
                    }
                }
            }
        }


    }



    $edit_qry = mysqli_query($connections, "SELECT * FROM usrs WHERE usrname='$sesUse'");
    $row_edits = mysqli_fetch_assoc($edit_qry);
    
    $username = $row_edits["usrname"];
    $db_password = $row_edits["pssword"];
// $confirmPassword = $row_edits[""];
    
?>
    <tr><th colspan="4"><center> <h1>Registration Form</h1> </center></th></tr>

    <tr><td colspan="4"><hr></td></tr>

    

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="userSign">User Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $username; ?>" name="userM" id="userSign" autocomplete="off" placeholder="User Name" required></td>
    <td colspan="4"><input style="float:right;" class="btn btn-primary" type="submit" name="submit" value="Update"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="regPassword">Password:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="password" value="<?php echo $password; ?>" name="regPassword" id="regPassword" autocomplete="off" placeholder="Password" required></td>
    <td colspan="4"><input style="float:right;" class="btn btn-info" type="submit" name="submit" value="Change"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="confirmPassword">Confirm Password:</label></b></td>
    <td colspan="3"><input class="form-control txt_input disabled" type="password" value="<?php echo $confirmPassword; ?>" name="confirmPassword" id="confirmPassword" autocomplete="off" placeholder="Confirm Password" disabled required></td>
    <td colspan="4"><input style="float:right;" class="btn btn-success disabled" type="submit" name="submit" value="Update" disabled></td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>
    

</table>
</form>
</div>
</center>