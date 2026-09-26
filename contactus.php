<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="assets/fontawesome/css/all.css" />
</head>
<body>
<?php
        include_once "header.php";
    ?>
    <div class="contact-p1">
        <br>
        <br>
        <br><br>
        <br>
        <div class="cp1-left">
            <form action="#" class="cform">
                <input placeholder="Your Name" name="Yname" type="text">
                <input placeholder="Your Email"  name="Yemail" type="email">
                <textarea placeholder="Your Message"  name="Ymessage" id="cmessage"></textarea>
                <button>SHARE YOUR FEEDBACK</button>
            </form>
        </div>

        <div class="cp1-right">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15883.913036825863!2d-0.2150965!3d5.570231799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sgh!4v1728508069595!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
    </div>

    
    <?php
        include_once "footer.php";
    ?>

    <script src="main.js"></script>
</body>
</html>