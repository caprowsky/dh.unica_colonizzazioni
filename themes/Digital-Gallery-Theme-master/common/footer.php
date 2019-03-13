		</div> <!-- end of .content -->

		<footer>
			<div class="row">
				<nav class="footer-nav">
					<div class="span3">
						<h3>Browse Collections</h3>
						<ul class="unstyled">
							<li><a href="#">Link 1</a></li>
							<li><a href="#">Link 2</a></li>
							<li><a href="#">Link 3</a></li>
						</ul>
					</div>
					<div class="span3">
						<h3>Featured</h3>
						<ul class="unstyled">
							<li><a href="#">Link 1</a></li>
							<li><a href="#">Link 2</a></li>
							<li><a href="#">Link 3</a></li>
						</ul>
					</div>
					<div class="span3">
						<h3>Resources</h3>
						<ul class="unstyled">
							<li><a href="#">Link 1</a></li>
							<li><a href="#">Link 2</a></li>
							<li><a href="#">Link 3</a></li>
						</ul>
					</div>
					<div class="span3">
						<h3>About</h3>
						<ul class="unstyled">
							<li><a href="#">Link 1</a></li>
							<li><a href="#">Link 2</a></li>
							<li><a href="#">Link 3</a></li>
						</ul>
					</div>
				</nav>
			</div>
			<div clas="row">
				<div class="span6">
					<a href="http://www.bgsu.edu/colleges/library/index.html">
					<img src="<?php echo img('footer_logo.png'); ?>" alt="BGSU Logo" /></a>
				</div>
				<div class="span6">
					<ul class="social-media navigation">
						<li>
							<a title="Like Us on Facebook" href="http://www.facebook.com/pages/Bowling-Green-OH/Bowling-Green-State-University-Libraries/117251392633?ref=ts">
								<img src="http://ul2.bgsu.edu/www2/images/icons/facebook.png" alt="Facebook Icon" /></a>
						</li>
						<li>
							<a title="Follow Us on Twitter" href="http://twitter.com/bglibrarian67">
								<img src="http://ul2.bgsu.edu/www2/images/icons/twitter.png" alt="Twitter Icon" /></a>
						</li>
						<li>
							<a title="Email Us" href="#email">
								<img src="http://ul2.bgsu.edu/www2/images/icons/email.png" alt="Email Icon" /></a>
						</li>
						<li>
							<a title="Subscribe to the RSS Feed" href="<?php echo url('/items/browse?output=rss2'); ?>">
								<img src="http://ul2.bgsu.edu/www2/images/icons/rss.png" alt="RSS Feed" /></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="span12">
					<small><?php echo get_theme_option('footer_text'); ?></small>
				</div>
			</div>

			<?php fire_plugin_hook('public_footer', array('view' => $this)); ?>
		</footer>

	</section>

<script>/* Away we go! */ digitalGallery.init();</script>

</body>
</html>
