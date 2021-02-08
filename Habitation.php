<?php


class Habitation {
    public String $pays;
    public String $ville;
    public Int $codePostal;
    public Int $chambres;
    public Int $pieces;


    public function __construct(string $pays, string $ville, int $codePostal, int $chambres, int $pieces) {
        $this->setPays($pays);
        $this->setVille($ville);
        $this->setCodePostal($codePostal);
        $this->setChambres($chambres);
        $this->setPieces($pieces);

    }

    /**
     * @return String
     */
    public function getPays(): string
    {
        return $this->pays;
    }

    /**
     * @param String $pays
     */
    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    /**
     * @return String
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param String $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return Int
     */
    public function getCodePostal(): int
    {
        return $this->codePostal;
    }

    /**
     * @param Int $codePostal
     */
    public function setCodePostal(int $codePostal): void
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return Int
     */
    public function getChambres(): int
    {
        return $this->chambres;
    }

    /**
     * @param Int $chambres
     */
    public function setChambres(int $chambres): void
    {
        $this->chambres = $chambres;
    }

    /**
     * @return Int
     */
    public function getPieces(): int
    {
        return $this->pieces;
    }

    /**
     * @param Int $pieces
     */
    public function setPieces(int $pieces): void
    {
        $this->pieces = $pieces;
    }


}