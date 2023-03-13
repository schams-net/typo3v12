<?php
declare(strict_types=1);

/**
 * TYPO3 v12 Test Extension
 * @author Michael Schams | https://schams.net
 */

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use SchamsNet\Typo3v12\Controller\ExampleController;

defined('TYPO3') or die();

// encapsulate all locally defined variables
(function () {

    ExtensionUtility::configurePlugin(
        'Typo3v12',
        'Frontend',
        [
            ExampleController::class => 'main'
        ],
        [
            ExampleController::class => 'main'
        ]
    );
    
})();
