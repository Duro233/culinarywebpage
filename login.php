<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loggin</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css" />
</head>
<body class="hpage1">
<?php
    include_once "header.php";
?>

<br><br><br><br>
<br>
<div class="hpage1">

<div class="bod-overlay bodov">
       <div class="forrm-contain">
      
       <div class="forrm">
          
            <form action="includes/login.inc.php" method="POST">
              
                <input name="username"  type="text" placeholder="Username">
                <input name="pwd" type="password" placeholder="Password">
                <div class="f-toggle">
                <button class="lockd" name="submit" value="SUBMIT">SUBMIT</button>
                <a style="background-color:#fff;width: 30%;padding:10px;color:black" href="index.php">SIGNUP</a>
            </div>
            </form>

            <?php
            
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinputs"){
                        echo'<p style="color:red;">Please Fill All Fields!</p>';
                    }


                    if($_GET["error"] == "wronglogin"){
                        echo'<p style="color:red;"> </p>';

                       
                       

                        if(isset($_SESSION["attempts"]) && $_SESSION["attempts"] > 1 ){
                             $_SESSION["attempts"] -- ;
                            

                            echo'<p style="color:red;">You have '.$_SESSION["attempts"].' trials left .</p>';

                            
                        }
                        else if(isset($_SESSION["attempts"]) && $_SESSION["attempts"] == 1 ){

                            echo'<p style="color:red;">locked for 3 mins</p>';

                            echo'
                                <script>
                                    let lock = document.querySelector(".lockd");
                                   lock.setAttribute("disabled", "disabled");
                                    lock.style.color = "gray";

                                    setTimeout(function() {
                                      lock.removeAttribute("disabled");
                                    lock.style.color = "white";
                                    }, 180000)


                                </script>
                            ';

                            unset($_SESSION["attempts"]);

                        }

                        
                        

                    }

                    
                }
            ?>
        </div>
        <a style="text-decoration:none;font-size:18px;color:#fff;background:black;" href="tmac.php">Terms & Condition</a>
       </div>
    </div>



    <div class="head-overflow">
    
      <br><br><br><br><br><br>
      <h1>For The Love Of Delicious FOOD</h1>
     
    </div>
  </div>
    
    
    <?php
    include_once"footer.php";
?>

</body>
</html>