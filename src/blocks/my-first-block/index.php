<?php

if (!defined('ABSPATH')) {
    exit;
}

function artmanns_register_my_first_block() {
    register_block_type (__DIR__);
}

add_action('init', 'artmanns_register_my_first_block');