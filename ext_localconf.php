<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use SchamsNet\Typo3v12\Controller\ExampleController;

defined('TYPO3') or die();

// encapsulate all locally defined variables
(function () {

    ExtensionUtility::configurePlugin(
        'Typo3v12',
        'FrontendPlugin',
        [
            ExampleController::class => 'main'
        ],
        [
            ExampleController::class => 'main'
        ]
    );
})();
