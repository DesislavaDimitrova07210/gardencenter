<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductImages
 *
 * @ORM\Table(name="product_images")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductImagesRepository")
 */
class ProductImages
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="nameGraphic", type="string", length=255)
     */
    private $nameGraphic;

    /**
     * @return string
     */
    public function getNameGraphic()
    {
        return $this->nameGraphic;
    }

    /**
     * @param string $nameGraphic
     */
    public function setNameGraphic($nameGraphic)
    {
        $this->nameGraphic = $nameGraphic;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Products", inversedBy="arrImg")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     *
     */
    private $productId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ProductImages
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Set productId
     *
     * @param string $productId
     *
     * @return ProductImages
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }
}

