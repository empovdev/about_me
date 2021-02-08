<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

// Include autoload.php file
require 'vendor/autoload.php';
// Create object of PHPMailer class
$mail = new PHPMailer(true);

$output = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        // Gmail ID which you want to use as SMTP server
        $mail->Username = 'ahpov1113@gmail.com';
        // Gmail Password
        $mail->Password = 'Party@povem';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email ID from which you want to send the email
        $mail->setFrom($_POST['email'],$_POST['name']);
        // Recipient Email ID where you want to receive emails
        $mail->addAddress('ahpov1113@gmail.com');
//        $mail->addReplyTo($_POST['name'],$_POST['email']);
        $mail->isHTML(true);
        $mail->Subject = 'Form Submission';
        $mail->Body = "<h3>Name : $name <br>Email : $email <br>Title: $subject <br>Message : $message</h3>";

        $mail->send();
        $output = '<div class="alert alert-success">
                  <h5>Thankyou! for contacting us, I\'ll get back to you soon!</h5>
                </div>';
    } catch (Exception $e) {
        $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Em Pov Developer FullStack</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dangrek&family=Nokora&display=swap" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <style>
      .bg-danger.text-white.btn.rounded-pill
      {
          font-family: "Raleway", sans-serif;
          background:#0563bb !important;

      }
    .font-khmer_Dangrek {
      font-family:'Dangrek' ;
      font-size: 25px;
    }
    .font_khmer_Nokora
    {
      font-family: 'Nokora';
      font-size: 25px;
    }
  </style>
</head>

<body>

  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <header id="header" class="d-flex flex-column justify-content-center">

    <nav class="nav-menu">
      <ul>
        <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#contact"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>EM POV  </h1>
      <p>I'm <span class="typed" data-typed-items="Web Developer, Freelancer, Fullstack"></span></p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-github"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>I am a friendly person and feel that I am believe that my knowledge could make grow up in your company. I will think in terms of quality. I could perform well in this role as I can work well in a team environment as well as on my own initiative.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-9 pt-4 pt-lg-0 content">
            <h3>Fullstack Developer &amp; Web Developer.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <div class="row">
              <div class="col-lg-7">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 5 May 1999</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> empov.sadovk.com</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> 096 48 71 568</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Place of Bird:</strong>Trokeat Village, Tropeang Sab Commune, Baty District</li>
                </ul>
              </div>
              <div class="col-lg-5">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 22</li>

                  <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> ahpov1113@gmail.com</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
             </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">LARAVEL <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS,Bootstrap <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript , Jquery <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"> DATATABLE <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Mysql <i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Mr. EM POV</h4>
              <p><em>Innovative and deadline-driven web Designer with 1+ years of web designing and developing.</em></p>
              <ul>
                <li>096 48 71 568</li>
                <li>ahpov1113@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Faculty of Information Technology (year II session 2)</h4>
              <h5>2018 - 2021</h5>
              <p><em>Sachack Asia Development Institute </em></p>
              <p>one of the leading Christian higher educational institution in Cambodia, is located conveniently in the center of Phnom Penh. Our vision statement is “Quality Discipline Job Superiority”.</p>
            </div>
            <div class="resume-item">
              <h4>Training</h4>
              <h5>2019 </h5>
              <p><em>Web Designer </em></p>
              <p> from Professor of Sachack Asia Development Institute (PHAT AUDOM)</p>
            </div>
          </div>
          <div class="col-lg-6">

            <div class="resume-item">
              <h4>Building Systems</h4>
              <h5>2020 - 2021</h5>
              <p><em>Stepping for Build Cambodia People Party Systems </em></p>
              <ul>
                <li>Developed programs (Print and Report,Independent filters , CRUD ).</li>
                <li>Managed up to 2 projects or tasks at a given time while under pressure</li>
           </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Trokeat Village, Tropeang Sab Commune, Baty District</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>ahpov1113@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>096 48 71 568</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="#contact" method="POST"  class="php-email-form">

              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text"  class="form-control" name="name" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control"  name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject"  id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" id="message" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center">
                  <button type="submit" name="submit" >Send Message</button>
              </div>
                <?= $output; ?>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>My Perspective</h3>
      <p class="font_khmer_Nokora"> <q class="font-khmer_Dangrek">កុំជ្រួលជ្រើមជាមួយសំភារះនិយមបង្កផលលំបាកដល់ឪពុកម្ដាយ</q>   បើចង់បានត្រូវពឹងលើសមត្ថភាពខ្លួនឯង
      </p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-github"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
          EM POV @   <?php
echo  date("Y");
              ?>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
<!--  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>-->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<!--  <script src="assets/vendor/php-email-form/validate.js"></script>-->
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<!---->
<!--  <script type="text/javascript">-->
<!--      function sendEmail() {-->
<!--          var name = $("#name");-->
<!--          var email = $("#email");-->
<!--          var subject = $("#subject");-->
<!--          var body = $("#body");-->
<!---->
<!--          if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {-->
<!--              $.ajax({-->
<!--                  url: 'contact.php',-->
<!--                  method: 'POST',-->
<!--                  dataType: 'json',-->
<!--                  data: {-->
<!--                      name: name.val(),-->
<!--                      email: email.val(),-->
<!--                      subject: subject.val(),-->
<!--                      body: body.val()-->
<!--                  }, success: function (response) {-->
<!--                      $('#myForm')[0].reset();-->
<!--                      $('.sent-notification').html('Message Sent Successfully, Thanks you');-->
<!--                  }-->
<!--              });-->
<!--          }-->
<!--      }-->
<!---->
<!--      function isNotEmpty(caller) {-->
<!--          if (caller.val() == "") {-->
<!--              caller.css('border', '1px solid red');-->
<!--              return false;-->
<!--          } else-->
<!--              caller.css('border', '');-->
<!---->
<!--          return true;-->
<!--      }-->
<!--  </script>-->

</body>
</html>