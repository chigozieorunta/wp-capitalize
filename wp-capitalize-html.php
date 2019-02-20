
<style>
.switch {
	-moz-box-shadow:    inset 0 0 10px rgba(0, 0, 0, 0.6);
    -webkit-box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.6);
   	box-shadow:         inset 0 0 10px rgba(0, 0, 0, 0.6);
	width: 50px; 
	border-radius: 100px; 
	background: #666; 
	padding: 3px;
	display: inline-block;
	position: relative;
	transition: all 0.3s;
}

.switch-on {
	-moz-box-shadow:    inset 0 0 10px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.3);
   	box-shadow:         inset 0 0 10px rgba(0, 0, 0, 0.3);
	width: 50px; 
	border-radius: 100px; 
	background: orange;
	padding: 3px;
	display: inline-block;
	position: relative;
	transition: all 0.3s;
}

.switch-btn {
	height: 24px; width: 24px; 
	background: #fff; 
	border-radius: 100%;
	transition: all 0.3s;
	position: relative;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
	left: 0px;
}

.switch-btn-on {
	height: 24px; width: 24px; 
	background: #fff; 
	border-radius: 100%;
	transition: all 0.3s;
	position: relative;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
	left: 26px;
}

.text-center {
	text-align: center;
}

h3 {
	position: relative;
}

h3 > i {
	position: absolute; top: 5px; left: -30px;
}
</style>
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