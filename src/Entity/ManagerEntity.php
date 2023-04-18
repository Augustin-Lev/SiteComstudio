<?php

use App\Entity\Categorie;
use App\Repository\CategorieRepository;  

var_dump($_POST);
$dossier = "C:\wamp64\www\studioSite\public\image/".$_POST["categorie"]."/".$_POST["dossier"];

if($_POST["action"]=='supprimer'){
   

    $identifiant = 1;
    $userRepo = $entityManager->getRepository(Categorie::class);

    // Récupération de l'utilisateur (donc automatiquement géré par Doctrine)
    $lignes = $userRepo->findBy([
        'nom_categorie' => $_POST['categorie'],
        'dossier' => $_POST['dossier']
    ]);

    foreach ($lignes as $ligne){
        $entityManager->remove($ligne);
        $entityManager->flush($ligne);
        // var_dump($userRepo->find($identifiant)); // doit renvoyer NULL   
    }
    
    if (file_exists($dossier)){
        $files = glob($dossier.'/*'); // get all file names
        foreach($files as $file){ // iterate files
        if(is_file($file))
            unlink($file); // delete file
        }
        if (rmdir($dossier)){
            echo "le dossier a bien été supprimé <br/>"; 
            
            $restant = $userRepo->findBy([
                'nom_categorie' => $_POST['categorie']
            ]);
            var_dump($restant);
        
            if (empty($restant)){
                if (rmdir("C:\wamp64\www\studioSite\public\image/".$_POST["categorie"])){
                    echo "la catégorie à été supprimée  <br/>";
                }
            }
            
           
        }else{
            echo "une erreur est apparu  <br/>";
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
        $enregistement -> setNbImage(0);
        if($_POST['date'] != ''){
            $date = $_POST['date'];
            $enregistement -> setDate($date);
        }else{
            $date = date("Y-m-d");
            $enregistement -> setDate($date);
           
        }

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

