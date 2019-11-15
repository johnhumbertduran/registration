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

    function displayPreview(files){

        var file = files[0];
        var img = new Image();
        var sizeKB = file.size / 1024;
        img.onload = function(){
            $('#preview').append(img);
        }

        img.src = _URL.createObjectURL(file);
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

    if($_FILES["profile_pic"]["size"]>1000000000000){

        $uploadErr = "Sorry, your file is too large!";
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){

        $uploadErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed!";

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
        }
    }

}

if(empty($_GET["notify"])){
    // do nothing
}else{
 echo "<center>" . $_GET["notify"] . "</center>";
}

if($img == ""){
    echo "<center> No photo </center>";
}else{
    echo "<center> <img src='$img' height='250px' width='150px' alt='' srcset=''> </center>";
}


?>


<center>

    <form method="post" enctype="multipart/form-data">

    <table border="0" width="30%">

        <tr>
            <td colspan="2"><center><span id="preview"></span></center></td>
        </tr>

        <tr>
            <td colspan="2"><hr></td>
        </tr>

        <tr>
            <td width="50%"><input type="file" id="profile_pic" name="profile_pic" onchange="displayPreview(this.files);"></td>
            <td></td>
        </tr>

        <tr>
            <td colspan="2">
                <center>
                    <input type="submit" name="btnUpload" class="btn-update" value="Upload">
                </center>
            </td>
        </tr>

    </table>

    </form>
    
    <span class="error"><?php echo $uploadErr; ?></span>

</center>

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

    include(SHARED_PATH . '/footer.php');

?>