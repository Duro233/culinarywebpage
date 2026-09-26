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

<body>

  <?php
  include_once "header.php";
  require_once "includes/dbh.inc.php";
  ?>

  <?php
  if (empty($_SESSION["userid"])) {
    echo ("<br><br><br><br><br><h1>login or register to view or create Post</h1>");
    echo '<script src="main.js"></script>';
    exit();
  }

  ?>


  <div class="cbookmd">
    <div class="posting-section">
      <form action="cookbook.inc.php" method="post"
        enctype="multipart/form-data" class="pos-formm">
        <div class="file-d">
          <!-- <input type="file" name="image" id="file"> -->
          <!-- <div class="file-overlay">
            <img src="imgs/camera.jpg" alt="camera">
          </div> -->
        </div>
        <input placeholder="Post Text goes here" type="text" name="posttitle" id="pt">
        <button name="subtn" id="pst-btn" type="submit">Add Post</button>
      </form>
    </div>
    <br><br><br><br><br><br><br><br>

    <div class="showpost-c">


      <?php
      $resultData = mysqli_query($conn, "select * from post where rpid is null");
      $postData  = mysqli_fetch_all($resultData, MYSQLI_ASSOC);

     



      foreach ($postData as $value) {







        echo '
        
          <div class="post-comment">
      <div class="acc-holder">
        <div class="user-det">
          <h4>' . $value["username"] . '</h4>
        </div>
      </div>

      <div class="pst-div">
        <p>' . $value["post_title"] . '</p>
      </div>
      <div class="com-box">
      
    

      <div class="type-comm">
      <form action="includes/processComment.inc.php" method="post" class="replyy">
      <textarea placeholder="Type comment here" name="comment"></textarea>
      <input type="text" name="posid" value="' . $value["id"] . '" hidden  >
      <input type="text" name="userid" value="' . $_SESSION["userid"] . '" hidden >
      <input type="text" name="username" value="' . $_SESSION["username"] . '" hidden  >
      <button type="submit" name="sub-comm-btn"><i class="fas fa-paper-plane"></i></button>
      </form>
      </div>
      </div>
    </div>';
      }
      ?><br>
    </div>
  </div>



  <script src="main.js"></script>
</body>

</html>