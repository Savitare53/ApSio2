<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table(name="ENTREPRISE")
 * @ORM\Entity
 */
class Entreprise
{
    /**
     * @var string
     *
     * @ORM\Column(name="NUMENTREPRISE", type="string", length=32, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numentreprise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMENTREPRISE", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $nomentreprise = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRENTREPRISE", type="string", length=50, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $adrentreprise = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CPENTREPRISE", type="string", length=5, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $cpentreprise = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="VILLEENTREPRISE", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $villeentreprise = 'NULL';


}
