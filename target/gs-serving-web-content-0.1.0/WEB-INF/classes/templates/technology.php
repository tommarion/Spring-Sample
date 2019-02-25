<!DOCTYPE html>
<html>
	<head>
		<?php $title = 'Webversive | Technology'; ?>
		<?php include 'header.php' ?>
		<link rel='stylesheet' href='/assets/stylesheets/technology.css'/>
	</head>
	<body>
		<?php include 'nav.php' ?>
		<div id='wrapper'>
			<div class='hardware image'>
				<div class='text'>
					<div style="top:calc( 10vw + 8vh + 50px ); left:calc( 4vw + 40px ); width:calc( 100% - 27vw ); padding-right:calc( 23vw - 40px );">
						Webversive℠ specializes in a range of web graphics technologies, from SVG and CSS animations to 3D model rendering using the <a href='https://threejs.org/'>three.js</a> library
					</div>
				</div>
			</div>
			<div class='software image large'>
				<div class='text'>
					<div style="top:calc( 10vw + 8vh + 50px ); left:calc( 4vw + 40px ); width:calc( 100% - 27vw ); padding-right:calc( 23vw - 40px );">
						Run servers on Apache and PHP, nginx, Java, Node, or golang
						<p>
							Take advantage of frameworks, libraries, and technologies such as jQuery, AJAX, Angular, React, and Ember, or keep it vanilla for a lightweight solution
						</p>
					</div>
				</div>
			</div>
			<?php include 'footer.php'?>
		</div>
	</body>
	<script src='/assets/javascripts/jquery.slim.js'></script>
	<script src='/assets/javascripts/index.js'></script>
</html>