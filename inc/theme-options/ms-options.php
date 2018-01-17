<?php

/* customize login screen */
function mbthirty_custom_login_page() {
    echo '<style type="text/css">
        h1 a { background-image:url("'. get_stylesheet_directory_uri().'/images/copy-Logo_Doctor_Glass.png") !important; height: 90px !important; width: 100px !important; margin: 0 auto !important; }
		h1 a:focus { outline: 0 !important; box-shadow: none; }
        body.login { background-image:url("'. get_stylesheet_directory_uri().'/images/bg-min.jpg") !important; background-repeat: no-repeat !important; background-attachment: fixed !important; background-position: center !important; background-size: cover !important; position: relative; z-index: 999;}
  		body.login:before { background-color: rgba(0,0,0,0.7); position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
  		.login form {
  			background: rgba(255,255,255, 0.2) !important;
  		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: transparent !important;
			color: #ddd;
		}
		.login label {
			color: #DDD !important;
		}
		.login #login_error, .login .message {
			color: #ddd;
			margin-top: 20px;
			background: rgba(255,255,255, 0.2) !important;
		}
    </style>';
}
add_action('login_head', 'mbthirty_custom_login_page');
function mbthirty_login_logo_url_title() {
 	return 'Doctor Glass"';
}
add_filter( 'login_headertitle', 'mbthirty_login_logo_url_title' );
function mbthirty_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'mbthirty_login_logo_url' );