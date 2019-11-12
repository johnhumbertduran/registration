
<div id="carousel_target" class="carousel slide overflow-wrap" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#carousel_target" data-slide-to="0" class="active"></li>
    <li data-target="#carousel_target" data-slide-to="1"></li>
    <li data-target="#carousel_target" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo url_for('public/images/1.jpg'); ?>" alt="Image 1" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="<?php echo url_for('public/images/2.jpg'); ?>" alt="Image 2" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="<?php echo url_for('public/images/3.jpg'); ?>" alt="Image 3" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#carousel_target" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#carousel_target" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>