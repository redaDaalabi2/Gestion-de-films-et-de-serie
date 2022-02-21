<?php
    class Post{
        static public function getAll(){
            $stmt = DB::connect()->prepare('SELECT * FROM post');
            $stmt->execute();
            return $stmt->fetchAll();
            // $stmt->close();
            //pour eviter ouverte de la connexion enter la base de données
            $stmt = null;
        }
        static public function add($data){
            $stmt = DB::connect()->prepare('INSERT INTO post (titre, description, photo, categorie) VALUES (:titre,:description,:photo,:categorie)');
            $stmt->bindParam(':titre',$data['titre']);
            $stmt->bindParam(':description',$data['description']);
            $stmt->bindParam(':photo',$data['photo']);
            $stmt->bindParam(':categorie',$data['categorie']);
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            // $stmt->close();
            $stmt = null;
        }
        static public function getPost($data){
            $id = $data['id']; 
            try{
                $query = 'SELECT * FROM post WHERE id=:id';
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array(":id" => $id));
                $Post = $stmt->fetch(PDO::FETCH_OBJ);
                return $Post;
            }catch(PDOException $ex){
                echo 'erreur' . $ex->getMessage();
            }
        }
        static public function update($data){
            $stmt = DB::connect()->prepare('UPDATE post SET titre = :titre,description = :description, photo = :photo, categorie = :categorie WHERE id=:id');
            $stmt->bindParam(':id',$data['id']);
            $stmt->bindParam(':titre',$data['titre']);
            $stmt->bindParam(':description',$data['description']);
            $stmt->bindParam(':photo',$data['photo']);
            $stmt->bindParam(':categorie',$data['categorie']);
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            // $stmt->close();
            $stmt = null;
        }
        static public function delete($data){
            $id = $data['id'];
            try{
                $query = 'DELETE FROM post WHERE id=:id';
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array(":id" => $id));
                if($stmt->execute()){
                    return 'ok';
                }
            }catch(PDOException $ex){
                echo 'erreur' . $ex->getMessage();
            }
        }
        static public function searchPost($data){
            $search = $data['search']; 
            try{
                $query = 'SELECT * FROM post WHERE titre LIKE ? OR categorie LIKE ?';
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array('%'.$search.'%','%'.$search.'%'));
                $Poste = $stmt->fetchAll();
                return $Poste;
            }catch(PDOException $ex){
                echo 'erreur' . $ex->getMessage();
            }
        }
    }
?>