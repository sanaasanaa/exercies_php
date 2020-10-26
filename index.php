<?php

$civ=$_POST["civ"];
if ($civ=="mr") {
   echo "bonjour monsieur";
}
elseif ($civ=="mme") {
   echo "bonjour madame";
}





?>
<form action="index.php" method="POST" >
<label for="civ"> civ </label>
<select name="civ"> 

  <option value="-">-</option>
  <option value="mr"> mr </option>
  <option value="mme"> mme </option>

</select>

<label for="nom"> nom </label><br>
<input type="text" name="nom"><br>

<label for="prenom"> prenom </label><br>
<input type="text" name="prenom"><br>

<label for="adresse"> adresse </label><br>
<input type="text" name="adresse"><br>






<input type="submit" name="envoyer">
</form>