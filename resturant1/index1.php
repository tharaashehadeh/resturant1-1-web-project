<?php session_start(); ?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fayrouz Restaurant</title>
    <link rel = "icon" href="images/f1.png">
    <link rel="stylesheet"href="projectStyle.css">
    <link href=<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include  "header.php"; ?>

<div class="header">
    <div class="container" >
        <div class="navbar">
            <!--    <div class=logo">
                    <img src="images/f1.png" width="180px" height="90px" >
            </div>
                <nav>
                    <ul>
                        <li>  <a href="">Home</a></li>
                        <li>  <a href="">Menu</a></li>
                        <li>  <a href="">About</a></li>
                        <li>  <a href="">Contact Us</a></li>
                        <li>  <a href="">Account</a></li>
                    </ul>
                </nav>
                <img src="images/cartt.png" width="30px" height="30px">
            </div>-->

            <div class="row">
                <div class="col-2">
                    <h1>Fayrouz Restaurant</h1>
                    <p>WELCOME TO OUR RESTURANT</p>
                    <a href="menu.php" class="btn">Take Order &#10170</a>
                </div>
                <div class="col-2">
                    <img src="images/back.jpg" >
                </div>

            </div>
        </div>
    </div>-

    <div class="categories">
        <div class="small-container">
            <div class ="row">
                <div class ="col-3">
                    <img src="images/baneh%20chicken.jpg" height="310px">
                </div>
                <div class ="col-3">
                    <img src="images/bancake%20with%20honey.jpg" height="310px">
                </div>
                <div class ="col-3">
                    <img src="images/strawberry%20smoothe.jpg" height="310px">
                </div>
            </div>
        </div>
    </div>
    <div class="small-container">
        <h2 class="title"> Special Menu</h2>

        <div class="row">
            <div class="col-4">
                <img src="images/sea%20food.jpg" height="240" >
                <h4>Sea Food</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$70.00</p>
            </div>
            <div class="col-4">
                <img src="images/been%20nareen.jpg" height="240">
                <h4>Been Narein</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$20.00</p>
            </div>
            <div class="col-4">
                <img src="images/Shrimp%20Casserole.jpg"height="240">
                <h4>Shrimp Soup</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$25.00</p>
            </div>
            <div class="col-4">
                <img src="images/mangoStrawbRoseberry.PNG"height="240">
                <h4>Mango,strawberry and roseberry juice </h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$13.00</p>
            </div>

        </div>
        <!--..................................................................................................-->
        <h2 class="title">Latest Menu</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/potato%20ball.jpg"height="240">
                <h4>potato with cheese</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$22.00</p>
            </div>
            <div class="col-4">
                <img src="images/lotus%20tart.jpg"height="240">
                <h4>Lotus Tart</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$21.00</p>
            </div>
            <div class="col-4">
                <img src="images/um%20ali.jpg"height="240">
                <h4>Um ALi</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$30.00</p>
            </div>
            <div class="col-4">
                <img src="images/nodels.jpg"height="240">
                <h4>Chinees Nodels</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$40.00</p>
            </div>
            <div class="col-4">
                <img src="images/balah%20alsham.jpg"height="240">
                <h4>Balah El Sham</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$23.00</p>
            </div>
            <div class="col-4">
                <img src="images/yalanje.jpg"height="240">
                <h4>Yalanji</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$28.00</p>
            </div>
            <div class="col-4">
                <img src="images/spaghette%20with%20meat.jpg"height="240">
                <h4>Spaghetti </h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$30.00</p>
            </div>
            <div class="col-4">
                <img src="images/trilicha.jpg"height="240">
                <h4>Tralicha Cake</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>$32.00</p>
            </div>

        </div>

    </div>
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/turkish%20manti.jpg" class="offer-img">
                </div>
                <div class="col-2">
                    <p>New Turkish meal available</p>
                    <h1>Manti</h1>
                    <small>
                        It is a dough stuffed with lamb or minced meat with onions and black pepper. It is placed in a special saucepan to be steamed. Manto or manti is eaten with vinegar and hot yaglazy sauce.
                    </small>
                    <p></p>
                    <a href="menu.php" class="btn"> Order Now &#10170</a>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------------------------------->
    <section class="team-section sec-padding" id="team">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h5 class="title-sec1" ></h5>
                    <h2 class="title-sec">OUR CHEF</h2>
                </div>
            </div>
            <div class="row">
                <div class="team-item">
                    <img src="images/ch1.jpg" alt="team item" height="240px">
                    <div class="team-item-info">
                        <h3>Amal</h3>
                        <p>Assistant Chef</p>
                    </div>

                </div>

                <div class="team-item">
                    <img src="images/ch2.jpg" alt="team item"height="240px">
                    <div class="team-item-info">
                        <h3>Ahmed</h3>
                        <p>Head Chef</p>
                    </div>

                </div>

                <div class="team-item">
                    <img src="images/ch3.jpg" alt="team item"height="240px">
                    <div class="team-item-info">
                        <h3>Fatima</h3>
                        <p>Chef</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!------foter----->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-item">
                    <h6>Our Location</h6>
                    <p>Palestine, Nablus,<br> Amman Street</p>

                </div>
                <div class="footer-item">
                    <h6>Opening Hour</h6>
                    <p>Saturday To Thursday<br>9:00 AM - 12:00 PM</p>

                </div>
                <div class="footer-item">
                    <h6>Contact Us</h6>
                    <p>0569865648</p>
                    <p>info@gmail.com</p>
                    <div class="social-link">
                        <a href="https://www.facebook.com/Mariamsharaqa89"><i class="fa fa-facebook" aria-hidden="true" ></i></a>
                        <a href="https://www.instagram.com/maryoooma_kitchen/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>