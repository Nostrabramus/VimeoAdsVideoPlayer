<?php
namespace Aip\AipVimeo;

use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

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



class Wizicon {


	/**
	* Path to locallang file (with : as postfix)
	*
	* @var string
	*/
	protected $locallangPath = 'LLL:EXT:aip_vimeo/Resources/Private/Language/locallang.xml:';
	/**
	 * Processing the wizard items array
	 *
	 * @param	array		$wizardItems: The wizard items
	 * @return	Modified array with wizard items
	 */
	 
	function proc($wizardItems) {
        if (version_compare(TYPO3_version, '7.0.0', '>=')){
            $wizardItems['plugins_tx_aipvimeo_vimeo'] = array(
                'iconIdentifier' => 'ext-aipvimeo-wizard-icon',
                'title' => $GLOBALS['LANG']->sL($this->locallangPath . 'list_title', TRUE),
                'description' => $GLOBALS['LANG']->sL($this->locallangPath . 'list_plus_wiz_description', TRUE),
                'params' => '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=aipvimeo_vimeo',

            );
        }else{
            $wizardItems['plugins_tx_aipvimeo_vimeo'] = array(
                'icon' =>  ExtensionManagementUtility::extRelPath('aip_vimeo') . '/Resources/Public/Icons/Vimeo.gif',
                'title' => $GLOBALS['LANG']->sL($this->locallangPath . 'list_title', TRUE),
                'description' => $GLOBALS['LANG']->sL($this->locallangPath . 'list_plus_wiz_description', TRUE),
                'params' => '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=aipvimeo_vimeo',

            );
        }
		return $wizardItems;
	}

}