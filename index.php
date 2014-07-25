<?php
	
	//Lets try and keep Gampy out of the nursing home...?
	
	define('GAMPY_INC', 'C:/xampp/xampplite/htdocs/sites/gampy_includes');
	define('WEB_INC', 'C:/xampp/xampplite/htdocs/sites/gampy');
			
	require_once(GAMPY_INC.'/classes/class.main.php');
	session_name('GAMPY');
	session_start();
	
	$red_button = new Main($_SESSION);
?>
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>
		$(document).ready( function(){
			
			$.ajaxSetup ({
		        cache: false
		    });
			
			setInterval(function() {
	
				$("body").load("index.php", function( response, status, xhr ) {
		
					if ( status == "error" ) {	
						var msg = "Sorry but there was an error: ";	
						$("body").html( msg + xhr.status + " " + xhr.statusText );	
					}
		
				});
		
			}, 2000);
			
			
			
			
		});
	</script>
</head>
<body>
	
</body>