<?php 

class CommentaireController{

	public function getAllCommentaire(){
		$comment = Commentaire::getAll();
		return $comment;
	}

    public function getAllByPostId($id){
        return Commentaire::getAllByPostId($id);
    }

	public function getOnecommentaire(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$comment = Commentaire::getcommentaire($data);
			return $comment;
		}
	}

	public function addCommentaire(){
			$data = array(
				'contenue' => $_POST['contenue'],
                'id' => $_POST['id']
			);
			
			$result = Commentaire::add($data);
			if($result === 'ok'){
				Session::set('success','commentaire Ajouté');
				Redirect::to('home');
			}else{
				echo $result;
			}
	}
}
?>