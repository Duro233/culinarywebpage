<?php
session_start();

if (isset($_POST["subtn"])) {


    // $file = $_FILES["image"];

    // $fileName = $file["name"];
    // $fileType = $file["type"];
    // $fileTempname = $file["tmp_name"];
    // $fileError = $file["error"];
    // $fileSize = $file["size"];

    $posttitle = $_POST["posttitle"];
    $useridd = $_SESSION["userid"];
    $usernam = $_SESSION["username"];
    

    if(empty($posttitle)){
        echo"<div style='width:94vw;height:90vh;background-color:trnsparent;margin:0;display:flex;align-items:center;justify-content:center;flex-direction:column'><br><h1 style='font-family:arial'>Title can not be empty!</h1>
        <br>
        <a href='cookbook.php'>Click To Go Back</a>
        </div>";
    }


    // $fileExt = explode(".", $fileName);
    // $fileActExt = strtolower(end($fileExt));



    // $allowed = array("jpg", "jpeg", "png", "pdf");

    
                require_once "includes/dbh.inc.php";

                $sql = "insert into post(userid, post_title, content,username) values(?,?,?,?);";

                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "StmtFaild";
                }

                mysqli_stmt_bind_param($stmt, "ssss", $useridd, $posttitle,$fileNewname,$usernam);
                mysqli_stmt_execute($stmt);
                header("location:cookbook.php");
}

               
