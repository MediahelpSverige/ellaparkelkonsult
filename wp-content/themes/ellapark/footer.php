	</main>

	<?php // Site footer ?>
	<footer>
		<div class="container">
			<div class="row">
				<aside class="col-sm-4 col-xs-12">
					<?php the_field('footer-adress', 4); ?>
				</aside>
				<aside class="col-sm-4 col-xs-12">
					<?php the_field('footer-contact', 4); ?>
				</aside>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>