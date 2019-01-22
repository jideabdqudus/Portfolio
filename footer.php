<?php 
include ("connection.php");

if (isset($_POST['submit'])){
  $sql = "INSERT INTO `data`(`id`, `name`, `email`, `subject`, `message`)
  VALUES (NULL, '".$_POST['name']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."')";

  $query = mysqli_query($look,$sql);
}

?>
<!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf" style="background-color: white;"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full" style="background-color: whitesmoke">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Send a Message!
                    </h5>
                  </div>
                  <div>
             <form action="" method="POST" role="form" class="contactForm">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="color: black; background-color: peru;"/>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" style="color: black; background-color: peru;" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" style="color: black; background-color: peru;"/>
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"style="color: black; background-color: peru;"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                         
                          
                          <button type="submit" class="button button-a button-big button-rouded" name="submit">Send Message</button>
                        
                      
                        </div>
                      </div>
             </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      <p>I'm everywhere you hope I was, but feel free to reach me on socialmedia. Drop a 'random message' or hire me! </p>
                    </p><br>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span>Lagos, Nigeria</li>
                      <li><span class="ion-ios-telephone"></span> +(234) 809 2399 019.</li>
                      <li><span class="ion-email"></span> jideabdqudus@gmail.com</li>
                    </ul>
                  </div><br>
                  <div class="author_text text-right">
                                            <h5>Regards!</h5>
                                            <h3><b>Abdul-Qudus A. Olajide</b></h3>
                                            <h6>UI/UX & Web Designer</h6>
                                        </div>
                            <br>            
                  <div class="socials">
                    <ul>
                      <li><a href="www.facebook.com/qudusini"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href="www.instagram.com/jideabdqudus"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href="www.twitter.com/jideabdqudus"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href="www.linkedin.com/in/jideabdqudus"><span class="ico-circle"><i class="ion-social-linkedin"></i></span></a></li>
                      <li><a href="www.github.com/jideabdqudus"><span class="ico-circle"><i class="ion-social-github"></i></span></a></li>
                    </ul>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>Qudusini</strong>. All Rights Reserved</p>
              <div class="credits">
                
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->
