<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of InsertRenewInfo
 *
 * @method string getEngName()
 * @method string getAddress()
 * @method string getRegisterTime()
 * @method string getEngAddress()
 * @method string getName()
 */
class InsertRenewInfoRequest extends \RpcAcsRequest
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
            'InsertRenewInfo',
            'trademark'
        );
    }

    /**
     * @param string $engName
     *
     * @return $this
     */
    public function setEngName($engName)
    {
        $this->requestParameters['EngName'] = $engName;
        $this->queryParameters['EngName'] = $engName;

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
     * @param string $registerTime
     *
     * @return $this
     */
    public function setRegisterTime($registerTime)
    {
        $this->requestParameters['RegisterTime'] = $registerTime;
        $this->queryParameters['RegisterTime'] = $registerTime;

        return $this;
    }

    /**
     * @param string $engAddress
     *
     * @return $this
     */
    public function setEngAddress($engAddress)
    {
        $this->requestParameters['EngAddress'] = $engAddress;
        $this->queryParameters['EngAddress'] = $engAddress;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }
}
