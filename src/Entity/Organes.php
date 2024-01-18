<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organes
 *
 * @ORM\Table(name="ORGANES", indexes={@ORM\Index(name="I_FK_ORGANES_TYPEORGANE", columns={"IDTYPE"}), @ORM\Index(name="I_FK_ORGANES_ENTREPRISE", columns={"NUMENTREPRISE"})})
 * @ORM\Entity
 */
class Organes
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDORGANE", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idorgane;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBORGANE", type="string", length=50, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $liborgane = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCORGANE", type="string", length=255, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $descorgane = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRIXORGANE", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $prixorgane = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="IMGORGANE", type="string", length=100, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $imgorgane = 'NULL';

    /**
     * @var \Entreprise
     *
     * @ORM\ManyToOne(targetEntity="Entreprise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NUMENTREPRISE", referencedColumnName="NUMENTREPRISE")
     * })
     */
    private $numentreprise;

    /**
     * @var \Typeorgane
     *
     * @ORM\ManyToOne(targetEntity="Typeorgane")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDTYPE", referencedColumnName="IDTYPE")
     * })
     */
    private $idtype;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Client", mappedBy="idorgane")
     */
    private $numclient = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->numclient = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
