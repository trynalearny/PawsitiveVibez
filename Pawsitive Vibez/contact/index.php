<?php
  include __DIR__ . '/../utils/common.php'
?>

<!Doctype html>
<html lang="en">
  <head>
    <title>PawsitiveVibez</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="<?= getLocalURL('public/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= getLocalURL('public/css/animate.css') ?>">
    <link rel="stylesheet" href="<?= getLocalURL('public/css/owl.carousel.min.css') ?>">

    <link rel="stylesheet" href="<?= getLocalURL('public/fonts/ionicons/css/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?= getLocalURL('public/fonts/fontawesome/css/font-awesome.min.css') ?>">

    <link rel="stylesheet" href="<?= getLocalURL('public/fonts/flaticon/font/flaticon.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?= getLocalURL('public/css/style.css') ?>">
  </head>
  <body>
    
<?php include __DIR__ . '/../layouts/navbar.php'; ?>
  
    <!-- END header -->
    
    <section class="home-slider inner-page owl-carousel">
      <div class="slider-item" style="background-color: #86c3db; height: 100vh; display: flex; align-items: center; justify-content: center;">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Contact Us</h1>
              <p class="mb-5">Call us, contact our team via the form below, or book your pet's appointment directly on the website.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 order-2">
            <form action="https://api.web3forms.com/submit" method="post">

              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="hidden" name="access_key" value="782231a4-f9ae-4b0d-af4f-454318f9d0d9">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control "pattern="[A-Za-z\s]+" required><br>
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Phone</label>
                  <input type="tel" id="phone" class="form-control " pattern="\+91\d{10}"  placeholder="+91XXXXXXXXXX"  required><br>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="example@example.com" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input  type="submit" value="Send Message" class="btn btn-primary" required >
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6 order-2 mb-5">
            <div class="row justify-content-right">
              <div class="col-md-8 mx-auto contact-form-contact-info">
                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5"></span>
                  <span>38 Station Road, Mumbai, India</span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5"></span>
                  <span>+91 8722362923</span>
                </p>
                
                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5"></span>
                  <span>pawsitivevibez@gmail.com</span>
                </p>

                <div class="hours">
                  <p>Store Hours</p>
                  <span><ion-icon name="timer-outline"></ion-icon></span>
                  <select class="dropdown" id="hoursDropdown">
                      <option disabled selected>Select a day</option>
                      <option value="mon">Monday: 10 AM - 10 PM</option>
                      <option value="tue">Tuesday: 10 AM - 10 PM</option>
                      <option value="wed">Wednesday: 10 AM - 10 PM</option>
                      <option value="thu">Thursday: 10 AM - 10 PM</option>
                      <option value="fri">Friday: 10 AM - 10 PM</option>
                      <option value="sat">Saturday: 10 AM - 10 PM</option>
                      <option value="sun">Sunday: Closed</option>
                  </select>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <div class="map-container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2925.717973986505!2d-80.30847922399452!3d42.836570871152624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882c4d93b17c8897%3A0x3bfb015dab588db5!2sPawsitive%20vibez%20pet%20grooming!5e0!3m2!1sen!2sin!4v1725423555047!5m2!1sen!2sin" 
            width="1600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
            
        </iframe>
      </div>

    

<?php include __DIR__ . '/../layouts/footer.php'; ?>
      
    <script src="<?= getLocalURL('public/js/jquery-3.2.1.min.js')?>"></script>
    <script src="<?= getLocalURL('public/js/popper.min.js')?>"></script>
    <script src="<?= getLocalURL('public/js/bootstrap.min.js')?>"></script>
    <script src="<?= getLocalURL('public/js/owl.carousel.min.js')?>"></script>
    <script src="<?= getLocalURL('public/js/jquery.waypoints.min.js')?>"></script>
    <script src="<?= getLocalURL('public/js/main.js')?>"></script>
  </body>
</html>
