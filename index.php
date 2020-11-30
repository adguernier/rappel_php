<?php require_once('header.php'); ?>

<h1>Remplissez votre profil</h1>
<form action="traitement.php" method="POST">
    <label for="nom">Votre nom</label>
    <input type="text" id="nom" name="nom">

    <label for="email">Votre email</label>
    <input type="email" name="email" id="email">

    <input type="submit" value="Envoyer">
</form>

<?php require_once('footer.php'); ?>
