<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('Oops! Connection Failed');

if (isset($_POST['send'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg' ") or die('Oops! Message Selection Failed');

    if (mysqli_num_rows($select_message) > 0) {
        $message[] = 'Message Already Sent! <i class="fa fa-exclamation-triangle" style="font-size:20px;color:red"></i>';
    } else {
        mysqli_query($conn, "INSERT INTO `contact_form` (name, email, number, message) VALUES ('$name', '$email', '$number', '$msg')") or die('Oops! Query Failed');
        $message[] = 'Message Sent Successfully! <i class="fa fa-check" style="font-size:20px;color:green"></i>';
    }
}

?>


<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASOGBON OLAMIDE</title>

    <!--== Font Awesome CDN Lnk ==-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!--== Aos CSS Custom File Link ==-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=BhuTuka+Expanded+One&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik+Burned&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700&display=swap');
    </style>

    <!--== Custom CSS File Lnk ==-->
    <link rel=" stylesheet" href="css/style.css">
</head>

<body>

    <?php

    if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message" data-aos="fade-out">
                            <span>' . $message . '</span>
                            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                        </div>';
        }
    }

    ?>

    <!--== Header Section Starts ==-->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#home" class="logo">CERTIFIED-DEV.</a>

        <nav class="navbar">
            <a href="#home" class="active">HOME</a>
            <a href="#about">ABOUT ME</a>
            <a href="#skills">SKILLS</a>
            <a href="#services">SERVICES</a>
            <a href="#portfolio">PORTFOLIO</a>
            <a href="#contact">CONTACT</a>
        </nav>

        <div class="follow">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
        </div>

    </header>

    <!--== Header Section Ends ==-->

    <!--== Home Section Starts ==-->

    <section class="home" id="home">

        <div class="image" data-aos="fade-right">
            <img src="images/programmer.png" alt="Oops-Fasogbon Olamide-img">
        </div>

        <div class="content">
            <h3 data-aos="fade-up">Hey! I am Fasogbon Olamide .S</h3>
            <span data-aos="fade-up">A FULL-STACK WEB DEVELOPER</span>
            <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo iure cumque cum nisi facere aspernatur.</p>
            <a data-aos="zoom-out" href="#about" class="btn">ABOUT ME <i class="fa fa-info-circle" style="font-size:20px;color:#0000CD"></i></a>
        </div>

    </section>

    <!--== Home Section Ends ==-->

    <!--== About Section Starts ==-->

    <section class="about" id="about">

        <h1 class="heading" data-aos="fade-up"><span> BIOGRAPHY </span></h1>

        <div class="biography">

            <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem voluptatibus debitis fugit reiciendis
                soluta ratione est nisi, officia hic suscipit.</p>

            <div class="bio">
                <h3 data-aos="zoom-in"><span>Name :</span> Sana Shaikh</h3>
                <h3 data-aos="zoom-in"><span>Email :</span> sanashaikh@gmail.com </h3>
                <h3 data-aos="zoom-in"><span>Address :</span> Lagos, Nigeria </h3>
                <h3 data-aos="zoom-in"><span>Phone :</span> +234-704-690-0663 </h3>
                <h3 data-aos="zoom-in"><span>Age :</span> 17 Years Old </h3>
                <h3 data-aos="zoom-in"><span>Experience :</span> 6+ Months </h3>
            </div>

            <a href="FASOGBON OLAMIDE SUCCESS Resume.pdf" target="_blank" type="application/pdf" class="btn" data-aos="zoom-out"> Download My Resume. <i class="fa fa-external-link .btn-i" style="font-size:24px; color:#0000CD"></i></a>

        </div>

        <div class="edu-exp">

            <h1 class="heading" data-aos="fade-up"> <span> EDUCATION & EXPERIENCE </span> </h1>

            <div class="row">

                <div class="box-container box">

                    <h3 class="title" data-aos="fade-up">Education</h3>

                    <div class="box baby" data-aos="fade-left">
                        <span>( 2021 - 2022 )</span>
                        <h3>AUTO CAD & 3D PRINTING</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi
                            repellat natus quia.</p>
                    </div>

                    <div class="box baby" data-aos="fade-right">
                        <span>( 2022 - Till Date. )</span>
                        <h3>WEB DEVELOPER <i class="fa-brands fa-dev fa-lg" id="fas"></i></h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi
                            repellat natus quia.</p>
                    </div>

                    <div class="box baby" data-aos="fade-left">
                        <span>( 2022 - Till Date. )</span>
                        <h3>WEB DESIGNER</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi
                            repellat natus quia.</p>
                    </div>

                    <div class="box baby" data-aos="fade-right">
                        <span>( 2022 - Till Date. )</span>
                        <h3>GRAPHICS DESIGNING</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi
                            repellat natus quia.</p>
                    </div>

                </div>

                <div class="box-container box">

                    <h3 class="title" data-aos="fade-up">Experience</h3>

                    <div class="box baby" data-aos="fade-right">
                        <span>( 2021 - 2022 )</span>
                        <h3>AUTO CAD & 3D PRINTING APPRENTICE</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi
                            repellat natus quia.</p>
                    </div>

                    <div class="box baby" data-aos="fade-left">
                        <span>( 2022 - Till Date. )</span>
                        <h3>FRONT-END DEVELOPER</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi
                            repellat natus quia.</p>
                    </div>

                    <div class="box baby" data-aos="fade-right">
                        <span>( 2022 - Till Date. )</span>
                        <h3>FULL-STACK WEB DEVELOPER</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi
                            repellat natus quia.</p>
                    </div>

                    <div class="box baby" data-aos="fade-left">
                        <span>( 2022 - Till Date. )</span>
                        <h3>GRAPHICS DESIGNER</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi
                            repellat natus quia.</p>
                    </div>

                </div>

            </div>

        </div>

        <section class="skills" id="skills" data-aos="fade-up">

            <h1 class="heading"> <span> SKILLS </span> </h1>

            <div class="progress">

                <div class="bar" data-aos="fade-left">
                    <h3> <span>HTML</span> <span>96%</span> </h3>
                </div>

                <div class="bar" data-aos="fade-right">
                    <h3> <span>CSS</span> <span>87%</span> </h3>
                </div>

                <div class="bar" data-aos="fade-left">
                    <h3> <span>JAVASCRIPT</span> <span>70%</span> </h3>
                </div>

                <div class="bar" data-aos="fade-right">
                    <h3> <span>PHP</span> <span>60%</span> </h3>
                </div>

                <div class="bar" data-aos="fade-left">
                    <h3> <span>PYTHON</span> <span>65%</span> </h3>
                </div>

                <div class="bar" data-aos="fade-right">
                    <h3> <span>SQL</span> <span>50%</span> </h3>
                </div>

                <div class="bar" data-aos="fade-left">
                    <h3> <span>AUTO CAD & 3D PRINTING</span> <span>80%</span> </h3>
                </div>

            </div>

        </section>



    </section>

    <!--== About Section Ends ==-->

    <!--== Services Section Starts ==-->

    <section class="services" id="services">

        <h1 class="heading" data-aos="fade-up"> <span>SERVICES</span> </h1>

        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-code"></i>
                <h3>WEB DEVELOPMENT</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas dolores placeat, ratione cum amet quia.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-paint-brush"></i>
                <h3>GRAPHICS DESIGN</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas dolores placeat, ratione cum amet quia.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fab fa-bootstrap"></i>
                <h3>BOOTSTRAP</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas dolores placeat, ratione cum amet quia.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-mobile-alt"></i>
                <h3>MOBILE APP DEVELOPMENT</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas dolores placeat, ratione cum amet quia.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-chart-line"></i>
                <h3>SEO - MARKETING</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas dolores placeat, ratione cum amet quia.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-bullhorn"></i>
                <h3>DIGITAL MARKETING</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas dolores placeat, ratione cum amet quia.</p>
            </div>

        </div>

    </section>

    <!--== Services Section Ends ==-->

    <!--== Portfolio Section Starts ==-->

    <section class="portfolio" id="portfolio">

        <h1 class="heading" data-aos="fade-up"> <span>PORTFOLIO</span> </h1>

        <div class="box-container">

            <div class="box" data-aos="zoom-out">
                <img src="images/img-1.jpg" alt="Oops! Img-1">
                <h3>WEB DEVELOPMENT</h3>
                <span>(2022 - Till Date.)</span>
            </div>

            <div class="box" data-aos="zoom-out">
                <img src="images/img-2.jpg" alt="Oops! Img-2">
                <h3>WEB DESIGNING</h3>
                <span>(2022 - Till Date.)</span>
            </div>

            <div class="box" data-aos="zoom-out">
                <img src="images/img-3.jpg" alt="Oops! Img-3">
                <h3>GRAPHICS DESIGNING</h3>
                <span>(2022 - Till Date.)</span>
            </div>

            <div class="box" data-aos="zoom-out">
                <img src="images/img-4.jpg" alt="Oops! Img-4">
                <h3>SEO OPTIMIZING</h3>
                <span>(2022 - Till Date.)</span>
            </div>

            <div class="box" data-aos="zoom-out">
                <img src="images/img-5.jpg" alt="Oops! Img-5">
                <h3>DIGITAL MARKETING</h3>
                <span>(2022 - Till Date.)</span>
            </div>

            <div class="box" data-aos="zoom-out">
                <img src="images/img-6.jpg" alt="Oops! Img-6">
                <h3>WEB DEVELOPMENT</h3>
                <span>(2022 - Till Date.)</span>
            </div>

        </div>


    </section>

    <!--== Portfolio Section Ends ==-->

    <!--== Contact Section Starts ==-->

    <section class="contact" id="contact">

        <h1 class="heading" data-aos="fade-up"> <span>CONTACT ME</span> </h1>

        <form action="" method="post">

            <div class="flex">
                <input data-aos="fade-right" type="text" name="name" id="name" placeholder="Enter Your Name..." class="box" required>
                <input data-aos="fade-left" type="email" name="email" id="email" placeholder="Enter Your Email..." class="box" required>
            </div>

            <input data-aos="fade-up" type="number" min="0" name="number" id="number" placeholder="Enter Your Phone Number..." class="box" required>

            <textarea data-aos="fade-up" name="message" class="box" cols="30" rows="10" placeholder="Leave A Message..." required></textarea>

            <input data-aos="zoom-out" type="submit" value="Send Message Now!" name="send" id="home" class="btn">
        </form>

        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-phone"></i>
                <h3>Phone No:</h3>
                <p>+234-704-690-0663</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-envelope"></i>
                <h3>Email:</h3>
                <p>successolamide46@gmail.com</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Address:</h3>
                <p>Lagos, Nigeria - 101246</p>
            </div>

        </div>

    </section>

    <!--== Contact Section Ends ==-->

    <!--== Credit Section ==-->

    <div class="credit">
        &copy; Copyright @ Certified-Dev. <?php echo date('Y'); ?> <span> By Fasogbon Olamide .S </span>
    </div>

    <!--== Credit Section Ends ==-->


    <!--== Custom JS File Lnk ==-->
    <script src="js/script.js"></script>

    <!--== Aos JS Custom File Link ==-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        AOS.init({
            duration: 800,
            delay: 300,
        });
    </script>
</body>

</html>