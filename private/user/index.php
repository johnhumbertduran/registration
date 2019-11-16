<?php


require_once('../bins/initialize.php');

include(SHARED_PATH . '/header.php');
include(SHARED_PATH . '/connections.php');
include(SHARED_PATH . '/slides.php');
include(SHARED_PATH . '/user_nav.php');

$query_info = mysqli_query($connections, "SELECT * FROM usrs WHERE usrname='$sesUse'");
$my_info = mysqli_fetch_assoc($query_info);
$account_type = $my_info["account_type"];
$img = $my_info["img"];

?>

<style>
    img{ height: 150px; }
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

<br>


<?php

$target_dir = "img/";
$uploadErr = "";

if(isset($_POST["btnUpload"])){

    $target_file = $target_dir . "/" . basename($_FILES["profile_pic"]["name"]);
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

            mysqli_query($connections, "UPDATE usrs SET img='$target_file' WHERE usrname='$sesUse'");
            $notify = "<font color=green> Your photo has been uploaded! </font>";
            // echo "<script> window.location.href='MyAccount?notify=$notify';</script>";
              header('Location: ?&&' . $x . "_" . $qw . "=" . $r . "&&" . $o . "=" . $hg);


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




    <div class="container left_content">
        <div>
        <?php
        
        if($img == ""){
            echo "<center> No photo </center>";
        }else{
            echo "<center>
                    <div class='dp_cover'>
                        <img src='$img' class='dp' alt='profile_pic' srcset=''>
                        <div class='upload'><a href='#' data-toggle='modal' data-target='#upload_photo'>Upload</a><br><br></div>
                    </div>
                </center>";
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
              <button type="button" class="close" id="dp_close" onclick="closeUploadPhoto()" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
            <center>

                <form method="post" enctype="multipart/form-data">


                            <center><br><span id="preview"></span></center>

                            <hr>

                            <!-- <input type="file" class="custom-file-input" id="customFile"> -->
                            <input type="file" class="btn btn-info" id="profile_picID" name="profile_pic" onchange="displayPreview(this.files);">
                            <!-- <label class="custom-file-label" for="profile_pic">Choose your photo</label> -->
                            <br>

                            

            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                        <center>
                            <input type="submit" name="btnUpload" class="btn btn-success" id="uploadPhotoBtn" value="Upload">
                        </center>
                    </form>
                <span class="error"><?php echo $uploadErr; ?></span>
                </center>
            </div>
            
          </div>
        </div>
    </div>




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

<script>



</script>

<?php

    include(SHARED_PATH . '/footer.php');

?>