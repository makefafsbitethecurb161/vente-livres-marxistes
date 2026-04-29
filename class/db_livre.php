<?php

class Livre {
    private int $id;
    private string $titre;
    private float $prix;
    private string $txt_description;
    private string $txt_description2;
    private string $txt_resume;
    private string $img_url;

    public function __construct(
        int $id, 
        string $titre = '', 
        string $auteur = '', 
        float $prix = 0.0, 
        string $txt_description = '',
        string $txt_description2 = '',
        string $txt_resume = '',
        string $img_url = ''
    ) 
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->prix = $prix;
        $this->txt_description = $txt_description;
        $this->txt_description2 = $txt_description2;
        $this->txt_resume = $txt_resume;
        $this->img_url = $img_url;
    }

    // Getters
    public function getIdLivre() : int { return $this->id; }
    public function getTitre() : string { return $this->titre; }
    public function getPrix() : float { return $this->prix; }
    public function getTxtDescription() : string { return $this->txt_description; }
    public function getTxtDescription2() : string { return $this->txt_description2; }
    public function getTxtResume() : string { return $this->txt_resume; }
    public function getImgUrl() : string { return $this->img_url; }

    // Setters
    public function setTitre(string $titre) : void { $this->titre = $titre; }
    public function setPrix(float $prix) : void { $this->prix = $prix; }
    public function setTxtDescription(string $txt_description) : void { $this->txt_description = $txt_description; }
    public function setTxtDescription2(string $txt_description2) : void { $this->txt_description2 = $txt_description2; }
    public function setTxtResume(string $txt_resume) : void { $this->txt_resume = $txt_resume; }
    public function setImgUrl(string $img_url) : void { $this->img_url = $img_url; }
}

?>