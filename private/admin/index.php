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
}else{

}

date_default_timezone_set("Asia/Manila");
$date_now = date("m/d/Y");
$time_now = date("h:i a");

$my_time = strtotime($time_now);

if(isset($_POST["post_status_btn"])){

    if(empty($_POST["post_status"])){
        echo "empty";
    }else{
        $post = $_POST["post_status"];
    }

    if($post){
        mysqli_query($connections, "INSERT INTO admin_post (post,date,time) VALUES ('$post','$date_now','$time_now') ");
        echo "<script> alert('Done'); window.location.href='?'; </script>";
    }
}
?>


<br>
<br>
<br>

<center>

<div class="container clearfix">
<label for="posting" class="_collapsing"  data-toggle="collapse" data-target="#postings"><h4>Post a status</h4></label>
<!-- <button data-toggle="collapse" data-target="#postings">Collapsible</button> -->
    <div id="postings" class="collapse hide">
<form method="POST">
    <input type="hidden" value="<?php echo $date_now; ?>">
    <input type="hidden" value="<?php echo $time_now; ?>">
    <textarea class="form-control" name="post_status" id="posting" cols="10" rows="10"><?php echo $post; ?></textarea>


    <hr>
    <input type="submit" name="post_status_btn" class="btn btn-primary floating_right" value="Post">
</form>
</div>
</div>


</center>


<hr>


<?php

$post_info = mysqli_query($connections, "SELECT * FROM admin_post ORDER BY date DESC, time DESC ");


while($my_post_info = mysqli_fetch_assoc($post_info)){
$post = $my_post_info["post"];
$img = $my_post_info["img"];
$_date = $my_post_info["date"];
$_time = $my_post_info["time"];
?>

<br>
<center>
<div class="container-fluid">

<div class="content">
    <div class="d-flex ml-auto date_time pl-3 mt-1">
        <p><?php echo $_date; ?></p>
    </div>

    <div class="d-flex ml-auto pl-3">
        <p><?php echo $_time; ?></p>
    </div>
    
    <p><?php echo $post; ?></p>

<?php
if($img == ""){
?>
<a href="add_post_img" class="btn btn-success add_img">Add image</a>
<?php
}else{
?>
<div class="">
    <img src="<?php echo $img; ?>" alt="" class="post_img">
</div>
<?php
}
?>

</div>

</div>

<?php
}

?>

</center>

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