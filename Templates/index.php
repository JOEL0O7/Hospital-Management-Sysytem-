<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking appointment</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="header2.css">
</head>
<header class="header">

  <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> medcare. </a>

  <nav class="navbar">
     
      <a href="home1.html">home</a>
      <a href="login.html">Log In</a>
      <a href="aboutus.html">about</a>
      <a href="index.html">doctors</a>
      <a href="bookingapp.html">book</a>
      <a href="#review">review</a>
      <a href="#blogs">blogs</a>
      <a href="logout.php">Logout</a>
  </nav>

  <div id="menu-btn" class="fas fa-bars"></div>

</header>
<body>
  <div class="container">
    <div class="sidebar sidebargo">
      <img src="logo.png" class="logo" alt="APPOINTMNET" usemap="#hospital" style="width: 50px; height: 50px;">
      <!-- <nav>
        <ul>
          <li class="item"><a href="home1.html">Home</a></li>
          <li class="item"><a href="login.html">Log In</a></li>
          <li class="item"><a href="bookingapp.html">Booking Appointment</a></li>
          <li class="item"><a href="index.html">Doctor Information</a></li>
          <li class="item"><a href="aboutus.html">About us</a></li>
          <li class="item"><a href="contactus.html">Contact us</a></li>
        </ul>
      </nav> -->
    </div>
    <section class="services-container">
      <!-- <div class="hamburger">
        <img class="ham" src="menu.png" alt="" width="23px">
        <img class="cross" src="cross.png" alt="" width="20px">
      </div> -->
      <h1 class="h-primary-center">Doctor Information</h1>
      <div class="mainsearch">
        <div class="search-inp">
          <input type="text" name="" id="find" placeholder="Find A Doctor...">
          <div class="but">
            <button onclick="search()">search</button>
          </div> 
        </div>
      </div>
      <div id="services">
        <div class="box3">
          <img src="dr1.png" alt="appointmentform.html">
          <h2 class="h-secondary center"">Dr. Sandeep Vaishya</h2>
        <div class=" location">
            <div class="img">
              <img src="location.png" alt="location" style="height: 20px; width: 20px;">
            </div> Shop No. 21,andheri Shivshakti Hsg Society,Mumbai,India
        </div>
        <div class="location">
          <div class="img">
            <img src="language.jpg" alt="location" style="height: 30px; width: 30px;">
          </div> English
        </div>
        <div class="location">
          <div class="img">
            <img src="education.png" alt="location" style="height: 20px; width: 20px;">
          </div>BHMS,MBBS,MD,Interventional Cardiology,Cardiology,Physiology
        </div>
        <p>
          Dr Sandeep Vaishya is one of the top Neurosurgeons in India.
          He has 22+ years of experience in the field & has been associated with some of the best hospitals in India
          <a href="dr1.html" style="text-decoration: none;color: darkorange;">read more...</a>
        </p>
      </div>
      <div class="box3">
        <img src="dr2.png" alt="">
        <h2 class="h-secondary center"">Dr. Rajeev Verma</h2>
      <div class=" location">
          <div class="img">
            <img src="location.png" alt="location" style="height: 20px; width: 20px;">
          </div>Shop No. 21,andheri Shivshakti Hsg Society,Mumbai,India
      </div>
      <div class="location">
        <div class="img">
          <img src="language.jpg" alt="location" style="height: 30px; width: 30px;">
        </div> English / Hindi
      </div>
      <div class="location">
        <div class="img">
          <img src="education.png" alt="location" style="height: 20px; width: 20px;">
        </div>MBBS,MD,Cardiology,Physiology
      </div>
      <p>
        Dr. Rajeev Verma is well known Orthopedic and Joint Replacement Surgeon, practicing for the past 15 years.
        His expertises are Joint Replacement Surgery, Arthroscopic Knee Surgeries, and Complex Trauma and Limb
        Reconstruction Procedures
        <a href="dr2.html" style="text-decoration: none;color: darkorange;">read more...</a>
      </p>
  </div>
  <div class="box3">
    <img src="dr3.png" alt="">
    <h2 class="h-secondary center">Dr. Meenakshi Verma</h2>
    <div class="location">
      <div class="img">
        <img src="location.png" alt="location" style="height: 20px; width: 20px;">
      </div> Shop No. 10,Santa Kruz Shiv Hsg Society,Mumbai,India
    </div>
    <div class="location">
      <div class="img">
        <img src="language.jpg" alt="location" style="height: 30px; width: 30px;">
      </div> English / Hindi / Marathi
    </div>
    <div class="location">
      <div class="img">
        <img src="education.png" alt="location" style="height: 20px; width: 20px;">
      </div>BHMS,MBBS,MD, Cardiology
    </div>
    Orthopedic surgeons,Gynecologists

    <p class="center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum corrupti debitis accusamus
      praesentium labore totam sapiente tempore, pariatur nesciunt corporis sequi minus officia ea, accusantium
      <a href="dr3.html" style="text-decoration: none;color: darkorange;">read more...</a>
    </p>
  </div>
  </div>
  </section>
  <section class="services-container">
    <div id="services">
      <div class="box3">
        <img src="dr6.png" alt="appointmentform.html">
        <h2 class="h-secondary center"">Dr. Priyanka Joshi</h2>
        <div class=" location">
          <div class="img">
            <img src="location.png" alt="location" style="height: 20px; width: 20px;">
          </div> Shop No. 21,andheri Shivshakti Hsg Society,Mumbai,India
      </div>
      <div class="location">
        <div class="img">
          <img src="language.jpg" alt="location" style="height: 30px; width: 30px;">
        </div> English / Hindi
      </div>
      <div class="location">
        <div class="img">
          <img src="education.png" alt="location" style="height: 20px; width: 20px;">
        </div>BHMS,MBBS,MD,Interventional Cardiology,Cardiology,Physiology
      </div>
      <p>
        Dr. Priyanka Joshi is one of the top Neurosurgeons in India.
        He has 20+ years of experience in the field & has been associated with some of the best hospitals in Mumbai
        <a href="dr4.html" style="text-decoration: none;color: darkorange;">read more...</a>
      </p>
    </div>
    <div class="box3">
      <img src="dr7.png" alt="">
      <h2 class="h-secondary center"">Dr. Soniya Gandhi</h2>
        <div class=" location">
        <div class="img">
          <img src="location.png" alt="location" style="height: 20px; width: 20px;">
        </div> Shop No. 12,Kurla Nilkamal Hsg Society,Mumbai,India
    </div>
    <div class="location">
      <div class="img">
        <img src="language.jpg" alt="location" style="height: 30px; width: 30px;">
      </div> English / Gujarati
    </div>
    <div class="location">
      <div class="img">
        <img src="education.png" alt="location" style="height: 20px; width: 20px;">
      </div>BHMS,MBBS,Oncologists,cardiothoracic surgeons,ENT
    </div>
    <p>
      Dr. Soniya Gandhi is well known Orthopedic and Joint Replacement Surgeon, practicing for the past 10 years.
      His expertises are Joint Replacement Surgery and Complex Trauma and Limb Reconstruction Procedures
      <a href="dr5.html" style="text-decoration: none;color: darkorange;">read more...</a>
    </p>
    </div>
    <div class="box3">
      <img src="dr8.png" alt="">
      <h2 class="h-secondary center">Dr. Rubina Sharma</h2>
      <div class="location">
        <div class="img">
          <img src="location.png" alt="location" style="height: 20px; width: 20px;">
        </div> Shop No. 10,Bandra shakti Hsg Society,Mumbai,India
      </div>
      <div class="location">
        <div class="img">
          <img src="language.jpg" alt="location" style="height: 30px; width: 30px;">
        </div> English / Bengali
      </div>
      <div class="location">
        <div class="img">
          <img src="education.png" alt="location" style="height: 20px; width: 20px;">
        </div>BHMS,MBBS,Pulmonologist,Radiologist
      </div>
      <p class="center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum corrupti debitis accusamus
        praesentium labore totam sapiente tempore, pariatur nesciunt corporis sequi minus officia ea, accusantium
        <a href="dr6.html" style="text-decoration: none;color: darkorange;">read more...</a>
      </p>
    </div>
    </div>
  </section>
  </div>
  <section class="footer">

    <div class="box1-container">

        <div class="box1">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="appbook.html"> <i class="fas fa-chevron-right"></i> book </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#services2"> <i class="fas fa-chevron-right"></i> diseases and symptoms </a>
        </div>

        <div class="box1">
            <h3>our services</h3>
            <a href="#services"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box1">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> anasbhai@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </a>
        </div>

        <div class="box1">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>RSJ</span> | all rights reserved </div>

</section> 
  <script src="script.js">

  </script>
</body>

</html>