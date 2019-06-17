<?php
    function getDatabaseConnexion(){
        try {
            $user = 'root';
            $pass = 'root';
            $pdo = new PDO('mysql:host=localhost;dbname=mathieuraynaud', $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ARRMODE, PDO:: ERRMODE_EXCEPTION);

        }catch (Execption $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    } 

    function getAllUsers(){
        $con = getDatabaseConnexion();
        $requete = "SELECT * FROM moi where id ='$id' ";
        $rows = $con->query($requete);
        return $rows;
    }
    function readUsers(){
        $con = getDatabaseConnexion();
        $requete = "SELECT * FROM moi";
        $stmt = $con->query($requete);
        $row = $stmt->fetchAll();
        if(!empty($row)){
            return $row[0]; 
        }
       
    }
    function updateUsers($id, $nom, $prenom, $ville, $email, $tel){
        try{
            $con = getDatabaseConnexion();
            $requete = "UPDATE moi set
                        nom = '$nom' ,
                        prenom = '$prenom',
                        age = '$age' ,
                        ville = '$ville' ,
                        tel = '$tel' ,
                        email = '$email'
                        where id = '$id' ";
            $stmt = $con->query($requete);
            
        }
        catch (Execption $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
    function deletetexte($id){
        
    }
?>

