<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) 
{
    if(!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['phone']))
		{
            try
			{
				global $bdd;
				$bdd = new PDO('mysql:host=localhost;dbname=visitor;charset=utf8', 'root', '');
				
			}
            catch (Exception $e)
			{
					die('Erreur : ' . $e->getMessage());
			}
		$sql1="select * from contact where email='".$_POST['email']."'";
		$reponse = $bdd->query($sql1);
	    $donnees = $reponse->fetch();
	
			if(empty($donnees))
			{   
				$sql2="insert into contact(name, email, phone) values('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."')";
				$bdd->exec($sql2);
				echo"<center>contact ".$_POST['name']." est ajouté avec succés</center>";
			}
			else
			echo "<center>contact existe déja !!!</center>";
		} 
	}

?>