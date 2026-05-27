<?php
/**
 * Phan configuration for the rule-engine package.
 *
 * @package tangible/rule-engine
 */

require_once __DIR__ . '/../../../.phan/config.php';

return make_phan_config(
    __DIR__ . '/..',
    array(
        'directory_list' => array(
            'src',
            '../ast/src',
        ),
        'exclude_analysis_directory_list' => array(
            '../ast/src',
        ),
        'baseline_path' => __DIR__ . '/baseline.php',
    )
);
