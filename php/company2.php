<?php
    require 'database.php';



?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Flagshipper</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/index.js" charset="utf-8"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <!--                Bootstrap ------------>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384- KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-  JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>

    <!--            navigation bar ------------->
    <div class="nav-bar">
        <a href="https://laksh-kumar.github.io/flagshipper.com/"><img src="images/logo.png" alt="logo"></a>
        <div class="nav-btn">
            <a href="#">Home</a>
            <a href="#">Contact Us</a>
            <a href="#">About Us</a>
        </div>

        <div class="nav-menu">
            <button type="button" class="button" id="button" onclick="btn()">
                <i class="bi bi-chevron-down"></i>
            </button>
            <div class="nav-list" id="nav-list">
                <ul>
                    <li>Home</li>
                    <li>Contact Us</li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>

    <a href="index1.php"><div class="responsive" >
            <div class="gallery" >
                    <img src="images/<?php echo $phone1["sr."]?>.jpg" alt="image" width="100%;" >
                <div class="desc">
                    <h5><?php echo $phone1["name"]?></h5>
                    <h6>PKR <?php echo $phone1["pkr"]?></h6>
                </div>
            </div>
        </div></a>
        <a href="index2.php"><div class="responsive" >
            <div class="gallery" >
                    <img src="images/<?php echo $phone2["sr."]?>.jpg" alt="image" width="100%;" >
                <div class="desc">
                    <h5><?php echo $phone2["name"]?></h5>
                    <h6>PKR <?php echo $phone2["pkr"]?></h6>
                </div>
            </div>
        </div></a>
        <a href="index3.php"><div class="responsive" >
            <div class="gallery" >
                    <img src="images/<?php echo $phone3["sr."]?>.jpg" alt="image" width="100%;" >
                <div class="desc">
                    <h5><?php echo $phone3["name"]?></h5>
                    <h6>PKR <?php echo $phone3["pkr"]?></h6>
                </div>
            </div>
        </div></a>
        <a href="index4.php"><div class="responsive" >
            <div class="gallery" >
                    <img src="images/<?php echo $phone4["sr."]?>.jpg" alt="image" width="100%;" >
                <div class="desc">
                    <h5><?php echo $phone4["name"]?></h5>
                    <h6>PKR <?php echo $phone4["pkr"]?></h6>
                </div>
            </div>
        </div></a>
        <a href="index5.php"><div class="responsive" >
            <div class="gallery" >
                    <img src="images/<?php echo $phone5["sr."]?>.jpg" alt="image" width="100%;" >
                <div class="desc">
                    <h5><?php echo $phone5["name"]?></h5>
                    <h6>PKR <?php echo $phone5["pkr"]?></h6>
                </div>
            </div>
        </div></a>
        <a href="index6.php"><div class="responsive" >
            <div class="gallery" >
                    <img src="images/<?php echo $phone6["sr."]?>.jpg" alt="image" width="100%;" >
                <div class="desc">
                    <h5><?php echo $phone6["name"]?></h5>
                    <h6>PKR <?php echo $phone6["pkr"]?></h6>
                </div>
            </div>
        </div></a>





    <!--            Footer     -->
    <footer>
        <div class="footer">
            <ul>
                <li>Privacy Policy</li>
                <li>About Us</li>
                <li>Contact Us</li>
                <li>Donate</li>
            </ul>
            <ul>
                <li><i class="bi bi-instagram"></i> Instagram</li>
                <li><i class="bi bi-facebook"></i> Facebook</li>
                <li><i class="bi bi-twitter"></i> Twitter</li>
                <li><i class="bi bi-linkedin"></i> LinkedIn</li>
            </ul>
        </div>
        <div class="footer2">
            <h2>Become a Flagshipper Today!</h2>
            <p>DONATE or VOLUNTEER</p>
        </div>
        <hr>
        <p><i class="bi bi-code"></i> with <i class="bi bi-heart-fill"></i> by Laksh</p>
    </footer>

</html>