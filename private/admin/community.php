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
<?php

$post_info = mysqli_query($connections, "SELECT * FROM admin_post ");


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
<p class="btn btn-success add_img">Add image</p>
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

    include("../bins/shared/footer.php");

?>
