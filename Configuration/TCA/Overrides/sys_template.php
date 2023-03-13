<?php
declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

/**
 * Add default TypoScript (constants and setup)
 */
ExtensionManagementUtility::addStaticFile(
	'typo3v12',
	'Configuration/TypoScript',
	'TypoScript'
);
