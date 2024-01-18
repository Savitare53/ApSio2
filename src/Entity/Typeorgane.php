<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeorgane
 *
 * @ORM\Table(name="TYPEORGANE")
 * @ORM\Entity
 */
class Typeorgane
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDTYPE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBTYPE", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $libtype = 'NULL';


}
