<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js oldie ie8" lang="en">
   <![endif]-->
   <!--[if IE 9 ]>
   <html class="no-js oldie ie9" lang="en">
      <![endif]-->
      <!--[if (gte IE 9)|!(IE)]><!-->
      <html class="no-js" lang="en">
         <!--<![endif]-->
         <head>
            <!--- basic page needs -->
            <meta charset="utf-8">
            <title>Contact Page - austinleath.com</title>
            <meta name="description" content="">
            <?php include_once 'includes/head.php'; ?>
            <?php include_once 'includes/googleanalytics.php'; ?>
         </head>
         <body id="top">
            <?php include_once 'includes/header.php';?>
            <!-- content -->
            <section id="content-wrap" class="site-page">
               <div class="row">
               <div class="col-twelve">
                  <section>
                     <div class="content-media">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107715.89132378265!2d-97.05874257132348!3d32.46943906056635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e92b4b2347503%3A0x98c81bb791deaf19!2sMidlothian%2C+TX!5e0!3m2!1sen!2sus!4v1551253887331" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                     </div>
                     <div class="primary-content">
                        <h1 class="entry-title add-bottom">Contact Me.</h1>
                        <p class="lead">This is the place where you can get in touch with me.</p>
                        <p>I will try to get back to you as soon as possible. Please allow 24 - 48 hours for a response.</p>
                        <div class="row">
                           <div class="col-six tab-full">
                              <h4>Where to Find Me</h4>
                           </div>
                           <div class="col-six tab-full">
                              <h4>Contact Info</h4>
                              <p>austinleath18@gmail.com</p>
                           </div>
                        </div>
                        <form name="cForm" id="cForm" method="post" action="<?php echo basename(__FILE__); ?>">
                           <fieldset>
                              <div class="form-field">
                                 <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
                              </div>
                              <div class="form-field">
                                 <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
                              </div>
                              <div class="form-field">
                                 <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website"  value="">
                              </div>
                              <div class="message form-field">
                                 <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message" ></textarea>
                              </div>
                              <button type="submit" class="submit button-primary full-width-on-mobile">Submit</button>
                           </fieldset>
                        </form>
                  </section>
                  </div>
               </div>
            </section>
            <?php include_once 'includes/footer.php';?>
            <div id="preloader">
               <div id="loader"></div>
            </div>
            <!-- Java Script -->
            <script src="js/jquery-2.1.3.min.js"></script>
            <script src="js/plugins.js"></script>
            <script src="js/main.js"></script>
         </body>
      </html>
