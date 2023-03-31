<?php

var_dump($_POST);
var_dump($_FILES['fichier']);


if ($_POST['ajouter'] == 'portfolio'){
    
    $chemin = "C:\wamp64\www\studioSite\public\image\portfolio\portfolio";
    // var_dump($to);
    $i = 1;
    foreach( $_FILES['fichier']['tmp_name'] as $from){
        $to = $i.'.jpg'; 
        if(move_uploaded_file($from, $chemin.$to)){
            echo 'image '.$i.' bien importée <br/>';
        }else{
            echo 'image '.$i.' echec <br/>';
        }
        $i++;
    }
}


