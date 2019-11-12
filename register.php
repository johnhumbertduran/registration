<?php

    require_once('private/bins/initialize.php');

    include(SHARED_PATH . '/header.php');
    include(SHARED_PATH . '/connections.php');
    include(SHARED_PATH . '/slides.php');
    include(SHARED_PATH . '/login_nav.php');


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
        public $password = "";
        public $confirmPassword = "";
    
     } 

     $user = new User();



?>

<script>
    document.getElementById("register").classList.add("active_nav");
    document.title += " / Register";
</script>

<?php

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

            }else {
                $user->employmentAddress = $_POST["employmentAddress"];
            }

            if(empty($_POST["currentWork"])){

            }else {
                $user->currentWork = $_POST["currentWork"];
            }

            if(empty($_POST["currentPosition"])){

            }else {
                $user->currentPosition = $_POST["currentPosition"];
            }

            if(empty($_POST["elementary"])){

            }else {
                $user->elementary = $_POST["elementary"];
            }

            if(empty($_POST["elementaryYearGraduated"])){

            }else {
                $user->elementaryYearGraduated = $_POST["elementaryYearGraduated"];
            }

            if(empty($_POST["highSchool"])){

            }else {
                $user->highSchool = $_POST["highSchool"];
            }

            if(empty($_POST["highSchoolYearGraduated"])){

            }else {
                $user->highSchoolYearGraduated = $_POST["highSchoolYearGraduated"];
            }

            if(empty($_POST["college"])){

            }else {
                $user->college = $_POST["college"];
            }

            if(empty($_POST["collegeYearGraduated"])){

            }else {
                $user->collegeYearGraduated = $_POST["collegeYearGraduated"];
            }

            if(empty($_POST["collegeDegree"])){

            }else {
                $user->collegeDegree = $_POST["collegeDegree"];
            }

            if(empty($_POST["graduate"])){

            }else {
                $user->graduate = $_POST["graduate"];
            }

            if(empty($_POST["graduateYearGraduated"])){

            }else {
                $user->graduateYearGraduated = $_POST["graduateYearGraduated"];
            }

            if(empty($_POST["graduateDegree"])){

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

            }else {
                $user->alumniChapterMembership = $_POST["alumniMembership"];
            }

            if(empty($_POST["emailAddress"])){

            }else {
                $user->email = $_POST["emailAddress"];
            }

            if(empty($_POST["username"])){

            }else {
                $user->username = $_POST["username"];
            }

            if(empty($_POST["password"])){

            }else {
                $user->password = $_POST["password"];
            }

            if(empty($_POST["confirmPassword"])){

            }else {
                $user->confirmPassword = $_POST["confirmPassword"];
            }
        }


?>

<br>

<br>

<center>
<div class="register_form_container col">
    
<form method="POST">
    <table border="0" width="100%">
    <tr><th colspan="4"><center> <h1>Registration Form</h1> </center></th></tr>

    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="lastname">Last Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->lastName; ?>" name="lastname" id="lastname" placeholder="Last Name" required></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="firstname">First Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->firstName; ?>" name="firstname" id="firstname" placeholder="First Name"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="middlename">Middle Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->middleName; ?>" name="middlename" id="middlename" placeholder="Middle Name"></td>
    </tr>
    </div>

    <div class="form-group">
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="homeAddress">Home Address:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->homeAddress; ?>" name="homeAddress" id="homeAddress" placeholder="Home Address"></td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="gender">Sex:</label></b></td>
    <td>&nbsp;<input type="radio" name="gender" value="male" <?php if($user->gender == "male") {echo "checked";} ?> id="gender">Male <br> &nbsp;<input type="radio" name="gender" value="female" <?php if($user->gender == "female") {echo "checked";} ?> id="gender">Female</td>
    
    <td class="label"><b><label for="civilStatus">Civil Status:</label></b></td>
    <td>&nbsp;<input type="radio" name="civilStatus" value="single" <?php if($user->civilStatus == "single") {echo "checked";} ?> id="civilStatus">Single <br> &nbsp;<input type="radio" name="civilStatus" value="married" <?php if($user->civilStatus == "married") {echo "checked";} ?> id="civilStatus">Married</td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="employmentAddress">Employment Address:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->employmentAddress; ?>" name="employmentAddress" id="employmentAddress" placeholder="Employment Address"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="currentWork">Current Work:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->currentWork; ?>" name="currentWork" id="currentWork" placeholder="Current Work"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="currentPosition">Current Position:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->currentPosition; ?>" name="currentPosition" id="currentPosition" placeholder="Current Position"></td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="elementary">Elementary:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->elementary; ?>" name="elementary" id="elementary" placeholder="Elementary"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="elementaryYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->elementaryYearGraduated; ?>" name="elementaryYearGraduated" id="elementaryYearGraduated" placeholder="Year Graduated"></td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>
    
    <div class="form-group">
    <tr>
    <td class="label"><b><label for="highSchool">High School:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->highSchool; ?>" name="highSchool" id="highSchool" placeholder="High School"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="highSchoolYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->highSchoolYearGraduated; ?>" name="highSchoolYearGraduated" id="highSchoolYearGraduated" placeholder="Year Graduated"></td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="college">College:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->college; ?>" name="college" id="college" placeholder="College"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="collegeYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->collegeYearGraduated; ?>" name="collegeYearGraduated" id="collegeYearGraduated" placeholder="Year Graduated"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="collegeDegree">Degree:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->collegeDegree; ?>" name="collegeDegree" id="collegeDegree" placeholder="Degree"></td>
    </tr>
    </div>
    
    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="graduate">Graduate:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->graduate; ?>" name="graduate" id="graduate" placeholder="Graduate"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="graduateYearGraduated">Year Graduated:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->graduateYearGraduated; ?>" name="graduateYearGraduated" id="graduateYearGraduated" placeholder="Year Graduated"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="graduateDegree">Degree:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->graduateDegree; ?>" name="graduateDegree" id="graduateDegree" placeholder="Degree"></td>
    </tr>
    </div>
    
    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="telNo">Office Telephone No. :</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->officeTelephoneNo; ?>" name="telNo" id="telNo" placeholder="Office Telephone No."></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="celNo">Mobile/Cell Phone No. :</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->cellphoneNo; ?>" name="celNo" id="celNo" placeholder="Mobile/Cell Phone No."></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="alumniMembership">Alumni Chapter Membership:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->alumniChapterMembership; ?>" name="alumniMembership" id="alumniMembership" placeholder="Alumni Chapter Membership"></td>
    </tr>
    </div>

    <tr><td colspan="4"><hr></td></tr>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="emailAddress">Email Address:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->email; ?>" name="emailAddress" id="emailAddress" placeholder="Email Address"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="username">User Name:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->username; ?>" name="username" id="username" placeholder="User Name"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="password">Password:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->password; ?>" name="password" id="password" placeholder="Password"></td>
    </tr>
    </div>

    <div class="form-group">
    <tr>
    <td class="label"><b><label for="confirmPassword">Confirm Password:</label></b></td>
    <td colspan="3"><input class="form-control txt_input" type="text" value="<?php echo $user->confirmPassword; ?>" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password"></td>
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

<br>
<?php

    include(SHARED_PATH . '/footer.php');

?>