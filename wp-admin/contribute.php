<?php
/**
 * Contribute administration panel.
 *
 * @package ForkedWord
 * @subpackage Administration
 */

/** ForkedWord Administration Bootstrap */
require_once __DIR__ . '/admin.php';

// Used in the HTML title tag.
$title = __( 'Get Involved' );

list( $display_version ) = explode( '-', get_bloginfo( 'version' ) );

require_once ABSPATH . 'wp-admin/admin-header.php';
?>
<div class="wrap about__container">

	<div class="about__header">
		<div class="about__header-title">
			<h1>
				<?php _e( 'Get Involved' ); ?>
			</h1>
		</div>

		<div class="about__header-text">
			<?php _e( 'Be the future of ForkedWord' ); ?>
		</div>
	</div>

	<nav class="about__header-navigation nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu' ); ?>">
		<a href="about.php" class="nav-tab"><?php _e( 'What&#8217;s New' ); ?></a>
		<a href="credits.php" class="nav-tab"><?php _e( 'Credits' ); ?></a>
		<a href="freedoms.php" class="nav-tab"><?php _e( 'Freedoms' ); ?></a>
		<a href="privacy.php" class="nav-tab"><?php _e( 'Privacy' ); ?></a>
		<a href="contribute.php" class="nav-tab nav-tab-active" aria-current="page"><?php _e( 'Get Involved' ); ?></a>
	</nav>

	<div class="about__section has-2-columns is-wider-right">
		<div class="column">
			<img src="<?php echo esc_url( admin_url( 'images/contribute-main.svg?ver=6.5' ) ); ?>" alt="" width="290" height="290" />
		</div>
		<div class="column is-vertically-aligned-center">
			<p><?php _e( 'Do you use ForkedWord for work, for personal projects, or even just for fun? You can help out on github github.com/ForkedWord' ); ?></p>
	
</div>
<?php
require_once ABSPATH . 'wp-admin/admin-footer.php';
