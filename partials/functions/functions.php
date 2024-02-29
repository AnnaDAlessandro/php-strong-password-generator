<?php
function generaPassword($lunghezzapassword, $letters, $numbers,$simboli,$consentiDuplicazione){
    $newpassword='';
    $onlyCaracters= $letters . $numbers . $simboli;
    while(strlen($newpassword) < $lunghezzapassword){
        $indiceLettere= rand(0,strlen($onlyCaracters)-1);
        if($consentiDuplicazione == true || !str_contains($newpassword,$onlyCaracters[$indiceLettere])){
           $newpassword .= $onlyCaracters[$indiceLettere];
        }
        

    }
    return $newpassword;

}

?>