<?php include 'form-functions.php'; ?>
				<hr>
				<h4 class="desktop-only text-center">Basic Information</h4>
				<div class="row large-pt">
					<div class="small-12 large-4 columns">
						<p><label>Name
							<input type="text" name="name" id="name" value="<?php get_data("name"); ?>">
						</label></p>
					</div>
					<div class="small-12 large-4 columns">
						<p><label>Phone Number
							<input type="tel" name="tel" id="tel" value="<?php get_data("tel"); ?>">
						</label></p>
					</div>
					<div class="small-12 large-4 columns">
						<p><label>Email Address
							<input type="email" name="email" id="email" value="<?php get_data("email"); ?>">
						</label></p>
					</div>
				</div>
				<hr>
				<div class="row large-pt">
					<div class="small-12 large-4 columns">
						<p><label>Upload Your Resume or Portfolio
							<input type="file" name="resume" id="resume" value="<?php get_data("resume"); ?>">
						</label></p>
						<p><label>LinkedIn Profile
							<input type="url" name="linkedin" id="linkedin" value="<?php get_data("linkedin"); ?>">
						</label></p>
					</div>
					<div class="small-12 large-8 columns">
						<p><label>Additional Links <span class="subtext">Post your online portfolios from sites like Behance, Dribbble, or your own hosted site.</span>
							<textarea name="links" id="links"><?php get_data("links"); ?></textarea>
						</label></p>
					</div>
				</div>
				<hr class="desktop-only">
				<div class="row large-pt">
					<div class="small-12 large-centered large-8 columns">
						<p class="large-text-center"><label class="large-text">How Can We Help You? <span class="subtext-block subtext">Let us know what type of work conditions, styles, etc you prefer.</span>
							<textarea name="comments" id="comments"><?php get_data("comments"); ?></textarea>
						</label></p>
						<p class="text-center"><button type="submit" class="button" name="submit">Submit</button></p>
									<div id="form-messages" class="text-center"></div>
	</div>
				</div>