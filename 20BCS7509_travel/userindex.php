<?php 

//Defining constant php variable for local host

define('DB_host', 'localhost');
define('DB_username', 'root');
define('DB_password', '');
define('DB_name', 'test');
$conn = mysqli_connect(DB_host, DB_username, DB_password, DB_name);

if (!$conn) {
   die("connection failed" . mysqli_connect_error());
    echo "Connection Fail";
}
else{
    session_start();
$username=$_SESSION['username'];

}




?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel.com</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<!-- <style>
.dddd{
    color:white ;
    font-size=60px;
} -->

<!-- </style> -->
<body>

    <!-- header section starts  -->

    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>T</span>ravel</a>

        <nav class="navbar">
            <a href="index.html">home</a>
            <a href="#book">book</a>
            <a href="#packages">packages</a>
            <a href="#services">services</a> 
            <a href="#contact">contact</a>
            <a href="index.html">logout</a>
            
        </nav>

        <p style="color:#ffa500; font-size:25px" > welcome
            <?php
                $query = "SELECT name FROM register WHERE username = '$username'"; 
                        
                $result = mysqli_query($conn,$query) or die("Query not run");

                while($row = mysqli_fetch_array($result))
                {
                    echo $row["name"];
                }
            ?>  </p>

    </header>

    <!-- header section ends ->

 


 
<!- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>JOBS FILL YOUR POCKETS, BUT ADVENTURES FILL YOUR SOUL</h3>
            <p>THE JOURNEY OF A THOUSAND MILES BEGINS WITH A SINGLE STEP</p>
            <a href="#packages" class="btn">Discover our plans</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- book section starts  -->

    <section class="book" id="book">

        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/DDE.jpg" alt="">
            </div>

            <form action="booking.php" method="POST">
                <div class="inputBox">
                    <h3>source</h3>
                    <input type="text" name="source" placeholder="place name" required/>
                </div>
                <div class="inputBox">
                    <h3>destination</h3>
                    <input type="text" name="destination" placeholder="place name"required/>
                </div>
                <div class="inputBox">
                    <h3>no of passenger</h3>
                    <input type="number" name="guests" placeholder="number of adult"required/>
                 <div class="inputBox">
                   <input type="number" name="child" placeholder="number of child"required/>
                </div>
                <div class="inputBox">
                    <h3>date of departure</h3>
                    <input type="date" name="indate"required/>
                </div>
                <div class="inputBox">
                    <h3>date of arrival</h3>
                    <input type="date" name="outdate"required/>
                </div>
                

                <input type="submit" class="btn" value="Book now">
            </form>

        </div>
    </section>
    <!-- book section ends -->
    <!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/p-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Mumbai </h3>
                <p>Mumbai also known as Bombay — the official name until 1995 is the capital city of the Indian state of Maharashtra and the de facto financial centre of India.Mumbai is the financial, commercial and the entertainment capital of India. </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> Rs 10,000.00 - <span>Rs 12,000.00</span> </div>
                <a href="#book" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Hawaii </h3>
                <p>Hawaii is known for its 750 miles of spotless coastline dotted with volcanoes, its ancient culture that includes icons like the hula dance and lūʻaus, as well as for its rich cuisine that gave us poke bowls</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                 <div class="price"> Rs 15,000.00 - <span>Rs 20,000.00</span> </div>
                <a href="#book" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Sydney </h3>
                <p>Sydney, capital of New South Wales and one of Australia's largest cities, is best known for its harbourfront Sydney Opera House, with a distinctive sail-like design. Massive Darling Harbour and the smaller Circular Quay port are hubs of waterside life, with the arched Harbour Bridge and esteemed Royal Botanic Garden nearby. Sydney Tower’s outdoor platform, the Skywalk, offers 360-degree views of the city and suburbs.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                 <div class="price"> Rs 60,000.00 - <span>Rs 70,000.00</span> </div>
                <a href="booking.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Paris </h3>
                <p>Paris is one of the most beautiful cities in the world. It is known worldwide for the Louvre Museum, Notre-Dame cathedral, and the Eiffel tower. It has a reputation of being a romantic and cultural city. The city is also known for its high-quality gastronomy and the terraces of its cafés.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> Rs 65,000.00 - <span>Rs 75,000.00</span> </div>
                <a href="#book" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Tokyo </h3>
                <p>Tokyo,formerly Edo, historically Tokio, and officially the Tokyo Metropolis, is the capital and largest city of Japan. Its metropolitan area is the most populous in the world, with an estimated 37.468 million residents in 2018. Its metropolitan area is the largest in size and the most populous, with an area of 13,452 square kilometers and a population of 13.491 million people.Located at the head of Tokyo Bay, the prefecture forms part of the Kantō region on the central Pacific coast of Japan's main island of Honshu. Tokyo is the political and economic center of the country, as well as the seat of the Emperor of Japan and the national government.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                 <div class="price"> Rs 80,000.00 - <span>Rs 85,000.00</span> </div>
                <a href="#book" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Egyypt </h3>
                <p>Egypt, a country linking northeast Africa with the Middle East, dates to the time of the pharaohs. Millennia-old monuments sit along the fertile Nile River Valley, including Giza's colossal Pyramids and Great Sphinx as well as Luxor's hieroglyph-lined Karnak Temple and Valley of the Kings tombs. The capital, Cairo, is home to Ottoman landmarks like Muhammad Ali Mosque and the Egyptian Museum, a trove of antiquities.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                 <div class="price"> Rs 90,000.00 - <span>Rs 95,000.00</span> </div>
                <a href="#book" class="btn">book now</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->

<!-- packages section ends -->

    <!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Simple Booking,fast and friendly First Contact,a Genuinely Cheerful, Helpful, Knowledgeable Staff.Distinctive, Well-Appointed Guest Rooms That Are Exactly What You've Asked for.On-Site Services That Delight.A Variety of Excellent Food and Drink.</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>Food varities varying from indian to international cuisine.Skilled chef's giving the best of food from around the globe.
            Different varities of drinks varying from fruit juices to hard drinks like vodka,beer and
            branded drinks from around globe.</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safety guide</h3>
            <p>A guide faculty for newcomers and for people who want to explore the place without having the feeling of getting lost.
            Trained guides to ensure best behaviour towards guest and to encompass knowledge of the area.</p>

        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
            <p>Packages varying from the centre of earth to the poles.
                Covering the world to provide you with best deal.</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>Providing with the best deals available to the area.
            <p>Full refund policy and providing customer support to help answer queries.      
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>Providing you the joy to enjoy the adventure of riding around the globe with the best deals.
               The best way to enjoy the adventure without any fear and regrets is with us.We are here to provide you with a lifetime experience.</p>
        </div>

    </div>
    
    
    
</section>

<!-- services section ends -->

    <!-- contact section starts  -->
    <section class="contact" id="contact">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span> 
            <span class="space"></span>
            <span>u</span>
            <span>s</span>
        </h1>
        <div class="row">
            <div class="image">
                <img src="images/RRRW.jpg" alt="">
            </div>
            <form action="contact.php" method="post">
                <div class="inputBox">
                    <input type="text" name="name" placeholder="name"required/>
                    <input type="email" name="email" placeholder="email"required/>
                    <input type="number" name="number" placeholder="number"required  >
                </div>
                
                <textarea placeholder="message" name="message" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="send message">
            </form>
        </div>
    </section>

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p>we are the students of chandiagarh university made this portal for our project work</p>
            </div>
            <div class="box">
                <h3>branch locations</h3>
                <a href="#">AGRA</a>
                <a href="#">ALIGARH</a>
                <a href="#">DELHI</a>
                <a href="#">MUMBAI</a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#book">book</a>
                <a href="#services">services</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
               
            </div>

        </div>
        <h1 class="credit"> created by <span> Harshit Ashutosh Aman Kumar </span> | all rights reserved! </h1>
    </section>
</body>
<!-- custom js file link  -->
<script src="script.js"></script>
</html>