<?php



echo '
    <script> 
    alert("La suppression de cette catégorie entrainera la suppression de tous les dossiers et photos qu\'elle contient.
    Si vous n\'êtes pas sûr de votre action, faite annuler.")
    </script> ;';


var_dump($_POST);
$dossier = "C:\wamp64\www\studioSite\public\image/".$_POST["categorie"]."/".$_POST["dossier"];

if($_POST["action"]=='supprimer'){
    if (file_exists($dossier)){
        $files = glob($dossier.'/*'); // get all file names
        foreach($files as $file){ // iterate files
        if(is_file($file))
            unlink($file); // delete file
        }
    
        if (rmdir($dossier)){
            echo "le dossier a bien été supprimé";
        }else{
            echo "une erreur est apparu";
        }
    }else{
        echo 'le dossier n\'existe déjà plus';
    }
    
}

if($_POST["action"]=="ajout"){
    if (file_exists($dossier)){
        echo 'le dossier existe déjà';

    }else{
          
        if (mkdir($dossier)){
            echo "le dossier a bien été ajouté";
        }else{
            echo "une erreur est apparu";
        }
    }
}
