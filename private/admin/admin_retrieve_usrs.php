<?php
    include("../bins/shared/connections.php");
    // $my_id = $id;
    if(isset($_POST["remove_yes"])){
      
      if(empty($_POST["final_id"])){

      }else{
        $my_id = $_POST["final_id"];
      }
      if($my_id){
        echo "<script>window.location.href='?Successfully Deleted!';</script>";
        mysqli_query($connections,"DELETE FROM usrs where id='$my_id'");
      }
    }

?>

<br>

<div class="container">

<center>
<div class="card-deck">
<?php


$admin_usr_qry = mysqli_query($connections, "SELECT * FROM usrs WHERE account_type='2'");


while($row_usrs = mysqli_fetch_assoc($admin_usr_qry)){

    $account_type = $row_usrs["account_type"];
    $id = $row_usrs["id"];
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

<div class='card card_hover' style='width:270px; height:500px;'>    
    <center>
      <?php if($img == ""){?>

        <br>
        
        <div class='car_div_img'>
            <img class='card-img-top card_img' src='../user/tmp_icn/tmp_icon.png' alt='<?php echo $fullName; ?>'>
        </div>
      <?php }else{?>
        <br>
        <div class='car_div_img'>
            <img class='card-img-top card_img' src='<?php echo "../user/" . $img; ?>' alt='<?php echo $fullName; ?>'>
        </div>
      <?php } ?>
    </center>

  <div class='card-body'>
    <h6 class='card-title'><?php echo $fullName; ?></h6><input type="hidden" name="" value="<?php echo $id; ?>">
    <p class='card-text'><?php echo $address; ?></p>
    <p class='card-text' id='myEmail'><?php echo $email; ?></p>
  </div>

  <div class="card-footer input-group justify-content-center">
    <a href='#' class='btn btn-primary'>See Profile</a>&nbsp;
    <a href='' class='btn btn-danger' data-toggle="modal" data-target="#myModal<?php echo $id; ?>" onchange="setUrlRemove()">Remove</a>
  </div>
</div>

<br>
</div>


  <!-- The Modal -->
  <div class="modal fade" id="myModal<?php echo $id; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Remove <font color="green"><?php echo $firstName; ?></font>?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <h3><font color="red">This action cannot be undo.</font></h3>
            <form method="post">
                <input type="text" name="yes_remove" value="<?php echo $id; ?>">
                <input type="text" name="final_id" value="<?php $my_id = $id; echo $my_id; ?>">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
          
              <input type="submit" value="Yes" name="remove_yes" class="btn btn-success">
          </form>
        </div>
        
      </div>
    </div>
  </div>
  

<?php
}



?>

</div>
</center>