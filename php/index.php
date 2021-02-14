<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title><?php echo $phone["name"];?> | Flagshipper</title>
    <link rel="stylesheet" href="style.css">
    <script src="index.js" charset="utf-8"></script>
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
    <img src="images/<?php echo $phone["sr."];?>.jpg" alt="image" class="phonePic">
    <h1 class="name"><?php echo $phone["name"];?></h1>

    <div class="specs">
        <table class="table" style="width: 90%; margin-left: 5%; border-top: 1px solid black; margin-top: 0px;">
            <h3 class="features">Basic Information</h3>
            <tr>
                <th>Name:</th>
                <td><?php echo $phone['name'];?></td>
            </tr>
            <tr>
                <th>OS:</th>
                <td><?php echo $phone['os'];?></td>
            </tr>
            <tr>
                <th>UI:</th>
                <td><?php echo $phone['ui'];?></td>
            </tr>


        </table>

        <table class="table" style="width: 90%; margin-left: 5%; border-top: 1px solid black; margin-top: 0px;">
            <h3 class="features">Performance</h3>
            <tr>
                <th>Chipset:</th>
                <td><?php echo $phone['chipset'];?></td>
            </tr>
            <tr>
                <th>RAM:</th>
                <td><?php echo $phone['ram'];?>GB</td>
            </tr>
            <tr>
                <th>Memory:</th>
                <td><?php echo $phone['rom'];?></td>
            </tr>
        </table>

        <table class="table" style="width: 90%; margin-left: 5%; border-top: 1px solid black; margin-top: 0px;">
            <h3 class="features">Display</h3>
            <tr>
                <th>Size:</th>
                <td><?php echo $phone['size'];?></td>
            </tr>
            <tr>
                <th>Technology:</th>
                <td><?php echo $phone['technology'];?></td>
            </tr>
            <tr>
                <th>Refresh Rate:</th>
                <td><?php echo $phone['hertz'];?>Hz</td>
            </tr>
        </table>


        <table class="table" style="width: 90%; margin-left: 5%; border-top: 1px solid black; margin-top: 0px;">
            <h3 class="features">Camera</h3>
            <tr>
                <th>Main Camera:</th>
                <td><?php echo $phone['mainCam'];?></td>
            </tr>
            <tr>
                <th>Front:</th>
                <td><?php echo $phone['frontCam'];?></td>
            </tr>

        </table>

        <table class="table" style="width: 90%; margin-left: 5%; border-top: 1px solid black; margin-top: 0px;">
            <h3 class="features">Battery</h3>
            <tr>
                <th>Size:</th>
                <td><?php echo $phone['battery'];?>mAh</td>
            </tr>
            <tr>
                <th>Technology:</th>
                <td><?php echo $phone['charging'];?></td>
            </tr>
        </table>

        <table class="table" style="width: 90%; margin-left: 5%; border-top: 1px solid black; margin-top: 0px;">
            <h3 class="features">Built</h3>
            <tr>
                <th>Front:</th>
                <td><?php echo $phone['front'];?></td>
            </tr>
            <tr>
                <th>Back:</th>
                <td><?php echo $phone['back'];?></td>
            </tr>
            <tr>
                <th>Frame:</th>
                <td><?php echo $phone['frame'];?></td>
            </tr>
        </table>

        <table class="table" style="width: 90%; margin-left: 5%; border-top: 1px solid black; margin-top: 0px;">
            <h3 class="features">Price</h3>
            <tr>
                <th>Price(in USD):</th>
                <td>$<?php echo $phone['usd'];?></td>
            </tr>
            <tr>
                <th>Price(in PKR):</th>
                <td>Rs. <?php echo $phone['pkr'];?></td>
            </tr>

        </table>
    </div>
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
</body>

</html>