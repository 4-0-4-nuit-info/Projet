<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * R�ponse
 *
 * @ORM\Table(name="réponse")
 * @ORM\Entity
 */
class R�ponse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idQuestion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idquestion;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTheme", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idtheme;

    /**
     * @var string
     *
     * @ORM\Column(name="Reponse", type="text", length=65535, nullable=false)
     */
    private $reponse;


}

