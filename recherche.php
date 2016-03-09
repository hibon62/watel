<?php 

    //Initialisation de la variable contenant les résultats
    $resultats = ""; 

    if(isset($_POST['query']) && !empty($_POST['query'])){
        //Si l'utilisateur a entré quelque chose, on traite l'information
        
        $query = preg_replace("#[^a-zA-Z ?0-9]#i", "", $_POST['query']);
        
        $sql = "SELECT expert FROM expert WHERE NomVille LIKE ? OR CodePostal LIKE ?";
    }

    //Connexion a la base de données
    include("connect_db.php");

    $req = $db->prepare($sql);
    $req->execute(array($query, $query));

    $count = $req->rowCount();
    
    if($count >= 1){
        while($data = $req->fetch(PDO::FETCH_OBJ)){
            echo "<div>L'expert qui s'occupe de ".$query. " est : ".$data->expert."</div>";
        }
    }else{
        echo "0 résultat trouvé pour <strong>$query</strong><hr/>";
        
    }

?>