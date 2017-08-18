<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Marcella Greca <greca@archicoop.it>, Abramo Tesoro <tesoro@archicoop.it>
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

 if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'vimeo',
    'Vimeo Ads Video Player'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Vimeo Ads Video Player');


/**
 * Include Flexform
 */
// Pi1
$pluginSignature = str_replace('_', '', $_EXTKEY) . '_vimeo';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    'FILE:EXT:' . $_EXTKEY . '/Configuration/Flexform/flexform_vimeo.xml'
);

if (TYPO3_MODE == 'BE') {
	$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['Aip\AipVimeo\Wizicon'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Wizicon.php';
}

$TCA['tt_content']['columns']['list_type']['config']['items'][] = array(
    0 => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xml:list_plus_wiz_description',
    1 => 'aipvimeo_vimeo',
    2 => '../typo3conf/ext/aip_vimeo/ext_icon.gif'
);

?>