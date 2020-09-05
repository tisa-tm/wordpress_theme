<?php get_header();?>
<div class="slideshow-container">
		<!-- Navigation for small screens/ Hamburger Menu -->
		<div class = "navigation-small-image">
			<img src="wp-content/themes/roses_are_red/images/navigation (1).png" height="35" width = "50">
			<div class = "navigation-small">
				<a class = "navigation-small-link" href="#">Home</a> 
				<a class = "navigation-small-link" href="#">About us</a>
				<a class = "navigation-small-link" href="#">Downloads</a>
				<div class = "navigation-small-dropdown"><a class = "navigation-small-link" href="#">Dropdown<img src ="wp-content/themes/roses_are_red/images/dropdown_small.png" height = "9" width = "10" style = "margin-left: 2px;">
						<div class = "navigation-small-dropdown-content">
							<a href="#">Dropdown 1</a>
							<a href="#">Dropdown 2</a>
							<a href="#">Dropdown 3</a>
						</div>
				</a></div>
			</div>
		</div>
		<div class="mySlides fade">
				<img class = "slideshow-image" src="wp-content/themes/roses_are_red/images/slideshow (1).jpg">
		</div>
		<div class="mySlides fade">
				<img class = "slideshow-image" src="wp-content/themes/roses_are_red/images/slideshow (4).jpg" style="width:100%">
		</div>
		<div class="mySlides fade">
				<img class = "slideshow-image" src="wp-content/themes/roses_are_red/images/slideshow (3).jpg" style="width:100%">
		</div>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

		<div class = "slideshow-text">
			<p class = "slideshow-text-header">Welcome!</p>
			<p class = "slideshow-text-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
			<button class = "call-to-action">Learn More</button>
		</div>

		<div class = "dot-container" style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span> 
			<span class="dot" onclick="currentSlide(2)"></span> 
			<span class="dot" onclick="currentSlide(3)"></span> 
		</div>
	</div>

	<div class = "container-news">
		<p class = "news-section-header">Today's News</p>
		<div class = "news-section">
			<?php while(have_posts()){
			the_post();
		 	?>
			<div class = "news">
				<p class = "news-header"><?php the_title();?></p>
				<p class = "news-brief"><?php the_excerpt(1);?></p>
				<span class = "news-date"><?php the_date();?></span>
				<a class = "news-readmore" href="<?php the_permalink();?>">Read More</a>
			</div>
		<?php } ?>
			<!-- <div class = "news">
				<p class = "news-header">NEWS HEADLINE 2</p>
				<p class = "news-brief">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<span class = "news-date">Aug 18, 2020</span>
				<a class = "news-readmore" href="#">Read More</a>
			</div>
			<div class = "news">
				<p class = "news-header">NEWS HEADLINE 3</p>
				<p class = "news-brief">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<span class = "news-date">Aug 18, 2020</span>
				<a class = "news-readmore" href="#">Read More</a>
			</div>
			<div class = "news">
				<p class = "news-header">NEWS HEADLINE 4</p>
				<p class = "news-brief">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<span class = "news-date">Aug 18, 2020</span>
				<a class = "news-readmore" href="#">Read More</a>
			</div> -->
		</div>
	</div>
	<?php get_footer();?>

