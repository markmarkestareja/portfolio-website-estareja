<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Protfolio</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>

    <header class="header">
        <a href="#home" class="logo">mark<span>mark</span>
        </a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#projects">Projects</a>
            <a href="#certificates">Certificates</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>


    <section class="home" id="home">
        <div class="home-img">
            <img src="Pic4.jpeg" alt="">
        </div>


        <div class="home-content">
            <h1>It's <span>Mark</span></h1>
            <h3 class="text-animation">
                I'm a <span></span>
            </h3>
            <p>I bring a fresh perspective, a strong work ethic, and a
                commitment to continuous learning. Whether it's developing
                a new website, designing a captivating graphic, or creating
                an engaging user interface, I am dedicated to delivering
                high-quality results that exceed expectations.</p>
            <div class="social-icons">
                <a
                    href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fmark-estareja-741295190%3Futm_source%3Dshare%26utm_campaign%3Dshare_via%26utm_content%3Dprofile%26utm_medium%3Dandroid_app%26fbclid%3DIwZXh0bgNhZW0CMTAAAR0GA0r-Srz7qyGMWrYq0sqJe5_My0bHCRuzv3JSYMIqGgy8NFDb_AAawgo_aem_AbJeJzKF804Oo8cV8WP0zoQ_I0PinYSrO2XpcaVsQghdg3lDWht1hbQkvWWpDzkfgJKD-ngUNd8H-lVdPwHtXGo2&h=AT0_bCVrW-TtyHNII_1BHaklB9rYsO-2wGTEw74f5aUzWJJ4b0YWDK_kIIIl-tqJWiYGFW67PukUTr8r9TKNLMSKwLHyINV6te-8TAZ36InD-IvoVD1etdz3Wwe6-b2dqFSKFw"><i
                        class='bx bxl-linkedin-square scroll-top'></i></a>
                <a
                    href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Fanothrmark%3Figsh%3DNHZ6bWkwbnJnNmFi%26fbclid%3DIwZXh0bgNhZW0CMTAAAR22gEwzld_7WhpEjiiR8el594UYpiQ_hfMlday2gxmxC5Ekb924PhHgbd4_aem_AY0SWfhueLMoIyvEMUGKrDxX7bohpHGiRiDsr8VUAQGTDDQD8y8eXZDAREI8_DTLJ9HvlorRv4uiG4ORGZYPH7Io&h=AT2uTY7NWjnkux6eWtb9zY29ufJAK7zqxQXEt-q4uWjs-Sj1e5UUwqmry1h6xaDaRRkhhVtm-yYJgvadnwLfpN5Iq5rJMjRHTqYLHXfrr6x1dmdQyKd6uWVgXQBHjnoc83NdKA"><i
                        class='bx bxl-instagram-alt scroll-drop'></i></a>
                <a
                    href="https://l.facebook.com/l.php?u=https%3A%2F%2Fm.me%2Fmarkmark885939%3Fhash%3DAbbS6-6tnwvvs7R4%26source%3Dqr_link_share%26fbclid%3DIwZXh0bgNhZW0CMTAAAR0sUqgR85Dp5TKFukwdcI2ZPfRnLaENzhFQxJ57pW_1gMD7e67VAjT0H6w_aem_AY1ijn498VVAxiSnVCrplngHoTT9BWMU1b19c9Ywd4AgKIC8g-oST1DQCyF35lFBGwGBlme8Re5AwuBYVpk2Pg6v&h=AT2uTY7NWjnkux6eWtb9zY29ufJAK7zqxQXEt-q4uWjs-Sj1e5UUwqmry1h6xaDaRRkhhVtm-yYJgvadnwLfpN5Iq5rJMjRHTqYLHXfrr6x1dmdQyKd6uWVgXQBHjnoc83NdKA"><i
                        class="fa-brands fa-facebook-messenger scroll-top"></i></a>
                <a href="https://www.facebook.com/markmark885939"><i class='bx bxl-facebook-square scroll-drop'></i></a>
                <a
                    href="https://github.com/markmarkestareja"><i
                        class='bx scroll-left'><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"style="margin-top: 2px;"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33s1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2" />
                        </svg></i></a>
            </div>
            <div class="row">
                <a href="#contact" class="btn">Hire me</a>
                <a href="./Resume 2025.pdf" class="btn">Download My CV</a>
            </div>

        </div>
    </section>


    <section class="about" id="about">
        <div class="about-content">
            <h2 class="heading">
                About <span>Me</span>
            </h2>
            <h3 class="text-animation">
                <span></span>
            </h3>
            <p>I recently completed my degree in Bachelor of Science in Computer Science in Computer Communication
                Development Institute Sorsogon City.
                <br> <br>Throughout my academic journey, I've cultivated a strong foundation in both the technical and
                creative aspects of digital development, allowing me to approach projects with a unique blend of
                analytical thinking and artistic flair.
            </p>

            <div class="tab-titles">
                <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                <p class="tab-links" onclick="opentab('experiences')">Experiences</p>
                <p class="tab-links" onclick="opentab('education')">Education</p>
            </div>
            <div class="tab-contents active-tab" id="skills">
                <ul>
                    <li><span>Web Development</span><br>
                        <div class="container">
                            <div class="skills webdev" data-progress="80%">80%</div>
                        </div>
                    </li>
                    <li><span>UI/UX</span><br>
                        <div class="container">
                            <div class="skills uiux" data-progress="70%">70%</div>
                        </div>
                    </li>
                    <li><span>Graphic Design</span><br>
                        <div class="container">
                            <div class="skills graphicdesign" data-progress="70%">70%</div>
                        </div>
                    </li>
                </ul>
            </div>


            <div class="tab-contents" id="experiences">
                <ul>
                    <li><span>BICOL IT STUDENT CONGRESS (BITSCON)</span><br>2023 <br>Sorsogon State University, AV Hall
                    </li>
                    <li><span>78th Annual Convention of PHILIPPINE INSTITUTE OF CERTIFIED PUBLIC ACCOUNTANT Student
                            Staff</span><br>2023 <br>Sorsogon City</li>
                    <li><span>ENTREPRENEURSHIP SUMMIT</span><br>2023 <br>SPDRRMO Sorsogon, Session Hall</li>
                </ul>
            </div>

            <div class="tab-contents" id="education">
                <ul>
                    <li><span>2020 - 2024</span><br>College<br><em>Bachelor of Science in Computer
                            Science</em><br>Computer Communication Development Institute </li>
                    <li><span>2018 - 2019</span><br>Senior High School<br><em>Computer Programming NCIV</em><br>Computer
                        Communication Development Institute</li>
                    <li><span>2014 - 2015</span><br>Junior High School<br>Bulacao National High School</li>
                </ul>
            </div>
        </div>

        <div class="about-img">
            <img src="Pic5.jpeg" alt="">
        </div>
    </section>


    <section class="services" id="services">
        <h2 class="heading">Serv<span>ices</span></h2>

        <div class="services-container scroll-bottom">
            <div class="service-box">
                <div class="service-info">
                    <h4>Graphic Design</h4>
                    <p>With a keen eye for aesthetics and a love for creativity, I craft visually stunning designs using
                        Canva and Figma. And I also fond of editing my photos for my social media platforms using Adobe
                        Lightroom and Picsart.</p>
                </div>
            </div>

            <div class="service-box">
                <div class="service-info">
                    <h4>Website Development</h4>
                    <p>Proficient in HTML, CSS, PHP, and JavaScript, I create responsive and dynamic websites that offer
                        seamless user experiences.
                    </p>
                </div>
            </div>

            <div class="service-box">
                <div class="service-info">
                    <h4>Full Stack System Development</h4>
                    <p>My expertise extends to both front-end and back-end development, with experience in HTML, PHP,
                        CSS, and SQL, enabling me to build comprehensive and robust web applications.
                    </p>
                </div>
            </div>

            <div class="service-box">
                <div class="service-info">
                    <h4>UI / UX Design</h4>
                    <p>I focus on user-centric design principles to create intuitive and engaging interfaces, ensuring
                        that every user interaction is both enjoyable and efficient.</p>
                </div>
            </div>

            <div class="service-box">
                <div class="service-info">
                    <h4>Database Management</h4>
                    <p>I specialize in providing comprehensive database management services to ensure your data is
                        organized, secure, and easily accessible. With expertise in database design, optimization, and
                        maintenance.</p>
                </div>
            </div>

            <div class="service-box">
                <div class="service-info">
                    <h4>Game Development</h4>
                    <p>Combining my love for coding and gaming, I develop interactive and immersive game experiences
                        using Unity and Unreal Engine.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="projects" id="projects">
        <h2 class="heading">Pro<span>jects</span></h2>
        <br><br>
        <div class="container2">
            <div>
                <div class="content">
                    <h2>Gubat Public Library Management System</h2>
                    <span>Website System Development</span>
                </div>
            </div>
            <div>
                <div class="content">
                    <h2>Weekly Payroll</h2>
                    <span>Desktop Application Development</span>
                </div>
            </div>
            <div>
                <div class="content">
                    <h2>My Personal Portfolio</h2>
                    <span><a href="https://markmarkestareja.github.io/froilan-portfolio.github.io/">Web
                            Portfolio</a></span>
                </div>
            </div>
            <div>
                <div class="content">
                    <h2>Booking Management System</h2>
                    <span>Desktop Application Development</span>
                </div>
            </div>

    </section>


    <section class="certificates" id="certificates">
        <h2 class="heading">Certif<span>icates</span></h2>
        <br><br><br><br><br><br><br><br><br><br>
        <div class="certificate-container">
            <div class="certificate-box">
                <img src="./certs/Creating Compelling Reports.png" alt="">
            </div>
            <p>
                <img src="./certs/Creating Compelling Reports.png" class="scroll-bottom">
                <img src="./certs/Screenshot 2024-06-08 160932.png" class="scroll-bottom">
                <img src="./certs/Computer Basic Hardware.png" class="scroll-bottom">
                <img src="./certs/IoT.png" class="scroll-bottom">
            </p>
            <p>
                <img src="./certs/Cyber.png" class="scroll-bottom">
                <img src="./certs/Data Science.png" class="scroll-bottom">
                <img src="./certs/typing1.png" class="scroll-bottom">
                <img src="./certs/typing2.png" class="scroll-bottom">
            </p>
        </div>

        <div class="certificate-container">
            <div class="certificate-box">
                <img src="./certs/Screenshot 2024-06-08 160932.png" alt="">
            </div>
            <p>
                <img src="./certs/typing3.png" class="scroll-top">
                <img src="./certs/typing4.png" class="scroll-top">
                <img src="./certs/Solana.png" class="scroll-top">
                <img src="./certs/internship.png" class="scroll-top">
            </p>
            <p>
                <img src="./certs/eGov-Gubat.jpg" class="scroll-top">
                <img src="./certs/Comp-Knowledge-Barcelona.png" class="scroll-top">
                <img src="./certs/eGov-Bulusan.jpg" class="scroll-top">
                <img src="./certs/PICPA.jpg" class="scroll-top">
            </p>
        </div>
    </section>





    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>

        <form action="sendEmail.php" method="POST">
            <input type="hidden" name="access_key" value="c73961e8-e260-4575-9710-421521f89327">
            <div class="input-box">
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="number" name="phone" placeholder="Phone number" required>
                <input type="text" name="subject" placeholder="Subject" required>
            </div>

            <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
            <input type="submit" name="submitContact" value="Send Message" class="btn">
        </form>
    </section>



    <footer class="footer">
        <div class="social">
            <a
                href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fmark-estareja-741295190%3Futm_source%3Dshare%26utm_campaign%3Dshare_via%26utm_content%3Dprofile%26utm_medium%3Dandroid_app%26fbclid%3DIwZXh0bgNhZW0CMTAAAR0GA0r-Srz7qyGMWrYq0sqJe5_My0bHCRuzv3JSYMIqGgy8NFDb_AAawgo_aem_AbJeJzKF804Oo8cV8WP0zoQ_I0PinYSrO2XpcaVsQghdg3lDWht1hbQkvWWpDzkfgJKD-ngUNd8H-lVdPwHtXGo2&h=AT0_bCVrW-TtyHNII_1BHaklB9rYsO-2wGTEw74f5aUzWJJ4b0YWDK_kIIIl-tqJWiYGFW67PukUTr8r9TKNLMSKwLHyINV6te-8TAZ36InD-IvoVD1etdz3Wwe6-b2dqFSKFw"><i
                    class='bx bxl-linkedin-square'></i></a>
            <a
                href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Fanothrmark%3Figsh%3DNHZ6bWkwbnJnNmFi%26fbclid%3DIwZXh0bgNhZW0CMTAAAR22gEwzld_7WhpEjiiR8el594UYpiQ_hfMlday2gxmxC5Ekb924PhHgbd4_aem_AY0SWfhueLMoIyvEMUGKrDxX7bohpHGiRiDsr8VUAQGTDDQD8y8eXZDAREI8_DTLJ9HvlorRv4uiG4ORGZYPH7Io&h=AT2uTY7NWjnkux6eWtb9zY29ufJAK7zqxQXEt-q4uWjs-Sj1e5UUwqmry1h6xaDaRRkhhVtm-yYJgvadnwLfpN5Iq5rJMjRHTqYLHXfrr6x1dmdQyKd6uWVgXQBHjnoc83NdKA"><i
                    class='bx bxl-instagram-alt'></i></a>
            <a
                href="https://l.facebook.com/l.php?u=https%3A%2F%2Fm.me%2Fmarkmark885939%3Fhash%3DAbbS6-6tnwvvs7R4%26source%3Dqr_link_share%26fbclid%3DIwZXh0bgNhZW0CMTAAAR0sUqgR85Dp5TKFukwdcI2ZPfRnLaENzhFQxJ57pW_1gMD7e67VAjT0H6w_aem_AY1ijn498VVAxiSnVCrplngHoTT9BWMU1b19c9Ywd4AgKIC8g-oST1DQCyF35lFBGwGBlme8Re5AwuBYVpk2Pg6v&h=AT2uTY7NWjnkux6eWtb9zY29ufJAK7zqxQXEt-q4uWjs-Sj1e5UUwqmry1h6xaDaRRkhhVtm-yYJgvadnwLfpN5Iq5rJMjRHTqYLHXfrr6x1dmdQyKd6uWVgXQBHjnoc83NdKA"><i
                    class="fa-brands fa-facebook-messenger"></i></a>
            <a href="https://www.facebook.com/markmark885939"><i class='bx bxl-facebook-square'></i></a>
            <a
                    href="https://github.com/markmarkestareja"><i
                        class='bx'><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"style="margin-top: 2px;"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33s1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2" />
                        </svg></i></a>
        </div>

        <ul class="list">
            <li>
                <a href="#services">Services</a>
            </li>
            <li>
                <a href="#about">About Me</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
            <p class="copyright">
                &copy 2024 Mark Estareja | All Rights Reserved
            </p>
        </ul>
    </footer>



    <script src="script.js"></script>
    <script>
        var messageText = "<?= $_SESSION['status'] ?? ''; ?>";
        if (messageText != '') {

            Swal.fire({
                title: "Thank you!",
                text: messageText,
                icon: "success"
            });

            <?php unset($_SESSION['status']); ?>
        }
    </script>

</body>

</html>