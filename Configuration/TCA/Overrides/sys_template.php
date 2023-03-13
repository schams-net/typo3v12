<?php
declare(strict_types=1);

/**
 * TYPO3 v12 Test Extension
 * @author Michael Schams | https://schams.net
 */

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

/**
 * Add default TypoScript (constants and setup)
 */
ExtensionManagementUtility::addStaticFile(
	'typo3v12',
	'Configuration/TypoScript',
	'TYPO3 v12 Test Extension'
);
