<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



<?php
    // require_once('private/bins/initialize.php');

    include("private/bins/shared/header.php");
    include("private/bins/shared/connections.php");
    include("private/bins/shared/slides.php");
    include("private/bins/shared/login_nav.php");

    $query_info = mysqli_query($connections, "SELECT * FROM usrs WHERE usrname='$sesUse'");
    $my_info = mysqli_fetch_assoc($query_info);

    $tmp_img = "private/user/tmp_icn/tmp_icon.png";

?>

<script>
    document.getElementById("home").classList.add("active_nav");
    setInterval(function(){
        
        $('#usrs').load('retrieve_usrs.php');
    
    
    }, 3600000);
</script>

<div id="usrs">
    
    <?php	include("retrieve_usrs.php"); ?>
    
    </div>

<!-- 
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
<p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
-->




<?php

    include("private/bins/shared/footer.php");

?>