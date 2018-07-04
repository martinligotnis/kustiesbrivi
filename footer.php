<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kustiesbrivi
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="socmedia">
			<h3 class="title"><?php esc_html_e( 'Seko mums sociālajos tīklos', 'kustiesbrivi' ); ?></h3>
			<div class="soc">
				<a href="https://www.facebook.com/kustiesbrivi" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="Facebook" height="35" width="35" scale="0"></a>
				<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="Twitter" height="35" width="35" scale="0"></a> 
				<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/google_plus.png" alt="Google +" height="35" width="35" scale="0"></a>
				<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="Linkedin" height="35" width="35" scale="0"></a> 
			</div>
		</div>

		<div class="footerblock people">
			<h3 class="title"><?php esc_html_e( 'Mūsu speciālisi', 'kustiesbrivi' ); ?></h3>
			<div class="people">
				<ul>
					<li>
						<h4><?php printf( esc_html__( 'Jolanta Trukšāne-Līgotne', 'kustiesbrivi' )); ?></h4>
						<p><?php printf( esc_html__( 'Sertificēta fizioterapeite', 'kustiesbrivi' )); ?></p>
						<p id="acceptance"><?php printf( esc_html__( 'Pieņemšanas laiki:', 'kustiesbrivi' )); ?></p>
					</li>
				</ul>
				<ul class="timetable">
					<li><?php printf( esc_html__( 'Pirmdiena: 8:00 - 17:00', 'kustiesbrivi' )); ?></li>
					<li><?php printf( esc_html__( 'Otrdiena: 8:00 - 17:00', 'kustiesbrivi' )); ?></li>
					<li><?php printf( esc_html__( 'Trešdiena: 8:00 - 17:00', 'kustiesbrivi' )); ?></li>
					<li><?php printf( esc_html__( 'Ceturtdiena: 8:00 - 17:00', 'kustiesbrivi' )); ?></li>
					<li><?php printf( esc_html__( 'Piektdiena: 8:00 - 17:00', 'kustiesbrivi' )); ?></li>
					<li><?php printf( esc_html__( 'Sestdiena: Brīvdiena', 'kustiesbrivi' )); ?></li>
					<li><?php printf( esc_html__( 'Svētdiena: Brīvdiena', 'kustiesbrivi' )); ?></li>
				</ul>
			</div>
		</div>
		<div class="footerblock services">
			<h3 class="title"><?php esc_html_e( 'Mūsu pakalpojumi', 'kustiesbrivi' ); ?></h3>
			<div class="list">
				<p><a href="<?php echo get_site_url(); ?>/pakalpojumi"><?php printf( esc_html__( 'Fizioterapija', 'kustiesbrivi' )); ?></a></p>
				<p><a href="<?php echo get_site_url(); ?>/pakalpojumi"><?php printf( esc_html__( 'Ārstnieciskā vingrošana', 'kustiesbrivi' )); ?></a></p>
				<p><a href="<?php echo get_site_url(); ?>/pakalpojumi"><?php printf( esc_html__( 'Šrotes Terapija', 'kustiesbrivi' )); ?></a></p>
				<p><a href="<?php echo get_site_url(); ?>/pakalpojumi"><?php printf( esc_html__( 'Scenar konsultācijas', 'kustiesbrivi' )); ?></a></p>
				<p><a href="<?php echo get_site_url(); ?>/pakalpojumi"><?php printf( esc_html__( 'PNF', 'kustiesbrivi' )); ?></a></p>
				<p><a href="<?php echo get_site_url(); ?>/pakalpojumi"><?php printf( esc_html__( 'Masāža', 'kustiesbrivi' )); ?></a></p>
				<p><a href="<?php echo get_site_url(); ?>/pakalpojumi"><?php printf( esc_html__( 'Handling apmācības zīdaiņiem', 'kustiesbrivi' )); ?></a></p>
			</div>
		</div>
		<div class="footerblock contacts">
			<h3 class="title"><?php esc_html_e( 'Kontakti', 'kustiesbrivi' ); ?></h3>
			<div class="no_hover">
				<p><a href="tel:+371 26589789"><?php printf( esc_html__( 'Telefons: +371 23004318', 'kustiesbrivi' )); ?></a></p>
				<p><a href="https://www.google.lv/maps/place/Kusties+Br%C4%ABvi+SIA/@56.9408883,24.1326312,17z/data=!3m1!4b1!4m5!3m4!1s0x46eecfa0459c475d:0x8889d4676eb051df!8m2!3d56.9408883!4d24.1348199" target="_blank"><?php printf( __( 'Firsa Sadovņikova iela 20 - 318,<br> Rīga, lV-1032', 'kustiesbrivi' )); ?></a></p>
				<p class="no_cap"><a href="mailto:info@kustiesbrivi.lv"><?php printf( esc_html__( 'info@kustiesbrīvi.lv', 'kustiesbrivi' )); ?></a></p>
				<p class="no_cap"><a href="<?php echo site_url(); ?>"><?php printf( esc_html__( 'www.kustiesbrivi.lv', 'kustiesbrivi' )); ?></a></p>
			</div>
		</div>




		<div class="site-info">
			<p><?php printf( esc_html__( 'Visas tiesības aizsargātas %s ' . date('Y'), 'kustiesbrivi' ), 'Kusties Brīvi SIA' ); ?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
