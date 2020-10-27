
<?php

function fib($nombre){ // crées une fonction fib avec le parametre nombre
  if ($nombre<0) { // si nombre est inferieure a zero
    return (0); // la fonction retourne la valeur 0
  }
  elseif ($nombre<2) { // sinon si nombre est inférieur a 2
    return ($nombre); // retourne la valeur de nombre
  }

  return fib ($nombre-1)+fib($nombre-2); // retourne la somme (a+b) du résultat de la fonction fib() appliquée à la valeur "nombre-1" (donc 5 si nombre=6) et du résultat de la fonction fib() appliquée à la valeur "nombre-2" (donc 4 si nombre=6)
}

// ici nous ne sommes plus dans la fonction

for (
  $i=8;
  $i<30;
  $i++)
  { // Pour i allant de 8 à 29 (strictement inférieur à 30)
  $nouveau_nombre=fib($i); // calcul le résultat de la fonction fib() appliquée à la valeur de i (et stock le résultat dans $nouveau_nombre)
  echo $nouveau_nombre; // affiche ce résultat
  echo '<br>'; 
}

?>
  