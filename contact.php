  <!--Get The Header Of The Pge  -->
  <?php 
  include "header.php";
  ?>


  <!-- Contact Us Section -->
    <section class="Material-contact-section section-padding section-dark">
      <div class="container">
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                  <h1 class="section-title" style="color: #B219B0 " >CONTACT US : </h1>
              </div>
          </div>
          <form action="phpmailer/index.php" method="POST">  
          
              <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                  
                      <!-- Name -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- email -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Subject -->
                      <div class="form-group label-floating">
                        <label class="control-label">Subject</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                      </div>

                      <!-- Form Submit -->
                      <div class="form-submit mt-5">
                          <button class="btn btn-common" type="submit" id="form-submit" style="color: #B219B0"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                          <div id="msgSubmit" class="h3 text-center hidden"></div>
                          <div class="clearfix"></div>
                      </div>
                  
              </div>
            </form>
          </div>
      </div>
    </section>