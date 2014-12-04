<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		if(!estConnecte())
		{
			include("vues/v_connexion.php");
		}
		else
		{
			include("vues/v_sommaire.php");
		}
		break;
	}
	case 'valideConnexion':{
		$login = '';
		$mdp = '';
		if(isset($_REQUEST['login']))
		{
			$login = $_REQUEST['login'];
		}
		if(isset($_REQUEST['mdp']))
		{
			$mdp = $_REQUEST['mdp'];
		}
		$visiteur = $pdo->getInfosVisiteur($login,$mdp);
		if(!is_array( $visiteur)){
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else{
			$id = $visiteur['id'];
			$nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
			connecter($id,$nom,$prenom);
			include("vues/v_sommaire.php");
		}
		break;
	}
	case 'deconnexion':{
		deconnecter();
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>