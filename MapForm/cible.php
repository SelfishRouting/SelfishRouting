<?php
 

$i=0;

if (!isset($_POST['tag_1'])){
    $_POST['tag_1']=0;  
}    
else {
    $_POST['tag_1']=1;

}   

if (!isset($_POST['tag_2'])){
    $_POST['tag_2']=0;  
}    
else {
    $_POST['tag_2']=1;

}  

if (!isset($_POST['tag_3'])){
    $_POST['tag_3']=0;  
}    
else {
    $_POST['tag_3']=1;

}  

if (!isset($_POST['tag_4'])){
    $_POST['tag_4']=0;  
}    
else {
    $_POST['tag_4']=1;

}  

if (!isset($_POST['tag_5'])){
    $_POST['tag_5']=0;  
}    
else {
    $_POST['tag_5']=1;

}  

if (!isset($_POST['tag_6'])){
    $_POST['tag_6']=0;  
}    
else {
    $_POST['tag_6']=1;
}  

    if(empty($_POST['address']) ){
        exit('Please enter a location');
    }
    if(empty(trim($_POST['email']))){
        exit('Please fill in your e-mail adress.');
    }
    include("connectmySQL.php");
    $req=$bdd->prepare('SELECT address FROM articles WHERE address=:address');
    $req->execute(array(
    'address'=>$_POST['address']));
    if($req->rowCount()>0){
        exit('This location has already been reported.');
    }
    $req ->closeCursor();

   $photos=array();
    $compteur_photos=$_POST['nmbre_photos'];
    $cpt1=1;
    for ($cpt = 1; $cpt <= $compteur_photos; $cpt++){
        $tmp_file_photo = $_FILES['photo_'.$cpt]['tmp_name'];
        if(is_uploaded_file($tmp_file_photo)){
            $infosphoto = pathinfo($_FILES['photo_'.$cpt]['name']);
            $extension_upload_photo = $infosphoto['extension'];
            $extensions_autorisees_photo = array('jpg','JPG','gif','png','bmp','jpeg','JPEG');  
            $name_photo = "photo_".$cpt1.".".$extension_upload_photo;
            $name_photo = str_replace(' ', '', $name_photo);
            $cpt1++;
            if (in_array($extension_upload_photo, $extensions_autorisees_photo))
            {
                if( !move_uploaded_file($tmp_file_photo, $content_dir . $name_photo) )
                {
                    exit("Impossible de copier la photo " . $cpt);
                    $erreur+=1;
                }
                else{
                    array_push($photos, $name_photo);
                }
            }
            else {
                exit('La photo '.$cpt.' ne respecte pas les extensions autorisées');
                $erreur+=1;
            }
        }
    }
    /*if(empty($photos)){
        array_push($photos,'default.png');
    }*/

try{
$req = $bdd->prepare('INSERT INTO articles(email, address, Lat, Lng, article_link, date, content, Child_Area,Pollution,Traffic_Noise, Traffic_excess, School_zone, Speeding) VALUES(:email, :address, :Lat, :Lng, :article_link, NOW(), :content, :Child_Area, :Pollution, :Traffic_Noise, :Traffic_excess, :School_zone, :Speeding)');
$req->execute(array(
'email'=>htmlspecialchars(trim($_POST['email'])),
'address'=>$_POST['address'],
'Lat'=>$_POST['Lat'],
'Lng'=>$_POST['Lng'],    
'article_link'=>htmlspecialchars(trim($_POST['article_link'])),
'content'=>$_POST['content'],
'Child_Area'=>$_POST['tag_4'],
'Pollution'=>$_POST['tag_5'],
'Traffic_Noise'=>$_POST['tag_3'],
'Traffic_excess'=>$_POST['tag_6'],
'School_zone'=>$_POST['tag_2'],
'Speeding'=>$_POST['tag_1']));
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}

print_r($_POST)
    
?>