<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class UserAddress extends \App\Entity\UserAddress implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'id', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'entity', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'person', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'postcode', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'region', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'city', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'street', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'address', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'kladr_id', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'fias_id', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'options'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'id', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'entity', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'person', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'postcode', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'region', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'city', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'street', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'address', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'kladr_id', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'fias_id', '' . "\0" . 'App\\Entity\\UserAddress' . "\0" . 'options'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (UserAddress $proxy) {
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
    public function getEntity(): ?\App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntity', []);

        return parent::getEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntity(?\App\Entity\Users $entity): \App\Entity\UserAddress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntity', [$entity]);

        return parent::setEntity($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function getPerson(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPerson', []);

        return parent::getPerson();
    }

    /**
     * {@inheritDoc}
     */
    public function setPerson(?string $person): \App\Entity\UserAddress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPerson', [$person]);

        return parent::setPerson($person);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostcode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostcode', []);

        return parent::getPostcode();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostcode(?string $postcode): \App\Entity\UserAddress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostcode', [$postcode]);

        return parent::setPostcode($postcode);
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
    public function setRegion(?\App\Entity\Region $region): \App\Entity\UserAddress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegion', [$region]);

        return parent::setRegion($region);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity(?string $city): \App\Entity\UserAddress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getStreet(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStreet', []);

        return parent::getStreet();
    }

    /**
     * {@inheritDoc}
     */
    public function setStreet(?string $street): \App\Entity\UserAddress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStreet', [$street]);

        return parent::setStreet($street);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress(?string $address): \App\Entity\UserAddress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
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
    public function setKladrId(?string $kladr_id): \App\Entity\UserAddress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKladrId', [$kladr_id]);

        return parent::setKladrId($kladr_id);
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
    public function setFiasId(?string $fias_id): \App\Entity\UserAddress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFiasId', [$fias_id]);

        return parent::setFiasId($fias_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptions(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptions', []);

        return parent::getOptions();
    }

    /**
     * {@inheritDoc}
     */
    public function setOptions(?string $options): \App\Entity\UserAddress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOptions', [$options]);

        return parent::setOptions($options);
    }

}
