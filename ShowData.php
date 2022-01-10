<style>

.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 50%;
  height: auto;
  margin:auto;
  display:flex;
  justify-content:center;
  align-items:center;
}


</style>

<?php

// Initialiser la connection
$pdo = new PDO('sqlite:employee.db');

// Créer notre requête SQL
$requete = $pdo->query("SELECT * FROM Employe");

// Execution
$resultat = $requete->fetchAll(PDO::FETCH_ASSOC);



// Affichage

?>
<h1> Ma liste d'employé :</h1>
    <ul>
<?php

foreach ($resultat as $attributs) {
    


        echo "<div class='container'>";

            echo "Name :".$attributs['Name']."</li>";    
            echo "Surname :" . " " .$attributs['Surname']. "</br>";    
            echo "Position :" ." ".$attributs['Position'] . "</br>";    
            echo "Sexe :" . " ".$attributs['Sexe'] . "</br>";    
            echo "Birth-Date :" . " " .$attributs['Birth-Date']."</li>" . "</br>";    
            echo "Birth-Place :" . " " .$attributs['Birth-Place']."</li>" . "</br>";    
            echo "Wage :" . " " .$attributs['Wage']."</li>" . "</br>";    
            echo "Contract :" . " " .$attributs['Contract']."</li>" . "</br>";    
            echo "</br>";
        echo "</div>";
        
    echo "</div>";

};
    ?>
    </ul>
  
</body>
</html>

