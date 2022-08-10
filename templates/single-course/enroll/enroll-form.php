<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<?php if( $user_ID ): ?>
	<form class="academy-widget-enroll__enroll-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
		<?php wp_nonce_field( 'academy_course_enroll_now', '_wpnonce' ); ?>
		<input type="hidden" name="academy_course_id" value="<?php echo get_the_ID(); ?>">
		<input type="hidden" name="action" value="academy_course_enroll">
		<button type="submit" class="academy-btn academy-btn--bg-purple">
			<?php esc_html_e( 'Tomar el curso', 'academy' ); ?>
		</button>
	</form>
<?php else: ?>
	<button type="submit" class="academy-btn academy-btn--bg-purple" onclick="; location.href = '/my-account/'">
		<?php esc_html_e( 'Enroll Now', 'academy' ); ?>
	</button>
	<hr>
<?php endif; ?>
