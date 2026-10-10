<?php

defined('TYPO3') || die();

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('iconpack')) {
    $extConf = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
    )->get('iconpack_typo3');

    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \Quellenform\Iconpack\IconpackRegistry::class
    )->registerIconpack(
        'EXT:iconpack_typo3/Configuration/Iconpack/TYPO3.Icons-' . ($extConf['version'] ?? '5') . '.yaml',
        $extConf['configFile']
    );
}
