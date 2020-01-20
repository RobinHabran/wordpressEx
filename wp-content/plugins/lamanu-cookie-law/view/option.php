<?php
$regexGoogleId = '/^[a-z]{2}[-]{1}[0-9]{6}[-]{1}[0-9]{1}$/i';

if(isset($_POST['buttonSuivi']) && isset($_POST['googleId']) && preg_match($regexGoogleId, $_POST['googleId'])){
  echo 'Google ID enregistré';
}else{
  ?>
  <form action="" method="POST">
    <?php
    if(isset($_POST['buttonSuivi'])){
      ?><p style="color:red">Veuillez remplir le champ avec votre ID</p>
    <?php
    }else if(isset($_POST['buttonSuivi']) && !preg_match($regexGoogleId, $_POST['googleId'])){
      ?><p style="color:red">La syntaxe ne correspond pas à un id Google Analytic</p>
    <?php } ?>
    <label for="googleId">ID de votre Google Analytic : </label>
    <input type="text" name="googleId" id="googleId" placeholder="UA-123456-1">
    <input type="submit" id="buttonSuivi" name="buttonSuivi" value="Lancer l'analyse">
  </form>
  <?php
}

// stocker maintenant l'ID dans la base de donnée