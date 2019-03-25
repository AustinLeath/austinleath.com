<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<title>Unsubscribe - austinleath.com</title>
	<meta name="description" content="Unsubscribe from austinleath.com">
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

          <h1>Unsubscribe</h1>
          <p>I am sorry to see you go so soon. If you are sure you want to unsubscribe fill out the form below and hit unsubscribe.</p>
          <form id="cForm" method="post" action="">
            <fieldset>
              <div class="form-field">
              <input name="deregisteremail" type="email" id="cEmail" class="full-width" placeholder="Your Email" value="">
              </div>
             <button type="submit" class="submit button-primary full-width-on-mobile">Unsubscribe</button>
            </fieldset>
          </form>

          <?php include 'includes/deregister.php'; ?>
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
