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

?>


<div class="input-group mb-3" id="admin_input_scroll">
    <input type="text" name="search" class="form-control" id="myEmail" placeholder="Search.." autocomplete="off" onchange="setUrlRemove()">
    <div class="input-group-append">
    <button class="btn btn-success" name="searchBtn" type="submit" onclick="setUrlRemove()">Search</button>
    </div>
</div>

<br>
<br>
<br>

<a href="TCPDF/User/blank.php" class="btn btn-warning fixed-bottom d-inline-block">Get PDF</a>

<?php

if(isset($_GET["search"]) && $_GET["search"] != ""){
include("admin_search_usrs.php");
}elseif(isset($_GET["view"])){
include("admin_view_profile.php");
}else{
    ?>
    <div id="usrs">
    <?php	include("admin_retrieve_usrs.php"); ?>
    </div>
    <?php
}

?>



<!-- <center>
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
</center> -->

<script>
function getpdf(){
    window.location.href = "TCPDF/User/blank.php";
}
</script>
<?php

    include("../bins/shared/private_footer.php");

?>