<?php

namespace AppBundle\Entity\Shop;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shop
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Shop\OrganizationRepository")
 */
class Organization
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
     * @ORM\Column(name="openTime", type="time", nullable=true)
     */
    private $openTime;

    /**
     * @ORM\Column(name="closeTime", type="time", nullable=true)
     */
    private $closeTime;

    /**
     * @ORM\Column(name="lunchTimeStart", type="time", nullable=true)
     */
    private $lunchTimeStart;

    /**
     * @ORM\Column(name="lunchTimeEnd", type="time", nullable=true)
     */
    private $lunchTimeEnd;

    /**
     * @ORM\OneToMany(targetEntity="Shop", mappedBy="organization")
     **/
    private $shops;

    /**
     * @ORM\OneToMany(targetEntity="PriceList", mappedBy="organization")
     **/
    private $commonPriceList;

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
     * @return Organization
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
     * Set openTime
     *
     * @param \DateTime $openTime
     * @return Organization
     */
    public function setOpenTime($openTime)
    {
        $this->openTime = $openTime;

        return $this;
    }

    /**
     * Get openTime
     *
     * @return \DateTime 
     */
    public function getOpenTime()
    {
        return $this->openTime;
    }

    /**
     * Set closeTime
     *
     * @param \DateTime $closeTime
     * @return Organization
     */
    public function setCloseTime($closeTime)
    {
        $this->closeTime = $closeTime;

        return $this;
    }

    /**
     * Get closeTime
     *
     * @return \DateTime 
     */
    public function getCloseTime()
    {
        return $this->closeTime;
    }

    /**
     * Set lunchTimeStart
     *
     * @param \DateTime $lunchTimeStart
     * @return Organization
     */
    public function setLunchTimeStart($lunchTimeStart)
    {
        $this->lunchTimeStart = $lunchTimeStart;

        return $this;
    }

    /**
     * Get lunchTimeStart
     *
     * @return \DateTime 
     */
    public function getLunchTimeStart()
    {
        return $this->lunchTimeStart;
    }

    /**
     * Set lunchTimeEnd
     *
     * @param \DateTime $lunchTimeEnd
     * @return Organization
     */
    public function setLunchTimeEnd($lunchTimeEnd)
    {
        $this->lunchTimeEnd = $lunchTimeEnd;

        return $this;
    }

    /**
     * Get lunchTimeEnd
     *
     * @return \DateTime 
     */
    public function getLunchTimeEnd()
    {
        return $this->lunchTimeEnd;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Organization
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
     * @return Organization
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
     * Add shops
     *
     * @param \AppBundle\Entity\Shop\Shop $shops
     * @return Organization
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
     * Add commonPriceList
     *
     * @param \AppBundle\Entity\Shop\PriceList $commonPriceList
     * @return Organization
     */
    public function addCommonPriceList(\AppBundle\Entity\Shop\PriceList $commonPriceList)
    {
        $this->commonPriceList[] = $commonPriceList;

        return $this;
    }

    /**
     * Remove commonPriceList
     *
     * @param \AppBundle\Entity\Shop\PriceList $commonPriceList
     */
    public function removeCommonPriceList(\AppBundle\Entity\Shop\PriceList $commonPriceList)
    {
        $this->commonPriceList->removeElement($commonPriceList);
    }

    /**
     * Get commonPriceList
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommonPriceList()
    {
        return $this->commonPriceList;
    }
}
