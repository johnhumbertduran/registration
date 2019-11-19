<?php
    include("private/bins/shared/connections.php");
?>

<br>

<div class="container">

<center>
<div class="card-deck">
<?php


$usrs_cnt = mysqli_query($connections, "SELECT COUNT(id) c FROM usrs WHERE account_type='2'");
$usrs_qry = mysqli_query($connections, "SELECT * FROM usrs WHERE account_type='2'");

$rrr = mysqli_fetch_assoc($usrs_cnt);

while($row_usrs = mysqli_fetch_assoc($usrs_qry)){

    $account_type = $row_usrs["account_type"];
    $img = $row_usrs["img"];
    $firstName = ucfirst($row_usrs["firstName"]);
    $middleName = $row_usrs["middleName"];
    $lastName = ucfirst($row_usrs["lastName"]);
    $address = ucfirst($row_usrs["homeAddress"]);
    $work = ucfirst($row_usrs["currentWork"]);
    $workPosition = ucfirst($row_usrs["currentPosition"]);
    $email = $row_usrs["email"];

    $fullName = $firstName . " " . ucfirst($middleName[0]) . ". " . $lastName;    

?>
<div class="col-sm-3" width="100%">

<div class='card' style='width:270px; height:500px;'>    
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

  <div class='card-body'>
    <h6 class='card-title'><?php echo $fullName; ?></h6>
    <p class='card-text'><?php echo $address; ?></p>
    <p class='card-text'><?php echo $email; ?></p>
  </div>

  <div class="card-footer">
    <a href='#' class='btn btn-primary'>See Profile</a>
  </div>
</div>

<br>
</div>


<?php
}
?>
</div>
</center>



<div class="card-deck">
  <div class="card bg-primary">
    <div class="card-body text-center">
      <p class="card-text">Some text inside the first card</p>
    </div>
  </div>
  <div class="card bg-warning">
    <div class="card-body text-center">
      <p class="card-text">Some text inside the second card</p>
    </div>
  </div>
  <div class="card bg-success">
    <div class="card-body text-center">
      <p class="card-text">Some text inside the third card</p>
    </div>
  </div>
  <div class="card bg-danger">
    <div class="card-body text-center">
      <p class="card-text">Some text inside the fourth card</p>
    </div>
  </div>
</div>

</div>


