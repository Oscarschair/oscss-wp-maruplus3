<?php
require_once(__DIR__ . '/../../../wp-load.php');
$slug = 'privacy-policy';
$page = get_page_by_path($slug);
if ($page) {
    echo "Page exists! ID: " . $page->ID . " Status: " . $page->post_status . " Name: " . $page->post_name . "\n";
} else {
    echo "Page does not exist.\n";
}
