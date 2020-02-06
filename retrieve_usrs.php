<?php
    include("private/bins/shared/connections.php");
?>

<br>

<div class="container">

<center>
<div class="card-deck">
<?php


$usrs_qry = mysqli_query($connections, "SELECT * FROM usrs WHERE account_type='2'");


while($row_usrs = mysqli_fetch_assoc($usrs_qry)){

    $account_type = $row_usrs["account_type"];
    $img = $row_usrs["img"];
    $firstName = ucfirst($row_usrs["firstName"]);
    $middleName = $row_usrs["middleName"];
    $lastName = ucfirst($row_usrs["lastName"]);
    $address = ucfirst($row_usrs["homeAddress"]);
    $work = ucfirst($row_usrs["currentWork"]);
    $workPosition = ucfirst($row_usrs["currentPosition"]);
    $workAddress = ucfirst($row_usrs["employmentAddress"]);
    $email = $row_usrs["email"];
    $collegeDegree = $row_usrs["collegeDegree"];
    $year = $row_usrs["collegeYearGraduated"];

    $fullName = $firstName . " " . ucfirst($middleName[0]) . ". " . $lastName;    

?>
<div class="col-sm-3" width="100%">

<div class='card card_hover' style='width:270px; height:500px;'>    
    <center>
      <?php if($img == ""){?>

        <br>
        
        <div class='car_div_img'>
            <img class='card-img-top card_img' src='private/user/tmp_icn/tmp_icon.png' alt='<?php echo $fullName; ?>'>
        </div>
      <?php }else{?>
        <br>
        <div class='car_div_img'>
            <img class='card-img-top card_img' src='<?php echo "private/user/" . $img; ?>' alt='<?php echo $fullName; ?>'>
        </div>
      <?php } ?>
    </center>

  <div class='card-body text-left'>
    <small class='card-title'>
    <?php echo $fullName; ?><br>
    <?php echo $collegeDegree; ?> Class of <?php echo $year; ?><br>
    <?php echo $address; ?><br>
    <?php echo $email; ?><br>
    Works at <?php echo $work; ?><br>
    at <?php echo $workAddress; ?><br>
    as <?php echo $workPosition; ?><br>
    </small>
    <p class='card-text'></p>
    <p class='card-text'></p>
    <p class='card-text'></p>
  </div>

  <div class="card-footer">
    <a href='?view=<?php echo $firstName; ?>' class='btn btn-primary'>See Profile</a>
  </div>
</div>

<br>
</div>


<?php
}
?>
</div>
</center>


