<?php

/**
* Contao Open Source CMS
*
* Copyright (c) 2005-2016 Leo Feyer
*
* @package   photoswipe
* @author    anwender
* @license   GNU/LGPL
* @copyright Gerhard Tilg
*/


namespace Null0815;

class PhotoSwipe {

    public function parseFrontendTemplate($strBuffer, $strTemplate) {

        if($strTemplate == 'js_photoswipe') {

            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/photoswipe/plugins/photoswipe/dist/photoswipe.min.js';
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/photoswipe/plugins/photoswipe/dist/photoswipe-ui-default.min.js';
            $GLOBALS['TL_CSS'][] = 'system/modules/photoswipe/plugins/photoswipe/dist/photoswipe.css';
            $GLOBALS['TL_CSS'][] = 'system/modules/photoswipe/plugins/photoswipe/dist/default-skin/default-skin.css';
            $GLOBALS['TL_CSS'][] = 'system/modules/photoswipe/assets/css/gallery.css';

        }

        return $strBuffer;

    }

}
