<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Iconpack: TYPO3 Icons',
    'description' => 'This Extension registers an Iconpack-Provider for EXT:iconpack which allows you to use the "TYPO3 Icons" in ...TYPO3 (surprise!).',
    'category' => 'fe',
    'state' => 'stable',
    'clearcacheonload' => true,
    'author' => 'Stephan Kellermayr',
    'author_email' => 'typo3@quellenform.at',
    'author_company' => 'Kellermayr KG',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.11-13.9.99',
            'iconpack' => '1.2.0-1.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
