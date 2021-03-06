<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="cote", type="integer")
     */
    private $cote;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=true)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="encodage", type="datetime")
     */
    private $encodage;

    /**
     * Un commentaire à un auteur
     * @ORM\OneToOne(targetEntity="Internaute")
     * @ORM\JoinColumn(name="auteur_commentaire", referencedColumnName="id")
     */
    private $auteurCommentaire;

    /**
     * Un commentaire à une cible
     * @ORM\OneToOne(targetEntity="Prestataire")
     * @ORM\JoinColumn(name="cible_commentaire", referencedColumnName="id")
     */
    private $cibleCommentaire;

    /**
     * @return mixed
     */
    public function getCibleCommentaire()
    {
        return $this->cibleCommentaire;
    }

    /**
     * @param mixed $cibleCommentaire
     */
    public function setCibleCommentaire($cibleCommentaire)
    {
        $this->cibleCommentaire = $cibleCommentaire;
    }



    /**
     * @return mixed
     */
    public function getAuteurCommentaire()
    {
        return $this->auteurCommentaire;
    }

    /**
     * @param mixed $auteurCommentaire
     */
    public function setAuteurCommentaire($auteurCommentaire)
    {
        $this->auteurCommentaire = $auteurCommentaire;
    }



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cote
     *
     * @param integer $cote
     *
     * @return Commentaire
     */
    public function setCote($cote)
    {
        $this->cote = $cote;

        return $this;
    }

    /**
     * Get cote
     *
     * @return int
     */
    public function getCote()
    {
        return $this->cote;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Commentaire
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set encodage
     *
     * @param \DateTime $encodage
     *
     * @return Commentaire
     */
    public function setEncodage($encodage)
    {
        $this->encodage = $encodage;

        return $this;
    }

    /**
     * Get encodage
     *
     * @return \DateTime
     */
    public function getEncodage()
    {
        return $this->encodage;
    }
}
