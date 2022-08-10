<div class="academy-courses__body__destacados">
	<div class="academy-row">
		<?php
		 	do_action( 'academy/templates/before_course_loop' );
			$category_posts = new WP_Query($action_args['args']);
			if($category_posts->have_posts()) {
				while($category_posts->have_posts()) : 
					$category_posts->the_post();
					\Academy\Helper::get_template( 'shortcode/course.php', array( 'column' => 'academy-col-md-3 academy-col-sm-6' ) );
				endwhile;
			} else {
				do_action( 'academy/templates/no_course_found' );
			}
		?>
	</div>
</div>
