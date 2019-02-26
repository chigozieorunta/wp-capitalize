<script type="text/javascript">
(function($) {	
	$(document).ready(function() {
		$(".switch").click(function() {
			$(this).toggleClass("switch-on");
			$(this).children(".switch-btn").toggleClass("switch-btn-on");
		});
	})
})( jQuery );
</script>

<div id="wpbody" role="main">
    <div id="wpbody-content">
		<div class="wrap about-wrap full-width-layout">
		    <h1>WP Capitalize</h1>
            <p class="about-text">A simple WordPress plugin designed to help you capitalize post titles, author names and others...</p>
			<div class="four-col">
				<div class="col">
					<h3><i class="dashicons dashicons-admin-post"></i>Post Settings</h3>
					<p>Adjust the styling of post titles here. Capitalize headings and titles for various posts easily.</p>
				</div>
				<div class="col text-center">
					<h3>&nbsp;</h3>
					<div class="switch">
						<div class="switch-btn"></div>
					</div>
				</div>
				<div class="col">
					<h3><i class="dashicons dashicons-admin-page"></i>Page Settings</h3>
					<p>Adjust the styling of page titles here. Capitalize headings and titles for various pages easily.</p>
				</div>
				<div class="col text-center">
					<h3>&nbsp;</h3>
					<div class="switch">
						<div class="switch-btn"></div>
					</div>
				</div>
			</div>
			<br/>
			<div class="four-col">
				<div class="col">
					<h3><i class="dashicons dashicons-admin-users"></i>Author Settings</h3>
					<p>Adjust the styling of post titles here. Capitalize headings and titles for various authors easily.</p>
				</div>
				<div class="col text-center">
					<h3>&nbsp;</h3>
					<div class="switch">
						<div class="switch-btn"></div>
					</div>
				</div>
				<div class="col">
					<h3><i class="dashicons dashicons-admin-comments"></i>Comment Settings</h3>
					<p>Adjust the styling of category titles here. Capitalize headings and titles for various comment authors easily.</p>
				</div>
				<div class="col text-center">
					<h3>&nbsp;</h3>
					<div class="switch">
						<div class="switch-btn"></div>
					</div>
				</div>
			</div>
			<br/>
			<div class="four-col">
				<div class="col">
					<h3><i class="dashicons dashicons-admin-post"></i>Category Settings</h3>
					<p>Adjust the styling of category titles here. Capitalize headings and titles for various categories easily.</p>
				</div>
				<div class="col text-center">
					<h3>&nbsp;</h3>
					<div class="switch">
						<div class="switch-btn"></div>
					</div>
				</div>
				<div class="col"></div>
				<div class="col"></div>
			</div>
        </div>
    </div>
</div>