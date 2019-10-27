<?php
/**
 * Plugin Name: WP CloudFront Helper
 * Plugin URI:  https://github.com/PeterBooker/wp-cloudfront-helper
 * Description: Makes small changes which help you to use AWS CloudFront for fullpage caching on WordPress.
 * Version:     1.0
 * Author:      Peter Booker
 * Author URI:  http://peterbooker.com
 * License:     GPLv2+
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add Last-Modified and Cache-Control Headers to WP Responses
 */
function wp_cloudfront_filter_headers( $headers ) {

    /*
     * WP already sets Cache-Control headers to avoid caching in the admin.
     */
    if ( is_admin() ) {
        return $headers;
    }

    /*
     * Set Last Modified header to current time
     * Makes it easier to see when the cache was last refreshed
     */
    $modified = date( 'D, j M Y H:i:s e', time() );

    $headers['Last-Modified'] = $modified;

    /*
     * Tell CloudFront not to cache certain responses.
     */
    if ( is_user_logged_in() || is_404() || is_preview() ) {

        $headers['Cache-Control'] = 'no-cache, must-revalidate, max-age=0, proxy-revalidate';

        return $headers;

    }

    if ( is_archive() ) {

        $ttl = 5 * MINUTE_IN_SECONDS;

    } if ( is_tax() ) {

        $ttl = 5 * MINUTE_IN_SECONDS;

    } if ( is_author() ) {

        $ttl = 5 * MINUTE_IN_SECONDS;

    } if ( is_search() ) {

        $ttl = 1 * MINUTE_IN_SECONDS;

    } elseif ( is_single() ) {

        $ttl = 15 * MINUTE_IN_SECONDS;

    } elseif ( is_page() ) {

        $ttl = 30 * MINUTE_IN_SECONDS;

    } elseif ( is_home() ) {

        $ttl = 5 * MINUTE_IN_SECONDS;

    } elseif ( is_front_page() ) {

        $ttl = 15 * MINUTE_IN_SECONDS;

    }

    /*
     * Define custom TTLs for specific Post Types
     */
    $post_types = array(
        'post' => array(
            'archive' => 5 * MINUTE_IN_SECONDS,
            'single' => 15 * MINUTE_IN_SECONDS,
        ),
        'page' => array(
            'archive' => 5 * MINUTE_IN_SECONDS,
            'single' => 15 * MINUTE_IN_SECONDS,
        ),
    );

    /*
     * Set Custom TTL for each specified Post Type.
     */
    foreach ( $post_types as $post_type ) {

        if ( is_archive() ) {

            $ttl = $post_type['archive'];

        } elseif ( is_singular() ) {

            $ttl = $post_type['single'];

        }

    }

    /*
     * Set default TTL if not already set
     * If none set CloudFront default is 24 hours
     */
    $ttl = 1 * MINUTE_IN_SECONDS;

    $headers['Cache-Control'] = 'max-age=' . $ttl . ', public';

    return $headers;

}
add_filter( 'wp_headers', 'wp_cloudfront_filter_headers' );
