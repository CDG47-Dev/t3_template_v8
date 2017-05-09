<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "template_v8".
 *
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/
$EM_CONF[$_EXTKEY] = array(
    'title' => 'template_v8',
    'description' => 'template_v8 gabarit',
    'category' => 'fe',
    'constraints' => array(
        'depends' => array(
            'bootstrap_package' => '8.0.0 - 8.99.99',
            'typo3' => '8.7.0 - 8.99.99',
			'indexed_search' => '8.7.0 - 8.99.99',
			'dd_googlesitemap' => '2.1.3 - 8.99.99',
			'realurl' => '2.2.0 - 8.99.99', 
        ),
        'conflicts' => array(),
    ),
    'state' => 'beta',
    'uploadfolder' => 1,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'O. Pommaaret',
    'author_email' => 'services.internet@cdg47.fr',
    'author_company' => 'CDG47',
    'version' => '8.7.0',
);
?>
