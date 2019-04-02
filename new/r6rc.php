
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
            <title>R6RC - austinleath.com</title>
            <meta name="description" content="Another one of my more known projects is both a website and desktop app titled R6RC">
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
                        <div class="content-media">
                           <div class="post-thumb">
                              <img src="images/r6rcimg.png">
                           </div>
                        </div>

                        <div class="primary-content">
                           <h1 class="page-title">R6RC</h1>
                           <ul class="entry-meta">
                              <li class="date">March, 26th, 2019</li>
                              <li class="cat"><a href="projects.php">Projects</a></li>
                           </ul>
                           <p class="lead">This is the page for R6RC, which is "the most minimalistic rank calculator for Rainbow Six: Siege" (or at least I think so).</p>
                           <p>The R6RC | R6 Rank Calculator takes a user's current MMR (Match Making Rating) and ELO (Points per match) to display how many matches the user has to win or lose to reach their goal.</p>
                           <h3>Features</h3>
                          <ul>
                            <li>Solve for a <i>preset</i> goal</li>
                            <li>Solve for <i>custom</i> goal (anywhere between 1,300 & 10,000)</li>
                            <li>Calculate how many games you have to <i>win</i> to reach your rank goal</li>
                            <li>Calculate how many games you have to <i>lose</i> to reach your rank goal</li>
                            <li>Switch between solving for preset and custom values</li>
                            <li>Automatic updates</li>
                            <li>Clean UI</li>
                          </ul>

                           <p class="tags">
                              <span>Tagged in :</span>
                              <a href="projects.php">Projects</a>
                           </p>
                           <?php include 'includes/authorprofile.php'; ?>
                        </div>
                        <?php include 'includes/pagenavigation.php'; ?>
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
