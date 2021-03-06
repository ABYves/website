
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Radiant-home</title>
    <link href="../CSS/main.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <nav class="nav-bar top-nav flex-row"><!-- Contains the navigations bar-->
        <ul class="nav-list">
            <li class="nav-list-item"><a class="currentPage nav-link " href="index.php"><i class="currentPage">Home</i></a></li>
            <li class="nav-list-item"><a class="nav-link" href="eat.php">Eat</a></li>
            <li class="nav-list-item"><a class="nav-link" href="sleep.php">Sleep</a></li>
            <li class="nav-list-item"><a class="nav-link" href="meet.php">Meetings</a></li>
            <li class="nav-list-item"><a class="nav-link" href="contact.php">Contact</a></li>
            <li class="nav-list-item"><a class="nav-link" href="..\..\Shop\HTML\index.php">shop</a></li>
        </ul>
    </nav>
    <div id="top-section" >
        <img src="../images/bright.jpg" alt="Image of a nice looking bedroom" title="Radiant Ochre bedroom" class="top-image">
        <p class="top-paragraph"><span style="font-size: 40px" class="white-text">RADIANT OCHRE HOTEL</span> <br>The best in the city</p>

    </div>
        <h1 class="orange-font-color center-text">GET IT ALL IN ONE PLACE</h1>
        <div class="main-description grid-column">
          <div id="eat" class="main-service-description center-text">
              <h2>EAT</h2>
             <p> Covering a range of international cuisine to local delicacies, we promise you healthy meals that will leave you refreshed.</p>
             <a href="eat.php"><button class="learn-more-button" > Learn More</button></a>
          </div>
            <div id="sleep" class="main-service-description center-text">
                <h2>SLEEP</h2>
                <p>At Radiant Ochre, we value sleep. From King size beds to cozy coaches, you will find the best rest that you deserve.Book your room today</p>
                <a href="sleep.php"><button class="learn-more-button" > Learn More</button></a>
            </div>
            <div id="meet" class="main-service-description center-text">
                <h2> MEETINGS</h2>
                <p>Your meetings could have never gotten better. Come choose from our range of rooms and spaces. Our event management department is also up to task.</p>
                <a href="meet.php"><button class="learn-more-button" > Learn More</button></a>
            </div>
    </div>
    <!--section for more details-->
    <h1 class="orange-font-color center-text">OTHER SERVICES</h1>
    <div class="other-services grid-column">
        <img  src="../images/Outdoor-Catering.jpg" alt="A beautiful outside catering event" title="Outside catering" class="grid-image-full">
        <div class="other-services-item center-text">
            <h2>Gardens</h2>
            <p>Our Gardens, rich in color and experiencing with a cool breeze from the hills beyond are ideal for weddings, parties, team events corporate events and exhibitions. Give us a call and see your outdoor activity fetch you the best results.</p>
        </div>
        <div class="other-services-item center-text">
            <h2>Health and Fitness</h2>
            <p>Our state of the art gym equipment will help you achive that fitness goal that you set this  year.
            Our Masus are well trained, highly experienced  and certified by the City Council.
                On top of that come detoxify at our Spa .</p>
        </div>
        <img src="../images/gym2.jpg" alt="our gym" title="Gym" class="grid-image-full">
        <img src="../images/kidspark2.jpg" alt="our gym" title="Gym" class="grid-image-full">
        <div class="other-services-item center-text">
            <h2>Kids Park</h2>
            <p>Toto play is a beautiful park for the little ones put together with safety in mind. The toys and playstations are clean, fun to use and well maintained.Organized kids get together at Toto park for an unforgetable experience.</p>

        </div>
    </div>
        <!--The div below will contain the testimonials-->
        <div id="testimonials-container" class="flex-column">
            <h1 class="orange-font-color center-text">TESTIMONIALS</h1>
            <div class="flex-row flex-row-center" style="width:100%">
            <img class="testimonial-image" src="../images/woman.jpg" alt="One of our clients picture">
            <p class="center-text white-text  testimonial-paragraph">“I am glad I picked Radiant Ochre as my home away from home during my vacation. I can’t believe they have almost everything in one place.”
               <br/><br/> <i>Perez Ogayo, CTO Imgn Company</i>
            </p>
            </div>

        </div>

    <!--The div below will contain the contact form-->
    <div id="contact-container" class="flex-column">
        <h1 class="orange-font-color center-text">CONTACT US</h1>
        <div class="contact-content-container" style="width:100%">
            <div  id="contact-details">
                <strong>Let us know how to help/collaborate/do business via the contacts below.<br/> We are very friendly people.
                    You will receive a response as soon as possible.</strong>
                <h3>Contact Details</h3>
                <p>Tel: +250785774412</p>
                <p> Email: radiantcontact@rochre.com</p>
                <p>Address: 245 Avenue, Kigali, Rwanda</p>
            </div>
            <div class="flex-column flex-column-center">
                <div id="message"></div> <!--Will contain the message if a user submits the form-->
                <p><strong>Drop us a message here and we will respond as soon as possible.</strong></p>
                <form action="message.php" method="post">
                    <input style=" border-style: none; background-color: white; border-radius: 20px; height: 25px;width: 300px; text-align: center;" type="text" placeholder="Your name" name="name" required><br/>
                  <input style=" border-style: none; background-color: white; border-radius: 20px;  height: 25px;width: 300px; text-align: center;" type="email" placeholder="Your email address" name="email" required><br/>
                 <input style=" border-style: none; background-color: white; border-radius: 20px;  height: 25px;width: 300px; text-align: center;" type="number" name="phone" placeholder="phone number"><br/>
                    <div  style="background-color: inherit"> <span style="float:left;margin-top: 15px; "></span><textarea style=" border-style: none; background-color: white; border-radius: 20px; width: 300px; text-align: center;" placeholder="What do you want to let us know?" name="message"></textarea><br/>
                    </div>
                    <input style="border-style: none; width: 300px; text-align: center;" type="submit" class="learn-more-button">
                </form>

            </div>
        </div>
    </div>
    <!-- Footer section--->
    <div class="nav-bar flex-row">
        <span class="white-text" style="justify-self: flex-start;margin:20px">&copy Radiant Ochre 2019</span><span style="margin:20px"><a href="#" class="white-text" style="text-decoration: none;">Back to top</a></span>
    </div>


<!--script-->
<script src="../JS/main.js"></script>
</body>
</html>