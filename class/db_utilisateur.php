<?php

class Utilisateur {
    private string $id_utilisateur;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $mot_de_passe;

    public function __construct(
        int $id_utilisateur, 
        string $nom, 
        string $prenom, 
        string $email, 
        string $mot_de_passe
    ) 
    {
        $this->id_utilisateur = $id_utilisateur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mot_de_passe = $mot_de_passe;
    }

    // Getters
    public function getIdUtilisateur() : string { return $this->id_utilisateur; }
    public function getNom() : string { return $this->nom; }
    public function getPrenom() : string { return $this->prenom; }
    public function getEmail() : string { return $this->email; }
    public function getMotDePasse() : string { return $this->mot_de_passe; }

    // Setters
    public function setIdUtilisateur(string $id_utilisateur) : void { $this->id_utilisateur = $id_utilisateur; }
    public function setNom(string $nom) : void { $this->nom = $nom; }
    public function setPrenom(string $prenom) : void { $this->prenom = $prenom; }
    public function setEmail(string $email) : void { $this->email = $email; }
    public function setMotDePasse(string $mot_de_passe) : void { $this->mot_de_passe = $mot_de_passe; }
}

?>