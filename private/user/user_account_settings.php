<?php
session_start();
include("../bins/shared/user_header.php");
include("../bins/shared/connections.php");
// include("../bins/shared/slides.php");
include("../bins/shared/user_nav.php");

$lastName = "";
$firstName = "";
$middleName = "";
$homeAddress = "";
$gender = "";
$civilStatus = "";
$employmentAddress = "";
$currentWork = "";
$currentPosition = "";
$elementary = "";
$elementaryYearGraduated = "";
$highSchool = "";
$highSchoolYearGraduated = "";
$college = "";
$collegeYearGraduated = "";
$collegeDegree = "";
$graduate = "";
$graduateYearGraduated = "";
$graduateDegree = "";
$officeTelephoneNo = "";
$cellphoneNo = "";
$alumniChapterMembership = "";
$email = "";
$username = "";
$regPassword = "";
$newPassword = "";

?>

<br>

<center>
<div class="register_form_container col">
    

    <!-- <table border="0" width="100%"> -->
    <?php
$err = $result = "";
if(isset($_POST["lastname_update"])){

    if(empty($_POST["lastname"])){

    }else {
        $lastName = $_POST["lastname"];
    }

    if($lastName){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET lastName='$lastName' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["firstname_update"])){

    if(empty($_POST["firstname"])){

    }else {
        $firstName = $_POST["firstname"];
    }

    if($firstName){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET firstName='$firstName' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["middlename_update"])){

    if(empty($_POST["middlename"])){

    }else {
        $middleName = $_POST["middlename"];
    }

    if($middleName){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET middleName='$middleName' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["homeaddress_update"])){

    if(empty($_POST["homeAddress"])){

    }else {
        $homeAddress = $_POST["homeAddress"];
    }

    if($homeAddress){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET homeAddress='$homeAddress' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}



if(isset($_POST["gender_update"])){

    if(empty($_POST["gender"])){

    }else {
        $gender = $_POST["gender"];
    }

    if($gender){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET gender='$gender' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["civil_update"])){

    if(empty($_POST["civilStatus"])){

    }else {
        $civilStatus = $_POST["civilStatus"];
    }

    if($civilStatus){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET civilStatus='$civilStatus' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["employmentAddress_update"])){

    if(empty($_POST["employmentAddress"])){

    }else {
        $employmentAddress = $_POST["employmentAddress"];
    }

    if($employmentAddress){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET employmentAddress='$employmentAddress' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["currentWork_update"])){

    if(empty($_POST["currentWork"])){

    }else {
        $currentWork = $_POST["currentWork"];
    }

    if($currentWork){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET currentWork='$currentWork' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["currentPosition_update"])){

    if(empty($_POST["currentPosition"])){

    }else {
        $currentPosition = $_POST["currentPosition"];
    }

    if($currentPosition){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET currentPosition='$currentPosition' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["elementary_update"])){

    if(empty($_POST["elementary"])){

    }else {
        $elementary = $_POST["elementary"];
    }

    if($elementary){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET elementary='$elementary' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["elementaryYearGraduated_update"])){

    if(empty($_POST["elementaryYearGraduated"])){

    }else {
        $elementaryYearGraduated = $_POST["elementaryYearGraduated"];
    }

    if($elementaryYearGraduated){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET elementaryYearGraduated='$elementaryYearGraduated' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["highSchool_update"])){

    if(empty($_POST["highSchool"])){

    }else {
        $highSchool = $_POST["highSchool"];
    }

    if($highSchool){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET highSchool='$highSchool' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["highSchoolYearGraduated_update"])){

    if(empty($_POST["highSchoolYearGraduated"])){

    }else {
        $highSchoolYearGraduated = $_POST["highSchoolYearGraduated"];
    }

    if($highSchoolYearGraduated){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET highSchoolYearGraduated='$highSchoolYearGraduated' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["college_update"])){

    if(empty($_POST["college"])){

    }else {
        $college = $_POST["college"];
    }

    if($college){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET college='$college' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["collegeYearGraduated_update"])){

    if(empty($_POST["collegeYearGraduated"])){

    }else {
        $collegeYearGraduated = $_POST["collegeYearGraduated"];
    }

    if($collegeYearGraduated){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET collegeYearGraduated='$collegeYearGraduated' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["collegeDegree_update"])){

    if(empty($_POST["collegeDegree"])){

    }else {
        $collegeDegree = $_POST["collegeDegree"];
    }

    if($collegeDegree){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET collegeDegree='$collegeDegree' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["graduate_update"])){

    if(empty($_POST["graduate"])){

    }else {
        $graduate = $_POST["graduate"];
    }

    if($graduate){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET graduate='$graduate' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["graduateYearGraduated_update"])){

    if(empty($_POST["graduateYearGraduated"])){

    }else {
        $graduateYearGraduated = $_POST["graduateYearGraduated"];
    }

    if($graduateYearGraduated){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET graduateYearGraduated='$graduateYearGraduated' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["graduateDegree_update"])){

    if(empty($_POST["graduateDegree"])){

    }else {
        $graduateDegree = $_POST["graduateDegree"];
    }

    if($graduateDegree){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET graduateDegree='$graduateDegree' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["officeTelephoneNo_update"])){

    if(empty($_POST["telNo"])){

    }else {
        $officeTelephoneNo = $_POST["telNo"];
    }

    if($officeTelephoneNo){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET officeTelephoneNo='$officeTelephoneNo' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["cellphoneNo_update"])){

    if(empty($_POST["celNo"])){

    }else {
        $cellphoneNo = $_POST["celNo"];
    }

    if($cellphoneNo){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET cellphoneNo='$cellphoneNo' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["email_update"])){

    if(empty($_POST["emailAddress"])){

    }else {
        $email = $_POST["emailAddress"];
    }

    if($email){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        mysqli_query($connections, "UPDATE usrs SET email='$email' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["username_update"])){

    if(empty($_POST["userM"])){

    }else {
        $username = $_POST["userM"];
    }

    if($username){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        $_SESSION["useM"] = $username;
        mysqli_query($connections, "UPDATE usrs SET usrname='$username' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

if(isset($_POST["newPassword_update"])){

    if(empty($_POST["newPassword"])){

    }else {
        $newPassword = $_POST["newPassword"];
    }

    if($newPassword){
        $a = md5(rand(1,9));
        $b = md5(rand(1,9));
        $c = md5(rand(1,9));
        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $o = substr(str_shuffle($permitted_chars), 0, 4);
        $ab = md5(rand(1,5));
        $t = rand(1,6);
        // $_SESSION["useM"] = $newPassword;
        mysqli_query($connections, "UPDATE usrs SET pssword='$newPassword' WHERE usrname='$sesUse'");
        
        echo"<script>window.location.href='../../private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
    }

}

$edit_user_qry = mysqli_query($connections, "SELECT * FROM usrs WHERE usrname='$sesUse'");
$row_user_edits = mysqli_fetch_assoc($edit_user_qry);

$lastName = $row_user_edits["lastName"];
$firstName = $row_user_edits["firstName"];
$middleName = $row_user_edits["middleName"];
$homeAddress = $row_user_edits["homeAddress"];
$gender = $row_user_edits["gender"];
$civilStatus = $row_user_edits["civilStatus"];
$employmentAddress = $row_user_edits["employmentAddress"];
$currentWork = $row_user_edits["currentWork"];
$currentPosition = $row_user_edits["currentPosition"];
$elementary = $row_user_edits["elementary"];
$elementaryYearGraduated = $row_user_edits["elementaryYearGraduated"];
$highSchool = $row_user_edits["highSchool"];
$highSchoolYearGraduated = $row_user_edits["highSchoolYearGraduated"];
$college = $row_user_edits["college"];
$collegeYearGraduated = $row_user_edits["collegeYearGraduated"];
$collegeDegree = $row_user_edits["collegeDegree"];
$graduate = $row_user_edits["graduate"];
$graduateYearGraduated = $row_user_edits["graduateYearGraduated"];
$graduateDegree = $row_user_edits["graduateDegree"];
$officeTelephoneNo = $row_user_edits["officeTelephoneNo"];
$cellphoneNo = $row_user_edits["cellphoneNo"];
$alumniChapterMembership = $row_user_edits["alumniChapterMembership"];
$email = $row_user_edits["email"];
$username = $row_user_edits["usrname"];
$db_password = $row_user_edits["pssword"];

?>
    <tr><th colspan="4"><center> <h1>User Settings</h1> </center></th></tr>

    <tr><td colspan="4"><hr></td></tr>

    <div id="accordion">
    <form method="POST">
    <div class="card">
      <div class="card-header">
        <a class="card-link collapse_block" data-toggle="collapse" href="#nameandaddress">
         <strong> Name and Address </strong>
        </a>
      </div>
      <div id="nameandaddress" class="collapse show" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="lastname">Last Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $lastName; ?>" name="lastname" class="warningColor" id="lastname" placeholder="Last Name" autocomplete="off" required disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_lastname_edit" onclick="user_lastname_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_lastname_update_btn" type="submit" name="lastname_update" value="Update"></td>
    </tr>
    </div>
    </form>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="firstname">First Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $firstName; ?>" name="firstname" class="err" id="firstname" placeholder="First Name" autocomplete="off" required disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_firstname_edit" onclick="user_firstname_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_firstname_update_btn" type="submit" name="firstname_update" value="Update"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="middlename">Middle Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $middleName; ?>" name="middlename" class="err" id="middlename" placeholder="Middle Name" autocomplete="off" required disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_middlename_edit" onclick="user_middlename_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_middlename_update_btn" type="submit" name="middlename_update" value="Update"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="homeAddress">Home Address:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $homeAddress; ?>" name="homeAddress" id="homeAddress" placeholder="Home Address" autocomplete="off" required disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_homeAddress_edit" onclick="user_homeAddress_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_homeAddress_update_btn" type="submit" name="homeaddress_update" value="Update"></td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link collapse_block" data-toggle="collapse" href="#gender_collapsible">
        <strong> Gender </strong>
      </a>
      </div>
      <div id="gender_collapsible" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="gender">Sex:</label></b></td>
    <td>&nbsp;<input type="radio" name="gender" value="male" <?php if($gender == "male") {echo "checked";} ?> id="gender_male" required disabled>Male <br> &nbsp;<input type="radio" name="gender" id="gender_female" value="female" <?php if($gender == "female") {echo "checked";} ?> required disabled>Female</td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_gender_edit" onclick="user_gender_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_gender_update_btn" type="submit" name="gender_update" value="Update"></td>
    
    <td class="label"><b><label for="civilStatus">Civil Status:</label></b></td>
    <td>&nbsp;<input type="radio" name="civilStatus" value="single" <?php if($civilStatus == "single") {echo "checked";} ?> id="civil_single" required disabled>Single <br> &nbsp;<input type="radio" name="civilStatus" id="civil_married" value="married" <?php if($civilStatus == "married") {echo "checked";} ?> required disabled>Married</td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_civil_edit" onclick="user_civil_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_civil_update_btn" type="submit" name="civil_update" value="Update"></td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link collapse_block" data-toggle="collapse" href="#workdetails">
        <strong> Work Details </strong>
        </a>
      </div>
      <div id="workdetails" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="employmentAddress">Employment Address:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $employmentAddress; ?>" name="employmentAddress" id="employmentAddress" autocomplete="off" placeholder="Employment Address" disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_employmentAddress_edit" onclick="user_employmentAddress_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_employmentAddress_update_btn" type="submit" name="employmentAddress_update" value="Update"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="currentWork">Current Work:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $currentWork; ?>" name="currentWork" id="currentWork" autocomplete="off" placeholder="Current Work" disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_currentWork_edit" onclick="user_currentWork_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_currentWork_update_btn" type="submit" name="currentWork_update" value="Update"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="currentPosition">Current Position:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $currentPosition; ?>" name="currentPosition" id="currentPosition" autocomplete="off" placeholder="Current Position" disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_currentPosition_edit" onclick="user_currentPosition_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_currentPosition_update_btn" type="submit" name="currentPosition_update" value="Update"></td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link collapse_block" data-toggle="collapse" href="#elementary_accordion">
        <strong> Elementary School </strong>
        </a>
      </div>
      <div id="elementary_accordion" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="elementary">Elementary:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $elementary; ?>" name="elementary" id="elementary" autocomplete="off" placeholder="Elementary" required disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_elementary_edit" onclick="user_elementary_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_elementary_update_btn" type="submit" name="elementary_update" value="Update"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="elementaryYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $elementaryYearGraduated; ?>" name="elementaryYearGraduated" autocomplete="off" id="elementaryYearGraduated" placeholder="Year Graduated" required disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_elementaryYearGraduated_edit" onclick="user_elementaryYearGraduated_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_elementaryYearGraduated_update_btn" type="submit" name="elementaryYearGraduated_update" value="Update"></td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link collapse_block" data-toggle="collapse" href="#highschool_accordion">
        <strong> High School </strong>
        </a>
      </div>
      <div id="highschool_accordion" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="highSchool">High School:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $highSchool; ?>" name="highSchool" id="highSchool" autocomplete="off" placeholder="High School" required disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_highSchool_edit" onclick="user_highSchool_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_highSchool_update_btn" type="submit" name="highSchool_update" value="Update"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="highSchoolYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $highSchoolYearGraduated; ?>" name="highSchoolYearGraduated" id="highSchoolYearGraduated" autocomplete="off" placeholder="Year Graduated" required disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_highSchoolYearGraduated_edit" onclick="user_highSchoolYearGraduated_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_highSchoolYearGraduated_update_btn" type="submit" name="highSchoolYearGraduated_update" value="Update"></td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link collapse_block" data-toggle="collapse" href="#college_accordion">
        <strong> College </strong>
        </a>
      </div>
      <div id="college_accordion" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="college">College:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $college; ?>" name="college" id="college" autocomplete="off" placeholder="College" disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_college_edit" onclick="user_college_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_college_update_btn" type="submit" name="college_update" value="Update"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="collegeYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $collegeYearGraduated; ?>" name="collegeYearGraduated" id="collegeYearGraduated" autocomplete="off" placeholder="Year Graduated" disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_collegeYearGraduated_edit" onclick="user_collegeYearGraduated_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_collegeYearGraduated_update_btn" type="submit" name="collegeYearGraduated_update" value="Update"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="collegeDegree">Degree:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $collegeDegree; ?>" name="collegeDegree" id="collegeDegree" autocomplete="off" placeholder="Degree" disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_collegeDegree_edit" onclick="user_collegeDegree_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_collegeDegree_update_btn" type="submit" name="collegeDegree_update" value="Update"></td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link collapse_block" data-toggle="collapse" href="#graduateschool">
        <strong> Graduate School </strong>
        </a>
      </div>
      <div id="graduateschool" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="graduate">Graduate:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $graduate; ?>" name="graduate" id="graduate" autocomplete="off" placeholder="Graduate" disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_graduate_edit" onclick="user_graduate_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_graduate_update_btn" type="submit" name="graduate_update" value="Update"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="graduateYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $graduateYearGraduated; ?>" name="graduateYearGraduated" id="graduateYearGraduated" autocomplete="off" placeholder="Year Graduated" disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_graduateYearGraduated_edit" onclick="user_graduateYearGraduated_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_graduateYearGraduated_update_btn" type="submit" name="graduateYearGraduated_update" value="Update"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="graduateDegree">Degree:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $graduateDegree; ?>" name="graduateDegree" id="graduateDegree" autocomplete="off" placeholder="Degree" disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_graduateDegree_edit" onclick="user_graduateDegree_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_graduateDegree_update_btn" type="submit" name="graduateDegree_update" value="Update"></td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link collapse_block" data-toggle="collapse" href="#contact_number_and_membership">
        <strong> Contact Number and Membership </strong>
        </a>
      </div>
      <div id="contact_number_and_membership" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="telNo">Office Telephone No. :</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text"maxlength="14" onkeypress='return isNumberKey(event)' value="<?php echo $officeTelephoneNo; ?>" name="telNo" id="telNo" autocomplete="off" placeholder="Office Telephone No." disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_officeTelephoneNo_edit" onclick="user_officeTelephoneNo_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_officeTelephoneNo_update_btn" type="submit" name="officeTelephoneNo_update" value="Update"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="celNo">Mobile/Cell Phone No. :</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" maxlength="13" onkeypress='return isNumberKey(event)' value="<?php echo $cellphoneNo; ?>" name="celNo" id="celNo" autocomplete="off" placeholder="Mobile/Cell Phone No." required disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_cellphoneNo_edit" onclick="user_cellphoneNo_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_cellphoneNo_update_btn" type="submit" name="cellphoneNo_update" value="Update"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="alumniMembership">Alumni Chapter Membership:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $alumniChapterMembership; ?>" name="alumniMembership" id="alumniMembership" autocomplete="off" placeholder="Alumni Chapter Membership" disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_alumniChapterMembership_edit" onclick="user_alumniChapterMembership_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_alumniChapterMembership_update_btn" type="submit" name="alumniChapterMembership_update" value="Update"></td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link collapse_block" data-toggle="collapse" href="#email_username_password">
        <strong> Email, Username and Password </strong>
        </a>
      </div>
      <div id="email_username_password" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="emailAddress">Email Address:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="email" value="<?php echo $email; ?>" name="emailAddress" id="emailAddress" autocomplete="off" placeholder="Email Address" required disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_email_edit" onclick="user_email_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_email_update_btn" type="submit" name="email_update" value="Update"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="userSign">User Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $username; ?>" name="userM" id="userSign" autocomplete="off" placeholder="User Name" required disabled></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_username_edit" onclick="user_username_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_username_update_btn" type="submit" name="username_update" value="Update"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="regPassword">Password:</label></b></td>
    <input type="hidden" id="db_pass" value="<?php echo $db_password; ?>">
    <td colspan="3"><input class="form-control txt_input" type="password" value="<?php echo $regPassword; ?>" name="regPassword" id="regPassword" autocomplete="off" placeholder="Password" required disabled></td>
    <!-- <td colspan="4"><a href="#" class="btn btn-primary" id="user_regPassword_edit" onclick="user_regPassword_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a></td> -->
    <td colspan="4"><a href="#" class="btn btn-primary" id="user_regPassword_edit" onclick="user_regPassword_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="user_regPassword_update_btn" type="submit" onclick="check_password()" value="Change"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="newPassword">New Password:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="password" value="<?php echo $newPassword; ?>" name="newPassword" id="newPassword" autocomplete="off" placeholder="New Password" required disabled></td>
    <td colspan="4"><input class="btn btn-primary" id="user_newPassword_update_btn" type="submit" name="newPassword_update" value="Update" disabled></td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>
    <!-- collapsible end div tag -->
  </div>

    <tr><td colspan="4"><hr></td></tr>
    
    <!-- <tr>
        <td colspan="4"><input style="float:right;" class="btn btn-success" type="submit" name="submit" value="Submit"></td>
    </tr> -->

<!-- </table> -->

</div>
</center>

<script>
        	function isNumberKey(evt){
	
                var charCode = (evt.which) ? evt.which : event.keyCode
    
                if(charCode > 31 && (charCode < 40 || charCode > 41) && ( charCode < 48 || charCode > 57) && charCode != 43  && charCode != 45 )
    
                    return false;
        
                return true;

            }
        </script>

<br>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> --> <!-- Bootstrap4 for CDN (Content Delivery Network) -->
<!-- Bootstrap4 for offline -->
<!-- <script src="../../bootstrap-4.3.1/js/bootstrap.min.js"></script> -->
<script>
function user_lastname_edit(){
    var edit_lastname = document.getElementById("user_lastname_edit");
    var update_lastname_btn = document.getElementById("user_lastname_update_btn");
    var user_lastname_settings = document.getElementById("lastname");

    update_lastname_btn.style.display = "block";
    edit_lastname.style.display = "none";
    user_lastname_settings.disabled = false;
    user_lastname_settings.classList.remove("disabled");

}

function user_firstname_edit(){
    var edit_firstname = document.getElementById("user_firstname_edit");
    var update_firstname_btn = document.getElementById("user_firstname_update_btn");
    var user_firstname_settings = document.getElementById("firstname");

    update_firstname_btn.style.display = "block";
    edit_firstname.style.display = "none";
    user_firstname_settings.disabled = false;
    user_firstname_settings.classList.remove("disabled");

}

function user_middlename_edit(){
    var edit_middlename = document.getElementById("user_middlename_edit");
    var update_middlename_btn = document.getElementById("user_middlename_update_btn");
    var user_middlename_settings = document.getElementById("middlename");

    update_middlename_btn.style.display = "block";
    edit_middlename.style.display = "none";
    user_middlename_settings.disabled = false;
    user_middlename_settings.classList.remove("disabled");

}

function user_homeAddress_edit(){
    var edit_homeAddress = document.getElementById("user_homeAddress_edit");
    var update_homeAddress_btn = document.getElementById("user_homeAddress_update_btn");
    var user_homeAddress_settings = document.getElementById("homeAddress");

    update_homeAddress_btn.style.display = "block";
    edit_homeAddress.style.display = "none";
    user_homeAddress_settings.disabled = false;
    user_homeAddress_settings.classList.remove("disabled");

}

function user_gender_edit(){
    var edit_gender = document.getElementById("user_gender_edit");
    var update_gender_btn = document.getElementById("user_gender_update_btn");
    var user_gender_female_settings = document.getElementById("gender_male");
    var user_gender_male_settings = document.getElementById("gender_female");

    update_gender_btn.style.display = "block";
    edit_gender.style.display = "none";
    user_gender_male_settings.disabled = false;
    user_gender_male_settings.classList.remove("disabled");
    user_gender_female_settings.disabled = false;
    user_gender_female_settings.classList.remove("disabled");

}

function user_civil_edit(){
    var edit_civil = document.getElementById("user_civil_edit");
    var update_civil_btn = document.getElementById("user_civil_update_btn");
    var user_civil_single_settings = document.getElementById("civil_single");
    var user_civil_married_settings = document.getElementById("civil_married");

    update_civil_btn.style.display = "block";
    edit_civil.style.display = "none";
    user_civil_single_settings.disabled = false;
    user_civil_single_settings.classList.remove("disabled");
    user_civil_married_settings.disabled = false;
    user_civil_married_settings.classList.remove("disabled");

}

function user_employmentAddress_edit(){
    var edit_employmentAddress = document.getElementById("user_employmentAddress_edit");
    var update_employmentAddress_btn = document.getElementById("user_employmentAddress_update_btn");
    var user_employmentAddress_settings = document.getElementById("employmentAddress");

    update_employmentAddress_btn.style.display = "block";
    edit_employmentAddress.style.display = "none";
    user_employmentAddress_settings.disabled = false;
    user_employmentAddress_settings.classList.remove("disabled");

}

function user_currentWork_edit(){
    var edit_currentWork = document.getElementById("user_currentWork_edit");
    var update_currentWork_btn = document.getElementById("user_currentWork_update_btn");
    var user_currentWork_settings = document.getElementById("currentWork");

    update_currentWork_btn.style.display = "block";
    edit_currentWork.style.display = "none";
    user_currentWork_settings.disabled = false;
    user_currentWork_settings.classList.remove("disabled");

}

function user_currentPosition_edit(){
    var edit_currentPosition = document.getElementById("user_currentPosition_edit");
    var update_currentPosition_btn = document.getElementById("user_currentPosition_update_btn");
    var user_currentPosition_settings = document.getElementById("currentPosition");

    update_currentPosition_btn.style.display = "block";
    edit_currentPosition.style.display = "none";
    user_currentPosition_settings.disabled = false;
    user_currentPosition_settings.classList.remove("disabled");

}

function user_elementary_edit(){
    var edit_elementary = document.getElementById("user_elementary_edit");
    var update_elementary_btn = document.getElementById("user_elementary_update_btn");
    var user_elementary_settings = document.getElementById("elementary");

    update_elementary_btn.style.display = "block";
    edit_elementary.style.display = "none";
    user_elementary_settings.disabled = false;
    user_elementary_settings.classList.remove("disabled");

}

function user_elementaryYearGraduated_edit(){
    var edit_elementaryYearGraduated = document.getElementById("user_elementaryYearGraduated_edit");
    var update_elementaryYearGraduated_btn = document.getElementById("user_elementaryYearGraduated_update_btn");
    var user_elementaryYearGraduated_settings = document.getElementById("elementaryYearGraduated");

    update_elementaryYearGraduated_btn.style.display = "block";
    edit_elementaryYearGraduated.style.display = "none";
    user_elementaryYearGraduated_settings.disabled = false;
    user_elementaryYearGraduated_settings.classList.remove("disabled");

}

function user_highSchool_edit(){
    var edit_highSchool = document.getElementById("user_highSchool_edit");
    var update_highSchool_btn = document.getElementById("user_highSchool_update_btn");
    var user_highSchool_settings = document.getElementById("highSchool");

    update_highSchool_btn.style.display = "block";
    edit_highSchool.style.display = "none";
    user_highSchool_settings.disabled = false;
    user_highSchool_settings.classList.remove("disabled");

}

function user_highSchoolYearGraduated_edit(){
    var edit_highSchoolYearGraduated = document.getElementById("user_highSchoolYearGraduated_edit");
    var update_highSchoolYearGraduated_btn = document.getElementById("user_highSchoolYearGraduated_update_btn");
    var user_highSchoolYearGraduated_settings = document.getElementById("highSchoolYearGraduated");

    update_highSchoolYearGraduated_btn.style.display = "block";
    edit_highSchoolYearGraduated.style.display = "none";
    user_highSchoolYearGraduated_settings.disabled = false;
    user_highSchoolYearGraduated_settings.classList.remove("disabled");

}

function user_college_edit(){
    var edit_college = document.getElementById("user_college_edit");
    var update_college_btn = document.getElementById("user_college_update_btn");
    var user_college_settings = document.getElementById("college");

    update_college_btn.style.display = "block";
    edit_college.style.display = "none";
    user_college_settings.disabled = false;
    user_college_settings.classList.remove("disabled");

}

function user_collegeYearGraduated_edit(){
    var edit_collegeYearGraduated = document.getElementById("user_collegeYearGraduated_edit");
    var update_collegeYearGraduated_btn = document.getElementById("user_collegeYearGraduated_update_btn");
    var user_collegeYearGraduated_settings = document.getElementById("collegeYearGraduated");

    update_collegeYearGraduated_btn.style.display = "block";
    edit_collegeYearGraduated.style.display = "none";
    user_collegeYearGraduated_settings.disabled = false;
    user_collegeYearGraduated_settings.classList.remove("disabled");

}

function user_collegeDegree_edit(){
    var edit_collegeDegree = document.getElementById("user_collegeDegree_edit");
    var update_collegeDegree_btn = document.getElementById("user_collegeDegree_update_btn");
    var user_collegeDegree_settings = document.getElementById("collegeDegree");

    update_collegeDegree_btn.style.display = "block";
    edit_collegeDegree.style.display = "none";
    user_collegeDegree_settings.disabled = false;
    user_collegeDegree_settings.classList.remove("disabled");

}

function user_graduate_edit(){
    var edit_graduate = document.getElementById("user_graduate_edit");
    var update_graduate_btn = document.getElementById("user_graduate_update_btn");
    var user_graduate_settings = document.getElementById("graduate");

    update_graduate_btn.style.display = "block";
    edit_graduate.style.display = "none";
    user_graduate_settings.disabled = false;
    user_graduate_settings.classList.remove("disabled");

}

function user_graduateYearGraduated_edit(){
    var edit_graduateYearGraduated = document.getElementById("user_graduateYearGraduated_edit");
    var update_graduateYearGraduated_btn = document.getElementById("user_graduateYearGraduated_update_btn");
    var user_graduateYearGraduated_settings = document.getElementById("graduateYearGraduated");

    update_graduateYearGraduated_btn.style.display = "block";
    edit_graduateYearGraduated.style.display = "none";
    user_graduateYearGraduated_settings.disabled = false;
    user_graduateYearGraduated_settings.classList.remove("disabled");

}

function user_graduateDegree_edit(){
    var edit_graduateDegree = document.getElementById("user_graduateDegree_edit");
    var update_graduateDegree_btn = document.getElementById("user_graduateDegree_update_btn");
    var user_graduateDegree_settings = document.getElementById("graduateDegree");

    update_graduateDegree_btn.style.display = "block";
    edit_graduateDegree.style.display = "none";
    user_graduateDegree_settings.disabled = false;
    user_graduateDegree_settings.classList.remove("disabled");

}

function user_officeTelephoneNo_edit(){
    var edit_officeTelephoneNo = document.getElementById("user_officeTelephoneNo_edit");
    var update_officeTelephoneNo_btn = document.getElementById("user_officeTelephoneNo_update_btn");
    var user_officeTelephoneNo_settings = document.getElementById("telNo");

    update_officeTelephoneNo_btn.style.display = "block";
    edit_officeTelephoneNo.style.display = "none";
    user_officeTelephoneNo_settings.disabled = false;
    user_officeTelephoneNo_settings.classList.remove("disabled");

}

function user_cellphoneNo_edit(){
    var edit_cellphoneNo = document.getElementById("user_cellphoneNo_edit");
    var update_cellphoneNo_btn = document.getElementById("user_cellphoneNo_update_btn");
    var user_cellphoneNo_settings = document.getElementById("celNo");

    update_cellphoneNo_btn.style.display = "block";
    edit_cellphoneNo.style.display = "none";
    user_cellphoneNo_settings.disabled = false;
    user_cellphoneNo_settings.classList.remove("disabled");

}

function user_alumniChapterMembership_edit(){
    var edit_alumniChapterMembership = document.getElementById("user_alumniChapterMembership_edit");
    var update_alumniChapterMembership_btn = document.getElementById("user_alumniChapterMembership_update_btn");
    var user_alumniChapterMembership_settings = document.getElementById("alumniMembership");

    update_alumniChapterMembership_btn.style.display = "block";
    edit_alumniChapterMembership.style.display = "none";
    user_alumniChapterMembership_settings.disabled = false;
    user_alumniChapterMembership_settings.classList.remove("disabled");

}

function user_email_edit(){
    var edit_email = document.getElementById("user_email_edit");
    var update_email_btn = document.getElementById("user_email_update_btn");
    var user_email_settings = document.getElementById("emailAddress");

    update_email_btn.style.display = "block";
    edit_email.style.display = "none";
    user_email_settings.disabled = false;
    user_email_settings.classList.remove("disabled");

}

function user_username_edit(){
    var edit_username = document.getElementById("user_username_edit");
    var update_username_btn = document.getElementById("user_username_update_btn");
    var user_username_settings = document.getElementById("userSign");

    update_username_btn.style.display = "block";
    edit_username.style.display = "none";
    user_username_settings.disabled = false;
    user_username_settings.classList.remove("disabled");

}

function user_regPassword_edit(){
    var edit_regPassword = document.getElementById("user_regPassword_edit");
    var update_regPassword_btn = document.getElementById("user_regPassword_update_btn");
    var user_regPassword_settings = document.getElementById("regPassword");

    update_regPassword_btn.style.display = "block";
    edit_regPassword.style.display = "none";
    user_regPassword_settings.disabled = false;
    user_regPassword_settings.classList.remove("disabled");

}

function check_password(){
    var db_pass = document.getElementById("db_pass");
    var compare_pass = document.getElementById("regPassword");
    // var pass_input = document.getElementById("regPassword");
    var oldpass_btn = document.getElementById("user_regPassword_update_btn");
    var newpass_input = document.getElementById("newPassword");
    var newpass_btn = document.getElementById("user_newPassword_update_btn");


if(compare_pass.value == db_pass.value){

    compare_pass.disabled = true;
    oldpass_btn.disabled = true;
    newpass_input.disabled = false;
    newpass_btn.disabled = false;

}else{
    alert("Invalid details!");
}

}

</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php
include("../bins/shared/footer.php");
?>