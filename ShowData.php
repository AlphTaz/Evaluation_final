
<?php

// Initialiser la connection
$pdo = new PDO('sqlite:employee.db');

// Créer notre requête SQL
$requete = $pdo->query("SELECT * FROM Employe");

// Execution
$resultat = $requete->fetchAll(PDO::FETCH_ASSOC);



// Affichage

?>
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

};
    ?>
    </ul>
  
</body>
</html>

