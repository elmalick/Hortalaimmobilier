<?php

namespace HTL\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bien
 *
 * @ORM\Table(name="bien")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\BienRepository")
 */
class Bien
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
     * @ORM\Column(name="nombien", type="string", length=50)
     */
    private $nombien;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=50)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="prixlocation", type="integer")
     */
    private $prixlocation;


    /**

   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Bien")

   * @ORM\JoinColumn(nullable=false)

   */

  private $parent;


  /**

   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Bien")

   * @ORM\JoinColumn(nullable=false)

   */

  private $localite;


/**

   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Typebien")

   * @ORM\JoinColumn(nullable=false)

   */

  private $type;



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
     * Set nombien
     *
     * @param string $nombien
     *
     * @return Bien
     */
    public function setNombien($nombien)
    {
        $this->nombien = $nombien;

        return $this;
    }

    /**
     * Get nombien
     *
     * @return string
     */
    public function getNombien()
    {
        return $this->nombien;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Bien
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Bien
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
     * Set prixlocation
     *
     * @param integer $prixlocation
     *
     * @return Bien
     */
    public function setPrixlocation($prixlocation)
    {
        $this->prixlocation = $prixlocation;

        return $this;
    }

    /**
     * Get prixlocation
     *
     * @return int
     */
    public function getPrixlocation()
    {
        return $this->prixlocation;
    }
}
