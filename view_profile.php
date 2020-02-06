<?php

include("private/bins/shared/connections.php");

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
$tmp_img = "private/user/tmp_icn/tmp_icon.png";
?>


<div class="container">
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
                        <img src='private/user/$img' class='dp' alt='profile_pic' srcset=''>
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
    

    

