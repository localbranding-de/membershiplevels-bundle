<?php

/**
 * Hooks.
 */
$GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = array(\LocalbrandingDe\MembershiplevelsBundle\EventListener\OutputBackendTemplateListener::class, 'myOutputBackendTemplate');
$GLOBALS['TL_HOOKS']['parseTemplate'][] = array(\LocalbrandingDe\MembershiplevelsBundle\EventListener\FrontendTemplateListener::class, 'myParseFrontendTemplate');
$GLOBALS['TL_HOOKS']['activateAccount'][] = array(\LocalbrandingDe\MembershiplevelsBundle\EventListener\activateAccountListener::class, 'myActivateAccount');
// Frontend modules
$GLOBALS['FE_MOD']['miscellaneous']['helloWorld'] = 'LocalbrandingDe\MembershiplevelsBundle\HelloWorldModule';
//$GLOBALS['TL_HOOKS']['createNewUser'][] = array(\LocalbrandingDe\MembershiplevelsBundle\EventListener\createNewUserListener::class, 'myCreateNewUser');