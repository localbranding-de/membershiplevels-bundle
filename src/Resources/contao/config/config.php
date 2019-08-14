<?php

/**
 * Hooks.
 */
$GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = array('LocalbrandingDe\MembershiplevelsBundle\Contao\Classes\honischClass', 'myOutputBackendTemplate');
// Frontend modules
$GLOBALS['FE_MOD']['miscellaneous']['helloWorld'] = 'LocalbrandingDe\MembershiplevelsBundle\HelloWorldModule';
