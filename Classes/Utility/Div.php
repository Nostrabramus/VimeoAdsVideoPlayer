<?php
namespace Aip\AipVimeo\Utility;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;
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

/**
 *
 *
 * @package aip_vimeo
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */

/**
 * Class Div
 */
class Div {

    /**
     * Returns the reference to a 'resource' in TypoScript.
     *
     * @param string $file File get a reference from - can contain EXT:ext_name
     * @return mixed
     */
    public static function getFileResource($file)
    {
        return $GLOBALS['TSFE']->tmpl->getFileName($file);
    }
    /**
     * Checks a passed CSS or JS file and adds it to the Frontend.
     *
     * @param string $file File reference
     * @param bool $moveToFooter Flag to include file into footer - doesn't work for CSS files
     */
    public static function addCssJsFile($file, $moveToFooter = FALSE){
        // Get file extension (after last occurance of a dot)
        $mediaTypeSplit = strrchr($file, '.');
        // Get file reference
        $resolved = self::getFileResource($file);
        /** @var $pageRenderer \TYPO3\CMS\Core\Page\PageRenderer */;
        if (version_compare(TYPO3_version, '8.0.0', '>=')){
            $pageRenderer = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Page\PageRenderer::class,null);
        }else{
            $pageRenderer = $GLOBALS['TSFE']->getPageRenderer();
        }

            if ($resolved) {
        // JavaScript processing
            if ($mediaTypeSplit == '.js') {
                ($moveToFooter)
                    ? $pageRenderer->addJsFooterFile($resolved)
                    : $pageRenderer->addJsFile($resolved);
        // Stylesheet processing
            } elseif ($mediaTypeSplit == '.css') {
                $pageRenderer->addCssFile($resolved);
            }
        }
    }


    public static function parseId($id){
        $id_array = preg_split('/\n|\r\n?/', $id);
        $id_array_notEmpty = array();
        for ($i = 0; $i < count($id_array); $i++){
             if (trim($id_array[$i]) != ' ' && strlen(trim($id_array[$i])) != 0)
                 $id_array_notEmpty[$i] = trim($id_array[$i]);
        }
        $id_parse = implode(';',$id_array_notEmpty);
        return $id_parse;

    }

} 