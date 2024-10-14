<?php
/**
 * About This Version administration panel.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** WordPress Administration Bootstrap */
require_once __DIR__ . '/admin.php';

// Used in the HTML title tag.
/* translators: Page title of the About WordPress page in the admin. */
$title = _x( 'About', 'page title' );

list( $display_version ) = explode( '-', get_bloginfo( 'version' ) );

require_once ABSPATH . 'wp-admin/admin-header.php';
?>
	<div class="wrap about__container">

		<div class="about__header">
			<div class="about__header-title">
				<h1>
					<?php
					printf(
						/* translators: %s: Version number. */
						__( 'ForkedWord' ),
						$display_version
					);
					?>
				</h1>
			</div>
		</div>

		<nav class="about__header-navigation nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu' ); ?>">
			<a href="about.php" class="nav-tab nav-tab-active" aria-current="page"><?php _e( 'What&#8217;s New' ); ?></a>
			
		</nav>

		<div class="about__section changelog has-subtle-background-color">
			<div class="column">
				<h2><?php _e( 'Maintenance and Security Releases' ); ?></h2>
				<p>
					<?php
					printf(
						/* translators: 1: WordPress version number, 2: Plural number of bugs. */
						_n(
							'<strong>Version %1$s</strong> addressed %2$s bug.',
							'<strong>Version %1$s</strong> addressed %2$s bugs.',
							26
						),
						'6.6.2',
						'26'
					);
					?>
					<?php
					printf(
						/* translators: %s: HelpHub URL. */
						__( 'For more information, see <a href="%s">the release notes</a>.' ),
						sprintf(
							/* translators: %s: WordPress version. */
							esc_url( __( 'https://forkedword.com' ) ),
							sanitize_title( '1.0' )
						)
					);
					?>
				</p>
				<p>
					<?php
					printf(
						/* translators: 1: WordPress version number, 2: Plural number of bugs. */
						_n(
							'<strong>Version %1$s</strong> addressed %2$s bug.',
							'<strong>Version %1$s</strong> addressed %2$s bugs.',
							16
						),
						'6.6.1',
						'16'
					);
					?>
					<?php
					printf(
						/* translators: %s: HelpHub URL. */
						__( 'For more information, see <a href="%s">the release notes</a>.' ),
						sprintf(
							/* translators: %s: WordPress version. */
							esc_url( __( 'https://forkedword.com/' ) ),
							sanitize_title( '1.0' )
						)
					);
					?>
				</p>
			</div>
		</div>

		<div class="about__section">
			<div class="column">
				<h2>
					<?php
					printf(
						/* translators: %s: Version number. */
						__( 'Welcome to ForkedWord %s' ),
						$display_version
					);
					?>
				</h2>
				<p class="is-subheading">
					<?php _e( 'You can create and publish beautiful designs across your sites. This was forked from WP 6.6.2, the features listed are from WP. The main changes have been the logo, removal of hello dolly plugin, adding the replacement plugin, to have ForkedWord across the site, via a plugin and updating these files. Bigger updatees are being worked on, but are not ready for release.   WP added  a new rollback option for auto-updating plugins in 6.6.2. All other updates listed are by WP. ForkedWord Is a fork of the codebase of WP, just like WP was a fork of b2cafe. That is the only thing in common between the two. We have removed all WP logos and replaced them with a potentially temporary ForkedWord logo.' ); ?>
				</p>
			</div>
		</div>

		<div class="about__section has-2-columns">
			<div class="column is-vertically-aligned-center">
				<h3><?php _e( 'Color palettes & font sets' ); ?></h3>
				<p><strong><?php _e( ' WP updates: Add more design options to any block theme.' ); ?></strong> <?php _e( 'Block theme authors can create unlimited individual color or font sets to offer more specific design options within the same theme. These sets provide more contained design possibilities, allowing for customization without changing the site&#8217;s broader styling, beyond color or typography settings.' ); ?></p>
			</div>
			<div class="column is-vertically-aligned-center">
					</div>
		</div>

		<div class="about__section has-2-columns">
			<div class="column is-vertically-aligned-center">
				</div>
			<div class="column is-vertically-aligned-center">
				<h3><?php _e( 'Quick previews for pages' ); ?></h3>
				<p><strong><?php _e( 'Simplify your workflow with a new layout built for pages.' ); ?></strong> <?php _e( 'See all of your pages and a preview of any selected page before you edit via a new side-by-side layout in the Site Editor.' ); ?></p>
			</div>
		</div>

		<div class="about__section has-2-columns">
			<div class="column is-vertically-aligned-center">
				<h3><?php _e( 'Rollbacks for plugin auto-updates' ); ?></h3>
				<p><strong><?php _e( 'Auto-update your plugins with peace of mind.' ); ?></strong> <?php _e( 'Enjoy the ease of plugin auto-updates with the safety of rollbacks if anything goes wrong, improving your site&#8217;s security while minimizing potential downtime.' ); ?></p>
			</div>
			<div class="column is-vertically-aligned-center">
				
				</div>
			</div>
		</div>

		<div class="about__section has-2-columns">
			<div class="column is-vertically-aligned-center">
								</div>
			</div>
			<div class="column is-vertically-aligned-center">
				<h3><?php _e( 'Overrides' ); ?></h3>
				<p><strong><?php _e( 'Add the ability to customize content in synced patterns.' ); ?></strong> <?php _e( 'Allow specific pieces of content to be customized in each instance of a synced pattern while keeping a consistent style for all instances, simplifying future updates. Currently, you can set overrides for Heading, Paragraph, Button, and Image blocks.' ); ?></p>
			</div>
		</div>

		<hr class="is-invisible is-large" />

		<div class="about__section has-2-columns">
			<div class="column">
				<h3><?php _e( 'Performance updates' ); ?></h3>
				<p>
					<?php
					printf(
						/* translators: %1$s: code-formatted "WP_Theme_JSON", %2$s: code-formatted "data-wp-on-async", %%: escaped percent sign, leave as %%. */
						__( 'WordPress 6.6 includes important updates like removing redundant %1$s calls, disabling autoload for large options, eliminating unnecessary polyfill dependencies, lazy loading post embeds, introducing the %2$s directive, and a 33%% reduction in template loading time in the editor.' ),
						'<code>WP_Theme_JSON</code>',
						'<code>data-wp-on-async</code>'
					);
					?>
				</p>
			</div>
			<div class="column">
				<div class="about__image">
				</div>
				<h3><?php _e( 'Accessibility improvements' ); ?></h3>
				<p><?php _e( '55+ accessibility fixes and enhancements focus on foundational aspects of the WordPress experience, particularly the data views component powering the new site editing experience and areas like the Inserter that provide a key way of interacting with blocks and patterns.' ); ?></p>
			</div>
		</div>

		<hr class="is-invisible is-large" style="margin-bottom:calc(2 * var(--gap));" />

		<div class="about__section has-2-columns is-wider-left is-feature" style="background-color:var(--background);border-radius:var(--border-radius);">
			<h3 class="is-section-header"><?php _e( 'And much more' ); ?></h3>
			<div class="column">
				<p><?php _e( 'For a comprehensive overview of all the new features and enhancements in WordPress 6.6, please visit the feature-showcase website.' ); ?></p>
			</div>
			<div class="column aligncenter">
				<div class="about__image">
					<a href="<?php echo esc_url( __( 'https://forkedword.com/ForkedWord.zip' ) ); ?>" class="button button-primary button-hero"><?php _e( 'Download ForkedWord' ); ?></a>
				</div>
			</div>
		</div>

		<hr class="is-large" style="margin-top:calc(2 * var(--gap));" />

		<div class="about__section has-3-columns">
			<div class="column is-vertically-aligned-center" style="grid-column-end:span 2">
				<p>
					<?php
					printf(
						/* translators: 1: Learn WordPress link, 2: Workshops link. */
						__( '<a href="%1$s">For now, learn from WP</a>, a free resource for new and experienced WP users. Learn is stocked with how-to videos on using various features in WP, <a href="%2$s">interactive workshops</a> for exploring topics in-depth, and lesson plans for diving deep into specific areas of WordPress.' ),
						'https://learn.wordpress.org/',
						'https://learn.wordpress.org/online-workshops/'
					);
					?>
				</p>
			</div>
		</div>

		<div class="about__section has-2-columns">
			<div class="column">
				<div class="about__image">
				</div>
				<p style="margin-top:calc(var(--gap) / 2);">
					<?php
					printf(
						/* translators: 1: WordPress Field Guide link, 2: WordPress version number. */
						__( 'Explore the <a href="%1$s">WP %2$s Field Guide</a>. Learn about the changes in this release with detailed developer notes to help you build with WordPress.' ),
						esc_url( __( 'https://make.wordpress.org/core/wordpress-6-6-field-guide/' ) ),
						'6.6'
					);
					?>
				</p>
			</div>
			<div class="column">
				<div class="about__image">
				</div>
				<p style="margin-top:calc(var(--gap) / 2);">
					<?php
					printf(
						/* translators: 1: WordPress Release Notes link, 2: WordPress version number. */
						__( '<a href="%1$s">Read the WP %2$s Release Notes</a> for information on installation, enhancements, fixed issues, release contributors, learning resources, and the list of file changes.' ),
						sprintf(
							/* translators: %s: WordPress version number. */
							esc_url( __( 'https://wordpress.org/documentation/wordpress-version/version-%s/' ) ),
							'6-6'
						),
						'6.6'
					);
					?>
				</p>
			</div>
		</div>

		<hr class="is-large" />

		<div class="return-to-dashboard">
			<?php
			if ( isset( $_GET['updated'] ) && current_user_can( 'update_core' ) ) {
				printf(
					'<a href="%1$s">%2$s</a> | ',
					esc_url( self_admin_url( 'update-core.php' ) ),
					is_multisite() ? __( 'Go to Updates' ) : __( 'Go to Dashboard &rarr; Updates' )
				);
			}

			printf(
				'<a href="%1$s">%2$s</a>',
				esc_url( self_admin_url() ),
				is_blog_admin() ? __( 'Go to Dashboard &rarr; Home' ) : __( 'Go to Dashboard' )
			);
			?>
		</div>
	</div>

<?php require_once ABSPATH . 'wp-admin/admin-footer.php'; ?>

<?php

// These are strings we may use to describe maintenance/security releases, where we aim for no new strings.
return;

__( 'Maintenance Release' );
__( 'Maintenance Releases' );

__( 'Security Release' );
__( 'Security Releases' );

__( 'Maintenance and Security Release' );
__( 'Maintenance and Security Releases' );

/* translators: %s: WordPress version number. */
__( '<strong>Version %s</strong> addressed one security issue.' );
/* translators: %s: WordPress version number. */
__( '<strong>Version %s</strong> addressed some security issues.' );

/* translators: 1: ForkedWord version number, 2: Plural number of bugs. */
_n_noop(
	'<strong>Version %1$s</strong> addressed %2$s bug.',
	'<strong>Version %1$s</strong> addressed %2$s bugs.'
);

/* translators: 1: WordPress version number, 2: Plural number of bugs. Singular security issue. */
_n_noop(
	'<strong>Version %1$s</strong> addressed a security issue and fixed %2$s bug.',
	'<strong>Version %1$s</strong> addressed a security issue and fixed %2$s bugs.'
);

/* translators: 1: WordPress version number, 2: Plural number of bugs. More than one security issue. */
_n_noop(
	'<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bug.',
	'<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bugs.'
);

/* translators: %s: Documentation URL. */
__( 'For more information, see <a href="%s">the release notes</a>.' );

/* translators: 1: WordPress version number, 2: Link to update WordPress */
__( 'Important! Your version of ForkedWord (%1$s) is no longer supported, you will not receive any security updates for your website. To keep your site secure, please <a href="%2$s">update to the latest version of ForkedWord</a>.' );

/* translators: 1: ForkedWord version number, 2: Link to update WordPress */
__( 'Important! Your version of ForkedWord (%1$s) will stop receiving security updates in the near future. To keep your site secure, please <a href="%2$s">update to the latest version of ForkedWord</a>.' );

/* translators: %s: The major version of WordPress for this branch. */
__( 'This is the final release of ForkedWord %s' );

/* translators: The localized ForkedWord download URL. */
__( 'https://forkedword.com/' );
