<?php
// Register Hook Classes

$callbacks = [
    [
        'hook' => \core\hook\output\before_footer_html_generation::class,
        'callback' => '\local_genaipatch\hook_callbacks::before_footer_html_generation',
        'priority' => 0,
    ],
];