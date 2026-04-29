<?php  

class Panier {
    private string $id_panier;
    private string $id_utilisateur;
    private int $id_livre;
    private int $quantite; 

    public function __construct(
        string $id_panier, 
        Utilisateur $id_utilisateur, 
        Livre $id_livre, 
        int $quantite
    ) 
    {
        $this->id_panier = $id_panier;
        $this->id_utilisateur = $id_utilisateur->getIdUtilisateur();
        $this->id_livre = $id_livre->getIdLivre();
        $this->quantite = $quantite;
    }

    // Getters
    public function getIdPanier() : string { return $this->id_panier; }
    public function getIdUtilisateur() : string { return $this->id_utilisateur; }
    public function getIdLivre() : int { return $this->id_livre; }
    public function getQuantite() : int { return $this->quantite; }

    // Setters
    public function setIdPanier(string $id_panier) : void { $this->id_panier = $id_panier; }
    public function setIdUtilisateur(string $id_utilisateur) : void { $this->id_utilisateur = $id_utilisateur; }
    public function setIdLivre(int $id_livre) : void { $this->id_livre = $id_livre; }
    public function setQuantite(int $quantite) : void { $this->quantite = $quantite; }
}

?>