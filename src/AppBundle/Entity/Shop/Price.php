<?php

namespace AppBundle\Entity\Shop;

use Doctrine\ORM\Mapping as ORM;

/**
 * Price
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Shop\PriceRepository")
 */
class Price
{
    const PRICE_TYPE_DEFAULT = 'default_price';
    const PRICE_TYPE_SALE = 'sale_price';
    const PRICE_TYPE_ACTION = 'action_price';
    const PRICE_TYPE_ACTION_BY_HOURS = 'action_price_by_hours';

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
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $percent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetimetz", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="datetimetz", nullable=true)
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="PriceList", inversedBy="prices")
     * @ORM\JoinColumn(name="priceList_price_id", referencedColumnName="id")
     **/
    private $priceList;
}
