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

// $categorieTab = categorieTable($product);
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
        $categorie -> setNbImage(0);
        var_dump($_POST);
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

            if($_POST['date'] != ''){
                $date = $_POST['date'];
                $categorie -> setDate($date);
            }else{
                $date = date("Y-m-d");
                $categorie -> setDate($date);
               
            }
        
            if( $unilasalle or $codeEvenement){
            
                $em = $this->getDoctrine()->getManager();
        
                $em->persist($categorie);
                $em->flush();
                echo 'ok <br/>';
                
    
                if(mkdir($path)){
                    echo "le dossier catégorie a bien été créé <br/>";
                    $path = "C:\wamp64\www\studioSite\public\image/".$_POST["name_categorie"].'/'.$_POST["name_dossier"];
                    if(mkdir($path)){
                        echo "le dossier dossier a bien été créé <br/>";
                    }
                }
            }
        
        }
    
    
    }else{
        echo 'pas de categorie à créer <br/>';
    }
} 

function NbPhotos($product, $categorie, $dossier){
   

    $categorieTab = [[$product[0]->getNomCategorie()]];
    
    $dejaPresent = FALSE;
    foreach( $product as $ligne){
        $categorieBDD = $ligne-> getNomCategorie();
        $dossierBDD = $ligne-> getDossier();
        $nbPhotosBDD = $ligne -> getNbImage();
       
        if( $categorieBDD == $categorie and $dossierBDD == $dossier ){
            return $nbPhotosBDD ;
        }
        
    } 
    return 100;
}

function TroisDernier($product){
    $categorieTab = [[$product[0]->getNomCategorie()]];
    
    $dejaPresent = FALSE;
    foreach( $product as $ligne){
        $categorie = $ligne-> getNomCategorie();
        $dossier1 = $ligne-> getDossier();
        $date = $ligne-> getDate();

        $dossier = [];
        array_push($dossier, $dossier1 );
        array_push($dossier, $date);
       
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

    $categorieTab;
    $categorieTrie = [["Augustin","2003","2003-01-30"],["Augustin","2003","2003-01-30"],["Augustin","2003","2003-01-30"]];
    
    foreach ($categorieTab as $categorie){
 
        // dossier
        // array (size=2)
        // 0 => string '2022' (length=4)
        // 1 => string '2023-04-14' (length=10)

        foreach ($categorie as $dossier){

            if ($dossier != $categorie[0]){
                // echo ' ------------------ #################################### ';
            
                // echo '-------------------------------$categorieTrie';
                // var_dump($categorieTrie);
                // echo '-------------------------------$categorie';
                // var_dump($categorie);
                // echo '-------------------------------$dossier';
                // var_dump($dossier);
                
        
                if ($dossier[1] > $categorieTrie[0][2]){
                    if ($dossier[1] > $categorieTrie[1][2]){
                        $categorieTrie[0][0] = $categorieTrie[1][0];
                        $categorieTrie[0][1] = $categorieTrie[1][1];
                        $categorieTrie[0][2] = $categorieTrie[1][2];
    
                        if ($dossier[1] > $categorieTrie[2][2]){
                            $categorieTrie[1][0] = $categorieTrie[2][0];
                            $categorieTrie[1][1] = $categorieTrie[2][1];
                            $categorieTrie[1][2] = $categorieTrie[2][2];
    
                            $categorieTrie[2][0] = $categorie[0];
                            $categorieTrie[2][1] = $dossier[0];
                            $categorieTrie[2][2] = $dossier[1];
                        }
                        else{
                            $categorieTrie[1][0] = $categorie[0];
                            $categorieTrie[1][1] = $dossier[0];
                            $categorieTrie[1][2] = $dossier[1];
                        }
                    }else{
                        $categorieTrie[0][0] = $categorie[0];
                        $categorieTrie[0][1] = $dossier[0];
                        $categorieTrie[0][2] = $dossier[1];
                    }               
                }
            }
        }
        
    }
           
    return $categorieTrie;
    
    
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