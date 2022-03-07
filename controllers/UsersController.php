<?php
    class UsersController {
        public function authenticate(){
            if(isset($_POST['submit'])){
                $data['email'] = $_POST['email'];
			    $result = User::login($data);
                if($result->email === $_POST['email'] && password_verify($_POST['motdepasse'],$result->motdepasse)){
                    $_SESSION['logged'] = true;
                    $_SESSION['email'] = $result->email;
                    $_SESSION['Id_user'] = $result->id;
                    Redirect::to('home');
    
                }else{
                    Session::set('error','email ou mot de passe est incorrect');
                    Redirect::to('login');
                }
            }
        }
        public function register(){
            if(isset($_POST['submit'])){
                $options = [
                    'cost' => 12
                ];
                $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_BCRYPT,$options);

                $data = array(
                    'nom' => $_POST['nom'],
				    'prenom' => $_POST['prenom'],
				    'email' => $_POST['email'],
				    'motdepasse' => $motdepasse,
                );
                $result = User::createUser($data);
                if($result === 'ok'){
                    Session::set('success','compte créer');
                    Redirect::to('login');
                }else{
                    echo $result;
                }
            }
        }
        static public function logout(){
            session_unset();
            session_destroy();
        }
    }
?>