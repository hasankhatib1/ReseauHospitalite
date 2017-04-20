<?php


							///////////// Ajouté par Hasan //////////// 



namespace Controller ;  // c'est le nom du dossier dans lequel la classe est crée

use \W\Controller\Controller ; // c'est le chemain de la classe parente Controller
use \W\Model\UsersModel;       // c'est le chemain d'une classe de Frame W nommée UsersModel   (pour se connecter à la base de données : table : users)
use \W\Security\AuthentificationModel; // c'est le chemain d'une classe de Frame W nommée AuthentificationModel

class AdminUsersController extends Controller
{

/* ********************************* créer un compte  ******************************* */

	public function signup()   // création de la méthode signup qui est associée à la route /users/signup
	{
		$this->allowTo(["admin", "redecteur", "utilisateur"]);

		$message = "" ;
										
		if (!empty($_REQUEST))		// traiter le formulaire
		{
			$safe = array_map('strip_tags', $_REQUEST) ;
			
			$username     = trim($safe["username"]) ;   // utiliser (trim) pour suprimer les blanc avant et après le text
			$email     	= trim($safe["email"]) ;
			$password  	= trim($safe["password"]) ;
			$role      	= trim($safe["role"]) ;

			if ( is_string($username) && (mb_strlen($username) > 3 )
                 && (filter_var($email, FILTER_VALIDATE_EMAIL))   
                 && ( mb_strlen($password) > 5 ) 
                 && (($role == "admin")||($role == "redacteur")|| ($role == "utilisateur")) )
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

		                    $message = "Compte ajouté" ;
	                    }
	                    else
	                    {
	                        $message = "ERREUR: Identifiant existe dejà";    
	                    }
	                    
	                }
	                else
	                {
	                    $message = "ERREUR: Email existe dejà";    
	                }
				}
				else
				{
					$message = "Erreur : Infos incorrecte" ;
				}
		}



		// /* **************************  supprimer un compte*************************** */

		if (isset($_REQUEST["operation"]) && ($_REQUEST["operation"] == "supprimer"))
		{
			$safe = array_map('strip_tags', $_REQUEST) ;
			$id     = intval(trim($safe["id"])) ; // intval transforme le text en nombre
			if ($id > 0)
			{
				$ObjetSignupDelet = new UsersModel;  

				$ObjetSignupDelet->delete($id) ; // effacer la ligne 
				$this->redirectToRoute('admin_users_signup');
			}
		}


		$this->show('pages/admin-users-signup', ['message' => $message]); 

	}



	/* ********************************* modifier un compte  ******************************* */



	public function signupUpdate($id)   
	{
		 $this->allowTo(["admin", "redecteur", "utilisateur"]); // Protéger l'accès à cette page (la connexion à cette page et autériser seulement les utilisateurs qui ont le rôle : "admin", "super-admin, .... ")

		$message = "" ;

		if (isset($_REQUEST["operation"]) && ($_REQUEST["operation"] == "modifier"))
		{
			$safe = array_map('strip_tags', $_REQUEST) ;

			$username  	= trim($safe["username"]) ;   
			$email     	= trim($safe["email"]) ;
			$password  	= trim($safe["password"]) ;
			$role	   	= trim($safe["role"]) ;

			if(	is_string($username) && (mb_strlen($username) > 3 )
                && (filter_var($email, FILTER_VALIDATE_EMAIL))   
                && ( mb_strlen($password) > 5 ) 
                && (($role == "admin")||($role == "redacteur")|| ($role == "utilisateur")) )
			{

				$passwordHash = password_hash($password, PASSWORD_DEFAULT) ;  // hacher le mot de passe

				$ObjetSignupUpdate = new UsersModel;  

				// if (! $ObjetSignupUpdate->emailExists($email))  // vérifier si le mail existe déjà 
    //             {
                    // if (! $ObjetSignupUpdate->usernameExists($username)) // vérifier si le username existe déjà 
                    // {
						$ObjetSignupUpdate->update([
		                "username"  => $username, 
		                "email"     => $email, 
		                "password"  => $passwordHash, 
		                "role"      => $role ] , $id);

                		$message = "Compte modifié" ;
                    // }
                    // else
                    // {
                    //     $message = "ERREUR: Identifiant existe dejà";    
                    // }
                    
                // }
                // else
                // {
                //     $message = "ERREUR: Email existe dejà";    
                // }
                $this->redirectToRoute('admin_users_signup');
			}
			else
			{
				$message = "Erreur : Infos incorrecte" ;
			}
		}

		$this->show('pages/admin-users-signup-update', ["id" => $id ,"message" => $message]); 
	}	



// /* ********************************* s'identifier  ******************************* */

	public function login()   // création de la méthode login qui est associée à la route admin/users/login
	{
		$message = "" ;

		if (isset($_REQUEST["operation"]) && ($_REQUEST["operation"] == "login"))		
		{
			$safe = array_map('strip_tags', $_REQUEST) ;
			
			$usernameEmail = trim($safe["usernameEmail"])  ;   
			$password      = trim($safe["password"])       ;
			
			if ( (is_string($usernameEmail)) && (mb_strlen($usernameEmail) > 3 )
                    && ( mb_strlen($password) > 5 ) )
			{

				$objetAuthentificationModel = new AuthentificationModel ; 
				$idUser = $objetAuthentificationModel->isValidLoginInfo($usernameEmail, $password);
				if ($idUser > 0)
				{
					$objetUsersModel = new UsersModel ;
					$tabUser = $objetUsersModel->find($idUser) ;       // récuperer la ligne (les infos) de l'utilisateur 
					$objetAuthentificationModel->logUserIn($tabUser); // memoriser les infos de l'utilisateur ($tabUser) dans une Session avec la methode (logUserIn)

				//	 $this->redirectToRoute("default_accueil"); // Rederiction vers la Page de default_accueil
					 
				}
				else
				{
					$message = "Identidiants incorrects" ;
				}
			}
		}

		$this->show('pages/accueil'); 
	}




// 	/* ********************************* se déconnecter  ******************************* */

public function logout()   // création de la méthode logout qui est associée à la route /users/logout
	{

        $objetAuthentificationModel = new AuthentificationModel;

        $objetAuthentificationModel->logUserOut();    // Supprimer les Infos de la Session
        
        $this->redirectToRoute("admin_users_login"); // Rederiction vers la Page de login

	}




}

?>
	