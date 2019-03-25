<?php
   echo
      '<header class="short-header">
      	<div class="gradient-block"></div>
      	<div class="row header-content">
      		<div class="logo">
   	         <a href="/blog/">Author</a>
   	      </div>
   	   	<nav id="main-nav-wrap">
   				<ul class="main-navigation sf-menu">
   					<li><a href="/blog/" title="">Home</a></li>
   					<li class="has-children">
   						<a href="category.php" title="">Categories</a>
   						<ul class="sub-menu">
   			            <li><a href="#">Fashion</a></li>
                     <li><a href="#">College</a></li>
                     <li><a href="#">Tips</a></li>
                     <li><a href="#">Tricks</a></li>
   			         </ul>
   					</li>
             <li class="has-children">
               <a href="#" target="_blank" title="">Social</a>
               <ul class="sub-menu">
                   <li><a href="https://www.instagram.com/rileighsayen/" target="_blank">Instagram</a></li>
                   <li><a href="https://twitter.com/rileighsayen" target="_blank">Twitter</a></li>
                   <li><a href="https://www.facebook.com/rileigh.sayen" target="_blank">Facebook</a></li>
               </ul>
             </li>
   					<li><a href="style-guide.php" title="">Styles</a></li>
   					<li><a href="about.php" title="">About</a></li>
   					<li><a href="contact.php" title="">Contact</a></li>
   				</ul>
   			</nav> <!-- end main-nav-wrap -->
   			<div class="search-wrap">
   				<form role="search" method="get" class="search-form" action="#">
   					<label>
   						<span class="hide-content">Search for:</span>
   						<input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
   					</label>
   					<input type="submit" class="search-submit" value="Search">
   				</form>
   				<a href="#" id="close-search" class="close-btn">Close</a>
   			</div> <!-- end search wrap -->
   			<div class="triggers">
   				<a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
   				<a class="menu-toggle" href="#"><span>Menu</span></a>
   			</div> <!-- end triggers -->
      	</div>
      </header>';
   ?>
