<style>
    .post_img{ height: 150px; }
</style>
<br>
<br>
<br>
<br>
<br>
<script>
    var _URL = window.URL || window.webkitURL;
    var prev = document.getElementById("preview");
    var img = new Image();

    function displayPreview(files){

        var file = files[0];
        var sizeKB = file.size / 1024;
        var uploadBtn = document.getElementById("uploadPhotoBtn");

        if(prev == ""){

        }else{

        uploadBtn.style.display = "block";
        img.onload = function(){
            $('#preview').append(img);
        }
        img.classList.add("post_img");

        img.src = _URL.createObjectURL(file);
        }
    }

    var closeUpload = document.getElementById("dp_close");
    

    function closing(){
        prev.innerHTML = "";
        uploadBtn.style.display = "none";
        document.getElementById("post_img_id").value = "";
        img.src = "";
        // alert("hay");
    }

</script>
<?php

$id = $_GET["id"];

$edit_post_info = mysqli_query($connections, "SELECT * FROM admin_post WHERE id=$id");

$my_post_info = mysqli_fetch_assoc($edit_post_info);
$post = $my_post_info["post"];
$post_id = $my_post_info["id"];
$img = $my_post_info["img"];
$_date = $my_post_info["date"];
$_time = $my_post_info["time"];



$target_dir = "imgs/";
$uploadErr = "";

if(isset($_POST["btnUpload"])){

    $target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
    $uploadOk = 1;

    if(file_exists($target_file)){
        $target_file = $target_dir . rand(1,9) . rand(1,9) . rand(1,9) . rand(1,9) . "_" . basename($_FILES["profile_pic"]["name"]);

        $uploadOk = 1;
    }

    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if($_FILES["profile_pic"]["size"]>1000000000000000000000000){

        $uploadErr = "Sorry, your file is too large!";
        // echo "<script>alert('Too large');</script>";
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF"){

        $uploadErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed!";
        // echo "<script>alert('File type');</script>";
        $uploadOk = 0;
    }

    if($uploadOk == 1){

        if(move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)){

            // echo "<font color=green> The file " . basename($_FILES["profile_pic"]["name"]) . " has been uploaded.</font>";
            $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $qw = md5(rand(1,5));
            $r = substr(str_shuffle($permitted_chars), 0, 15);
            $o = substr(str_shuffle($permitted_chars), 0, 19);
            $x = substr(str_shuffle($permitted_chars), 0, 4);
            $hg = sha1(rand(1,9));

            mysqli_query($connections, "UPDATE admin_post SET img='$target_file' WHERE id='$id'");
            $notify = "<font color=green> Your photo has been uploaded! </font>";
            // echo "<script> window.location.href='MyAccount?notify=$notify';</script>";
            echo "<script>window.location.href='?&&$x';</script>";
            //   header('Location: ?&&' . $x . "_" . $qw . "=" . $r . "&&" . $o . "=" . $hg);


        }else{
            echo "Sorry, there was an error uploading your file.";
            echo 'Error:  '.$_FILES['profile_pic']['error'];
        }
    }

}

if(empty($_GET["notify"])){
    // do nothing
}else{
 echo "<center>" . $_GET["notify"] . "</center>";
}





?>

<br>
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
<a href='#' data-toggle='modal' data-target='#upload_photo' class="btn btn-success add_img">Upload Image </a>
<?php
}else{
?>
<div class="" width="50%">
    <img src="<?php echo $img; ?>" alt="" class="container-fluid" style="width:50%">
    <br>
    <br>
    <a href='?' class="btn btn-danger add_img" style=" display:inline;">Done</a>
    <a href='#' data-toggle='modal' style=" display:inline;" data-target='#upload_photo' class="btn btn-success add_img">Update Image</a>
<br>
<br>
</div>
<?php
}
?>

</div>

</div>

<!-- The Modal -->
<div class="modal fade" id="upload_photo">
        <div class="modal-dialog">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
                <h4>Upload Profile Picture</h4>
              <button type="button" class="close" id="dp_close" onclick="closing()" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
            <center>

                <form method="post" enctype="multipart/form-data">


                            <center><br><span id="preview"></span></center>

                            <hr>

                            <!-- <input type="file" class="custom-file-input" id="customFile"> -->
                            <input type="file" class="btn btn-info" id="post_img_id" name="profile_pic" onchange="displayPreview(this.files);">
                            <!-- <label class="custom-file-label" for="profile_pic">Choose your photo</label> -->
                            <br>

                            

            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                        <center>
                            <input type="submit" name="btnUpload" class="btn btn-success" id="uploadPhotoBtn" value="Upload">
                        </center>
                    </form>
                <!-- <span class="error"><?php echo $uploadErr; ?></span> -->
                </center>
            </div>
            
          </div>
        </div>
    </div>

<?php


?>

</center>