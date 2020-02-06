<?php

include("private/bins/shared/connections.php");

?>

<div class="container">

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
			
				$q .= "firstName LIKE '%$each%' OR lastName LIKE '%$each%' OR middleName LIKE '%$each%' OR homeAddress LIKE '%$each%' OR email LIKE '%$each%' OR collegeYearGraduated LIKE '%$each%' OR collegeDegree LIKE '%$each%' ";
			
			}else{
			
				$q .= "OR firstName LIKE '%$each%' OR lastName LIKE '%$each%' OR middleName LIKE '%$each%' OR homeAddress LIKE '%$each%' OR email LIKE '%$each%' OR collegeYearGraduated LIKE '%$each%' OR collegeDegree LIKE '%$each%' ";
			
			}
		
		}
		
		$query = mysqli_query($connections, $q);
		$c_q = mysqli_num_rows($query);
		
				if($c_q> 0 && $search!=""){
				
					while($row = mysqli_fetch_assoc($query)){
					
                        $account_type = $row["account_type"];
                        $img = $row["img"];
                        $firstName = ucfirst($row["firstName"]);
                        $middleName = $row["middleName"];
                        $lastName = ucfirst($row["lastName"]);
                        $address = ucfirst($row["homeAddress"]);
                        $work = ucfirst($row["currentWork"]);
                        $workPosition = ucfirst($row["currentPosition"]);
                        $workAddress = ucfirst($row["employmentAddress"]);
                        $email = $row["email"];
                        $collegeDegree = $row["collegeDegree"];
                        $year = $row["collegeYearGraduated"];
                                        
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
				<?php
				
				}else{
				
					echo "No Results.";
				
				
                }
                
}

?>




<input type="hidden" value="<?php echo $_GET['search']; ?>" id="hidden_search">

<script>

var hidden_search = document.getElementById("hidden_search");
var searchInput = document.getElementById("myInput");

searchInput.value = hidden_search.value;

</script>