<?php
/**
 * Created by PhpStorm.
 * User: raffa
 * Date: 12/9/2017
 * Time: 10:49 PM
 */
?>

<footer id="footer" role="contentinfo">
		<a href="#" class="gotop js-gotop"><i class="icon-arrow-up2"></i></a>
		<div class="container">
			<div class="">
				<div class="col-md-12 text-center">
					<p>&copy; {{$textos[12]->contenido}} <br>Created by RAFFAELE RANALDO XD</p>

				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="social social-circle">
						<li><a href="https://www.facebook.com/raffaele.ranaldo"><i class="icon-facebook"></i></a></li>
						<li><a href="https://www.linkedin.com/in/raffaeleranaldo/"><i class="icon-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>


	<!-- For demo purposes Only ( You may delete this anytime :-) -->
	<div id="colour-variations">
		<a class="option-toggle"><i class="icon-gear"></i></a>
		<h3>Preset Colors</h3>
		<ul>
			<li>
				<a href="javascript: void(0);" data-theme="style">
					<span style="background: #3f95ea;"></span>
                    <span style="background: #f2f2f2;"></span>
					<span style="background: #52d3aa;"></span>
				</a>
			</li>
			<li>
				<a href="javascript: void(0);" data-theme="style2">
					<span style="background: #329998;"></span>
					<span style="background: #6cc99c;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>
			<li>
				<a href="javascript: void(0);" data-theme="style3">
					<span style="background: #9f466e;"></span>
					<span style="background: #c24d67;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>
			<li>
				<a href="javascript: void(0);" data-theme="style4">
					<span style="background: #21825C;"></span>
					<span style="background: #A4D792;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>

		</ul>
	</div>
	<!-- End demo purposes only -->


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Counter -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
	<script src="js/jquery.style.switcher.js"></script>
	<script>
$(function(){
    $('#colour-variations ul').styleSwitcher({
				defaultThemeId: 'theme-switch',
				hasPreview: false,
				cookie: {
        expires: 30,
		          	isManagingLoad: true
		      	}
			});
			$('.option-toggle').click(function() {
                $('#colour-variations').toggleClass('sleep');
            });
		});
	</script>
	<!-- End demo purposes only -->

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>
