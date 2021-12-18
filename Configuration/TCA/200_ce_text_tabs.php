<?php

defined('TYPO3_MODE') || die();

$extensionKey = 'content_defender_bug_sitepackage';
$contentElementKey = 'text_tabs';

/***************
 * Enable Content Element
 */
if (!is_array($GLOBALS['TCA']['tt_content']['types'][$contentElementKey])) {
    $GLOBALS['TCA']['tt_content']['types'][$contentElementKey] = [];
}

/***************
 * Add content element PageTSConfig
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/ContentElement/Element/TextTabs.tsconfig',
    'Sitepackage Content Element: Text Tabs'
);

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        "LLL:EXT:content_defender_bug_sitepackage/Resources/Private/Language/locallang_be.xlf:$contentElementKey.label",
        $contentElementKey,
        'content-text',
    ],
    'textmedia',
    'after'
);

$GLOBALS['TCA']['tt_content']['columns']['text_tab_text_elements'] = [
    'config' => [
        'appearance' => [
            'collapseAll' => '1',
            'enabledControls' => [
                'dragdrop' => '1',
            ],
            'levelLinksPosition' => 'top',
            'showAllLocalizationLink' => '1',
            'showPossibleLocalizationRecords' => '1',
            'showSynchronizationLink' => '1',
            'useSortable' => '1',
        ],
        'foreign_sortby' => 'sorting',
        'foreign_table' => 'tt_content',
        'overrideChildTca' => [
            'columns' => [
                'colPos' => [
                    'config' => [
                        'default' => '999',
                    ],
                ],
                'CType' => [
                    'config' => [
                        'default' => 'text',
                    ],
                ],
            ],
        ],
        'type' => 'inline',
        'foreign_field' => 'text_tab_text_elements_parent',
    ],
    'exclude' => '1',
    'label' => "LLL:EXT:$extensionKey/Resources/Private/Language/locallang_be.xlf:$contentElementKey.label",
];

$GLOBALS['TCA']['tt_content']['types'][$contentElementKey]['showitem'] = '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;;general,
        header,
        text_tab_text_elements,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --palette--;;appearanceLinks,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
        categories,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
        rowDescription,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
';
