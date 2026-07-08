<?php
// Load WordPress environment from 3 levels up
$wp_load = __DIR__ . '/../../../wp-load.php';
if (file_exists($wp_load)) {
    require_once($wp_load);
    if ( class_exists( 'LiteSpeed\Purge' ) ) {
        LiteSpeed\Purge::purge_all();
        echo "LiteSpeed Cache Purged successfully!\n";
    } else {
        echo "LiteSpeed Cache is not active.\n";
    }
} else {
    echo "wp-load.php not found.\n";
}
