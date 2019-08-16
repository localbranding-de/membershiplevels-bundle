<?php
namespace LocalbrandingDe\MembershiplevelsBundle\EventListener;
use Contao\FrontendUser;
class createNewUserListener// Klassenname = Dateiname (ohne .php)
{
    public function __construct() {} // eventuell nicht nötig, probieren
    
    public function myCreateNewUser($intId, $arrData)
    {
        $results  = \Database::getinstance()->prepare('SELECT MAX(memberNr) FROM tl_member ')->execute();
        
        $newNr = $results->memberNr+1;
        if($newNr<200){
            $newNr=200;
        }
        file_put_contents("usernrr",$newNr);
        \Database::getinstance()->prepare('UPDATE tl_member SET memberNr=? WHERE id =? ')->execute($newNr,$objUser->id);
    }
    


}  

?>
