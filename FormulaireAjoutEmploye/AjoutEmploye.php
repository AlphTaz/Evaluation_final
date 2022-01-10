<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php 
  require "Form.php";

  $formulaire = new Form ($_POST)
    ?>

<main>
       <div class="login">
            <h2 style="text-align:center"> Home </h2>
           
         <form action="#" method="post">

            <?php

            $formulaire->createInput('Name') ;
          
            $formulaire->createInput('Surname');
          
            ?>

          

            <a class="mdp" href="#!"> <strong>Mot de passe oublié ?</strong></a>

            <hr />

            <?php 
            $formulaire->createSubmit('envoi','btn');
            ?>
            
            </form>
        
        </div>

       
</main>

<br>
<p>
    <?php
      
      echo (empty($_POST['Name']) && empty($_POST['Surname'])) ? 'Veuillez saisir un nom et un prénom valide' :
    
       'Bienvenue ' . $_POST['nom'] . $_POST['prenom'] . '</br>' .'Vous êtes maintenant connecté';
      

      ?>

</p>
</body>
</html>