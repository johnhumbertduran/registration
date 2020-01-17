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
$confirmPassword = "";

?>



<center>
<div class="register_form_container col">
    
<form method="POST">
    <!-- <table border="0" width="100%"> -->
    <?php
$err = $result = "";
if(isset($_POST["submits"])){
    
    if(empty($_POST["lastname"])){

    }else {
        $lastName = $_POST["lastname"];
    }

    if(empty($_POST["firstname"])){

    }else {
        $firstName = $_POST["firstname"];
    }

    if(empty($_POST["middlename"])){

    }else {
        $middleName = $_POST["middlename"];
    }

    if(empty($_POST["homeAddress"])){

    }else {
        $homeAddress = $_POST["homeAddress"];
    }

    if(empty($_POST["gender"])){

    }else {
        $gender = $_POST["gender"];
    }

    if(empty($_POST["civilStatus"])){

    }else {
        $civilStatus = $_POST["civilStatus"];
    }

    if(empty($_POST["employmentAddress"])){
        $employmentAddress = "none";
    }else {
        $employmentAddress = $_POST["employmentAddress"];
    }

    if(empty($_POST["currentWork"])){
        $currentWork = "none";
    }else {
        $currentWork = $_POST["currentWork"];
    }

    if(empty($_POST["currentPosition"])){
        $currentPosition = "none";
    }else {
        $currentPosition = $_POST["currentPosition"];
    }

    if(empty($_POST["elementary"])){
        // $elementary = "none";
    }else {
        $elementary = $_POST["elementary"];
    }

    if(empty($_POST["elementaryYearGraduated"])){
        // $elementaryYearGraduated = "none";
    }else {
        $elementaryYearGraduated = $_POST["elementaryYearGraduated"];
    }

    if(empty($_POST["highSchool"])){
        // $highSchool = "none";
    }else {
        $highSchool = $_POST["highSchool"];
    }

    if(empty($_POST["highSchoolYearGraduated"])){
        // $highSchoolYearGraduated = "none";
    }else {
        $highSchoolYearGraduated = $_POST["highSchoolYearGraduated"];
    }

    if(empty($_POST["college"])){
        $college = "none";
    }else {
        $college = $_POST["college"];
    }

    if(empty($_POST["collegeYearGraduated"])){
        $collegeYearGraduated = "none";
    }else {
        $collegeYearGraduated = $_POST["collegeYearGraduated"];
    }

    if(empty($_POST["collegeDegree"])){
        $collegeDegree = "none";
    }else {
        $collegeDegree = $_POST["collegeDegree"];
    }

    if(empty($_POST["graduate"])){
        $graduate = "none";
    }else {
        $graduate = $_POST["graduate"];
    }

    if(empty($_POST["graduateYearGraduated"])){
        $graduateYearGraduated = "none";
    }else {
        $graduateYearGraduated = $_POST["graduateYearGraduated"];
    }

    if(empty($_POST["graduateDegree"])){
        $graduateDegree = "none";
    }else {
        $graduateDegree = $_POST["graduateDegree"];
    }

    if(empty($_POST["telNo"])){

    }else {
        $officeTelephoneNo = $_POST["telNo"];
    }

    if(empty($_POST["celNo"])){

    }else {
        $cellphoneNo = $_POST["celNo"];
    }

    if(empty($_POST["alumniMembership"])){
        $alumniChapterMembership = "none";
    }else {
        $alumniChapterMembership = $_POST["alumniMembership"];
    }

    if(empty($_POST["emailAddress"])){

    }else {
        $email = $_POST["emailAddress"];
    }

    if(empty($_POST["userM"])){

    }else {
        $username = $_POST["userM"];
        $sesUse = $username;
    }

    if(empty($_POST["regPassword"])){

    }else {
        $regPassword = $_POST["regPassword"];
    }

    if(empty($_POST["confirmPassword"])){

    }else {
        $confirmPassword = $_POST["confirmPassword"];
    }


    if($lastName && $firstName && $middleName && $homeAddress && $gender && $civilStatus && $elementary && $elementaryYearGraduated && $highSchool && $highSchoolYearGraduated && $cellphoneNo && $email && $username && $regPassword && $confirmPassword){

        $checkCount = 0;

        if(!preg_match("/^[a-zA-Z. ]*$/", $lastName)){ 
            $err = "Last Name";
            $result = "should not have numbers or symbols.";
            include("private/bins/shared/warning.php");
            include("private/bins/shared/warningColorLastName.php");
            $checkCount += 1;
            
        }else{
            if($checkCount >= 1){
                $checkCount - 1;
            }
            include("private/bins/shared/removeWarningColorLastName.php");
        }

        if(!preg_match("/^[a-zA-Z. ]*$/", $firstName)){ 
            $err = "First Name";
            $result = "should not have numbers or symbols.";
            include("private/bins/shared/warning.php");
            include("private/bins/shared/warningColorFirstName.php");
            $checkCount += 1;
            
        }else{
            if($checkCount >= 1){
                $checkCount - 1;
            }
            include("private/bins/shared/removeWarningColorFirstName.php");
         }

        if(!preg_match("/^[a-zA-Z ]*$/", $middleName)){ 
            $err = "Middle Name";
            $result = "should not have numbers or symbols.";
            include("private/bins/shared/warning.php");
            include("private/bins/shared/warningColorMiddleName.php");
            $checkCount += 1;
            
        }else{
            if($checkCount >= 1){
                $checkCount - 1;
            }
            include("private/bins/shared/removeWarningColorMiddleName.php");
         }

         if(!preg_match("/^[0-9]*$/", $officeTelephoneNo)){ 
            $err = "Office Telephone Number";
            $result = "should contain numbers only.";
            include("private/bins/shared/warning.php");
            include("private/bins/shared/warningColorOfficeTelNo.php");
            $checkCount += 1;
            
        }else{
            if($checkCount >= 1){
                $checkCount - 1;
            }
            include("private/bins/shared/removeWarningColorOfficeTelNo.php");
         }

         if(!preg_match("/^[0-9]*$/", $cellphoneNo)){ 
            $err = "Cell Phone Number";
            $result = "should contain numbers only.";
            include("private/bins/shared/warning.php");
            include("private/bins/shared/warningColorCellNo.php");
            $checkCount += 1;
            
        }else{
            
            if($checkCount >= 1){
                $checkCount - 1;
            }
            include("private/bins/shared/removeWarningColorCellNo.php");
         }

         if(strlen($cellphoneNo) <= 10){
            $err = "Cell Phone Number";
            $result = "should not be less than 11 digits.";
            include("private/bins/shared/warning.php");
            include("private/bins/shared/warningColorCellNo.php");
            $checkCount += 1;

        }else{

            if($checkCount >= 1){
                $checkCount - 1;
            }
            include("private/bins/shared/removeWarningColorCellNo.php");

        }

         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $err = "Email Address";
            $result = "should contain proper format with '@' symbol and '.com'";
            include("private/bins/shared/warning.php");
            include("private/bins/shared/warningColorEmail.php");
         }else{
            include("private/bins/shared/removeWarningColorEmail.php");
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

                        $_SESSION["useM"] = $sesUse;
                        

                        $a = md5(rand(1,9));
                        $b = md5(rand(1,9));
                        $c = md5(rand(1,9));
                        $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $o = substr(str_shuffle($permitted_chars), 0, 4);
                        $ab = md5(rand(1,5));
                        $t = rand(1,6);
                        
                        
                        echo"<script>window.location.href='private/user?$a&&$b&&$o' + '_' + '$ab=$t';</script>";
                        // header('Location: private/user');


                        // mysqli_query($connections, "INSERT INTO usrs (lastName,firstName,middleName,
                        // homeAddress,gender,civilStatus,employmentAddress,currentWork,
                        // currentPosition,elementary,elementaryYearGraduated,highSchool,
                        // highSchoolYearGraduated,college,collegeYearGraduated,collegeDegree,
                        // graduate,graduateYearGraduated,graduateDegree,officeTelephoneNo,
                        // cellphoneNo,alumniChapterMembership,email,usrname,pssword,account_type)
                        // VALUES ('$lastName','$firstName','$middleName',
                        // '$homeAddress','$gender','$civilStatus',
                        // '$employmentAddress','$currentWork','$currentPosition',
                        // '$elementary','$elementaryYearGraduated','$highSchool',
                        // '$highSchoolYearGraduated','$college','$collegeYearGraduated',
                        // '$collegeDegree','$graduate','$graduateYearGraduated',
                        // '$graduateDegree','$officeTelephoneNo','$cellphoneNo',
                        // '$alumniChapterMembership','$email','$username',
                        // '$confirmPassword','2')");
                        }
                    }
                }
            }
        }


    }
}

$edit_user_qry = mysqli_query($connections, "SELECT * FROM usrs WHERE usrname='$sesUse'");
$row_user_edits = mysqli_fetch_assoc($edit_user_qry);

$username = $row_user_edits["usrname"];
$lastName = $row_user_edits["lastName"];
$firstName = $row_user_edits["firstName"];
$middleName = $row_user_edits["middleName"];
$homeAddress = $row_user_edits["homeAddress"];
$db_password = $row_user_edits["pssword"];

?>
    <tr><th colspan="4"><center> <h1>Registration Form</h1> </center></th></tr>

    <tr><td colspan="4"><hr></td></tr>

    <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#nameandaddress">
         <strong> Name and Address </strong>
        </a>
      </div>
      <div id="nameandaddress" class="collapse show" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="lastname">Last Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $lastName; ?>" name="lastname" class="warningColor" id="lastname" placeholder="Last Name" autocomplete="off" required></td>
    <td colspan="4"><a href="#" class="btn btn-primary" id="admin_user_edit" onclick="user_edit()">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a><input class="btn btn-primary" id="admin_user_update_btn" type="submit" name="user_update" value="Update"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="firstname">First Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $firstName; ?>" name="firstname" class="err" id="firstname" placeholder="First Name" autocomplete="off" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="middlename">Middle Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $middleName; ?>" name="middlename" class="err" id="middlename" placeholder="Middle Name" autocomplete="off" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="homeAddress">Home Address:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $homeAddress; ?>" name="homeAddress" id="homeAddress" placeholder="Home Address" autocomplete="off" required></td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#gender_collapsible">
        <strong> Gender </strong>
      </a>
      </div>
      <div id="gender_collapsible" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="gender">Sex:</label></b></td>
    <td>&nbsp;<input type="radio" name="gender" value="male" <?php if($gender == "male") {echo "checked";} ?> id="gender" required>Male <br> &nbsp;<input type="radio" name="gender" value="female" <?php if($gender == "female") {echo "checked";} ?> required>Female</td>
    
    <td class="label"><b><label for="civilStatus">Civil Status:</label></b></td>
    <td>&nbsp;<input type="radio" name="civilStatus" value="single" <?php if($civilStatus == "single") {echo "checked";} ?> id="civilStatus" required>Single <br> &nbsp;<input type="radio" name="civilStatus" value="married" <?php if($civilStatus == "married") {echo "checked";} ?> required>Married</td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#workdetails">
        <strong> Work Details </strong>
        </a>
      </div>
      <div id="workdetails" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="employmentAddress">Employment Address:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $employmentAddress; ?>" name="employmentAddress" id="employmentAddress" autocomplete="off" placeholder="Employment Address"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="currentWork">Current Work:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $currentWork; ?>" name="currentWork" id="currentWork" autocomplete="off" placeholder="Current Work"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="currentPosition">Current Position:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $currentPosition; ?>" name="currentPosition" id="currentPosition" autocomplete="off" placeholder="Current Position"></td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#elementary">
        <strong> Elementary School </strong>
        </a>
      </div>
      <div id="elementary" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="elementary">Elementary:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $elementary; ?>" name="elementary" id="elementary" autocomplete="off" placeholder="Elementary" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="elementaryYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $elementaryYearGraduated; ?>" name="elementaryYearGraduated" autocomplete="off" id="elementaryYearGraduated" placeholder="Year Graduated" required></td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#highschool">
        <strong> High School </strong>
        </a>
      </div>
      <div id="highschool" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="highSchool">High School:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $highSchool; ?>" name="highSchool" id="highSchool" autocomplete="off" placeholder="High School" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="highSchoolYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $highSchoolYearGraduated; ?>" name="highSchoolYearGraduated" id="highSchoolYearGraduated" autocomplete="off" placeholder="Year Graduated" required></td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#college">
        <strong> College </strong>
        </a>
      </div>
      <div id="college" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="college">College:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $college; ?>" name="college" id="college" autocomplete="off" placeholder="College"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="collegeYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $collegeYearGraduated; ?>" name="collegeYearGraduated" id="collegeYearGraduated" autocomplete="off" placeholder="Year Graduated"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="collegeDegree">Degree:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $collegeDegree; ?>" name="collegeDegree" id="collegeDegree" autocomplete="off" placeholder="Degree"></td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#graduateschool">
        <strong> Graduate School </strong>
        </a>
      </div>
      <div id="graduateschool" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="graduate">Graduate:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $graduate; ?>" name="graduate" id="graduate" autocomplete="off" placeholder="Graduate"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="graduateYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $graduateYearGraduated; ?>" name="graduateYearGraduated" id="graduateYearGraduated" autocomplete="off" placeholder="Year Graduated"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="graduateDegree">Degree:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $graduateDegree; ?>" name="graduateDegree" id="graduateDegree" autocomplete="off" placeholder="Degree"></td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#contact_number_and_membership">
        <strong> Contact Number and Membership </strong>
        </a>
      </div>
      <div id="contact_number_and_membership" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="telNo">Office Telephone No. :</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text"maxlength="14" onkeypress='return isNumberKey(event)' value="<?php echo $officeTelephoneNo; ?>" name="telNo" id="telNo" autocomplete="off" placeholder="Office Telephone No."></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="celNo">Mobile/Cell Phone No. :</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" maxlength="13" onkeypress='return isNumberKey(event)' value="<?php echo $cellphoneNo; ?>" name="celNo" id="celNo" autocomplete="off" placeholder="Mobile/Cell Phone No." required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="alumniMembership">Alumni Chapter Membership:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $alumniChapterMembership; ?>" name="alumniMembership" id="alumniMembership" autocomplete="off" placeholder="Alumni Chapter Membership"></td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseNine">
        <strong> Email, Username and Password </strong>
        </a>
      </div>
      <div id="collapseNine" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div class="form-group">
    <table border="0" width="100%">
    <tr>
    <td class="label"><b><label for="emailAddress">Email Address:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="email" value="<?php echo $email; ?>" name="emailAddress" id="emailAddress" autocomplete="off" placeholder="Email Address" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="userSign">User Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $username; ?>" name="userM" id="userSign" autocomplete="off" placeholder="User Name" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="regPassword">Password:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="password" value="<?php echo $regPassword; ?>" name="regPassword" id="regPassword" autocomplete="off" placeholder="Password" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="confirmPassword">Confirm Password:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="password" value="<?php echo $confirmPassword; ?>" name="confirmPassword" id="confirmPassword" autocomplete="off" placeholder="Confirm Password" required></td>
    </tr>
    </div>
    </table>
        </div>
      </div>
    </div>
    <!-- collapsible end div tag -->
  </div>

    <tr><td colspan="4"><hr></td></tr>
    
    <tr>
        <td colspan="4"><input style="float:right;" class="btn btn-success" type="submit" name="submit" value="Submit"></td>
    </tr>

<!-- </table> -->
</form>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> <!-- Bootstrap4 for CDN (Content Delivery Network) -->
<!-- <script src="bootstrap-4.3.1/js/bootstrap.min.js"></script> --> <!-- Bootstrap4 for offline -->

<?php
include("../bins/shared/footer.php");
?>