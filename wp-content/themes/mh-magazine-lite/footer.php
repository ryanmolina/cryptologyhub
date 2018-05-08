<?php mh_before_footer(); ?>
<?php mh_magazine_lite_footer_widgets(); ?>
<style type="text/css">

	.footer_wrap * {
		box-sizing: border-box;
	}

	.footer_wrap {
		background-color: #1f1e1e;
		min-height: 300px;
		padding: 20px;
		color: white;
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
		padding: 10px;
		/*outline: 1px solid red;*/
		width: 33%;
		display: inline-block;
		position: relative;
	}


	.footer_about_cryptohub {
		padding: 10px;
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
	    /*max-width: 300px;*/
	    position: relative;
	    padding: 4px;
	    margin-top: 20px;
	}

	input[type=text] {
		width: 72%;
		padding: 12px;
	}

	.btnSubscribe {
		/*position: absolute;*/
	    top: 4px;
	    /*right: 4px;*/
	    padding: 12px 8px;
	    color: #fff !important;
	    border-radius: 0;
	    background: #ff9519 !important;
	    cursor: pointer;
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

				<div class="mega_social_icons">
					<div><a href=""></a></div>
					<div><a href=""></a></div>
					<div><a href=""></a></div>
					<div><a href=""></a></div>
					<div><a href=""></a></div>
					<div><a href=""></a></div>
				</div>

				<div class="subs_wrapper">
					<input class="subscribeText" type="text" name="subscribeText" placeholder="Please Type Your Email">
					<button class="btnSubscribe">Subscribe</button>
				</div>

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

		</div>

		<div class="mh-copyright-wrap">
			<div class="mh-container mh-container-inner mh-clearfix">
				<p class="mh-copyright"><?php printf(esc_html__('CryptologyHub 2018 All rights reserved.'), date("Y"), '<a href="' . esc_url('https://www.mhthemes.com/') . '" rel="nofollow">MH Themes</a>'); ?></p>
			</div>
		</div>
	</div>



</div>
<?php mh_after_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>



<!-- 		<div class="mh-copyright-wrap">
			<div class="mh-container mh-container-inner mh-clearfix">
				<p class="mh-copyright"><?php printf(esc_html__('CryptologyHub 2018 All rights reserved.'), date("Y"), '<a href="' . esc_url('https://www.mhthemes.com/') . '" rel="nofollow">MH Themes</a>'); ?></p>
			</div>
		</div>
	</div> -->