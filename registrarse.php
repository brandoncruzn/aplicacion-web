<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>registrarse</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <header class="header">

      <section class="flex">

        <a href="home.html" class="logo">APP GUSTO </a>

       <nav class="navbar">
       </nav>

       <div class="icons">
            <div id="user-btn" class="fas fa-user"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
       </div>

         <div class="profile">
            <div class="flex">
              <a href="login.html" class="btn"> login </a>
              <a href="register.html" class="delete-btn">register</a>
         </div>

      </section>

   </header>

   <section class="form-container">
      <form action="register.php" method="post">
       <h3>Registrarse</h3>
         <input type="text" required maxlength="20" name="name" placeholder="Enter your name" class="box">
         <input type="email" required maxlength="50" name="email" placeholder="Enter your email" class="box">
         <input type="number" min="0" max="9999999999" placeholder="Enter your number" required class="box" name="number">
         <input type="password" required maxlength="20" name="pass" placeholder="Enter your password" class="box">
         <input type="password" required maxlength="20" name="cpass" placeholder="Confirm your password" class="box">
         <input type="submit" value="Registrarse" class="btn" name="register">
         <p>ya tienes una cuenta? <a href="login.html">Iniciar sesion</a></p>
         </form>
      
   </section>

   <script src="js/script.js"></script>

   </section>
  


   <footer class="footer">

      <section class="box-container">

         <div class="box">
           <img src="images/email-icon.png" alt="">
          <h3>our email</h3>
          <a href="mailto:shaikhanas@gmail.com">branjon.09@gmail.com</a>
       </div>

       <div class="box">
          <img src="images/clock-icon.png" alt="">
          <h3>opening hours</h3>
            <p>07am to 10pm </p>
       </div>

        <div class="box">
          <img src="images/map-icon.png" alt="">
            <h3>our address</h3>
          <a href="https://www.google.com/maps">colombia </a>
        </div>

       <div class="box">
            <img src="images/phone-icon.png" alt="">
          <h3>our number</h3>
           <a href="tel:1234567890">3143957905</a>
        </div>

    </section>

    <div class="credit">&copy; copyright @ 2022 by <span>web app gusto</span> | all rights reserved!</div>

   </footer>

   <div class="loader">
      <img src="images/loader.gif" alt="">
   </div>

      <script src="js/script.js"></script>

   <?php
      include(registrar.php);
   ?>

</body>
</html>