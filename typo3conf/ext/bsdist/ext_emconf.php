<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "bsdist".
 *
 * Auto generated 28-07-2017 15:23
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Bootstrap Kickstart Package',
  'description' => 'Kickstart package to create a new TYPO3 website. Delivers a simple page tree for a new website based on the bootstrap framework. Ads bootstrap layout features to some of the content elements.',
  'category' => 'distribution',
  'author' => 'Pascal Mayer',
  'author_email' => 'typo3@bsdist.ch',
  'author_company' => '',
  'state' => 'stable',
  'version' => '2.0.2',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '8.7.0-8.7.99',
      'fluid_styled_content' => '8.7.0-8.7.99',
      'scheduler' => '8.7.0-8.7.99',
      'recycler' => '8.7.0-8.7.99',
      'realurl' => '	2.2.0-0.0.0',
    ),
    'conflicts' => 
    array (
      'css_styled_content' => '*',
      'bootstrap_package' => '*',
    ),
    'suggests' => 
    array (
    ),
  ),
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'Laxap\\Bsdist\\' => 'Classes',
    ),
  ),
  'clearcacheonload' => true,
);

