<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Foodfusion</title>
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="assets/fontawesome/css/all.css" />
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bungee+Tint&display=swap"
      rel="stylesheet"
    /> -->
</head>

<body style="position:relative;">

<?php
include_once "header.php";

?>

<?php
if(isset($_SESSION["userid"])){
echo"as";
}else{
  echo '
    <div id="log-form" class="log-form">
<div class="bod-overlay">
        <div id="clss" class="clse">
        <h2 >x</h2>
        </div>

       <div class="forrm-contain">
       
       <div class="forrm">
           
            <form action="includes/signup.inc.php" method="POST">
                <input name="fullname" type="text" placeholder="Full Name">
                <input name="email" type="email" placeholder="Email">
                <input name="username" type="text" placeholder="Username">
                <input name="pwd" type="password" placeholder="Password">
                <input name="pwdrepeat" type="password" placeholder="Confirm Password">
                
                 <div class="f-toggle">
                 <button name="submit" value="SUBMIT">SUBMIT</button>
                <a style="color:#fff; outline: none;
  padding: 10px 20px;
  border: 1px solid #fff;
  background-color: rgb(255, 255, 255);
  color: #000000;
  cursor: pointer;
  width: 30%;" href="login.php">LOGIN</a>
            </div>
            </form>
        </div>
       
       </div>
      
    </div>
</div>


  ';
}

?>

  <div class="hpage1">
    <div class="head-overflow">
      <p></p>
      <br><br><br><br><br><br>
      <h1>A Delicious Infatuation</h1>
      <p>Join us with your family for an unforgettable dining experience!</p>
      <br>
    </div>
  </div>

  <div class="hpage2">
    <div class="pl">
      <img src="imgs/service-2.jpg" alt="">
    </div>

    <div class="pr">
      <h1>Taste the World, One Bite at a Time</h1>
      <br>
      <p>Transforming the way we experience food, Food Fusion sparks a global culinary journey, bridging cultures and communities through the shared passion of flavor!</p>
      <br>
      <br>
    </div>
  </div>

  <div class="hpage3">
    <div class="p3-title">
      
    </div>
    <div class="grd1">
      <div class="img-div">
        <img src="imgs/service-1.jpg" alt="s1" class="img2">
        <h2>Burger</h2>
      </div>
    </div>

    <div class="grd1">
      <div class="img-div">
        <img src="imgs/service-2.jpg" alt="s1" class="img2">
        <h2>Food Salad</h2>
      </div>
    </div>

    <div class="grd1">
      <div class="img-div">
        <img src="imgs/service-3.jpg" alt="s1" class="img2">
        <h2>Ice Scream</h2>
      </div>
    </div>
  </div>

  <!-- <div class="cookiess">
    <div class="coot">
      <h1>Cookies</h1>
      <p>
      By using our website, you agree to our use of cookies. We use cookies to personalize your experience, analyze traffic, and provide additional features. To learn more about our cookie policy, click here. By clicking "Accept" or continuing to use our site, you consent to our use of cookies.
      </div>
      </p>

    <div class="c-btns">
      <div class="form">
        <button class="clss">Accept Cookies</button>
      </div>
    </div>
  </div> -->

  <?php
    include "footer.php";
  ?>

  <script src="main.js"></script>
  <script>
    window.addEventListener("load", ()=>{
      setTimeout(()=>{
        let LoginForm = document.querySelector("#log-form")
        LoginForm.style.display = "flex"
        
      },1000)
    })
  </script>
</body>

</html>