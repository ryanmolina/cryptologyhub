<?php mh_before_footer(); ?>
<?php mh_magazine_lite_footer_widgets(); ?>


<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style type="text/css">

	.footer_wrap * {
		box-sizing: border-box;
	}

	.footer_wrap {
		background-color: #1f1e1e;
		min-height: 300px;
		padding: 20px;
		color: white;
		background-image: url('https://static1.squarespace.com/static/58716df49f745668dc6eaa89/t/5a31cf1124a6943e96223fce/1513213790260/Kansas-City-Skyline.png');
	    background-position: bottom;
	    background-repeat: no-repeat;
	    background-size: 100%;
	    background-blend-mode: color-burn;
	}

	.mh-copyright-wrap {
		background-color: transparent;
	}

	.footer_wrap h4 {
		color: white;
		margin-bottom: 10px;
		background-color: #005a8c;
		display: block;
		width: 100%;
		padding: 10px;
		text-transform: uppercase;
	}

	.footer_inner_wrap {
		width: 100%;
	}

	.footer_about_us {
		padding: 20px;
		/*outline: 1px solid red;*/
		width: 33%;
		display: inline-block;
		position: relative;
	}


	.footer_about_cryptohub {
		padding: 20px;
		/*outline: 1px solid yellow;*/
		width: 33%;
		display: inline-block;
		position: relative;
		vertical-align: top;
	}

	.footer_list {
		/*list-style-type: disc;*/
		/*margin-left: 30px;*/
	}

	.footer_list li {
		margin-bottom: 5px;
		border-bottom: 1px dotted #636262;
		padding-bottom: 5px;
	}

	.footer_list li a {
		color: white;
	}

	.footer_list li a:hover {
		color: #005a8c;
	}

	.subs_wrapper {
		width: 100%;
		background: #fff;
	    max-width: 300px;
	    position: relative;
	    padding: 4px;
	    margin-top: 20px;
	}

	input[type=text] {
		width: 70%;
		padding: 12px;
	}

	.btnSubscribe {
		position: absolute;
	    top: 4px;
	    right: 4px;
	    padding: 12px 8px;
	    color: #fff !important;
	    border-radius: 0;
	    background: #ff9519 !important;
	    cursor: pointer;
	}

	.clearfix {
		content: ".";
	    display: block;
	    clear: both;
	    visibility: hidden;
	    line-height: 0;
	    height: 0;
	    margin: 0;
	    padding: 0;
	}

	.mh-boxed-layout .mh-container-inner {
		width: 100%;
	}

	.mh-container, .mh-container-inner {
	    width: 100%;
	    max-width: 1080px;
	    margin: 0 auto;
	    position: relative;
	}

	.mh-footer-nav {
		background-color: #005a8c;
		text-transform: uppercase;
		color: white;
	}

	.mh-footer-nav ul {
    float: right;
	}
	
	#mega-social-btn a{
		background: transparent !important;
	}




</style>



<div class="footer_wrap">
	<div class="footer_inner_wrap">
		
		<div class="footer_row">

			<div class="footer_about_us">
				<div class="footer_logo_wrap">
					<img style="filter: brightness(2);" class="footer_logo" src="http://localhost/projects/cryptologyhub/wp-content/uploads/2018/05/CRYPTOLOGYHUB-DARK-BLUE.png">
				</div>
				<p>Cryptology. I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
					<br>

				<div id="mega_social_icons" style="display: inline-flex;">
					<div id="mega-social-btn" style="margin: 0 3px;">
						<a href="https://www.facebook.com/" target="" style="font-size: 20px; border-radius: 50%; background: rgb(59, 89, 152); width: 40px; height: 40px; line-height: 40px;" data-onhovercolor="" data-onhoverbg="" data-onleavebg="#3b5998" data-onleavecolor="">
						
								<img src='<?php echo get_template_directory_uri().'/images/facebook.png' ?>'>
						
						</a>
					</div>
							
					<div id="mega-social-btn" style="margin: 0 3px;">
						<a href="https://twitter.com/?lang=en" target="" style="font-size: 20px; border-radius: 50%; background: rgb(85, 172, 238); width: 40px; height: 40px; line-height: 40px;" data-onhovercolor="" data-onhoverbg="" data-onleavebg="#55acee" data-onleavecolor="">
							<img src='<?php echo get_template_directory_uri().'/images/twitter.png' ?>'>
						</a>
					</div>
							
					<div id="mega-social-btn" style="margin: 0 3px;">
						<a href="https://www.youtube.com/" target="" style="font-size: 20px; border-radius: 50%; background: rgb(187, 0, 0); width: 40px; height: 40px; line-height: 40px;" data-onhovercolor="" data-onhoverbg="" data-onleavebg="#bb0000" data-onleavecolor="">
							<img src='<?php echo get_template_directory_uri().'/images/youtube.png' ?>'>
						</a>
					</div>
							
					<div id="mega-social-btn" style="margin: 0 3px;">
						<a href="https://www.tumblr.com/" target="" style="font-size: 20px; border-radius: 50%; background: rgb(44, 71, 98); width: 40px; height: 40px; line-height: 40px;" data-onhovercolor="" data-onhoverbg="" data-onleavebg="#2c4762" data-onleavecolor="">
							<img src='<?php echo get_template_directory_uri().'/images/tumblr.png' ?>'>
						</a>
					</div>
							
					<div id="mega-social-btn" style="margin: 0 3px;">
						<a href="https://www.instagram.com/" target="" style="font-size: 20px; border-radius: 50%; background: rgb(18, 86, 136); width: 40px; height: 40px; line-height: 40px;" data-onhovercolor="" data-onhoverbg="" data-onleavebg="#125688" data-onleavecolor="">
							<img src='<?php echo get_template_directory_uri().'/images/instragram.png' ?>'>
						</a>
					</div>
							
					<div id="mega-social-btn" style="margin: 0 3px;">
						<a href="https://www.google.com/gmail/about/#" target="" style="font-size: 20px; border-radius: 50%; color: ; background: #f9443a; width: 40px; height: 40px; line-height: 40px;" data-onhovercolor="" data-onhoverbg="" data-onleavebg="#f9443a" data-onleavecolor="">
							<img width="131px" src='<?php echo get_template_directory_uri().'/images/gmail.png' ?>'>
						</a>
					</div>
		
				</div> <!-- mega_social_icons -->

				<?php echo do_shortcode('[mc4wp_form id="2394"]'); ?>

				<!-- <div class="subs_wrapper form-group">
					<input class="subscribeText form-control" type="text" name="subscribeText" placeholder="Please Type Your Email">
					<button class="btnSubscribe form-control">Subscribe</button>
				</div> -->

			</div>

			<div class="footer_about_cryptohub">
				<h4>About CryptologyHUB</h4>
				<ul class="footer_list">
					<li><a href="">Open Position</a></li>
					<li><a href="">Write for CryptologyHUB</a></li>
					<li><a href="">Terms and Condition</a></li>
					<li><a href="">Privacy Policy</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			</div>

			<div class="footer_about_cryptohub">
				<h4>News</h4>
				<ul class="footer_list">
					<li><a href="">Bitcoin News</a></li>
					<li><a href="">Ethereum</a></li>
					<li><a href="">Litecoin</a></li>
					<li><a href="">Altcoin News</a></li>
					
				</ul>
			</div>


		</div><!-- footer_row -->

			

		

	</div><!-- footer_inner_wrap -->

	<nav class="mh-navigation mh-footer-nav">
		<div class="class="mh-container mh-container-inner clearfix>
			<div class="menu-footer-container">
				<ul id="menu-footer" class="menu">
					<li id="menu-item-290" class="menu-item"><a target="" href="">Features</a></li>
					<li id="menu-item-290" class="menu-item"><a target="" href="">Buy Theme</a></li>
					<li id="menu-item-290" class="menu-item"><a target="" href="">Showcase</a></li>
					<li id="menu-item-290" class="menu-item"><a target="" href="">Sitemap</a></li>
					<li id="menu-item-290" class="menu-item"><a target="" href="">Contact</a></li>
				</ul>
			</div>	
		</div>
	</nav>

	<div class="mh-copyright-wrap">
		<div class="mh-container mh-container-inner mh-clearfix">
			<p class="mh-copyright"><?php printf(esc_html__('CryptologyHub 2018 All rights reserved.'), date("Y"), '<a href="' . esc_url('https://www.mhthemes.com/') . '" rel="nofollow">MH Themes</a>'); ?></p>
		</div>
	</div>

</div><!-- footer_wrap -->




		


<?php mh_after_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>


