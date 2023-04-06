<?php

use App\Entity\Categorie;
use App\Repository\CategorieRepository;  

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
        
        $enregistement = new Categorie;
        $enregistement -> setNomCategorie($_POST["categorie"]);
        $enregistement -> setDossier($_POST['dossier']);

        $repository = $entityManager->getRepository(categorie::class);
        $product = $repository->findAll();
        foreach( $product as $ligne){
            if( $ligne-> getNomCategorie() == $_POST["categorie"]){
                $enregistement -> setUnilasalle($ligne-> isUnilasalle());
                $enregistement -> setCode($ligne-> getCode());               
                break;
            }
          
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($enregistement);
        $em->flush();
        echo 'dossier en base de donnée <br/>';
        
        if (mkdir($dossier)){
            echo "le dossier a bien été ajouté";
        }else{
            echo "une erreur est apparu";
        }
    }
}



