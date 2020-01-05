<?php
session_start();

// require_once('../bins/initialize.php');

include("../bins/shared/admin_header.php");
include("../bins/shared/connections.php");
// include("../bins/shared/slides.php");
include("../bins/shared/admin_nav.php");

$query_info = mysqli_query($connections, "SELECT * FROM usrs WHERE usrname='$sesUse'");
$my_info = mysqli_fetch_assoc($query_info);
$account_type = $my_info["account_type"];
$img = $my_info["img"];


$post = "";
?>

<div class="input-group mb-3" id="admin_input_scroll">
    <input type="text" name="search" class="form-control" id="myEmail" placeholder="Search.." autocomplete="off" onchange="setUrlRemove()">
    <div class="input-group-append">
    <button class="btn btn-success" name="searchBtn" type="submit" onclick="setUrlRemove()">Search</button>
    </div>
</div>

<?php


// statement if you click the search button.
// This will trigger to retrieve data of what you searched for.
// View profile is added also here.
if(isset($_GET["search"]) && $_GET["search"] != ""){
include("admin_search_usrs.php");
}elseif(isset($_GET["id"]) && $_GET["id"] != ""){
    include("add_post_img.php");
}else{
    include("admin_post.php");
}


?>
<br>
<br>
<br>
<br>


<script>
    var file_input = document.getElementById("file_upload");
    var label_inputs = document.getElementById("label_upload");
    var inputs = document.querySelectorAll( '.file_upload' );
    var _URL = window.URL || window.webkitURL;
    var prev = document.getElementById("preview");
    var img = new Image();
    var uploadBtn = document.getElementById("uploadPhotoBtn");
    var cancelBtn = document.getElementById("cancel_btn");

    // function file_label(){
    //     label_inputs.innerHTML = file_input.value;
    // }

    function file_label(files){

    var file = files[0];
    var sizeKB = file.size / 1024;


    if(prev == ""){

    }else{

    uploadBtn.style.display = "inline";
    cancelBtn.style.display = "inline";
    img.onload = function(){
        $('#preview').append(img);
    }
    label_inputs.innerHTML = file_input.value;

    img.src = _URL.createObjectURL(file);
    }
    }

    function closeUploadPhoto(){
        // prev.innerHTML = "";
        file_input.value = "";
        label_inputs.innerHTML = "Upload Image";
        img.src = "";
        uploadBtn.style.display = "none";
        cancelBtn.style.display = "none";
        // alert("hay");
    }

</script>


<?php

    include("../bins/shared/private_footer.php");

?>