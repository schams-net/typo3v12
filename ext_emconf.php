<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 v12',
    'description' => 'TYPO3 v12 Test Extension',
    'category' => 'be',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'author' => 'Michael Schams',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.3.0-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
