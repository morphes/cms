<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class City extends \App\Entity\City implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\City' . "\0" . 'id', '' . "\0" . 'App\\Entity\\City' . "\0" . 'title', '' . "\0" . 'App\\Entity\\City' . "\0" . 'latitude', '' . "\0" . 'App\\Entity\\City' . "\0" . 'longitude', '' . "\0" . 'App\\Entity\\City' . "\0" . 'description', '' . "\0" . 'App\\Entity\\City' . "\0" . 'visible', '' . "\0" . 'App\\Entity\\City' . "\0" . 'short_title', '' . "\0" . 'App\\Entity\\City' . "\0" . 'region', '' . "\0" . 'App\\Entity\\City' . "\0" . 'pickups', '' . "\0" . 'App\\Entity\\City' . "\0" . 'district', '' . "\0" . 'App\\Entity\\City' . "\0" . 'fias_id', '' . "\0" . 'App\\Entity\\City' . "\0" . 'kladr_id', '' . "\0" . 'App\\Entity\\City' . "\0" . 'couriers'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\City' . "\0" . 'id', '' . "\0" . 'App\\Entity\\City' . "\0" . 'title', '' . "\0" . 'App\\Entity\\City' . "\0" . 'latitude', '' . "\0" . 'App\\Entity\\City' . "\0" . 'longitude', '' . "\0" . 'App\\Entity\\City' . "\0" . 'description', '' . "\0" . 'App\\Entity\\City' . "\0" . 'visible', '' . "\0" . 'App\\Entity\\City' . "\0" . 'short_title', '' . "\0" . 'App\\Entity\\City' . "\0" . 'region', '' . "\0" . 'App\\Entity\\City' . "\0" . 'pickups', '' . "\0" . 'App\\Entity\\City' . "\0" . 'district', '' . "\0" . 'App\\Entity\\City' . "\0" . 'fias_id', '' . "\0" . 'App\\Entity\\City' . "\0" . 'kladr_id', '' . "\0" . 'App\\Entity\\City' . "\0" . 'couriers'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (City $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(?string $title): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitude(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitude', []);

        return parent::getLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitude(?float $latitude): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitude', [$latitude]);

        return parent::setLatitude($latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitude(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitude', []);

        return parent::getLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitude(?float $longitude): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitude', [$longitude]);

        return parent::setLongitude($longitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisible(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisible', []);

        return parent::getVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisible(?bool $visible): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisible', [$visible]);

        return parent::setVisible($visible);
    }

    /**
     * {@inheritDoc}
     */
    public function getShortTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShortTitle', []);

        return parent::getShortTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setShortTitle(?string $short_title): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShortTitle', [$short_title]);

        return parent::setShortTitle($short_title);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegion(): ?\App\Entity\Region
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegion', []);

        return parent::getRegion();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegion(?\App\Entity\Region $region): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegion', [$region]);

        return parent::setRegion($region);
    }

    /**
     * {@inheritDoc}
     */
    public function getPickups(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPickups', []);

        return parent::getPickups();
    }

    /**
     * {@inheritDoc}
     */
    public function addPickup(\App\Entity\Pickup $pickup): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPickup', [$pickup]);

        return parent::addPickup($pickup);
    }

    /**
     * {@inheritDoc}
     */
    public function removePickup(\App\Entity\Pickup $pickup): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePickup', [$pickup]);

        return parent::removePickup($pickup);
    }

    /**
     * {@inheritDoc}
     */
    public function getDistrict(): ?\App\Entity\District
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDistrict', []);

        return parent::getDistrict();
    }

    /**
     * {@inheritDoc}
     */
    public function setDistrict(?\App\Entity\District $district): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDistrict', [$district]);

        return parent::setDistrict($district);
    }

    /**
     * {@inheritDoc}
     */
    public function getFiasId(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFiasId', []);

        return parent::getFiasId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFiasId(?string $fias_id): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFiasId', [$fias_id]);

        return parent::setFiasId($fias_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getKladrId(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKladrId', []);

        return parent::getKladrId();
    }

    /**
     * {@inheritDoc}
     */
    public function setKladrId(?string $kladr_id): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKladrId', [$kladr_id]);

        return parent::setKladrId($kladr_id);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getCouriers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCouriers', []);

        return parent::getCouriers();
    }

    /**
     * {@inheritDoc}
     */
    public function addCourier(\App\Entity\Courier $courier): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCourier', [$courier]);

        return parent::addCourier($courier);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCourier(\App\Entity\Courier $courier): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCourier', [$courier]);

        return parent::removeCourier($courier);
    }

}
