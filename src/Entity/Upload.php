<?php
use App\Entity\Images;
use App\Repository\ImagesRepository;
use App\Entity\Categorie;
use App\Repository\CategorieRepository;
 
// var_dump($_POST);
// var_dump($_FILES['fichier']);

$catego = $_POST['categorie'];
$dossier = $_POST['dossier'];


   



if ($_POST['ajouter'] == 'portfolio'){
    $chemin = "C:\wamp64\www\studioSite\public\image\portfolio\portfolio";
}


if($_POST['ajouter'] == 'dossier'){
    $repository = $entityManager->getRepository(Images::class);
    $product = $repository->findDossierId($catego, $dossier);
    //var_dump($product);

    

   
    $repository = $entityManager->getRepository(categorie::class);
    $categorie = $repository->findAll();    
    foreach( $categorie as $dossierLigne){
        $categorieBDD = $dossierLigne-> getNomCategorie();
        $dossierBDD = $dossierLigne-> getDossier();
        $nbPhotosBDD = $dossierLigne -> getNbImage();
        $idBDD = $dossierLigne -> getId();

        // var_dump($categorieBDD);        
        // var_dump($catego);

        // var_dump($dossierBDD);        
        // var_dump($dossier);
        

        if( $categorieBDD == $catego and $dossierBDD == $dossier ){
            $nbPhotos = $nbPhotosBDD;
            $id = $idBDD;
        }
        
    } 
    
    $i = $nbPhotos;

    $chemin = $chemin  = "C:\wamp64\www\studioSite\public\image/".$catego."/".$dossier."/"."studio_".$catego."-".$dossier;  

    // var_dump($chemin);
    foreach( $_FILES['fichier']['tmp_name'] as $from){
        
        $to = "_".$i.'.jpg'; 
        if(move_uploaded_file($from, $chemin.$to)){
            $image = new Images;
            $image -> setChemin($chemin.$to);
            $image -> setNomPhoto("studio_".$catego."/".$dossier."_".$i,"jpg");
            $image -> setCategorie($_POST["categorie"]);
            $image -> setDossier($_POST["dossier"]);
            $image -> setindexDossier($i);
    
            $em = $this->getDoctrine()->getManager();
    
            $em->persist($image);
            $em->flush();
    
            echo 'image '.$i.' bien importée <br/>';
           
            
        }else{
            echo 'image '.$i.' echec <br/>';
        }  
        $i++;     
    }
    
    $categorieRepo = $entityManager->getRepository(categorie::class);

    // Récupération de l'utilisateur (donc automatiquement géré par Doctrine)
    $categorie = $categorieRepo->find($id);
    $categorie->setNbImage($i);    
    $entityManager->flush();
}
