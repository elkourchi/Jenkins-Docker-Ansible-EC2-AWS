<head>
		<meta charset='utf-8'>
</head>

<?php 

if(isset($_POST['id_modele']))      $id_modele=$_POST['id_modele'];
else      $id_modele="";

if(isset($_POST['modele']))         $modele=$_POST['modele'];
else      $modele="";

if(isset($_POST['carburant']))      $carburant=$_POST['carburant'];
else      $carburant="";


// On vérifie si les champs sont vides 
if(empty($id_modele) OR empty($modele) OR empty($carburant) ) 
{ 
    echo '<font color="red">Attention, Tous les champs sont obligatoirs !</font>'; 
} 

// Aucun champ n'est vide, on peut enregistrer dans la table 
else      
{ 

	try // On se connecte à MySQL
	{
		$bdd = new PDO('mysql:host=localhost;dbname=Voiture;charset=utf8', 'root', '');
	}

	catch(Exception $e)  // En cas d'erreur, on affiche un message et on arrête tout
	{
			die('Erreur : '.$e->getMessage());
	}
// Si tout va bien, on peut continuer


   $sql = "INSERT INTO modele(id_modele, modele, carburant) VALUES('$id_modele','$modele','$carburant')"; 

	// on insre les informations du formulaire dans la table 
	$reponse = $bdd->query($sql);

    // on affiche le résultat pour le visiteur 
    echo 'Vos infos on ete ajoutees.'; 

  $reponse->closeCursor();  // on ferme la connexion 

}
?>