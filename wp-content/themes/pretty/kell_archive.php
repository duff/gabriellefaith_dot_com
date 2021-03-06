<?php
/*
 WARNING: This file is part of the core Genesis framework. DO NOT edit
 this file under any circumstances. Please do all modifications
 in the form of a child theme.
 */

/**
 * Template Name: KellArchive
 * This file handles archives pages.
 *
 * This file is a core Genesis file and should not be edited.
 *
 * @category Genesis
 * @package  Templates
 * @author   StudioPress
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.studiopress.com/themes/genesis
 */

/** Remove standard post content output **/
remove_action( 'genesis_post_content', 'genesis_do_post_content' );

add_action( 'genesis_post_content', 'genesis_page_archive_content' );
/**
 * This function outputs sitemap-esque columns displaying all pages,
 * categories, authors, monthly archives, and recent posts.
 *
 * @since 1.6
 */
function genesis_page_archive_content() { ?>

		</br>

		<h4><?php _e( 'Monthly:', 'genesis' ); ?></h4>
		<ul>
			<?php wp_get_archives( 'type=monthly&show_post_count=1' ); ?>
		</ul>

		<h4><?php _e( 'Recent Posts:', 'genesis' ); ?></h4>
		<ul>
			<?php wp_get_archives( 'type=postbypost&limit=200' ); ?>
		</ul>


<?php
}

genesis();

