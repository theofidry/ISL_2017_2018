<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abus
 *
 * @ORM\Table(name="abus")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AbusRepository")
 */
class Abus
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
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="encodage", type="datetime")
     */
    private $encodage;

    /**
     * un abus concerne un commentaire
     * @ORM\OneToOne(targetEntity="Commentaire")
     * @ORM\JoinColumn(name="commentaire_id", referencedColumnName="id")
     */
    private $commentaire;

    /**
     * @return mixed
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param mixed $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
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
     * Set description
     *
     * @param string $description
     *
     * @return Abus
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set encodage
     *
     * @param \DateTime $encodage
     *
     * @return Abus
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
