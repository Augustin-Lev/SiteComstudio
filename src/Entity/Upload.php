<?php
use App\Entity\Images;
use App\Repository\ImagesRepository;
 
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
    // var_dump($product);


    $i = 1;
    foreach($product as $image){
        if ($image['index_dossier']>$i){
            $i = $image['index_dossier'];
        }
    }

    $chemin = $chemin  = "C:\wamp64\www\studioSite\public\image/".$catego."/".$dossier."/"."studio_".$catego."-".$dossier;  

    var_dump($chemin);
    foreach( $_FILES['fichier']['tmp_name'] as $from){
        $i++;
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
       
    }
}
