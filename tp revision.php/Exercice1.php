<?php
    //QST 1 et 2 :
        $etudiant = [
            "nom"=>"Ezzahir","prenom"=>"Elhoucine","matricule"=>911167 , "note" => 17
        ];
        foreach($etudiant as $k =>$v){
            echo $k.": ".$v." "."<br/>";
        }
    echo "<br/>";
    //Qst 3 :
        $produits = [
            "nom1"=>"produit1","prix1"=>150,
            "nom2"=>"produit2","prix2"=>250,
            "nom3"=>"produit3","prix3"=>350
        ];
        foreach($produits as $k =>$v){
            echo $k.": ".$v." "."<br/>";
        }
    echo "<br/>";
    //Qst 4 :
        $scores = [
            "score etd1"=>500,
            "score etd2"=>1500,
            "score etd3"=>2500,
            "score etd4"=>3500,
            "score etd5"=>4500,
        ];
        $somme = 0;
        foreach($scores as $k => $v){
            $somme += $v; 
        }
        $moyenne = $somme / 5;
        echo "La moyenne des scores = ".$moyenne;
        echo "<br/>";
    //Qst 5 :
        $pays = [
            "maroc"=> 38000000,
            "espagne"=> 46000000,
            "algerie"=> 47000000,
        ];
        echo "<br/>";
        rsort($pays);
        foreach($pays as $k => $v){
            echo $k.": ".$v." "."<br/>";
        }
        echo "<br/>";
    //Qst 6 et 7 :
        $nom =$_POST["nom"];
        $age = $_POST["age"];
        if (is_int($age) && $age > 0) {
            echo "Bienvenue , $nom , Vous avez $age ans !";
        }else{
            echo "Erreur de votre Age est n'est pas de type entier";
        }
    //Qst 8 :
        $couleur = $_POST["couleur"];
        echo "Votre couleur preferee est : $couleur .";
        echo "<br/>";
    //Qst  9 :
        $nombre1 = $_GET["nombre1"];
        $nombre2 = $_GET["nombre2"];
        echo "La somme des nombres saisie = ".$nombre1+$nombre2;
        echo "<br/>";
    //Qst 10 :
        $type_compte = $_POST["type_compte"];
        if ($type_compte == "Administrateur") {
            echo "Bienvenue , $type_compte !";
        }else{
            echo "Bienvenue , $type_compte !";
        }
?>