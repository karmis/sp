<?php

namespace AppBundle\Entity\Shop;

use Doctrine\ORM\Mapping as ORM;

/**
 * PriceList
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Shop\PriceListRepository")
 */
class PriceList
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
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="priceLists")
     **/
    private $products;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var boolean
     *
     * @ORM\Column(name="haveAction", type="boolean")
     */
    private $haveAction;

    /**
     * @ORM\ManyToMany(targetEntity="Action", mappedBy="priceLists")
     **/
    private $actions;

    /**
     * @ORM\OneToMany(targetEntity="Shop", mappedBy="personalPriceList")
     **/
    private $shops;

    /**
     * @ORM\ManyToOne(targetEntity="Organization", inversedBy="commonPriceList")
     * @ORM\JoinColumn(name="common_priceList_id", referencedColumnName="id")
     **/
    private $organization;

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

    public function __construct()
    {
        $this->published = true;
        $this->deleted = false;
        $this->haveAction = false;
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
     * @return PriceList
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
     * Set price
     *
     * @param float $price
     * @return PriceList
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set haveAction
     *
     * @param boolean $haveAction
     * @return PriceList
     */
    public function setHaveAction($haveAction)
    {
        $this->haveAction = $haveAction;

        return $this;
    }

    /**
     * Get haveAction
     *
     * @return boolean 
     */
    public function getHaveAction()
    {
        return $this->haveAction;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return PriceList
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
     * @return PriceList
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

    /**
     * Add products
     *
     * @param \AppBundle\Entity\Shop\Product $products
     * @return PriceList
     */
    public function addProduct(\AppBundle\Entity\Shop\Product $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \AppBundle\Entity\Shop\Product $products
     */
    public function removeProduct(\AppBundle\Entity\Shop\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Add actions
     *
     * @param \AppBundle\Entity\Shop\Action $actions
     * @return PriceList
     */
    public function addAction(\AppBundle\Entity\Shop\Action $actions)
    {
        $this->actions[] = $actions;

        return $this;
    }

    /**
     * Remove actions
     *
     * @param \AppBundle\Entity\Shop\Action $actions
     */
    public function removeAction(\AppBundle\Entity\Shop\Action $actions)
    {
        $this->actions->removeElement($actions);
    }

    /**
     * Get actions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Add shops
     *
     * @param \AppBundle\Entity\Shop\Shop $shops
     * @return PriceList
     */
    public function addShop(\AppBundle\Entity\Shop\Shop $shops)
    {
        $this->shops[] = $shops;

        return $this;
    }

    /**
     * Remove shops
     *
     * @param \AppBundle\Entity\Shop\Shop $shops
     */
    public function removeShop(\AppBundle\Entity\Shop\Shop $shops)
    {
        $this->shops->removeElement($shops);
    }

    /**
     * Get shops
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getShops()
    {
        return $this->shops;
    }

    /**
     * Set organization
     *
     * @param \AppBundle\Entity\Shop\Organization $organization
     * @return PriceList
     */
    public function setOrganization(\AppBundle\Entity\Shop\Organization $organization = null)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get organization
     *
     * @return \AppBundle\Entity\Shop\Organization 
     */
    public function getOrganization()
    {
        return $this->organization;
    }
}
