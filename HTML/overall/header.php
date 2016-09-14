	<title>Cinemil</title>
	<style>
		@font-face {
			font-family: "Track";
			src: url('<?php echo URL; ?>Views/fonts/Track.otf') format("truetype");

			font-family: "manteka";
			src: url('<?php echo URL; ?>Views/fonts/manteka.ttf') format("truetype");
		}
		.jssorb03 {
			position: absolute;
		}
		.jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
			position: absolute;
			/* size of bullet elment */
			width: 21px;
			height: 21px;
			text-align: center;
			line-height: 21px;
			color: white;
			font-size: 12px;
			background: url('<?php echo URL; ?>/Views/images/b03.png') no-repeat;
			overflow: hidden;
			cursor: pointer;
		}
		.jssorb03 div { background-position: -5px -4px; }
		.jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
		.jssorb03 .av { background-position: -65px -4px; }
		.jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }

		/* jssor slider arrow navigator skin 03 css */
        /*
        .jssora03l                  (normal)
        .jssora03r                  (normal)
        .jssora03l:hover            (normal mouseover)
        .jssora03r:hover            (normal mouseover)
        .jssora03l.jssora03ldn      (mousedown)
        .jssora03r.jssora03rdn      (mousedown)
        */
        .jssora03l, .jssora03r {
        	display: block;
        	position: absolute;
        	/* size of arrow element */
        	width: 55px;
        	height: 55px;
        	cursor: pointer;
        	background: url('<?php echo URL; ?>/Views/images/a03.png') no-repeat;
        	overflow: hidden;
        }
        .jssora03l { background-position: -3px -33px; }
        .jssora03r { background-position: -63px -33px; }
        .jssora03l:hover { background-position: -123px -33px; }
        .jssora03r:hover { background-position: -183px -33px; }
        .jssora03l.jssora03ldn { background-position: -243px -33px; }
        .jssora03r.jssora03rdn { background-position: -303px -33px; }
    </style>

    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>Views/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>Views/fontawesome/css/font-awesome.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>Views/css/general.css">
    <script src="<?php echo URL; ?>Views/js/jquery.min.js"></script>
    <script src="<?php echo URL; ?>Views/js/jquery.showYtVideo.js"></script>
    <script>
    	jQuery(document).ready(function ($) {
    		$('.show-modal').on('click', function () {
    			$.showYtVideo({
    				videoId: 'uVdV-lxRPFo'
    			});
    		});
    	});
    </script>
    <script type="text/javascript">

    	var _gaq = _gaq || [];
    	_gaq.push(['_setAccount', 'UA-36251023-1']);
    	_gaq.push(['_setDomainName', 'jqueryscript.net']);
    	_gaq.push(['_trackPageview']);

    	(function() {
    		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    	})();

    </script>