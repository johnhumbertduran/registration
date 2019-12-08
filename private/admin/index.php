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

if(isset($_GET["search"]) && $_GET["search"] != ""){
include("admin_search_usrs.php");
}else{

}


if(isset($_POST["post_status_btn"])){

    if(empty($_POST["post_status"])){
        echo "empty";
    }else{
        $post = $_POST["post_status"];
    }

    if($post){
        mysqli_query($connections, "INSERT INTO admin_post (post) VALUES ('$post') ");
        echo "<script> alert('Done'); window.location.href='?'; </script>";
    }
}
?>


<br>
<br>
<br>

<center>
<div class="form-group" style=" width: 50%;">
<form method="POST">
  <label for="posting" class="floating_left"><h4>Post a status:</h4></label>
    <textarea class="form-control" name="post_status" id="posting" cols="10" rows="10"><?php echo $post; ?></textarea>
    <hr>
    <input type="submit" name="post_status_btn" class="btn btn-primary floating_right" value="Post">
</form>
</div>
</center>


<br>
<br>
<br>
<br>
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

    include("../bins/shared/footer.php");

?>