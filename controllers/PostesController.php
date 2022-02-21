<?php
    class PostesController{
        public function getAllPoste(){
            $poste = Post::getAll();
            return $poste;
        }
        public function getOnePost(){
            if(isset($_POST['id'])){
                $data = array(
                    'id' => $_POST['id']
                );
                $Post=Post::getPost($data);
                return $Post;
            }
        }
        public function findPost(){
            if(isset($_POST['search'])){
                $data = array('search' => $_POST['search']);
            }
            $Poste = Post::searchPost($data);
            return $Poste;
        }
        public function addPost(){
            if(isset($_POST['submit'])){
                $data = array(
                    'titre' => $_POST['titre'],
                    'description' => $_POST['description'],
                    'photo' => $_POST['photo'],
                    'categorie' => $_POST['categorie'],
                );
                $result = Post::add($data);
                if($result === 'ok'){
                    Session::set('success','Post Ajouté');
                    Redirect::to('home');
                }else{
                    echo $result;
                }
            }
        }
        public function updatePost(){
            if(isset($_POST['submit'])){
                $data = array(
                    'id' => $_POST['id'],
                    'titre' => $_POST['titre'],
                    'description' => $_POST['description'],
                    'photo' => $_POST['photo'],
                    'categorie' => $_POST['categorie'],
                );
                $result = Post::update($data);
                if($result === 'ok'){
                    Session::set('success','Post Modifier');
                    Redirect::to('home');
                }else{
                    echo $result;
                }
            }
        }
        public function deletePost(){
            if(isset($_POST['id'])){
                $data['id'] = $_POST['id'];
                $result = Post::delete($data);
                if($result === 'ok'){
                    Session::set('success','Post Supprimer');
                    Redirect::to('home');
                }else{
                    echo $result;
                }
            }
        }
    }
?>