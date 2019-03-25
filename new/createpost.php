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
            <title>Create Post - Rileigh's Blog</title>
            <meta name="description" content="From this page you can create a post.">
            <?php include 'includes/head.php'; ?>
            <?php include 'includes/googleanalytics.php'; ?>
         </head>
         <body id="top">
            <?php include 'includes/header.php'; ?>
            <!-- content -->
            <section id="content-wrap" class="blog-single">
               <div class="row">
                  <div class="col-twelve">
                     <article class="format-standard">
                        <h1>Create Post</h1>
                        <p>To create a post, please complete the entire form below.</p>
                        <form id="cForm" method="post" action="">
                           <fieldset>
                              <div class="form-field">
                                 <input name="password" type="password" id="cEmail" class="full-width" placeholder="Password" value="">
                              </div>
                              <div class="form-field">
                                 <input name="filename" type="text" id="cEmail" class="full-width" placeholder="Name of post" value="">
                              </div>
                              <button type="submit" class="submit button-primary full-width-on-mobile">Create Post</button>
                           </fieldset>
                        </form>
                        <?php include 'includes/createpost.php'; ?>
                     </article>
                  </div>
               </div>
            </section>
            <?php include 'includes/footer.php'; ?>
            <div id="preloader">
               <div id="loader"></div>
            </div>
            <!-- JavaScript -->
            <script src="js/jquery-2.1.3.min.js"></script>
            <script src="js/plugins.js"></script>
            <script src="js/main.js"></script>
         </body>
      </html>
