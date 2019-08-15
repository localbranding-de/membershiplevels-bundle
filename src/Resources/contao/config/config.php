<?php

/**
 * Hooks.
 */
$GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = array('LocalbrandingDe\MembershiplevelsBundle\EventListener\OutputBackendTemplateListener::class', 'myOutputBackendTemplate');
// Frontend modules
$GLOBALS['FE_MOD']['miscellaneous']['helloWorld'] = 'LocalbrandingDe\MembershiplevelsBundle\HelloWorldModule';
