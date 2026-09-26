<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
</head>

<body>
    <?php
    include_once "header.php";
    ?>

    <div class="rec-main-div">
        <div class="rec-search-div">
            <div class="searchh-rec">
                <input onkeyup="cook()" id="srec" placeholder="Search by Cusine type, name" type="text">
            </div>
            
        </div>


        <div id="rdp" class="rec-food-div"></div>

    </div>
    <?php
    include_once "footer.php";
    ?>

    <script src="recipedata.js"></script>
    <script src="recipe.js"></script>
    <script src="main.js"></script>
</body>

</html>