<?php

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_genaipatch';
$plugin->version = 2025061303;
$plugin->requires = 2022041900;
$plugin->maturity = MATURITY_RC;
$plugin->dependencies = [
    'qbank_genai' => 2024090404,
  ];