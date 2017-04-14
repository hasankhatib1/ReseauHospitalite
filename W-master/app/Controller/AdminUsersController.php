<?php


							///////////// Ajouté par Hasan //////////// 



namespace Controller ;  // c'est le nom du dossier dans lequel la classe est crée

use \W\Controller\Controller ; // c'est le chemain de la classe parente Controller
use \W\Model\UsersModel;       // c'est le chemain d'une classe de Frame W nommée UsersModel   (pour se connecter à la base de données : table : users)
use \W\Security\AuthentificationModel; // c'est le chemain d'une classe de Frame W nommée AuthentificationModel

class AdminUsersController extends Controller
{

/* ********************************* créer un utilisateur  ******************************* */

	public function signup()   // création de la méthode signup qui est associée à la route /users/signup
	{
		$message = "" ;
										
		if (!empty($_REQUEST))		// traiter le formulaire
		{
			$safe = array_map('strip_tags', $_REQUEST) ;
			
			$username     = trim($safe["username"]) ;   // utiliser (trim) pour suprimer les blanc avant et après le text
			$email     = trim($safe["email"]) ;
			$password   = trim($safe["password"]) ;
			$role     = trim($safe["role"]) ;

			if ( (is_string($username)) && (mb_strlen($username) > 3 )
                    && (filter_var($email, FILTER_VALIDATE_EMAIL))   
                    && ( mb_strlen($password) > 5 ) 
                    && (($role == "redacteur")|| ($role == "utilisateur")) )
				{
					$passwordHash = password_hash($password, PASSWORD_DEFAULT) ;  // hacher le mot de passe
					$objetUserModel = new UsersModel;  // création d'un objet sur la classe Model 

					if (! $objetUserModel->emailExists($email))  // vérifier si le mail n'existe pas 
	                {
	                    if (! $objetUserModel->usernameExists($username)) // vérifier si le username existe déjà 
	                    {
	                        $objetUserModel->insert([
		                    "username"     => $username, 
		                    "email"        => $email, 
		                    "password"     => $passwordHash,
		                    "role"         => $role  ]);

		                    $message = "Utilisateur ajouté" ;
	                    }
	                    else
	                    {
	                        $message = "ERREUR: username existe dejà";    
	                    }
	                    
	                }
	                else
	                {
	                    $message = "ERREUR: email existe dejà";    
	                }
				}
				else
				{
					$message = "Erreur : Infos incorrecte" ;
				}
		}

		$this->show('pages/admin-users-signup', ['message' => $message]); // afficher la page (admin-article.php) dans le dossier (pages) qui doit se trouver dans le dossier Views
	}





// /* ********************************* sidentifier  ******************************* */

// 	public function login()   // création de la méthode login qui est associée à la route /users/login
// 	{
// 		$message = "" ;

// 		if (isset($_REQUEST["operation"]) && ($_REQUEST["operation"] == "login"))		// traiter le formulaire
// 		{
// 			$safe = array_map('strip_tags', $_REQUEST) ;
			
// 			$usernameEmail = trim($safe["usernameEmail"])  ;   // utiliser (trim) pour suprimer les blanc avant et après le text
// 			$password      = trim($safe["password"])       ;
			
// 			if ( (is_string($usernameEmail)) && (mb_strlen($usernameEmail) > 3 )
//                     && ( mb_strlen($password) > 5 ) )
// 			{

// 				$objetAuthentificationModel = new AuthentificationModel ; // création d'un objet sur la classe AuthentificationModel
// 				$idUser = $objetAuthentificationModel->isValidLoginInfo($usernameEmail, $password);
// 				if ($idUser > 0)
// 				{
// 					$objetUsersModel = new UsersModel ;
// 					$tabUser = $objetUsersModel->find($idUser) ;       // récuperer la ligne (les infos) de l'utilisateur 
// 					$objetAuthentificationModel->logUserIn($tabUser); // memoriser les infos de l'utilisateur ($tabUser) dans une Session avec la methode (logUserIn)

// 					 $this->redirectToRoute("admin_article"); // Rederiction vers la Page de admin_article

					 
// 				}
// 				else
// 				{
// 					$message = "Identidiants incorrects" ;
// 				}

// 			}
// 		}

// 		$this->show('pages/admin-users-login', ['message' => $message]); // afficher la page (users-login.php) dans le dossier (pages) qui doit se trouver dans le dossier Views
// 	}



// 	/* ********************************* se déconnecter  ******************************* */

// 	public function logout()   // création de la méthode logout qui est associée à la route /users/logout
// 	{

//         $objetAuthentificationModel = new AuthentificationModel;

//         $objetAuthentificationModel->logUserOut();    // Supprimer les Infos de la Session
        
//         $this->redirectToRoute("admin_users_login"); // Rederiction vers la Page de login

// 	}




	/* ********************************* liste des utilisateurs  ******************************* */


	/* ********************************* modifier ou supprimer un utilisateur  ******************************* */





}
	