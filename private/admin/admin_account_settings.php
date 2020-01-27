<?php
session_start();
include("../bins/shared/admin_header.php");
include("../bins/shared/connections.php");
// include("../bins/shared/slides.php");
include("../bins/shared/admin_nav.php");

$query_info = mysqli_query($connections, "SELECT * FROM usrs WHERE usrname='$sesUse'");
$my_info = mysqli_fetch_assoc($query_info);
$account_type = $my_info["account_type"];
$img = $my_info["img"];

    $username = "";
    $password = "";
    $confirmPassword = "";


?>

<br>
<center>
<div class="register_form_container col">
    
<form method="POST">
    <table border="0" width="100%">
    <?php
$err = $result = "";
if(isset($_POST["user_update"])){
    

    if(empty($_POST["user_edit"])){

    }else {
        $username = $_POST["user_edit"];
        // $sesUse = $username;
    }


    if($username){

        
        if(strlen($username) <= 8){
            echo "<script>alert('username should have atleast 9 characters');</script>";     
                           
                        }else{

                        $a = md5(rand(1,9));
                        $b = md5(rand(1,9));
                        $c = md5(rand(1,9));
                        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $o = substr(str_shuffle($permitted_chars), 0, 4);
                        $ab = md5(rand(1,5));
                        $t = rand(1,6);
                        $_SESSION["useM"] = $username;
                        mysqli_query($connections, "UPDATE usrs SET usrname='$username' WHERE usrname='$sesUse'");
                        
                        echo"<script>window.location.href='../../private/admin?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
 
                        }
                    }
                }


    if(isset($_POST["password_update"])){
    

    if(empty($_POST["confirmPassword"])){

    }else {
        $confirmPassword = $_POST["confirmPassword"];
        // $sesUse = $username;
    }


    if($confirmPassword){

        
        if(strlen($confirmPassword) <= 8){
            echo "<script>alert('Confirm Password should have atleast 9 characters');</script>";     
                           
                        }else{

                        $a = md5(rand(1,9));
                        $b = md5(rand(1,9));
                        $c = md5(rand(1,9));
                        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $o = substr(str_shuffle($permitted_chars), 0, 4);
                        $ab = md5(rand(1,5));
                        $t = rand(1,6);
                        mysqli_query($connections, "UPDATE usrs SET pssword='$confirmPassword' WHERE usrname='$sesUse'");
                        
                        echo"<script>window.location.href='../../private/admin?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
 
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
    <td colspan="3"><input class="form-control txt_input disabled" type="text" value="<?php echo $username; ?>" name="user_edit" id="user_name_settings" autocomplete="off" placeholder="User Name" required disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="admin_user_edit" onclick="user_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="admin_user_update_btn" type="submit" name="user_update" value="Update"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <input type="hidden" id="db_pass" value="<?php echo $db_password; ?>">
    <td class="label"><b><label for="regPassword">Password:</label></b></td>
    <td colspan="3"><input class="form-control txt_input disabled" type="password" value="<?php echo $password; ?>" name="regPassword" id="change_pass" autocomplete="off" placeholder="Password" required disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="admin_password_edit" onclick="password_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-info" type="button" value="Change" onclick="change_password()" id="change_pass_btn"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="confirmPassword">Confirm Password:</label></b></td>
    <td colspan="3"><input class="form-control txt_input disabled" type="password" value="<?php echo $confirmPassword; ?>" name="confirmPassword" id="confirmPassword" autocomplete="off" placeholder="Confirm Password" disabled required></td>
    <td colspan="4"><input class="btn btn-success disabled" type="submit" name="password_update" value="Update" id="confirmPasswordButton" disabled></td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>
    

</table>
</form>
</div>
</center>

<script>

function password_edit(){
    var password_edit = document.getElementById("admin_password_edit");
    var changePassButton = document.getElementById("change_pass_btn");
    var pass = document.getElementById("change_pass");

    changePassButton.style.display = "block";
    password_edit.style.display = "none";
    pass.disabled = false;
    pass.style.cursor = "auto";
}

function change_password(){
    // alert("hay");
 var confirmPass = document.getElementById("confirmPassword");
 var confirmPassButton = document.getElementById("confirmPasswordButton");
 var changePassButton = document.getElementById("change_pass_btn");
 var db_pass = document.getElementById("db_pass");
 var pass = document.getElementById("change_pass");

if(pass.value == db_pass.value){
 confirmPass.disabled = false;
 confirmPass.style.cursor = "auto";
 confirmPassButton.disabled = false;
 confirmPassButton.style.cursor = "pointer";
 confirmPassButton.classList.remove("disabled");

 pass.disabled = true;
 changePassButton.disabled = true;
 pass.style.cursor = "not-allowed";
 changePassButton.style.cursor = "not-allowed";
}else{
    alert("Incorrect password!");
}

//  disable db_password here
}

function user_edit(){
    var edit = document.getElementById("admin_user_edit");
    var update_btn = document.getElementById("admin_user_update_btn");
    var user_settings = document.getElementById("user_name_settings");

    update_btn.style.display = "block";
    edit.style.display = "none";
    user_settings.disabled = false;
    user_settings.classList.remove("disabled");

}


</script>


<?php

    include("../bins/shared/private_footer.php");

?>
