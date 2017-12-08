<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity
 */
class Question
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
     * @ORM\Column(name="Question", type="text", length=65535, nullable=false)
     */
    private $question;


}

