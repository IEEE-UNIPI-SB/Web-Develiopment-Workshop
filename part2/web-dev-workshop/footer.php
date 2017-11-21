<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Web_Dev_Workshop
 */

?>

	</div><!-- #content -->

	<footer class="row" style="height:250px; background-color:#101010;">
				<div class="col-md-3 col-lg-3 col-sm-3" style="height:200px;" >
					<h5>Site Pages</h5>
					<ul>
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Products</a>
						</li>
						<li>
							<a href="#" >Services</a>
						</li>
						<li>
							<a href="#">Contact</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-3" style="height:200px;">
					<h5>Social Media</h5>
					<ul class="social-media">
						<li >
							<a href="#" class="fa fa-facebook-square"></a>
						</li>
						<li>
							<a href="#" class="fa fa-twitter"></a>
						</li>
						<li>
							<a href="#" class="fa fa-youtube"></a>
						</li>
						<li>
							<a href="#" class="fa fa-instagram" ></a>
						</li>
					</ul>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-3" style="height:200px;">
					<h5>Contact</h5>
					<ul>
						<li>IEEE UniPi SB</li>
						<li>University of Piraeus</li>
						<li>Karaoli & Dimitriou St. 80</li>
						<li>185 34</li>
					</ul>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-3" style="height:200px;">
					<h5>Vision</h5>
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum, nulla at congue lobortis, magna libero tincidunt lorem, quis pretium eros augue id leo.</li>
					</ul>
				</div>
				<div class="row" style="height:50px; width:95%;">
					<p style="text-align:center; ">COPYRIGHTS &copy; WORDPRESS 2017</p>
				</div>
			</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
