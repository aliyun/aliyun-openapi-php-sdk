<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CombineLoa
 *
 * @method string getTrademarkName()
 * @method string getMaterialName()
 * @method string getAddress()
 * @method string getNationality()
 * @method string getTmProduceType()
 * @method string getMaterialId()
 */
class CombineLoaRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Trademark',
            '2018-07-24',
            'CombineLoa',
            'trademark'
        );
    }

    /**
     * @param string $trademarkName
     *
     * @return $this
     */
    public function setTrademarkName($trademarkName)
    {
        $this->requestParameters['TrademarkName'] = $trademarkName;
        $this->queryParameters['TrademarkName'] = $trademarkName;

        return $this;
    }

    /**
     * @param string $materialName
     *
     * @return $this
     */
    public function setMaterialName($materialName)
    {
        $this->requestParameters['MaterialName'] = $materialName;
        $this->queryParameters['MaterialName'] = $materialName;

        return $this;
    }

    /**
     * @param string $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->requestParameters['Address'] = $address;
        $this->queryParameters['Address'] = $address;

        return $this;
    }

    /**
     * @param string $nationality
     *
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->requestParameters['Nationality'] = $nationality;
        $this->queryParameters['Nationality'] = $nationality;

        return $this;
    }

    /**
     * @param string $tmProduceType
     *
     * @return $this
     */
    public function setTmProduceType($tmProduceType)
    {
        $this->requestParameters['TmProduceType'] = $tmProduceType;
        $this->queryParameters['TmProduceType'] = $tmProduceType;

        return $this;
    }

    /**
     * @param string $materialId
     *
     * @return $this
     */
    public function setMaterialId($materialId)
    {
        $this->requestParameters['MaterialId'] = $materialId;
        $this->queryParameters['MaterialId'] = $materialId;

        return $this;
    }
}
