<!DOCTYPE html>
      <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>for</h1>
<p>le for est souvent utilise pour afficher des listes numérique (classemeny ,pagination , etc ...)</p>
<p>par défault on utilise géneralement $i ( int i ) comme variable (itération ), la régle la plus commune étant de mettre $i=0 à 1 , d'effectuer la boucle tant qye $i sera plus petit 
   ou plus grand qu'un nomber choisir (condition) , on modifie ensuite la valeur $i (changement) pour éviter la boucle infinie   
</p>
<pre><code>
   for(déclaration ; condition ; changement) {
    ... execution 
   }
</pre>
</code>


<h3>Incrementation</h3>
<p>ajouter un variable de type numerique </p>
<pre>
    <code>
        $i =5 ; 
        $i=$i+1 ;           // $i++; 
      echo $i;               // 6
        $i += 1;        
        echo $i;              //7
        $i++; 
        echo $i;               //8
   </code>
</pre>

<?php
 // $i vaut 1 au premier tour ,il passe la condition , aprés l'éxecution il effectue le changement et recommence la boucle (sans repasser par la declaration ou intialisation )
  for($i=1 ;$i<=20; $i++){
    echo " $i"; 
  }


?>

<h3>Decrementation de 1 </h3>
<p>Soustraction  de 1 de la variable </p>

<pre>
    <code>
        $i =5 ; 
        $i=$i-1; ;           // $i++; 
      echo $i;               // 4
        $i -= 1;        
        echo $i;              //3
        $i--; 
        echo $i;               //2

    for($i=-10; $i<=10;$i--){
    echo " $i " ; 
  }
   </code>
</pre>
<?php
 

   
for($i=100 ;$i>=0 ;$i--){
    echo "$i "; 

}
 ?>
</body>
 </html>