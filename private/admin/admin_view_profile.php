<?php

include("../bins/shared/connections.php");

?>


<?php

$view = $_GET["view"];

$view_qry = mysqli_query($connections, "SELECT * FROM usrs WHERE firstName='$view' ");

$row = mysqli_fetch_assoc($view_qry);				
$account_type = $row["account_type"];
$id = $row["id"];
$img = $row["img"];
$firstName = ucfirst($row["firstName"]);
$middleName = $row["middleName"];
$lastName = ucfirst($row["lastName"]);
$address = ucfirst($row["homeAddress"]);
$work = ucfirst($row["currentWork"]);
$workPosition = ucfirst($row["currentPosition"]);
$email = $row["email"];
                
$fullName = $firstName . " " . ucfirst($middleName[0]) . ". " . $lastName;
$tmp_img = "../user/tmp_icn/tmp_icon.png";
?>


<div class="container left_content">
        <div>
        <?php
        
        if($img == ""){
            echo "<center>
            <div class='dp_cover'>
                <img src='$tmp_img' class='dp' alt='profile_pic' srcset=''>
            </div>
        </center>";
        }else{
            echo "<center>
                    <div class='dp_cover'>
                        <img src='../user/$img' class='dp' alt='profile_pic' srcset=''>
                    </div>
                </center>";
        }

        ?>
        </div>
            <br>
        <div class="container basic_info">
            <br>
            <h5><center>Basic Info</center></h5>
            <hr>
            <h6><center><?php echo $fullName; ?></center></h6>
            <h6><center><?php echo $address; ?></center></h6>
            <?php if($work != "N/A" && "none"){?>
            <h6><center><?php echo $workPosition . " at " . $work ; ?></center></h6>
            <?php }else{
                
            } ?>
            <h6><center><?php echo $email; ?></center></h6>
            <br>
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

