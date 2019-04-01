<?php
echo '
<header class="short-header">
   <div class="gradient-block"></div>
   <div class="row header-content">
      <div class="logo">
         <a href="/">Author</a>
      </div>
      <nav id="main-nav-wrap">
         <ul class="main-navigation sf-menu">
            <li><a href="/" title="">Home</a></li>
            <li class="has-children">
               <a title="">Categories</a>
               <ul class="sub-menu">
                  <li><a href="projects.php">Projects</a></li>
                  <li><a href="#">WORK IN PROGRESS</a></li>
                  <li><a href="#">WORK IN PROGRESS</a></li>
                  <li><a href="#">WORK IN PROGRESS</a></li>
               </ul>
            </li>
            <li class="has-children">
               <a href="#" target="_blank" title="">Social</a>
               <ul class="sub-menu">
                  <li><a href="https://github.com/AustinLeath/" target="_blank">GitHub</a></li>
                  <li><a href="https://www.instagram.com/austin_leath/" target="_blank">Instagram</a></li>
                  <li><a href="https://twitter.com/austinzleath" target="_blank">Twitter</a></li>
                  <li><a href="https://www.linkedin.com/in/austin-leath-30a39a106/" target="_blank">LinkedIn</a></li>
                  <li><a href="https://www.facebook.com/AustinZacharyLeath" target="_blank">Facebook</a></li>
               </ul>
            </li>
            <li><a href="about.php" title="">About Me</a></li>
            <li><a href="contact.php" title="">Contact</a></li>
         </ul>
      </nav>
      <div class="search-wrap">
         <form role="search" method="get" class="search-form" action="#">
            <label>
            <span class="hide-content">Search for:</span>
            <input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
            </label>
            <input type="submit" class="search-submit" value="Search">
         </form>
         <a href="#" id="close-search" class="close-btn">Close</a>
      </div>
      <div class="triggers">
         <a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
         <a class="menu-toggle" href="#"><span>Menu</span></a>
      </div>
   </div>
</header>
';
?>
