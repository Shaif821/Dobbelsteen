<?php

/*http://www.tutorialized.com/view/tutorial/Basic-PHP-image-tutorial/24061*/
dobbelsteen();
print "<img src=image.png?" .date("U"). ">";

function dobbelsteen(){
    $im = imagecreate(200,200) or die ("Kan dit niet uitvoeren");
    $background_color = imagecolorallocate($im, 208, 0, 21); //definieert de kleur. kluer = rood
    //De code hierboven maakt een vierkant met kleur.
    
    //De code hieronder maakt de cirkels
    $white = imagecolorallocate($im, 255, 255, 255); //defineert een wit kleur
    
    imagefilledellipse($im, 35, 35, 40, 40, $white); //stip 1
    imagefilledellipse($im, 165, 35, 40, 40, $white); //stip 2
    imagefilledellipse($im, 35, 100, 40, 40, $white); //stip 3
    imagefilledellipse($im, 100, 100, 40, 40, $white); //stip 4
    imagefilledellipse($im, 165, 100, 40, 40, $white); //stip 5
    imagefilledellipse($im, 35, 165, 40, 40, $white); //stip 6
    imagefilledellipse($im, 165, 165, 40, 40, $white); //stip 7
    
    imagepng($im, "image.png"); //Slaat de gegevens op van $im in de "image.png"
    imagedestroy($im); //Maakt geheugen vrij 
}

?>