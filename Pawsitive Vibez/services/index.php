<?php 

include __DIR__ . '/../utils/common.php';

?>
<!DOCTYPE html>
<html lan="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport " content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <link rel="stylesheet" href="<?= getLocalURL('public/css/services.css') ?>">
        <title>Services</title>
    </head>
    <body>

<?php
  include __DIR__ . '/../layouts/navbar.php';
?>

        <div class="container">
            <h1>Our Services</h1>
            <h6>We can't wait to see you here!!</h6>
                <div class="row">
                    <div class="service">
                    <i class="fa-solid fa-scissors"></i>
                    <h2>Haircut</h2>
                    <p>Experience professional care and precision in every pet haircut,ensuring your furry friend looks their best.
                       <br></br>
                       80 mins
                       <br></br>
                        Rs.2500
                    </p>
                </div>


                <div class="service">
                    <i class="fa-solid fa-bath"></i>
                    <h2>Teeth Cleaning</h2>
                    <p>Indulge your pet with refreshing baths that cleanse and rejuvenate their coat and skin
                       <br></br>
                       60min
                       <br></br>
                       Rs.1000 
                    </p>
                </div>


            

                <div class="service">
                    <i class="fa-solid fa-paw"></i>
                    <h2>Nail Trimming</h2>
                    <p>Trust our skilled groomers to trim nails efficiently, promoting better paw health and mobility for your beloved companion.</p><br></br>
                       60 min
                       <br></br>
                       Rs.1000 
                    </p>
                </div>

                <div class="service">
                    <i class="fa-solid fa-person-walking"></i>
                    <h2>Pet Walking</h2>
                    <p>Offer your pet the joy of outdoor adventures with our professional pet walking services.</p>
                    <br></br>
                    60 mins
                       <br></br>
                       Rs.500
                    </p>
                </div>


                <div class="service">
                    <i class="fa-solid fa-shield-dog"></i>
                    <h2>Puppy Special</h2>
                    <p>Provide essential grooming services for small puppies, including gentle baths with puppy-safe shampoos, careful brushing to maintain a healthy coat, and meticulous nail trimming for comfort and mobility.</p>
                       <br></br>
                        120 mins
                       <br></br>
                       Rs.7000 
                    </p>
                </div>


                <div class="service">
                    <i class="fa-solid fa-shield-cat"></i>
                    <h2>Kitten Special</h2>
                    <p>Discover our Kittens Special designed to cater specifically to the needs of young felines, featuring gentle baths, careful trims, and essential nail care.</p>
                       <br></br>
                       120 mins
                       <br></br>
                       Rs.5000
                    </p>
                </div>



                <div class="service">
                    <i class="fa-solid fa-dog"></i>
                    <h2>Full Doggo</h2>
                    <p>Treat your doggo to our comprehensive Full Doggo package, encompassing luxurious baths, stylish haircuts, meticulous nail trimming, ear cleaning, and finishing spritz.</p>


                       <br></br>
                      120 min
                       <br></br>
                       Rs.5000 
                    </p>
                </div>



                <div class="service">
                    <i class="fa-solid fa-cat"></i>
                    <h2>Full Cat</h2>
                    <p>Pamper your feline with our Full Cat grooming package,
                         featuring luxurious baths, stylish haircuts or thorough brushing,
                          meticulous nail trimming, ear cleaning, and a soothing finishing touch—all 
                          tailored by experienced groomers in a serene environment for your cat's comfort and well-being.</p>
                       <br></br>
                       120 min
                       <br></br>
                       Rs.7000 
                    </p>
                </div>
            </div>
            
    <div>
        
        
            <h3>See All Our Glamorous Customers</h3>
<div class="gallery-wrap">
    <img src="<?= getLocalURL('public/images/services/back.png') ?>" id="backBtn">
    
    <div class="gallery">
        <div>
            <span><img src ="<?= getLocalURL('public/images/services/OIP (1).jpg') ?>"></span>
            <span><img src ="<?= getLocalURL('public/images/services/OIP (2).jpg') ?>"></span>
            <span><img src ="<?= getLocalURL('public/images/services/OIP.jpg') ?>"></span>
            
             </div>
             <div>
                <span><img src ="<?= getLocalURL('public/images/services/download.jpg') ?>"></span>
                <span><img src ="<?= getLocalURL('public/images/services/shutterstock_499979860.jpg') ?>"></span>
                <span><img src ="<?= getLocalURL('public/images/services/we-love-pet-shop-noida-sector-46-noida-pet-food-dealers-l8q8lp8c6y.avif') ?>"></span>
                
                 </div>
                 <div>
                   
                    <span><img src ="<?= getLocalURL('public/images/services/OIP (3).jpg') ?>"></span>
                    <span><img src ="<?= getLocalURL('public/images/services/Pet-Stylist-Sharon.jpeg') ?>"></span>
                    
                     </div>
    </div>
    <img src="<?= getLocalURL('public/images/services/next.png') ?>" id="nextbtn">
</div>   

             <script>
                let scrollContainer =document.querySelector(".gallery");
                let backBtn=document.getElementById("backBtn");
                let nextbtn=document.getElementById("nextbtn");
                scrollContainer.addEventListener("wheel",(evt) => {
                    evt.preventDefault();
                    scrollContainer.scrollLeft += evt.deltaY;
                    scrollContainer.style.scrollBehavior="auto";
                });
                nextbtn.addEventListener("click",()=>{
                    scrollContainer.style.scrollBehavior="smooth";
                    scrollContainer.scrollLeft  +=900;
                });
                backBtn.addEventListener("click",()=>{
                    scrollContainer.style.scrollBehavior="smooth";
                    scrollContainer.scrollLeft  -=900;
                });
               
              </script>
                
            </div>     

            <?php include __DIR__ . '/../layouts/footer.php';?>
          </div>
          
          
        
    </body>
</html>
