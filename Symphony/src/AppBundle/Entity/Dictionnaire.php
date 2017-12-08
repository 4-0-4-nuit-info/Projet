<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dictionnaire
 *
 * @ORM\Table(name="dictionnaire")
 * @ORM\Entity
 */
class Dictionnaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdDico", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddico;

    /**
     * @var string
     *
     * @ORM\Column(name="Mot", type="string", length=255, nullable=false)
     */
    private $mot;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTheme", type="integer", nullable=false)
     */
    private $idtheme;


}

