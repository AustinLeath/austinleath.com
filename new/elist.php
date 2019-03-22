<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<title>Email List - austinleath.com</title>
	<meta name="description" content="Email List">
  <?php include_once 'includes/head.php'; ?>
  <?php include_once 'includes/googleanalytics.php'; ?>
</head>
<body id="top">
  <?php include_once 'includes/header.php'; ?>
  <!-- content -->
   <section id="content-wrap" class="blog-single">
   	<div class="row">
   		<div class="col-twelve">
   			<article class="format-standard">

          <h1>Email List</h1>
          <p>Enter your password to view the email list.</p>
          <form id="cForm" method="post" action="">
            <fieldset>
              <div class="form-field">
              <input name="password" type="password" id="cEmail" class="full-width" placeholder="Enter your password" value="">
              </div>
             <button type="submit" class="submit button-primary full-width-on-mobile">Submit</button>
            </fieldset>
          </form>

		      <?php include_once 'includes/elist.php'; ?>
				</article>
			</div>
   	</div>
   </section>
   <?php include_once 'includes/footer.php'; ?>
   <div id="preloader">
    	<div id="loader"></div>
   </div>
   <!-- JavaScript -->
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>
  </body>
</html>
