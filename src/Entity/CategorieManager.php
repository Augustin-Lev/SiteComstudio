<?php
use App\Entity\Dossier;
use App\Repository\DossierRepository;  
use App\Entity\Categorie;
use App\Repository\CategorieRepository; 

$repository = $entityManager->getRepository(categorie::class);
$product = $repository->findAll();

function categorieTable($product){
    $categorieTab = [[$product[0]->getNomCategorie()]];
    
    $dejaPresent = FALSE;
    foreach( $product as $ligne){
        $categorie = $ligne-> getNomCategorie();
        $dossier = $ligne-> getDossier();
    
        $dejaPresent = FALSE;
        
        $i=0;
        
        foreach($categorieTab as $categorieElement){
            // echo ' var_dump($categorieTab)';
            // var_dump($categorieTab);
            if ($categorieElement[0] == $categorie){
                $dejaPresent = TRUE;
                array_push($categorieTab[$i], $dossier);
            }
            $i++;
        }
        if( $dejaPresent == FALSE){
            array_push($categorieTab, [$categorie]);
            array_push($categorieTab[$i], $dossier);
        }
    } 
    return $categorieTab;
}

$categorieTab = categorieTable($product);
// var_dump($categorieTab);

// var_dump($_POST);
$unilasalle = FALSE;
$codeEvenement = FALSE;



if(isset($_POST['name_categorie'])){
    $path = "C:\wamp64\www\studioSite\public\image/".$_POST["name_categorie"];
    if (file_exists($path)==FALSE){
        $nom = $_POST['name_categorie'];
        $categorie = new Categorie;
        $categorie -> setNomCategorie($nom);
    
        if(isset($_POST['name_dossier'])){
            $categorie -> setDossier($_POST['name_dossier']);
           
            
            if(isset($_POST['Unilasalle'])){
                if($_POST['Unilasalle']== 'Unilasalle'){
                    $unilasalle = TRUE;
                    $categorie -> setUnilasalle(TRUE);
                }
            }
        
            if(isset($_POST['EventCode'])){
                if($_POST['EventCode']== 'EventCode'){
                    if(isset($_POST['EventCode'])){
                        $code = $_POST['codeEvenement'];
                        $codeEvenement = TRUE;
                        $categorie -> setCode($code);
                        
                    }
                }
            }
        
            if( $unilasalle or $codeEvenement){
            
                $em = $this->getDoctrine()->getManager();
        
                $em->persist($categorie);
                $em->flush();
                echo 'ok';
                
    
                if(mkdir($path)){
                    echo "le dossier catégorie a bien été créé";
                    $path = "C:\wamp64\www\studioSite\public\image/".$_POST["name_categorie"].'/'.$_POST["name_dossier"];
                    if(mkdir($path)){
                        echo "le dossier dossier a bien été créé";
                    }
                }
            }
        
        }
    
    
    }else{
        echo 'pas de categorie à créer';
    }
} 






// foreach( $_FILES['fichier']['tmp_name'] as $from){
//     $i++;
//     $to = "_".$i.'.jpg'; 
//     if(move_uploaded_file($from, $chemin.$to)){
//         $image = new Images;
//         $image -> setChemin($chemin.$to);
//         $image -> setNomPhoto("studio_".$_POST['categorie']."/".$_POST['dossier']."_".$i,"jpg");
//         $image -> setCategorie($_POST["categorie"]);
//         $image -> setDossier($_POST["dossier"]);
//         $image -> setindexDossier($i);

//         $em = $this->getDoctrine()->getManager();

//         $em->persist($image);
//         $em->flush();

//         echo 'image '.$i.' bien importée <br/>';
        
//     }else{
//         echo 'image '.$i.' echec <br/>';
//     }
   
// }