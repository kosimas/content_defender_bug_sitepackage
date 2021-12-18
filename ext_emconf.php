<?php

/**
 * Extension Manager/Repository config file for ext "content_defender_bug_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'content defender bug sitepackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Legendarydudes\\ContentDefenderBugSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Kosimas',
    'author_email' => 'kosimas@legendarydudes.de',
    'author_company' => 'Legendarydudes',
    'version' => '1.0.0',
];
