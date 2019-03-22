<?php

echo '
<footer>
<div class="footer-main">
<div class="row">
<div class="col-four tab-full mob-full footer-info">
   <h4>About My Site</h4>
   <p>This site is for all of the things that I feel like sharing.</p>
</div>
<div class="col-two tab-1-3 mob-1-2 site-links">
   <h4>Site Links</h4>
   <ul>
      <li><a href="/">Home</a></li>
      <li><a href="about.php">About Me</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="unsubscribe.php">Unsubscribe</a></li>
   </ul>
</div>
<div class="col-two tab-1-3 mob-1-2 social-links">
   <h4>Social</h4>
   <ul>
      <li><a href="https://www.instagram.com/austin_leath/" target="_blank">Instagram</a></li>
      <li><a href="https://twitter.com/austinzleath" target="_blank">Twitter</a></li>
      <li><a href="https://www.facebook.com/AustinZacharyLeath" target="_blank">Facebook</a></li>
   </ul>
</div>
<div class="col-four tab-1-3 mob-full footer-subscribe">
<h4>Subscribe</h4>
<p>Keep yourself updated. Subscribe to my newsletter.</p>
<div class="subscribe-form">
<form method="post" action="" novalidate="true">
   <input type="email" value="" name="email" class="email" id="mc-email" placeholder="johndoe@gmail.com">
   <input type="submit" name="subscribe">
   <label for="mc-email" class="subscribe-message"></label>
</form>
';

include_once 'register.php';

echo '
</div>
</div>
</div>
</div>
<div class="footer-bottom">
   <div class="row">
      <div class="col-twelve">
         <div class="copyright">
            <span>© Copyright <a href="https://www.austinleath.com/">rileighsayen.com</a> 2019</span>
            <span>Design by <a href="https://www.styleshout.com/">styleshout</a></span>
            <span>Modified by Austin Leath</span>
         </div>
         <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
         </div>
      </div>
   </div>
</div>
</footer>
';
?>
