<?php

add_action('academy/templates/after_main_content', function () { ?>
	<div class="academy-courses">
		<div class="academy-container">
			<div class="academy-row">
				<div class="academy-col-12">
					<h2>Cursos destacados</h2>
					<hr>
					<br>
					<?php
					$args = array(
						'post_type' => 'academy_courses',
						'posts_per_page' => 4
					);
					$template_path = explode('/', __FILE__);
					array_pop($template_path);
					$template_path = implode('/', $template_path) . '/';
					\Academy\Helper::get_template('templates/global/featured_courses.php', $args, "", $template_path);
					?>
				</div>
			</div>
		</div>
	</div>
<?
}, 9999);

add_action('academy/templates/after_main_content', function () { ?>
	<div class="academy-courses">
		<div class="academy-container">
			<div class="academy-row">
				<div class="academy-col-12">
					<hr>
					<main class="hello-academy-content"  style="background-color: unset;">
						<?php
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 3
						);
						$template_path = explode('/', __FILE__);
						array_pop($template_path);
						$template_path = implode('/', $template_path) . '/';
						\Academy\Helper::get_template('templates/global/featured_posts.php', $args, "", $template_path);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?
}, 9999);
