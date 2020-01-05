<?php
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
$post_id = $my_post_info["id"];
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

<a href='?id=<?php echo $post_id; ?>' class="btn btn-success add_img">Add image</a>
<?php
}else{
?>
<?php
?>
<div class="">
    <img src="<?php echo $img; ?>" alt="" class="post_img" style="width:50%">
    <!-- <br> -->
    <a href='?id=<?php echo $post_id; ?>' class="btn btn-success add_img">Change image</a>
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