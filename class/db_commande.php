<?php 

class Commande {
    private int $id_commande;
    private bool $est_commandee;
    private int $id_panier;
    private DateTime $date_commande;

    public function __construct(
        int $id_commande, 
        bool $est_commandee, 
        Panier $id_panier,
        ?DateTime $date_commande
    ) 
    {
        $this->id_commande = $id_commande;
        $this->est_commandee = $est_commandee;
        $this->id_panier = $id_panier->getIdPanier();
        $this->date_commande = $date_commande ?? new DateTime();
    }

    // Getters
    public function getIdCommande() : int { return $this->id_commande; }
    public function getEstCommandee() : bool { return $this->est_commandee; }
    public function getIdPanier() : int { return $this->id_panier; }
    public function getDateCommande() : DateTime { return $this->date_commande; }

    // Setters
    public function setIdCommande(int $id_commande) : void { $this->id_commande = $id_commande; }
    public function setEstCommandee(bool $est_commandee) : void { $this->est_commandee = $est_commandee; }
    public function setIdPanier(int $id_panier) : void { $this->id_panier = $id_panier; }
    public function setDateCommande(DateTime $date_commande) : void { $this->date_commande = $date_commande; }
}

?>