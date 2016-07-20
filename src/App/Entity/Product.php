<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Product")
 * @ORM\Entity(repositoryClass="App\Entity\Repository\ProductRepository")
 */
class Product
{
    /**
    * @ORM\Id
    * @ORM\Column(
    *     name="idProduct", type="integer", nullable=false, unique=true
    * )
    * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idproduct;

    /**
     * @ORM\Column(type="string")
     */
    private $about;

    /**
    *  @ORM\Column(type="string")
     */
    private $author;

    /**
     *  @ORM\Column(type="datetime")
     */
    private $datecreated;

    /**
     *  @ORM\Column(type="datetime")
     */
    private $datemodified;

    /**
     *  @ORM\Column(type="datetime")
     */
    private $datepublished;

    /**
     *  @ORM\Column(type="string")
     */
    private $keywords;

    /**
     *  @ORM\Column(type="string")
     */
    private $text;

    /**
     *  @ORM\Column(type="float")
     */
    private $aggregaterating;

    /**
     *  @ORM\Column(type="string")
     */
    private $url;

    /**
     *  @ORM\Column(type="string")
     */
    private $image;


    /**
     * Get idproduct
     *
     * @return integer
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }

    /**
     * Set about
     *
     * @param string $about
     *
     * @return Product
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set author
     *
     * @param integer $author
     *
     * @return Product
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return integer
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set datecreated
     *
     * @param \DateTime $datecreated
     *
     * @return Product
     */
    public function setDatecreated($datecreated)
    {
        $this->datecreated = $datecreated;

        return $this;
    }

    /**
     * Get datecreated
     *
     * @return \DateTime
     */
    public function getDatecreated()
    {
        return $this->datecreated;
    }

    /**
     * Set datemodified
     *
     * @param \DateTime $datemodified
     *
     * @return Product
     */
    public function setDatemodified($datemodified)
    {
        $this->datemodified = $datemodified;

        return $this;
    }

    /**
     * Get datemodified
     *
     * @return \DateTime
     */
    public function getDatemodified()
    {
        return $this->datemodified;
    }

    /**
     * Set datepublished
     *
     * @param \DateTime $datepublished
     *
     * @return Product
     */
    public function setDatepublished($datepublished)
    {
        $this->datepublished = $datepublished;

        return $this;
    }

    /**
     * Get datepublished
     *
     * @return \DateTime
     */
    public function getDatepublished()
    {
        return $this->datepublished;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return Product
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Product
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set aggregaterating
     *
     * @param float $aggregaterating
     *
     * @return Product
     */
    public function setAggregaterating($aggregaterating)
    {
        $this->aggregaterating = $aggregaterating;

        return $this;
    }

    /**
     * Get aggregaterating
     *
     * @return float
     */
    public function getAggregaterating()
    {
        return $this->aggregaterating;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Product
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Product
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}
