<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOSTON</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'header.php' ?>
    <main>

        <h2 style="text-align:center;">CONTACT</h2>
        <h3 style="text-align:center;">Contactez nous pour la bagarre</h3>

        <form action="bagarre">
            <input type="text" name="nom" id="nom" placeholder="Votre nom">
            <input type="email" name="email" id="email" placeholder="Votre mail">
            <textarea name="texte" id="texte" placeholder="Votre texte..."></textarea>
            <input type="submit" value="Clic">
        </form>
</body>

</html>