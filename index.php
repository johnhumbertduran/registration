


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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    document.getElementById("home").classList.add("active_nav");
    setInterval(function(){
        
        $('#usrs').load('retrieve_usrs.php');
    
    
    }, 3600000);

    function scrollingSearch(){
    if (window.innerWidth > 768) {
    if (scrolltop() > 280) {
            document.getElementById("input_scroll").style.position = "fixed";
            document.getElementById("input_scroll").style.top = "55px";
            document.getElementById("input_scroll").style.padding = "0";

        } else {
            document.getElementById("input_scroll").style.top = "0";
            document.getElementById("input_scroll").style.position = "relative";

        }

        } else {

        if (scrolltop() > 130) {
            document.getElementById("input_scroll").style.position = "fixed";
            document.getElementById("input_scroll").style.top = "55px";
            document.getElementById("input_scroll").style.padding = "0";

        } else {
            document.getElementById("input_scroll").style.top = "0";
            document.getElementById("input_scroll").style.position = "relative";

        }

    }

    function scrolltop() {
    var top = 0;
    if (typeof (window.pageYOffset) == "number") {
        top = window.pageYOffset;
    } else if (document.body && document.body.scrollTop) {
        top = document.body.scrollTop;
    } else if (document.documentElement && document.documentElement.scrollTop) {
        top = document.documentElement.scrollTop;
    }
    return top;
    }
    
    }

    
</script>


<div class="input-group mb-3" id="input_scroll">
    <!-- <form method="post"> -->
    <input type="text" name="search" class="form-control" id="myInput" placeholder="Search.." autocomplete="off" onchange="setUrlSearch()">
    <div class="input-group-append">
    <button class="btn btn-success" name="searchBtn" type="submit" onclick="setUrlSearch()">Search</button>
    </div>
    <!-- </form> -->
</div>



<?php

if(isset($_GET["search"]) && $_GET["search"] != ""){
include("search_usrs.php");
}elseif(isset($_GET["view"])){
include("view_profile.php");
}else{
    ?>
    <div id="usrs">
    <?php	include("retrieve_usrs.php"); ?>
    </div>
    <?php
}

?>


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