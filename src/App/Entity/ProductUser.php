<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="ProductUser")
 */
class ProductUser
{
    /**
     * @ORM\Id
     * @ORM\Column(
     *     name="id", type="integer", nullable=false, unique=true
     * )
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *  @ORM\Column(type="integer")
     */
    private $iduser;

    /**
     *  @ORM\Column(type="integer")
     */
    private $idproduct;

    /**
     *  @ORM\Column(type="integer")
     */
    private $total;

    /**
     *  @ORM\Column(type="datetime")
     */
    private $dateupdate;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }



    public function setIduser($iduser)
    {
        $this->iduser = $iduser;
    }

    public function getIduser()
    {
        return $this->iduser;
    }

    public function setIdproduct($idproduct)
    {
        $this->idproduct = $idproduct;
    }

    public function getIdproduct()
    {
        return $this->idproduct;
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setDateupdate($date)
    {
        $this->dateupdate = $date;
    }

    public function getDateupdate()
    {
        return $this->dateupdate;
    }


}
