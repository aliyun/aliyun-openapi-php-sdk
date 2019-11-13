<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateAgAccount
 *
 * @method string getFirstName()
 * @method string getCityName()
 * @method string getPostcode()
 * @method string getEnterpriseName()
 * @method string getNationCode()
 * @method string getLastName()
 * @method string getLoginEmail()
 * @method string getProvinceName()
 * @method string getAccountAttr()
 */
class CreateAgAccountRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

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
            'BssOpenApi',
            '2017-12-14',
            'CreateAgAccount',
            'BssOpenApi'
        );
    }

    /**
     * @param string $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->requestParameters['FirstName'] = $firstName;
        $this->queryParameters['FirstName'] = $firstName;

        return $this;
    }

    /**
     * @param string $cityName
     *
     * @return $this
     */
    public function setCityName($cityName)
    {
        $this->requestParameters['CityName'] = $cityName;
        $this->queryParameters['CityName'] = $cityName;

        return $this;
    }

    /**
     * @param string $postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->requestParameters['Postcode'] = $postcode;
        $this->queryParameters['Postcode'] = $postcode;

        return $this;
    }

    /**
     * @param string $enterpriseName
     *
     * @return $this
     */
    public function setEnterpriseName($enterpriseName)
    {
        $this->requestParameters['EnterpriseName'] = $enterpriseName;
        $this->queryParameters['EnterpriseName'] = $enterpriseName;

        return $this;
    }

    /**
     * @param string $nationCode
     *
     * @return $this
     */
    public function setNationCode($nationCode)
    {
        $this->requestParameters['NationCode'] = $nationCode;
        $this->queryParameters['NationCode'] = $nationCode;

        return $this;
    }

    /**
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->requestParameters['LastName'] = $lastName;
        $this->queryParameters['LastName'] = $lastName;

        return $this;
    }

    /**
     * @param string $loginEmail
     *
     * @return $this
     */
    public function setLoginEmail($loginEmail)
    {
        $this->requestParameters['LoginEmail'] = $loginEmail;
        $this->queryParameters['LoginEmail'] = $loginEmail;

        return $this;
    }

    /**
     * @param string $provinceName
     *
     * @return $this
     */
    public function setProvinceName($provinceName)
    {
        $this->requestParameters['ProvinceName'] = $provinceName;
        $this->queryParameters['ProvinceName'] = $provinceName;

        return $this;
    }

    /**
     * @param string $accountAttr
     *
     * @return $this
     */
    public function setAccountAttr($accountAttr)
    {
        $this->requestParameters['AccountAttr'] = $accountAttr;
        $this->queryParameters['AccountAttr'] = $accountAttr;

        return $this;
    }
}
