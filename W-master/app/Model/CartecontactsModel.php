<?php

// Pour chaque table de la BD on doit créer une classe qui hérite de W\Model\Model.php
namespace Model;

use \W\Model\Model;

Class CartecontactsModel extends Model {

	/**
	 * Récupère toutes les lignes de la table filtrées sur une valeur
	 * @param $nomColonne La colonne sur laquelle filtrer
	 * @param $valeurColonne La valeur sur laquelle filtrer
	 * @param $orderBy La colonne en fonction de laquelle trier
	 * @param $orderDir La direction du tri, ASC ou DESC
	 * @param $limit Le nombre maximum de résultat à récupérer
	 * @param $offset La position à partir de laquelle récupérer les résultats
	 * @return array Les données sous forme de tableau multidimensionnel
	 */
	public function findAllBy($nomColonne = '', $valeurColonne = '', $orderBy = '', $orderDir = 'ASC', $limit = null, $offset = null)
	{

		$sql = 'SELECT * FROM ' . $this->table;

		if (!empty($nomColonne)){
			//sécurisation des paramètres, pour éviter les injections SQL
			if(!preg_match('#^[a-zA-Z0-9_$]+$#', $nomColonne)){
				die('Error: invalid nomColonne param');
			}
			if(!preg_match('#^[a-zA-Z0-9_$]+$#', $valeurColonne)){
				die('Error: invalid valeurColonne param');
			}

			$sql .= ' WHERE '.$nomColonne.'  = :valCol';
		}

		if (!empty($orderBy)){

			//sécurisation des paramètres, pour éviter les injections SQL
			if(!preg_match('#^[a-zA-Z0-9_$]+$#', $orderBy)){
				die('Error: invalid orderBy param');
			}
			$orderDir = strtoupper($orderDir);
			if($orderDir != 'ASC' && $orderDir != 'DESC'){
				die('Error: invalid orderDir param');
			}
			if ($limit && !is_int($limit)){
				die('Error: invalid limit param');
			}
			if ($offset && !is_int($offset)){
				die('Error: invalid offset param');
			}

			$sql .= ' ORDER BY '.$orderBy.' '.$orderDir;
		}

        if($limit){
            $sql .= ' LIMIT '.$limit;
            if($offset){
                $sql .= ' OFFSET '.$offset;
            }
        }

		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':valCol', $valeurColonne);
		$sth->execute();

		return $sth->fetchAll();
	}
	
}

?>