<!DOCTYPE html>
<html lang="en">


<?php
  include "header.php";
?>


<!-- ======= Service_header  ======= -->
<section id="Service_header">
    <div class="banner-inner">
        <div class="row">
            <div class="col-sm-offset-2">
                <div class="banner-text">
                    <div class="banner-heading text-center">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="banner-bottomtext aboutbanner-text">
                        <br>
                        <h4 class="service-typed">Rams Technologies Qatar is a best website design company in <br><br>Doha, Qatar. </h4>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="mouse"><a href="#contact-page"><div class="animated-icon bounce-icon"></div></a></div>
  </section><!-- End Service_header -->


   <!-- ======= Desingning ======= -->
   <!-- ======= networking Section ======= -->
   <section id="contact-page" class="section-bg">

    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-xl col-lg-6 p-2 justify-content-center align-items-stretch" data-aos="zoom-in" style="text-align: center;">
          <h2>Get in touch</h2>
          <p>Have questions regarding Rams Technologies services or how to get started? Contact us for details. We look forward to assisting you and 
              learning more about your business goals.</p>
        </div>
      </div>   

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <address>Doha Qatar</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="bi bi-phone"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+974 31615457">+974 31615457</a> , <a href="tel:+974 31586616">+974 31586616</a></p>
            <p></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="bi bi-envelope"></i>
            <h3>Email</h3>
            <p><a href="mailto:info@Rams Technologiesqa.com">info@ramstechnologiesqa.com</a><br><a href="aarav.k@ramstechnologiesqa.com">aarav.k@ramstechnologiesqa.com</a></p>
          </div>
        </div>

      </div>

      <div class="form">
        <form class="php-email-form" action="contact.php" method="post" name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post" required>
          <div class="row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
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

          <span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first"><label><span class="wpcf7-list-item-label">Website Development</span>
            <input type="checkbox" name="checkbox-141[]" value="Website Development"></label></span><span class="wpcf7-list-item"><label>
                <span class="wpcf7-list-item-label">Ecommerce development</span><input type="checkbox" name="checkbox-141[]" value="Ecommerce development"></label>
            </span><span class="wpcf7-list-item"><label><span class="wpcf7-list-item-label">Web Application Development</span>
                <input type="checkbox" name="checkbox-141[]" value="Web Application Development"></label></span><span class="wpcf7-list-item"><label>
                    <span class="wpcf7-list-item-label">App Development</span><input type="checkbox" name="checkbox-141[]" value="App Development"></label>
                </span><span class="wpcf7-list-item"><label><span class="wpcf7-list-item-label">Social Media Marketing</span>
                    <input type="checkbox" name="checkbox-141[]" value="Social Media Marketing"></label></span><span class="wpcf7-list-item"><label>
                        <span class="wpcf7-list-item-label">Search Engine Optimization</span><input type="checkbox" name="checkbox-141[]" value="Search Engine Optimization">
                    </label></span><span class="wpcf7-list-item"><label><span class="wpcf7-list-item-label">Search Engine Marketing</span>
                        <input type="checkbox" name="checkbox-141[]" value="Search Engine Marketing"></label></span><span class="wpcf7-list-item"><label>
                            <span class="wpcf7-list-item-label">Email Marketing</span><input type="checkbox" name="checkbox-141[]" value="Email Marketing"></label>
                        </span><span class="wpcf7-list-item last"><label>
              <span class="wpcf7-list-item-label">Online Advertising Management</span><input type="checkbox" name="checkbox-141[]" value="Online Advertising Management">
            </label></span></span>

          <div class="text-center"><input id="btn-2" type="submit" name="submit" value="Send Message" onclick="check()" type="submit"></div>
        </form>
      </div>

    </div>
  </section><!-- End Contact Section -->




  <?php
  include "footer.php";
  ?>

</body>

</html>