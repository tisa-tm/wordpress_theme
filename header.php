<!DOCTYPE html>
<html>
<head>
	<?php wp_head();?>
</head>
<body>
	<nav class="navigation">
		<img class = "logo" src="<?php echo get_template_directory_uri();?>/images/aboutus.jpg">
		<a style = "margin-left: 100px;" class = "navigation-link" href="http://localhost/roses_are_red">Home</a>
		<a class = "navigation-link" href="http://localhost/roses_are_red/about-us/">About us</a>
		<a class = "navigation-link" href="http://localhost/roses_are_red/contacts/">Contacts</a>
		<div class = "dropdown"><a class = "navigation-link" href="#">Dropdown <img src ="<?php echo get_template_directory_uri();?>/images/dropdown.png" height = "9" width = "10">
			<div class = "dropdown-content">
				<a href="#">Dropdown 1</a>
				<a href="#">Dropdown 2</a>
				<a href="#">Dropdown 3</a>
			</div>
		</a>
		</div>
	</nav>
