<?php

include('views/customer/includes/header.php');

?>
<!--Start Content-->
<html>
  <body>
<div class="container">
  <div class="row">
    <?php foreach ($fetchCars->fetchAll() as $result) { ?>
      <div class="col-md-6">
        <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
        <div class="col-md-4">
          <img src="./assets/upload/<?= $result['image'] ?>"
          class="img-fluid rounded-start"
          alt="...">
        <h5 class="card-title"> <a href="details.php?car_id=<?= $result['id'] ?>"><?= $result['name'] ?></a> </h5>

        <p class="card-text"><small class="text-muted">
            <?php if ($result['available'] == 0) {
              echo 'Cars available for booking';
            }  ?></small></p>
        </div> 
      </div>
        </div>
      </div>

    <?php }  ?>
  </div>
</div>

<!--End content here-->

</body>

</html>


