<?php
declare(strict_types=1);

/**
 * TYPO3 v12 Test Extension
 * @author Michael Schams | https://schams.net
 */

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

/**
 * Register frontend plugin
 */
ExtensionUtility::registerPlugin(
    'Typo3v12',
    'Frontend',
    'TYPO3 v12 Test Extension'
);
