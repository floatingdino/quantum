<?php
switch ($hostname) {
    case 'quantum.dev:8888':
        define('WP_ENV', 'development');
        break;

    case 'localhost:8888':
        define('WP_ENV', 'development_sam');
        break;

    case 'quantum.staging.ply.digital':
        define('WP_ENV', 'staging');
        break;

    case 'qagroup.com.au':
    default:
        define('WP_ENV', 'production');
}
