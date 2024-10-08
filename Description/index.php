<?php
    require('connection.php');
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Charity</title>
</head>

<body>
    <header class="navbar">

        <div class="top">
            <ul>
                <li>Phone: +9108888888</li>
                <li>Email: info@gmail.com</li>
           
            <?php
             if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
             {
                
                echo"
                <li>
                    <div class='user'>
                        $_SESSION[username] <button><a href='logout.php'>LOGOUT</a></button>
                    </div>
                </li>
                ";
                
             }
             else
             {
                echo"
                <li>
                    <div class='sign-in-up'>
                    <button type='button'  onclick=\"popup('login-popup')\">log in</button>
                    <button type='button' onclick=\"popup('register-popup')\">Sign up</button>
                    </div>
                </li>
                ";
             }
        ?>

            </ul>
        </div>

        



        <div class="popup-container" id="login-popup">
        <div class="popup">
           <form action="login_register.php" method="post">
            <h2>
                <span>USER LOGIN</span>
                <button type="reset" onclick="popup('login-popup')">X</button>
            </h2>
            <input type="text" placeholder="E-mail or Username" name="email_username">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" class="login-btn" name="login">LOGIN</button>
            </form>
        </div>
    </div>


    <div class="popup-container" id="register-popup">
        <div class="register popup">
            <form action="login_register.php" method="post">
            <h2>
                <span>USER REGISTER</span>
                <button type="reset"  onclick="popup('register-popup')">X</button>
            </h2>
            <input type="text" placeholder="Fullname" name="fullname">
            <input type="text" placeholder="Username" name="username">
            <input type="email" placeholder="E-mail" name="email">
            <input type="password" placeholder="Password" name="password" >
            <button type="submit" class="register-btn" name="register">Signup</button>
            </form>
        </div>
    </div>


        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="">
            </div>
            <div class="main">
                <div class="menu">
                    <nav>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#aboutSection">About us</a>
                            </li>
                            <li>
                                <a href="#activitiesSection">activities</a>
                            </li>
                            <li>
                                <a href="#educationSection">Education</a>
                            </li>
                            <li>
                                <a href="#gallerySection">Gallery</a>
                            </li>
                        </ul>

                    </nav>
                </div>
                <div class="header-btn">
                    <div class="header-hover">
                        <a href="donation.php">Donate</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header section end-->

    <div class="banner">
        <h1>Together, We Fight <span>For Lives</span></h1>
        <p>
            At CHARITY, we believe that by standing together, we can overcome even the greatest challenges.
            Every action we take, every life we touch is a testament to the power of unity and compassion.
            Together, we turn hope into action and create lasting change.
        </p>
        <button><a href="donation.php"> Start With A Little </a></button>
    </div>
    </div>
    <!--home section end-->

    <section class="fullContainer" id="aboutSection">

        <div class="container">
            <h2 class="sectionTitle"> About Us</h2>
            <p class="about-font">
                At CHARITY, we are committed to creating a world where every individual has the opportunity to thrive.
                Founded on the
                principles of compassion, integrity and communtiy, our mission is empower those in need by providing
                essential resource,
                education, and support.Join us on the journey to make a difference-one life, one community at a time.
            </p>
        </div>
        <div class="cards">
            <div class="donationBox">
                <div class="title">
                    <h1>Give Donation</h1>
                </div>
                <p>
                    Make a lasting impact, your donation changes lives now.
                </p>
                <button>
                    <a href="donation.php">Donate Now</a>
                </button>
            </div>
            <!--donation end here-->

            <div class="volunteerBox">
                <div class="title">
                    <h1>Volunteer</h1>
                </div>
                <p>
                    Make an impact, become a volunteer, and change lives today.
                </p>
                <button>
                   <a href="volunteer.php">Become Now</a>
                </button>
            </div>
            <!--donation end here-->

            <div class="scholarshipBox">
                <div class="title">
                    <h1>Give scholarship</h1>
                </div>
                <p>
                    Empower futures, give a scholarship,and create new opportunities.
                </p>
                <button>
                    <a href="#">Give Scholarship</a>
                </button>
            </div>
            <!--donation end here-->
        </div>
    </section>

    <section class="activities" id="activitiesSection">

        <div class="container">
            <h2 class="sectionTitle">activities</h2>

            <div class="boxContainer">
                <div class="box">
                    <div class="cardImage"></div>
                    <div class="activitiesTitle">Education To Every Child</div>
                    <div class="donationCount">
                        Donation Goal : <span>Rs 9845</span>
                    </div>
                    <button><a href="donation.php">Donate Now</a></button>
                </div>
                <!--box end-->

                <div class="box">
                    <div class="cardImage"></div>
                    <div class="activitiesTitle">Make Life Easier For Them</div>
                    <div class="donationCount">
                        Donation Goal : <span>Rs 9845</span>
                    </div>
                    <button><a href="donation.php">Donate Now</a></button>
                </div>
                <!--box end-->

                <div class="box">
                    <div class="cardImage"></div>
                    <div class="activitiesTitle">Bright Future For Kids</div>
                    <div class="donationCount">
                        Donation Goal : <span>Rs 9845</span>
                    </div>
                    <button><a href="donation.php">Donate Now</a></button>
                </div>
                <!--box end-->

                <div class="box">
                    <div class="cardImage"></div>
                    <div class="activitiesTitle">Water That Refreshes Lives</div>
                    <div class="donationCount">
                        Donation Goal : <span>Rs 9845</span>
                    </div>
                    <button><a href="donation.php">Donate Now</a></button>
                </div>
                <!--box end-->

            </div>
            <!--boxContainer end-->
        </div>

    </section>

    <!--Activities-Section end here-->

    <div class="sectionTitle"> Education </div>
    <section class="education" id="educationSection">
        
        <div class="container">


            <div class="educationContainer">
                <h3>
                    Knowledge Transforms Lives, Secures<br />
                    <strong>BRIGHT FUTURES</strong>
                </h3>
                <p>
                    Education is the cornerstone of a brighter future, at CHARITY, We
                    are dedicated to make quality education accessible to all. Join us
                    in our mission to transform lives through education and create a
                    world where every child has the opportunity to succeed.
                </p>
                <button><a href="#">EXPLORE NOW</a></button>
            </div>
        </div>
    </section>
    <!--educationSection end here-->


    <section class="gallery" id="gallerySection">
        <div class="container">
            <div class="sectionTitle">Gallery</div>

            <div class="galleryContainer">
                <div class="item">
                    <img src="gallery_1.jpg" alt="">
                </div>
                <!--item-->

                <div class="item">
                    
                    <img src="gallery_2.jpg" alt="">
                </div>
                <!--item-->

                <div class="item">
                    
                    <img src="gallery_3.jpg" alt="">
                </div>
                <!--item-->

                <div class="item">
                    
                    <img src="gallery_4.jpg" alt="">
                </div>
                <!--item-->

                <div class="item">
                    
                    <img src="gallery_5.jpg" alt="">
                </div>
                <!--item-->

                <div class="item">
                    
                    <img src="gallery_6.jpg" alt="">
                </div>
                <!--item-->

                <div class="item">
                    
                    <img src="gallery_7.jpg" alt="">
                </div>
                <!--item-->

                <div class="item">
                   
                    <img src="gallery_8.jpg" alt="">
                </div>
                <!--item-->
            </div>

        </div>
    </section>
    <!--Gallery Section end here-->




    <section class="join" id="joinSection">
        <div class="container">
            <div class="joinTitle">ADOPT A CHILD & <span>SAVE LIVES</span></div>
            <p>
            Are you ready to make a difference in a child's life?
             By adopting a child, you can provide a loving home 
             to someone in need and create lasting memories as 
             you build your family together. The joy of helping 
             a child grow and thrive is truly unparalleled. 
             If adoption isn't the right path for you, consider 
             joining our community! You can learn more about 
             the adoption process, participate in events, and 
             help raise awareness for children in need. Together, 
             we can create brighter futures for these children. 
             Join us today and be a part of this meaningful journey!


            </p>
            <button class="joinNow"><a href="contact_1.php">JOIN US</a></button>
            <button class="adoptBtn"><a href="Adopt.php">ADOPT A CHILD</a></button>
        </div>
    </section>
    <!--joinSection end here-->

    <footer>

        
        <div class="container">
            <div class="footer-logo">
             <img src="logo2_footer.png" alt="">
            </div>
            <!--logo of footer part-->

            <div class="linkContainer">
                <div class="title">Important Link</div>
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#aboutSection">About us</a>
                    </li>
                    <li>
                        <a href="#activitiesSection">Activities</a>
                    </li>
                    <li>
                        <a href="#educationSection">Education</a>
                    </li>
                    <li>
                        <a href="#gallerySection">Gallery</a>
                    </li>
                    <li>
                        <a href="#joinSection">join us</a>
                    </li>
                </ul>
            </div>
            <!--linkContainer-->

            <div class="conectContainer">
                <div class="title">Contact Info</div>
                <p>
                    Deoghar, Jharkhand  815351
                </p>
                <p>charity@gmail.com </p>
                <p>+91-0888888888</p>
            </div>
            <!--conectContainer-->
            <div class="newsLetterComtainer">
               
                <p>
                Your support means the world to us and to the children we serve.
                 Together, we can change lives!
                </p>
                <input type="text" placeholder="Enter your email id">
            </div>
            <!--newsLetterContainer-->

        </div>
    </footer>

<!-- <?php

    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
    {
        echo "<h1 style='text-align: center; margin-top: 200px; color: #fff'> welcome to the website . $_SESSION[username]    </h1>";
    }

?> -->



    <!--Coustom Js file link-->
    <script src="script.js"></script>
</body>

</html>