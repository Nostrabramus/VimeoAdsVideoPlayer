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

namespace Aip\AipVimeo\Controller;
/**
 * VideoController
 */

class VideoController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    public function showAction() {
        $autoplay = $this->settings['autoplay'];
        if($this->settings['flexform']['autoplay'] != ""){
            $autoplay = $this->settings['flexform']['autoplay'];
        }
        $random = $this->settings['random'];
        if($this->settings['flexform']['random'] != ""){
            $random = $this->settings['flexform']['random'];
        }
        $loop = $this->settings['loop'];
        if($this->settings['flexform']['loop'] != ""){
            $loop = $this->settings['flexform']['loop'];
        }
        $mute = $this->settings['mute'];
        if($this->settings['flexform']['mute'] != ""){
            $mute = $this->settings['flexform']['mute'];
        }

        $width = $this->settings['default']['width'];
        if($this->settings['flexform']['width'] > 0){
            $width = $this->settings['flexform']['width'];
        }
        $height = $this->settings['default']['height'];
        if($this->settings['flexform']['height'] > 0){
            $height = $this->settings['flexform']['height'];
        }


        $id =  \Aip\AipVimeo\Utility\Div::parseId($this->settings['flexform']['id']);

        $this->view->assign('id', $id);
        $this->view->assign('autoplay', $autoplay);
        $this->view->assign('random', $random);
        $this->view->assign('loop', $loop);
        $this->view->assign('mute', $mute);
        $this->view->assign('width', $width);
        $this->view->assign('height', $height);

    }



} 