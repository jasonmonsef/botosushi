<div id="feedback">
	<h2><span class="lrg-bracket">[</span>GIVE US <strong>FEEDBACK</strong><span class="lrg-bracket">]</span></h2>
	<p><img src="<?php bloginfo('template_url') ?>/images/logo-lrg.png"/></p>
	<p>
		Click on the stars below to rate your experience with Boto Sushi.
	</p>
	<p>
		How likely is it that you would recommend Boto Sushi to a friend?
	</p>

	<form id="ratingsForm">
		<div class="stars">
			<ul id="input_1_4" class="gfield_radio">
				<input type="radio" onclick="gf_apply_rules(1,[0,8,2,6,7,5]);" tabindex="1" id="choice_4_0" value="gsurvey4b0b3eb21" name="input_4" class="star-1 star">
				<label id="label_4_0" for="choice_4_0" class="star-1"></label>
				<input type="radio" onclick="gf_apply_rules(1,[0,8,2,6,7,5]);" tabindex="2" id="choice_4_1" value="gsurvey44ab71275" name="input_4" class="star-2 star">
				<label id="label_4_1" for="choice_4_1" class="star-2"></label>
				<input type="radio" onclick="gf_apply_rules(1,[0,8,2,6,7,5]);" tabindex="3" id="choice_4_2" value="gsurvey481ab3fc6" name="input_4" class="star-3 star">
				<label id="label_4_2" for="choice_4_2" class="star-3"></label>
				<input type="radio" onclick="gf_apply_rules(1,[0,8,2,6,7,5]);" tabindex="4" id="choice_4_3" value="gsurvey429e78a84" name="input_4" class="star-4 star">
				<label id="label_4_3" for="choice_4_3" class="star-4"></label>
				<input type="radio" onclick="gf_apply_rules(1,[0,8,2,6,7,5]);" tabindex="5" id="choice_4_4" value="gsurvey4b43b65f0" name="input_4" class="star-5 star">
				<label id="label_4_4" for="choice_4_4" class="star-5"></label>
				<span></span>
			</ul>
		</div> <!-- .stars -->
	</form> <!-- #ratingsForm -->
	
	
	<div class="switch">
		<div class="overlay-inner">
			<a class="trigger-overlay close menu-overlay" style="display: none"><span>Close</span><img width="25px" src="<?php bloginfo('template_url') ?>/images/closex.png"/></a>
			<h2><span class="lrg-bracket">[</span>GIVE US <strong>FEEDBACK</strong><span class="lrg-bracket">]</span></h2>
			<div  class="gform-wrap" style="height:0px;overflow: hidden;transition: all 0.3s ease 0s;">
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
			</div><!-- .gform-wrap -->
		</div><!-- .overlay-inner -->
	</div><!-- .switch -->
	
</div>