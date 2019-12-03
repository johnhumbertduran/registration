<?php

include("../bins/shared/connections.php");

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

<div class="container">

<br>

<center>
<div class="card-deck">

<?php

$search = $_GET["search"];

if(empty($_GET["search"])){
    echo "Empty";
}else{
    
    $terms = explode(" ", $search);
		$q = "SELECT * FROM usrs WHERE BINARY ";
		$i = 0;
		
		
		foreach($terms as $each){
		
			$i++;
			
			if($i == 1){
			
				$q .= "firstName LIKE '%$each%' OR lastName LIKE '%$each%' OR middleName LIKE '%$each%' OR homeAddress LIKE '%$each%' OR email LIKE '%$each%' ";
			
			}else{
			
				$q .= "OR firstName LIKE '%$each%' OR lastName LIKE '%$each%' OR middleName LIKE '%$each%' OR homeAddress LIKE '%$each%' OR email LIKE '%$each%' ";
			
			}
		
		}
		
		$query = mysqli_query($connections, $q);
		$c_q = mysqli_num_rows($query);
		
				if($c_q> 0 && $search!=""){
				
					while($row = mysqli_fetch_assoc($query)){
					
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
    <h6 class='card-title'><?php echo $fullName; ?></h6>
    <p class='card-text'><?php echo $address; ?></p>
    <p class='card-text'><?php echo $email; ?></p>
  </div>

  <div class="card-footer">
    <a href='?view=<?php echo $firstName; ?>' class='btn btn-primary'>See Profile</a>
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

				<?php
				
				}else{
				
					echo "No Results.";
				
				
                }
                
}

?>
</center>



<input type="hidden" value="<?php echo $_GET['search']; ?>" id="hidden_search">

<script>

var hidden_search = document.getElementById("hidden_search");
var searchInput = document.getElementById("myEmail");

searchInput.value = hidden_search.value;

</script>