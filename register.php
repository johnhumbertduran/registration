<?php

include("private/bins/shared/header.php");
include("private/bins/shared/connections.php");
include("private/bins/shared/slides.php");
include("private/bins/shared/login_nav.php");


    class User{

        public $lastName = "";
        public $firstName = "";
        public $middleName = "";
        public $homeAddress = "";
        public $gender = "";
        public $civilStatus = "";
        public $employmentAddress = "";
        public $currentWork = "";
        public $currentPosition = "";
        public $elementary = "";
        public $elementaryYearGraduated = "";
        public $highSchool = "";
        public $highSchoolYearGraduated = "";
        public $college = "";
        public $collegeYearGraduated = "";
        public $collegeDegree = "";
        public $graduate = "";
        public $graduateYearGraduated = "";
        public $graduateDegree = "";
        public $officeTelephoneNo = "";
        public $cellphoneNo = "";
        public $alumniChapterMembership = "";
        public $email = "";
        public $username = "";
        public $regPassword = "";
        public $confirmPassword = "";
    
     } 

     $user = new User();



?>

<script>
    document.getElementById("register").classList.add("active_nav");
    document.title += " / Register";
</script>



<br>

<br>

<center>
<div class="register_form_container col">
    
<form method="POST">
    <table border="0" width="100%">
    <?php
$err = $result = "";
if(isset($_POST["submit"])){
    
    if(empty($_POST["lastname"])){

    }else {
        $user->lastName = $_POST["lastname"];
    }

    if(empty($_POST["firstname"])){

    }else {
        $user->firstName = $_POST["firstname"];
    }

    if(empty($_POST["middlename"])){

    }else {
        $user->middleName = $_POST["middlename"];
    }

    if(empty($_POST["homeAddress"])){

    }else {
        $user->homeAddress = $_POST["homeAddress"];
    }

    if(empty($_POST["gender"])){

    }else {
        $user->gender = $_POST["gender"];
    }

    if(empty($_POST["civilStatus"])){

    }else {
        $user->civilStatus = $_POST["civilStatus"];
    }

    if(empty($_POST["employmentAddress"])){
        $user->employmentAddress = "none";
    }else {
        $user->employmentAddress = $_POST["employmentAddress"];
    }

    if(empty($_POST["currentWork"])){
        $user->currentWork = "none";
    }else {
        $user->currentWork = $_POST["currentWork"];
    }

    if(empty($_POST["currentPosition"])){
        $user->currentPosition = "none";
    }else {
        $user->currentPosition = $_POST["currentPosition"];
    }

    if(empty($_POST["elementary"])){
        // $user->elementary = "none";
    }else {
        $user->elementary = $_POST["elementary"];
    }

    if(empty($_POST["elementaryYearGraduated"])){
        // $user->elementaryYearGraduated = "none";
    }else {
        $user->elementaryYearGraduated = $_POST["elementaryYearGraduated"];
    }

    if(empty($_POST["highSchool"])){
        // $user->highSchool = "none";
    }else {
        $user->highSchool = $_POST["highSchool"];
    }

    if(empty($_POST["highSchoolYearGraduated"])){
        // $user->highSchoolYearGraduated = "none";
    }else {
        $user->highSchoolYearGraduated = $_POST["highSchoolYearGraduated"];
    }

    if(empty($_POST["college"])){
        $user->college = "none";
    }else {
        $user->college = $_POST["college"];
    }

    if(empty($_POST["collegeYearGraduated"])){
        $user->collegeYearGraduated = "none";
    }else {
        $user->collegeYearGraduated = $_POST["collegeYearGraduated"];
    }

    if(empty($_POST["collegeDegree"])){
        $user->collegeDegree = "none";
    }else {
        $user->collegeDegree = $_POST["collegeDegree"];
    }

    if(empty($_POST["graduate"])){
        $user->graduate = "none";
    }else {
        $user->graduate = $_POST["graduate"];
    }

    if(empty($_POST["graduateYearGraduated"])){
        $user->graduateYearGraduated = "none";
    }else {
        $user->graduateYearGraduated = $_POST["graduateYearGraduated"];
    }

    if(empty($_POST["graduateDegree"])){
        $user->graduateDegree = "none";
    }else {
        $user->graduateDegree = $_POST["graduateDegree"];
    }

    if(empty($_POST["telNo"])){

    }else {
        $user->officeTelephoneNo = $_POST["telNo"];
    }

    if(empty($_POST["celNo"])){

    }else {
        $user->cellphoneNo = $_POST["celNo"];
    }

    if(empty($_POST["alumniMembership"])){
        $user->alumniChapterMembership = "none";
    }else {
        $user->alumniChapterMembership = $_POST["alumniMembership"];
    }

    if(empty($_POST["emailAddress"])){

    }else {
        $user->email = $_POST["emailAddress"];
    }

    if(empty($_POST["userM"])){

    }else {
        $user->username = $_POST["userM"];
        $sesUse = $user->username;
    }

    if(empty($_POST["regPassword"])){

    }else {
        $user->regPassword = $_POST["regPassword"];
    }

    if(empty($_POST["confirmPassword"])){

    }else {
        $user->confirmPassword = $_POST["confirmPassword"];
    }


    if($user->lastName && $user->firstName && $user->middleName && $user->homeAddress && $user->gender && $user->civilStatus && $user->elementary && $user->elementaryYearGraduated && $user->highSchool && $user->highSchoolYearGraduated && $user->cellphoneNo && $user->email && $user->username && $user->regPassword && $user->confirmPassword){

        $checkCount = 0;

        if(!preg_match("/^[a-zA-Z. ]*$/", $user->lastName)){ 
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

        if(!preg_match("/^[a-zA-Z. ]*$/", $user->firstName)){ 
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

        if(!preg_match("/^[a-zA-Z ]*$/", $user->middleName)){ 
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

         if(!preg_match("/^[0-9]*$/", $user->officeTelephoneNo)){ 
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

         if(!preg_match("/^[0-9]*$/", $user->cellphoneNo)){ 
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

         if(strlen($user->cellphoneNo) <= 10){
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

         if(!filter_var($user->email, FILTER_VALIDATE_EMAIL)){
            $err = "Email Address";
            $result = "should contain proper format with '@' symbol and '.com'";
            include("private/bins/shared/warning.php");
            include("private/bins/shared/warningColorEmail.php");
         }else{
            include("private/bins/shared/removeWarningColorEmail.php");
            if(strlen($user->username) <= 8){
                $err = "User Name";
                $result = "should have at least combinations of 9 alpha numeric symbols.";
                include("private/bins/shared/warning.php");
                include("private/bins/shared/warningColorUserName.php");
            }else{
                include("private/bins/shared/removeWarningColorUserName.php");
                if(strlen($user->regPassword) <= 8){
                    $err = "Password";
                    $result = "should have at least combinations of 9 alpha numeric symbols.";
                    include("private/bins/shared/warning.php");
                    include("private/bins/shared/warningColorRegPassword.php");
                }else{
                    include("private/bins/shared/removeWarningColorRegPassword.php");
                    if($user->confirmPassword != $user->regPassword){
                        $err = "Confirm Password";
                        $result = "should match to the password you typed.";
                        include("private/bins/shared/warning.php");
                        include("private/bins/shared/warningColorConfirmPassword.php");
                    }else{

                        if($checkCount >= 1){
                           
                        }else{

                        $_SESSION["useM"] = $sesUse;
                        include("private/bins/shared/removeWarningColorConfirmPassword.php");
                        $query = "INSERT INTO usrs (lastName,firstName,middleName,
                        homeAddress,gender,civilStatus,employmentAddress,currentWork,
                        currentPosition,elementary,elementaryYearGraduated,highSchool,
                        highSchoolYearGraduated,college,collegeYearGraduated,collegeDegree,
                        graduate,graduateYearGraduated,graduateDegree,officeTelephoneNo,
                        cellphoneNo,alumniChapterMembership,email,usrname,pssword,account_type)
                        VALUES ('$user->lastName','$user->firstName','$user->middleName',
                        '$user->homeAddress','$user->gender','$user->civilStatus',
                        '$user->employmentAddress','$user->currentWork','$user->currentPosition',
                        '$user->elementary','$user->elementaryYearGraduated','$user->highSchool',
                        '$user->highSchoolYearGraduated','$user->college','$user->collegeYearGraduated',
                        '$user->collegeDegree','$user->graduate','$user->graduateYearGraduated',
                        '$user->graduateDegree','$user->officeTelephoneNo','$user->cellphoneNo',
                        '$user->alumniChapterMembership','$user->email','$user->username',
                        '$user->confirmPassword','2')";
                        $stmt= $db->prepare($query);
                        $stmt->execute([$user->lastName,$user->firstName,$user->middleName,
                        $user->homeAddress,$user->gender,$user->civilStatus,
                        $user->employmentAddress,$user->currentWork,$user->currentPosition,
                        $user->elementary,$user->elementaryYearGraduated,$user->highSchool,
                        $user->highSchoolYearGraduated,$user->college,$user->collegeYearGraduated,
                        $user->collegeDegree,$user->graduate,$user->graduateYearGraduated,
                        $user->graduateDegree,$user->officeTelephoneNo,$user->cellphoneNo,
                        $user->alumniChapterMembership,$user->email,$user->username,
                        $user->confirmPassword,'2']);

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
                        // VALUES ('$user->lastName','$user->firstName','$user->middleName',
                        // '$user->homeAddress','$user->gender','$user->civilStatus',
                        // '$user->employmentAddress','$user->currentWork','$user->currentPosition',
                        // '$user->elementary','$user->elementaryYearGraduated','$user->highSchool',
                        // '$user->highSchoolYearGraduated','$user->college','$user->collegeYearGraduated',
                        // '$user->collegeDegree','$user->graduate','$user->graduateYearGraduated',
                        // '$user->graduateDegree','$user->officeTelephoneNo','$user->cellphoneNo',
                        // '$user->alumniChapterMembership','$user->email','$user->username',
                        // '$user->confirmPassword','2')");
                        }
                    }
                }
            }
        }


    }
}


?>
    <tr><th colspan="4"><center> <h1>Registration Form</h1> </center></th></tr>

    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="lastname">Last Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->lastName; ?>" name="lastname" class="warningColor" id="lastname" placeholder="Last Name" autocomplete="off" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="firstname">First Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->firstName; ?>" name="firstname" class="err" id="firstname" placeholder="First Name" autocomplete="off" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="middlename">Middle Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->middleName; ?>" name="middlename" class="err" id="middlename" placeholder="Middle Name" autocomplete="off" required></td>
    </tr>
    </div>

    <div class="form-group">
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="homeAddress">Home Address:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->homeAddress; ?>" name="homeAddress" id="homeAddress" placeholder="Home Address" autocomplete="off" required></td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="gender">Sex:</label></b></td>
    <td>&nbsp;<input type="radio" name="gender" value="male" <?php if($user->gender == "male") {echo "checked";} ?> id="gender" required>Male <br> &nbsp;<input type="radio" name="gender" value="female" <?php if($user->gender == "female") {echo "checked";} ?> required>Female</td>
    
    <td class="label"><b><label for="civilStatus">Civil Status:</label></b></td>
    <td>&nbsp;<input type="radio" name="civilStatus" value="single" <?php if($user->civilStatus == "single") {echo "checked";} ?> id="civilStatus" required>Single <br> &nbsp;<input type="radio" name="civilStatus" value="married" <?php if($user->civilStatus == "married") {echo "checked";} ?> required>Married</td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="employmentAddress">Employment Address:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->employmentAddress; ?>" name="employmentAddress" id="employmentAddress" autocomplete="off" placeholder="Employment Address"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="currentWork">Current Work:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->currentWork; ?>" name="currentWork" id="currentWork" autocomplete="off" placeholder="Current Work"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="currentPosition">Current Position:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->currentPosition; ?>" name="currentPosition" id="currentPosition" autocomplete="off" placeholder="Current Position"></td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="elementary">Elementary:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->elementary; ?>" name="elementary" id="elementary" autocomplete="off" placeholder="Elementary" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="elementaryYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->elementaryYearGraduated; ?>" name="elementaryYearGraduated" autocomplete="off" id="elementaryYearGraduated" placeholder="Year Graduated" required></td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>
    
    <div class="form-group">
    <tr>
    <td class="label"><b><label for="highSchool">High School:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->highSchool; ?>" name="highSchool" id="highSchool" autocomplete="off" placeholder="High School" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="highSchoolYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->highSchoolYearGraduated; ?>" name="highSchoolYearGraduated" id="highSchoolYearGraduated" autocomplete="off" placeholder="Year Graduated" required></td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="college">College:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->college; ?>" name="college" id="college" autocomplete="off" placeholder="College"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="collegeYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->collegeYearGraduated; ?>" name="collegeYearGraduated" id="collegeYearGraduated" autocomplete="off" placeholder="Year Graduated"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="collegeDegree">Degree:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->collegeDegree; ?>" name="collegeDegree" id="collegeDegree" autocomplete="off" placeholder="Degree"></td>
    </tr>
    </div>
    
    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="graduate">Graduate:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->graduate; ?>" name="graduate" id="graduate" autocomplete="off" placeholder="Graduate"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="graduateYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->graduateYearGraduated; ?>" name="graduateYearGraduated" id="graduateYearGraduated" autocomplete="off" placeholder="Year Graduated"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="graduateDegree">Degree:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->graduateDegree; ?>" name="graduateDegree" id="graduateDegree" autocomplete="off" placeholder="Degree"></td>
    </tr>
    </div>
    
    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="telNo">Office Telephone No. :</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text"maxlength="14" onkeypress='return isNumberKey(event)' value="<?php echo $user->officeTelephoneNo; ?>" name="telNo" id="telNo" autocomplete="off" placeholder="Office Telephone No."></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="celNo">Mobile/Cell Phone No. :</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" maxlength="13" onkeypress='return isNumberKey(event)' value="<?php echo $user->cellphoneNo; ?>" name="celNo" id="celNo" autocomplete="off" placeholder="Mobile/Cell Phone No." required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="alumniMembership">Alumni Chapter Membership:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->alumniChapterMembership; ?>" name="alumniMembership" id="alumniMembership" autocomplete="off" placeholder="Alumni Chapter Membership"></td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="emailAddress">Email Address:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="email" value="<?php echo $user->email; ?>" name="emailAddress" id="emailAddress" autocomplete="off" placeholder="Email Address" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="userSign">User Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->username; ?>" name="userM" id="userSign" autocomplete="off" placeholder="User Name" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="regPassword">Password:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="password" value="<?php echo $user->regPassword; ?>" name="regPassword" id="regPassword" autocomplete="off" placeholder="Password" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="confirmPassword">Confirm Password:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="password" value="<?php echo $user->confirmPassword; ?>" name="confirmPassword" id="confirmPassword" autocomplete="off" placeholder="Confirm Password" required></td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>
    
    <tr>
        <td colspan="4"><input style="float:right;" class="btn btn-success" type="submit" name="submit" value="Submit"></td>
    </tr>

</table>
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
<?php

    include("private/bins/shared/footer.php");

?>