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


// $my_post_info = mysqli_fetch_assoc($post_info);
// $post = $my_post_info["post"];
// $img = $my_post_info["img"];
// $_date = $my_post_info["date"];
// $_time = $my_post_info["time"];


$post = "";
?>

<style>
    .upload_photo_size{ height: 150px; }
</style>

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
        img.classList.add("upload_photo_size")
        img.src = _URL.createObjectURL(file);
        }
    }

    var closeUpload = document.getElementById("dp_close");
    

    function closeUploadPhoto(){
        // prev.innerHTML = "";
        document.getElementById("profile_picID").value = "";
        img.src = "";
        // alert("hay");
    }

</script>

<?php

$target_dir = "imgs/";

if(isset($_POST["btnUpload"])){

    if(empty($_POST["id_post"])){

    }else{
        $post_id = $_POST["id_post"];
    }

    $target_file = $target_dir . basename($_FILES["post_pic"]["name"]);
    $uploadOk = 1;

    if(file_exists($target_file)){
        $target_file = $target_dir . rand(1,9) . rand(1,9) . rand(1,9) . rand(1,9) . "_" . basename($_FILES["post_pic"]["name"]);

        $uploadOk = 1;
    }

    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if($_FILES["post_pic"]["size"]>1000000000000000000000000){

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

        if(move_uploaded_file($_FILES["post_pic"]["tmp_name"], $target_file)){

            // echo "<font color=green> The file " . basename($_FILES["post_pic"]["name"]) . " has been uploaded.</font>";
            $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $qw = md5(rand(1,5));
            $r = substr(str_shuffle($permitted_chars), 0, 15);
            $o = substr(str_shuffle($permitted_chars), 0, 19);
            $x = substr(str_shuffle($permitted_chars), 0, 4);
            $hg = sha1(rand(1,9));

            mysqli_query($connections, "UPDATE admin_post SET img='$target_file' WHERE id='$post_id'");
            $notify = "<font color=green> Your photo has been uploaded! </font>";
            // echo "<script> window.location.href='MyAccount?notify=$notify';</script>";
            echo "<script>window.location.href='?';</script>";
            //   header('Location: ?&&' . $x . "_" . $qw . "=" . $r . "&&" . $o . "=" . $hg);


        }else{
            echo "Sorry, there was an error uploading your file.";
            echo 'Error:  '.$_FILES['post_pic']['error'];
        }
    }

}

$post_info = mysqli_query($connections, "SELECT * FROM admin_post ORDER BY date DESC, time DESC ");


while($my_post_info = mysqli_fetch_assoc($post_info)){
$post_id = $my_post_info["id"];
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
    <form method="post">
        <input type="text" name="dummy_id" id="" value="<?php echo $post_id; ?>">
    
    

<?php
if($img == ""){
?> <!-- Kara ako nag left -->
<input type="text" name="upload_dummy" id="" class="btn btn-success add_img" data-toggle='modal' data-target='#upload_post_photo'>
<!-- <a href="#" class="btn btn-success add_img" data-toggle='modal' data-target='#upload_post_photo'>Add image</a> -->
<?php
}else{
?>
<div class="">
    <img src="<?php echo $img; ?>" alt="" class="post_img">
<a href="#" class="btn btn-success add_img" data-toggle='modal' data-target='#upload_post_photo'>Change image</a>
</form>
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

<!-- The Modal -->
<div class="modal fade" id="upload_post_photo">
        <div class="modal-dialog">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
                <h4>Upload Profile Picture</h4>
              <button type="button" class="close" id="dp_close" onclick="closeUploadPhoto()" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
            <center>

                <form method="post" enctype="multipart/form-data">

                    
                    <input type="text" name="id_post" id="" value="<?php echo $_POST["dummy_id"]; ?>">
                            <center><br><span id="preview"></span></center>

                            <hr>

                            <!-- <input type="file" class="custom-file-input" id="customFile"> -->
                            <input type="file" class="btn btn-info" id="profile_picID" name="post_pic" onchange="displayPreview(this.files);">
                            <!-- <label class="custom-file-label" for="post_pic">Choose your photo</label> -->
                            <br>

                            

            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                        <center>
                            <input type="submit" name="btnUpload" class="btn btn-success" id="uploadPhotoBtn" value="Upload">
                        </center>
                    </form>
                </center>
            </div>
            
          </div>
        </div>
    </div>




<hr>

<center>
<div class="lorem">
<p>Lorem ipsum dolor sit amet, cum viris aliquam an, cu iudico atomorum qualisque per. Impetus facilisis ei eam.</p>
<p>At mnesarchum disputationi ius, euismod equidem qualisque vis ne, sonet singulis vis cu. At eam soleat iudicabit, ad eam intellegat abhorreant incorrupte.</p>

<p>Cu vel noluisse voluptatibus, ut animal utamur dissentiunt per. Cu petentium definitiones nec, partem everti adipisci an nam.</p>
<p>Discere adipisci eleifend cu eos. His te veri quaeque, vis id wisi commodo, ei dicant honestatis nec. Sint postea vim in, et nobis consul vis.</p>

<p>Putant comprehensam mel ad, sint adipisci eu cum, et nam sint nemore offendit. An his saperet denique omittam.</p>
<p>Senserit voluptatum no vix, nisl dicunt abhorreant vis ne. Vix facer dolorum argumentum no. Tamquam probatus per at, et laudem nemore persecuti est. Eu vim enim paulo tempor.</p>

<p>Cum vivendo disputando no, qui zril copiosae te. In vel omnes congue fastidii. Eum te facilis corpora, etiam dolorum inciderint te vix.</p>
<p>Alii nominavi persequeris vis ex.</p>

<p>Vocent accumsan no vis, ei nec deleniti apeirian. In magna argumentum sadipscing has.<p>

</p>Nec ad alii ferri affert, duis ullum audire in est. Sit an natum consequat intellegat, constituto adversarium ex eam, ne ferri voluptaria nec.</p>

</div>
</center>

<?php

    include("../bins/shared/private_footer.php");

?>
