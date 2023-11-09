<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Iconpack: TYPO3 Icons',
    'description' => 'This Extension registers an Iconpack-Provider for EXT:iconpack which allows you to use the "TYPO3 Icons" in ...TYPO3 (surprise!).',
    'category' => 'fe',
    'state' => 'beta',
    'clearcacheonload' => true,
    'author' => 'Stephan Kellermayr',
    'author_email' => 'typo3@quellenform.at',
    'author_company' => 'Kellermayr KG',
    'version' => '0.0.2',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.11-12.4.99',
            'iconpack' => '1.1.0-1.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
