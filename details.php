<?php

include('views/customer/includes/header.php');

$carId = $_GET['car_id'];


$singleCarQuery = $databaseConnexion->prepare('SELECT cars.*, brands.name as brand FROM cars LEFT JOIN brands ON cars.brand_id = brands.id where cars.id = ?');
$singleCarQuery->execute(array($carId));


$optionList = [
    [
        'id' => 1,
        'libelle' => 'Hour'
    ],
    [
        'id' => 2,
        'libelle' => 'Day'
    ],
    [
        'id' => 3,
        'libelle' => 'Month'
    ],
];

?>


<div class="container main-container">
    <div class="details-box">
        <?php foreach ($singleCarQuery->fetchAll() as $result) { ?>
         <div class="image-data-container">
            <div class="col-md-4">
                <img src="./assets/upload/<?= $result['image'] ?>"
                class="img-fluid rounded-start"
                alt="...">
            </div>
         </div>

                <div class="cars-libelle"><?= $result['name'] ?></div>
                 <?php

                if ($result['available'] == 0) {


                    if ($userLogged) {
                        echo '<button>Book this car now</button>';
                    } else { ?>
                        <div class="alert alert-warning">You need to log in for rent this card <a href="login.php">Go to Login</a> </div>
                <?php }
                    
                }

                ?>

            </div>


            <div class="details-right-side">
                <div class="title">Booking Operation Details</div>

                <p class="cars-description">Testing.</p>

                
            </div>


        <?php } ?>


    </div>


</div>