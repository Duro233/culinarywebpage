<?php
session_start();
?>


<nav class="nav">
    <div class="logo">
      <div class="logo-text">
        <h2>FOOD</h2>
        <p>fusion</p>
      </div>
    </div>

    <ul class="nav-links">
      <li >
        <a  href="index.php">Home</a>
      </li>
      <li><a href="about.php">About us</a></li>
      <li><a href="cookbook.php">CookBook</a></li>
      <li><a href="recipe.php">REcipe</a></li>
      <li><a href="culinary.php">Culinary</a></li>
      <li><a href="contactus.php">contact</a></li>
      <li><a href="educational.php">Edu.Resources</a></li>
      <?php
      if(isset($_SESSION["userid"])){
        echo'
        <a href="logout.inc.php"><button>Logout</button></a>
        ';
      }

      else{
        echo'
        <a href="login.php"><button>Login/Rgister</button></a>
        ';
      }
      ?>
    </ul>
    <div class="bars">
      <i class="fas fa-bars"></i>
    </div>

  </nav>

  <div class="responsive-nav">
    <li><a  href="index.php">Home</a></li>
    <li><a href="about.php">About us</a></li>
    <li><a href="cookbook.php">CookBook</a></li>
    <li><a href="recipe.php">REcipe</a></li>
    <li><a href="culinary.php">Culinary</a></li>
    <li><a href="contactus.php">contact</a></li>
    <li><a href="educational.php">Edu.Resources</a></li>
    <?php
    if(isset($_SESSION["userid"])){
        echo'
        <a href="logout.inc.php"><button>Logout</button></a>
        ';
      }

      else{
        echo'
        <a href="login.php"><button>Login</button></a>
        ';
      }
      ?>
  </div>