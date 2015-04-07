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
     * @ORM\OneToMany(targetEntity="Product", mappedBy="priceList")
     **/
    private $products;

    /**
     * @ORM\OneToMany(targetEntity="Price", mappedBy="priceList")
     **/
    private $prices;

    /**
     * @ORM\OneToMany(targetEntity="Shop", mappedBy="priceList")
     **/
    private $shops;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean")
     */
    private $published;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean")
     */
    private $deleted;

    public function __construct()
    {
        $this->published = 1;
        $this->deleted = 0;
    }
}
