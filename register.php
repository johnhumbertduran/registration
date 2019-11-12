<?php

    require_once('private/bins/initialize.php');

    include(SHARED_PATH . '/header.php');
    include(SHARED_PATH . '/connections.php');
    include(SHARED_PATH . '/slides.php');
    include(SHARED_PATH . '/login_nav.php');

?>

<script>
    document.getElementById("register").classList.add("active_nav");
    document.title += " / Register";
</script>

<?php



?>

<br>
<center>
<div class="register_form_container col">
<form method="post">
    <div class="form-group">
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name" autocomplete="off" required>
    </div>

    <div class="form-group">
    <label for="middlename">Middle Name:</label>
    <input type="text" name="middlename" class="form-control" id="middlename" placeholder="Middle Name" autocomplete="off" required>
    </div>

    <div class="form-group">
    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name" autocomplete="off" required>
    </div>

    <div class="form-group">
    <label for="username">User Name:</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Username" autocomplete="off" required>
    </div>

    <div class="form-group">
    <label for="pass">Password:</label>
    <input type="password" name="password" class="form-control" id="pass" placeholder="Password" autocomplete="off" required>
    </div>

    <div class="form-group">
    <label for="conpass">Confirm Password:</label>
    <input type="password" name="conpassword" class="form-control" id="conpass" placeholder="Confirm Password" autocomplete="off" required>
    </div>
    
    <div class="form-group">
    <label for="course">Course:</label>
    <input type="text" name="course" class="form-control" id="course" placeholder="Course" autocomplete="off" required>
    </div>
    
    <button class="btn btn-success" type="submit">Submit</button>
</table>
</form>
</div>
</center>

<br>
<?php

    include(SHARED_PATH . '/footer.php');

?>