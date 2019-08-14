<?php 
namespace Memberlevels;
class honischClass // Klassenname = Dateiname (ohne .php)
{
    public function __construct() {} // eventuell nicht nötig, probieren
    
    public function myCustomClassMethod($intId, $arrData) // Methodenname so wie in config angegeben, Parameterdefinitionen aus dem Entwicklerhandbuch entnehmen
    {
        print_r($intId);     // Print the ID of the new User
        print_r($arrData); // Print out the user's data, which should include the fields you need.
        file_put_contents("test43","ysdas");
    }
    
    public function myOutputBackendTemplate($strContent, $strTemplate)
    {
        ;s
        if ($strTemplate == 'be_main')
        {
            file_put_contents("test43s","ysdas");
        }
        
        return $strContent;
    }
}  

?>