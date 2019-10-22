<!-- footer-menu -->
<div id="footer-menu">
	<div class="inner">
		<!-- <div class="footer-logo"><a href="/">TF-30</a></div>
		<div class="footer-sub">サブタイトルが入りますサブタイトルが入ります</div> -->

		<div class="footer-logo"><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name') ?></a></div><!-- /footer-logo -->
		<div class="footer-sub"><?php bloginfo('description') ?></div><!-- /footer-sub -->

		<nav class="footer-nav">
			<!-- <ul class="footer-list">
				<li class="menu-item"><a href="#">メニュー1</a></li>
				<li class="menu-item"><a href="#">メニュー2</a></li>
				<li class="menu-item"><a href="#">メニュー3</a></li>
				<li class="menu-item"><a href="#">メニュー4</a></li>
				<li class="menu-item"><a href="#">メニュー5</a></li>
			</ul> -->
			<?php
			wp_nav_menu(
				array(
					'depth' => 1,
					'theme_location' => 'footer',
					'container' => 'false',
					'menu_class' => 'footer-list,'

				)
			);
			?>
		</nav>

	</div><!-- /inner -->
</div><!-- /footer-menu -->



<!-- footer -->
<footer id="footer">
	<div class="inner">
		<div class="copy">&copy; daily-trial WordPress theme All rights reserved.</div><!-- /copy -->
		<div class="by">Presented by <a href="https://tokyofreelance.jp/" rel="noopener" target="_blank">東京フリーランス</a>
		</div><!-- /by -->

	</div><!-- /inner -->
</footer><!-- /footer -->

<?php get_template_part('template-parts/share'); ?>

<div class="floating">
	<a href="#"><i class="fas fa-chevron-up"></i></a>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script> -->

<?php wp_footer(); ?>

</body>

</html>