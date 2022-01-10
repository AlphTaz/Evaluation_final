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
  require "class.php";

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
    
       $_POST['Name'] . '</br>' . $_POST['Surname'] . '</br>' . $_POST['Position'] . '</br>' .$_POST['Sexe'] . '</br>' .$_POST['Birth-Date'] . '</br>' . $_POST['Birth-Place'] . '</br>' .$_POST['Wage'] . '</br>' . $_POST['Contract'] . '</br>' ;      

      ?>

</p>
</body>
</html>