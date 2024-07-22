<!DOCTYPE html>
<html lang="en">


<?php
  include "header.php";
?>


 
<!-- ======= Our_Cases ======= -->
<section id="Our_Cases">
  <div class="fluid" data-aos="fade-up">
    <div class="col-xs-12">
      <div class="case-heading">
        <h2><span>Our</span> Portfolio</h2>
      </div>
   </div>

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="Themes/Cases/dmaxx.png" alt="Speaker 1" class="img-fluid">
          <div class="details">
            <h3><a href="">Dmaxx Auto Services</a></h3>
            <p>Automotive service technician maintenance, repair, and inspects cars</p>
            <div class="social">
              <a href=""><i class="bi bi-aspect-ratio"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
          <img src="Themes/Cases/metro.png" alt="Speaker 2" class="img-fluid">
          <div class="details">
            <h3><a href="">Metro</a></h3>
            <p>Metro is awesome mobile friendly & responsive Theme</p>
            <div class="social">
              <a href=""><i class="bi bi-aspect-ratio"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
          <img src="Themes/Cases/iaarhies.png" alt="Speaker 3" class="img-fluid">
          <div class="details">
            <h3><a href="">IAAHRIES</a></h3>
            <p>THE INTERNATIONAL ACADEMIC ASSOCIATION OF RESERCHERS IN HUMANITIES, IT, ENGINEERING & SCIENCE</p>
            <div class="social">
              <a href=""><i class="bi bi-aspect-ratio"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="Themes/Cases/gym.png" alt="Speaker 4" class="img-fluid">
          <div class="details">
            <h3><a href="">AssuredFit Gym</a></h3>
            <p>With our Pro Bodyline Fitness professional equipment, you are trained by professionals to help you</p>
            <div class="social">
              <a href=""><i class="bi bi-aspect-ratio"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
          <img src="Themes/Cases/ardif.png" alt="Speaker 5" class="img-fluid">
          <div class="details">
            <h3><a href="">Ardif</a></h3>
            <p>A Premier in Academic Research Ardif - Academic Research Development International Foundation</p>
            <div class="social">
              <a href=""><i class="bi bi-aspect-ratio"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
          <img src="Themes/Cases/webmix.png" alt="Speaker 6" class="img-fluid">
          <div class="details">
            <h3><a href="">Webmix.in</a></h3>
            <p>Web Designer and Web Developer</p>
            <div class="social">
              <a href=""><i class="bi bi-aspect-ratio"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
     <div class="col-xs-12">
      <div class="case-last">
        <h4>Our Cases</h4>
        <a href="our-work" class="button3d btn-medium btn-gray">
          <div class="div">View more</div>
          <span class="span">View more</span></a>
      </div>
   </div>
  </div>
  
</section><!-- End Our_Cases Section -->
<!-- Our_Cases -->
  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="col-xs-12">
        <div class="case-heading talk-heading">
            <h2>Let's <span>talk</span>?</h2>
            <h3>we'd love to hear from you</h3>
        </div>
    </div>
      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bi bi-map"></i>
                  <h3>Our Address</h3>
                  <p>Bin Jassim Building
                    Office No:1,Ground Floor
                    Furosia street ,Muaither North .</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@agilesolutionsqatar.com<br>Support@agilesolutionsqatar.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+974 55389295<br>+974 30554490</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form class="php-email-form" action="contact.php" method="post" name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post" required>
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"> <input id="btn-2" type="submit" name="submit" value="Send Message" onclick="check()" type="submit"></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->



  
  <?php
  include "footer.php";
?>


</body>

</html>