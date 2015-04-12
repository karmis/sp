<?php

namespace AppBundle\Entity\Shop;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Shop\ProductRepository")
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="caption", type="string", length=255)
     */
    private $caption;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     **/
    private $category;


    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="PriceList", inversedBy="products")
     * @ORM\JoinTable(name="users_groups")
     **/
    private $priceLists;


    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->published = true;
        $this->deleted = false;
        $this->priceLists = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set caption
     *
     * @param string $caption
     * @return Product
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get caption
     *
     * @return string 
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
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
     * Set category
     *
     * @param \AppBundle\Entity\Shop\Category $category
     * @return Product
     */
    public function setCategory(\AppBundle\Entity\Shop\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Shop\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add priceLists
     *
     * @param \AppBundle\Entity\Shop\PriceList $priceLists
     * @return Product
     */
    public function addPriceList(\AppBundle\Entity\Shop\PriceList $priceLists)
    {
        $this->priceLists[] = $priceLists;

        return $this;
    }

    /**
     * Remove priceLists
     *
     * @param \AppBundle\Entity\Shop\PriceList $priceLists
     */
    public function removePriceList(\AppBundle\Entity\Shop\PriceList $priceLists)
    {
        $this->priceLists->removeElement($priceLists);
    }

    /**
     * Get priceLists
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPriceLists()
    {
        return $this->priceLists;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Product
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Product
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}
