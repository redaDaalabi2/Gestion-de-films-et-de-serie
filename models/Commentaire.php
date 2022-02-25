<?php 

class Commentaire {

	static public function getAll(){
		$stmt = DB::connect()->prepare('SELECT * FROM commenataire');
		$stmt->execute();
		return $stmt->fetchAll();
		
	}

    static public function getAllByPostId($id){
        $stmt = DB::connect()->prepare("select * from commentaire where postId = :id");
        $stmt->execute(["id" => $id]);
        return $stmt->fetchAll();
    }

    static public function getAllByPostIds($ids){
        $stmt = DB::connect()->prepare("select * from commentaire where postId in :ids");
        $stmt->execute(["ids" => $ids]);
        return $stmt->fetchAll();
    }
	
	static public function getcommentaire($data){
		$id = $data['id'];
		try{
			$query = 'SELECT * FROM commentaire WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			$commentaire = $stmt->fetch(PDO::FETCH_OBJ);
			return $commentaire;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function add($data){
		$query = 'INSERT INTO commentaire (commentaire,userId,postId)
		VALUES (:commentaire,:userId,:postId)';
		$stmt = DB::connect()->prepare($query);
		$stmt->bindParam(':commentaire',$data['contenue']);
		$stmt->bindParam(':userId',$_SESSION['Id_user']);
		$stmt->bindParam(':postId',$data['id']);
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
	}
}
?>