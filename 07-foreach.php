<?php
// le concept de boucle est important dans tous les langange, en PHP il existe divers manieres de crééer des boucles 


// foreach => boucles sur les tableaux et objets 
//  for => boucles de type numérique
// while => boucle de verfication true 
// do while =>boucle de verfication true  avec 1 execution obligatoire 
// fonctions récursives => vous créez vos propres boucles ! 


// les boucles ne doivent jamais être infinies.  

$tab1=["un", "deux", "trois","quatre","cinq"]; 
    



//affiche de toutes les valeurs du tableau 
foreach($tab1 as $value){
    echo $value." ";
}
 echo <hr> ; 


 
//affiche de toutes les valeurs du tableau meme avec un for 
for($i=0;$i<count($tab1); $i++ ){
    echo $tab1[$i]; 
}




//idem de toutes les clef  et valuers du tableau 
foreach($tab1 as $key=> $value){
    echo $key."->".$value." "."<br"; 
}

// tableau associatif 
$tab2 =
         ["un"=>1,     // le gauche este la cle et le droit c'est la valeurs 
         "deux"=>2, 
         3=>3,
         "yep"=>"ça va?",
         4=>"quatre", 

]; 
echo <p>tableau associatif , le foreach est preferable  à toutes les autres  boucles (90%)</p>; 



//tant qu'on a des éléments dans le tableau , on liste du premier au dernier 
foreach($tab2 as $value){
    echo $value." " ; 
}


foreach($tab2 as $key=>$value){
     echo $key."->".$value." "."<br>"; 
    //echo "$key->$value" ; 

}









?>
