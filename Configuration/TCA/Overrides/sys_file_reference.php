<?php
$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'] = [
    'mobile-landscape' => [
        'title' => 'Mobile landscape',
        'allowedAspectRatios' => [
            '4:3' => [
                'title' => '4:3',
                'value' => 4 / 3
            ],
        ],
        'selectedRatio' => '4:3',
        'cropArea' => [
            'x' => 0.0,
            'y' => 0.0,
            'width' => 1.0,
            'height' => 1.0,
        ],
        'focusArea' => [
            'x' => 1 / 3,
            'y' => 1 / 3,
            'width' => 1 / 3,
            'height' => 1 / 3,
        ],
        'coverAreas' => [
            [
                'x' => 0.05,
                'y' => 0.85,
                'width' => 0.9,
                'height' => 0.1,
            ]
        ],
    ],
    'mobile-portrait' => [
        'title' => 'Mobile portrait',
        'allowedAspectRatios' => [
            '3:4' => [
                'title' => '3:4',
                'value' => 3 / 4
            ],
        ],
        'selectedRatio' => '3:4',
        'cropArea' => [
            'x' => 0.0,
            'y' => 0.0,
            'width' => 1.0,
            'height' => 1.0,
        ],
        'focusArea' => [
            'x' => 1 / 3,
            'y' => 1 / 3,
            'width' => 1 / 3,
            'height' => 1 / 3,
        ],
        'coverAreas' => [
            [
                'x' => 0.05,
                'y' => 0.8,
                'width' => 0.9,
                'height' => 0.15,
            ]
        ],
    ],
];