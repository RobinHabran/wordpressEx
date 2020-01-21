<?php
$regexGoogleId = '/^([u][a])[-]{1}[0-9]{6}[-]{1}[0-9]{1}$/i';

if(isset($_POST['buttonSuivi']) && isset($_POST['googleId']) && preg_match($regexGoogleId, $_POST['googleId'])){
  echo 'Google ID enregistré';
  $googleId = $_POST['googleId'];
  // stocker l'ID dans la base de donnée
  add_option($googleId);
}else{
  ?>
  <style>.error{color:red;} .bold{font-weight: bold;}</style>
  <form action="" method="POST">
    <h3>Renseignez vos données Google Analytic afin de joindre les données des cookies à vos statistiques.</h3>
    <?php
    if(isset($_POST['buttonSuivi'])){
      if(isset($_POST['buttonSuivi']) && $_POST['googleId'] == ''){
        ?><p class="error">Veuillez remplir le champ avec votre ID</p>
      <?php }elseif(isset($_POST['buttonSuivi']) && !preg_match($regexGoogleId, $_POST['googleId'])){ ?>
        <p class="error">La syntaxe ne correspond pas à un id Google Analytic.</p><p class="bold">syntaxe demandée ex: UA-123456-1</p>
    <?php }
    } ?>
    <label for="googleId">ID de votre Google Analytic : </label>
    <input type="text" name="googleId" id="googleId" placeholder="UA-123456-1">
    <input type="submit" id="buttonSuivi" name="buttonSuivi" value="Lancer l'analyse">
  </form>
  <?php
}

