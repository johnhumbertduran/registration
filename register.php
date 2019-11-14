<?php

    require_once('private/bins/initialize.php');

    include(SHARED_PATH . '/header.php');
    include(SHARED_PATH . '/connections.php');
    include(SHARED_PATH . '/slides.php');
    include(SHARED_PATH . '/login_nav.php');

    // if(isset($_SESSION["userM"])){

    //     $useNam = $_SESSION["userM"];
    //     $qry_account_type = mysqli_query($connections, "SELECT * FROM usrs WHERE usrname='$useNam'");
    //     $get_account_type = mysqli_fetch_assoc($qry_account_type);
    //     $account_type = $get_account_type["uAccountType"];
        
    //     if($account_type == 1){
        
    //         echo"<script>window.location.href='m_a';</script>";
        
    //     }elseif($account_type == 2){
        
    //         echo "<script>window.location.href='a';</script>";
        
    //     }elseif($account_type == 3){
        
    //         echo "<script>window.location.href='us';</script>";
        
    //     }
    
    // }

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
        $user->employmentAddress = "N/A";
    }else {
        $user->employmentAddress = $_POST["employmentAddress"];
    }

    if(empty($_POST["currentWork"])){
        $user->currentWork = "N/A";
    }else {
        $user->currentWork = $_POST["currentWork"];
    }

    if(empty($_POST["currentPosition"])){
        $user->currentPosition = "N/A";
    }else {
        $user->currentPosition = $_POST["currentPosition"];
    }

    if(empty($_POST["elementary"])){
        // $user->elementary = "N/A";
    }else {
        $user->elementary = $_POST["elementary"];
    }

    if(empty($_POST["elementaryYearGraduated"])){
        // $user->elementaryYearGraduated = "N/A";
    }else {
        $user->elementaryYearGraduated = $_POST["elementaryYearGraduated"];
    }

    if(empty($_POST["highSchool"])){
        // $user->highSchool = "N/A";
    }else {
        $user->highSchool = $_POST["highSchool"];
    }

    if(empty($_POST["highSchoolYearGraduated"])){
        // $user->highSchoolYearGraduated = "N/A";
    }else {
        $user->highSchoolYearGraduated = $_POST["highSchoolYearGraduated"];
    }

    if(empty($_POST["college"])){
        $user->college = "N/A";
    }else {
        $user->college = $_POST["college"];
    }

    if(empty($_POST["collegeYearGraduated"])){
        $user->collegeYearGraduated = "N/A";
    }else {
        $user->collegeYearGraduated = $_POST["collegeYearGraduated"];
    }

    if(empty($_POST["collegeDegree"])){
        $user->collegeDegree = "N/A";
    }else {
        $user->collegeDegree = $_POST["collegeDegree"];
    }

    if(empty($_POST["graduate"])){
        $user->graduate = "N/A";
    }else {
        $user->graduate = $_POST["graduate"];
    }

    if(empty($_POST["graduateYearGraduated"])){
        $user->graduateYearGraduated = "N/A";
    }else {
        $user->graduateYearGraduated = $_POST["graduateYearGraduated"];
    }

    if(empty($_POST["graduateDegree"])){
        $user->graduateDegree = "N/A";
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
        $user->alumniChapterMembership = "N/A";
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

        if(!preg_match("/^[a-zA-Z. ]*$/", $user->lastName)){ 
            $err = "Last Name";
            $result = "should not have numbers or symbols.";
            include(SHARED_PATH . '/warning.php');
            include(SHARED_PATH . '/warningColorLastName.php');
            
        }else{
            include(SHARED_PATH . '/removeWarningColorLastName.php');
        }

        if(!preg_match("/^[a-zA-Z. ]*$/", $user->firstName)){ 
            $err = "First Name";
            $result = "should not have numbers or symbols.";
            include(SHARED_PATH . '/warning.php');
            include(SHARED_PATH . '/warningColorFirstName.php');
         }else{
            include(SHARED_PATH . '/removeWarningColorFirstName.php');
         }

        if(!preg_match("/^[a-zA-Z ]*$/", $user->middleName)){ 
            $err = "Middle Name";
            $result = "should not have numbers or symbols.";
            include(SHARED_PATH . '/warning.php');
            include(SHARED_PATH . '/warningColorMiddleName.php');
        }else{
            include(SHARED_PATH . '/removeWarningColorMiddleName.php');
         }

         if(!filter_var($user->email, FILTER_VALIDATE_EMAIL)){
            $err = "Email Address";
            $result = "should contain proper format with '@' symbol and '.com'";
            include(SHARED_PATH . '/warning.php');
            include(SHARED_PATH . '/warningColorEmail.php');
         }else{
            include(SHARED_PATH . '/removeWarningColorEmail.php');
            if(strlen($user->username) <= 8){
                $err = "User Name";
                $result = "should have at least combinations of 9 alpha numeric symbols.";
                include(SHARED_PATH . '/warning.php');
                include(SHARED_PATH . '/warningColorUserName.php');
            }else{
                include(SHARED_PATH . '/removeWarningColorUserName.php');
                if(strlen($user->regPassword) <= 8){
                    $err = "Password";
                    $result = "should have at least combinations of 9 alpha numeric symbols.";
                    include(SHARED_PATH . '/warning.php');
                    include(SHARED_PATH . '/warningColorRegPassword.php');
                }else{
                    include(SHARED_PATH . '/removeWarningColorRegPassword.php');
                    if($user->confirmPassword != $user->regPassword){
                        $err = "Confirm Password";
                        $result = "should match to the password you typed.";
                        include(SHARED_PATH . '/warning.php');
                        include(SHARED_PATH . '/warningColorConfirmPassword.php');
                    }else{
                        include(SHARED_PATH . '/removeWarningColorConfirmPassword.php');
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
                        $ab = md5(rand(a,b));
                        $t = rand(1,6);

                        header('Location: ?=Success!'.$a.'&&ready_'.$t.'='.$ab.'&&redir_'.$t.'='.$b.$c);

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


?>
    <tr><th colspan="4"><center> <h1>Registration Form</h1> </center></th></tr>

    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="lastname">Last Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->lastName; ?>" name="lastname" class="warningColor" id="lastname" placeholder="Last Name" autocomplete="false" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="firstname">First Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->firstName; ?>" name="firstname" class="err" id="firstname" placeholder="First Name" autocomplete="false" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="middlename">Middle Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->middleName; ?>" name="middlename" class="err" id="middlename" placeholder="Middle Name" autocomplete="false" required></td>
    </tr>
    </div>

    <div class="form-group">
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="homeAddress">Home Address:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->homeAddress; ?>" name="homeAddress" id="homeAddress" placeholder="Home Address" autocomplete="false" required></td>
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
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->employmentAddress; ?>" name="employmentAddress" id="employmentAddress" autocomplete="false" placeholder="Employment Address"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="currentWork">Current Work:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->currentWork; ?>" name="currentWork" id="currentWork" autocomplete="false" placeholder="Current Work"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="currentPosition">Current Position:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->currentPosition; ?>" name="currentPosition" id="currentPosition" autocomplete="false" placeholder="Current Position"></td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="elementary">Elementary:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->elementary; ?>" name="elementary" id="elementary" autocomplete="false" placeholder="Elementary" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="elementaryYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->elementaryYearGraduated; ?>" name="elementaryYearGraduated" autocomplete="false" id="elementaryYearGraduated" placeholder="Year Graduated" required></td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>
    
    <div class="form-group">
    <tr>
    <td class="label"><b><label for="highSchool">High School:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->highSchool; ?>" name="highSchool" id="highSchool" autocomplete="false" placeholder="High School" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="highSchoolYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->highSchoolYearGraduated; ?>" name="highSchoolYearGraduated" id="highSchoolYearGraduated" autocomplete="false" placeholder="Year Graduated" required></td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="college">College:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->college; ?>" name="college" id="college" autocomplete="false" placeholder="College"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="collegeYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->collegeYearGraduated; ?>" name="collegeYearGraduated" id="collegeYearGraduated" autocomplete="false" placeholder="Year Graduated"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="collegeDegree">Degree:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->collegeDegree; ?>" name="collegeDegree" id="collegeDegree" autocomplete="false" placeholder="Degree"></td>
    </tr>
    </div>
    
    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="graduate">Graduate:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->graduate; ?>" name="graduate" id="graduate" autocomplete="false" placeholder="Graduate"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="graduateYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->graduateYearGraduated; ?>" name="graduateYearGraduated" id="graduateYearGraduated" autocomplete="false" placeholder="Year Graduated"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="graduateDegree">Degree:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->graduateDegree; ?>" name="graduateDegree" id="graduateDegree" autocomplete="false" placeholder="Degree"></td>
    </tr>
    </div>
    
    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="telNo">Office Telephone No. :</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text"maxlength="14" onkeypress='return isNumberKey(event)' value="<?php echo $user->officeTelephoneNo; ?>" name="telNo" id="telNo" autocomplete="false" placeholder="Office Telephone No."></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="celNo">Mobile/Cell Phone No. :</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" maxlength="13" onkeypress='return isNumberKey(event)' value="<?php echo $user->cellphoneNo; ?>" name="celNo" id="celNo" autocomplete="false" placeholder="Mobile/Cell Phone No." required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="alumniMembership">Alumni Chapter Membership:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->alumniChapterMembership; ?>" name="alumniMembership" id="alumniMembership" autocomplete="false" placeholder="Alumni Chapter Membership"></td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="emailAddress">Email Address:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="email" value="<?php echo $user->email; ?>" name="emailAddress" id="emailAddress" autocomplete="false" placeholder="Email Address" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="userSign">User Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->username; ?>" name="userM" id="userSign" autocomplete="false" placeholder="User Name" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="regPassword">Password:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->regPassword; ?>" name="regPassword" id="regPassword" autocomplete="false" placeholder="Password" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="confirmPassword">Confirm Password:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->confirmPassword; ?>" name="confirmPassword" id="confirmPassword" autocomplete="false" placeholder="Confirm Password" required></td>
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

    include(SHARED_PATH . '/footer.php');

?>