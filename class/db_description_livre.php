<?php

class DbDescriptionLivre
{
    private $id_description;
    private $id_livre;
    private $txt_description;
    private $txt_description2;
    private $txt_resume;

    public function __construct(
        int $id_description,
        Livre $id_livre,
        ?string $txt_description,
        ?string $txt_description2,
        ?string $txt_resume
    )
    {
        $this->id_description = $id_description;
        $this->id_livre = $id_livre->getIdLivre();
        $this->txt_description = $txt_description;
        $this->txt_description2 = $txt_description2;
        $this->txt_resume = $txt_resume;
    }

    // Getters
    public function getIdDescription() : int { return $this->id_description; }
    public function getIdLivre() : int { return $this->id_livre; }
    public function getTxtDescription() : string { return $this->txt_description; }
    public function getTxtDescription2() : string { return $this->txt_description2; }
    public function getTxtResume() : string { return $this->txt_resume; }

    // Setters
    public function setIdDescription(int $id_description) : void { $this->id_description = $id_description; }
    public function setIdLivre(int $id_livre) : void { $this->id_livre = $id_livre; }
    public function setTxtDescription(string $txt_description) : void { $this->txt_description = $txt_description; }
    public function setTxtDescription2(string $txt_description2) : void { $this->txt_description2 = $txt_description2; }
    public function setTxtResume(string $txt_resume) : void { $this->txt_resume = $txt_resume; }
}

?>