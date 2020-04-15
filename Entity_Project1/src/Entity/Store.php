<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StoreRepository")
 */
class Store
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Ilosc;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateComeInStore;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ForSale;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $CzyOwoce;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $CzyWarzywa;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $DataWaznosci;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Meskie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Damskie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Dzieciete;

    /**
     * Store constructor.
     * @param $id
     * @param $Name
     * @param $Ilosc
     * @param $DateComeInStore
     * @param $ForSale
     * @param $CzyOwoce
     * @param $CzyWarzywa
     * @param $DataWaznosci
     * @param $Meskie
     * @param $Damskie
     * @param $Dzieciete
     */
    public function __construct($id=null, $Ilosc=null, $DateComeInStore=null, $ForSale=null, $CzyOwoce=null, $CzyWarzywa=null, $DataWaznosci=null,
                                $Meskie=null, $Damskie=null, $Dzieciete=null)
    {
        $this->id = $id;
        $this->Ilosc = $Ilosc;
        $this->DateComeInStore = $DateComeInStore;
        $this->ForSale = $ForSale;
        $this->CzyOwoce = $CzyOwoce;
        $this->CzyWarzywa = $CzyWarzywa;
        $this->DataWaznosci = $DataWaznosci;
        $this->Meskie = $Meskie;
        $this->Damskie = $Damskie;
        $this->Dzieciete = $Dzieciete;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(?string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getIlosc(): ?int
    {
        return $this->Ilosc;
    }

    public function setIlosc(?int $Ilosc): self
    {
        $this->Ilosc = $Ilosc;

        return $this;
    }

    public function getDateComeInStore(): ?\DateTimeInterface
    {
        return $this->DateComeInStore;
    }

    public function setDateComeInStore(?\DateTimeInterface $DateComeInStore): self
    {
        $this->DateComeInStore = $DateComeInStore;

        return $this;
    }

    public function getForSale(): ?bool
    {
        return $this->ForSale;
    }

    public function setForSale(?bool $ForSale): self
    {
        $this->ForSale = $ForSale;

        return $this;
    }

    public function getCzyOwoce(): ?bool
    {
        return $this->CzyOwoce;
    }

    public function setCzyOwoce(?bool $CzyOwoce): self
    {
        $this->CzyOwoce = $CzyOwoce;

        return $this;
    }

    public function getCzyWarzywa(): ?bool
    {
        return $this->CzyWarzywa;
    }

    public function setCzyWarzywa(?bool $CzyWarzywa): self
    {
        $this->CzyWarzywa = $CzyWarzywa;

        return $this;
    }

    public function getDataWaznosci(): ?int
    {
        return $this->DataWaznosci;
    }

    public function setDataWaznosci(?int $DataWaznosci): self
    {
        $this->DataWaznosci = $DataWaznosci;

        return $this;
    }

    public function getMeskie(): ?string
    {
        return $this->Meskie;
    }

    public function setMeskie(?string $Meskie): self
    {
        $this->Meskie = $Meskie;

        return $this;
    }

    public function getDamskie(): ?string
    {
        return $this->Damskie;
    }

    public function setDamskie(?string $Damskie): self
    {
        $this->Damskie = $Damskie;

        return $this;
    }

    public function getDzieciete(): ?string
    {
        return $this->Dzieciete;
    }

    public function setDzieciete(?string $Dzieciete): self
    {
        $this->Dzieciete = $Dzieciete;

        return $this;
    }


}
