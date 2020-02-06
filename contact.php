


<?php

    // require_once('private/bins/initialize.php');

    include("private/bins/shared/header.php");
    include("private/bins/shared/connections.php");
    include("private/bins/shared/slides.php");
    include("private/bins/shared/login_nav.php");

?>

<script>
document.getElementById("contact").classList.add("active_nav");
document.title += " / Contact";
</script>

<br>
<center>
<div class="lorem text-left mx-5">

<h2 class="text-primary">Address</h2>
<p class="text-secondary">Archbishop Gabriel M. Reyes Street, 5600 Kalibo, Aklan,
Philippines.</p>
<hr>

<h2 class="text-primary">Contact Number</h2>
<p class="text-secondary">(036) 268-4152 <br>
268-8576 <br>
268-9347</p>
<hr>

<h2 class="text-primary">Email Address</h2>
<p class="text-secondary">info@acc.edu.ph <br>
registrar@acc.edu.ph</p>
<hr>

</div>
</center>



<?php

    include("private/bins/shared/footer.php");

?>