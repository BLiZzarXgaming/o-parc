<?php
  require_once ("classe/utilisateur.php");
class utilisateurManager
{
    const INSERT_UTILISATEUR = "INSERT INTO t_utilisateurs(nom,courriel,motDepasse) VALUES (:username,:email,:password)";

    const GET_UTILISATEUR_USERNAME = "SELECT * 
                                        FROM t_utilisateurs
                                        WHERE nom = :nom";

    private $_bdd;
    public function __construct(PDO $bdd) 
    { 
        $this->_bdd = $bdd; 
    }

    public function insertUtilisateur(utilisateur $objUtilisateur)
    {
        $query = $this->_bdd->prepare(self::INSERT_UTILISATEUR);
        $bindParams = array(':username' => $objUtilisateur->getUsername(),
                            ':email' => $objUtilisateur->getEmail(),
                            ':password' => password_hash($objUtilisateur->getPassword(),PASSWORD_DEFAULT)); //Encrypte le mot de passe avant de le mettre dans la base donnée
        assert($query->execute($bindParams));
    }

    public function connexion(string $nom, string $password) : bool {
        $query = $this->_bdd->prepare(self::GET_UTILISATEUR_USERNAME);
        $bindParams = array(':nom' => $nom);
        $query->execute($bindParams);
        $results = $query->fetchAll();

        if (password_verify($password, $results[0][3])) {
            $_SESSION['user'] = $results[0];
            return true;
        }
        else {
            return false;
        }
    }

}

?>