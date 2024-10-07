<?php 
  include __DIR__ . '/../utils/common.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawsitive Vibez</title>
    <link rel="stylesheet" href="<?= getLocalURL('public/css/styles.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>

<?php include __DIR__ . '/../layouts/navbar.php'; ?>

<div class="main">
    <div class="main__contianer">
        <div class ="main__content">
            <h1>The Best Pet <br>
               Groomers In Town</h1>
            <h2>For a Pawfect Look & Feel</h2>
            </div>
        <div class ="main__img--contianer">
            <img src="<?= getLocalURL('public/images/home/shutterstock_184908566 copy.webp') ?>" alt="pic" id="maine__img"/>
        </div>
    </div>
</div>
<div class="page">
    <div class="page__contianer">
        <div class="page__content">
            <h1>Your Pet Deserved </h1>
            <h1>To Be Pampered</h1>
            <div>
            <i class="fa-solid fa-bottle-droplet"></i><p>Bath or shower</p>
            <i class="fa-solid fa-arrows-to-eye"></i><p>Hands-On Pet Assessment</p>
            <i class="fa-solid fa-dog"></i><p>Pet Sitting</p>
        </div>
            <button class="page__btn"><a href="<?= getLocalURL('appointment/') ?>">Book An Appointment Now</a></button>
        
        </div>
    </div>
</div>
<div class="contianer swiper ">
    <h1>See What our Happy Clients Says</h1>
    <div class="slider-wrapper">
        <div class="card-list swiper-wrapper">
             <div class="card-item swiper-slide">
                <h2 class="user-name">Vivek Joshi</h2>
                <p class="user-prof">A Dog Owner<br><br>
                    "Thank you .Had a great experience with pawsitive Vibez<br>
                    Izzy (my dog) had a amazing cut and feel fully fresh and clean."
                </p> 
            </div>
            <div class="card-item swiper-slide">
             <h2 class="user-name">Rina Khan</h2>
                <p class="user-prof">A cat Owner<br><br>
                    "Wonderful experience statisifed witht billies haircut and pampering".
                </p> 
             </div>
             <div class="card-item swiper-slide">
                <h2 class="user-name">Sushil Singh</h2>
                   <p class="user-prof">A Dog Owner<br><br>
                     "Found very kind and talented staff loved it".
                   </p> 
                </div>
                <div class="card-item swiper-slide">
                    <h2 class="user-name">Wicky george</h2>
                       <p class="user-prof">A Dog Owner<br><br>
                           "Thank you pawsitive vibes truly affordable and must visit for pet owners".
                       </p> 
                    </div>
                    <div class="card-item swiper-slide">
                        <h2 class="user-name">Shivani patil</h2>
                           <p class="user-prof">A cat Owner<br><br>
                               "Really liked the services and overall hospitality of the shop".
                           </p> 
                        </div>
        </div>
        <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

    </div>
</div>

<?php include __DIR__ . '/../layouts/footer.php'; ?>

<script src="<?= getLocalURL('public/js/app.js') ?>"></script>


</body>
</html>
