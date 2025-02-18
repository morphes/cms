<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Courier extends \App\Entity\Courier implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'avarda_id', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'direction', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'direction_title', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'city_title', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'city_short_title', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'city_latitude', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'city_longitude', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'city_kladr', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'city_fias', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'post_code', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'comment', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'price_source', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'latitude', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'longitude', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'phones', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'schedule', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'delivery_days', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'delivery_days_source', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'min_order_sum', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'wholesale', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'retail', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'pvz_id', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'pvz_title', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'visible', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'payments_methods'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'avarda_id', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'direction', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'direction_title', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'city_title', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'city_short_title', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'city_latitude', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'city_longitude', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'city_kladr', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'city_fias', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'post_code', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'comment', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'price_source', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'latitude', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'longitude', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'phones', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'schedule', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'delivery_days', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'delivery_days_source', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'min_order_sum', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'wholesale', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'retail', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'pvz_id', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'pvz_title', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'visible', '' . "\0" . 'App\\Entity\\Courier' . "\0" . 'payments_methods'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Courier $proxy) {
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
    public function getAvardaId(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvardaId', []);

        return parent::getAvardaId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvardaId(?string $avarda_id): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvardaId', [$avarda_id]);

        return parent::setAvardaId($avarda_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getDirection(): ?\App\Entity\Direction
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDirection', []);

        return parent::getDirection();
    }

    /**
     * {@inheritDoc}
     */
    public function setDirection(?\App\Entity\Direction $direction): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDirection', [$direction]);

        return parent::setDirection($direction);
    }

    /**
     * {@inheritDoc}
     */
    public function getDirectionTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDirectionTitle', []);

        return parent::getDirectionTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDirectionTitle(?string $direction_title): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDirectionTitle', [$direction_title]);

        return parent::setDirectionTitle($direction_title);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity(): ?\App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity(?\App\Entity\City $city): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCityTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCityTitle', []);

        return parent::getCityTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setCityTitle(?string $city_title): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCityTitle', [$city_title]);

        return parent::setCityTitle($city_title);
    }

    /**
     * {@inheritDoc}
     */
    public function getCityShortTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCityShortTitle', []);

        return parent::getCityShortTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setCityShortTitle(?string $city_short_title): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCityShortTitle', [$city_short_title]);

        return parent::setCityShortTitle($city_short_title);
    }

    /**
     * {@inheritDoc}
     */
    public function getCityLatitude(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCityLatitude', []);

        return parent::getCityLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setCityLatitude(?string $city_latitude): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCityLatitude', [$city_latitude]);

        return parent::setCityLatitude($city_latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getCityLongitude(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCityLongitude', []);

        return parent::getCityLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setCityLongitude(?string $city_longitude): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCityLongitude', [$city_longitude]);

        return parent::setCityLongitude($city_longitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getCityKladr(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCityKladr', []);

        return parent::getCityKladr();
    }

    /**
     * {@inheritDoc}
     */
    public function setCityKladr(?string $city_kladr): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCityKladr', [$city_kladr]);

        return parent::setCityKladr($city_kladr);
    }

    /**
     * {@inheritDoc}
     */
    public function getCityFias(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCityFias', []);

        return parent::getCityFias();
    }

    /**
     * {@inheritDoc}
     */
    public function setCityFias(?string $city_fias): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCityFias', [$city_fias]);

        return parent::setCityFias($city_fias);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostCode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostCode', []);

        return parent::getPostCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostCode(?string $post_code): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostCode', [$post_code]);

        return parent::setPostCode($post_code);
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
    public function setAddress(?string $address): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getComment(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComment', []);

        return parent::getComment();
    }

    /**
     * {@inheritDoc}
     */
    public function setComment(?string $comment): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComment', [$comment]);

        return parent::setComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice(?float $price): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriceSource(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriceSource', []);

        return parent::getPriceSource();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriceSource(?string $price_source): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriceSource', [$price_source]);

        return parent::setPriceSource($price_source);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitude(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitude', []);

        return parent::getLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitude(?string $latitude): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitude', [$latitude]);

        return parent::setLatitude($latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitude(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitude', []);

        return parent::getLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitude(?string $longitude): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitude', [$longitude]);

        return parent::setLongitude($longitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhones(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhones', []);

        return parent::getPhones();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhones(?string $phones): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhones', [$phones]);

        return parent::setPhones($phones);
    }

    /**
     * {@inheritDoc}
     */
    public function getSchedule(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSchedule', []);

        return parent::getSchedule();
    }

    /**
     * {@inheritDoc}
     */
    public function setSchedule(?string $schedule): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSchedule', [$schedule]);

        return parent::setSchedule($schedule);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryDays(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryDays', []);

        return parent::getDeliveryDays();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeliveryDays(?string $delivery_days): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeliveryDays', [$delivery_days]);

        return parent::setDeliveryDays($delivery_days);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryDaysSource(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryDaysSource', []);

        return parent::getDeliveryDaysSource();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeliveryDaysSource(?string $delivery_days_source): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeliveryDaysSource', [$delivery_days_source]);

        return parent::setDeliveryDaysSource($delivery_days_source);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinOrderSum(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinOrderSum', []);

        return parent::getMinOrderSum();
    }

    /**
     * {@inheritDoc}
     */
    public function setMinOrderSum(?float $min_order_sum): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinOrderSum', [$min_order_sum]);

        return parent::setMinOrderSum($min_order_sum);
    }

    /**
     * {@inheritDoc}
     */
    public function getWholesale(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWholesale', []);

        return parent::getWholesale();
    }

    /**
     * {@inheritDoc}
     */
    public function setWholesale(?bool $wholesale): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWholesale', [$wholesale]);

        return parent::setWholesale($wholesale);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetail(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetail', []);

        return parent::getRetail();
    }

    /**
     * {@inheritDoc}
     */
    public function setRetail(?bool $retail): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRetail', [$retail]);

        return parent::setRetail($retail);
    }

    /**
     * {@inheritDoc}
     */
    public function getPvzId(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPvzId', []);

        return parent::getPvzId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPvzId(?int $pvz_id): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPvzId', [$pvz_id]);

        return parent::setPvzId($pvz_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getPvzTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPvzTitle', []);

        return parent::getPvzTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setPvzTitle(?string $pvz_title): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPvzTitle', [$pvz_title]);

        return parent::setPvzTitle($pvz_title);
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
    public function setVisible(?bool $visible): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisible', [$visible]);

        return parent::setVisible($visible);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentsMethods(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaymentsMethods', []);

        return parent::getPaymentsMethods();
    }

    /**
     * {@inheritDoc}
     */
    public function addPaymentsMethod(\App\Entity\PaymentMethod $paymentsMethod): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPaymentsMethod', [$paymentsMethod]);

        return parent::addPaymentsMethod($paymentsMethod);
    }

    /**
     * {@inheritDoc}
     */
    public function removePaymentsMethod(\App\Entity\PaymentMethod $paymentsMethod): \App\Entity\Courier
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePaymentsMethod', [$paymentsMethod]);

        return parent::removePaymentsMethod($paymentsMethod);
    }

}
