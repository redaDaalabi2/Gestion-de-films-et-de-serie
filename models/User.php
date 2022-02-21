<?php
    class User{
        static public function createUser($data){
            $stmt = DB::connect()->prepare('INSERT INTO utilisateur (nom, prenom, email, motdepasse) VALUES (:nom,:prenom,:email,:motdepasse)');
            $stmt->bindParam(':nom',$data['nom']);
            $stmt->bindParam(':prenom',$data['prenom']);
            $stmt->bindParam(':email',$data['email']);
            $stmt->bindParam(':motdepasse',$data['motdepasse']);
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            // $stmt->close();
            $stmt = null;
        }
        static public function login($data){
            $email = $data['email'];
            try{
                $query = 'SELECT * FROM utilisateur WHERE email=:email';
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array(":email" => $email));
                $utilisateur = $stmt->fetch(PDO::FETCH_OBJ);
                return $utilisateur;
                if($stmt->execute()){
                    return 'ok';
                }
            }catch(PDOException $ex){
                echo 'erreur' . $ex->getMessage();
            }
        }
    }
?>