//exercice1
<?php
 $nombre=10;$somme=0;
 for($i=0;$i<=$nombre;$i++){
 $somme+=$i;
 }
 echo"la somme de  $nombre premiers  est : $somme";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somme</title>
 </head>
 <style>

 </style>
 <body>
   <section class="exercice1">
    <form action="" method="POST">
        <label for="nombre"> Entrez la valeur du nombre:</label>
        <input type="text">
    </form>

   </section> 
 </body>
 </html>