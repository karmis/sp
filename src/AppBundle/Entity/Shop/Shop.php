<?php

namespace AppBundle\Entity\Shop;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Shop\ShopRepository")
 */
class Shop
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
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

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
     * @ORM\ManyToOne(targetEntity="PriceList", inversedBy="shops")
     * @ORM\JoinColumn(name="personal_priceList_id", referencedColumnName="id")
     **/
    private $personalPriceList;

    /**
     * @ORM\ManyToOne(targetEntity="Organization", inversedBy="shops")
     * @ORM\JoinColumn(name="organization_id", referencedColumnName="id")
     **/
    private $organization;

    /**
     * @var boolean
     *
     * @ORM\Column(name="havePersonalPriceList", type="boolean")
     */
    private $havePersonalPriceList;

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
        $this->havePersonalPriceList = false;
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
     * @return Shop
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
     * Set address
     *
     * @param string $address
     * @return Shop
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set openTime
     *
     * @param \DateTime $openTime
     * @return Shop
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
     * @return Shop
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
     * @return Shop
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
     * @return Shop
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
     * Set havePersonalPriceList
     *
     * @param boolean $havePersonalPriceList
     * @return Shop
     */
    public function setHavePersonalPriceList($havePersonalPriceList)
    {
        $this->havePersonalPriceList = $havePersonalPriceList;

        return $this;
    }

    /**
     * Get havePersonalPriceList
     *
     * @return boolean 
     */
    public function getHavePersonalPriceList()
    {
        return $this->havePersonalPriceList;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Shop
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
     * @return Shop
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
     * Set personalPriceList
     *
     * @param \AppBundle\Entity\Shop\PriceList $personalPriceList
     * @return Shop
     */
    public function setPersonalPriceList(\AppBundle\Entity\Shop\PriceList $personalPriceList = null)
    {
        $this->personalPriceList = $personalPriceList;

        return $this;
    }

    /**
     * Get personalPriceList
     *
     * @return \AppBundle\Entity\Shop\PriceList 
     */
    public function getPersonalPriceList()
    {
        return $this->personalPriceList;
    }

    /**
     * Set organization
     *
     * @param \AppBundle\Entity\Shop\Organization $organization
     * @return Shop
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
