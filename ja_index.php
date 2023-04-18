<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "divyam";
$dbName = "skin";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if(isset($_POST['submit'])){
   $name = htmlentities($_POST['name']);
   $email = htmlentities($_POST['email']);
   $number = htmlentities($_POST['number']);
   $date = htmlentities($_POST['date']);
   $age = htmlentities($_POST['age']);
   $gender = htmlentities($_POST['gender']);
   $skin_type = htmlentities($_POST['skin_type']);
   $regularity = htmlentities($_POST['regularity']);
   $fragrance = htmlentities($_POST['fragrance']);


   $insert = mysqli_prepare($conn, "INSERT INTO `skincare` (name, email, gender, age, skin_type, regularity, fragrance, number, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)") or die(mysqli_error($conn));
mysqli_stmt_bind_param($insert, 'sssisssis', $name, $email, $gender, $age, $skin_type, $regularity, $fragrance, $number, $date);
mysqli_stmt_execute($insert) or die(mysqli_error($conn));

   //$insert = mysqli_query($conn, "INSERT INTO `skin` VALUES($name,$email,$gender,$age,$skin_type,$regularity,$fragrance,$number,$date)") or die('query failed');
   $resultCheck = mysqli_num_rows($insert);

   if($resultCheck>0){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Dermatologist Website Design Tutorial</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">Skin<span>Care.</span></a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
         </nav>

         <a href="#contact" class="link-btn">make appointment</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>Rejuvenate your skin</h3>
            <p id="hero-paragraph">The skin is the largest organ in our body, are you still ignoring yours?</p>
            <a href="#contact" class="link-btn">make appointment</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>Your skin's best friend <3</h3>
            <p>Carefully created formulas after years of research by experienced dermatologists. We offer multiple skincare services and also address your skin concerns.</p>
            <a href="#contact" class="link-btn">make appointment</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

      <div class="box">
         <h3>Consultation</h3>
         <p>Consultant Dermatologists are medical physicians with the highest training and expertise in this field.</p>
      </div>

      <div class="box">
         <h3>Chemical Peel</h3>
         <p>A chemical peel is a procedure in which a chemical solution is applied to the skin to remove the top layers. The skin that grows back is smoother.</p>
      </div>

      <div class="box">
         <h3>Microneedling</h3>
         <p>Thin needles are used to make tiny holes in the top layer of your skin. The damage helps stimulate your skin's healing process, so it produces more collagen and elastin.</p>
      </div>

      <div class="box">
         <h3>Laser Hair Reduction</h3>
         <p>A laser emits a light that is absorbed by the pigment (melanin) in the hair. The light energy is converted to heat, which damages the tube-shaped sacs within the skin (hair follicles) that produce hairs.</p>
      </div>

      <div class="box">
         <h3>Botox</h3>
         <p>Botox shots block certain chemical signals from nerves that cause muscles to contract. The most common use of these injections is to relax the facial muscles that cause frown lines and other facial wrinkles.</p>
      </div>

      <div class="box">
         <h3>Hydrafacial</h3>
         <p>A HydraFacial includes 4 facial treatments rolled into one session: cleansing and exfoliating, a gentle chemical peel, vacuum suction extraction, and a hydrating serum</p>
      </div>

   </div>

</section>

<!-- services section ends -->


<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> satisfied clients </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>I had the worst acne since I was a teenager. Just 5 consultations with the doc and my life long problem was solved! </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>The best hydrafacials, always making me feel fresh and young! The sweetest staff and best customer service.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Martha</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>As a model, facing the camera everyday makes you very consicous about your skin. The best treatments without harsh chemicals, I feel so confident now!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Dave</h3>
         <span>satisfied client</span>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">make appointment</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your age :</span>
      <input type="text" name="age" placeholder="enter your age" class="box" required>
      <span>your gender :</span>
      <input type="text" name="gender" placeholder="enter your gender" class="box" required>
      <span>your skin type:</span>
      <input type="text" name="skin_type" placeholder="enter your skin type" class="box" required>
      <span>how regular are you with skincare: </span>
      <input type="text" name="regularity" placeholder="regularity" class="box" required>
      <span>are you comfortable with fragrance in your products?:</span>
      <br>
      <input type="radio" name="fragrance" placeholder="No" value = "No">
      <label for="no" style="font-size: 15px; margin: 10px;">No</label>
      <input type="radio" name="fragrance" placeholder="Yes" value = "Yes">
      <label for="yes" style="font-size: 15px; margin: 10px;">Yes</label>
      <input type="radio" name="fragrance" placeholder="Don't mind" value = "Don't mind">
      <label for="dont_mind" style="font-size: 15px;">Don't Mind</label>
      <br><br> 
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="submit" name="submit" class="link-btn">
   </form>  

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+123-456-7890</p>
         <p>+111-222-3333</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>gurgaon, india - 400104</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>10:00am to 7:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>xyz@gmail.com</p>
         <p>abc@gmail.com</p>
      </div>

   </div>

</section>

<!-- footer section ends -->










<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>