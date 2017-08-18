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

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Vimeo Ads Video Player',
	'description' => 'Vimeo Ads Video Player is an easy to use plugin that allows viewing of one or more videos and configuration of different options such as autoplay, loop, random, mute... The easiest way to integrate video Ads on your website! You can find a working version for TYPO3 4.5 in the download tab of the extension',
	'category' => 'plugin',
	'shy' => false,
	'version' => '8.7.2',
    'dependencies' => 'extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => false,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => true,
	'lockType' => '',
	'author' => 'Marcella Greca, Abramo Tesoro',
	'author_email' => 'typo3developers@archicoop.it',
	'author_company' => 'Archimede Informatica - www.archicoop.it',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' => 
	array (
		'depends' => 
		array (
            'extbase' => '1.3',
            'fluid' => '1.3',
            'typo3' => '6.0.0-8.7.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

?>