<HTML>
<BODY>
<?php
switch(@$_REQUEST["actionnnnnnnnnnnn"]) 
    	{ 
		case "ajouterrrrrrrrrrrrrrrrrrr":
			if(empty($_REQUEST["nom"]))
				echo "Champ vide !!!<br /><br /><a href='index.php'>Cliquezxzzzzzzzzz ici pour revenir</a>" ;
			else{
				$nom=htmlentities(strip_tags($_REQUEST["nom"]));
				$fd = fopen("inscrip.txt", "a");
				fwrite($fd,"\r\n".$nom);
				fclose ($fd);
				echo "Votre &eacute;l&eacute;ment est ajout&eacute;!";
				echo "<br /><br /><a href='index.php'>Cliquez ici pour revenir</a>




				je commence à comprendre


				branche de Guy ChNGER À 15H45fAIT AUTRE CHOSE À 15H47



				fAIT UN CHANGMENT  DANS TESTGUY À 15H54 " ;
			}
        break;
			
		default:
		
 			echo "<h4>Voici une liste d'élément par un fichier</h4>";
			$fd = fopen("inscrip.txt", "r");
			echo "<select name='liste'>";
				while (!feof ($fd)) 
				{    
				$ligne = fgets ($fd);
				if(!empty($ligne))
				echo "<option>$ligne</option>";   
				}
			echo "</select>";
			fclose ($fd);
			
			echo "<h4>Voici des boutons radios d'&eacute;l&eacute;ment  par un fichier</h4>";
			$fd = fopen("inscrip.txt", "r");
				while (!feof ($fd)) 
				{    
				$ligne = fgets ($fd);
				if(!empty($ligne))
				echo "<input type='radio' name='radio' value='$ligne'>$ligne<br />";   
				}
			fclose ($fd);
			
			echo "<h4>Voici des cases d'&eacute;l&eacute;ment  par un fichier</h4>";
			$x=0;
			$fd = fopen("inscrip.txt", "r");
				while (!feof ($fd)) 
				{    
				$ligne = fgets ($fd);
				if(!empty($ligne))
				echo "<input type='checkbox' name='case$x' value='$ligne'>$ligne<br />";
				$x++;  
				}
			fclose ($fd);
		
			echo "<br />";
			echo "Inscrire un nouvel &eacute;l&eacute;ment ici !!!<br />" ;
			echo "<form method='get' action='index.php'>"; 
	   		echo "<input  name='nom' ><br /><br />";
			echo "<input name='action' type='submit' id='action' value='ajouter'></form>";
		}

?>

</BODY>
</HTML>

