<?php

/**
 * Hooks.
 */
$GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = array('LocalbrandingDe\MembershiplevelsBundle\honischClass', 'myOutputBackendTemplate');
// Frontend modules
$GLOBALS['FE_MOD']['miscellaneous']['helloWorld'] = 'LocalbrandingDe\MembershiplevelsBundle\Classes\HelloWorldModule';
