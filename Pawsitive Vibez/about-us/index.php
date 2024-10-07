<?php
include __DIR__ . '/../utils/common.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawsitive Vibez</title>
    <link rel="stylesheet" href="<?= getLocalURL('public/css/about.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>

<?php include __DIR__ . '/../layouts/navbar.php';?>

<div class="about-section">
    <h1>ABOUT US</h1>
    
    <p>At Pawsitve Vibez, we put our love for pets and thier
        owners into all that we do </p>
    

<button onclick="scrollToSection()">Explore</button>
</div>
<div class="container" id="extra-info">
    <div class="mission-section">
        <div class="image-left">
            <img src="<?= getLocalURL('public/images/about-us/slider-2.jpg') ?>" alt="Left Image">
        </div>
        <div class="text-right">
            <h1>OUR MISSION</h1>
            <p>At Pawsitive Vibez , our mission is
                to provide comprehensive and compassionate care resources for pets and their owners.
                 We are dedicated to enhancing the well-being of pets through expert advice, valuable insights,
                  and high-quality products. Our goal is to foster a loving and informed pet community, 
                  ensuring every pet receives the care and attention they deserve .</p>
            
        </div>
    </div>
    <div class="history-section">
        <div class="text-left">
            <h1>COMPANY HISTORY</h1>
            <p>Founded in 2022, began with a simple goal: to improve the lives of pets and their owners through accessible, expert-driven information and resources. What started as a passionate project by a team of dedicated pet lovers has grown into a trusted source for pet care guidance, products, and community support. Over the years, we’ve expanded our services and content to address a wide range of pet needs, always driven by our commitment to enhancing pet health and happiness..</p>
        </div>
        <div class="image-right">
            <img src="<?= getLocalURL('public/images/about-us/image.png') ?>" alt="Right Image"> 
        </div>
    </div>
</div>


<script>
    function scrollToSection() {
        document.getElementById('extra-info').scrollIntoView({ behavior: 'smooth' });
    }
</script>

<?php include __DIR__ . '/../layouts/footer.php' ?>

</div>
</body>
</html>