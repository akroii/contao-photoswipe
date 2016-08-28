<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Null0815',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Null0815\PhotoSwipe' => 'system/modules/photoswipe/classes/PhotoSwipe.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'gallery_photoswipe' => 'system/modules/photoswipe/templates',
	'js_photoswipe'      => 'system/modules/photoswipe/templates',
));
