<?php

// commentaire sur une ligne blabla

# une autre manière de faire un commentaire sur une ligne. Le commentaire peut être aussi long qu'on le désire, il sera toujours sur la même ligne (ici ligne 5). Dans ce cas-ci et dans le précédent, les commentaires se clotureront automatiquement quand je ferai "ENTER" pour passer à la ligne suivante

/*
Commentaires
sur plusieures
lignes
*/
?>
<p>Commentaire html</p>
<!--
ceci est un commentaire html, il sera envoyé au navigateur ! (visible dans la console)
-->
<a href="https://www.php.net/manual/fr/language.basic-syntax.phptags.php" target="_blank">lien php.net</a>
<?php

// bonne pratique, ne pas fermer la balise php quand ce n'est pas utile - pour quoi cela est la bonne pratique? voir le lien vers php.net que j'ai mis dans le HTML juste au-dessus.

// affichage avec echo, le ; est la fin de l'instruction, on peut en mettre sans limite sur la même ligne, ou séparer les instructions par autant d'espace que voulu (mauvaise pratique, mais PHP s'en fout). La fonction time() vous donne le timestamp (temps UNIX en secondes depuis le 01/01/1970)
echo "<p>Temps Unix de la page :"; echo time();



                echo "</p>";