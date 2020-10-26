<?php

$civ=$_POST["civ"];
if ($civ=="mr") {
   echo "bonjour monsieur";
}
elseif ($civ=="mme") {
   echo "bonjour madame";
}

$dispo=$_POST["dispo"];
switch ($dispo) {
    case 'lundi':
        echo "aaa";
        break;

    case 'mardi':
        echo "bbb";
        break;

    case 'mercredi':
       echo "ccc";
        break;

    case 'jeudi':
        echo "ddd";
        break; 
    
    case 'vendredi': 
        echo "eee";
}








?>
<form action="index.php" method="POST" >
<label for="civ"> civ </label><br>
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


<label for="dispo"> dispo </label>
<select name="dispo">
<option value="lundi"> lundi </option>
<option value="mardi"> mardi </option>
<option value="mercredi"> mercredi </option>
<option value="jeudi"> jeudi</option>
<option value="vendredi"> vendredi </option>


</select>


<input type="submit" name="envoyer">
</form>

<!-- tabl -->
<?php
$dispo=["lundi","mardi","mercredi","jeudi","vendredi"];

foreach ($dispo as $key => $value) {
 echo $value;
}
?>