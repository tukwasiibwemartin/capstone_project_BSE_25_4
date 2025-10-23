<?php

// Configure storage paths for Vercel
if (isset($_ENV['VERCEL']) || isset($_ENV['NOW_REGION'])) {
    // Ensure tmp directories exist
    $dirs = ['/tmp/views', '/tmp/cache', '/tmp/sessions'];
    foreach ($dirs as $dir) {
        if (!file_exists($dir)) {
            mkdir($dir, 0755, true);
        }
    }
}

require __DIR__ . '/../public/index.php';
