<?php
namespace LocalbrandingDe\MembershiplevelsBundle\EventListener;
use Contao\FrontendUser;
class FrontendTemplateListener// Klassenname = Dateiname (ohne .php)
{
    public function __construct() {} // eventuell nicht nötig, probieren
    
    public function myCustomClassMethod($intId, $arrData) // Methodenname so wie in config angegeben, Parameterdefinitionen aus dem Entwicklerhandbuch entnehmen
    {
        print_r($intId);     // Print the ID of the new User
        print_r($arrData); // Print out the user's data, which should include the fields you need.
        file_put_contents("test43","ysdas");
    }
    
    public function myParseFrontendTemplate($objTemplate)
    {
        file_put_contents("tname",$strTemplate);
        if ($objTemplate->getName() == 'template_productDetails_01')
        {
            $memberIsAllowed = false;
            
           // file_put_contents("test43fess",print_r($objTemplate, true));
            //
            $objUser = FrontendUser::getInstance();
            $userid = $objUser->id;
            $userfn = $objUser->firstname;
            $userln = $objUser->lastname;
            $prodId = $objTemplate->objProduct->ls_ID;
            $results  = \Database::getinstance()->prepare('SELECT productgroups,lb_memberpointvalue FROM tl_ls_shop_product WHERE id = ?')->execute($prodId);
            $objTemplate->memberpointvalue = $results->lb_memberpointvalue;
            
            $groups=unserialize($results->productgroups);
            if (FE_USER_LOGGED_IN === true) {
                
                foreach($groups as $group)
                {

                    if($objUser->isMemberOf($group))
                    {
                        $memberIsAllowed = true;
                        break;
                    }
                    
                }
                //$user_name = $this->User->username; 
                // es gibt einen authentifizierten Frontend-Benutzer
            } else {
                file_put_contents("tests",print_r($groups,true));
                if(in_array(11,$groups))
                {
                    $memberIsAllowed = true;
                    file_put_contents("test",'true');
                }
                // es gibt keinen authentifizierten Frontend-Benutzer
               
            }
           
            $objTemplate->memberIsAllowed=$memberIsAllowed;

           // file_put_contents("username",  $userfn);
        }
    }

}  

?>
