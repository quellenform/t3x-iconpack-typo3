<?php

defined('TYPO3') || die();

call_user_func(static function () {
    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('iconpack')) {
        $extConf = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
            \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
        )->get('iconpack_typo3');

        $version = (!empty($extConf['version'])) ? $extConf['version'] : '5';

        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
            \Quellenform\Iconpack\IconpackRegistry::class
        )->registerIconpack(
            'EXT:iconpack_typo3/Configuration/Iconpack/TYPO3.Icons-' . $version . '.yaml',
            $extConf['configFile']
        );
    }
});
